<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDediLatihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('dedi_latihan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_mapel');
            $table->string('soal');
            $table->string('jawaban_beneran', );
            $table->string('pilihan_jawaban1', );
            $table->string('pilihan_jawaban2', );
            $table->string('pilihan_jawaban3', );
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
        Schema::dropIfExists('dedi_latihan');
    }
}
