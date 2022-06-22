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
        <input type="text" id="name" class="fadeIn second" name="name" placeholder="full name">
        <input type="text" id="username" class="fadeIn second" name="username" placeholder="username">
        <input type="email" id="email" class="fadeIn third" name="email" placeholder="email">
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
        <input type="submit" id="loginButton" class="fadeIn fourth" value="Sign Up">
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover text-decoration-none" href="/login">already registered? login here</a>
      </div>
    </div>
  </div>
@endsection
