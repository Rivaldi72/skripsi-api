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
                'jawaban_beneran' => 'Plasma',
                'pilihan_jawaban1' => 'Leukosit',
                'pilihan_jawaban2' => 'Eritrosit',
                'pilihan_jawaban3' => 'Trombosit',

            ],
            [
                'id' => 31,
                'id_mapel' => 2,
                'soal' => 'Pengambilan darah kapiler pada belita berada di',
                'jawaban_beneran' => 'Tumit Kaki',
                'pilihan_jawaban1' => 'Jari Manis Tangan',
                'pilihan_jawaban2' => 'Ibu Jari Tangan',
                'pilihan_jawaban3' => 'Anak Daun Telinga',

            ],
            [
                'id' => 32,
                'id_mapel' => 2,
                'soal' => 'Alat untuk mengambil darah kapiler adalah, kecuali : ',
                'jawaban_beneran' => 'Spoit 3ml',
                'pilihan_jawaban1' => 'Lancet',
                'pilihan_jawaban2' => 'Pipet HB',
                'pilihan_jawaban3' => 'Kapas Alkohol',

            ],
            [
                'id' => 33,
                'id_mapel' => 2,
                'soal' => 'Lokasi Pengambilan darah vena pada orang dewasa adalah : ',
                'jawaban_beneran' => 'Vena mediana cubiti',
                'pilihan_jawaban1' => 'Vena sinus sagitalis',
                'pilihan_jawaban2' => 'Vena jugularis externa',
                'pilihan_jawaban3' => 'Vena Femolaris',

            ],
            [
                'id' => 34,
                'id_mapel' => 2,
                'soal' => 'Alat-alat yang digunakan untuk darah vena kecuali : ',
                'jawaban_beneran' =>  'Pipet Hb',
                'pilihan_jawaban1' => 'Spuit Streil',
                'pilihan_jawaban2' => 'Karet Pengebat',
                'pilihan_jawaban3' => 'Kapas Alkohol',

            ],
            [
                'id' => 35,
                'id_mapel' => 2,
                'soal' => 'Darah Kapiler dapat digunakan untuk pemeriksaan : ',
                'jawaban_beneran' => 'Hemaglobin',
                'pilihan_jawaban1' => 'Darah Rutin',
                'pilihan_jawaban2' => 'Laju Endap Darah',
                'pilihan_jawaban3' => 'Waktu Pembekuan Darah',

            ],
            [
                'id' => 36,
                'id_mapel' => 2,
                'soal' => 'Yang tidak merupakan kontrak indikasi pada pengambilan darah kapiler : ',
                'jawaban_beneran' => 'Menggunakan Alat Stril',
                'pilihan_jawaban1' => 'Oedem',
                'pilihan_jawaban2' => 'Dermatitis',
                'pilihan_jawaban3' => 'Bekas Luka',

            ],
            [
                'id' => 37,
                'id_mapel' => 2,
                'soal' => 'Salah satu kesalahan pengambilan darah kapiler adalah, kecuali ',
                'jawaban_beneran' => 'Tetesan Pertama dibuang',
                'pilihan_jawaban1' => 'Tusukan kurang dalam',
                'pilihan_jawaban2' => 'Tusukan Berulang-ulang',
                'pilihan_jawaban3' => 'Tusukan terlalu dalam',

            ],
            [
                'id' => 38,
                'id_mapel' => 2,
                'soal' => 'Salah satu kesalahan pengambilan darah vena adalah : ',
                'jawaban_beneran' =>  'Menggunakan laricet',
                'pilihan_jawaban1' => 'Menggunakan kapas alkohol',
                'pilihan_jawaban2' => 'Menggunakan Spuit streil',
                'pilihan_jawaban3' => 'Menggunakan botol antikoagulan',

            ],
            [
                'id' => 39,
                'id_mapel' => 2,
                'soal' => 'Pemeriksaan Hematologi menggunakan darah vena adalah kecuali : ',
                'jawaban_beneran' =>  'Waktu pendarahan',
                'pilihan_jawaban1' => 'Darah rutin',
                'pilihan_jawaban2' => 'Golongan Darah',
                'pilihan_jawaban3' => 'Waktu Pembekuan Darah',

            ],
            [
                'id' => 40,
                'id_mapel' => 2,
                'soal' => 'Persiapan Dalam pengambilan darah yang tidak benar adalah :',
                'jawaban_beneran' => 'Analis gugup dan Ketakutan',
                'pilihan_jawaban1' => 'Pasien dalam keadaan tenang',
                'pilihan_jawaban2' => 'Pasien sebaiknya dalam keadaan berbaring',
                'pilihan_jawaban3' => 'alat sudah di persiapkan',

            ],
            [
                'id' => 41,
                'id_mapel' => 3,
                'soal' => 'Cara Pengambilan bahan pemeriksaan urine yang dianjurkan untuk pemeriksaan lab adalah',
                'jawaban_beneran' => 'Sewaktu-waktu',
                'pilihan_jawaban1' => 'Jam 12 siang',
                'pilihan_jawaban2' => 'Pada Sore hari',
                'pilihan_jawaban3' => 'Porsi Tengah',

            ],
            [
                'id' => 42,
                'id_mapel' => 3,
                'soal' => 'Berikut ini faktor-faktor yang mempengaruhi produksi urine kecuali,',
                'jawaban_beneran' => 'Berat Badan',
                'pilihan_jawaban1' => 'Cuaca',
                'pilihan_jawaban2' => 'Makanan dan Minuman',
                'pilihan_jawaban3' => 'Lamanya Waktu Tidur',

            ],
            [
                'id' => 43,
                'id_mapel' => 3,
                'soal' => 'Urine yang pertama kali keluar di buang, urine yang keluar kemudian di tampung dan urine yang terakhir dibuang.Urine yang dikumpulkan dengan cara tersebut disebut',
                'jawaban_beneran' =>  'Midstream',
                'pilihan_jawaban1' => 'Acak',
                'pilihan_jawaban2' => 'Sewaktu',
                'pilihan_jawaban3' => 'Kateterisasi',

            ],
            [
                'id' => 44,
                'id_mapel' => 3,
                'soal' => 'Cara yang benar untuk memperoleh bahan pemeriksaan urine pada penderita yang sedang haid adalah sebagai berikut',
                'jawaban_beneran' =>  'Clean Voickel specimen',
                'pilihan_jawaban1' => 'Midstream',
                'pilihan_jawaban2' => 'Fungsi suprapubik',
                'pilihan_jawaban3' => 'Kateterisasi',

            ],[
                'id' => 45,
                'id_mapel' => 3,
                'soal' => 'Cara yang benar untuk memperoleh bahan pemisahan urine untuk pemeriksaan bakteriologis adalah',
                'jawaban_beneran' =>  'Midstream',
                'pilihan_jawaban1' => 'Katerterisasi',
                'pilihan_jawaban2' => 'Nocther',
                'pilihan_jawaban3' => 'Fungsi Suprapubik',

            ],
            [
                'id' => 46,
                'id_mapel' => 3,
                'soal' => 'Pengawet Urine formalidhida tidak bisa digunakan untuk mengawetkan urine yang mengandung glukosa karena, ',
                'jawaban_beneran' =>  'Mereduksi Glukosa',
                'pilihan_jawaban1' => 'Mereduksi gugus keton',
                'pilihan_jawaban2' => 'Mengoksidasi Cu',
                'pilihan_jawaban3' => 'Mengoksidasi gugus Keton',

            ],
            [
                'id' => 47,
                'id_mapel' => 3,
                'soal' => 'Syarat wadah yang baik untuk menampung urine adalah',
                'jawaban_beneran' =>  'Terbuat dari kaca/plastik yang tidak tembus cahaya dengan mulut yang lebar dan mempunyai penutup',
                'pilihan_jawaban1' => 'Terbuat dari kaca/plastik yang tembus cahaya',
                'pilihan_jawaban2' => 'Terbuat dari kaca/plastik tanpa penutup',
                'pilihan_jawaban3' => 'Terbuat dari kaca/plastik yang bermulut kecil',

            ],
            [
                'id' => 48,
                'id_mapel' => 3,
                'soal' => 'Thymol dalam bentuk hablur 50mg sangat baik untuk mengawetkan urine',
                'jawaban_beneran' => '100 ml',
                'pilihan_jawaban1' => '10 ml',
                'pilihan_jawaban2' => '150 ml',
                'pilihan_jawaban3' => '50 ml',

            ],
            [
                'id' => 49,
                'id_mapel' => 3,
                'soal' => 'Pengawet yang mempunyai sifat pengawet all round ialah',
                'jawaban_beneran' =>  'Na2CO3',
                'pilihan_jawaban1' => 'H2SO4',
                'pilihan_jawaban2' => 'Tymol',
                'pilihan_jawaban3' => 'Toluena',

            ],
            [
                'id' => 50,
                'id_mapel' => 3,
                'soal' => 'Urine Yang di kumpulkan dari jam 7 pagi sampai jam 7 malam disebut',
                'jawaban_beneran' =>  'Urine Siang 12 jam',
                'pilihan_jawaban1' => 'Urine Malam 12 jam',
                'pilihan_jawaban2' => 'Urine 24 Jam',
                'pilihan_jawaban3' => 'Urine Pagi',

            ],
            [
                'id' => 51,
                'id_mapel' => 3,
                'soal' => 'Organ ginjal manusia terdiri dari',
                'jawaban_beneran' =>  '2 pasang Ginjal',
                'pilihan_jawaban1' => '1 pasang Ginjal',
                'pilihan_jawaban2' => '3 pasang Ginjal',
                'pilihan_jawaban3' => '5 pasang Ginjal',

            ],
            [
                'id' => 52,
                'id_mapel' => 3,
                'soal' => 'Proses filtrasi dalam pembentukan urine terjadi di daerah',
                'jawaban_beneran' =>  'Glomerulos',
                'pilihan_jawaban1' => 'Ureter',
                'pilihan_jawaban2' => 'Tubulus',
                'pilihan_jawaban3' => 'Ansa Henle',

            ],
            [
                'id' => 53,
                'id_mapel' => 3,
                'soal' => 'Proses reabsorbsi dalam pembentukan urine terjadi di daerah',
                'jawaban_beneran' =>  'Tubulus',
                'pilihan_jawaban1' => 'Ureter',
                'pilihan_jawaban2' => 'Glomerulos',
                'pilihan_jawaban3' => 'Ansa Henle',

            ],
            [
                'id' => 54,
                'id_mapel' => 3,
                'soal' => 'Pada Pemeriksaan Protein urine apabila urine berubah warna menjadi sangat keruh serta ada endapan yang mengumpul, maka hasil diagnosa tersebut ialah',
                'jawaban_beneran' => 'Positif 4',
                'pilihan_jawaban1' => 'Positif 1',
                'pilihan_jawaban2' => 'Positif 2',
                'pilihan_jawaban3' => 'Positif 3',

            ],
            [
                'id' => 55,
                'id_mapel' => 3,
                'soal' => 'Pada Pemeriksaan Protein Urine Regensia apakah yang digunakan',
                'jawaban_beneran' => 'Asam Asetat 6%',
                'pilihan_jawaban1' => 'Asam Aseton 6%',
                'pilihan_jawaban2' => 'Benedict',
                'pilihan_jawaban3' => 'Amonia',

            ],
            [
                'id' => 56,
                'id_mapel' => 3,
                'soal' => 'Pada Pemeriksaan Reduksi urine bila dinyatakan positif 2,maka pada sampel',
                'jawaban_beneran' =>  'Terjadi Perubahan Warna Kuning Keruh',
                'pilihan_jawaban1' => 'Terjadi Warna Hijau Kekuningan',
                'pilihan_jawaban2' => 'Tidak Terjadi Perubahan Warna',
                'pilihan_jawaban3' => 'Tetap Bewarna Biru',

            ],
            [
                'id' => 57,
                'id_mapel' => 3,
                'soal' => 'Pada Pemeriksaan Aceton Apabila hasil dinyatakan positif ,maka pada sampel',
                'jawaban_beneran' => 'Terjadi Perubahan Warna Violet',
                'pilihan_jawaban1' => 'Terjadi Perubahan Warna Blue',
                'pilihan_jawaban2' => 'Terjadi Perubahan Warna Kuning',
                'pilihan_jawaban3' => 'Terjadi Perubahan Warna Hijau',

            ],
            [
                'id' => 58,
                'id_mapel' => 3,
                'soal' => 'Pada Pemeriksaan Bilirubin Regensia apakah yang digunakan',
                'jawaban_beneran' => 'Fauchet',
                'pilihan_jawaban1' => 'Benedict',
                'pilihan_jawaban2' => 'Amonia',
                'pilihan_jawaban3' => 'Asam Asetat 6%',

            ],
            [
                'id' => 59,
                'id_mapel' => 3,
                'soal' => 'Pada Pemeriksaan Sediment maka diperlukan…. Untuk melihat sediaan sediment',
                'jawaban_beneran' => 'Mikroskop',
                'pilihan_jawaban1' => 'Tabung',
                'pilihan_jawaban2' => 'Penjepit Tabung',
                'pilihan_jawaban3' => 'Glass Ukur',

            ],
            [
                'id' => 60,
                'id_mapel' => 3,
                'soal' => 'Pada Lensa Berapakah untuk melihat sediaan sediment',
                'jawaban_beneran' => '100 x',
                'pilihan_jawaban1' => '10 x',
                'pilihan_jawaban2' => '50 x',
                'pilihan_jawaban3' => '1000 x',

            ],
            [
                'id' => 61,
                'id_mapel' => 4,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 62,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 63,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 64,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 65,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 66,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 67,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 68,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 69,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 70,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 71,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 72,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 73,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 74,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 75,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 76,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 77,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 78,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 79,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 80,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 81,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 82,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 83,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 84,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 85,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 86,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 87,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 88,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,

            ],
            [
                'id' => 89,
                'id_mapel' => 1,
                'soal' => 1,
                'jawaban_beneran' => 1,
                'pilihan_jawaban1' => 1,
                'pilihan_jawaban2' => 1,
                'pilihan_jawaban3' => 1,
            ],
            [
                'id' => 90,
                'id_mapel' => 1,
                'soal' => '',
                'jawaban_beneran' => '',
                'pilihan_jawaban1' => '',
                'pilihan_jawaban2' => '',
                'pilihan_jawaban3' => '',
            ],
        ];


        DB::table('dedi_latihan')->insert($defaulData);
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
