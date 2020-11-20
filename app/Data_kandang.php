<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data_kandang extends Model
{
    protected $table = 'data_kandang';

    protected $fillable = [
        'jumlah_ayam', 'usia_ayam', 'bobot_ratarata', 'kondisi_khusus'
    ];
}
