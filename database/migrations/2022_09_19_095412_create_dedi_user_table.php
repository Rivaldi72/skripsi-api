<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDediUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('dedi_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', );
            $table->string('angkatan', );
            $table->string('tempat', );
            $table->string('tanggal_lahir', );
            $table->string('alamat', );
            $table->string('email', )->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('dedi_user');
    }
}
