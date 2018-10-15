<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;


class LoginController extends Controller
{
    
   public function viewFacebook(){
       return view('facebook');
   }

    public function normalLogin(Request $request){
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


    public function facebookLogin(Request $request){
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
