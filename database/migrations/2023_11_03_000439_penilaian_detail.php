<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PenilaianDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian_detail', function(Blueprint $table){
            $table->integer('id')->primary();
            $table->integer('penilaian_id');
            $table->integer('siswa_id');
            $table->integer('nilai');
            $table->integer('remidi');
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
        Schema::dropIfExists('penilaian_detail');
    }
}
