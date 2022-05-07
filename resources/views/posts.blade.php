@extends('layouts/main')

@section('container')
@foreach ($posts as $post)
<article class="mb-5 border-bottom">
    <h2>
      <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
    </h2>
    <p>By: Alindra Putra from <a href="/cities/{{ $post->city->slug }}" class="text-decoration-none">{{ $post->city->name }}</a></p>
    <p>{{ $post->excerpt }}</p>
    <a href="/posts/{{ $post->slug }}" class="text-decoration-none">read more...</a>
  </article>
  @endforeach
@endsection