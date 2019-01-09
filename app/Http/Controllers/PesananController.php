<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Kamar;
use \App\Kost;
use \App\Penginap;
use \App\Pesanan;
class PesananController extends Controller
{
    public function save(Request $r)
    {
    	$nama_kost= $r->nama_kost;
    	$nomor_kamar = $r->nomor_kamar;
    	$nama_pemesan = $r->nama_pemesan;

    	$pesanan = new Pesanan;
    	$pesanan->nama_kost = $nama_kost;
    	$pesanan->nomor_kamar = $nomor_kamar;
    	$pesanan->nama_pemesan = $nama_pemesan;
    	$pesanan->save();

    	return view('pesanan.index');
    }

    public function all()
    {
    	$pesanan = pesanan::all();

    	return view('pesanan.index');
    }

    public function edit($id)
    {
    	$pesanan = Pesanan::find($id);

    	return view('pesanan.edit');
    }

    public function update(Request $r)
    {
    	$id = $r->id;
    	$nama_kost= $r->nama_kost;
    	$nomor_kamar = $r->nomor_kamar;
    	$nama_pemesan = $r->nama_pemesan;

    	$pesanan = Pesanan::find($id);
    	$pesanan->nama_kost = $nama_kost;
    	$pesanan->nomor_kamar = $nomor_kamar;
    	$pesanan->nama_pemesan = $nama_pemesan;
    	$pesanan->save();

    	return view('pesanan.index');
    }

    public function delete($id)
    {
    	$pesanan = Pesanan::find($id);

    	return view('pesanan.index');
    }
}
