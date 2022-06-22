@extends('layouts.main')

@section('container')
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 id="toptext" class="active">login </h2>

      <!-- Icon -->
      <div class="fadeIn first">
        <p style="color: #0d0d0d;">journeys story</p>
      </div>

      <!-- Login Form -->
      <form>
        <input type="text" id="login" class="fadeIn second" name="login" placeholder="email">
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
        <input type="submit" id="loginButton" class="fadeIn fourth" value="Log In">
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover text-decoration-none" href="/signup">not registered? sign up here</a>
      </div>
    </div>
  </div>
@endsection
