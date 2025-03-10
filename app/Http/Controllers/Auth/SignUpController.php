<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\SignUpRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class SignUpController extends Controller
{
    public function show(){
        return view('pages.auth.sign-up');
    }

    public function signUp(SignUpRequest $request){
        // dapatkan dulu request dari form request
        // tambahkan password dengan method bcrypt / hash
        // tambahkan picture dummy sesuai dengan username
        // create user berdasarkan request yang sudah tervalidasi dan yang sudah diproses
        // jika create berhasil, direct user untuk login di page login
        // jika tidak berhasil maka return 500

        $validated = $request->validated();
        $validated['password'] = bcrypt($validated['password']);
        $validated['picture'] = config('app.avatar_generator_url').$validated['username'];
        $create = User::create($validated);
        $created = $create;
        
        if ($create == $created){
            // Auth::signUp($create);
            return redirect()->route('login.login');
        }

        return abort(500);
    }
}
