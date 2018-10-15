<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    
   public function viewFacebook(){
       return view('facebook');
   }

    public function normalLogin(Request $request){
        $email=$request->email;
        $password=$request->password;
        $user=new  User;
        try{
            // $user->name=$request->email;
            // $user->email=$request->email;
            // $user->password=$request->password;
            // $user->save(); // returns false
            
         }
         catch(\Exception $e){
            // do task when error
            echo $e->getMessage();   // insert query
         }
         $credentials = $request->only('email', 'password');
         var_dump($credentials);
         exit;

         if (Auth::attempt($credentials, $request->has('remember'))) {
             return ['result' => 'ok'];
         }
 
         return ['result' => 'not ok'];
         
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
