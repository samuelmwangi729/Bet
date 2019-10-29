<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class LoginController extends Controller
{
    public function index(){
        $dt=new Carbon();
        $time=$dt->toFormattedDateString();
        return view('Login')->with('time',$time);
    }
    public function login($username,$password){
        //handles the file inputsand compares them agains the database
    }
}
