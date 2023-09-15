<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaDidikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->integer('id_keluarga');
            $table->integer('id_pendahuluan');
            $table->integer('id_pribadi');
            $table->integer('id_survei');
            $table->integer('id_pendanaan');
            $table->string('nama_lengkap');
            $table->string('agama');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('nama_panggilan');
            $table->integer('berat_badan');
            $table->integer('tinggi_badan');
            $table->integer('jumlah_saudara_kandung');
            $table->integer('jumlah_saudara_tiri');
            $table->string('urutan_lahir');
            $table->text('nama_saudara_dan_usia');
            $table->text('alergi');
            $table->text('penyakit');
            $table->text('informasi');
            $table->string('kategori_peserta');
            $table->string('pindahan_tk');
            $table->date('tanggal_pindahan');
            $table->date('tanggal_diterima');
            $table->string('kelompok');
            $table->string('status_all');
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
        Schema::dropIfExists('peserta_didik');
    }
}
