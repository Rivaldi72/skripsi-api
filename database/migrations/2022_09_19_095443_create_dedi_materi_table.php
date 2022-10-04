<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDediMateriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dedi_materi', function (Blueprint $table) {
            $table->id();
            $table->integer('id_mapel');
            $table->string('judul_materi',);
            $table->text('detail_materi');
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
        $defaulData = [
            [
                'id' => 1,
                'id_mapel' => 2,
                'judul_materi' => 'Eritrosit' ,
                'detail_materi' => 'Morfologi normal eritrosit bervariasi tergantung pada spesies. Eritrosit mamalia tidak berinti sedangkan eritrosit bangsa camellidae, reptil, dan aves mempunyai inti. Eritrosit berbentuk oval dan bikonkaf berfungsi sebagai pertukaran oksigen. Jumlah eritrosit pada orang dewasa normal, yaitu pada pria 5,2 juta sel/µl dan pada wanita 4,7 juta sel/µl. Eritrosit berfungsi sebagai pengatur utama metabolisme dan kehidupan dengan menyalurkan oksigen ke sel-sel dan jaringan-jaringan di seluruh tubuh untuk perkembangan, fisiologis, dan regeneratif. Membran permeabel yang menutupi komponen eritrosit terbuat dari lipid, protein, dan karbohidrat. Perubahan komposisi lipid membran menghasilkan bentuk eritrosit yang abnormal. Membran protein yang abnormal juga dapat menyebabkan bentuk eritrosit abnormal. Jumlah eritrosit sering digunakan untuk menegakkan diagnosa jenis anemia berdasarkan penyebabnya.
Retikulosit merupakan eritrosit muda tidak berinti yang mempertahankan RNA (dapat diwarnai dengan pewarnaan supravital). Jumlah retikulosit dapat meningkat karena adanya pendarahan akut, pengobatan defisiensi hematinik (zat besi, asam folat, vitamin B12), serta anemia hemolitik. Pada sumsum tulang ada sekitar 10%-15% eritroblas yang sedang berkembang akan mati tanpa menghasilkan eritrosit matur. Proses eritropoiesis yang tidak efektif ini meningkat pada kasus talasemia mayor, mielofibrosis, dan anemia megaloblastik. 1 Eritropoiesis
Tubuh manusia memproduksi kira-kira 1012 eritrosit baru setiap hari melalui proses eritropoiesis. Eritropoiesis merupakan proses pembentukan sel darah merah. Mekanisme eritropoiesis membutuhkan tiga faktor pendukung, yaitu: 1) stem cells hematopoietic, 2) sitokin spesifik, growth factor dan hormonal regulator, dan 3) hematopoietik yang mempengaruhi micro environment, yaitu stroma pendukung dan interaksi sel dengan sel yang diikuti proliferasi dan diferensiasi hematopoietik stem cell dan mempengaruhi progenitor eritroid yang akhirnya menghasilkan erirosit matur. Proliferasi dan maturasi diatur oleh sitokin, termasuk eritropoietin. Produksi eritrosit merupakan proses dinamis yang berasal dari sel induk pluripoten, dimana strukturnya dapat menghasilkan banyak jaringan, termasuk sel kulit, tulang, dan saraf. Sel ini berasal dari sel induk pluripoten, berada di bawah pengaruh sitokin yang mengatur diferensiasi dan pematangan sel ke committed pathway. Sel-sel eritrosit berada di bawah kontrol hormon erythropoietin (EPO). Hormon EPO diproduksi oleh ginjal dan berfungsi untuk regenerasi eritrosit. EPO membuat jalur melalui sirkulasi dan mengunci ke reseptor pada pronormoblast, prekursor eritrosit termuda, menstimulasi produksi 16 eritrosit matur dari setiap sel prekursor pronormoblast (sel induk pluripoten).
Eritrosit matur adalah salah satu dari beberapa struktur seluler di tubuh manusia yang dimulai sebagai sel berinti dan menjadi sel tidak berinti. Perkembangan ini terjadi di sumsum tulang selama 5 hari karena setiap sel prekursor melewati tiga divisi berturut-turut, menghasilkan sel darah merah yang lebih kecil dan lebih padat. Beberapa perubahan eritrosit, yaitu: ukuran sel mengecil, rasio nukleus : sitoplasma (N:S) berkurang, inti kromatin menjadi lebih padat, dan warna sitoplasma diubah ketika hemoglobinisasi menjadi lebih jelas. Di sumsum tulang, eritrosit pada berbagai tahap pematangan tampaknya mengelompok di area spesifik, yaitu pulau eritroblastik, mudah diidentifikasi pada aspirasi sumsum tulang dengan petunjuk morfologis eritropoiesis, dimana inti sangat bulat dikombinasikan dengan sitoplasma basofilik. Eritropoiesis pada dewasa terjadi di sumsum tulang yang terletak di sternum dan krista iliaka, sedangkan eritropoiesis pada anak-anak terjadi pada tulang panjang dan sternum.
Terdapat 6 tahapan dalam proses maturasi eritrosit, yaitu: pronormoblast, normoblast basofilik, polikromatofilik normoblast, ortokromik normoblast, retikulosit, dan eritrosit matur. Morfologi eritrosit matur secara umum antara lain: Ketika eritrosit berinti maka nukleus berbentuk bulat, tidak ada granula di sitoplasma eritrosit, sitoplasma pada sel muda bersifat basofilik dan menjadi berwarna lebih ungu karena sintesis dari hemoglobin, ukuran sel matur menjadi lebih kecil, bahan kromatin inti menjadi lebih padat sebagai persiapan untuk ekstrusi dari inti sel, rasio N:S berkurang menjadi lebih padat dan lebih kecil pada seluruh eritrosit.
Eritrosit matur di desain sebagai alat untuk menyalurkan hemoglobin ke seluruh tubuh. Eritrosit berjalan lebih dari 300 mil pada sirkulasi perifer, masuk ke dalam sistem peredaran darah. Faktor seluler dan lingkungan berkontribusi terhadap kelangsungan hidup eritrosit. Siklus hidup eritrosit dapat bertahan selama 120 hari jika berada pada kondisi: membran eritrosit bersifat deformable, struktur dan fungsi hemoglobin adekuat, keseimbangan osmotik dan permeabilitas eritrosit terjaga. Eritrosit matur merupakan struktur tidak berinti tanpa kapasitas untuk mensintesis protein namun dapat melakukan limited metabolisme sehingga mampu untuk bertahan hidup selama 120 hari. Kemudian sel menjadi tua dan dihancurkan dalam RES terutama dalam limpa dan hati. Globin dari hemoglobin dipecah menjadi asam amino yang digunakan sebagai protein dalam berbagai jaringan. Zat besi dalam haem dikeluarkan untuk digunakan dalam pembentukan eritrosit lagi, sisanya diubah menjadi bilirubin (pigmen kuning) dan biliverdin (kehijauan).
Membran sel yang utuh dan berfungsi penuh ialah unsur penting eritrosit dalam mempertahankan hidupnya. Membran eritrosit merupakan struktur trilaminar dan tiga dimensi yang mengandung glikolipid dan glikoprotein pada bagian terluar lapisan langsung di bawah permukaan membran eritrosit. Kolesterol dan fosfolipid membentuk pusat lapisan, dan lapisan dalam (sitoskeleton) mengandung protein membran spesifik, spektrin, dan ankyrin.
Kelainan-Kelainan Sel Darah Merah.
Istilah umum yang digunakan dalam hematologi untuk menunjukkan suatu variasi dalam hal ukuran sel disebut Anisositosis. Anisositosis terdiri dari makrositosis,  mikrositosis .Anisositosis disebabkan oleh berbagai hal seperti Pematangan inti yang terganggu menjadikan sel lebih besar dari bentuk normal (makrositosis) ukuran rata-rata diameter eritrosit >8,5 μm dan menurunnya sintesa hemoglobin yang menyebabkan sel lebih kecil dari bentuk normal  ukuran rata-rata diameter eritrosit  <7 μm  Anisositosis tampak jelas pada anemia berat.
2.3.2 Kelainan Bentuk (Poikilositosis)
Istilah umum dari hematologi yang digunakan untuk menunjukkan suatu variasi bentuk dari eritrosit disebut poikilositosis.Kelainan bentuk eritrosit bisa membantu mendiagnosa penyakit.Variasi bentuk dari poikilositosis meliputi akantosit yang menyerupai sel duri, burr sel, sel krenasi yang bisa disebabkan oleh kesalahan pemeriksaan prosedur dan kesalahan pra analitik, eliptosit atau ovalosit berbentuk seperti oval, stomatosit, leptosit, poikolositosit atau bentuk tidak rata, sickle sel, dan schistosit.
Kelainan warna
Eritrosit normal memiliki warna merah dengan bagian pusai berwarna lebih terang
atau pucat ketika di warnai dengan pewarnaan konveksional.Warna merah menandakan banyaknya kadar hemoglobin didalam sel eritrosit. Eritrosit didalam tubuh bisa mengalami perubahan bentuk dan perubahan ukuran sesuai dengan kondisi didalam tubuh yang dipengaruhi oleh penyakit dan kondisi organ-organ didalamnnya. Oleh sebab itu kelainan warna pada eritrosit dapat membantu menegakkan diagnosa suatu penyakit. Kelainan warna juga bisa terjadi pada waktu pengecatan sediaan hapusan darah yang bisa dipengaruhi oleh cat giemsa karena cat giemsa yang diencerkan harus langsung digunakan jika disimpan dengan tidak baik maka akan mempengaruhi hasil pengamatan. Penurunan sintesa hemoglobin bisa menyebabkan hipokrom serta peningkatan sintesa hemoglobin bisa menyebabkan hiperkrom. Hemoglobin sangat berpengaruh terhadap warna karena yang memberi warna pada sel darah merah adalah hemoglobin dengan bantuan zat besi didalam tubuh
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
        Schema::dropIfExists('dedi_materi');
    }
}
