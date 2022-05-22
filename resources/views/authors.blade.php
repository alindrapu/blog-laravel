@extends('layouts/main')

@section('container')
  @foreach ($posts as $post)
    <article class="mb-5 border-bottom">
      <h2>
        <a href="/authors/{{ $post->user->id }}" class="text-decoration-none text-info">{{ $post->title }}</a>
      </h2>
      <p>By: <a href="/authors/{{ $post->user->id }}" class="text-decoration-none text-info">{{ $post->user->name }}</a> from <a href="/cities/{{ $post->city->slug }}" class="text-decoration-none text-info">{{ $post->city->name }}</a></p>
      <p>{{ $post->excerpt }}</p>
      <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-info">read more...</a>
    </article>
  @endforeach
@endsection