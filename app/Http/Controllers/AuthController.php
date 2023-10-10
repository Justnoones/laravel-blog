<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create ()
    {
        return view('auth.register');
    }

    public function store ()
    {
        $validated_user = request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'username' => ['required', 'min:3', 'max:255', Rule::unique('users', 'username')],
            'email' => ['required', 'email', 'min:3', 'max:255', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:255']
        ]);
        $user = User::create($validated_user);
        auth()->login($user);
        return redirect('/')->with('flash-message', 'Successfully Logged in!');
    }

    public function login ()
    {
        return view('auth.login');
    }

    public function post_login ()
    {
        $formData = request()->validate([
            'email' => ['required', 'email', 'max:255', Rule::exists('users', 'email')],
            'password' => ['required', 'min:8', 'max:255']
        ]);
        if (auth()->attempt($formData)) {
            return redirect()->back()->with('flash-message', 'Successfully Logged in!');
        } else {
            return redirect()->back()->with('flash-message', 'Invalid Credentials! Please try again.');
        }
    }

    public function logout ()
    {
        auth()->logout();
        return redirect('/')->with('flash-message', 'Successfully Logged out!');
    }

}
