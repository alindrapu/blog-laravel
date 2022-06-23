@extends('layouts.main')

@section('container')
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 id="toptext" class="active">sign up </h2>

      <!-- Icon -->
      <div class="fadeIn first">
        <p style="color: #0d0d0d;">journeys story</p>
      </div>

      <!-- Sign Up Form -->
      <form action="/signup" method="POST">
        @csrf
        <input type="text" id="name" class="fadeIn first @error('name') is-invalid @enderror" name="name"
          placeholder="full name" required value="{{ old('name') }}">
        @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <input type="text" id="username" class="fadeIn second @error('username') is-invalid @enderror" name="username"
          placeholder="username" required value="{{ old('username') }}">
        @error('username')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <input type="email" id="email" class="fadeIn third @error('email') is-invalid @enderror" name="email"
          placeholder="email" required value="{{ old('email') }}">
        @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <input type="password" id="password" class="fadeIn third @error('password') is-invalid @enderror" name="password"
          placeholder="password" required>
        @error('password')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <input type="submit" id="loginButton" class="fadeIn fourth" value="Sign Up">
      </form>

      <!-- reminder -->
      <div id="formFooter">
        <a class="underlineHover text-decoration-none" href="/login">already registered? login here</a>
      </div>
    </div>
  </div>
@endsection
