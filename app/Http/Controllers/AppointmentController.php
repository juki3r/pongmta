<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        // ✅ Validate input
        $request->validate([
            'full_name' => 'required|string|max:255',
            'address'   => 'required|string',
            'contact'   => 'required|string|max:255',
        ]);

        // ✅ Detect contact type
        $isEmail = filter_var($request->contact, FILTER_VALIDATE_EMAIL);
        $contactType = $isEmail ? 'email' : 'phone';

        // ✅ Save to database
        $appointment = Appointment::create([
            'full_name'    => $request->full_name,
            'address'      => $request->address,
            'contact'      => $request->contact,
            'contact_type' => $contactType,
        ]);

        /*
    |--------------------------------------------------------------------------
    | 📧 EMAIL NOTIFICATIONS
    |--------------------------------------------------------------------------
    */
        if ($isEmail) {
            try {
                // Email to CLIENT
                Mail::raw(
                    "Hello {$appointment->full_name},\n\n" .
                        "Thank you for booking an appointment with PONG-MTA Technology Solutions.\n\n" .
                        "📌 Appointment Details:\n" .
                        "Name: {$appointment->full_name}\n" .
                        "Address: {$appointment->address}\n" .
                        "Contact: {$appointment->contact}\n\n" .
                        "Our team will contact you shortly.\n\n" .
                        "— PONG-MTA Technology Solutions",
                    function ($message) use ($appointment) {
                        $message->to($appointment->contact)
                            ->subject('Appointment Confirmation - PONG-MTA');
                    }
                );

                // Email to ADMIN
                Mail::raw(
                    "🚨 New Appointment Received\n\n" .
                        "Name: {$appointment->full_name}\n" .
                        "Address: {$appointment->address}\n" .
                        "Contact: {$appointment->contact}\n",
                    function ($message) {
                        $message->to('ajcpisonet@gmail.com')
                            ->subject('New Appointment - PONG-MTA');
                    }
                );
            } catch (\Exception $e) {
                Log::error('Email sending failed: ' . $e->getMessage());
            }
        }

        /*
    |--------------------------------------------------------------------------
    | 📲 SMS NOTIFICATION
    |--------------------------------------------------------------------------
    */
        if ($contactType === 'phone') {
            try {
                // Example (replace with real SMS service)
                // SmsService::send(
                //     $appointment->contact,
                //     "Thank you {$appointment->full_name}! Your appointment with PONG-MTA has been received."
                // );

            } catch (\Exception $e) {
                Log::error('SMS sending failed: ' . $e->getMessage());
            }
        }

        // ✅ JSON response for AJAX
        return response()->json([
            'success' => true,
            'message' => 'Appointment booked successfully. We will contact you soon.'
        ]);
    }
}
