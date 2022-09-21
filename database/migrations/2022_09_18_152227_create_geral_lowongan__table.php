<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeralLowonganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geral_lowongan_', function (Blueprint $table) {
            $table->id();
            $table->string('pekerjaan');
            $table->string('nama_perusahaan');
            $table->string('alamat');
            $table->string('kota');
            $table->string('deskripsi');
            $table->string('tuntutan');
            $table->string('syarat');
            $table->timestamp('tgl_lahir');
            $table->string('tipe_pekerjaan');
            $table->string('tipe_posisi');
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
        Schema::dropIfExists('geral_lowongan_');
    }
}
