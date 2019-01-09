@extends('layouts.user')
@section('content')
 	
<div class="container">
	<img src="{{ asset('img/logo.png') }}" style="width: 250px;">
    <div class="form-group">
      <input type="text" class="form-control" name="nama_kost" placeholder="Nama">
    </div>
    <div class="form-group">
      <input type="email" class="form-control" name="nomor_kamar" placeholder="Email">
    </div>
    <div class="form-group">
    	<input type="Password" name="nama_pemesan" class="form-control" placeholder="Password">
  </form>
  <button type="submit" name="pesan" class="btn btn-outline-danger btn-sm" style="margin-top: 30px;">Ubah</button>
</div>
</div>
</section>s
@endsection