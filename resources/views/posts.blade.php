@extends('layouts/main')

@section('container')
  <h1 class="text-center">{{ $title }}</h1>

  {{-- hero --}}
  @if ($posts->count())
    <div class="card mb-3">
      <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->city->name }}" class="card-img-top"
        alt="{{ $posts[0]->city->name }}">
      <div class="card-body text-center text-dark">
        <h3 class="card-title text-decoration-none text-info"><a href="/posts/{{ $posts[0]->slug }}"
            class="text-decoration-none text-info">{{ $posts[0]->title }}</a></h3>
        <p>
          <small class="text-dark">
            By: <a href="/authors/{{ $posts[0]->user->name }}"
              class="text-decoration-none text-info">{{ $posts[0]->user->name }}</a> from <a
              href="/cities/{{ $posts[0]->city->slug }}"
              class="text-decoration-none text-info">{{ $posts[0]->city->name }} </a>
            {{ $posts[0]->created_at->diffForHumans() }}
          </small>
        </p>
        <p class="card-text text-dark">{{ $posts[0]->excerpt }}</p>
        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-info btn btn-light">read
          more...</a>
      </div>
    </div>
  @else
    <p class="text-center">No posts found.</p>
  @endif
  {{-- end-of-hero --}}

  {{-- posts card --}}
  <div class="container">
    <div class="row">
      @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-5">
          <div class="card">
            <div class="position-absolute px-2 py-1" style="background-color: rgba(0, 0, 0, 0.4)"><a
                class="text-decoration-none text-white"
                href="/cities/{{ $post->city->slug }}">{{ $post->city->name }}</a></div>
            <img src="https://source.unsplash.com/500x400?{{ $post->city->slug }}" class="card-img-top"
              alt="{{ $post->city->name }}">
            <div class="card-body">
              <h5 class="card-title text-info">{{ $post->title }}</h5>
              <p>
                <small class="text-dark">
                  By: <a href="/authors/{{ $post->user->name }}"
                    class="text-decoration-none text-info">{{ $post->user->name }}
                  </a>{{ $post->created_at->diffForHumans() }}
                </small>
              </p>
              <p class="card-text text-dark">{{ $post->excerpt }}</p>
              <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-info btn btn-light">read
                more...</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  {{-- end-of-post-card --}}
@endsection
