@extends('layouts/main')

@section('container')
<article>
  @foreach ($posts as $post)
    <h2>
      <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h2>
    <p>{{ $post->excerpt }}</p>
</article>
  @endforeach
@endsection