<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create () {
        return view('register.create');
    }

    public function store () {
        $validated_user = request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'username' => ['required', 'min:3', 'max:255', Rule::unique('users', 'username')],
            'email' => ['required', 'email', 'min:3', 'max:255', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:255']
        ]);
        User::create($validated_user);
        // session()->flash('flash-message', 'Successfully registered');
        // return redirect('/');
        return redirect('/')->with('flash-message', 'Successfully registered.');
    }
}
