@extends('layouts.user')
@section('content')
          <div class="col-md-12 heading-wrap text-center">
            <h4 class="sub-heading">Kos kosan</h4>
               <select class="heading" id="inputGroupSelect01">
    <option selected>Search</option>
    <option>Jakarta Timur</option>
    <option>Jakarta Barat</option>
    <option>Jakarta Selatan</option>
    <option>Jakarta Utara</option>
  </select>
          </div>
        </div>
          <div class="col-md-4">
            <div class="post-entry">
              <img src="{{ asset('images/img_5.jpg')}}" alt="Image placeholder" class="img-fluid">
              <div class="body-text">
                <div class="category">Putri</div>
                <h3 class="mb-3">Kos Murah</h3>
                <p class="mb-4">Jalan Negri Kutub Utara</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <p class="text-danger"><del>Rp.1.200.000,00</del></p>
                <p class="text-success">Rp.1.000.000,00</p>
                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
  Deskripsi
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deskripsi Kost</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Nama Kos :
        <br>
        Tipe Ruangan :
        <br>
        Deskripsi :
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
              </div>
            </div>
          </div>
                  <div class="col-md-4">
            <div class="post-entry">
              <img src="{{ asset('images/img_5.jpg')}}" alt="Image placeholder" class="img-fluid">
              <div class="body-text">
                <div class="category">Pria</div>
                <h3 class="mb-3">Kos Px</h3>
                <p class="mb-4">Jalan Negri Kutub Utara Madagasdsa</p>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <p class="text-success">Rp.1.500.000,00</p>
                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
Deskripsi
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kost</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Nama Kos :
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
              </div>
            </div>
          </div>
  
  <!-- Jarak Gambar -->
        </div>
      </div>

    </section>

    @endsection