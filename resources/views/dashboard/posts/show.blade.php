@extends('dashboard.layouts.main')

@section('container')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <h1 class="text-center mb-3">{{ $post->title }}</h1>
        <div class="text-center"><a href="/dashboard/posts/" class="btn btn-info text-light"><span
              data-feather="arrow-left"></span> back to posts</a>
          <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning text-light"><span
              data-feather="edit"></span> edit
            post</a>
          <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger text-light d-inline border-0"
              onclick="return confirm('do you want to delete this post?')"><span data-feather="x-circle"></span> delete
              post</button>
          </form>
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
