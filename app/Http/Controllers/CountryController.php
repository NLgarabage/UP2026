<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function show()
    {
        // $country = Country::find(1);
        // foreach($countries as $country){
        //     dump($country->name);

        //     foreach($country->cities as $city){
        //     dump($city->name);
        //     }
        // }
        $country = Country::with(['city'])->first();
        foreach ($country->cities as $city){
            dump($city);
        }
    }
}
