<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(City $city)
    {
        return view('cities', [
            "title" => $city,
            "posts" => City::all()
        ]);
    }
}
