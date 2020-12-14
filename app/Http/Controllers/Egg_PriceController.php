<?php

namespace App\Http\Controllers;

use App\Egg_price;
use App\User;
use Carbon\Carbon;

use Illuminate\Http\Request;

class Egg_PriceController extends Controller
{
    public function index()
    {
        $tanggal_sekarang = Carbon::now();
        $batas = 6;
        $daftar_telur = Egg_price::paginate($batas);
        $rata_rata      = Egg_price::avg('harga_jual');
        $data_peternakan = User::pluck('nama_peternakan', 'id');
        return view('admin.harga_telur', compact('tanggal_sekarang', 'daftar_telur', 'data_peternakan', 'rata_rata'));
    }

    public function store(Request $request)
    {
        $tanggal_sekarang = Carbon::now();
        $telur = new Egg_price;
        $telur->user_id         = $request->user_id;
        $telur->harga_jual      = $request->harga_jual;
        $telur->harga_beli      = $request->harga_beli;
        $telur->tanggal         = $tanggal_sekarang->format('Y-m-d');
        $telur->save();
        return redirect('/harga_telur');
    }

    public function rekap()
    {
        $tanggal_sekarang = Carbon::now();
        $batas = 10;
        $daftar_telur   = Egg_price::orderBy('harga_jual', 'desc')->paginate($batas);
        $no = $batas * ($daftar_telur->currentPage() - 1);
        $rata_rata      = Egg_price::avg('harga_jual');
        return view('admin.harga_telur_rekap', compact('tanggal_sekarang', 'daftar_telur', 'rata_rata', 'no'));
    }
}
