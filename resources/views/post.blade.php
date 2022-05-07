@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    <p>By: Alindra Putra from <a href="/cities/{{ $post->city->slug }}" class="text-decoration-none">{{ $post->city->name }}</a></p>
    <img src="img/" alt="">
    {!! $post->body !!}
</article>

<a href="/posts">back to journeys</a>
@endsection 