@extends('layouts.admin')
@section('title')
Admin Dasboard
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-left: 100px;margin-right: 100px;margin-right: 100px;margin-top: 100px">
                <div class="card-header text-white text-center" style="background-color: #328BD5;">Admin Dashboard</div>

                <div class="card-body">
                    <center>
                        <h2>Welcome {{Auth::user()->name}}</h2>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection