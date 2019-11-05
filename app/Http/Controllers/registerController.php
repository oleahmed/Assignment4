<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function show()
    {
    	return view('user.register');
    }

    public function register()
    {
    	$this->validate(request(),[
    		'name'=>'required|alpha_dash|unique:users,name',
    		'email'=>'required|email',
    		'password'=>'required|confirmed'
    	]);

    	User::create([
    		'name'=>request('name'),
    		'email'=>request('email'),
    		'password'=>bcrypt(request('password'))
    	]);

    	return redirect()->route('login.form.show')->with('regsuc','Successfully Registered');
    }
}
