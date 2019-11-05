<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
     public function show()
    {
    	return view('user.login');
    }


    public function login()
    {
    		$this->validate(request(),[
    		'name'=>'required',
    		'password'=>'required'
    	]);

    	if(Auth::attempt(['name'=>request('name'), 'password'=>request('password')])){
    		return redirect()->route('form');

    	}else{
    		return 'moja nao';
    	}
    }


    public function logout()
    {
    	Auth::logout();
    	return redirect()->route('login.form.show');
    }
}
