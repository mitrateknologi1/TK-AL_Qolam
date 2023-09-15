<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendahaluanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendahuluan', function (Blueprint $table) {
            $table->id();
            $table->text('latar_belakang');
            $table->text('harapan_keilmuan');
            $table->text('harapan_keilmuan_agama');
            $table->text('harapan_keilmuan_sosial');
            $table->integer('jangka_waktu_belajar');
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
        Schema::dropIfExists('pendahaluan');
    }
}
