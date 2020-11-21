<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRekomendasikomposisiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekomendasi_komposisi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kandang_id');
            $table->enum('rekomendasi_komposisi', ['Baik', 'Tidak Baik']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekomendasi_komposisi');
    }
}
