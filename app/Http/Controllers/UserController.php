<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifiedMail;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(1);
    }

    public function index()
    {
        $batas = 5;
        $user = User::orderBy('id')->paginate($batas);
        $no = $batas * ($user->currentPage() - 1);
        $jumlah_user = $user->count();
        $no = $batas * ($user->currentPage() - 1);
        return view('admin.manaj_user', compact('user', 'no', 'jumlah_user'));
    }

    public function create()
    {
        return view('admin.create');
    }



    public function store(Request $request)
    {

        $this->validate($request, [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = new User;
        $user->role_id            = 1;
        $user->username           = $request->username;
        $user->password           = Hash::make($request->password);
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

    public function detail($id)
    {
        $user = User::find($id);
        return view('admin.detail', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::find($id);
        $user->username           = $request->username;
        $user->password           = Hash::make($request->password);
        $user->nama               = $request->nama;
        $user->tanggal_lahir      = $request->tanggal_lahir;
        $user->alamat             = $request->alamat;
        $user->no_telp            = $request->no_telp;
        $user->email              = $request->email;
        $user->jenis_kelamin      = $request->jenis_kelamin;
        $user->nama_peternakan    = $request->nama_peternakan;
        $user->alamat_peternakan  = $request->alamat_peternakan;
        $user->tanggal_terbentuk  = $request->tanggal_terbentuk;
        $user->visi               = $request->visi;
        $user->update();
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

        // Mail::to($user)->send(new VerifiedMail($user));

        return redirect('/user');
    }
}
