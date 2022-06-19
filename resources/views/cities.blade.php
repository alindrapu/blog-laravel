@extends('layouts/main')

@section('container')
  <div class="list-group">
    <a href="#" class="list-group-item list-group-item-action active">
      Cities Journey
    </a>
    @foreach ($cities as $city)
      <a href="cities/{{ $city->slug }}" class="list-group-item list-group-item-action">{{ $city->name }}</a>
    @endforeach
  </div>
@endsection
