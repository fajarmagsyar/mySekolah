<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProfilSekolah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_sekolah', function(Blueprint $table){
            $table->integer('id')->primary();
            $table->string('nama_sekolah')->nullable();
            $table->string('npsn')->nullable();
            $table->string('jenjang_pendidikan')->nullable();
            $table->string('status_sekolah')->nullable();
            $table->string('alamat_sekolah')->nullable();
            $table->string('latlong')->nullable();
            $table->string('sk_pendirian')->nullable();
            $table->string('tgl_sk_pendirian')->nullable();
            $table->string('file_sk_pendirian')->nullable();
            $table->string('status_kepemilikan')->nullable();
            $table->string('sk_izin_operasional')->nullable();
            $table->string('tgl_sk_izin_operasional')->nullable();
            $table->string('file_sk_izin_operasional')->nullable();
            $table->string('kebutuhan_khusus_dilayani')->nullable();
            $table->string('nomor_rek')->nullable();
            $table->string('nama_bank')->nullable();
            $table->string('cabang_kcp')->nullable();
            $table->string('rekening_atas_nama')->nullable();
            $table->string('mbs')->nullable();
            $table->string('memungut_iuran')->nullable();
            $table->string('nominal_iuran')->nullable();
            $table->string('nama_wajib_pajak')->nullable();
            $table->string('npwp')->nullable();
            $table->string('nomor_telp')->nullable();
            $table->string('nomor_fax')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
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
        Schema::dropIfExists('profil_sekolah');
    }
}
