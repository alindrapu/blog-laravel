<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\City;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('city')) {
            $city = City::firstWhere('slug', request('city'));
            $title = ' in ' . $city->name;
        }
        if (request('user')) {
            $user = User::firstWhere('name', request('user'));
            $title = ' by ' . $user->name;
        }
        return view('posts', [
            "title" => "journeys" . $title,
            "active" => "journeys",
            "posts" => Post::latest()->filter(request(['search', 'city', 'user']))->paginate(5)
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => $post->title,
            "active" => "journeys",
            "post" => $post
        ]);
    }
}
