<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function(Blueprint $table){
            $table->integer('id')->primary();
            $table->integer('wali_kelas_id');
            $table->integer('jadwal_id');
            $table->string('nama_kelas');
            $table->string('kode_ruangan');
            $table->string('jenjang');
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
        Schema::dropIfExists('kelas');
    }
}
