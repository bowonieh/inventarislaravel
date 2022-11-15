<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    //
    public function authenticate(Request $request){
        $data = $request->validate([
            'email'     => ['required','email'],
            'password'  => ['required']
        ]);
        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->intended('gudang');
        }
        //tampilkan pesan error jika gagal login
        return back()->withErrors([
            'email' => 'informasi Kredensial yang dimasukkan tidak cocok'
        ])->onlyInput('email');
    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
    public function loginform(){
        return view('login.login');
    }
}
