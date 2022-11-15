<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OtentikasiController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth:web',[]);
    }
    public function authenticate(Request $request){
        $data = $request->validate(
            [
                'email' => ['required','email'],
                'password' => ['required']
            ]
        );
       
        if(Auth::attempt($data)){
            //Berhasil Login
            $request->session()->regenerate();
            return redirect()->intended('gudang');
        }else{

        }
    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
    public function formlogin(){
        return view('login.login');
    }
}
