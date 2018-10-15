<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class LogoutController extends Controller
{

    public function logout(){
        Auth::logout(); // log the user out of our application   
        return redirect('/');

    }
}
