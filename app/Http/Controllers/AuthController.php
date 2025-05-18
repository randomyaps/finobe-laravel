<?php
// random 2025
// AuthController, Why not?
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) { 
            // return the profile view.
            $request->session()->regenerate();
            return redirect()->intended('/profile');
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.', // womp womp
        ]);
    }

    public function showRegister()
    {
        return view('auth.register'); // register is so broken
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]); // TODO: actually test this

        Auth::login($user);

        return redirect('/profile');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        // aw..
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
} 