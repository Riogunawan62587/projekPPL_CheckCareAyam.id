<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disease_list;

class Disease_ListController extends Controller
{
    public function index()
    {
        $daftar_penyakit = Disease_list::all();
        return view('admin.daftar_penyakit', compact('daftar_penyakit'));
    }

    public function simpan_penyakit(Request $request)
    {
        $daftar_penyakit = new Disease_list;
        $daftar_penyakit->nama_penyakit        = $request->nama_penyakit;
        $daftar_penyakit->penyebab_penyakit    = $request->penyebab_penyakit;
        $daftar_penyakit->gejala_penyakit      = $request->gejala_penyakit;
        $daftar_penyakit->save();
        return redirect('/daftar_penyakit');
    }
}
