 <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Kamar;
use \App\Kost;
use \App\Penginap;
use \App\Pesanan;
class SaranController extends Controller
{
    public function save(Request $r)
    {
    	$nama= $r->nama;
    	$alamat = $r->alamat;
    	$telepon = $r->telepon;
    	$email = $r->email;
    	$deskripsi = $r->deskripsi;
    	$gambar = $r->gambar;

    	$saran = new Saran;
    	$saran->nama = $nama;
    	$saran->alamat = $alamat;
    	$saran->telepon = $telepon;
    	$saran->email = $email;
    	$saran->deskripsi = $deskripsi;

    	$file = $r->file('gambar');
    	$filename = $file->getClientOriginalName();
    	$r->file('gambar')->move("gambar/", $filename);
    	$saran->gambar = $filename;
    	$saran->save();

    	return view('saran.index');
    }

    public function all()
    {
    	$saran = Saran::all();

    	return view('saran.index');
    }

    public function edit($id)
    {
    	$saran = Saran::find($id);

    	return view('saran.edit');
    }

    public function update(Request $r)
    {
    	$id = $r->id;
    	$nama= $r->nama;
    	$alamat = $r->alamat;
    	$telepon = $r->telepon;
    	$email = $r->email;
    	$deskripsi = $r->deskripsi;
    	$gambar = $r->gambar;

    	$saran = Saran::find($id);
    	$saran->nama = $nama;
    	$saran->alamat = $alamat;
    	$saran->telepon = $telepon;
    	$saran->email = $email;
    	$saran->deskripsi = $deskripsi;

    	$file = $r->file('gambar');
    	$filename = $file->getClientOriginalName();
    	$r->file('gambar')->move("gambar/", $filename);
    	$saran->gambar = $filename;
    	$saran->save();

    	return view('saran.index');
    }

    public function delete($id)
    {
    	$sara = Saranra::find($id);

    	return view('saran.index');
    }
}
