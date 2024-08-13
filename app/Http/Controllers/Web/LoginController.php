<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Login view
    public function index(): View
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        // Validation (optional but recommended)
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Attempt to log in with custom username and password
        if ($request['username'] == 'helix') {
            // Authentication passed, redirect to intended page
            return redirect()->intended('dashboard');
        }

        // Authentication failed, redirect back with error message
        return redirect()->back()->withErrors(['username' => 'Invalid credentials provided']);
    }

    public function logout()
    {
        return redirect('/login');
    }
}
