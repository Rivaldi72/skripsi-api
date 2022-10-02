<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDediPratikumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('dedi_pratikum', function (Blueprint $table) {
            $table->id();
            $table->integer('id_mapel');
            $table->string('judul_pratikum', );
            $table->text('detail_pratikum');
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
        Schema::dropIfExists('dedi_pratikum');
    }
}
