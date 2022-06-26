@extends('dashboard.layouts.main')

@section('container')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <h1 class="text-center mb-3">{{ $post->title }}</h1>
        <div class="text-center"><a href="/dashboard/posts/" class="btn btn-info text-light"><span
              data-feather="arrow-left"></span> back to posts</a>
          <a href="/dashboard/posts/" class="btn btn-warning text-light"><span data-feather="edit"></span> edit
            post</a>
          <a href="/dashboard/posts/" class="btn btn-danger text-light"><span data-feather="x-circle"></span> delete
            post</a>
        </div>
        <img src="https://source.unsplash.com/1200x600?{{ $post->city->name }}" class="card-img-top image-fluid mt-3"
          alt="{{ $post->city->name }}">
        <article class="my-3"">
          {!! $post->body !!}
        </article>
      </div>
    </div>
  </div>
@endsection
