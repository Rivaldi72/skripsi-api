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
            $table->string('api_token', 80)
                ->unique()
                ->nullable()
                ->default(null);
            $table->rememberToken();
            $table->timestamps();
        });
        $defaulData = [
            [
                'id' => 1,
                'name' => 'Dedi Syaputra',
                'angkatan' => '2016',
                'tempat' => 'Medan',
                'tanggal_lahir' => '20 Maret 1998',
                'alamat' => 'Jalan.Rakyat No.116',
                'email' => 'dedi.thebleckmits@gmail.com',
                'password' => bcrypt('20maret98'),
                'api_token' => 'JVW*i6%+]AJ=xz4HM2q%Bz)9(DC7H[',
            ],
            [
                'id' => 2,
                'name' => 'Eka Hariandayani',
                'angkatan' => '2016',
                'tempat' => 'Medan',
                'tanggal_lahir' => '24 April 1998',
                'alamat' => 'Jalan.Alumunium Gang.Toyib',
                'email' => 'Ekabantet@gmail.com',
                'password' => bcrypt('bantet123'),
                'api_token' => '}[gTtg&W/{im}iEj=iZ,uj..dVzVw!
',
            ],
            [
                'id' => 3,
                'name' => 'Lestariyani Manalu',
                'angkatan' => '2016',
                'tempat' => 'Medan',
                'tanggal_lahir' => '14 September 1998',
                'alamat' => 'Jalan.Wiliam Iskandar',
                'email' => 'tariyani1409@gmail.com',
                'password' => bcrypt('premanpancing'),
                'api_token' => '@pnML6+6x+(}Uz.m2EWr{qCT*}$U#,',
            ],

        ];
        DB::table('dedi_user')->insert($defaulData);
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
