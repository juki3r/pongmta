<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'address' => 'required|string',
            'contact' => 'required|string',
        ]);

        // Detect email or phone
        $contactType = filter_var($request->contact, FILTER_VALIDATE_EMAIL)
            ? 'email'
            : 'phone';

        $appointment = Appointment::create([
            'full_name' => $request->full_name,
            'address' => $request->address,
            'contact' => $request->contact,
            'contact_type' => $contactType,
        ]);

        // 📧 EMAIL
        if ($contactType === 'email') {
            Mail::raw(
                "New Appointment\n\nName: {$appointment->full_name}\nAddress: {$appointment->address}\nContact: {$appointment->contact}",
                function ($message) use ($appointment) {
                    $message->to($appointment->contact)
                        ->subject('Appointment Confirmation - PONG-MTA');
                }
            );
        }

        // 📲 SMS (placeholder)
        if ($contactType === 'phone') {
            // call SMS service here
            // example: SmsService::send($appointment->contact, "Thank you for booking with PONG-MTA");
        }

        return response()->json([
            'success' => true,
            'message' => 'Appointment saved successfully'
        ]);
    }
}
