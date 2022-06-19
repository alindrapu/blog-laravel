@extends('layouts.main')

@section('container')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <h1 class="text-center mb-3">{{ $post->title }}</h1>
        <p class="text-center">
          By: <a href="/authors/{{ $post->user->name }}"
            class="text-decoration-none text-info">{{ $post->user->name }}</a> from <a
            href="/cities/{{ $post->city->slug }}" class="text-decoration-none text-info">{{ $post->city->name }} </a>
          {{ $post->created_at->diffForHumans() }}
        </p>
        <img src="https://source.unsplash.com/1200x600?{{ $post->city->name }}" class="card-img-top image-fluid"
          alt="{{ $post->city->name }}">
        <article class="my-3"">
          {!! $post->body !!}
        </article>
        <a href="/posts" class="text-decoration-none text-info mb-5">back to journeys</a>
      </div>
    </div>
  </div>
@endsection
