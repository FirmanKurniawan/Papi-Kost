<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view('admin.index');
    }

    public function verifikasi()
    {
    	return view('verifikasilogin.verifikasi');
    }

    public function datauser()
    {
        return view('admin.user.index');
    }

    public function adduser()
    {
        return view('admin.user.add');
    }

    public function saveuser(Request $r)
    {
        $n = new User;
        $n->name = $r->input('name');
        $n->email = $r->input('email');
        $n->password = $r->input('password');
        $n->status = $r->input('status');
        $n->role = $r->input('role');
        $n->save();
        return redirect(url('admin/datauser'));
    }    

    public function edituser($id)
    {
        $user = User::find($id);
        return view('admin.user.edit')->with('user',$user);
    }

    public function updateuser(Request $r)
    {
        $user = User::find($r->id);
        $status = "1";
        $user->status = $status;
        $user->save();
        return redirect(url('admin/datauser'));
    }

    public function deleteuser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect(url('admin/datauser'));
    }
}
