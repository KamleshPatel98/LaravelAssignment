<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:100',
            ],
            'email' => [
                'required',
                'email',
                'max:255',
                'unique:users,email',
            ],
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
            ],
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // Automatically login after registration
        Auth::login($user);
        $request->session()->regenerate();
        return to_route('dashboard')->with('success','Account created successfully!');
    }

    public function login()
    {
        if(Auth::check()){
            return to_route('dashboard');
        }
        return view('auth.login');
    }

    public function loginSubmit(Request $request)
    {
        $credentials = $request->validate([
            'email' => [
                'required',
                'email',
                'exists:users,email'
            ],

            'password' => [
                'required',
                'string',
            ],
        ]);

        if (Auth::attempt($credentials)) {
            // Regenerate session after successful login
            $request->session()->regenerate();
            return to_route('dashboard')->with('success', 'Welcome back!');
        }else{
            return back()->with('error', 'Credential are not match!');
        }
    }

    public function dashboard()
    {
        $statics = [
            'products' => Product::count(),
        ];
        return view('panel.dashboard', compact('statics'));
    }

    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect()->route('login')->with('success', 'Logout successfully.');
    }
}
