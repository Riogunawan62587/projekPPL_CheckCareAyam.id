<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data_kandang;
use App\Rekomendasi_komposisi;

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
        // $location = file_get_contents(base_path('public/json/contoh.json'));
        // $data = json_decode($location, true);

        // $data[] = array(
        //     'id' => rand(100, 200),
        //     'jumlah' => $jumlah,
        //     'usia' => $usia,
        //     'bobot' => $bobot
        // );

        // $newJsonString = json_encode($data, JSON_PRETTY_PRINT);
        // file_put_contents(base_path('public/json/contoh.json'), stripslashes($newJsonString));

        $data_kandang = new Data_kandang;
        $data_kandang->jumlah_ayam      = $request->jumlah;
        $data_kandang->usia_ayam        = $request->usia;
        $data_kandang->bobot_ratarata   = $request->bobot;
        $data_kandang->kondisi_khusus   = 'Sehat';
        $data_kandang->save();

        $nilai_toleransi = $data_kandang->bobot_ratarata * 0.01;
        $batas_toleransi_bawah = 0.07 - $nilai_toleransi;
        $batas_toleransi_atas = 0.07 + $nilai_toleransi;

        return view('admin.ayam_sehat_perhitungan', compact('data_kandang', 'nilai_toleransi', 'batas_toleransi_bawah', 'batas_toleransi_atas'));
    }

    public function ayam_sehat_hasil(Request $request)
    {
        // $location = file_get_contents(base_path('public/json/contoh.json'));
        // $data = json_decode($location, true);

        // $jumlah = $data[0]['jumlah'];
        // $usia = $data[0]['usia'];
        // $bobot = $data[0]['bobot'];

        $data_kandang = Data_kandang::all();
        foreach ($data_kandang as $dt_kandang) {
            $kandang_id     = $dt_kandang->id;
            $jumlah_ayam    = $dt_kandang->jumlah_ayam;
            $usia_ayam      = $dt_kandang->usia_ayam;
            $bobot_ratarata = $dt_kandang->bobot_ratarata;
        }
        $jumlah_dalam_rentang = $request->jumlah_dalam_rentang;
        $keseragaman = $jumlah_dalam_rentang / $jumlah_ayam * 100;

        if ($keseragaman >= 80) {
            $status = 'Baik';
        } else {
            $status = 'Tidak Baik';
        }

        $rekomendasi_komposisi = new Rekomendasi_komposisi;
        $rekomendasi_komposisi->kandang_id              = $kandang_id;
        $rekomendasi_komposisi->rekomendasi_komposisi   = $status;
        $rekomendasi_komposisi->save();

        return view('admin.ayam_sehat_hasil', compact('jumlah_ayam', 'usia_ayam', 'bobot_ratarata',  'keseragaman'));
    }
}
