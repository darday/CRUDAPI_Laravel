<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request){
        $credentials = $request->only('email','password');  //accede unicamente al arreglo con los parametros que solicitamoss

        //verificar que exista una coincidencia 
        if(Auth::attempt($credentials)){
            //Creeamos Token
            //$token = Auth::user()->createToken(Auth::id());
        }

    }
}
