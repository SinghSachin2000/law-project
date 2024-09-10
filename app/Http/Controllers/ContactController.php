<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    function legalnotice(){

        return view('lpnotice');
       }



    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|numeric',
            'email' => 'required|email',
            'message' => 'required|string|max:500',
            'terms' => 'required|accepted',
        ]);

        $validatedData['terms'] = $request->has('terms') ? 1 : 0;

        // Create a new enquiry record
        Contact::create($validatedData);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Enquiry submitted successfully.');
    }
}
