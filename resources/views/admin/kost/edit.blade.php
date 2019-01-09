<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Ubah Info Kost</title>
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
<h3 style="color: white; font:"> Papi Kost</h3>
<!--         <a class="navbar-brand brand-logo-mini" href="#"><img src="images/logo-mini.svg" alt="logo"/></a> -->
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <ul class="navbar-nav navbar-nav-right">
          <li><a class="nav-link" href="{{ url('admin/kamar') }}">{{ __('Kamar') }}</a></li>
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
                 </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
        </ul>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas " style="background: linear-gradient(to right, #ff9966 0%, #ff6666 100%);" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin') }}">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/kost/all') }}">
              <span class="menu-title">Tambah Kost</span>
              <i class="mdi mdi-table-large menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/kamar/all') }}">
              <span class="menu-title">Tambah Kamar</span>
              <i class="mdi mdi-table-large menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/akun/all') }}">
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
              <div class="card-header bg-gradient-danger text-black" >Edit Kamar</div>
              <div class="card-body">
               <form action="{{url('admin/kamar/update')}}" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="formGroupExampleInput">Nama Kost</label>
                  <input type="text" class="form-control" name="nama_kost" id="formGroupExampleInput" 
                  placeholder="Nama Kost" value="{{$kamar->nama_kost}}" required>
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput">Jumlah Kamar</label>
                  <input type="number" class="form-control" name="jumlah_kamar" id="formGroupExampleInput" 
                  placeholder="Jumlah Kamar" value="{{$kamar->jumlah_kamar}}" required>
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput">Alamat Kost</label>
                  <input type="text" class="form-control" name="alamat_kost" id="formGroupExampleInput" 
                  placeholder="Alamat Kost" value="{{$kamar->alamat_kost}}" required>
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput">Kontak Kost</label>
                  <input type="text" class="form-control" name="kontak_kost" id="formGroupExampleInput" 
                  placeholder="Kontak Kost" value="{{$kamar->kontak_kost}}" required>
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput">Wilayah Kost</label>
                  <input type="text" class="form-control" name="wilayah_kost" id="formGroupExampleInput" 
                  placeholder="Wilayah Kost" value="{{$kamar->wilayah_kost}}" required>
                </div>
                @csrf
                <input type="hidden" name="id" value="{{$kamar->id}}">
                <button class="btn btn-outline-success float-right" type="submit">Update Data</button>
              </form>
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
