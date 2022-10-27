<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDediAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dedi_admin', function (Blueprint $table) {
            $table->id();
            $table->username();
            $table->password();
        });
        $defaultData = [
            'id' => 1,
            'username' => 'Admin',
            'password' => 'admin12345',
        ];
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dedi_admin');
    }
}
