@extends('layouts.main')

@section('container')
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 class="active"> Sign In </h2>
      <h2 class="inactive underlineHover">Sign Up </h2>

      <!-- Icon -->
      <div class="fadeIn first">
        <p style="color: #0d0d0d;">Journeys Story</p>
      </div>

      <!-- Login Form -->
      <form>
        <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
        <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
        <input type="submit" class="fadeIn fourth" value="Log In">
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
      </div>

    </div>
  </div>
@endsection
