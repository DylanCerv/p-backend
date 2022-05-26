<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{


    public function show(){
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view('auth.login');
    }


    public function login(LoginRequest $request){
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)){
            return redirect()->to('/')->withErrors('auth.failed');
        }
        $email = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($email);

        return $this->authenticated($request, $email);
    }

    public function authenticated(Request $request, $email){
        return redirect('/home');
    }



}
