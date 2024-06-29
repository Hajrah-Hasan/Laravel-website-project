<?php

namespace App\Http\Controllers;
use App\Models\hello;

use Illuminate\Http\Request;

class HelloController extends Controller

{
    public function showSignupForm()
    {
        return view('hello');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:hellos,email',
        ]);

        // Create new user
        $hello = new Hello();
        $hello->email = $request->email;
        $hello->save();

        // Redirect with success message
        return redirect()->back()->with('success', 'Your request has been accepted.');
    }
}
