<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

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
        $user = User::find($id);
        $user->username           = $request->username;
        $user->nama               = $request->nama;
        $user->tanggal_lahir      = $request->tanggal_lahir;
        $user->alamat             = $request->alamat;
        $user->no_telp            = $request->no_telp;
        $user->email              = $request->email;
        $user->jenis_kelamin      = $request->jenis_kelamin;
        $user->password           = Hash::make($request->password);
        $user->update();
        return redirect('/home.profil_saya');
    }
}
