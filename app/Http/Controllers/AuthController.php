<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:web',['except'=>['login']]);
    }
    public function login(Request $request){
        $request->validate([
            'username'  => 'required',
            'password'  => 'required'
        ]);
        $credentials = $request->only('username','password');
        $login = Auth::attempt($credentials);
        if($login){
            echo "berhasil login";
        }else{
            echo "gagal login";
        }

    }
    public function logout(){
        Auth::logout();
        return redirect('login','302');
    }
}
