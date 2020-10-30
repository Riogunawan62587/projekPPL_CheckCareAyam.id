<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disease_list;

class Disease_ListController extends Controller
{
    public function index()
    {
        // $daftar_penyakit = Disease_list::all();
        return view('admin.daftar_penyakit', compact('daftar_penyakit'));
    }
}
