<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDiseaseListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('disease_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_penyakit', 50);
            $table->string('penyebab_penyakit', 100);
            $table->string('gejala_penyakit', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disease_lists');
    }
}
