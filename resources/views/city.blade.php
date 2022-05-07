@extends('layouts/main')

@section('container')
<h1>{{ $city }}</h1>
@foreach ($posts as $post)
  <article>
    <h2>
      <a href="/posts/{{ $post->slug }} class="text-decoration-none"">{{ $post->title }}</a>
    </h2>
    <p>{{ $post->excerpt }}</p>
  </article>
  @endforeach
@endsection