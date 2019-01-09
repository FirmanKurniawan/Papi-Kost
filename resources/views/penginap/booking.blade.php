@extends('layouts.user')
@section('content')

<div class="container">
	<p>Booking</p>
    <div class="form-group">
      <input type="text" class="form-control" name="nama_kost" placeholder="Nama Kost" required="">
    </div>
    <div class="form-group">
      <input type="number" class="form-control" name="nomor_kamar" placeholder="Nomor Kamar" required="">
    </div>
    <div class="form-group">
    	<input type="text" name="nama_pemesan" class="form-control" placeholder="Nama Pemesan" required="">
  </form>
  <button type="submit" name="pesan" class="btn btn-outline-danger btn-sm" style="margin-top: 30px;">Pesan</button>
</div>
</section>
@endsection