<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RugbyController extends Controller
{
    //display the rugby page
    public function index(){
        return view('rugby');
    }
}
