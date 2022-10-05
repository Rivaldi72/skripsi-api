<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGedmiSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gedmi_siswa', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('nis');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('tahun_masuk');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('alamat');
            $table->string('kelas');
            $table->integer('matematika_1')->nulllable();
            $table->integer('bindo_1')->nulllable();
            $table->integer('bing_1')->nulllable();
            // $table->integer('bing_1')->nulllable();
            $table->integer('ipa_1')->nulllable();
            $table->integer('ips_1')->nulllable();
            $table->integer('pkn_1')->nulllable();
            $table->integer('agama_1')->nulllable();
            $table->integer('penjas_1')->nulllable();
            $table->integer('senbud_1')->nulllable();
            $table->integer('matematika_2')->nulllable();
            $table->integer('bindo_2')->nulllable();
            $table->integer('bing_2')->nulllable();
            $table->integer('ipa_2')->nulllable();
            $table->integer('ips_2')->nulllable();
            $table->integer('pkn_2')->nulllable();
            $table->integer('agama_2')->nulllable();
            $table->integer('penjas_2')->nulllable();
            $table->integer('senbud_2')->nulllable();
            $table->integer('matematika_3')->nulllable();
            $table->integer('bindo_3')->nulllable();
            $table->integer('bing_3')->nulllable();
            $table->integer('ipa_3')->nulllable();
            $table->integer('ips_3')->nulllable();
            $table->integer('pkn_3')->nulllable();
            $table->integer('agama_3')->nulllable();
            $table->integer('penjas_3')->nulllable();
            $table->integer('senbud_3')->nulllable();
            $table->integer('matematika_4')->nulllable();
            $table->integer('bindo_4')->nulllable();
            $table->integer('bing_4')->nulllable();
            $table->integer('ipa_4')->nulllable();
            $table->integer('ips_4')->nulllable();
            $table->integer('pkn_4')->nulllable();
            $table->integer('agama_4')->nulllable();
            $table->integer('penjas_4')->nulllable();
            $table->integer('senbud_4')->nulllable();
            $table->integer('matematika_5')->nulllable();
            $table->integer('bindo_5')->nulllable();
            $table->integer('bing_5')->nulllable();
            $table->integer('ipa_5')->nulllable();
            $table->integer('ips_5')->nulllable();
            $table->integer('pkn_5')->nulllable();
            $table->integer('agama_5')->nulllable();
            $table->integer('penjas_5')->nulllable();
            $table->integer('senbud_5')->nulllable();
            $table->integer('matematika_6')->nulllable();
            $table->integer('bindo_6')->nulllable();
            $table->integer('bing_6')->nulllable();
            $table->integer('ipa_6')->nulllable();
            $table->integer('ips_6')->nulllable();
            $table->integer('pkn_6')->nulllable();
            $table->integer('agama_6')->nulllable();
            $table->integer('penjas_6')->nulllable();
            $table->integer('senbud_6')->nulllable();

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
        Schema::dropIfExists('gedmi_siswa');
    }
}
