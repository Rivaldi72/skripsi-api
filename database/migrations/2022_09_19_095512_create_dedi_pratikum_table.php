<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDediPratikumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('dedi_pratikum', function (Blueprint $table) {
            $table->id();
            $table->integer('id_mapel');
            $table->string('judul_pratikum', );
            $table->text('detail_pratikum');
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
         $defaulData = [
            [
                'id' => 1,
                'id_mapel' => 1,
                'judul_pratikum' => 'Pewarnaan Sederhana' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pewarnaan
Indikator : mampu memahami bentuk-bentuk bakteri, mampu melakukan prosedur pewarnaan
Tujuan : untuk melihat bentuk bentuk bakteri
Bahan : biakan dalam bouillon
Regensia : fuchsin 0,5%
Komposisi regensia : fuchsin 0,5 gr
-	Aquadest 100ml
 Alat : -- ose cincin
-	Rak tabung
-	Objek glass
-	Mikroskop
-	Lampu bunsen
Cara kerja : - Hidupkan lampu Bunsen
-	Bakar ose cincin hingga merah membara, kemudian dinginkan
-	Ambil bahan biakan dalam bouillon 3-5 ose cincin
-	Kemudian letakkan di atas objek glass,kemudian di ratakan
-	Difiksasi sediaan sampai kering, lalu dinginkan
-	Tetesin dengan regensia, lalu tunggu selama 5 menit
-	Kemudian buang cairan regensia yang ada di objek glass lalu di alirkan dengan air mengalir sampai tidak ada regensia lagi
-	Tetesin minyak imersi oil di atas sediaan
-	Kemudian lihat dibawah mikroskop lensa 100x

Hasil gambar di temukan :
',
                'gambar' => '',
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
        Schema::dropIfExists('dedi_pratikum');
    }
}
