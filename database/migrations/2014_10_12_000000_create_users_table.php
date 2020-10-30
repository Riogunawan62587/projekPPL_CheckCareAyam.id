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
            $table->bigIncrements('id');
            $table->integer('role_id')->default(1);
            $table->string('username', 30);
            $table->string('password', 255);
            $table->string('nama', 50);
            $table->date('tanggal_lahir');
            $table->string('alamat', 100);
            $table->string('no_telp', 15);
            $table->string('email', 30)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('jenis_kelamin', ['laki - laki', 'perempuan']);
            $table->enum('status_akun', ['Terverifikasi', 'Belum Terverifikasi'])->default('Belum Terverifikasi');
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
