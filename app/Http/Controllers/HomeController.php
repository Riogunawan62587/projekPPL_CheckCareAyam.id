<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

    public function profil_saya($id)
    {
        $user = User::find($id);
        return view('admin.profil_saya', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.edit_profil', compact('user'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'username'          => 'required|string|max:255',
            'password'          => 'required|string|min:8|confirmed',
            'nama'              => 'required|string|max:255',
            'tanggal_lahir'     => 'required',
            'alamat'            => 'required|string|max:255',
            'no_telp'           => 'required|numeric',
            'email'             => 'required|string|email|max:255',
            'nama_peternakan'   => 'required|string|max:255',
            'alamat_peternakan' => 'required|string|max:255',
            'visi'              => 'required|string|max:255',
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
        return redirect('home/profil_saya/' . $id);
    }
}
