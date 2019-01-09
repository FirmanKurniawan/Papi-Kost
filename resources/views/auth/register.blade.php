@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <head>
            <link href="{{ asset('css/login.css') }}" rel="stylesheet">
        </head
        <div class="col-md-8">
                
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
<div id="form" style="margin-top: 23px; background:rgba(255, 79, 79);">
<div class="logo">
<h1 class="text-center head">Register</h1>
</div>
        <div class="form-item">
            <p class="formLabel" ></p>
            <input type="text" name="name" id="name" class="form-style" placeholder="Nama"  style=" background:rgba(0,0,0,0.50);"/>
        </div>
        <div class="form-item">
            <p class="formLabel"></p>
            <input type="email" name="email" id="email" class="form-style" placeholder="Email" style=" background:rgba(0,0,0,0.50);"/>
        </div>
        <div class="form-item">
            <p class="formLabel"></p>
            <input type="password" name="password" id="password" class="form-style" placeholder="Password" style=" background:rgba(0,0,0,0.50);"/>
        </div>  
        <div class="form-item">
            <p class="formLabel"></p>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-style" placeholder="Confirm Password" style=" background:rgba(0,0,0,0.50);"/>
        </div><br>
        <p><a href="{{ route('login') }}" ><small>Login</small></a></p>
        <div class="form-item">
        <input type="submit" class="login pull-right" value="Register" style="color: #ff1a1a">
        <div class="clear-fix"></div>
        </div>                     
</div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                               
                            </div>
                        </div>
                    </form>
                </div>
            
        </div>
    </div>
</div>
@endsection
