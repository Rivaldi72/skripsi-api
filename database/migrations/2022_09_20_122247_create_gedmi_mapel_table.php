<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGedmiMapelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gedmi_mapel', function (Blueprint $table) {
            $table->id();
            $table->string('hari');
            $table->string('jam');
            $table->string('nama_guru');
            $table->string('bidang_studi');
            $table->string('kelas');
            $table->timestamps();
        });

        $defaultData = [
            [
                'id' => 1,
                'hari' => 'Senin',
                'nama_guru' => 'Huta Raja',
                'bidang_studi' => '1978-03-19',
                'Kelas' => 'Guru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gedmi_mapel');
    }
}
