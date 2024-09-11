<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Democlass;

class DemoclassController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|numeric',
            'email' => 'required|email',
            'course' => 'required|string',
            'message' => 'required|string|max:500',
            'city'=>'nullable|string|max:255',
        ]);

        // Create a new enquiry record
        Democlass::create($validatedData);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Enquiry submitted successfully.');
    }
}
