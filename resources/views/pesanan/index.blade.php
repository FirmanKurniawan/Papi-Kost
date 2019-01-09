@extends('layouts.app')
@section('title')

@endsection
@section('content')
<body style="background-image: url(http://tremendouswallpapers.com/wp-content/uploads/2014/12/master-room-1.jpg); background-repeat: no-repeat;" >
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" style="background-color: #ff0000;">Data Pemesan</div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table" id="example">
          <thead>
            <tr style="background-color: #ff1a1a;">
              <th>No</th>
              <th>Nama Kost</th>
              <th>Nomor Kost</th>
              <th>Nama Pemesan</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
                
            <tr>
              <th scope="row">#</th>
              <td>#</td>
              <td>#</td>
              <td>#</td>

              <td>
                <a href="{{url('/kamar/edit')}}" class="btn btn-outline-warning btn-sm">Edit</a>
                 <a href="#" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                 class="btn btn-outline-danger btn-sm">Delete</a>
              </td>

            </tr>
          
          </tbody>
        </table>
        </div>
        <hr>
      </div>
    </div>
  </div>
</div>
</div>
</body>
@endsection