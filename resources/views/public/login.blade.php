@extends('layouts.master')

@section('css-imports')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection
@section('content')
<div class="login-box">
    <h2>Login</h2>
    <form method="POST" action="/login" id="login-form">
        @csrf
      <div class="">
        {{-- <label class="dropdown-label" for="cars">Login as :</label> --}}
        {{--  --}}
      </div>
      <div class="user-box">
        <input type="text" name="username" required="">
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" required="">
        <label>Password</label>
      </div>
      <select class="dropdown" name="user_type" id="user_type">
        <option value="-1">--Select user type--</option>
        <option value="0">Admin</option>
        <option value="1">Advisor</option>
        <option value="2">Teacher</option>
        <option value="3">Student</option>
    </select>
      <a href="/login" onclick="event.preventDefault(); document.getElementById('login-form').submit();">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Submit
      </a>
      @foreach ($errors as $error)
        <ul>
          <li style="color: red">{{$error}}</li>
        </ul>
      @endforeach
    </form>
  </div>
@endsection