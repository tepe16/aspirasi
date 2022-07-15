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
        Schema::create('komentar_aspirasi', function (Blueprint $table) {
            $table->increments('id_komentar_aspirasi');
            $table->char('id_berita',25);
            $table->char('nim',25);
            $table->char('nama_mahasiswa',100);
            $table->char('tgl_aspirasi',25);
            $table->text('ket_aspirasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komentar_aspirasi');
    }
};
