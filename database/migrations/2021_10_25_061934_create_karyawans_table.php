<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('nama');
            $table->string('username')->unique();
            $table->string('alamat');
            $table->string('no_telp')->unique();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->bigInteger('role_id')->nullable();
            $table->bigInteger('unit_id');
            $table->string('profil_img')->nullable();
            $table->bigInteger('jabatan_id');
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
        Schema::dropIfExists('karyawans');
    }
}