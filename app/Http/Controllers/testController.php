<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function index(){
        //was to fetch the api data
        // $ch = curl_init();

        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_HEADER, false);

        // $data = [
        //     'sport' => 'soccer',
        //     'country' => 'europe',
        //     'league' => 'soccer-europe-europa-league',
        // ];

        // curl_setopt($ch, CURLOPT_URL, 'https://app.oddsapi.io/api/v1/odds?' . http_build_query($data));



        // curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        //     "Content-Type: application/json",
        //     "apikey: f4b7f540-fa2c-11e9-a8e3-51b3476555d8",
        // ));

        // $response = curl_exec($ch);
        // curl_close($ch);
        return view('Soccer');
    }

}
