<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGedmiNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gedmi_nilai', function (Blueprint $table) {
            $table->id();
            $table->integer('id_siswa');
            $table->integer('id_mapel');
            $table->integer('nilai_angka');
            $table->string('nilai_huruf');
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
        Schema::dropIfExists('gedmi_nilai');
    }
}
