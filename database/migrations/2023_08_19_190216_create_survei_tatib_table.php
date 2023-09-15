<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveiTatibTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survei_tatib', function (Blueprint $table) {
            $table->id();
            $table->text('tidak_boleh_ditunggu');
            $table->text('berpakaian_islami');
            $table->text('larangan_berpakaian_perhiasan');
            $table->text('kehadiran_dua_bulan');
            $table->text('tatib_merokok');
            $table->text('gizi_sehat');
            $table->text('kontrol_pengembangan');
            $table->text('kerja_sama');
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
        Schema::dropIfExists('survei_tatib');
    }
}
