<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Kamar;
use \App\Kost;
use \App\Penginap;
use \App\Pesanan;
class KamarController extends Controller
{
    public function save(Request $r)
    {
    	$tipe_kamar = $r->tipe_kamar;
    	$harga = $r->harga;
    	$deskripsi_kamar = $r->deskripsi_kamar;

    	$kamar = new Kamar;
    	$kamar->tipe_kamar = $tipe_kamar;
    	$kamar->harga = $harga;
    	$kamar->deskripsi_kamar = $deskripsi_kamar;
    	$kamar->save();

    	return view('kamar.index');
    }

    public function all()
    {
    	$kamar = Kamar::all();

    	return view('kamar.index');
    }

    public function edit($id)
    {
    	$kamar = Kamar::find($id);

    	return view('kamar.edit');
    }

    public function update(Request $r)
    {
    	$id = $r->id;
    	$tipe_kamar = $r->tipe_kamar;
    	$harga = $r->harga;
    	$deskripsi_kamar = $r->deskripsi_kamar;

    	$kamar = Kamar::find($id);
    	$kamar->tipe_kamar = $tipe_kamar;
    	$kamar->harga = $harga;
    	$kamar->deskripsi_kamar = $deskripsi_kamar;
    	$kamar->save();

    	return view('kamar.index');
    }

    public function delete($id)
    {
    	$kamar = Kamar::find($id);

    	return view('kamar.index');
    }
}
