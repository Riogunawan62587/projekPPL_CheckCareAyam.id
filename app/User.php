<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id', 'username', 'password', 'nama', 'tanggal_lahir', 'alamat', 'no_telp', 'email', 'jenis_kelamin', 'status_akun',  'nama_peternakan', 'alamat_peternakan', 'tanggal_terbentuk', 'visi', 'surat_ijin_usaha'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function egg_price()
    {
        return $this->hasMany('App\Egg_price', 'user_id');
    }
}
