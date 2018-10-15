<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class LoginController extends Controller
{
    
   public function viewFacebook(){
       return view('facebook');
   }

    public function normalLogin(Request $request){
        $email=$request->email;
        $password=$request->password;
        $user=new  User;
        var_dump(User::all());
        exit;
        try{
            $user->name=$request->email;
            $user->email=$request->email;
            $user->password=$request->password;
            $user->save(); // returns false
         }
         catch(\Exception $e){
            // do task when error
            echo $e->getMessage();   // insert query
         }
         exit;
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
