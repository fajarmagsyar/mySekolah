<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Wali extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wali', function(Blueprint $table){
            $table->integer('id')->primary();
            $table->integer('siswa_id');
            $table->string('jk');
            $table->string('status_hubungan');
            $table->string('no_hp');
            $table->string('alamat');
            $table->string('penghasilan')->nullable();
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
        Schema::dropIfExists('wali');
    }
}
