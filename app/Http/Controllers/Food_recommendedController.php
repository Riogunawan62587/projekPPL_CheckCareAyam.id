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

        // Tabel Umur
        if ($usia_ayam == 1) {
            $pakan_per_umur = 15;
        } elseif ($usia_ayam == 2) {
            $pakan_per_umur = 21;
        } elseif ($usia_ayam == 3) {
            $pakan_per_umur = 25;
        } elseif ($usia_ayam == 4) {
            $pakan_per_umur = 29;
        } elseif ($usia_ayam == 5) {
            $pakan_per_umur = 36;
        } elseif ($usia_ayam == 6) {
            $pakan_per_umur = 40;
        } elseif ($usia_ayam == 7) {
            $pakan_per_umur = 43;
        } elseif ($usia_ayam == 8) {
            $pakan_per_umur = 47;
        } elseif ($usia_ayam == 9) {
            $pakan_per_umur = 53;
        } elseif ($usia_ayam == 10) {
            $pakan_per_umur = 56;
        } elseif ($usia_ayam == 11) {
            $pakan_per_umur = 62;
        } elseif ($usia_ayam == 12) {
            $pakan_per_umur = 66;
        } elseif ($usia_ayam == 13) {
            $pakan_per_umur = 71;
        } elseif ($usia_ayam == 14) {
            $pakan_per_umur = 74;
        } elseif ($usia_ayam == 15) {
            $pakan_per_umur = 76;
        } elseif ($usia_ayam == 16) {
            $pakan_per_umur = 79;
        } elseif ($usia_ayam == 17) {
            $pakan_per_umur = 82;
        }

        $jumlah_pakan_perkandang = $jumlah_ayam * $pakan_per_umur;

        $data_kandang_update                            = Data_kandang::find($kandang_id);
        $data_kandang_update->jumlah_pakan_perkandang   = $jumlah_pakan_perkandang;
        $data_kandang_update->update();

        // Rekomendasi
        $data_jagung        = 0.5 * $jumlah_pakan_perkandang;
        $data_konsentrat    = 0.35 * $jumlah_pakan_perkandang;
        $data_bekatul       = 0.15 * $jumlah_pakan_perkandang;

        // Keseragaman
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

        return view('admin.ayam_sehat_hasil', compact('jumlah_ayam', 'usia_ayam', 'bobot_ratarata', 'jumlah_pakan_perkandang', 'data_jagung', 'data_konsentrat', 'data_bekatul', 'keseragaman'));
    }

    public function ayam_sakit()
    {
        return view('admin.ayam_sakit');
    }

    public function ayam_sakit_perhitungan(Request $request)
    {
        $data_kandang = new Data_kandang;
        $data_kandang->usia_ayam        = $request->usia;
        $data_kandang->bobot_ratarata   = $request->bobot;
        $data_kandang->ciri_ciri        = $request->ciri;
        $data_kandang->kondisi_khusus   = 'Sakit';
        $data_kandang->save();

        return view('admin.ayam_sakit_perhitungan', compact('data_kandang'));
    }

    public function ayam_sakit_hasil(Request $request)
    {
        $data_kandang = Data_kandang::all();
        foreach ($data_kandang as $dt_kandang) {
            $kandang_id     = $dt_kandang->id;
            $usia_ayam      = $dt_kandang->usia_ayam;
            $bobot_ratarata = $dt_kandang->bobot_ratarata;
            $ciri_ciri      = $dt_kandang->ciri_ciri;
        }

        // Tabel Bobot
        if ($bobot_ratarata >= 6 && $bobot_ratarata <= 7) {
            $usia_ayam = 1;
        } elseif ($bobot_ratarata >= 12 && $bobot_ratarata <= 13) {
            $usia_ayam = 2;
        } elseif ($bobot_ratarata >= 18 && $bobot_ratarata <= 20) {
            $usia_ayam = 3;
        } elseif ($bobot_ratarata >= 26 && $bobot_ratarata <= 27) {
            $usia_ayam = 4;
        } elseif ($bobot_ratarata >= 35 && $bobot_ratarata <= 37) {
            $usia_ayam = 5;
        } elseif ($bobot_ratarata >= 45 && $bobot_ratarata <= 47) {
            $usia_ayam = 6;
        } elseif ($bobot_ratarata >= 54 && $bobot_ratarata <= 58) {
            $usia_ayam = 7;
        } elseif ($bobot_ratarata >= 65 && $bobot_ratarata <= 69) {
            $usia_ayam = 8;
        } elseif ($bobot_ratarata >= 76 && $bobot_ratarata <= 80) {
            $usia_ayam = 9;
        } elseif ($bobot_ratarata >= 86 && $bobot_ratarata <= 92) {
            $usia_ayam = 10;
        } elseif ($bobot_ratarata >= 96 && $bobot_ratarata <= 102) {
            $usia_ayam = 11;
        } elseif ($bobot_ratarata >= 105 && $bobot_ratarata <= 111) {
            $usia_ayam = 12;
        } elseif ($bobot_ratarata >= 113 && $bobot_ratarata <= 120) {
            $usia_ayam = 13;
        } elseif ($bobot_ratarata >= 119 && $bobot_ratarata <= 127) {
            $usia_ayam = 14;
        } elseif ($bobot_ratarata >= 126 && $bobot_ratarata <= 134) {
            $usia_ayam = 15;
        } elseif ($bobot_ratarata >= 133 && $bobot_ratarata <= 141) {
            $usia_ayam = 16;
        } elseif ($bobot_ratarata >= 140 && $bobot_ratarata <= 148) {
            $usia_ayam = 17;
        }

        // Tabel Umur
        if ($usia_ayam == 1) {
            $pakan_per_umur = 15;
        } elseif ($usia_ayam == 2) {
            $pakan_per_umur = 21;
        } elseif ($usia_ayam == 3) {
            $pakan_per_umur = 25;
        } elseif ($usia_ayam == 4) {
            $pakan_per_umur = 29;
        } elseif ($usia_ayam == 5) {
            $pakan_per_umur = 36;
        } elseif ($usia_ayam == 6) {
            $pakan_per_umur = 40;
        } elseif ($usia_ayam == 7) {
            $pakan_per_umur = 43;
        } elseif ($usia_ayam == 8) {
            $pakan_per_umur = 47;
        } elseif ($usia_ayam == 9) {
            $pakan_per_umur = 53;
        } elseif ($usia_ayam == 10) {
            $pakan_per_umur = 56;
        } elseif ($usia_ayam == 11) {
            $pakan_per_umur = 62;
        } elseif ($usia_ayam == 12) {
            $pakan_per_umur = 66;
        } elseif ($usia_ayam == 13) {
            $pakan_per_umur = 71;
        } elseif ($usia_ayam == 14) {
            $pakan_per_umur = 74;
        } elseif ($usia_ayam == 15) {
            $pakan_per_umur = 76;
        } elseif ($usia_ayam == 16) {
            $pakan_per_umur = 79;
        } elseif ($usia_ayam == 17) {
            $pakan_per_umur = 82;
        }

        // Tabel vitamin
        if ($usia_ayam >= 1 && $usia_ayam <= 10) {
            $vitamin = 1;
        } elseif ($usia_ayam > 10) {
            $vitamin = 2;
        }

        $data_kandang_update                            = Data_kandang::find($kandang_id);
        $data_kandang_update->jumlah_pakan_perkandang   = $pakan_per_umur;
        $data_kandang_update->update();

        // Rekomendasi
        $data_jagung        = 0.5 * $pakan_per_umur;
        $data_konsentrat    = 0.35 * $pakan_per_umur;
        $data_bekatul       = 0.15 * $pakan_per_umur;

        $rekomendasi_komposisi = new Rekomendasi_komposisi;
        $rekomendasi_komposisi->kandang_id              = $kandang_id;
        $rekomendasi_komposisi->rekomendasi_komposisi   = null;
        $rekomendasi_komposisi->save();

        return view('admin.ayam_sakit_hasil', compact('usia_ayam', 'bobot_ratarata', 'pakan_per_umur', 'ciri_ciri', 'data_jagung', 'data_konsentrat', 'data_bekatul', 'vitamin'));
    }
}
