<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function proseslogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:50',
            'password' => 'required|min:5',
        ]);
        if(Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard');
        }
        return back()->with('error','Email atau Password Salah');
    }
    
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        dd($request->all());
    }
}