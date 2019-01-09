<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Kamar;
use \App\Kost;
use \App\Penginap;
use \App\Pesanan;
class PenginapController extends Controller
{
    public function save(Request $r)
    {
    	$nama= $r->nama;
    	$email = $r->email;
    	$jenis_kelamin = $r->jenis_kelamin;
    	$umur = $r->umur;
    	$telepon = $r->telepon;
    	$alamat = $r->alamat;
    	$status = $r->status;
    	$foto = $r->foto;

    	$penginap = new Penginap;
    	$penginap->nama = $nama;
    	$penginap->email = $email;
    	$penginap->jenis_kelamin = $jenis_kelamin;
    	$penginap->umur = $umur;
    	$penginap->telepon = $telepon;
    	$penginap->alamat = $alamat;
    	$penginap->status = $status;

    	$file = $r->file('foto');
    	$filename = $file->getClientOriginalName();
    	$r->file('foto')->move("gambar/", $filename);
    	$saran->foto = $filename;
    	$saran->save();

    	return view('penginap.index');
    }

    public function all()
    {
    	$penginap = Penginap::all();

    	return view('penginap.index');
    }

    public function edit($id)
    {
    	$penginap = Penginap::find($id);

    	return view('penginap.edit');
    }

    public function update(Request $r)
    {
    	$id = $r->id;
    	$nama= $r->nama;
    	$email = $r->email;
    	$jenis_kelamin = $r->jenis_kelamin;
    	$umur = $r->umur;
    	$telepon = $r->telepon;
    	$alamat = $r->alamat;
    	$status = $r->status;
    	$foto = $r->foto;

    	$penginap = Penginap::find($id);
    	$penginap->nama = $nama;
    	$penginap->email = $email;
    	$penginap->jenis_kelamin = $jenis_kelamin;
    	$penginap->umur = $umur;
    	$penginap->telepon = $telepon;
    	$penginap->alamat = $alamat;
    	$penginap->status = $status;

    	$file = $r->file('foto');
    	$filename = $file->getClientOriginalName();
    	$r->file('foto')->move("gambar/", $filename);
    	$penginap->foto = $filename;
    	$penginap->save();

    	return view('penginap.index');
    }

    public function delete($id)
    {
    	$penginap = Penginap::find($id);

    	return view('penginap.index');
    }
}
