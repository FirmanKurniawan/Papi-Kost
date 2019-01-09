@extends('layouts.admin')
@section('title')
Add User 
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Add Kamar</div>
        <div class="card-body">
         <form action="{{url('kamar/save')}}" method="POST">
          <div class="form-group">
            <label for="formGroupExampleInput">Tipe Kamar</label>
            <input type="text" class="form-control" name="tipe_kamar" id="formGroupExampleInput" 
            placeholder="Tipe Kamar" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Harga</label>
            <input type="text" class="form-control" name="harga" id="formGroupExampleInput" 
            placeholder="Harga" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Deskripsi Kamar</label>
            <input type="text" class="form-control" name="deskripsi_kamar" id="formGroupExampleInput" 
            placeholder="Deskripsi Kamar" required>
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
          @csrf
          <button class="btn btn-outline-success float-right" type="submit">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection