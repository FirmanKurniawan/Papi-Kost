@extends('layouts.admin')
@section('title')
Edit User
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Edit User</div>
        <div class="card-body">
         <form action="{{url('admin/datauser/update')}}" method="POST">
          <div class="form-group">
            <label for="formGroupExampleInput">Username</label>
            <input type="text" class="form-control" name="name" id="formGroupExampleInput" 
            placeholder="Username" value="{{$user->name}}" required>
          </div>

          <div class="form-group">
            <label for="formGroupExampleInput">Status</label>
            <select class="form-control" name="status" required>
              <option value="1">Aktif</option>
              <option value="2">Tidak Aktif</option>
            </select>
          </div>
          @csrf
          <input type="hidden" name="id" value="{{$user->id}}">
          <button class="btn btn-outline-success float-right" type="submit">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection