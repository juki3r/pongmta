<?php

namespace App\Http\Controllers\api;

use App\Models\Business;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BusinessController extends Controller
{
    public function get(Request $request)
    {
        $business = Business::where('user_id', $request->user()->id)->first();
        return response()->json($business);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'category' => 'nullable|string',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'logo' => 'nullable|image',
            'cover_image' => 'nullable|image',
        ]);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }
        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')->store('covers', 'public');
        }

        $business = Business::updateOrCreate(
            ['user_id' => $request->user()->id],
            $data
        );

        return response()->json($business);
    }
}
