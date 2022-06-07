<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    //show all post
    public function index()
    {
        return view('cities', [
            "title" => 'cities',
            "cities" => City::all()
        ]);
    }
    //show single city post
    public function show(City $city){
        return view('posts', [
            'title' => $city->name,
            'posts' => $city->posts->load('user'),
        ]);
    }
}
