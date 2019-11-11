<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Bet;

class BetController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        //this function displays the bets 

    }
}
