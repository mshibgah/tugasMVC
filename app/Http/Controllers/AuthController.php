<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function daftar(){
        return view('daftar');
    }
    public function selamat(){
        return view('selamat');
    }
    public function nama(Request $request){
        $nama = $request['first']." ".$request['last'];
        return view('selamat', ["nama" => $nama]);
    }
}
