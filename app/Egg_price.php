<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Egg_price extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'user_id', 'harga_jual', 'harga_beli', 'tanggal'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
