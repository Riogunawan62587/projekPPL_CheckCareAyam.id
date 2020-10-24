<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $batas = 5;
        $user = User::all()->sortByDesc('id');
        $no = 0;
        $jumlah_user = $user->count();
        // ->paginate($batas);
        // $no = $batas * ($user->currentPage() - 1);
        return view('admin.manaj_user', compact('user', 'no', 'jumlah_user'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->role_id            = 1;
        $user->username           = $request->username;
        $user->password           = 'admin';
        $user->nama               = $request->nama;
        $user->tanggal_lahir      = $request->tanggal_lahir;
        $user->alamat             = $request->alamat;
        $user->no_telp            = $request->no_telp;
        $user->email              = $request->email;
        $user->jenis_kelamin      = $request->jenis_kelamin;
        $user->status_akun        = 'Terverifikasi';
        $user->save();
        return redirect('/user');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user');
    }

    public function simpan_status(Request $request, $id)
    {
        $user = User::find($id);
        $user->status_akun   = $request->status_akun;
        $user->update();
        return redirect('/user');
    }
}
