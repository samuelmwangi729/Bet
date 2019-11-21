<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function index(){
        // was to fetch the api data
        // $ch = curl_init();

        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_HEADER, false);

        // $data = [
        //     'sport' => 'soccer',
        //     'country' => 'europe',
        //     'league' => 'soccer-europe-europa-league',
        // ];

        // curl_setopt($ch, CURLOPT_URL, 'http://prematch.lsports.eu/OddService/GetFixtures?username=samuelmwangi729%40gmail.com&password=dfwe43&guid=86943baf-94f0-4dbb-b3c0-9538831e781f');



        // curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        //     "Content-Type: application/json"
        // ));

        // $response = curl_exec($ch);
        // curl_close($ch);
        return view('Soccer');
    }

}
