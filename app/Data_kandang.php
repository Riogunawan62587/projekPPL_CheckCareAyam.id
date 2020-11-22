<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data_kandang extends Model
{
    public $timestamps = false;
    protected $table = 'data_kandang';

    protected $fillable = [
        'jumlah_ayam', 'usia_ayam', 'bobot_ratarata', 'kondisi_khusus', 'jumlah_pakan_perkandang'
    ];
}
