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

        $defaulData = [

            [ 
                'id'                    =>      1,
                'id_user'               =>      1,
                'nama'                  =>      'Oro Coffee',
                'alamat'                =>      'Jl. Raya Bireuen-Takengon No.KM.100 Mongal, Kec. Bebesen, Kabupaten Aceh Tengah, Aceh 24471',
                'url_alamat'            =>      'https://goo.gl/maps/tYLPJD9ffbhfEvx36',
                'no_hp'                 =>      '085276837747',
                'gambar'                =>      'oro_coffe.jpg',
                'harga_kopi_gelondong'  =>      12000,
                'harga_kopi_gabah'      =>      34000,
                'harga_kopi_biji_hijau' =>      75000,
                'created_at'            =>      now(), 
                'updated_at'            =>      now(),
            ],

            [ 
                'id'                    =>      2,
                'id_user'               =>      2,
                'nama'                  =>      'Tiara Global Coffe',
                'alamat'                =>      'Mekar Jadi Ayu, Jl. Tawardi, Kec. Wih Pesam, Kabupaten Bener Meriah, Aceh 24471',
                'url_alamat'            =>      'https://goo.gl/maps/1vgXPtmKtFFSYEu59',
                'no_hp'                 =>      '085213133737',
                'gambar'                =>      'tiara_coffe.jpg',
                'harga_kopi_gelondong'  =>      0,
                'harga_kopi_gabah'      =>      35000,
                'harga_kopi_biji_hijau' =>      75000,
                'created_at'            =>      now(), 
                'updated_at'            =>      now(),
            ],

            [ 
                'id'                    =>      3,
                'id_user'               =>      3,
                'nama'                  =>      'Gudang Kopi H. Selamat',
                'alamat'                =>      'Bebesen, Kec. Bebesen, Kabupaten Aceh Tengah, Aceh 24471',
                'url_alamat'            =>      'https://goo.gl/maps/5goqaeZa6dnJ4dg79',
                'no_hp'                 =>      '082230505292',
                'gambar'                =>      'gdselamat.jpg',
                'harga_kopi_gelondong'  =>      0,
                'harga_kopi_gabah'      =>      0,
                'harga_kopi_biji_hijau' =>      80000,
                'created_at'            =>      now(), 
                'updated_at'            =>      now(),
            ],

            [ 
                'id'                    =>      4,
                'id_user'               =>      4,
                'nama'                  =>      'Gudang Ilham Yunus',
                'alamat'                =>      'Jl. Simpang Empat, Takengon, Aceh Tengah',
                'url_alamat'            =>      'https://goo.gl/maps/TS32XJWnE8eqRD2t8',
                'no_hp'                 =>      '082237836435',
                'gambar'                =>      'iy.jpg',
                'harga_kopi_gelondong'  =>      0,
                'harga_kopi_gabah'      =>      0,
                'harga_kopi_biji_hijau' =>      70000,
                'created_at'            =>      now(), 
                'updated_at'            =>      now(),
            ],

            [ 
                'id'                    =>      5,
                'id_user'               =>      5,
                'nama'                  =>      'Gudang Jikri Gayo',
                'alamat'                =>      'Jl. Simpang Empat, Takengon, Aceh Tengah',
                'url_alamat'            =>      'https://goo.gl/maps/TS32XJWnE8eqRD2t8',
                'no_hp'                 =>      '081272812576',
                'gambar'                =>      'jg.jpg',
                'harga_kopi_gelondong'  =>      0,
                'harga_kopi_gabah'      =>      34000,
                'harga_kopi_biji_hijau' =>      67000,
                'created_at'            =>      now(), 
                'updated_at'            =>      now(),
            ],

        ];
         
        DB:: table('chairiah_gudang')->insert($defaulData);
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
