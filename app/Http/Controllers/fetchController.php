<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fetch;

class fetchController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($gameId,$Sport,$Home,$Odd,$Nature){
        $user=auth()->user()->email;
        $bets=[$gameId,$Sport,$Home,$Odd,$Nature];
        $bet=new fetch();
        $bet->gameId=$bets[0];
        $bet->Sport=$bets[1];
        $bet->Team=$bets[2];
        $bet->Odd=$bets[3];
        $bet->Outcome=$bets[4];
        $bet->userEmail=$user;
        $bet->save();
        return  back()->with('success','Bet Added to Betslip');
    }
}
