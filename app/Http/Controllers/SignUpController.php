<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;




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
        $validatedData = $request->validate([
            'name' => ['required', 'max:20'],
            'username' => ['required', 'unique:users', 'min:6', 'max:16'],
            'email' => ['required'],
            'password' => ['required', 'min:8']
        ]);


        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        //flash message
        return redirect('/login')->with('success', 'successfully signed up! please login.');
    }
}
