<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease_list extends Model
{
  protected $fillable = [
    'nama_penyakit', 'penyebab_penyakit', 'gejala_penyakit'
  ];
}
