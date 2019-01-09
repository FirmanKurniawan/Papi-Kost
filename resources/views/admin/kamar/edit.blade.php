@extends('layouts.admin')
@section('title')
Edit Kamar
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header bg-danger" style="background-color: #e3f2fd;">Edit Kamar</div>
        <div class="card-body">
         <form action="{{url('kamar/update')}}" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="formGroupExampleInput">Tipe Kamar</label>
            <input type="text" class="form-control" name="tipe_kamar" id="formGroupExampleInput" 
            placeholder="Tipe Kamar" value="{{$kamar->tipe_kamar}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Harga</label>
            <input type="number" class="form-control" name="harga" id="formGroupExampleInput" 
            placeholder="Harga" value="{{$kamar->harga}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Deskripsi Kamar</label>
            <input type="text" class="form-control" name="deskripsi_kamar" id="formGroupExampleInput" 
            placeholder="Deskripsi Kamar" value="{{$kamar->deskripsi_kamar}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Diskon</label>
            <select class="form-control" name="diskon" required>
              <option value="10">10%</option>
              <option value="20">20%</option>
              <option value="30">30%</option>
              <option value="40">40%</option>
              <option value="50">50%</option>
              <option value="60">60%</option>
              <option value="70">70%</option>
              <option value="80">80%</option>
              <option value="90">90%</option>
              <option value="100">100%</option>
            </select>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Hasil</label>
            <input type="text" class="form-control" name="deskripsi" id="formGroupExampleInput" 
            placeholder="Hasil" value="{{$kamar->harga * $kamar->diskon / 100}}" required>
          </div>
          @csrf
          <input type="hidden" name="id" value="{{$kamar->id}}">
          <button class="btn btn-outline-success float-right" type="submit">Update Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection