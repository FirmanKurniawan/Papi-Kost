<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Kamar;
use \App\Kost;
use \App\Penginap;
use \App\Pesanan;
class KamarController extends Controller
{
    public function add()
    {
        return view('admin.kamar.add');
    }

    public function save(Request $r)
    {
    	$tipe_kamar = $r->tipe_kamar;
    	$harga = $r->harga;
    	$deskripsi_kamar = $r->deskripsi_kamar;
        $diskon = $r->diskon;

    	$kamar = new Kamar;
    	$kamar->tipe_kamar = $tipe_kamar;
    	$kamar->harga = $harga;
    	$kamar->deskripsi_kamar = $deskripsi_kamar;
        $kamar->diskon = $diskon;
    	$kamar->save();

    	return redirect((url('admin/kamar/all')));
    }

    public function all()
    {
    	$kamar = Kamar::all();

    	return view('admin.kamar.index');
    }

    public function edit($id)
    {
    	$kamar = Kamar::find($id);

    	return view('admin.kamar.edit', compact('kamar'));
    }

    public function update(Request $r)
    {
    	$id = $r->id;
    	$tipe_kamar = $r->tipe_kamar;
    	$harga = $r->harga;
    	$deskripsi_kamar = $r->deskripsi_kamar;
        $diskon = $r->diskon;

    	$kamar = Kamar::find($id);
    	$kamar->tipe_kamar = $tipe_kamar;
    	$kamar->harga = $harga;
    	$kamar->deskripsi_kamar = $deskripsi_kamar;
        $kamar->diskon = $diskon;
    	$kamar->save();

    	return redirect(url('admin/kamar/all'));
    }

    public function delete($id)
    {
    	$kamar = Kamar::find($id);
        $kamar->delete();

    	return redirect(url('admin/kamar/all'));
    }


}
