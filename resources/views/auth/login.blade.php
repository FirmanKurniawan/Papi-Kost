@extends('layouts.app')

@section('content')
 <head>
    <link href="{{ asset('css/login1.css') }}" rel="stylesheet">
</head>
<form method="POST" action="{{ route('login') }}">
                    @csrf
<div class="vid-container">
  <div class="inner-container">
    <div class="box">
      <h1>Login</h1>
      <input type="email" name="email" placeholder="Email"/>
      <input type="password" name="password" placeholder="Password"/>
      <button type="submit">Login</button>
    </div>
  </div>
</div>
</form>


@endsection
