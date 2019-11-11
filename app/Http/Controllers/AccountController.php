<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bet;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $email=auth()->user()->email;
        $betsCount=DB::select('select count(id) from fetches where userEmail = ?', [$email]);
        $view='/Users/Account';
        return view($view)->with('BetsCount',$betsCount);
    }
}
