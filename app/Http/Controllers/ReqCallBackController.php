<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReqCallBack;

class ReqCallBackController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'fullName' => 'required|string|max:255',
            'number' => 'required|numeric',
            'email' => 'required|email',
            'course' => 'required|string',
            'city'=>'required|string|max:255',
        ]);

        // Create a new enquiry record
        ReqCallBack::create($validatedData);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Enquiry submitted successfully.');
    }
}
