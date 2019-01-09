@extends('layouts.app')
@section('title')
Add
@endsection
@section('content')
<body style="background-image: url(http://hdlatestwallpaper.com/wp-content/uploads/2017/11/Living-room-with-fireplace-interior-HD-wallpaper.jpg); background-repeat: no-repeat;">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" style="background-color: #ff0000;">Masukkan Saran</div>
        <div class="card-body">
         <form action="{{url('/hp/data/hp/save')}}" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="formGroupExampleInput">Nama</label>
             <input type="text" class="form-control" name="nama" id="formGroupExampleInput" 
            placeholder="Nama" style="border-color: #ff0000;" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="formGroupExampleInput" 
            placeholder="Alamat" style="border-color: #ff0000; " required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Nomor HP</label>
            <input type="text" class="form-control" name="telepon" id="formGroupExampleInput" 
            placeholder="Nomor HP" style="border-color: #ff0000; " required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Email</label>
            <input type="email" class="form-control" name="email" id="formGroupExampleInput" 
            placeholder="Email" style="border-color: #ff0000; " required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Deskripsi</label>
            <textarea type="text" class="form-control" name="deskripsi" id="formGroupExampleInput" placeholder="Deskripsi" style="border-color: #ff0000;" required></textarea>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Gambar</label>
            <input type="file" class="form-control" name="gambar" id="formGroupExampleInput" placeholder="Gambar" style="border-color: #ff0000;" required>
          </div>
          @csrf
          <button class="btn btn-danger float-right" type="submit" style="border-color: #ff0000;">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</body>
@endsection