<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDediMateriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dedi_materi', function (Blueprint $table) {
            $table->id();
            $table->integer('id_mapel');
            $table->string('judul_materi',);
            $table->text('detail_materi');
            $table->string('gambar', );
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
        Schema::dropIfExists('dedi_materi');
    }
}
