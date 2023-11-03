<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Siswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function(Blueprint $table){
            $table->integer('id')->primary();
            $table->string('nama');
            $table->string('jk');
            $table->string('no_hp');
            $table->string('alamat');
            $table->string('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('tinggal_bersama_wali')->nullable();
            $table->string('kendaraan')->nullable();
            $table->string('jenjang');
            $table->string('tahun_ajaran_mulai');
            $table->string('tahun_ajaran_akhir')->nullable();
            $table->string('tahun_kelulusan')->nullable();
            $table->string('nomor_ijasah')->nullable();
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
        Schema::dropIfExists('siswa');
    }
}
