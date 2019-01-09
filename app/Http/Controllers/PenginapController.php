<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenginapController extends Controller
{
    public function all()
    {
    	return view('penginap.index');
    }
}
