<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->status == "1" && Auth::user()->role == "1") {
            return redirect(url('/admin'));
        }
        elseif (Auth::user()->status == "1" && Auth::user()->role == "2") {
            return redirect(url('/admin/kamar/all'));
        }
        elseif (Auth::user()->status == "2" && Auth::user()->role == "2") {
            return redirect(url('/admin/verifikasi'));
        }
    }

    public function welcome()
    {
        return view('welcome');
    }
}
