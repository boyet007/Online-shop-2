<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Input;

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
            'password' => $request->input('password')
        ]);
        $user->save();

        return redirect()->route('product.index');
    }

    public function getSignin(){
        return view('user.signin');
    }

    public function postSignin(Request $request){
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required'
        ]);

        $data = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );
        print_r($data);

        dd(Auth::attempt($data));

        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            return redirect()->route('user.profile');
        }

        return redirect()->back();
    }

    public function getProfile(){
        return view('user.profile');
    }
}
