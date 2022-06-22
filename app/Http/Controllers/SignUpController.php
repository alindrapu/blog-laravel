<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function index()
    {
        return view('signup.index', [
            'title' => 'sign up',
            'active' => 'sign up'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'username' => 'required|unique:users|min:6|max:16',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:32'
        ]);

        dd("registrasi berhasil");
    }
}
