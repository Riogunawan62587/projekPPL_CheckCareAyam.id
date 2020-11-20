<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDataKandangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kandang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('jumlah_ayam');
            $table->integer('usia_ayam');
            $table->integer('bobot_ratarata');
            $table->string('kondisi_khusus', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_kandang');
    }
}
