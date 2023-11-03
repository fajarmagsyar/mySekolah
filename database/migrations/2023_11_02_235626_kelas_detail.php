<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KelasDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas_detail', function(Blueprint $table){
            $table->integer('id')->primary();
            $table->integer('kelas_id');
            $table->integer('siswa_id');
            $table->integer('tahun_mulai');
            $table->integer('tahun_berakhir');
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
        Schema::dropIfExists('kelas_detail');
    }
}
