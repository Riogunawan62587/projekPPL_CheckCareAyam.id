<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use File;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255'],
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'tanggal_lahir' => ['required'],
            'alamat' => ['required', 'string', 'max:255'],
            'no_telp' => ['required', 'numeric'],
            'nama_peternakan' => ['required', 'string', 'max:255'],
            'alamat_peternakan' => ['required', 'string', 'max:255'],
            'visi' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $namafile = time() . '.' . $data['surat_ijin_usaha']->getClientOriginalExtension();

        return User::create([
            'role_id' => 2,
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'nama' => $data['nama'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'alamat' => $data['alamat'],
            'no_telp' => $data['no_telp'],
            'email' => $data['email'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'status_akun' => 'Belum Terverifikasi',
            'nama_peternakan' => $data['nama_peternakan'],
            'alamat_peternakan' => $data['alamat_peternakan'],
            'tanggal_terbentuk' => $data['tanggal_terbentuk'],
            'visi' => $data['visi'],
            'surat_ijin_usaha' => $data['surat_ijin_usaha']->move('img/', $namafile),
        ]);
    }
}
