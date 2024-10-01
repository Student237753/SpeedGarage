<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                'regex:/^[A-Z][a-zA-Z\s]*$/'
            ],
            'email' => 'required|email',
            'message' => 'required|string',
        ], [
            'name.regex' => 'The name must start with a capital letter.',
            'email.email' => 'Please provide a valid email address.'
        ]);

        // Save the form data to the database
        Form::create($validatedData);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
