<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MyCustomLogin extends Controller
{
    public function login(Request $request){

        // if(Auth::attempt(["id" => $request->id , "password" => $request->password ])){
          
        //   return redirect()->route('home');
        // }

       $user = User::where('id', $request->id)
                     ->orWhere('email', $request->id )->first();

if ($user && Hash::check($request->password, $user->password)) {
    
  Auth::login($user);

  return redirect()->route('home');
   
} else {
   return 'Failed to login';
}

    }
}
