<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChairiahGudangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chairiah_gudang', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('nama');
            $table->string('alamat');
            $table->string('url_alamat');
            $table->string('no_hp');
            $table->string('gambar');
            $table->integer('harga_kopi_gelondong');
            $table->integer('harga_kopi_gabah');
            $table->integer('harga_kopi_biji_hijau');
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
        Schema::dropIfExists('chairiah_gudang');
    }
}
