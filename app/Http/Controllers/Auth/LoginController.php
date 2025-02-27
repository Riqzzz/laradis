<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Request\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        return view('pages.auth.login');
    }

    public function login(LoginRequest $request){
        $credentials = $request->validated();

        if(Auth::attempt($credentials)){
            return redirect()->route('discussions.index');
        }

        return redirect()->back()->withErrors(['$credentials' => 'Email or Password Incorrect'])->withInput();
    }
}
