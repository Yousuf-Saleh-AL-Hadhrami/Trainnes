<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyCustomLogin extends Controller
{
    public function login(Request $request){

        if(Auth::attempt(["id" => $request->id , "password" => $request->password ])){
          
          return redirect()->route('home');
        }

        return "Failed to Login";
    }
}
