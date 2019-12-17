<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class testsController extends Controller
{
    public function index(){
        dd(Auth::user()->level);
    }
}
