<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function create(){
        # code
        return view('register.create');
    }

    public function store(){
        # code
        $user = \request()->validate([
            'name'=>'required|max:255|min:3',
            'username'=>'required|max:255|min:3|unique:users,username',
            'email'=>'required|max:255|email|unique:users,email',
            'password'=>'required|max:255|min:7',
        ]);

        User::create($user);
//        session()->flash('success', 'Your account has been created');
        return \redirect('/')->with('success', 'Your account has been created');
    }
}
