<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store()
    {
        //validate input
        //Authorization
        //regenerate for safety
        //redirect
        $validatedAttributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (! Auth::attempt($validatedAttributes)) {
            throw ValidationException::withMessages([
                'email' => 'Invalid Credentials'
            ]);
            //BUG SOMEWHERE HERE
        }

        request()->session()->regenerate();

        return redirect('/jobs');
    }
    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
