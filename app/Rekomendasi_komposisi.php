<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekomendasi_komposisi extends Model
{
    public $timestamps = false;
    protected $table = 'rekomendasi_komposisi';

    protected $fillable = [
        'kandang_id', 'rekomendasi_komposisi'
    ];
}
