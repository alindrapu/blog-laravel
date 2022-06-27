@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ Auth::user()->name }}'s posts</h1>
  </div>
  @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-lg-10" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <div class="table-responsive col-lg-10">
    <a href="/dashboard/posts/create" class="btn btn-success" style="font-size: 0.9rem"><span data-feather="plus"></span>
      create
      new
      post</a>

    <table class="table table-striped table-sm mt-2" style="font-size: 1rem">
      <thead>
        <tr class="bg-dark text-light fw-bold">
          <th scope="col">no</th>
          <th scope="col">title</th>
          <th scope="col">category</th>
          <th scope="col">city</th>
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
          <tr class="bg-info fw-bold">
            <td style="color: aliceblue">{{ $loop->iteration }}</td>
            <td style="color: aliceblue">{{ $post->title }}</td>
            <td style="color: aliceblue">{{ $post->category->name }}</td>
            <td style="color: aliceblue">{{ $post->city->name }}</td>
            <td>
              <a href="/dashboard/posts/{{ $post->slug }}" class="badge badge-pill bg-primary text-light"
                alt="view details">
                <i data-feather="eye"></i>
              </a>
              <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge badge-pill bg-warning text-light"
                alt="edit">
                <span data-feather="edit"></span>
              </a>
              <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge badge-pill bg-danger text-light border-0"
                  onclick="return confirm('do you want to delete this post?')"><span
                    data-feather="x-circle"></span></button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
