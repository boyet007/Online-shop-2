<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Reguests;
use Auth;

class UserController extends Controller
{
    public function getSignup(){
    	return view('user.signup');
    }

    public function postSignup(Request $request){
    	$this->validate($request, [
    		'email' => 'email|required|unique:users',
    		'password' => 'required|min:4'
    	]);

    	$user = new User([
    		'email' => $request->input('email'), 
    		'password' => bcrypt($request->input('password'))
    	]);

    	$user->save();

    	return redirect()->route('product.index');
    }

    public function getSignin(){
    	return view ('user.signin');
    }

    public function postSignin(Request $request){
    	$this->validate($request, [
    		'email' => 'required',
    		'password' => 'required'
    	]);	

        if(Auth::attempt([
    		'email' => $request -> input('email')]),
    		'password' => $request -> input('password')])){
				return redirect()->route('user.profile');			
		} else {
			return redirect()->back();
		}


    }
}
