<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;


class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function normalLogin(Request $request){
        var_dump($request);
        exit;
    }
}
