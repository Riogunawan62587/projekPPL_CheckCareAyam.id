<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Food_recommendedController extends Controller
{
    public function index()
    {
        return view('admin.rekomendasi_pakan');
    }

    public function ayam_sehat()
    {
        return view('admin.ayam_sehat');
    }

    public function ayam_sehat_hasil()
    {
        return view('admin.ayam_sehat_hasil');
    }
}
