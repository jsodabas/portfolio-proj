<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request) {

        $fields = $request->validate([
            'firstname' => ['required', 'max:255'],
            'lastname' => ['required', 'max:255'],
            'profile_img' => ['nullable', 'file', 'max:4000', 'mimes:webp,png,jpg'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'min:2', 'confirmed'],
        ]);

        $user = User::create($fields);

        Auth::login($user);

        if (Auth::attempt($fields)) {
            return back()->withErrors([
                'failed' => 'The email or password is incorrect. Please try again.',
            ])->withInput();
        }

        return redirect()->route('profile')->with('message', 'Congratulations! Your account has been created successfully.');
    }

    public function login(Request $request) {
        $fields = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $fields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $fields['email'])->first();

        if (!$user) {
            return back()->withErrors([
                'failed' => 'The email address is not registered. Please try again or sign up.',
            ])->withInput();
        }

        if (!Auth::attempt(['email' => $fields['email'], 'password' => $fields['password']], $request->remember)) {
            return back()->withErrors([
                'failed' => 'The email or password is incorrect. Please try again.',
            ])->withInput();
        }

        return redirect()->route('profile')->with('message', 'Successfully logged in to your account.');
    }

    public function signout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
