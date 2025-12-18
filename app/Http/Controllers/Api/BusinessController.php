<?php

namespace App\Http\Controllers\api;

use App\Models\Business;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class BusinessController extends Controller
{
    public function show(Request $request)
    {
        $user = Auth::user();

        // Fetch business for logged-in user
        $business = Business::where('user_id', $user->id)->first();

        if (!$business) {
            return response()->json(null, 200); // return empty if none
        }

        return response()->json($business);
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'address' => 'required|string|max:255',
            'logo' => 'nullable|image|max:2048', // max 2MB
        ]);

        $business = Business::updateOrCreate(
            ['user_id' => $user->id],
            [
                'name' => $request->name,
                'category' => $request->category,
                'phone' => $request->phone,
                'address' => $request->address,
            ]
        );

        // Handle logo upload
        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('business_logos', 'public');
            $business->logo = $path;
            $business->save();
        }

        return response()->json(['message' => 'Business profile saved successfully']);
    }
}
