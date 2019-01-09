@extends('layouts.app')
@section('title')
Add
@endsection
@section('content')
<body style="background-image: url(http://tremendouswallpapers.com/wp-content/uploads/2014/12/Luxury-Living-Room-2560x1440.jpg); background-repeat: no-repeat;">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header"  style="background-color: #ff0000;">Tambah Data Kamar</div>
        <div class="card-body">
         <form action="#" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="formGroupExampleInput">Type Kamar</label>
             <input type="text" class="form-control" name="tipe_kamar" id="formGroupExampleInput" 
            placeholder="Type Kamar" style="border-color: #ff0000;" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Harga</label>
            <input type="text" class="form-control" name="harga" id="formGroupExampleInput" 
            placeholder="Harga" style="border-color: #ff0000;" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi_kamar" id="formGroupExampleInput" 
            placeholder="Deskripsi" style="border-color: #ff0000;" required>
          </div>
          
          @csrf
          <button class="btn btn-outline-danger float-right" type="submit" style="border-color: #ff0000;">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
@endsection