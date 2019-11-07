<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TennisController extends Controller
{
    public function index(){
        return view('tennis');
    }
}
