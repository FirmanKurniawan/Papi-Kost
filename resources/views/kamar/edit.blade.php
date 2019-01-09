@extends('layouts.app')
@section('title')
Edit
@endsection
@section('content')
<body style="background-image: url(http://tremendouswallpapers.com/wp-content/uploads/2014/12/Luxury-Living-Room-2560x1440.jpg); background-repeat: no-repeat;">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header"  style="background-color: #ff0000;">Edit Data Kamar</div>
        <div class="card-body">
         <form action="#" method="POST" ctype="multipart/form-data">
          <div class="form-group">
            <label for="formGroupExampleInput">Type Kamar</label>
            <input type="text" class="form-control" name="tipe_kamar" id="formGroupExampleInput" 
            placeholder="Nama Hp" value="#" style="border-color: #ff0000;" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Harga</label>
            <input type="text" class="form-control" name="harga" id="formGroupExampleInput" 
            placeholder="Merk Hp" value="#" style="border-color: #ff0000;" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Deskripsi</label>
            <textarea type="text" class="form-control" name="deskripsi_kamar" id="formGroupExampleInput" 
            placeholder="Harga Hp" value="#" style="border-color: #ff0000;" required></textarea>
          </div>
          @csrf
          <input type="hidden" name="id" value="#">
          <button class="btn btn-outline-danger float-right" type="submit" style="border-color: #ff0000;" >Update Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
@endsection