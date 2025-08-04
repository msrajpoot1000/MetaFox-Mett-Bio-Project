<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class StudentAuthController extends Controller
{
    /* ---------- Views ---------- */
    public function showRegister() { return view('auth.student-register'); }
    public function showLogin()    { return view('auth.student-login'); }

    /* ---------- Register ---------- */
    public function register(Request $request)
    {
        $request->validate([
            'signupname'  => 'required|string|max:255',
            'signupemail' => 'required|email|unique:users,email',
            'signuppassword' => ['required', 'confirmed', Password::defaults()],
        ]);

        $user = User::create([
            'name'     => $request->signupname,
            'email'    => $request->signupemail,
            'password' => bcrypt($request->signuppassword),
            'role'     => 'student',
        ]);

        Auth::login($user);

        return redirect('/');   // लॉगिन के बाद वेबसाइट होम
    }

    /* ---------- Login ---------- */
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'), $request->filled('rememberlogin'))) {
            // Admin logged in via student form? तब भी admin route middleware संभालेगा
            return redirect()->intended('/');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }
}