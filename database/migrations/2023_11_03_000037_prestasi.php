<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Prestasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasi', function(Blueprint $table){
            $table->integer('id')->primary();
            $table->integer('siswa_id');
            $table->string('nama_prestasi');
            $table->string('penyelenggara');
            $table->string('tahun');
            $table->string('jenis_trofi');
            $table->string('jenis_prestasi');
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('prestasi');
    }
}
