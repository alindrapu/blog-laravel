@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    <p>By: <a href="#" class="text-decoration-none text-info">{{ $post->user->name }}</a> from <a href="/cities/{{ $post->city->slug }}" class="text-decoration-none text-info">{{ $post->city->name }}</a></p>
    <img src="img/" alt="">
    {!! $post->body !!}
</article>

<a href="/posts" class="text-decoration-none text-info">back to journeys</a>
@endsection 