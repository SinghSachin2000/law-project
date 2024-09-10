<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;

class EnquiryController extends Controller
{
    /**
     * Display the enquiry form.
     */
    public function index()
    {
        return view("enquiry"); 
    }

    /**
     * Store the form data in the database.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|numeric',
            'email' => 'required|email',
            'course' => 'required|string',
            'medium' => 'required|string',
            'mode' => 'required|string',
            'message' => 'required|string|max:500',
        ]);

        // Create a new enquiry record
        Enquiry::create($validatedData);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Enquiry submitted successfully.');
    }
}
