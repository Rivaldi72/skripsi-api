<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDediLatihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('dedi_latihan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_mapel');
            $table->string('soal');
            $table->string('jawaban_beneran', );
            $table->string('pilihan_jawaban1', );
            $table->string('pilihan_jawaban2', );
            $table->string('pilihan_jawaban3', );
            $table->timestamps();
        });

        $defaulData = [
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 'Mikroorganisme adalah' ,
                'jawaban_beneran' => 'Makhluk kecil yang hanya dapat dilihat dengan bantuan Mikroskop',
                'pilihan_jawaban1' => 'Makhluk kecil yang dapat dilihat dengan kasat mata',
                'pilihan_jawaban2' => 'Makhluk Besar yang dapat dilihat',
                'pilihan_jawaban3' => 'Sejenis Parasit',

            ],
            [
                'id' => 2,
                'id_mapel' => 1,
                'soal' => 'Satuan pada Mikroorganisme adalah',
                'jawaban_beneran' => 'Micron',
                'pilihan_jawaban1' => 'Meter',
                'pilihan_jawaban2' => 'Gram',
                'pilihan_jawaban3' => "Kilo",

            ],
            [
                'id' => 3,
                'id_mapel' => 1,
                'soal' => 'Siapakah penemu Mikroskop',
                'jawaban_beneran' => 'Antonio van Leeuwenhock',
                'pilihan_jawaban1' => 'Louis Pasteur',
                'pilihan_jawaban2' => 'Robert van de Vaart',
                'pilihan_jawaban3' => 'Robert Koch',

            ],
            [
                'id' => 4,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 5,
                'id_mapel' => 1,
                'soal' => 'Siapakah Penemu dari Penyakit Tuberculosis',
                'jawaban_beneran' => 'Robert Koch',
                'pilihan_jawaban1' => 'Robert Van de Vaart',
                'pilihan_jawaban2' => 'Louis Pasteur',
                'pilihan_jawaban3' => 'Antonio van Leeuwenhock',

            ],
            [
                'id' => 6,
                'id_mapel' => 1,
                'soal' => 'Bakteri Berbentuk Bulat disebut',
                'jawaban_beneran' => 'Coccus',
                'pilihan_jawaban1' => 'Basil',
                'pilihan_jawaban2' => 'Spiral',
                'pilihan_jawaban3' => 'Streptobasil',

            ],
            [
                'id' => 7,
                'id_mapel' => 1,
                'soal' => 'Bakteri yang berbentuk seperti buah anggur adalah',
                'jawaban_beneran' => 'Staphylococcus',
                'pilihan_jawaban1' => 'Streptococcus',
                'pilihan_jawaban2' => 'Diplococcus',
                'pilihan_jawaban3' => 'Tetracoccus',

            ],
            [
                'id' => 8,
                'id_mapel' => 1,
                'soal' => 'Berikut ini macam macam dari pewarnaan bakteri,Kecuali ',
                'jawaban_beneran' => 'Pewarnaan Kilat',
                'pilihan_jawaban1' => 'Pewarnaan Sederhana',
                'pilihan_jawaban2' => 'Pewarnaan Negatif',
                'pilihan_jawaban3' => 'Pewarnaan Gram',

            ],
            [
                'id' => 9,
                'id_mapel' => 1,
                'soal' => 'Dibawah ini adalah tujuan dari pewarnaan Bakteri Kecuali :',
                'jawaban_beneran' => 'Mengembangkan Bakteri',
                'pilihan_jawaban1' => 'Membantu identifikasi Bakteri',
                'pilihan_jawaban2' => 'Mengamati Morfologi Bakteri',
                'pilihan_jawaban3' => 'Membedakan organisme yag serupa',

            ],
            [
                'id' => 10,
                'id_mapel' => 1,
                'soal' => 'Pada Pewarnaan Negatif Regensia apa yang digunakan ?',
                'jawaban_beneran' => 'Tinta Cina',
                'pilihan_jawaban1' => 'Fuchsin',
                'pilihan_jawaban2' => 'Gram',
                'pilihan_jawaban3' => 'Carbol',

            ],
            [
                'id' => 11,
                'id_mapel' => 1,
                'soal' => 'Pada Pewarnaan Gram ada golongan apa saja ',
                'jawaban_beneran' => 'Gram Positif dan Gram Negatif',
                'pilihan_jawaban1' => 'Gram Positif',
                'pilihan_jawaban2' => 'Gram Negatif',
                'pilihan_jawaban3' => 'Gram Plus',

            ],
            [
                'id' => 12,
                'id_mapel' => 1,
                'soal' => 'Pada Regensia Karbol Gentian Violet memiliki komposisi bubuk kristal gentian violet sebanyak  ',
                'jawaban_beneran' => '5 Gram',
                'pilihan_jawaban1' => '4 Gram',
                'pilihan_jawaban2' => '6 Gram',
                'pilihan_jawaban3' => '10 Gram',

            ],
            [
                'id' => 13,
                'id_mapel' => 1,
                'soal' => 'Pada Pemeriksaan Basil Tahan Asam Menggunakan Sampel',
                'jawaban_beneran' => 'Sputum',
                'pilihan_jawaban1' => 'Darah',
                'pilihan_jawaban2' => 'Nanah',
                'pilihan_jawaban3' => 'Faeses',

            ],
            [
                'id' => 14,
                'id_mapel' => 1,
                'soal' => 'Untuk Pemeriksaan Basil Tahan Asam Dilakukan Dengan Cara',
                'jawaban_beneran' => 'Pewarnaan Ziehl Neelsen',
                'pilihan_jawaban1' => 'Pewarnaan Gram',
                'pilihan_jawaban2' => 'Pewarnaan Sederhana',
                'pilihan_jawaban3' => 'Pewarnaan Negatif',

            ],
            [
                'id' => 15,
                'id_mapel' => 1,
                'soal' => 'Dibawah ini Fungsi Dari Fiksasi Kecuali',
                'jawaban_beneran' => 'Mengembangbiakan Bakteri',
                'pilihan_jawaban1' => 'Mencegah globula-globula protein sel',
                'pilihan_jawaban2' => 'Merubah afinitas daya lengkat cat',
                'pilihan_jawaban3' => 'Dapat membunuh bakteri secara cepat tanpa menyebakan perubahan bentuk dan strukturnya',

            ],
            [
                'id' => 16,
                'id_mapel' => 1,
                'soal' => 'Pada Melakukan Pewarnaan Sampel Apakah yang digunakaan',
                'jawaban_beneran' => 'Biakan Dalam Bouillon',
                'pilihan_jawaban1' => 'Sputum',
                'pilihan_jawaban2' => 'Tinja',
                'pilihan_jawaban3' => 'Darah',

            ],
            [
                'id' => 17,
                'id_mapel' => 1,
                'soal' => 'Syarat-syarat pembenihan Media Adalah',
                'jawaban_beneran' => 'Steril dan Ph yang disesuaikan dengan pertumbuhan bakteri',
                'pilihan_jawaban1' => 'Asam yang tinggi',
                'pilihan_jawaban2' => 'Makanan bakteri yang sedikit',
                'pilihan_jawaban3' => 'Zat-zat yang menghambat pertumbuhan bakteri',

            ],[
                'id' => 18,
                'id_mapel' => 1,
                'soal' => '.Pada Lensa Berapakah untuk melihat sampel dari bakteri',
                'jawaban_beneran' => '100 x',
                'pilihan_jawaban1' => '10 x',
                'pilihan_jawaban2' => '50 x',
                'pilihan_jawaban3' => '1000 x',

            ],
            [
                'id' => 19,
                'id_mapel' => 1,
                'soal' => 'Pada Pewarnaan Sederhana Menggunakan Regensia',
                'jawaban_beneran' => 'Fuchsin 0,5 gram',
                'pilihan_jawaban1' => 'Fuchsin 0,1 gram',
                'pilihan_jawaban2' => 'Carbol Gentian Violet 0,5%',
                'pilihan_jawaban3' => 'Tinta Cina',

            ],
            [
                'id' => 20,
                'id_mapel' => 1,
                'soal' => 'Apakah Tujuan Pewarnaan dari pewaraan Ziehl Neelsen',
                'jawaban_beneran' => 'Untuk Melihat Bakteri tahan asam dalam bahan pemeriksaan',
                'pilihan_jawaban1' => 'Untuk Melihat latar belakang warna',
                'pilihan_jawaban2' => 'Untuk Membiakaan Bakteri',
                'pilihan_jawaban3' => 'Untuk membuat media',

            ],
            [
                'id' => 21,
                'id_mapel' => 1,
                'soal' => 'Pada pewarnaan Gram,bila di Mikroskop ditemukan bakteri bewarna ungu maka,',
                'jawaban_beneran' => 'Bakteri bersifat Gram Positif',
                'pilihan_jawaban1' => 'Bakteri bersifat Gram Negatif',
                'pilihan_jawaban2' => 'Bakteri bersifat Gram Positif dan Gram Negatif',
                'pilihan_jawaban3' => 'Bakteri Tidak memiliki Sifat',

            ],
            [
                'id' => 22,
                'id_mapel' => 2,
                'soal' => 'Volume Plasma darah normal berkisar ….% dari berat badan ',
                'jawaban_beneran' => '5%',
                'pilihan_jawaban1' => '4%',
                'pilihan_jawaban2' => '3%',
                'pilihan_jawaban3' => '6%',

            ],
            [
                'id' => 23,
                'id_mapel' => 2,
                'soal' => 'Ilmu yang mempelajari tentang darah, baik mengenai fungsi, susunan dan penyakit-penyakit yang berhubungan darah disebut ',
                'jawaban_beneran' => 'Hematologi',
                'pilihan_jawaban1' => 'Hemoglobin',
                'pilihan_jawaban2' => 'Haemoposis',
                'pilihan_jawaban3' => 'Hematokrit',

            ],
            [
                'id' => 24,
                'id_mapel' => 2,
                'soal' => 'Plasma Darah adalah ',
                'jawaban_beneran' => 'Darah dikurang sel-sel darah',
                'pilihan_jawaban1' => 'Plasma ditambah fibrinogen',
                'pilihan_jawaban2' => 'Plasma dikurang fibrinogen',
                'pilihan_jawaban3' => 'Darah ditambah sel-sel darah',

            ],
            [
                'id' => 25,
                'id_mapel' => 2,
                'soal' => 'Yang tidak termasuk fungsi plasma protein adalah : ',
                'jawaban_beneran' => 'Digunakan sebagai fagosit',
                'pilihan_jawaban1' => 'sebagai antibodi',
                'pilihan_jawaban2' => 'sebagai buffer dalam darah',
                'pilihan_jawaban3' => 'mempertahankan tekanan osmosis koloid',

            ],
            [
                'id' => 26,
                'id_mapel' => 2,
                'soal' => 'Bahan yang tidak dibawa dalam transportasi oleh darah adalah ',
                'jawaban_beneran' => 'Elektrolit',
                'pilihan_jawaban1' => 'Air',
                'pilihan_jawaban2' => 'Hormon',
                'pilihan_jawaban3' => 'Oksigen',

            ],
            [
                'id' => 27,
                'id_mapel' => 2,
                'soal' => 'Cairan darah yang diperoleh tanpa pemberian antikoagulan dinamakan ',
                'jawaban_beneran' => 'Serum',
                'pilihan_jawaban1' => 'Plasma',
                'pilihan_jawaban2' => 'Cholestrol',
                'pilihan_jawaban3' => 'Protein',

            ],
            [
                'id' => 28,
                'id_mapel' => 2,
                'soal' => 'Sel Leukosit berguna untuk melawan kuman-kuman yang masuk ke dalam tubuh dan untuk merangsang pembentukan antibody hal ini termasuk fungsi darah dalam proses ',
                'jawaban_beneran' => 'Imunitas',
                'pilihan_jawaban1' => 'Nutrisi',
                'pilihan_jawaban2' => 'Ekskreasi',
                'pilihan_jawaban3' => 'Respirasi',

            ],
            [
                'id' => 29,
                'id_mapel' => 2,
                'soal' => 'Suatu Cairan yang terdapat di dalam pembuluh-pembuluh dan terdapat benda-benda padat yang melayang-layang didalam nya disebut ',
                'jawaban_beneran' => 'Darah',
                'pilihan_jawaban1' => 'Serum',
                'pilihan_jawaban2' => 'Plasma',
                'pilihan_jawaban3' => "Hematokrit",

            ],
            [
                'id' => 30,
                'id_mapel' => 2,
                'soal' => 'Yang tidak termasuk komponen koupuskuli adalah : ',
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 31,
                'id_mapel' => 2,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 32,
                'id_mapel' => 2,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 33,
                'id_mapel' => 2,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 34,
                'id_mapel' => 2,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 35,
                'id_mapel' => 2,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 36,
                'id_mapel' => 2,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 37,
                'id_mapel' => 2,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 38,
                'id_mapel' => 2,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 39,
                'id_mapel' => 2,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 40,
                'id_mapel' => 2,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 41,
                'id_mapel' => 2,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 42,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 43,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 44,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],[
                'id' => 45,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 46,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 47,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 48,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 1,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ]
        ];

    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dedi_latihan');
    }
}
