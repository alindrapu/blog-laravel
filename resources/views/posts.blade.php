@extends('layouts/main')

@section('container')
  <h1 class="text-center mb-3">{{ $title }}</h1>

  {{-- search bar --}}
  {{-- untuk menampilkan search bar di atas --}}
  <div class="row justify-content-center mb-3">
    <div class="col-md-8">
      <form action="/posts">
        @if (request('city'))
          <input type="hidden" name="city" value="{{ request('city') }}">
        @endif
        @if (request('user'))
          <input type="hidden" name="user" value="{{ request('user') }}">
        @endif
        <div class="input-group mb-3">
          <input id="searchBar" type="text" class="form-control text-align-left" placeholder="search post"
            name="search" value="{{ request('search') }}">
          <button id="searchButton" class="btn btn-info" type="submit"><i class="bi bi-search"></i></button>
        </div>
      </form>
    </div>
  </div>
  {{-- end of search bar --}}

  {{-- hero --}}
  {{-- untuk menampilkan hero yang merupakan post terbaru pada blog ini --}}
  @if ($posts->count())
    <div class="card mb-3 bg-dark">
      @if ($posts[0]->image)
        <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top"
          style="max-height: 450px; overflow:hidden" alt="{{ $posts[0]->city->name }}">
      @else
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->city->name }}" class="card-img-top"
          alt="{{ $posts[0]->city->name }}">
      @endif

      <div class="card-body text-center text-white">
        <h3 class="card-title text-decoration-none text-info"><a href="/posts/{{ $posts[0]->slug }}"
            class="text-decoration-none text-info">{{ $posts[0]->title }}</a></h3>
        <p>
          <small class="text-white">
            By: <a href="/posts?user={{ $posts[0]->user->name }}"
              class="text-decoration-none text-info">{{ $posts[0]->user->name }}</a> from <a
              href="/posts?city={{ $posts[0]->city->slug }}"
              class="text-decoration-none text-info">{{ $posts[0]->city->name }} </a>
            {{ $posts[0]->created_at->diffForHumans() }}
          </small>
        </p>
        <p class="card-text text-white">{{ $posts[0]->excerpt }}</p>
        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-info btn btn-light">read
          more...</a>
      </div>
    </div>
    {{-- end-of-hero --}}


    {{-- posts card --}}
    {{-- untuk menampilkan card kecil poat --}}
    <div class="container">
      <div class="row">
        @foreach ($posts->skip(1) as $post)
          <div class="col-md-4 mb-5">
            <div class="card bg-dark">
              <div class="position-absolute px-2 py-1" style="background-color: rgba(0, 0, 0, 0.4)"><a
                  class="text-decoration-none text-white"
                  href="/posts?city={{ $post->city->slug }}">{{ $post->city->name }}</a></div>
              <img src="https://source.unsplash.com/500x400?{{ $post->city->slug }}" class="card-img-top"
                alt="{{ $post->city->name }}">
              <div class="card-body">
                <h5 class="card-title text-info">{{ $post->title }}</h5>
                <p>
                  <small class="text-white">
                    By: <a href="/posts?user={{ $post->user->name }} "
                      class="text-decoration-none text-info">{{ $post->user->name }}
                    </a> - {{ $post->created_at->diffForHumans() }}
                  </small>
                </p>
                <p class="card-text text-white">{{ $post->excerpt }}</p>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-info btn btn-light">read
                  more...</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      {{ $posts->links() }}
    </div>
    {{-- end-of-post-card --}}
  @else
    <p class="text-center">No posts found.</p>
  @endif

@endsection
