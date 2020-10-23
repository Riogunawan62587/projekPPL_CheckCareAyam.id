<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('ID_User');
            $table->string('Username', 30);
            $table->string('Password', 50);
            $table->string('Nama', 50);
            $table->date('Tanggal_Lahir');
            $table->string('Alamat', 100);
            $table->string('No_Telp', 15)->unique();
            $table->string('Email', 30)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('Jenis_Kelamin', ['laki - laki', 'permepuan']);
            $table->integer('ID_Role');
            $table->enum('Status_Akun', ['Terverifikasi', 'Belum Terverifikasi']);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
