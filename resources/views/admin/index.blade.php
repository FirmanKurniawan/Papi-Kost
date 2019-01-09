<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <!-- plugins:css -->
   <link rel="stylesheet" href="{{ asset('css/iconfonts/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{asset('css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('images/papi-kost.png')}}" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
  <div id="app">
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background-color: #ff6666;">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="background: linear-gradient(to right, #ff9966 0%, #ff6666 100%);">
            <h3 style="color: white;"> Papi Kost</h3>
<!--         <a class="navbar-brand brand-logo-mini" href="#"><img src="images/logo-mini.svg" alt="logo"/></a> -->
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <ul class="navbar-nav navbar-nav-right">
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
                        <div class="card" style="margin-left: 100px;margin-right: 100px;margin-right: 100px;margin-top: 100px">
                            <div class="card-header text-white text-center bg-gradient-danger">Admin Dashboard</div>

                            <div class="card-body">
                                <center>
                                    <h2>Welcome {{Auth::user()->name}}</h2>
                                </center>
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