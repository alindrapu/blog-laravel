@extends('layouts.main')

@section('container')
{{-- kode untuk melakukan login --}}
  <div class="wrapper fadeInDown">
    {{-- flash messages --}}
    @if (session()->has('success'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    @if (session()->has('loginError'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    @if (session()->has('loggedOut'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('loggedOut') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    {{-- end of flash messages --}}

    {{-- login form --}}
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 id="toptext" class="active">login </h2>

      <!-- Icon -->
      <div class="fadeIn first">
        <p style="color: #0d0d0d;">journeys story</p>
      </div>

      <!-- Login Form -->
      <form action="/login" method="POST">
        @csrf
        <input type="email" id="email" class="fadeIn second @error('email') is-invalid @enderror" name="email"
          placeholder="email" autofocus required value="{{ old('email') }}">
        @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <input type="password" id="password" class="fadeIn third @error('password') is-invalid @enderror" name="password"
          placeholder="password" required>
        @error('password')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <input type="submit" id="loginButton" class="fadeIn fourth" value="Log In">
      </form>

      <!-- register -->
      <div id="formFooter">
        <a class="underlineHover text-decoration-none" href="/signup">not registered? sign up here</a>
      </div>
    </div>
    {{-- end of login form --}}
  </div>
@endsection
