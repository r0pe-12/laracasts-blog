<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    //
    public function destroy(){
        # code
        \Auth::logout();
        return redirect('/')->with('success', 'Goodbye!');
    }

    public function create(){
        # code
        return view('sessions.create');
    }

    public function store(){
        # code
        $user = \request()->validate([
            'email'=>'required|email|exists:users,email',
            'password'=>'required'
        ]);
        if (\Auth::attempt($user)){
            return redirect('/')->with('success', 'Welcome Back!');
        }
        throw ValidationException::withMessages([
            'email'=>'Credentials you provided could not be verified'
        ]);
//        return back()->withInput()->withErrors(['email'=>'Credentials you provided could not be verified']);
    }
}
