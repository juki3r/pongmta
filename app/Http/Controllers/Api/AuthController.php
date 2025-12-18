<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PongMtaUser;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    // Register new user
    public function register(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'mobile_number' => 'required|string|unique:pong_mta_users',
            'password' => 'required|string|min:6|confirmed', // password_confirmation field
        ]);

        $user = PongMtaUser::create([
            'fullname' => $request->fullname,
            'address' => $request->address,
            'mobile_number' => $request->mobile_number,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'User registered successfully',
            'data' => $user,
        ]);
    }

    // Login user
    public function login(Request $request)
    {
        $request->validate([
            'mobile_number' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = PongMtaUser::where('mobile_number', $request->mobile_number)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid mobile number or password',
            ], 401);
        }

        // Check if mobile is verified
        if (!$user->mobile_verified) {
            // Generate OTP
            $otp = rand(100000, 999999);
            $user->otp = $otp;
            $user->otp_expires_at = Carbon::now()->addMinutes(5); // OTP valid for 5 minutes
            $user->save();

            // Here you would send OTP via SMS using your provider
            // sendOtp($user->mobile_number, $otp);

            return response()->json([
                'success' => false,
                'message' => 'Mobile number not verified. OTP sent.',
                'data' => [
                    'mobile_number' => $user->mobile_number,
                    'otp_sent' => true,
                ],
            ], 403);
        }

        // If mobile is verified, login success
        return response()->json([
            'success' => true,
            'message' => 'Login successful',
            'data' => $user,
        ]);
    }
}
