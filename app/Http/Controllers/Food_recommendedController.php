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

    public function ayam_sehat_perhitungan(Request $request)
    {
        $jumlah = $request->jumlah;
        $usia = $request->usia;
        $bobot = $request->bobot;

        $location = file_get_contents(base_path('public/json/contoh.json'));
        $data = json_decode($location, true);

        $data[] = array(
            'id' => rand(100, 200),
            'jumlah' => $jumlah,
            'usia' => $usia,
            'bobot' => $bobot
        );

        $newJsonString = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents(base_path('public/json/contoh.json'), stripslashes($newJsonString));

        $nilai_toleransi = $bobot * 0.01;
        $batas_toleransi_bawah = 0.07 - $nilai_toleransi;
        $batas_toleransi_atas = 0.07 + $nilai_toleransi;

        return view('admin.ayam_sehat_perhitungan', compact('jumlah', 'usia', 'bobot', 'nilai_toleransi', 'batas_toleransi_bawah', 'batas_toleransi_atas', 'data'));
    }

    public function ayam_sehat_hasil(Request $request)
    {
        $location = file_get_contents(base_path('public/json/contoh.json'));
        $data = json_decode($location, true);

        $jumlah = $data[0]['jumlah'];
        $usia = $data[0]['usia'];
        $bobot = $data[0]['bobot'];

        $jumlah_dalam_rentang = $request->jumlah_dalam_rentang;
        $keseragaman = $jumlah_dalam_rentang / $jumlah * 100;
        return view('admin.ayam_sehat_hasil', compact('jumlah', 'usia', 'bobot', 'keseragaman'));
    }

    public function destroy()
    {
        $location = file_get_contents(base_path('public/json/contoh.json'));
        $data = json_decode($location, true);

        array_splice($data, 0);

        $newJsonString = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents(base_path('public/json/contoh.json'), stripslashes($newJsonString));
        return view('admin.ayam_sehat');
    }
}
