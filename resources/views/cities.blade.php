@extends('layouts/main')

@section('container')
  <div class="container">
    <div class="row justify-content-center ">
      @foreach ($cities as $city)
        <div class="col-md-4 mb-4">
          <a href="/posts?city={{ $city->slug }}">
            <div class="card bg-dark text-white">
                {{-- source gambar diambil dari unsplash.com yang otomatis mencari gambar yang sesuai dengan nama kota --}}
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
