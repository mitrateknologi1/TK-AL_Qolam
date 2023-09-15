<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasiKeadaanAnakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi_keadaan_anak', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pribadi');
            $table->string('tinggal_bersama');
            $table->integer('jumlah_penghuni_dewasa');
            $table->integer('jumlah_penghuni_anak');
            $table->string('halaman_bermain');
            $table->string('kesempatan_bergaul');
            $table->string('selera_makan');
            $table->string('hubungan_ayah');
            $table->string('hubungan_ibu');
            $table->string('hubungan_saudara');
            $table->string('kemampuan_buang_air');
            $table->string('kebiasan_tidur_malam');
            $table->string('kebiasan_bangun_pagi');
            $table->string('kebiasan_tidur_siang');
            $table->string('kebiasaan_ngompol');
            $table->string('hal_penting_waktu_tidur');
            $table->string('kepatuhan_anak');
            $table->string('hal_penting_tingkahlaku_anak');
            $table->string('mudah_bergaul');
            $table->string('sifat_baik');
            $table->string('sifat_buruk');
            $table->string('pembantu_rumah_tangga');
            $table->string('peralatan_elektronik');
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
        Schema::dropIfExists('informasi_keadaan_anak');
    }
}
