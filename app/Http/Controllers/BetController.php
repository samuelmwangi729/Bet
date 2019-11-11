<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Bet;

use Illuminate\Support\Facades\DB;

class BetController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        return view('Betslip');

    }
    public function showBets(){
        $email=auth()->user()->email;
        $bets=DB::select('select * from fetches where userEmail = ?', [$email]);
        return json_encode($bets);
    }
}
