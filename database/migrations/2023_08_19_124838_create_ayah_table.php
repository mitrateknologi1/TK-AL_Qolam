<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayah', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('agama');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('alamat_kantor');
            $table->string('nomor_telepon_rumah');
            $table->string('nomor_telepon_kantor');
            $table->string('no_whatsapp');
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
        Schema::dropIfExists('ayah');
    }
}
