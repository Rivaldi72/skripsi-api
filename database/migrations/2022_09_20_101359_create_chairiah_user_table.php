<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChairiahUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chairiah_user', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });

        $defaulData = [

            [ 
                'id'                    =>      1,
                'username'              =>      'orocoffee',
                'email'                 =>      'orocoffee@gmail.com',
                'password'              =>      bcrypt('orocoffe123'),
            ],

            [ 
                'id'                    =>      2,
                'username'              =>      'tiaraglobalcoffe',
                'email'                 =>      'tiaraglobalcoffe@gmail.com',
                'password'              =>      bcrypt('tiaraglobalcoffe123'),
            ],

            [ 
                'id'                    =>      3,
                'username'              =>      'gudangkopihselamat',
                'email'                 =>      'gudangkopihselamat@gmail.com',
                'password'              =>      bcrypt('gudangkopihselamat123'),
            ],

            [ 
                'id'                    =>      4,
                'username'              =>      'gudangilhamyunus',
                'email'                 =>      'gudangilhamyunus@gmail.com',
                'password'              =>      bcrypt('gudangilhamyunus123'),
            ],

            [ 
                'id'                    =>      5,
                'username'              =>      'gudangjikrigayo',
                'email'                 =>      'gudangjikrigayo@gmail.com',
                'password'              =>      bcrypt('gudangjikrigayo123'),
            ],
        ];

        DB:: table('chairiah_user')->insert($defaulData);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chairiah_user');
    }
}
