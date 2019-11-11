<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $view='/Users/Account';
        // if(auth()->user()->level=='User'){
        //     $redirectTo = '/Administrator';
            
        // }else{
        //     $view='/Administrator';
        // }
        ///Users/Account'
        return view($view);
    }
}
