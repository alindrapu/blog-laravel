@extends('layouts/main')

@section('container')
  {{-- <div class="list-group">
    <a href="#" class="list-group-item list-group-item-action active">
      Cities Journey
    </a>
    @foreach ($cities as $city)
      <a href="cities/{{ $city->slug }}" class="list-group-item list-group-item-action">{{ $city->name }}</a>
    @endforeach
  </div> --}}

  <div class="container">
    <div class="row justify-content-center">
      @foreach ($cities as $city)
        <div class="col-md-10 mb-4">
          <a href="/posts?city={{ $city->slug }}">
            <div class="card bg-dark text-white">
              <img src="https://source.unsplash.com/1200x600?{{ $city->name }}" class="card-img" alt="{{ $city->name }}">
              <div class="card-img-overlay d-flex align-items-center" style="background-color: rgba(0,0,0,0.3)">
                <h5 class="card-title text-center flex-fill fs-3">{{ $city->name }}</h5>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
@endsection
