<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeteranganPribadiMuridTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keterangan_pribadi_murid', function (Blueprint $table) {
            $table->id();
            $table->string('kemampuan_membaca_latin');
            $table->string('kemampuan_membaca_hijaiyah');
            $table->string('kemampuan_menggambar'); 
            $table->string('kemampuan_angka');
            $table->text('judul_buku_latin');
            $table->string('kemampuan_menulis');
            $table->string('kemampuan_berhitung');
            $table->string('tata_cara_berwudhu');
            $table->string('tata_cara_solat');
            $table->text('hafalan_juzamma');
            $table->string('hafalan_doa');
            $table->text('doa_harian_hafal');
            $table->text('hobi');
            $table->string('hafal_murotal');
            $table->string('berlangganan_majalah');
            $table->string('tinggal_bersama');
            $table->string('status');
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
        Schema::dropIfExists('keterangan_pribadi_murid');
    }
}
