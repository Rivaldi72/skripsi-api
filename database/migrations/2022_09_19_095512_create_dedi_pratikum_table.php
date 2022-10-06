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
                Indikator : Mampu memahami bentuk-bentuk bakteri, mampu melakukan prosedur pewarnaan
                Tujuan : Untuk melihat bentuk bentuk bakteri
                Bahan : Biakan dalam bouillon
                Regensia : Fuchsin 0,5%
                Komposisi regensia : Fuchsin 0,5 gr
                -	Aquadest 100ml
                Alat : - ose cincin
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

                Hasil gambar di temukan :',
                'gambar' => '',
            ],
             [
                'id' => 2,
                'id_mapel' => 1,
                'judul_pratikum' => 'Pewarnaan Gram' ,
                'detail_pratikum' => 'Indikator : Mampu menjelaskan tentang pewarnaan gram
                                    -	Mampu menjelaskan prosedur pewarnaan gram
                                    Tujuan : Untuk membedakaan dua kelompok bakteri dimana bakteri yang bewarna ungu bersifat gram positif dan bakteri bewarna merah bersifat gram negatif
                                    Bahan : biakan dalam bouilon
                                    Regensia : - Carbol Gentian Violet 0,5%
                                    -	Lugol
                                    -	Alkohol 96%
                                    -	Fuchsin 0,5%
                                    Alat : - Rak Tabung
                                    -	 Lampu Bunsen
                                    -	Ose Cincin
                                    -	Objek Glass
                                    -	Mikroskop
                                    Cara kerja :
                                    Bakar ose cincin hingga merah membara, lalu dinginkan
                                    Ambil biakan dalam boilon 3-5 ose cincin, letakkan di atas objek glass, ratakan di atas objek glass
                                    Ratakan di atas objek glass
                                    Lalu fiksasi sediaan di atas di atas lampu bunsen sampai kering
                                    Kemudian di tetesin dengan regensia carbol gentian violet, lalu tunggu 5 menit
                                    Lalu buang cairan regensia, lalu alirkan air di air
                                    Kemudian tetesin dengan lugol, lalu tnggu 1menit
                                    Alirkan/ tetesin alkohol sampai tidak ada zat warna lagi di objek glass
                                    Lalu tetsin regensia fuchsin 0,5% tunggu selama 5menit
                                    Lalu buang regensia di air mengalir
                                    Lalu keringkan dengan tisu
                                    Kemudia tetesin dengan minyak imersi oil 1 tetes
                                    Kemudian lihat di mikroskop dengan lensa objektif 100x

                                    Hasil gambar',
                'gambar' => '',
            ],
            [
                'id' => 3,
                'id_mapel' => 1,
                'judul_pratikum' => 'Pewarnaan Ziehl Neelsen' ,
                'detail_pratikum' => 'Indikator : Mampu menjelaskan pembagian pewarnaan
                                      Mampu melakukan pewarnaan ziehl neelsen
                                    Tujuan : Untuk melihat bakteri tahan asam dalam bahan pemeriksaan
                                    Bahan : Sputum (dahak)
                                    Regensia : Carbol fuchsin 1%
                                               Hcl alkohol 3%
                                               Metylen blue 1%
                                    Alat : - objek glass
                                                Lidi
                                                Mikroskop
                                                Lampu bunsen
                                    Cara kerja :
                                    ambil sputum seujung lidi
                                    Lalu letakkan di atas objek glass,lalu ratakan
                                    Fiksasi di atas lampu bunsen sampai kering lalu dinginkan
                                    Lalu tetesin carbol fuchsin 1% sampai menutupi semua bagian sampel
                                    uapkan di atas lampu bunsen , lalu dinginkan dan tunggu selama  5 menit
                                    setelah itu lunturkan dengan hcl alkohol 3% sampai warna nya luntur
                                    lalu tetesin metylen blue 1% lalu tunggu 1 menit
                                    setelah itu buang metylen blue dengan air mengalir hingga zat warna nya luntur
                                    lalu keringkan dengan tissu
                                    lalu tetesin dengan minyak imercy oil 1 tetes
                                    lalu periksa di bawah mikroskop dengan lensa pembesaran lensa objektif 100 kali',
                'gambar' => '',
            ],
            [
                'id' => 4,
                'id_mapel' => 1,
                'judul_pratikum' => 'Pewarnaan Kinyoun Gabbet' ,
                'detail_pratikum' => 'Indikator : Mampu membedkaan BTA positif dan BTA Negatif
                                                   Mampu melakukan pewarnaan kinyoun gabbet
                                    Tujuan : Untuk melihat ada tidaknya bakteri tahan asam (BTA) dalam bahan pemekrisaan
                                    Bahan : Sputum (Dahak)
                                    Regensia : - Kinyoun
                                                 Gabbet
                                    Alat : objek glass
                                                Mikroskop
                                                Lidi
                                                Lampu bunsen
                                    Cara kerja :
                                    Ambil sputum seujung lidi
                                    Lalu letakkan di atas objek glass, lalu ratakan
                                    Fiksasi di atas lampu bunsen sampai kering, lalu dingin kan
                                    Lalu tetesin dengan kinyoun sampai menutupi semua sampel lalu tunggu selama 5 menit
                                    Lalu buang kinyoun dengan air mengalir
                                    Lalu tetesin gabbet dan tunggu selama 2 menit
                                    Setelah itu buang gabbet dengan air mengalir sampai zat nya hilang
                                    Lalu keringkan dengan tissu
                                    Kemudian tetesin dengan minyak imercy oil
                                    Kemudian periksa dibawah mikroskop dengan lensa objektif perbesar 100kali',
                'gambar' => '',
            ],
            [
                'id' => 5,
                'id_mapel' => 1,
                'judul_pratikum' => 'Pewarnaan Negatif' ,
                'detail_pratikum' => 'Metode : Burri Gins
                                    Tujuan : mampu melakukan pewarnaan negatif
                                    Bahan : biakan dalam bouiloon
                                    Regensia : tinta cina
                                    Alat : ose cincin
                                            Lampu bunsen
                                            Rak tabung
                                            Objek glass
                                            Mikroskop
                                    Cara kerja
                                    Bakar ose cincin hingga merah membara, lalu dingin kan
                                    Ambil biakan bouilon letakkan di ujung objek glass
                                    Lalu ambil tinta cina letakkan di sebalah bahan sampel tadi
                                    Kemudian campur dengan objek glass satu lgi lalu dorongkan sehingga membentuk lidah api
                                    Kemudian tunggu kering
                                    Lalu tetesin minyak imercy oil 1 tetes
                                    Kemudian periksaan di bawah mikroskop lensa pembesaran 100 kali',
                'gambar' => '',
            ],
            [
                'id' => 6,
                'id_mapel' => 2,
                'judul_pratikum' => 'PEMERIKSAAN GAMBARAN DARAH TEPI TROMBOSIT' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan Gambaran Darah Tepi Trombosit
                                    Indikator : Mampu memahami pemeriksaan Gambaran Darah Tepi trombosit, Untuk melihat bentuk trombosit dan kelainan bentuk trombosit.
                                    Metode : Tetes tipis
                                    Bahan : Darah kapiler
                                    Regensia :
                                            methanol
                                            Gimsa
                                            Buffer Phosfat 1:4
                                            Imerci oil

                                    Alat :
                                            -	Objek glass
                                            -	Kaca pendorong
                                            -	mikroskop

                                    Cara kerja :
                                            -	Siapkan alat dan bahan
                                            -	Lakukan pengambilan darah kapiler
                                            -	Letakkan 1 tetes kapiler pada objek glass
                                            -	Dorong darah tersebut menggunakan kaca pendorong bhingga membentuk lidah api, tunggu hingga kering
                                            -	Tetesin methanol tunggu hingga methanol menguap
                                            -	Tetesi gimsa buffer phosfat 1:4 tunggu selama 15 menit
                                            -	Cuci dengan air mengalir lalu tunggu kering.
                                            -	Beri 1 tetes imerci oil pada sedian
                                            -	Amati morfologi darah pada mikroskop dengan pembesaran 100x

                                    Interpresi Hasil
                                            ',
                'gambar' => '',
            ],
            [
                'id' => 7,
                'id_mapel' => 2,
                'judul_pratikum' => 'Pemeriksaan Gambaran Darah Tepi Leukosit',
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan Gambaran Darah Tepi Leukosit
                                    Indikator : Mampu memahami pemeriksaan Gambaran Darah Tepi Leukosit, Untuk melihat bentuk leukosit dan kelainan bentuk leukosit
                                    Metode : Tetes tipis
                                    Bahan : Darah kapiler
                                    Regensia :
                                    methanol
                                    Gimsa
                                    Buffer Phosfat 1:4
                                    Imerci oil
                                    Alat
                                    -	Objek glass
                                    -	Kaca pendorong
                                    -	mikroskop
                                    Cara kerja :
                                    -	Siapkan alat dan bahan
                                    -	Lakukan pengambilan darah kapiler
                                    -	Letakkan 1 tetes kapiler pada objek glass
                                    -	Dorong darah tersebut menggunakan kaca pendorong bhingga membentuk lidah api, tunggu hingga kering
                                    -	Tetesin methanol tunggu hingga methanol menguap
                                    -	Tetesi gimsa buffer phosfat 1:4 tunggu selama 15 menit
                                    -	Cuci dengan air mengalir lalu tunggu kering.
                                    -	Beri 1 tetes imerci oil pada sedian
                                    -	Amati morfologi darah pada mikroskop dengan pembesaran 100x
                                    Interpresi Hasil',
                'gambar' => '',
            ],
            [
                'id' => 8,
                'id_mapel' => 2,
                'judul_pratikum' => 'Pemeriksaan Gambaran Darah Tepi Eritrosit' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan Gambaran Darah Tepi Leukosit
                                    Indikator : Mampu memahami pemeriksaan Gambaran Darah Tepi Leukosit, Untuk melihat bentuk leukosit dan kelainan bentuk leukosit
                                    Metode : Tetes tipis
                                    Bahan : Darah kapiler
                                    Regensia :
                                    methanol
                                    Gimsa
                                    Buffer Phosfat 1:4
                                    Imerci oil
                                    Alat
                                    -	Objek glass
                                    -	Kaca pendorong
                                    -	mikroskop
                                    Cara kerja :
                                    -	Siapkan alat dan bahan
                                    -	Lakukan pengambilan darah kapiler
                                    -	Letakkan 1 tetes kapiler pada objek glass
                                    -	Dorong darah tersebut menggunakan kaca pendorong bhingga membentuk lidah api, tunggu hingga kering
                                    -	Tetesin methanol tunggu hingga methanol menguap
                                    -	Tetesi gimsa buffer phosfat 1:4 tunggu selama 15 menit
                                    -	Cuci dengan air mengalir lalu tunggu kering.
                                    -	Beri 1 tetes imerci oil pada sedian
                                    -	Amati morfologi darah pada mikroskop dengan pembesaran 100x
                                    Interpresi Hasil',
                'gambar' => '',
            ],
            [
                'id' => 9,
                'id_mapel' => 2,
                'judul_pratikum' => 'Pemeriksaan Hemoglobin (HB)',
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan Haemoglobin
                                    Indikator : Mampu memahami pemeriksaan Haemoglobin, untuk menentukan kadar Hb seseorang
                                    Metode : Sahli
                                    Bahan : Darah kapiler
                                    Regensia :
                                    HCl 0,1 N
                                    Aquadest
                                    Alat : Hemometer
                                    Cara kerja :
                                    -	Siapkan alat dan bahan
                                    -	Masukkan HCl 0,1 N sebanyak 5 tetes (sampai skala 2) kedalam tabung pengencer hemometer
                                    -	Lakukan pengambilan darah kapiler
                                    -	Isap sampel darah dengan pipet hemoglobin sampai garis tanda 20 cmm atau sebanyak 20 μl
                                    -	hapus darah yang melekat di sebelah luar ujung pipet
                                    -	Segera alirkan darah dari pipet kedalam dasar tabung pengencer yang berisi HCl 0,1 N, jangan sampai terjadi gelembung udara
                                    -	Bilas pipet sebanyak 2 – 3 kali untuk membersihkan sisa darah yang masih teringgal didalam pipet
                                    -	Campur sampai homogen agar darah dan asam bersenyawa menggunakan batang pengaduk (warna campuran menjadi coklat tua).
                                    -	Tambahkan dengan aquadest setetes demi setetes sambil diaduk dengan batang pengaduk sampai warna sesuai dengan standar warna hemometer
                                    -	Baca kadar hemoglobin dalam satuan gram/dl
                                    Interpretasi Hasil
                                    Laki-laki 	:14-16 gram/dl
                                    Perempuan	: 12-14 gram/dl',
                'gambar' => '',
            ],
            [
                'id' => 10,
                'id_mapel' => 2,
                'judul_pratikum' => 'PEMERIKSAAN HITUNG JUMLAH ERITROSIT' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan Hitung Jumlah Eritrosit
                                        Indikator : Mampu memahami pemeriksaan Hitung Jumlah Eritrosit, menghitung jumlah eritrosit dalam tubuh seseorang.
                                        Metode : Sahli
                                        Bahan : Darah kapiler
                                        Regensia :
                                        Hayem
                                        Aquadest
                                        Alat : Hemocytometer
                                        Cara kerja :
                                        -	Siapkan alat dan bahan
                                        -	Lakukan pengambilan darah kapiler
                                        -	gunakan pipet eritrosit standar yang bertanda “101”, kemudian hisap darah sampai tanda “0.5”. ujung pipet dibersihkan dengan tissue
                                        -	Larutan hayem dihisap sampai tanda “101”.
                                        -	tempatkan pipet horizontal, tutup ujung-ujungnya dengan jari telunjuk dan ibu jari kemudian homogenkan
                                        -	buang 3 tetes cairan salam pipet
                                        -	masukkan beberapa tetes cairan dalam pipet pada hemositometer. Tunggu 1-2 menit
                                        -	Lakukan penghitungan pada kamar E1, E2, E3, E4, & E5 dengan perbesaran lensa 40x
                                        Rumus perhitungan
                                        Sel-sel yang terhitung X 10 (0,1 mm kedalam Haemocytometer) X 5 (1/5 dari1 mm³) X 200 (1: 200) = jumlah eritrosit per mm³.
                                        ',
                'gambar' => '',
            ],
            [
                'id' => 11,
                'id_mapel' => 2,
                'judul_pratikum' => 'PEMERIKSAAN HITUNG JUMLAH LEUKOSIT' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan Hitung Jumlah Leukosit
                                        Indikator : Mampu memahami pemeriksaan Hitung Jumlah Leukosit, menghitung jumlah leukosit dalam tubuh sesorang.
                                        Metode : Sahli
                                        Bahan : Darah Kapiler
                                        Regensia :
                                        Hayem
                                        Aquadest
                                        Alat : Hemocytometer
                                        Cara kerja :
                                        •	Siapkan alat dan bahan
                                        •	Lakukan pengambilan darah kapiler
                                        •	gunakan pipet eritrosit standar yang bertanda “11”, kemudian hisap darah sampai tanda “0.5”. ujung pipet dibersihkan dengan tissue
                                        •	Larutanh Turk dihisap sampai tanda “11”.
                                        •	tempatkan pipet horizontal, tutup ujung-ujungnya dengan jari telunjuk dan ibu jari kemudian homogenkan
                                        •	buang 3 tetes cairan salam pipet
                                        •	masukkan beberapa tetes cairan dalam pipet pada hemositometer. Tunggu 1-2 menit
                                        •	Lakukan penghitungan pada kamar L1, L2, L3 & L4 dengan perbesaran lensa 10x
                                        Perhitungan
                                        Jumlah Leukosit Per mm3 = P x V x N

                                        Keterangan :
                                        P : Pengenceran
                                            Rumus Pengenceran = Jumlah Larutan Turk yang dipipet + Jumlah darah EDTA yang dipipet
                                            Jumlah darah EDTA yang dipipet
                                        V : Volume Bilik Hitung
                                            Rumus Volume = P x L x T x Jumlah kotak
                                            = 1/10 mm x 1 mm x  1   x 4
                                            =  4\10    =   10/4
                                        N : Jumlah Sel Leukosit yang dihitung',
                'gambar' => '',
            ],
            [
                'id' => 12,
                'id_mapel' => 2,
                'judul_pratikum' => ': PEMERIKSAAN HEMATOKRIT' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan Hitung Jumlah Hematokrit
                                        Indikator : Mampu memahami pemeriksaan Hitung Jumlah Hematokrit, menentukan nilai hematokrit seseorang
                                        Metode : Mikro
                                        Bahan : Darah kapiler
                                        Regensia : -
                                        Alat
                                        -	Mikro pipet
                                        -	Skala Hematokrit
                                        -	Dempul
                                        -	Centrifuge

                                        Cara kerja :
                                        •	Siapkan alat dan bahan
                                        •	Lakukan pengambilan darah kapiler
                                        •	Pipet darah dengan mikro pipet hematokrit hingga ¾ bagian
                                        •	Dempul bagian bawah ( bagian yg digunakan menghisap darah)
                                        •	Sentrifuge selama 15 menit dengan kecepatan 15.000 rpm
                                        •	Baca hasil menggunakan Skala Hematokrit
                                        Nilai Normal
                                        •	Dewasa pria : 40 - 52 %
                                        •	Dewasa wanita : 35 - 47 %
                                        •	Bayi baru lahir : 44 - 72 %
                                        •	Anak usia 1 - 3 tahun : 35 - 43 %
                                        •	Anak usia 4 - 5 tahun : 31 - 43 %
                                        •	Anak usia 6-10 tahun : 33 - 45 %',
                'gambar' => '',
            ],
            [
                'id' => 13,
                'id_mapel' => 2,
                'judul_pratikum' => 'PEMERIKSAAN LED (LAJU ENDAP DARAH)' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan LED ( Laju Endap Darah)
                                        Indikator : Mampu memahami pemeriksaan LED ( Laju Endap Darah) untuk mengetahui kecepatan laju endap darah
                                        Metode : Westergreen
                                        Bahan : Darah vena
                                        Regensia : NaCl 0,9%
                                        Alat
                                        -	Pipet Westergreen
                                        -	Rak Westergren
                                        -	Tabung Reaksi
                                        -	Selang dan bola penghisap

                                        Cara kerja :
                                        •	Siapkan alat dan bahan
                                        •	Lakukan pengambilan darah Vena
                                        •	Pipet darah sebanyak 1,6 ml lalu tambahkan 0,4 ml NaCl 0,9% kedalam tabung reaksi
                                        •	Homogenkan, lalu pipet kedalam pipet westergreen hingga angka 0.
                                        •	Berdirikan tegak lurus pada rak Westergren dan tunggu selama 1 jam
                                        •	Baca tinggi plasma yang terbentuk.
                                        Interpretasi hasil
                                        Laki-laki  	: 0 – 20 mm/jam
                                        Perempuan	: 0 – 15 mm/jam',
                'gambar' => '',
            ],
            [
                'id' => 14,
                'id_mapel' => 2,
                'judul_pratikum' => 'PEMERIKSAAN CLOTTING TIME (CT)' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan Clotting Time
                                        Indikator : Mampu memahami pemeriksaan Clotting Time, untuk menentukan waktu pembekuan darah seseorang
                                        Metode : Lee and White
                                        Bahan : Darah vena
                                        Regensia : -
                                        Alat
                                        -	Spuit
                                        -	Tourniquet
                                        -	Tabung reaksi
                                        -	Stopwatch

                                        Cara kerja :
                                        -	Tempatkan ke 4 tabung reaksi ke dalam water bath (370C)
                                        -	Ambil darah vena 4 ml, segera jalankan stop watch pada saat darah tampak di dalam jarum . Tuangkan 1 ml kedalam setiap tabung.
                                        -	Setelah 3 menit mulailah mengamati tabung 1 . Angkat tabung keluar dari water bath dalam posisi tegak lurus, lalu miringkan, perhatikan apakah darah masih bergerak atau tidak (membeku). Lakukan hal ini pada tabung 1 setiap selang waktu 30 detik sampai terlihat darah dalam tabung sudah tidak bergerak ( darah sudah membeku ).
                                        -	Catat selang waktu dari saat pengambilan darah sampai darah membeku sebagai masa pembekuan.

                                        Interpretasi hasil
                                        Normal 		: 4- 10 menit',
                'gambar' => '',
            ],
            [
                'id' => 15,
                'id_mapel' => 2,
                'judul_pratikum' => 'PEMERIKSAAN BLEEDING TIME (BT)',
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan Bleeding Time
                                        Indikator : Mampu memahami pemeriksaan bleeding Time, untuk menentukan waktu perdarahan darah seseorang
                                        Metode : Duke
                                        Bahan : Darah vena
                                        Regensia : -
                                        Alat
                                        -	Lancet
                                        -	Kapas alcohol 70%
                                        -	Kertas saring
                                        -	Stopwatch
                                        Cara kerja :
                                        -	Letakkan handuk pada pundak, untuk antisipasi darah tiba-tiba mengucur mengenai pundak pasien
                                        -	Disinfeksi cuping telinga dengan kapas alkohol 70% dan tunggu kering
                                        -	Pegang cuping telinga antara ibu jari dan telunjuk.
                                        -	Tusuk pinggir cuping telinga dengan lancet sedalam 2 mm.
                                        -	Ketika titik darah terlihat, hidupkan stopwatch
                                        -	Darah yg keluar dihisap dengan kertas saring setiap 30 detik, tapi tidak boleh menyentuh lukanya.
                                        -	Tampung lagi tetesan-tetesan darah berikutnya setiap 30 detik. Normalnya, ukuran tetesan makin lama makin kecil
                                        -	Kalau darah tidak keluar, stopwatch dihentikan. Catat waktu yang ditunjukkan pada stopwatch, atau hitung banyaknya tetesan darah pada kertas saring, lalu kali 30 detik.
                                        Interpretasi hasil :
                                        Normal 		: 1 - 5 menit',
                'gambar' => '',
            ],
            [
                'id' => 16,
                'id_mapel' => 3,
                'judul_pratikum' => 'Pemeriksaan Protein Urine' ,
                'detail_pratikum' => 'Prinsip : protein yang ada di dalam urine akan membentuk presipitasi/kekeruhan /endapan dalam suasana panas
                                        Tujuan : Untuk menentukan adanya protein dalam urine
                                        Bahan : Urine
                                        Regensia : Asam Asetat 6%
                                        Alat : Tabung Reaksi,gelas kimia, rak tabung, lampu bunsen, gelas ukur, penjepit
                                        Cara kerja :
                                        -	Pipet 5ml urine pada tabung reaksi
                                        -	Tambahkan 0,5 ml reagen asam asetat
                                        -	Didihkan tabung tersebut di atas lampu bunsen dengan mengunakan penjepit tabung
                                        -	Letakkan tabung pada rak tabung
                                        -	Amati hasilnya dan catat hasilnya
                                        Hasil :
                                        - Negatif  (-) : Urine Jernih
                                            - Positif 1 (+) : Ada kekeruhan yang kurang jelas tanpa di ikutin butiran-butiran kekeruhan.
                                            - Positif 2 (++) : kekeruhan mudah terlihat dan ada endapan.
                                            - Positif 3 (+++) : urine lebih keruh dan endapan yang lebih jelas
                                            - Positif 4 (++++) : urine sangat keruh dan di sertai endapan yang menggumpal',
                'gambar' => '',
            ],
            [
                'id' => 17,
                'id_mapel' => 3,
                'judul_pratikum' => 'Penentuan Reduksi Urine' ,
                'detail_pratikum' => 'Metode : Benedict
                                        Prinsip : Glukosa yang ada di dalam urine akan mereduksi garam komplek Cu2So4  dalam suasana panas akan membentuk endapan cu2So4 bewarna hingga merah bata
                                        Tujuan : Untuk mengetahui adanya glukosa dalam urine
                                        Bahan : Urine
                                        Regensia : Benedict
                                        Alat : Rak tabung, tabung reaksi , gelas kimia , gelas ukur, lampu bunsen , penjepit, pipet ukur, pipet tetes
                                        Cara kerja :
                                        -	Pipet 5 ml reagen benedict dan masukkan dalam tabung reaksi
                                        -	Tambahkan 8 tetes urine bahan dan kocok hingga merata
                                        -	Didihkan hingga mendidih selama 1-2 menit
                                        -	Letakkan tabung tersebut di rak tabung dan biarkan 5 menit kemudian di baca hasil nya.
                                        Hasil :
                                        -	Negatif (-) : tidak terjadi perubahan warna / tetap biru jernih (kadar glukosa <0,5%)
                                        -	Positif 1 (+) : terjadi warna hijau kekuningan (kadar glukosa 0,5% – 1%)
                                        -	Positif 2 (++) : terjadi warna kuning keruh (kadar glukosa 1% – 1,5%)
                                        -	Positif 3 (+++) : terjadi warna jingga / lumpur keruh (kadar glukosa 2% – 3,5%)
                                        -	Positif 4 (++++) : terjadi warna merah bata (kadar glukosa >3,5%)',
                'gambar' => '',
            ],
            [
                'id' => 18,
                'id_mapel' => 3,
                'judul_pratikum' => 'Penentuan Aceton' ,
                'detail_pratikum' => 'Metode : Rottera
                                        Prinsip : Aceton yang pada dalam urine akan bereaksi dengan nutrium nitroprusid akan menghasilkan warna ungu (violet)
                                        Tujuan : Untuk mengetahui ada tidaknya aceton dalam urine
                                        Bahan : Urine
                                        Regensia :
                                        -	Nitropusid
                                        -	Amonium Sulfat
                                        -	Amonia
                                        alat :
                                        -	rak tabung
                                        -	gelas kimia
                                        -	pipet tetes
                                        -	tabung reaksi
                                        -	gelas ukur
                                        Cara kerja :
                                        -	isi tabung rekasi dengan 5ml urine
                                        -	tambahkan pada tabung tersebut
                                        -	3 tetes 5% larutan nitroprusid
                                        -	5 ml larutan amonia 10%
                                        -	5 ml larutan jenuh amonium sulfut kocok sampai rata
                                        -	Perhatikan tabung tersebut dan catat hasilnya/
                                        Hasil :
                                        -	Negatif (-) : Tidak Terjadi Perubahan warna ungu
                                        -	Positif (+) : Terjadi Perubahan warna Ungu',
                'gambar' => '',
            ],
            [
                'id' => 19,
                'id_mapel' => 3,
                'judul_pratikum' => 'Penentuan Urobilinogen' ,
                'detail_pratikum' => 'Metode : Ehrlich
                                        Prinsip : Urobilinogen dalam urine akan beraksi dalam regensia ehrlich membentuk zat warna merah, karena urobilinogen di oksidasi oleh udara teristiwa kalau terkena sivior matahari menjadi urobilin yang tidak dapat beraksi dengan regensia ehrlich, maka urine yang digunakan adalah urine menggunakan Na2Co3
                                        Tujuan : untuk mengetahui adanya urobilinogen dalam urine
                                        Bahan : Urine
                                        Regensia : Ehrlich
                                        Alat :
                                        -	Rak tabung
                                        -	Tabung reaksi
                                        -	Gelas ukur
                                        -	Gelas kimia
                                        Cara kerja :
                                        -	Pipet 5 ml urine yang masih baru dan masukkan dalam tabung reaksi
                                        -	Tambahkan 0,5 ml regensia ehelich
                                        -	Kocok dan biarkan selama 5 menit dan baca hasilnya
                                        Hasil : Negatif (-) : Tidak Terjadi perubahan warna merah setelah ditambahkan regensia ehrlich pada urine
                                            Positif (+) : Terjadi Perubahan warna merah setelah ditambahkan regensia ehrlich pada urine',
                'gambar' => '',
            ],
            [
                'id' => 20,
                'id_mapel' => 3,
                'judul_pratikum' => 'Penentuan Bilirubin' ,
                'detail_pratikum' => 'Metode : Cincin Yodium
                                        Prinsip : Bilirubin dalam urine akan dioksidasi dengan jodium menghasilkan biliverdin dan tampak cincin hijau di batasin kedua cincin cairan tersebut.
                                        Tujuan : Untuk mengetahui adanya bilirubin dalam urine.
                                        Bahan : Urine
                                        Regensia : Yodium 1%
                                        Alat :
                                        -	Rak tabung
                                        -	Gelas kimia
                                        -	Gelas ukur
                                        -	Tabung reaksi
                                        Cara Kerja :
                                        -	Isi tabung reaksi dengan 5ml urine dengan melalui dinding tabung reaksi
                                        -	Tambahkan 0,5 ml yodium 1%
                                        -	Perhatikan rekasi yang timbul di atas kedua cairan tadi
                                        Hasil :
                                        -	Negatif (-) : tidak terjadi pembentukan cincin bewarna hijau
                                        -	Positif (+) : Terjadi pembentukan cincin bewarna hijau',
                'gambar' => '',
            ],
            [
                'id' => 21,
                'id_mapel' => 3,
                'judul_pratikum' => 'Penentuan Bilirubin' ,
                'detail_pratikum' => 'Metode : Fauchet
                                        Prinsip : Bilirubin yang ada dalam urine dipekatkan dengan BaCl2 membentuk presiptat fosfat. Bilirubin pada presipitat fosfat di oksidasi menjadi biliverdin yang hijau dengan regensia fouchet
                                        Tujuan : Untuk mengetahui bilirubin dalam urine
                                        Bahan : urine
                                        Regensia :
                                        -	BaCl2 10%
                                        -	Na Phosphat
                                        -	Fauchet
                                        Alat :
                                        -	Corong
                                        -	Kertas saring
                                        -	Rak tabung
                                        -	Tabung reaksi
                                        -	Gelas ukur
                                        -	Gelas kimia
                                        Cara kerja :
                                        -	Isi tabung reaksi dengan dengan urine bahan sebanyak 5ml
                                        -	Tambahkan 2,5 ml larutan BaCl2 10%
                                        -	Tambahkan 2 tetes larutan Na Phospat jenuh kemudian kocok hingga rata.
                                        -	Saring cairan tersebut sampai habis
                                        -	Ambil kertas penyaring kemudian buka hati-hati dan teteskan dengan reagen fauchet dipinggiran endapan
                                        -	Kemudian perhatikan reaksi yang terjadi
                                        Hasil :
                                        -	Negatif (-) : setelah ditetesin reagensia fauchet tidak terbentuk endapan hijau
                                        -	Positif (+) : Setelah di tetesin regensia fauchet terbentuk endapan hijau',
                'gambar' => '',
            ],
            [
                'id' => 22,
                'id_mapel' => 3,
                'judul_pratikum' => 'Pemeriksaan Darah Tersamar' ,
                'detail_pratikum' => 'Metode : Katalase
                                        Prinsip : Eritrosit dalam urine akan teroksidasi apabila ditambahkan H2O2 3%
                                        Tujuan : Untuk mengetahui adanya darah tersamar dalam urine
                                        Bahan : Urine
                                        Regensia : H2O2 3%
                                        Cara Kerja :
                                        -	Isi Urine pada tabung urine bahan sebanyak 5ml
                                        -	Tambahkan 3ml H2O2 3%
                                        -	Perhatikan Hasilnya (reaksi) yang terjadi
                                        Hasil :
                                        -	Negatif (-) : Pada Saat di masukkan H2O2 tidak terjadi gelembung udara
                                        -	Positif (+) : Pada Saat di masukkan H2O2 terjadi gelembung udara',
                'gambar' => '',
            ],
            [
                'id' => 23,
                'id_mapel' => 3,
                'judul_pratikum' => 'Pemeriksaan Sediment Urine' ,
                'detail_pratikum' => 'Metode : Mikroskip
                                        Prinsip : Zat yang terlarut dalam urine di putar dengan Ceutrifuse akan mengasilkan endapan
                                        Tujuan : Untuk mengetahui ada tidaknya sendiment dalam urine
                                        Bahan : Urine
                                        Alat :
                                        -	Rak tabung
                                        -	Tabung centrifuge
                                        -	Pipet tetes
                                        -	Objek glass
                                        -	Mikroskop
                                        -	Gelas ukur
                                        -	Gelas kimia
                                        Cara kerja :
                                        -	Isi tabung centrifuge ¾ volume
                                        -	Putar dalam centrifuge selama 5-10 menit dengan kecepatan penuh
                                        -	Supernatan urine dibuang dan sisanya jngan di buang habis
                                        -	Dengan pipet tetes, teteskan sediment urine tersebut pada objek glas
                                        -	Lihat (periksa) di bawah mikroskop
                                        Hasil : Sedia sediment',
                'gambar' => '',
            ],
            [
                'id' => 24,
                'id_mapel' => 3,
                'judul_pratikum' => 'Pemeriksaan Fisik Urine' ,
                'detail_pratikum' => 'Tujuan : Untuk Mengetahui Warna,kejernihan, bau dan bui urine
                                        Bahan : Urine
                                        Alat : Gelas Kimia
                                        Cara Kerja :
                                        -	Siapkan tabung rekasi bersih dan jernih
                                        -	Isi tabung tersebut dengan urine sebanyak 2/3 bagian
                                        -	Amati warna,kejernihan, bau dan bui urine tersebut',
                'gambar' => '',
            ],
            [
                'id' => 25,
                'id_mapel' => 4,
                'judul_pratikum' => 'PEMERIKSAAN TELUR CACING ASCARIS LUMBRICOIDES' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan telur cacing  Ascaris Lumbricoides
                                        Indikator : Mampu memahami pemeriksaan telur cacing
                                        Metode : Direct
                                        Bahan : Faeces
                                        Regensia : Eosin 1%
                                        Alat
                                        -	Objek glass
                                        -	Dect glass
                                        -	mikroskop
                                        -	Lidi
                                        -	Pipet etes

                                        Cara kerja :
                                        -	Letakkan seujung lidi faeces pada objek glass
                                        -	Tambahkan 1 tetes Eosin 1% lalu homogennkan
                                        -	Kemudian tutup dengan dect glass
                                        -	Amati pada mikroskop lensa pembesaran 10 dan 40 x

                                        Interpresi Hasil
                                        Ditemukan telur cacing ascaris Lumbricoides pada sampel',
                'gambar' => '',
            ],
            [
                'id' => 26,
                'id_mapel' => 4,
                'judul_pratikum' => 'PEMERIKSAAN TELUR CACING TRICURIS TRICHIURA' ,
                'detail_pratikum' => 'Kompetensi Dasar  : Mampu Melakukan Prosedur Pemeriksaan telur cacing  Tricuris Trichiura
                                        Indikator : Mampu memahami pemeriksaan telur cacing
                                        Metode : Direct
                                        Bahan : Faeces
                                        Regensia : Eosin 1%
                                        Alat
                                        -	Objek glass
                                        -	Dect glass
                                        -	mikroskop
                                        -	Lidi
                                        -	Pipet etes

                                        Cara kerja :
                                        -	Letakkan seujung lidi faeces pada objek glass
                                        -	Tambahkan 1 tetes Eosin 1% lalu homogennkan
                                        -	Kemudian tutup dengan dect glass
                                        -	Amati pada mikroskop lensa pembesaran 10 dan 40 x

                                        Interpresi Hasil
                                        Ditemukan telur cacing Tricuris Trichiura pada sampel',
                'gambar' => '',
            ],
            [
                'id' => 27,
                'id_mapel' => 4,
                'judul_pratikum' => 'PEMERIKSAAN TELUR CACING HOOKWORM' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan telur cacing  Hookworm
                                        Indikator : Mampu memahami pemeriksaan telur cacing
                                        Metode : Direct
                                        Bahan : Faeces
                                        Regensia : Eosin 1%
                                        Alat
                                        -	Objek glass
                                        -	Dect glass
                                        -	mikroskop
                                        -	Lidi
                                        -	Pipet etes

                                        Cara kerja :
                                        -	Letakkan seujung lidi faeces pada objek glass
                                        -	Tambahkan 1 tetes Eosin 1% lalu homogennkan
                                        -	Kemudian tutup dengan dect glass
                                        -	Amati pada mikroskop lensa pembesaran 10 dan 40 x

                                        Interpresi Hasil
                                        Ditemukan telur cacing Tricuris Trichiura pada sampel
                ',
                'gambar' => '',
            ],
            [
                'id' => 28,
                'id_mapel' => 4,
                'judul_pratikum' => 'PEMERIKSAAN TELUR CACING ENTEROBIUS VERMICULARIS' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan telur cacing  Enterobius Vermicularis
                                        Indikator : Mampu memahami pemeriksaan telur cacing
                                        Metode : Pariplaswab
                                        Bahan : Swab Anal
                                        Regensia : Pariplaswab
                                        Alat
                                        -	Objek glass
                                        -	mikroskop
                                        -	Pipet etes

                                        Cara kerja :
                                        -	Letakkan paripla swab pada anal pasien. Rekatkan sedikit dengan ditekan
                                        -	Buka dan letakkan pariplaswab ini diatas objek glass
                                        -	Amati dibawah mikroskop

                                        Interpresi Hasil
                                        Ditemukan telur cacing Enterobius Vermicularis pada sampel',
                'gambar' => '',
            ],
            [
                'id' => 29,
                'id_mapel' => 4,
                'judul_pratikum' => 'PEMERIKSAAN CACING TAENIA SOLIUM' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan Cacing Taenia Solium
                                        Indikator : Mampu memahami pemeriksaan Cacing Taenia Solium
                                        Metode : Direct
                                        Bahan : Faeces
                                        Regensia : NaCl 0,9%
                                        Alat
                                        -	Objek glass
                                        -	Dect glass
                                        -	mikroskop
                                        -	Lidi
                                        -	Pipet etes

                                        Cara kerja :
                                        -	Letakkan seujung lidi faeces pada objek glass
                                        -	Tambahkan 1 tetes NaCl 0,9% lalu homogennkan
                                        -	Kemudian tutup dengan dect glass
                                        -	Amati pada mikroskop lensa pembesaran 10 dan 40 x

                                        Interpresi Hasil
                                        Ditemukan Proglotis dalam sampel',
                'gambar' => '',
            ],
            [
                'id' => 30,
                'id_mapel' => 4,
                'judul_pratikum' => 'PEMERIKSAAN CACING TAENIA SAGINATA' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan Cacing Taenia Saginata
                                        Indikator : Mampu memahami pemeriksaan Cacing Taenia Saginata
                                        Metode : Direct
                                        Bahan : Faeces
                                        Regensia : NaCl 0,9%
                                        Alat
                                        -	Objek glass
                                        -	Dect glass
                                        -	mikroskop
                                        -	Lidi
                                        -	Pipet tetes
                                        Cara kerja :
                                        -	Letakkan seujung lidi faeces pada objek glass
                                        -	Tambahkan 1 tetes NaCl 0,9% lalu homogennkan
                                        -	Kemudian tutup dengan dect glass
                                        -	Amati pada mikroskop lensa pembesaran 10 dan 40 x

                                        Interpresi Hasil
                                        Ditemukan Proglotis dalam sampel',
                'gambar' => '',
            ],
            [
                'id' => 31,
                'id_mapel' => 4,
                'judul_pratikum' => 'PEMERIKSAAN PLASMODIUM FALCIPARUM' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan Plasmodium Falciparum
                                        Indikator : Mampu memahami pemeriksaan Plasmodium Falciparum
                                        Metode : Tetes Tipis
                                        Bahan : Darah Kapiler
                                        Regensia :
                                        Methanol
                                        Gimsa
                                        Buffer Phosfat 1:4
                                        Imerci oil

                                        Alat :
                                        -	Objek glass
                                        -	Kaca pendorong
                                        -	mikroskop

                                        Cara kerja :
                                        -	Siapkan alat dan bahan
                                        -	Lakukan pengambilan darah kapiler
                                        -	Letakkan 1 tetes kapiler pada objek glass
                                        -	Dorong darah tersebut menggunakan kaca pendorong bhingga membentuk lidah api, tunggu hingga kering
                                        -	Tetesin methanol tunggu hingga methanol menguap
                                        -	Tetesi gimsa buffer phosfat 1:4 tunggu selama 15 menit
                                        -	Cuci dengan air mengalir lalu tunggu kering.
                                        -	Amati parasit pada mikroskop dengan pembesaran 100x

                                        Interpresi Hasil
                                        Ditemukan Plasmodium Falciparum pada sampel',
                'gambar' => '',
            ],
            [
                'id' => 32,
                'id_mapel' => 4,
                'judul_pratikum' => 'PEMERIKSAAN PLASMODIUM VIVAX' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan Plasmodium Vivax
                                        Indikator : Mampu memahami pemeriksaan Plasmodium Vivax
                                        Metode : Tetes tipis
                                        Bahan : Darah kapiler
                                        Regensia :
                                        Methanol
                                        Gimsa
                                        Buffer Phosfat 1:4
                                        Imerci oil

                                        Alat :
                                        -	Objek glass
                                        -	Kaca pendorong
                                        -	mikroskop

                                        Cara Kerja :
                                        -	Siapkan alat dan bahan
                                        -	Lakukan pengambilan darah kapiler
                                        -	Letakkan 1 tetes kapiler pada objek glass
                                        -	Dorong darah tersebut menggunakan kaca pendorong bhingga membentuk lidah api, tunggu hingga kering
                                        -	Tetesin methanol tunggu hingga methanol menguap
                                        -	Tetesi gimsa buffer phosfat 1:4 tunggu selama 15 menit
                                        -	Cuci dengan air mengalir lalu tunggu kering.
                                        -	Amati parasit pada mikroskop dengan pembesaran 100x

                                        Interpresi Hasil
                                        Ditemukan Plasmodium Vivax pada sampel',
                'gambar' => '',
            ],
            [
                'id' => 33,
                'id_mapel' => 4,
                'judul_pratikum' => 'PEMERIKSAAN TRICOMONAS VAGINALIS' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan Tricomonas Vaginali
                                        Indikator : Mampu memahami pemeriksaan Tricomonas Vaginali
                                        Metode : Direct
                                        Bahan : Swab Vagina
                                        Regensia : NaCl 0,9%
                                        Alat :
                                        -	Objek glass
                                        -	Dect glass
                                        -	Centrifuge
                                        -	Pipet tetes
                                        -	Mikroskop
                                        Cara kerja :
                                        -	Siapkan alat dan bahan
                                        -	Lakukan pengambilan swab vagina
                                        -	Masukkan lidi swab kedalam tabung reaksi yang telah berisi NaCl0,9%
                                        -	Centrifuge selama 5 menit dengan kecepatan 1600 rpm
                                        -	Ambil 1 tetes endapan dan letakkan pada objek glass, lalu tutup denan dect glass
                                        -	Amati dengan mikroskop dengan pembesaran 10x dan 40 x

                                        Interpresi Hasil
                                        Ditemukan Tricomonas Vaginali pada sampel',
                'gambar' => '',
            ],
            [
                'id' => 34,
                'id_mapel' => 5,
                'judul_pratikum' => 'Pemeriksaan Dengue IgG IgM' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan Pemeriksaan Dengue IgG IgM
                                        Indikator : Mampu memahami pemeriksaan Dengue IgG IgM, menentukan apakah sampel tersebut mengandung Anti Body Dengue
                                        Bahan : Serum
                                        Regensia : Rapid Test Dengue IgG IgM
                                        Alat
                                        -	Klinipet
                                        -	Pin Tip

                                        Cara kerja :
                                        -	Pipet 5 µ serum masukkan ke dalam lubang
                                        -	Tambahkan 3 tetes Buffer Dengue IgG IgM pada lubang
                                        -	Tunggu selama 15 menit

                                        Interpresi Hasil
',
                'gambar' => '',
            ],
            [
                'id' => 35,
                'id_mapel' => 5,
                'judul_pratikum' => 'Pemeriksaan Typoid' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan Pemeriksaan Typoid
                                        Indikator : Mampu memahami pemeriksaan Typoid, menentukan apakah sampel tersebut mengandung Anti Body Typoid
                                        Bahan : Serum
                                        Regensia : Rapid Test Typoid
                                        Alat :
                                        -	Klinipet
                                        -	Pin Tip

                                        Cara kerja :
                                        -	Pipet 5 µ serum masukkan ke dalam lubang
                                        -	Tambahkan 3 tetes Buffer Typoid pada lubang
                                        -	Tunggu selama 15 menit

                                        Interpresi Hasil :',
                'gambar' => '',
            ],
            [
                'id' => 36,
                'id_mapel' => 5,
                'judul_pratikum' => 'Pemeriksaan HbSAg' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan Pemeriksaan HbsAg
                                        Indikator : Mampu memahami pemeriksaan HbsAg, menentukan apakah sampel tersebut mengandung virus Hepatitis B
                                        Bahan : Serum

                                        Regensia
                                        Rapid Test HbsAg
                                        Alat
                                        -	Klinipet
                                        -	Pin Tip

                                        Cara kerja :
                                        -	Pipet 5 µ serum masukkan ke dalam lubang
                                        -	Tambahkan 3 tetes Buffer HbsAg pada lubang
                                        -	Tunggu selama 15 menit

                                        Interpresi Hasil',
                'gambar' => '',
            ],
            [
                'id' => 37,
                'id_mapel' => 5,
                'judul_pratikum' => 'Pemeriksaan HbSAb' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan Pemeriksaan HbsAb
                                        Indikator : Mampu memahami pemeriksaan HbsAb, menentukan apakah sampel tersebut mengandung anti body virus Hepatitis B
                                        Bahan : Serum
                                        Regensia : Rapid Test HbsAb
                                        Alat  :
                                        -	Klinipet
                                        -	Pin Tip
                                        Cara kerja :
                                        -	Pipet 5 µ serum masukkan ke dalam lubang
                                        -	Tambahkan 3 tetes Buffer HbsAb pada lubang
                                        -	Tunggu selama 15 menit

                                        Interpresi Hasil',
                'gambar' => '',
            ],
            [
                'id' => 38,
                'id_mapel' => 5,
                'judul_pratikum' => 'Pemeriksaan HCV' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan Pemeriksaan HCV
                                        Indikator : Mampu memahami pemeriksaan HCV, menentukan apakah sampel tersebut mengandung virus Hepatitis C
                                        Bahan : Serum
                                        Regensia : Rapid Test HCV
                                        Alat :
                                        -	Klinipet
                                        -	Pin Tip
                                        Cara kerja :
                                        -	Pipet 5 µ serum masukkan ke dalam lubang
                                        -	Tambahkan 3 tetes Buffer HCV pada lubang
                                        -	Tunggu selama 15 menit

                                        Interpresi Hasil : ',
                'gambar' => '',
            ],
            [
                'id' => 39,
                'id_mapel' => 5,
                'judul_pratikum' => 'PEMERIKSAAN ANTI BODY COVID 19' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan Pemeriksaan Anti body Covid 19
                                    Indikator : Mampu memahami pemeriksaan Anti body Covid 19 menentukan apakah sampel tersebut mengandung anti body body Covid 19
                                    Bahan : Serum
                                    Regensia : Rapid Test body Covid 19
                                    Alat :
                                    -	Klinipet
                                    -	Pin Tip
                                    Cara kerja :
                                    -	Pipet 20 µ serum masukkan ke dalam lubang
                                    -	Tambahkan 3 tetes Buffer Anti body Covid 19 pada lubang
                                    -	Tunggu selama 15 menit

                                    Interpresi Hasil :',
                'gambar' => '',
            ],
            [
                'id' => 40,
                'id_mapel' => 5,
                'judul_pratikum' => 'PEMERIKSAAN ANTIGEN COVID 19' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan Pemeriksaan Antigen Covid 19
                                        Indikator : Mampu memahami pemeriksaan Antigen Covid 19 menentukan apakah sampel tersebut mengandung anti Antigen Covid 19
                                        Bahan : Swab Nasofaring
                                        Regensia : Rapid Test body Antigen
                                        Alat :
                                        -	Klinipet
                                        -	Pin Tip
                                        Cara kerja :
                                        -	Siapkan alat dan bahan yang akan di gunakan
                                        -	Lakukan pengambilan swab nasofaring’
                                        -	Masukkan swab nasofaring  kedalam tabung reaksi yg berisi 3 tetes Buffer Antigen Covid 19 pada tabung reaksi
                                        -	Tunggu selama 15 menit

                                        Interpresi Hasil : ',
                'gambar' => '',
            ],
            [
                'id' => 41,
                'id_mapel' => 5,
                'judul_pratikum' => 'PEMERIKSAAN ANTI HIV' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan Pemeriksaan HIV
                                        Indikator : Mampu memahami pemeriksaan HIV menentukan apakah sampel tersebut mengandung virus HIV
                                        Bahan : Serum
                                        Regensia : Rapid Test HIV
                                        Alat :
                                        -	Klinipet
                                        -	Pin Tip
                                        Cara kerja :
                                        -	Pipet 5 µ serum masukkan ke dalam lubang
                                        -	Tambahkan 3 tetes Buffer HIV pada lubang
                                        -	Tunggu selama 15 menit

                                        Interpresi Hasil',
                'gambar' => '',
            ],
            [
                'id' => 42,
                'id_mapel' => 6,
                'judul_pratikum' => 'PEMERIKSAAN RPR' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan RPR
                                        Indikator : Mampu memahami pemeriksaan RPR, mampu mengamati Flokulasi yang terbentuk, untuk mendeteksi munculnya antibodi terhadap bakteri Treponema pallidum
                                        Bahan :
                                        -	Serum
                                        -	Control positif
                                        -	Control Negatif
                                        Regensia : Kit RPR
                                        Alat
                                        -	Slide Test Lingkar Putih
                                        -	Tangaki pengaduk
                                        -	Rotator
                                        -	Klinipet
                                        -	Pin Tip
                                        Cara kerja :
                                        CONTROL
                                        -	Siapkan alat dan bahan yang akan di gunakan
                                        -	Pipet 20 µ control positif dan control negatif pada Slide Test
                                        -	Tambahkan 20 µ Reagent  pada masing masing control
                                        -	Homogenkan dengan perlahan dengan tangkai pengaduk
                                        -	Rotator selama 2 menit dengan kecepatan 100 RPM
                                        -	Amati hasil

                                        SAMPEL
                                        -	Siapkan alat dan bahan yang akan di gunakan
                                        -	Pipet 20 µ serum pada Slide Test
                                        -	Tambahkan 20 µ Reagent
                                        -	Homogenkan dengan perlahan dengan tangkai pengaduk
                                        -	Rotator selama 2 menit dengan kecepatan 100 RPM
                                        -	Amati hasil

                                        Interpresi Hasil
                                        -	Poitif : Terbentuk Flokulasi
                                        -	Negatif : Tidak Terbentuk Flokulasi',
                'gambar' => '',
            ],
            [
                'id' => 43,
                'id_mapel' => 6,
                'judul_pratikum' => 'PEMERIKSAAN TPHA' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan RPR
                                        Indikator : Mampu mengamati Aglutinasi yang terbentuk untuk melihat titer antibodi terhadap treponema
                                        Bahan : Serum
                                        Regensia :
                                        -	R1    : Test sel
                                        -	R2    : Control sel
                                        -	R3    : Diluent
                                        -	R4    : Control positif
                                        -	R5    : Control negatif
                                        Alat :
                                        -	Sumur TPHA
                                        -	Mikropipet 190 µl, 10 µl, 25 µl, dan 75 µl
                                        -	Microplate
                                        -	Yellow tip

                                        Cara kerja :
                                        -	Alat dan bahan disiapkan
                                        -	Setiap komponen kit dan sampel dikondisikan pada suhu kamar
                                        -	Semua reagen dihomogenkan perlahan
                                        -	Sumur mikrotitrasi disiapkan dan diberi label no. 1 sampai 8
                                        -	Pengenceran sampel dibuat pada sumur yang berbeda dengan sumur mikrotitrasi dengan mencampur 190 µl diluents dan 10 µl sampel
                                        -	Sumur mikrotitrasi no. 1 dikosongkan
                                        -	Sumur mikrotitrasi no. 2 – 8 ditambahkan 25µl diluent
                                        -	Pada sumur mikrotitrasi no. 1 dan 2 ditambahkan 25 µl sampel yang telah diencerkan.
                                        -	Campuran pada sumur 2 dipipet 25 µl dan ditambahkan pada sumur 3, lalu dihomogenkan. Begitu seterusnya sampai sumur 8
                                        -	Campuran pada sumur 8 dipipet 25 µl dan dibuang
                                        -	Control sel sebanyak 75 µl ditambahkan pada sumur mikrotitrasi no. 1 lalu dihomogenkan
                                        -	Tes sel sebanyak 75 µl ditambahkan pada sumur mikrotitrasi no. 2-8 lalu dihomogenkan
                                        -	Sumur diinkubasi pada suhu ruang selama 45 – 60 menit
                                        -	Aglutinasi yang terjadi dibaca, dan ditentukan titernya',
                'gambar' => '',
            ],
            [
                'id' => 44,
                'id_mapel' => 6,
                'judul_pratikum' => 'PEMERIKSAAN PLANO TEST' ,
                'detail_pratikum' => 'Kompetensi Dasar :Mampu Melakukan Prosedur Pemeriksaan Plano Test
                                        Indikator : Mampu memahami pemeriksaan Plano Test, mampu mengamati Aglutinasi yang terbentuk
                                        Bahan :
                                        -	Serum
                                        -	Control positif
                                        -	Control Negatif
                                        Regensia : Kit Plano Test
                                        Alat :
                                        -	Slide Test Lingkar Hitam
                                        -	Tangaki pengaduk
                                        -	Rotator
                                        -	Klinipet
                                        -	Pin Tip
                                        Cara kerja :
                                        CONTROL
                                        -	Siapkan alat dan bahan yang akan di gunakan
                                        -	Pipet 20 µ control positif dan control negatif pada Slide Test
                                        -	Tambahkan 20 µ Reagent  pada masing masing control
                                        -	Homogenkan dengan perlahan dengan tangkai pengaduk
                                        -	Rotator selama 2 menit dengan kecepatan 100 RPM
                                        -	Amati hasil

                                        SAMPEL
                                        -	Siapkan alat dan bahan yang akan di gunakan
                                        -	Pipet 20 µ serum pada Slide Test
                                        -	Tambahkan 20 µ Reagent
                                        -	Homogenkan dengan perlahan dengan tangkai pengaduk
                                        -	Rotator selama 2 menit dengan kecepatan 100 RPM
                                        -	Amati hasil

                                        Interpresi Hasil
                                        -	Poitif : Terbentuk Aglutinasi
                                        -	Negatif : Tidak Terbentuk Aglutinasi',
                'gambar' => '',
            ],
            [
                'id' => 45,
                'id_mapel' => 6,
                'judul_pratikum' => 'PEMERIKSAAN ASTO' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan Asto
                                        Indikator : Mampu memahami pemeriksaan Asto, mampu mengamati Aglutinasi yang terbentuk
                                        Bahan :
                                        -	Serum
                                        -	Control positif
                                        -	Control Negatif
                                        Regensia : Kit Asto
                                        Alat :
                                        -	Slide Test Lingkar Hitam
                                        -	Tangaki pengaduk
                                        -	Rotator
                                        -	Klinipet
                                        -	Pin Tip
                                        Cara kerja :
                                        CONTROL
                                        -	Siapkan alat dan bahan yang akan di gunakan
                                        -	Pipet 20 µ control positif dan control negatif pada Slide Test
                                        -	Tambahkan 20 µ Reagent  pada masing masing control
                                        -	Homogenkan dengan perlahan dengan tangkai pengaduk
                                        -	Rotator selama 2 menit dengan kecepatan 100 RPM
                                        -	Amati hasil

                                        SAMPEL
                                        -	Siapkan alat dan bahan yang akan di gunakan
                                        -	Pipet 20 µ serum pada Slide Test
                                        -	Tambahkan 20 µ Reagent
                                        -	Homogenkan dengan perlahan dengan tangkai pengaduk
                                        -	Rotator selama 2 menit dengan kecepatan 100 RPM
                                        -	Amati hasil

                                        Interpresi Hasil
                                        -	Poitif : Terbentuk Aglutinasi
                                        -	Negatif : Tidak Terbentuk Aglutinasi',
                'gambar' => '',
            ],
            [
                'id' => 46,
                'id_mapel' => 6,
                'judul_pratikum' => 'PEMERIKSAAN RF' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan RF
                                        Indikator : Mampu memahami pemeriksaan RF, mampu mengamati Aglutinasi yang terbentuk
                                        Bahan :
                                        -	Serum
                                        -	Control positif
                                        -	Control Negatif
                                        Regensia : Kit RF
                                        Alat :
                                        -	Slide Test Lingkar Hitam
                                        -	Tangaki pengaduk
                                        -	Rotator
                                        -	Klinipet
                                        -	Pin Tip
                                        Cara kerja :
                                        CONTROL
                                        -	Siapkan alat dan bahan yang akan di gunakan
                                        -	Pipet 20 µ control positif dan control negatif pada Slide Test
                                        -	Tambahkan 20 µ Reagent  pada masing masing control
                                        -	Homogenkan dengan perlahan dengan tangkai pengaduk
                                        -	Rotator selama 2 menit dengan kecepatan 100 RPM
                                        -	Amati hasil

                                        SAMPEL
                                        -	Siapkan alat dan bahan yang akan di gunakan
                                        -	Pipet 20 µ serum pada Slide Test
                                        -	Tambahkan 20 µ Reagent
                                        -	Homogenkan dengan perlahan dengan tangkai pengaduk
                                        -	Rotator selama 2 menit dengan kecepatan 100 RPM
                                        -	Amati hasil

                                        Interpresi Hasil
                                        -	Poitif : Terbentuk Aglutinasi
                                        -	Negatif : Tidak Terbentuk Aglutinasi',
                'gambar' => '',
            ],
            [
                'id' => 47,
                'id_mapel' => 6,
                'judul_pratikum' => 'PEMERIKSAAN CRP' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan CRP
                                        Indikator : Mampu memahami pemeriksaan CRP, mampu mengamati Flokulasi yang terbentuk
                                        Bahan :
                                        -	Serum
                                        -	Control positif
                                        -	Control Negatif
                                        Regensia : Kit CRP
                                        Alat :
                                        -	Slide Test Lingkar Hitam
                                        -	Tangaki pengaduk
                                        -	Rotator
                                        -	Klinipet
                                        -	Pin Tip
                                        Cara kerja :
                                        CONTROL
                                        -	Siapkan alat dan bahan yang akan di gunakan
                                        -	Pipet 20 µ control positif dan control negatif pada Slide Test
                                        -	Tambahkan 20 µ Reagent  pada masing masing control
                                        -	Homogenkan dengan perlahan dengan tangkai pengaduk
                                        -	Rotator selama 2 menit dengan kecepatan 100 RPM
                                        -	Amati hasil

                                        SAMPEL
                                        -	Siapkan alat dan bahan yang akan di gunakan
                                        -	Pipet 20 µ serum pada Slide Test
                                        -	Tambahkan 20 µ Reagent
                                        -	Homogenkan dengan perlahan dengan tangkai pengaduk
                                        -	Rotator selama 2 menit dengan kecepatan 100 RPM
                                        -	Amati hasil

                                        Interpresi Hasil
                                        -	Poitif : Terbentuk Aglutinasi
                                        -	Negatif : Tidak Terbentuk Aglutinasi',
                'gambar' => '',
            ],
            [
                'id' => 48,
                'id_mapel' => 6,
                'judul_pratikum' => 'PEMERIKSAAN WIDAL KUANTITATIF' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan Widal
                                        Indikator : Mampu memahami pemeriksaan Widal, mampu mengamati Aglutinasi yang terbentuk
                                        Bahan :
                                        -	Serum
                                        -	Control positif
                                        -	Control Negatif
                                        Regensia :
                                        -	Antigen H
                                        -	Antigen AH
                                        -	Antigen BH
                                        -	Antigen CH
                                        -	Antigen O
                                        -	Antigen AO
                                        -	Antigen BO
                                        -	Antigen CO

                                        Alat :
                                        -	Slide Test 8 circle
                                        -	Tangaki pengaduk
                                        -	Rotator
                                        -	Klinipet
                                        -	Pin Tip

                                        Cara kerja :
                                        KONTROL
                                        -	Pada 8 circle slide (plat widal) pemeriksaan widal teteskan 80 ul serum Control Positif dan Control Negatif.
                                        -	Pada masing – masing circlre ditambah 80ul antigen H, AH, BH, CH,O, AO, BO, CO.
                                        -	Serum masing – masing antigen dihomogenkan, Rotator dengan kecepatan 100 RPM selama 1 menit dan diamati terjadinya aglutinasi pada setiap circle.

                                        SAMPEL
                                        -	Pada 8 circle slide (plat widal) pemeriksaan widal teteskan 80 ul serum pasien.
                                        -	Pada masing – masing circlre ditambah 80ul antigen H, AH, BH, CH,O, AO, BO, CO.
                                        -	Serum masing – masing antigen dihomogenkan, Rotator dengan kecepatan 100 RPM selama 1 menit dan diamati terjadinya aglutinasi pada setiap circle.

                                        Interpesi Hasil
                                        -	Poitif : Terbentuk Aglutinasi
                                        -	Negatif : Tidak Terbentuk Aglutinasi',
                'gambar' => '',
            ],
            [
                'id' => 49,
                'id_mapel' => 6,
                'judul_pratikum' => 'PEMERIKSAAN WIDAL KUALITATIF' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan Widal
                                        Indikator : Mampu memahami pemeriksaan Widal, mampu mengamati Aglutinasi yang terbentuk, mengetahui titer antibody yang terbentuk
                                        Bahan : Serum
                                        Regensia :
                                        -	Antigen H
                                        -	Antigen AH
                                        -	Antigen BH
                                        -	Antigen CH
                                        -	Antigen O
                                        -	Antigen AO
                                        -	Antigen BO
                                        -	Antigen CO
                                        Alat :
                                        -	Slide Test 8 circle
                                        -	Tangaki pengaduk
                                        -	Rotator
                                        -	Klinipet
                                        -	Pin Tip
                                        Cara kerja :
                                        1.	Masukkan serum kedalam cicle diisi sebanyak 80ul,40ul,20ul,10ul,5ul
                                        2.	Pada masing – masing circle ditambah 80ul antigen H, AH, BH,CH, O, AO, BO dan CO yang telah dihomogenkan.
                                        3.	Serum masing – masing antigen dihomogenkan, Rotator dengan kecepatan 100 RPM selama 1 menit dan diamati terjadinya aglutinasi pada setiap circle.
                                        4.	Amati hasil

                                        Interpresi Hasil :
                                        -	Poitif : Terbentuk Aglutinasi
                                        -	Negatif : Tidak Terbentuk Aglutinasi',
                'gambar' => '',
            ],
            [
                'id' => 50,
                'id_mapel' => 6,
                'judul_pratikum' => '' ,
                'detail_pratikum' => 'Kompetensi Dasar : Mampu Melakukan Prosedur Pemeriksaan Tubex
                                        Indikator : Mampu memahami pemeriksaan Tubex, mampu mengamati mendeteksi keberadaan antibodi IgM anti-O9 dalam darah
                                        Bahan :
                                        -	Serum
                                        -	Control positif
                                        -	Control Negatif
                                        Regensia : Kit Tubex
                                        Alat :
                                        -	Klinipet
                                        -	Pin Tip
                                        -	Stopwatch
                                        Cara kerja :
                                        CONTROL
                                        1.	Siapkan alat dan bahan
                                        2.	Memasukkan 45μl antigen magnetic particle (Brown regeant) ke dalam masing-masing 2 sumur
                                        3.	Setelahnya, masukkan 45μl Control positif control negative dalam sumur 1 dan 2
                                        4.	Diamkan selama 2 menit.
                                        5.	Setelah 2 menit, teknisi akan meneteskan 90µl antibody-coated indicator particle (Blue reagent).
                                        6.	Tutup setiap tabung reaksi dengan menggunakan selotip medis khusus yang disediakan bersama perangkat TUBEX
                                        7.	Teknisi kemudian akan memiringkan sumur tersebut dan mengocoknya selama 2 menit. Ini bertujuan untuk memperluas hasil reaksi.
                                        8.	Setelah 2 menit, tabung diberdirikan kembali dan diletakkan di atas magnet.
                                        9.	Diamkan dalam keadaan berdiri tegak selama 5 menit. Langkah ini dilakukan untuk memulai proses pengendapan.
                                        10.	Bandingkan cairan pada sumur dengan skala warna yang ada


                                        SAMPEL
                                        1.	 Siapkan alat dan bahan
                                        2.	Memasukkan 45μl antigen magnetic particle (Brown regeant) ke dalam masing-masing sumur
                                        3.	Setelahnya, masukkan 45μl Control positif control negative dalam sumur
                                        4.	Diamkan selama 2 menit.
                                        5.	Setelah 2 menit, teknisi akan meneteskan 90µl antibody-coated indicator particle (Blue reagent).
                                        6.	Tutup setiap tabung reaksi dengan menggunakan selotip medis khusus yang disediakan bersama perangkat TUBEX
                                        7.	Teknisi kemudian akan memiringkan sumur tersebut dan mengocoknya selama 2 menit. Ini bertujuan untuk memperluas hasil reaksi.
                                        8.	Setelah 2 menit, tabung diberdirikan kembali dan diletakkan di atas magnet.
                                        9.	Diamkan dalam keadaan berdiri tegak selama 5 menit. Langkah ini dilakukan untuk memulai proses pengendapan.
                                        10.	Bandingkan cairan pada sumur dengan skala warna yang ada

                                            Interpresi Hasil :',
                'gambar' => '',
            ],
            [
                'id' => 51,
                'id_mapel' => 7,
                'judul_pratikum' => 'Uji Suhu Pada Sampel Air ' ,
                'detail_pratikum' => 'Metode : Pemuaian dengan termometer
                                        Alat : - Labu erlenmeyer
                                        -	Termometer
                                        Sampel : Air Minuman
                                        Cara kerja :
                                        -	Sampel air di tuangkan ke labu erlenmeyer
                                        -	Masukkan thermometer, lalu tunggu 1-2 menit
                                        -	Dibaca dan di catat hasilnya (waktu membaca suhu,thermometer harus tetap di dalam air)
                                        -	Hasilnya di baca dengan satuan derejat celcius',
                'gambar' => '',
            ],
            [
                'id' => 52,
                'id_mapel' => 7,
                'judul_pratikum' => 'Uji Warna Pada Sampel Air' ,
                'detail_pratikum' => 'Metode : Larutan Standart
                                        Alat : - Labu erlenmeyer
                                        -	Termometer
                                        Sampel : Air Minuman
                                        Cara Kerja :
                                        -	Satu buah tabung reaksi diisi dengan larutan satndart (aquadest) kemudian di masukkan ke dalam lubang yang warnanya variasi (standart warna)
                                        -	Tabung yang lain diisi dengan dengan sampel secukupnya,di masukkan pada lubang bewarna putih
                                        -	Warna sampel di cocokan sampai di dapatkan warna yang sama dengan standart dengan warna sampel',
                'gambar' => '',
            ],
            [
                'id' => 53,
                'id_mapel' => 7,
                'judul_pratikum' => 'Uji Bau Pada Sampel Air' ,
                'detail_pratikum' => 'Metode : Organoleptis
                                        Alat : - Labu erlenmeyer
                                        -	Termometer
                                        Sampel : Air Minuman
                                        Cara kerja :
                                        -	Hindarkan stimulant-stimulant bau dari luar seperti yang disebabkan karena minuman dan makan sebelum pengujian tes atau stimulasi-stimulasi bau yang disebabkan oleh bau sabun dan parfum
                                        -	Sampel di masukkan ke dalam wadah mulut sempit bebas bau
                                        -	Sampel di hirup
                                        -	Kalau sampel kurang jelas baunya di panaskan pada derejeat 40 celcius
                                        -	Hasilnya di laporkan dengan berbau atau tidak berbau',
                'gambar' => '',
            ],
            [
                'id' => 54,
                'id_mapel' => 7,
                'judul_pratikum' => 'Uji Rasa Pada Sampel Air' ,
                'detail_pratikum' => 'Metode : Organoleptis
                                        Alat : - Labu erlenmeyer
                                        -	Termometer
                                        Sampel : Air Minuman
                                        Cara Kerja :
                                        -	Sampel air dirasakan oleh panelis dengan cara memasukkan sampel tersebut ke dalam mulut
                                        -	Kemudian di tahan beberapa detik dan dikeluarkan tanpa menelan airnya
                                        -	Dicata apakah rasa dapat dikecap dari sampel yang di periksa
                                        -	Hasilnya di cata dengan berasa atau tidak berasa',
                'gambar' => '',
            ],
            [
                'id' => 55,
                'id_mapel' => 7,
                'judul_pratikum' => 'Pemeriksaan pH Air Pada Sampel Air' ,
                'detail_pratikum' => 'Metode : Kertas Lakmus
                                        Alat : - Labu erlenmeyer
                                        -	Kertas lakmus
                                        Sampel : Air Minuman
                                        Cara Kerja :
                                        -	Sampel air dituangkan ke dalam beker gelas
                                        -	Celupkan kertas lakmus ke dalam sampel air
                                        -	Angkat kertas lakmus
                                        -	Tunggu 1-2 menit. Lihat perubahan pada kertas lakmus
                                        -	Hasilnya di laporkan sebagai asam atau basa',
                'gambar' => '',
            ],
            [
                'id' => 56,
                'id_mapel' => 7,
                'judul_pratikum' => 'Pemeriksaan pH Meter Pada Sampel Air ' ,
                'detail_pratikum' => 'Metode : pH meter
                                        Alat : - Labu erlenmeyer
                                        -	pH meter
                                        Sampel : Air Minuman
                                        Cara kerja :
                                        -	Sampel air di tuangkan pada beker gelass
                                        -	tekan tombol on pada ph meter
                                        -	Tunggu 1-2 menit sampai terlihat angka pada ph meter
                                        -	Celupkan ph meter kedalam beker glass yang berisi sampel air, hingga elektroda yang ada pada ph meter tercelup ke dalam air
                                        -	Tunggu selama 2-3 menit sampai angka tercampur pada ph meter konstan
                                        -	Hasilnya di laporkan dengan sesuai dengan angka yang tercantum pada ph meter sebagai asam atau basa',
                'gambar' => '',
            ],
            [
                'id' => 57,
                'id_mapel' => 7,
                'judul_pratikum' => 'Pemeriksaan Kadar Klorida pada Sampel Air' ,
                'detail_pratikum' => 'Alat :
                                        -	Labu ukur 100ml
                                        -	Labu erlenmeyer 100ml
                                        -	Pipet volume 1ml
                                        -	Gelas kimia 100ml
                                        -	Tangkai pengaduk
                                        -	Buret volume 50 ml
                                        -	Statif
                                        -	Alas titrasi
                                        -	Karet penghisap
                                        -	Timbangan analitis
                                        Sampel : Air minuman
                                        Regensia :
                                        -	Natrium klorida p.a
                                        -	Kalium kromat 5%
                                        -	Perak nitrat 0,01 N
                                        Cara Kerja :
                                        -	Ditimbang 0,5850 gram natrium klorida
                                        -	Kemudian larutkan dengan aquadest hingga volume 100ml dengan labu ukur
                                        -	Di pipet 10ml larutan natrium klorida tersebut, kemudian tambahkan 50ml aquadesh dan 1ml larutan kalium kromat 5%
                                        -	Titrasi dengan larutan perak nitrat 0,01 N hingga terbentuk endapan kuning merah
                                        -	Catat volume perak nitrat yang terpakai sebagai standrisasi',
                'gambar' => '',
            ],
            [
                'id' => 58,
                'id_mapel' => 7,
                'judul_pratikum' => 'Pemeriksaan Kadar Kalsium',
                'detail_pratikum' => 'Alat :
                                    -	Labu Ukur Volume 100ml
                                    -	Labu Erlenmeyer 100ml
                                    -	Pipet Volume 1ml
                                    -	Gelas Kimia Volume 100ml
                                    -	Tangkai Pengaduk
                                    -	Buret Volume 50ml
                                    -	Statif
                                    -	Alas Titrasi
                                    -	Karet Penghisap
                                    -	Timbangan analitis

                                    Regensia :
                                    -	Kaslium karbonat p.a
                                    -	Aquadest
                                    -	Indicator mureksid
                                    -	Hcl 1:1
                                    -	NaOH 1N
                                    -	EDTA 0,01N
                                    Cara Kerja :
                                    -	Ditimbang 0,1000 gram kalsium karbonat lalu di larutkan dengan 10ml HCL 1 : 1 setelah larut penuhkan volumenya hingga 100ml dengan aquadest menggunakan labu ukur.
                                    -	Dipipet 10ml larutan kalsium karbonat tersebut, kemudian tambahkan 40ml aquadest dan 2ml larutan natrium hidroksida 1N dan indicator mureksid.
                                    -	Titrasi dengan larutan EDTA 0,01 N Hingga terbentuk warna violet.
                                    -	Catat volume larutan EDTA yang terpakai sebagai data titrasi kadar kalsium.
                                    -	Kedalam Labu Erlenmeyer pipet 50 bahan air
                                    -	Tambahkan 2ml larutan natrium hidroksida 1 N dan indicator mureksid hingga larutan bewarna merah muda.
                                    -	Titrasi dengan larutan EDTA 0,01 N hingga terbentuk warna violet.
                                    -	Catat volume larutan EDTA yang terpakai sebagai data titrasi kadar kalsium.',
                'gambar' => '',
            ],
            [
                'id' => 59,
                'id_mapel' => 7,
                'judul_pratikum' => 'Pemeriksaan Kesadahan Total (metode : kompelksometri)' ,
                'detail_pratikum' => 'Alat :
                                        -	Labu Ukur volume 100ml
                                        -	Labu Erlenmeyer 100ml
                                        -	Pipet Volume 1ml
                                        -	Gelas Kimia Volume 100ml
                                        -	Tangkai Pengaduk
                                        -	Buret Volume 50ml
                                        -	Statif
                                        -	Alas Titrasi
                                        -	Karet Penghisap
                                        -	Timbangan Analitis
                                        Regensia :
                                        -	Kalsium karbonat p.a
                                        -	Aquadest
                                        -	Indicator EBT
                                        -	HCL 1:1
                                        -	Buffer Amoniak
                                        -	EDTA 0,01N
                                        Cara Kerja :
                                        -	Kedalam labu erlenmeyer pipet 50bahan air
                                        -	Tambahkan 1ml larutan buffer amoniak dan indicator EBT hingga larutan bewarna merah anggur
                                        -	Titrasi dengan larutan EDTA 0,01 N hingga bewarna biru jernih
                                        -	Catat volume larutan EDTA yang terpakai sebagai data titrasi sampel',
                'gambar' => '',
            ],
            [
                'id' => 60,
                'id_mapel' => 7,
                'judul_pratikum' => 'Pemeriksaan Zat Organik',
                'detail_pratikum' => 'Alat :
                                        -	Labu ukur 100ml
                                        -	Labu Erlenmeyer 100ml
                                        -	Pipet volume 1ml
                                        -	Gelas Kimia Volume 100ml
                                        -	Tangkai Pengaduk
                                        -	Buret volume 50ml
                                        -	Statif
                                        -	Alas Titrasi
                                        -	Karet Penghisap
                                        -	Timbangan Analitis
                                        -	Hot Plate
                                        Regensia :
                                        -	Natrium oksalat p.a
                                        -	Aquadest
                                        -	Kalium permanganate 0,01 N
                                        -	Asam oksalat 0,01 N
                                        -	Asam Sulfat (p)
                                        Cara Kerja :
                                        -	Ditimbang 0,6300 gram natrium oksalat, kemudian dilarutkan dengan aquadest hingga 100 ml menggunakan labu ukur.
                                        -	Di pipet 10 ml larutan tersebut
                                        -	Tambahkan 40ml aquadest dan 6ml asam sulfat pekat. Panaskan pada suhu 60 – 70 derejeat celcius
                                        -	Titrasi dengan kalium permanganate hingga warna merah muda.
                                        -	Catat volume larutan EDTA yang terpakai sebagai data standarisasi.
                                        -	Kedalam labu erlenmeyer pipet 100ml bahan air
                                        -	Tambahkan 5ml larutan asam sulfat 4N bebas zat organic dan 10 ml kalium permanganate(dari buret)
                                        -	Didihkan selama 10 menit.
                                        -	Angkat, kemudian tambahkan 10ml asam oksalat 0,01 N',
                'gambar' => '',
            ],
            [
                'id' => 61,
                'id_mapel' => 7,
                'judul_pratikum' => 'Pemeriksaan Kadar Klor Aktif' ,
                'detail_pratikum' => 'Alat :
                                    -	Labu ukur 100ml
                                    -	Labu Erlenmeyer 100ml
                                    -	Pipet volume 1ml
                                    -	Gelas Kimia Volume 100ml
                                    -	Tangkai Pengaduk
                                    -	Buret volume 50ml
                                    -	Statif
                                    -	Alas Titrasi
                                    -	Karet Penghisap
                                    -	Timbangan Analitis
                                    -	Hot Plate
                                    Regensia :
                                    -	Kalium bicromat 0,1N
                                    -	Aquadest
                                    -	Natrium thio sulfat 0,1 N
                                    -	Kristal KI Murni
                                    -	Asam Sulfat  4 N
                                    -	Indikator amilum 1 %
                                    Cara Kerja :
                                    -	Ditimbang 0,4900 gram kalium bicromat, dilarutkan dengan aquadest hingga volume 100ml menggunakan labu ukur.
                                    -	Dipipet 10 ml larutan tersebut
                                    -	Tambahkan 40ml aquadest dan 6ml Asam Sulfat 4 N dan 2 gr KI Kristal. Tutup Mulut labu erlenmeyer dengan penutup
                                    -	Selanjutnya titrasi dengan larutan thio hingga warna kuning muda. Volume larutan thio terpakai di catat sebagai data titrasi pertama.
                                    -	Tambahkan 0,5 ml indicator amilum 1% Titrasi kembali dengan larutan thio hingga warna biru tepat hilang.
                                    -	Catat volume tio terpakai sebagai data standarisasi kedua.
                                    -	Data Standarisasi adalah jumlah dari hasil titrasi pertama dan kedua.
                                    -	Pipet 50 ml sampel Air, Masukkan Ke dalam Labu Erlenmeyer
                                    -	Tambahkan 10ml Asam Sulfat 4N dan 1gr KI Kristal. Tutup mulut labu erlenmeyer dengan penutup
                                    -	Selanjutnya titrasi dengan larutan thio hingga warna kuning muda, Volume larutan thio terpakai di catat sebagai data titrasi pertama.
                                    -	Tambahkan 0,5 ml indicator amilum 1%. Titrasi kembali dengan larutan thio hingga warna biru tepat hilang.
                                    -	Catat volume thio terpakai sebagai data standarisasi kedua.
                                    -	Data hasil titrasi kadar klor aktif adalah jumlah dari hasil hasil titrasi pertama dan kedua',
                'gambar' => '',
            ],
            [
                'id' => 62,
                'id_mapel' => 8,
                'judul_pratikum' => 'bb',
                'detail_pratikum' => 'bb',
                'gambar' => 'bb',
            ],



        ];
        DB::table('dedi_pratikum')->insert($defaulData);
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
