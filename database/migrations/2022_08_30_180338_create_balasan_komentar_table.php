<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balasan_komentar', function (Blueprint $table) {
            $table->increments('id_balasan_komentar');
            $table->char('id_komentar_aspirasi',25);
            $table->char('keterangan_balasan',25);
            $table->char('waktu',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balasan_komentar');
    }
};
