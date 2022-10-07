<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeralUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geral_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username')->unique();
            $table->string('password');
            $table->boolean('isAdmin')->default(false);
            $table->string('nama_lengkap')->nullable();
            $table->string('email')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('keahlian')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        $defaultData = [

                [
                    'id'                        =>      1,
                    'username'                  =>      'geraladitya',
                    'password'                  =>      bcrypt('geraladitya'),
                    'isAdmin'                   =>      false,
                    'nama_lengkap'              =>      'Geral Aditya Hanif',
                    'email'                     =>      'geral141100@gmail.com',
                    'tanggal_lahir'             =>      '2000-14-11',
                    'jenis_kelamin'             =>      'Laki-laki',
                    'no_hp'                     =>      '08512812383',
                    'keahlian'                  =>      'Programmer',
                    'created_at'                =>      now(),
                    'updated_at'                =>      now(),
                ],
                [
                    'id'                        =>      2,
                    'username'                  =>      'admin',
                    'password'                  =>      bcrypt('admin'),
                    'isAdmin'                   =>      true,
                    'nama_lengkap'              =>      '',
                    'email'                     =>      '',
                    'tanggal_lahir'             =>      '',
                    'jenis_kelamin'             =>      '',
                    'no_hp'                     =>      0,
                    'keahlian'                  =>      '',
                    'created_at'                =>      now(),
                    'updated_at'                =>      now(),
                ]
        ];
        DB:: table('geral_user')->insert($defaultData);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('geral_user');
    }
}
