<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Guru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function(Blueprint $table){
            $table->integer('id')->primary();
            $table->string('nama_guru');
            $table->string('nuptk');
            $table->string('tanggal_lahir');
            $table->string('nip');
            $table->string('status_kepegawaian');
            $table->string('jenis_ptk');
            $table->string('gelar_depan');
            $table->string('gelar_belakang');
            $table->string('jenjang_pendidikan');
            $table->string('jurusan');
            $table->string('sertifikasi')->nullable();
            $table->string('tendik')->nullable();
            $table->string('tmt_kerja')->nullable();
            $table->string('tugas_tambahan')->nullable();
            $table->string('mengajar')->nullable();
            $table->string('jam_tugas_tambahan')->nullable();
            $table->string('jjm')->nullable();
            $table->string('total_jjm')->nullable();
            $table->string('kompetensi')->nullable();
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
        Schema::dropIfExists('guru');
    }
}
