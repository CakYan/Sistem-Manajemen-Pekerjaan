<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyeks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_proyek')->unique();
            $table->string('ketua_tim');
            $table->string('anggota')->nullable();
            $table->string('unit_pengaju');
            $table->text('deskripsi');
            $table->string('progress')->nullable();
            $table->dateTime('tgl_mulai')->nullable();
            $table->dateTime('tgl_akhir')->nullable();
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
        Schema::dropIfExists('proyeks');
    }
}