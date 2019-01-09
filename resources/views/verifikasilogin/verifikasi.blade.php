@extends('layouts.app');
@section('title')
Admin Dasboard
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menunggu Verifikasi</div>

                <div class="card-body">
                    <center>
                        <h2>Welcome , {{Auth::user()->username}}</h2>
                        <hr>
                        <h6>Silahkan tunggu akun anda di verifikasi</h6>
                        <hr>
                    </center>
                <footer class="footer float-right">Copyright &copy 2018 by Papi-Kost</footer>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
