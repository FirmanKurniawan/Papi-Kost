<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Tambah Kost</title>
  <!-- plugins:css -->
   <link rel="stylesheet" href="{{ asset('css/iconfonts/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{asset('css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('images/papi-kost.png')}}" />
</head>
<body>
  <div id="app">
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background-color: #ff6666;">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="background: linear-gradient(to right, #ff9966 0%, #ff6666 100%);">
<!--         <a class="navbar-brand brand-logo" href="#"><img src="{{ asset('images/papi-kost.png')}}" style="width: 100px;" alt="logo"/></a> -->
<h3 style="color: white; font:"> Papi Kos</h3>
<!--         <a class="navbar-brand brand-logo-mini" href="#"><img src="images/logo-mini.svg" alt="logo"/></a> -->
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="images/faces/face1.jpg" alt="image">
                <span class="availability-status online"></span>             
              </div>
              <div class="nav-profile-text">
               <p class="mb-1 text-black"></p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-cached mr-2 text-success"></i>
                Activity Log
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-logout mr-2 text-primary"></i>
                Signout
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas " style="background: linear-gradient(to right, #ff9966 0%, #ff6666 100%);" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('kost/index') }}">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('kost/index') }}">
              <span class="menu-title">Tambah Kost</span>
              <i class="mdi mdi-table-large menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('kamar/index') }}">
              <span class="menu-title">Tambah Kamar</span>
              <i class="mdi mdi-table-large menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('akun/index') }}">
              <span class="menu-title">Kelola Akun</span>
              <i class="mdi mdi-contacts menu-icon"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <!-- tempat add -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header bg-gradient-danger text-black ">Daftar Kost</div>
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama Kost</th>
                      <th scope="col">Jumlah Kamar</th>
                      <th scope="col">Alamat Kost</th>
                      <th scope="col">Kontak Kost</th>
                      <th scope="col">Wilayah Kost</th>
                      <th colspan="2">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i= 1;
                    $kost = \App\Kost::all();
                    ?>
                    @foreach($kamar as $q)
                    <tr>
                      <th scope="row">{{$i++}}</th>
                      <td>{{$q->nama_kost}}</td>
                      <td>{{$q->jumlah_kamar}}</td>
                      <td>{{$q->alamat_kost}}</td>
                      <td>{{$q->kontak_kost}}</td>
                      <td>{{$q->wilayah_kost}}</td>
                      <td>
                      <a href="{{url('admin/kamar/edit/'.$q->id)}}" class="btn btn-outline-warning btn-sm"><i class="fas fa-edit"> Edit     </i></a>
                       <a href="{{url('admin/kamar/delete/'.$q->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                       class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"> Delete</i></a>
                    </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              <hr>
              <li class="list-group-item float-right">
                <a href="{{url('admin/kamar/add')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus-circle"></i></a>
              </li>
            </div>
          </div>
        </div>
      </div>
      </div>
      <!-- tutup add -->
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</div>
</body>
</html>
