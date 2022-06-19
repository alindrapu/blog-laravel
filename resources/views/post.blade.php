@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-8">

            </div>
        </div>
    </div>
    <article>
        <h2 class="text-center">{{ $post->title }}</h2>
        <p>By: <a href="#" class="text-decoration-none text-info">{{ $post->user->name }}</a> from <a
                href="/cities/{{ $post->city->slug }}" class="text-decoration-none text-info">{{ $post->city->name }}</a>
        </p>
        <img src="img/" alt="">
        {!! $post->body !!}
    </article>

    <a href="/posts" class="text-decoration-none text-info">back to journeys</a>
@endsection
