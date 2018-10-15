<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class RegistrationController extends Controller
{
    public function normalRegister(Request $request){
        $email=$request->email;
        $password=$request->password;
       $user= User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

        Auth::attempt($user);
        return redirect('/');
    }


    public function facebookRegister(Request $request){
        $email=$request->email;
        $password=$request->password;
       $user= User::create([
            'name'=>$request->email,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

        Auth::attempt($user);
        return redirect('/');
    }
    
}
