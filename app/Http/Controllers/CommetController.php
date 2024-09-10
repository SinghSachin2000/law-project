<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
class CommetController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:500',
        ]);

        // Create a new enquiry record
        Comment::create($validatedData);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Enquiry submitted successfully.');
    }
}

