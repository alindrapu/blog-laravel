@extends('layouts/main')

@section('container')
  @foreach ($cities as $city)
    <ul>
      <li>
        <h2>
          <a href="cities/{{ $city->slug }}" class="text-decoration-none text-info">{{ $city->name }}</a>
        </h2>
      </li>
    </ul>
  @endforeach
@endsection