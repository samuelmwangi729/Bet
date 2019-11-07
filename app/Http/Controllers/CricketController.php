<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CricketController extends Controller
{
    public function index(){
        return view('cricket');
    }
}
