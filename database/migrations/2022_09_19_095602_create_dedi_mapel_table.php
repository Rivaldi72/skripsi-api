<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDediMapelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dedi_mapel', function (Blueprint $table) {
            $table->id();
            $table->string('mata_pelajaran', );
            $table->timestamps();
        });
        $defaulData = [
            [
                'id' => 1,
                'mata_pelajaran' => 'Bakteriologi',
            ],
                        [
                'id' => 2,
                'mata_pelajaran' => 'Hematologi',
            ],
                        [
                'id' => 3,
                'mata_pelajaran' => 'Patologi Klinik',
            ],
                        [
                'id' => 4,
                'mata_pelajaran' => 'Parasitologi',
            ],
                        [
                'id' => 5,
                'mata_pelajaran' => 'Imunologi',
            ],
                        [
                'id' => 6,
                'mata_pelajaran' => 'Serologi',
            ],
                        [
                'id' => 7,
                'mata_pelajaran' => 'Kimia Makanan',
            ],
                        [
                'id' => 8,
                'mata_pelajaran' => 'Kimia Minuman',
            ],

        ];
        DB::table('dedi_mapel')->insert($defaulData);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dedi_mapel');
    }
}
