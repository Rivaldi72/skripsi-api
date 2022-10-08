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
            [
                'id' => 2,
                'id_mapel' => 2,
                'judul_materi' => 'Leukosit' ,
                'detail_materi' => 'Morfologi normal eritrosit bervariasi tergantung pada spesies. Eritrosit mamalia tidak berinti sedangkan eritrosit bangsa camellidae, reptil, dan aves mempunyai inti. Eritrosit berbentuk oval dan bikonkaf berfungsi sebagai pertukaran oksigen. Jumlah eritrosit pada orang dewasa normal, yaitu pada pria 5,2 juta sel/µl dan pada wanita 4,7 juta sel/µl. Eritrosit berfungsi sebagai pengatur utama metabolisme dan kehidupan dengan menyalurkan oksigen ke sel-sel dan jaringan-jaringan di seluruh tubuh untuk perkembangan, fisiologis, dan regeneratif. Membran permeabel yang menutupi komponen eritrosit terbuat dari lipid, protein, dan karbohidrat. Perubahan komposisi lipid membran menghasilkan bentuk eritrosit yang abnormal. Membran protein yang abnormal juga dapat menyebabkan bentuk eritrosit abnormal. Jumlah eritrosit sering digunakan untuk menegakkan diagnosa jenis anemia berdasarkan penyebabnya.
Retikulosit merupakan eritrosit muda tidak berinti yang mempertahankan RNA (dapat diwarnai dengan pewarnaan supravital). Jumlah retikulosit dapat meningkat karena adanya pendarahan akut, pengobatan defisiensi hematinik (zat besi, asam folat, vitamin B12), serta anemia hemolitik. Pada sumsum tulang ada sekitar 10%-15% eritroblas yang sedang berkembang akan mati tanpa menghasilkan eritrosit matur. Proses eritropoiesis yang tidak efektif ini meningkat pada kasus talasemia mayor, mielofibrosis, dan anemia megaloblastik. 1 Eritropoiesis
Tubuh manusia memproduksi kira-kira 1012 eritrosit baru setiap hari melalui proses eritropoiesis. Eritropoiesis merupakan proses pembentukan sel darah merah. Mekanisme eritropoiesis membutuhkan tiga faktor pendukung, yaitu: 1) stem cells hematopoietic, 2) sitokin spesifik, growth factor dan hormonal regulator, dan 3) hematopoietik yang mempengaruhi micro environment, yaitu stroma pendukung dan interaksi sel dengan sel yang diikuti proliferasi dan diferensiasi hematopoietik stem cell dan mempengaruhi progenitor eritroid yang akhirnya menghasilkan erirosit matur. Proliferasi dan maturasi diatur oleh sitokin, termasuk eritropoietin. Produksi eritrosit merupakan proses dinamis yang berasal dari sel induk pluripoten, dimana strukturnya dapat menghasilkan banyak jaringan, termasuk sel kulit, tulang, dan saraf. Sel ini berasal dari sel induk pluripoten, berada di bawah pengaruh sitokin yang mengatur diferensiasi dan pematangan sel ke committed pathway. Sel-sel eritrosit berada di bawah kontrol hormon erythropoietin (EPO). Hormon EPO diproduksi oleh ginjal dan berfungsi untuk regenerasi eritrosit. EPO membuat jalur melalui sirkulasi dan mengunci ke reseptor pada pronormoblast, prekursor eritrosit termuda, menstimulasi produksi 16 eritrosit matur dari setiap sel prekursor pronormoblast (sel induk pluripoten).
Eritrosit matur adalah salah satu dari beberapa struktur seluler di tubuh manusia yang dimulai sebagai sel berinti dan menjadi sel tidak berinti. Perkembangan ini terjadi di sumsum tulang selama 5 hari karena setiap sel prekursor melewati tiga divisi berturut-turut, menghasilkan sel darah merah yang lebih kecil dan lebih padat. Beberapa perubahan eritrosit, yaitu: ukuran sel mengecil, rasio nukleus : sitoplasma (N:S) berkurang, inti kromatin menjadi lebih padat, dan warna sitoplasma diubah ketika hemoglobinisasi menjadi lebih jelas. Di sumsum tulang, eritrosit pada berbagai tahap pematangan tampaknya mengelompok di area spesifik, yaitu pulau eritroblastik, mudah diidentifikasi pada aspirasi sumsum tulang dengan petunjuk morfologis eritropoiesis, dimana inti sangat bulat dikombinasikan dengan sitoplasma basofilik. Eritropoiesis pada dewasa terjadi di sumsum tulang yang terletak di sternum dan krista iliaka, sedangkan eritropoiesis pada anak-anak terjadi pada tulang panjang dan sternum.
Terdapat 6 tahapan dalam proses maturasi eritrosit, yaitu: pronormoblast, normoblast basofilik, polikromatofilik normoblast, ortokromik normoblast, retikulosit, dan eritrosit matur. Morfologi eritrosit matur secara umum antara lain: Ketika eritrosit berinti maka nukleus berbentuk bulat, tidak ada granula di sitoplasma eritrosit, sitoplasma pada sel muda bersifat basofilik dan menjadi berwarna lebih ungu karena sintesis dari hemoglobin, ukuran sel matur menjadi lebih kecil, bahan kromatin inti menjadi lebih padat sebagai persiapan untuk ekstrusi dari inti sel, rasio N:S berkurang menjadi lebih padat dan lebih kecil pada seluruh eritrosit.
Eritrosit matur di desain sebagai alat untuk menyalurkan hemoglobin ke seluruh tubuh. Eritrosit berjalan lebih dari 300 mil pada sirkulasi perifer, masuk ke dalam sistem peredaran darah. Faktor seluler dan lingkungan berkontribusi terhadap kelangsungan hidup eritrosit. Siklus hidup eritrosit dapat bertahan selama 120 hari jika berada pada kondisi: membran eritrosit bersifat deformable, struktur dan fungsi hemoglobin adekuat, keseimbangan osmotik dan permeabilitas eritrosit terjaga. Eritrosit matur merupakan struktur tidak berinti tanpa kapasitas untuk mensintesis protein namun dapat melakukan limited metabolisme sehingga mampu untuk bertahan hidup selama 120 hari. Kemudian sel menjadi tua dan dihancurkan dalam RES terutama dalam limpa dan hati. Globin dari hemoglobin dipecah menjadi asam amino yang digunakan sebagai protein dalam berbagai jaringan. Zat besi dalam haem dikeluarkan untuk digunakan dalam pembentukan eritrosit lagi, sisanya diubah menjadi bilirubin (pigmen kuning) dan biliverdin (kehijauan).
Membran sel yang utuh dan berfungsi penuh ialah unsur penting eritrosit dalam mempertahankan hidupnya. Membran eritrosit merupakan struktur trilaminar dan tiga dimensi yang mengandung glikolipid dan glikoprotein pada bagian terluar lapisan langsung di bawah permukaan membran eritrosit. Kolesterol dan fosfolipid membentuk pusat lapisan, dan lapisan dalam (sitoskeleton) mengandung protein membran spesifik, spektrin, dan ankyrin.
',
                'gambar' => '',
            ],
            [
                'id' => 3,
                'id_mapel' => 2,
                'judul_materi' => 'Kelainan Morfologi Leukosit' ,
                'detail_materi' => 'A.	PENGANTAR KELAINAN LEUKOSIT
Leukosit memiliki rentang hidup singkat dalam sirkulasi darah perifer, sehingga sangat dipengaruhi oleh perubahan-perubahan dalam kuantitas maupun kualitas sel tertentu. Dengan range yang berbeda antara dewasa dan anak-anak dapat dijadikan sebagai patokan bahwa setiap kenaikan atau penurunan jenis sel tertentu menandakan respons unik tubuh terhadap "serangan" berupa infeksi, inflamasi, penyakit kronis, infestasi parasit, dan sebagainya. Sebagai respon leukosit terhadap infeksi atau rangsangan lain akan terlihat perubahan pada jumlah dan jenis sel tertentu. Adanya peningkatan sel ditunjukkan dengan akhiran "osis" atau "filia, seperti eosinofilia dan leukositosis. Sedangkan penurunan sel ditunjukkan akhiran "penia”, seperti neutropenia. Perubahan jumlah leukosit dapat diamati melalui pemeriksaan darah lengkap (DL) dan hapusan darah tepi.
Setiap granula sel berperan dalam menghasilkan gejala tertentu, misalnya granula eosinofilik mengandung histamin. Pada pasien alergi, eosinofil akan meningkat. Histamin yang dilepaskan oleh eosinofil akan menstimulasi gejala yang berhubungan dengan alergi seperti mata berair, mata gatal dan rhinorrhea. Menariknya, kebanyakan alergi obat mengandung antihistamin, diformulasikan untuk memblokir gejala alergi. Pada banyak kasus, pasien yang memiliki infeksi baru akan menunjukkan peningkatan leukosit. Gejala yang dikombinasikan dengan peningkatan jumlah leukosit dapat merefleksikan proses infeksi.
B.	PERUBAHAN KUANTITATIF LEUKOSIT
Berbagai kondisi menimbulkan kenaikan atau penurunan sel tertentu. Kondisi-kondisi ini biasanya bersifat sementara, dan setelah kondisi yang mendasarinya terselesaikan maka sebagian besar jumlahnya akan kembali normal. Keadaan neutropenia (jumlah neutrofil absolut kurang dari 2,0 x 109/L) dapat disebabkan karena obat-obatan, kelainan sumsum tulang akibat bahan kimia, infeksi virus, dan sekuestrasi limpa. Sedangkan peningkatan neutrofil terjadi pada kasus infeksi, respon inflammatory, respon stress, dan malignansi (keganasan). Kondisi yang menyebabkan peningkatan eosinofil, yaitu penyakit kulit, penyakit parasit, penolakan transplantasi, kelainan mieloproliferatif. Peningkatan jumlah basofil terjadi pada kasus kelainan mieloproliferatif, reaksi hipersensitivitas, kolitis ulseratif (peradangan kronis yang terjadi pada usus besar atau kolon dan rektum). Kondisi dengan peningkatan monosit, antara lain: infeksi kronis seperti TB, malignansi (keganasan), leukemia dengan komponen monositik yang kuat, kegagalan sumsum tulang.
C.	CACAT (DEFECT) KUALITATIF LEUKOSIT
Perubahan kualitatif leukosit terjadi di sitoplasma dan nukleus. Perubahan-perubahan ini diklasifikasikan sebagai inherited (diwariskan/ bawaan) atau acquired (didapat). Acquired defect tampak dengan frekuensi yang jauh lebih besar daripada kelainan bawaan. Pada pasien dengan perkembangan peningkatan jumlah leukosit, perubahan toksik leukosit umumnya terjadi karena stres selama maturasi dan sebagai akibat aktivitas dalam sirkulasi atau jaringan.
Respons leukosit terhadap infeksi atau inflamasi terjadi dalam dua jalur. Ketika leukosit meningkat, tampak peningkatan segmented neutrofil pada hapusan darah tepi yang menimbulkan neutrofilia atau shift to the left, yang banyak ditemukan sel-sel muda. Dalam beberapa kasus perubahan toksik, dapat ditemukan sel-sel seperti granulasi toksik, vakuolisasi toksik, dan Dohle bodies.
D.	TAHAPAN FAGOSITOSIS LEUKOSIT
Sel telah mengembangkan mekanisme untuk menelan partikel maupun cairan. Mekanisme ini melibatkan berbagai reseptor, seperti reseptor-mediated endocytosis (absorpsi partikel-partikel kecil ke dalam clathrin coated vesicles), hingga pinocytosis (penyerapan bahan terlarut), dan fagositosis. Fagositosis merupakan proses penting untuk nutrisi pada organisme uniseluler, sedangkan pada organisme multiseluler ditemukan pada sel khusus yang disebut fagosit. Fagositosis merupakan mekanisme yang melibatkan partikel yang relatif besar (> 0,5 µm), seperti bakteri, sel-sel mati, maupun agen infeksius lainnya untuk dikenali dan dimusnahkan. Selama fagositosis di dalam sel-sel imun (neutrofil dan makrofag) reseptor di membran sel terlebih dahulu mengenali antibodi pada target, sehingga menyebabkan pseudopodia mengelilingi target dengan mekanisme zipperlike. Kemudian diikuti oleh fusi dengan lisosom, acidification fagosom, dan degradasi target. Secara umum mekanisme fagositosis meliputi: chemotaxis, opsonization, ingestion, dan killing
Fagositosis terdiri dari pengenalan dan menelan partikel yang lebih besar dari 0,5 µm ke dalam plasma membrane-derived vesicles, yang dikenal sebagai fagosom. Fagosit dapat menelan mikroba patogen, tetapi penting juga sel-sel apoptosis. Dengan cara ini, fagosit berkontribusi untuk clearance (pembersihan) miliaran sel setiap hari. Dengan demikian fagositosis menjadi penting tidak hanya untuk eliminasi mikroba, tetapi juga untuk homeostasis jaringan. Fagosit profesional meliputi monosit, makrofag, neutrofil, sel dendritik, osteoclast, dan eosinofil. Sel ini bertugas menghilangkan mikroorganisme dan mempresentasikannya ke sel adaptive immune system. Selain itu, fibroblas, sel epitel, dan sel endotel juga dapat melakukan fagositosis. Fagosit nonprofesional ini tidak dapat menelan mikroorganisme tetapi penting dalam mengeliminasi badan apoptosis. Fagosit harus mengenali sejumlah besar perbedaan partikel yang berpotensi dicerna, termasuk segala macam patogen dan juga sel apoptosis. Pengenalan ini tercapai karena berbagai reseptor terpisah yang membedakan partikel sebagai target dan kemudian memulai pensinyalan cascade yang mempromosikan fagositosis. Reseptor pada plasma membran fagosit dapat dibagi menjadi
Granula pada neutrofil segmen normal terlihat seperti debu, dengan granula kemerahan-biru violet yang merupakan konsekuensi dari aktivitas melawan bakteri atau protein dan ditemukan pada infeksi serius, efek obat atau toksik, atau proses autoimun (misalnya poliartritis kronis). Granulasi toksik (Gambar 4.1) adalah granulasi yang berlebihan dalam jumlah dan intensitas, dengan butiran yang lebih menonjol dalam neutrofil segmen sebagai respons langsung terhadap peningkatan produksi enzim lisosom. Granula ini sering berwarna biru-hitam. Cluster granulasi toksik biasanya muncul dalam neutrofil, dan pada keadaan sangat berat granula menyerupai granula basofilik.
Di laboratorium klinis, granulasi toksik dilaporkan keberadaannya atau dinilai sebagai sedikit, sedang, atau ditandai (misalnya, 11-41) oleh para profesional laboratorium. Tingkat penilaian tergantung pada derajat granulasi toksik dalam sel individu dan fraksi relatif neutrofil dengan granulasi toksik. Sebanyak 15% sampel darah memerlukan pengamatan mikroskopis secara manual guna membantu diagnosis granulasi toksik.
Perubahan ini terjadi pada neutrofil segmen. Vakuola yang muncul di sitoplasma sel mungkin besar atau kecil (Gambar 4.2). Darah yang lama terpapar dengan obat-obatan, seperti sulfonamide dan kloroquine dapat menyebabkan fagositosis pada granula atau isi sitoplasma. Selain itu, Vakuola kecil uniformly ditemukan pada hapusan darah tepi yang dibuat dari darah yang telah ditangguhkan. Pada kasus pembuatan hapusan darah tepi yang ditunda maka akan ditemukan vakuolisasi-semu
(pseudo-vacuolization). Fenomena ini harus dibedakan dari varietas patogen. Vakuola yang lebih besar tidak terdistribusi merata di seluruh sitoplasma dan umumnya menandakan adanya infeksi serius dan kemungkinan sepsis. Penelitian telah menunjukkan bahwa ketika 10% dari neutrofil dipengaruhi oleh vakuola dalam sampel baru, ini merupakan indikator prognostik yang serius dan signifikan. Ada korelasi yang tinggi antara keberadaan neutrofil vakuola dengan satu atau lebih kultur mikrobiologis positif. Neutrofil vakuola terjadi pada infeksi serius dari berbagai tempat, belum tentu darah. Di antara kultur darah, Staphylococcus aureus adalah organisme yang paling umum. Dalam jenis kultur lain, S. aureus dan Pseudomonas aeruginosa adalah organisme yang paling umum, diikuti oleh Escherichia coli. Keberadaan neutrofil vakuola dianggap sebagai panic value sebagai indikator hematologi dari infeksi parah dan sering kali mengancam jiwa.
4.3 Badan Dohle (Dohle Bodies)
Badan bundar berwarna biru di sitoplasma neutrofil dilaporkan oleh Dohle pada tahun 1911 (Gambar 4.3). Dia mengamati badan-badan inklusi ini (sekarang dikenal sebagai badan Dohle) dalam scarlet fever, tetapi struktur serupa telah dicatat pada banyak penelitian lain dan berhubungan dengan berbagai penyakit, termasuk difteri (Kolmer, 1912), tifus (MacEwen, 1914), TBC (Bachman dan Lucke, 1918) dan pada pasien dengan luka bakar (Weiner dan Topley, 1955). May (1909) memperhatikan badan inklusi persisten dalam neutrofil dari orang sehat, berhubungan dengan giant platelet. Pada tahun 1945 ditemukan badan Dohle dalam neutrofil dan trombositopenia kronis.
Inklusi sitoplasma ini terdiri dari RNA ribosom, berukuran sekitar 1-5 μm, terletak di dekat membran sitoplasma, dan tampak seperti tongkat abu-abu pucat. Inklusi transient ini sering ditemukan dalam neutrofil, juga ditemukan pada monosit dan band. Dohle bodies sulit diamati dengan mikroskop cahaya, dan hapusan darah tepi harus diperiksa secara teliti untuk mengetahui keberadaannya. Dohle bodies juga dapat dilihat dalam kondisi non-patologis seperti kehamilan.
',
                'gambar' => '',
            ],
            [
                'id' => 4,
                'id_mapel' => 2,
                'judul_materi' => 'Trombosit' ,
                'detail_materi' => 'Trombosit merupakan hasil fragmentasi sitoplasma megakariosit yang terbentuk di sumsum tulang. Regulator utama produksi trombosit adalah hormon trombopoietin (TPO) yang di sintesis di hati dan ginjal. Trombosit berperan penting dalam sistem hemostasis untuk menghentikan perdarahan dari pembuluh darah yang terluka. Adanya abnormalitas pada vaskuler, trombosit, koagulasi, dan fibrinolisis akan mengganggu sistem hemostasis pada sistem vaskuler yang dapat mengakibatkan terjadinya perdarahan abnormal.
Kinerja trombosit dalam sistem penutupan luka, yaitu: ketika bersinggungan dengan permukaan pembuluh yang rusak maka sifat-sifat trombosit berubah secara spontan, yaitu: 1) trombosit membengkak berbentuk irregular dengan tonjolan yang muncul dari permukaannya, 2) terjadi kontraksi secara kuat pada protein kontraktilnya sehingga menyebabkan pelepasan granula yang mengandung berbagai faktor aktif, 3) trombosit menjadi lengket kemudian menempel pada serat kolagen, 4) mensekresi sejumlah besar ADP dan enzim-enzimnya membentuk tromboksan A2 yang disekresikan ke dalam darah, 5) ADP bersama tromboksan mengaktifkan trombosit yang berdekatan dan karena sifat lengketnya ini menyebabkan melekat pada trombosit semula yang sudah aktif sehingga terbentuk sumbat trombosit. Sumbat trombosit ini bersifat longgar namun sudah mampu menghalangi keluarnya darah jika luka di pembuluh darah berukuran kecil. Kemudian terbentuklah benang-benang fibrin dan melekat pada trombosit selama proses pembekuan darah sehingga sumbat trombosit menjadi yang kuat dan rapat.
Struktur trombosit memiliki zona luar yang jernih dan zona dalam yang berisi organel-organel sitoplasmik. Berdasarkan fungsinya trombosit dibagi menjadi empat zona yang mempunyai fungsinya masing-masing. Empat zona itu antara lain:
1)	Zona perifer berfungsi untuk adhesi dan agregasi.
2)	Zona sol gel untuk menunjang struktur serta mekanisme kontraksi.
3)	Zona organel untuk pengeluaran isi trombosit.
4)	Zona membran yang keluar dari isi granula ketika pelepasan.
Pada permukaannya, trombosit memiliki selubung reseptor glikoprotein yang berperan dalam reaksi adhesi dan agregasi yang mengawali terbentuknya sumbat hemostasis untuk menutup luka. Beberapa tahap dalam pembentukan sumbat hemostatik, yaitu: adhesi trombosit, agregasi trombosit, dan reaksi pelepasan. Bila tidak ada trombosit maka akan terjadi kebocoran darah spontan melalui pembuluh darah kecil. Reaksi trombosit berupa adhesi, sekresi, agregasi, fusi dan aktivitas prokoagulan sangat penting untuk proses penutupan luka bila ada cedera pembuluh darah.
1.4.1 Trombopoiesis
Trombosit terbentuk dari megakariosit di sumsum tulang. Megakariosit merupakan sel yang sangat besar dalam susunan hematopoietik dalam sumsum tulang belakang yang kemudian memecah menjadi trombosit atau keping-keping darah. Trombosit dihasilkan dengan cara fragmentasi (melepaskan diri) dari perifer sitoplasma megakariosit akibat stimulus trombopoietin. Megakariosit berasal dari megakarioblas yang merupakan hasil diferensiasi dari sel induk hematopoietik prekursor mieloid paling awal yang membentuk megakariosit. Gambar struktur trombosit ada pada Gambar 1.5.
Megakariosit mengalami maturasi dengan replikasi inti endomitotik secara sinkron, volume sitoplasmanya bertambah besar sejalan dengan penambahan lobus inti menjadi dua kali lipat. Selanjutnya sitoplasma menjadi granula dan trombosit dilepaskan dalam bentuk platelet atau keping darah. Trombosit yang dihasilkan oleh tiap megakariosit sekitar ± 4000 trombosit. Sel induk hematopoietik mulai berdiferensiasi sampai dengan menghasilkan trombosit memerlukan waktu sekitar 10 hari. Trombosit matur berukuran 2-4 µm dan jumlah normalnya dalam darah tepi sekitar 150.000-350.000/µl. Lama hidup trombosit sekitar 7-10 hari, diameter sekitar 1-2 µm, dengan volume sel rerata 5,8 fL yang akan berkurang pada saat maturasi dalam sirkulasi.
Trombosit muda yang telah mengalami pelepasan dari sumsum tulang akan berada 24-36 jam di dalam limfa. Trombosit adalah struktur yang aktif, waktu paruh hidupnya 8-12 hari dalam darah kemudian proses fungsionalnya berakhir. Meskipun tidak memiliki inti sel, namun trombosit mempunyai ciri khas fungsional seperti sel, antara lain:
1)	Sitoplasmanya memiliki beberapa faktor aktif yaitu molekul aktif dan myosin serta protein kontraktil yang menyebabkan trombosit berkontraksi.
2)	Sisa-sisa retikulum endoplasma dan apparatus golgi mensintesis mensintesis enzim dan menyimpan ion kalsium.
3)	Mitokondria dan sistem enzim dapat membentuk adenosin trifosfat (ATP) dan adenosin difosfat (ADP).
4)	Sistem enzim mensintesis prostaglandin yang menyebabkan reaksi pembululuh darah dan reaksi jaringan lainnya.
5)	memiliki protein sebagai faktor stabilisasi fibrin.
6)	Memiliki faktor pertumbuhan yang menyebabkan penggandaan dan pertumbuhan sel endotel pembuluh darah dan fibroblast yang dapat memperbaiki dinding pembuluh darah yang rusak.
Lapisan glikoprotein pada pemukaan membran sel trombosit menyebabkan trombosit mampu menghindari perlekatan pada endotel normal dan hanya melekat pada dinding pembuluh darah yang cedera atau luka, terutama pada daerah sel endotel yang rusak dan jaringan kolagen yang terbuka di pembuluh darah. Membran trombosit mengandung fosfolipid yang berperan mengaktifkan faktor-faktor pembekuan darah.
',
                'gambar' => '',
            ],
            [
                'id' => 5,
                'id_mapel' => 2,
                'judul_materi' => 'Hemoglobin' ,
                'detail_materi' => 'Hemoglobin berasal dari dua kata, yaitu: haem dan globin. Hemoglobin mengandung feroprotoporfirin dan protein globin. Eritrosit mengandung protein khusus, yaitu hemoglobin untuk mencapai proses pertukaran gas antara O2 dan CO2, dimana salah satu fungsi eritrosit adalah mengangkut oksigen (O2) ke jaringan dan mengembalikan karbondioksida (CO2) dari jaringan tubuh ke paru. Hemoglobin normal kadarnya 13,0-17,5 gr/dl pada pria dan 12,0-15,5 gr/dl pada wanita.
Selain itu darah juga berperan dalam menyuplai nutrisi, mengangkut zat sisa metabolisme, dan mengandung berbagai bahan penyusun sistem imun untuk pertahanan tubuh dari berbagai penyakit. Eritrosit mengandung protein globular yang mengandung besi (Fe), yaitu hemoglobin yang menyebabkan darah berwarna merah. Hemoglobin merupakan komponen utama eritrosit, terdiri dari globin dan heme. Heme terdiri dari cincin porfirin dengan satu atom besi (ferro). Sedangkan globin terdiri dari empat rantai polipeptida (α2β2), yaitu 2 rantai polipeptida alfa (α2) dan 2 rantai polipeptida beta (β2). Rantai polipeptida α memiliki 141 asam amino dan rantai polipeptida β mempunyai 146 asam amino. Pada keadaan normal, orang dewasa memiliki Hb A (96-98%), Hb F (0,5-0,8%), dan Hb A2(1,5-3,2%). Hb F memiliki afinitas O2lebih tinggi daripada Hb A, sedangkan Hb S (Hb sabit) lebih rendah. Satu eritrosit mengandung kira-kira 640 juta molekul hemoglobin.
Sekitar 65% hemoglobin disintesis pada stadium eritroblast, dan 35% sisanya pada stadium retikulosit. Terjadi sederet reaksi biokimia pada proses sintesis hemoglobin dalam mitokondria, diawali dengan kondensasi glisin dan suksinil koenzim A dibawah aksi enzim kunci delta-amino laevulinic acid (ALA)-sintetase. Koenzim reaksi ini adalah vitamin B6 yang di stimulasi oleh eritropoietin serta dihambat oleh hem. Kemudian protoporphyrin bersama dengan besi membentuk hem yang masing-masing molekulnya bergabung dengan rantai globin yang terbuat dari poliribosom. Selanjutnya tentramer 4 rantai globin dengan masing-masing gugus haemnya sendiri terbentuk dalam kantong guna membentuk molekul hemoglobin.
Hemoglobin dapat langsung mengikat CO2 jika O2 dilepaskan, dan kira-kira 15% CO2 di dalam darah diangkut langsung oleh molekul hemoglobin. CO2 bereaksi dengan gugus α-amino terminal amino dari hemoglobin, sehingga terbentuk karbamat dan melepaskan proton. Hemoglobin mengikat 2 proton untuk setiap kehilangan 4 molekul O2 dan ikut mempengaruhi kemampuan pendaparan darah. Proses ini berlangsung terbalik pada paru, yaitu saat O2 berikatan dengan hemoglobin yang berada dalam keadaan tanpa O2 (deoksigenasi), proton dilepas dan bergabung dengan bikarbonat kemudian membentuk asam karbonat. Asam karbonat membentuk gas CO2 (dengan bantuan enzim karbonik anhidrase) yang kemudian dihembuskan ke luar.
',
                'gambar' => '',
            ],
            [
                'id' => 6,
                'id_mapel' => 2,
                'judul_materi' => 'Kelainan-Kelainan Sel Darah Merah. ' ,
                'detail_materi' => '2.3.1 Kelainan Ukuran (Anisositosis)
Istilah umum yang digunakan dalam hematologi untuk menunjukkan suatu variasi dalam hal ukuran sel disebut Anisositosis. Anisositosis terdiri dari makrositosis,  mikrositosis .Anisositosis disebabkan oleh berbagai hal seperti Pematangan inti yang terganggu menjadikan sel lebih besar dari bentuk normal (makrositosis) ukuran rata-rata diameter eritrosit >8,5 μm dan menurunnya sintesa hemoglobin yang menyebabkan sel lebih kecil dari bentuk normal  ukuran rata-rata diameter eritrosit  <7 μm  Anisositosis tampak jelas pada anemia berat.
Contoh-contoh kelainan ukuran :
1) Mikrositosis : eritosit lebih kecil daripada eritrosit normal,dengan ukuran <7 μm.
2.)	Sferosit : eritrosit lebih kecil,lebih bulat,dan lebih bulat warnanya daripada eritrosit normal.Tidak didapat bagian yang pucat ditengah sel.
2.3.2 Kelainan Bentuk (Poikilositosis)
Istilah umum dari hematologi yang digunakan untuk menunjukkan suatu variasi bentuk dari eritrosit disebut poikilositosis.Kelainan bentuk eritrosit bisa membantu mendiagnosa penyakit.Variasi bentuk dari poikilositosis meliputi akantosit yang menyerupai sel duri, burr sel, sel krenasi yang bisa disebabkan oleh kesalahan pemeriksaan prosedur dan kesalahan pra analitik, eliptosit atau ovalosit berbentuk seperti oval, stomatosit, leptosit, poikolositosit atau bentuk tidak rata, sickle sel, dan schistosit.
Contoh-contoh kelainan bentuk:
1)	Akantosit : ditandai dengan adanya proyeksi halus dipermukaan eritrosit,menyerupai duri (kata yunani : achanta :duri).Kelainan bawaan yang jarang:achanthtocytosis,bisa mencapai lebih dari 50%.
2)	Burr sel : menunjukkan proyeksi-proyeksi atau tonjolan-tonjolan pendek misalnya pada  uremia dan carsinomatosis. Bedakan dengan acanthosit dan sel krenasi (artefak).
3)	Sel Krenasi : merupakan kelainan bentuk dari eritrosit (poikilositosis) yang berbentuk seperti artefak. Krenasi berawal dari sel eritrosit yang mengalami pengerutan akibat cairan yang berada di dalam sel keluar melalui membran. Morfologi krenasi dapat dipengaruhi oleh beberapa faktor, misalnya terjadinya kesalahan pada prosedur pemeriksaan pra-analitik (penambahan antikoagulan,  jenis antikoagulan).
4)	Eliptosit : bentuk seperti elip atau oval dengan ukuran  normal. Juga disebut ovalosit. Bila ada dalam jumlah yang besar mungkin disebabkan karena anomali bawaan,
ovalositosis.
5)	Stomatosit : bentuk seperti topi Meksiko. Pusatnya tidak hipokrom tetapi berwarna merah.
6)	Leptosit : disebut juga sel target karena dibagian tengah eritrosit yang pucat terdapat lingkaran berwarna merah dipusat eritrosit yang menyerupai topi.
7)	Poikilositosis : bentuk tidak rata. Tergolong disini : sel burr, sel buah jambu, dan sebagainya.
8)	Sickle cell : bentuk sabit. Berwarna lebih padat daripada eritrosit biasa. Didapat pada anemia hemolitik sel sabit.
9)	Schistosit : hasil fragmentasi eritrosit, bisa berbentuk segitiga, elips dengan indentasi atau sebagai sel dengan permukaan tidak rata. Biasanya didapat pada anemia hemolitik 2.3.3 Kelainan warna
Eritrosit normal memiliki warna merah dengan bagian pusai berwarna lebih terang
atau pucat ketika di warnai dengan pewarnaan konveksional.Warna merah menandakan banyaknya kadar hemoglobin didalam sel eritrosit. Eritrosit didalam tubuh bisa mengalami perubahan bentuk dan perubahan ukuran sesuai dengan kondisi didalam tubuh yang dipengaruhi oleh penyakit dan kondisi organ-organ didalamnnya. Oleh sebab itu kelainan warna pada eritrosit dapat membantu menegakkan diagnosa suatu penyakit. Kelainan warna juga bisa terjadi pada waktu pengecatan sediaan hapusan darah yang bisa dipengaruhi oleh cat giemsa karena cat giemsa yang diencerkan harus langsung digunakan jika disimpan dengan tidak baik maka akan mempengaruhi hasil pengamatan. Penurunan sintesa hemoglobin bisa menyebabkan hipokrom serta peningkatan sintesa hemoglobin bisa menyebabkan hiperkrom. Hemoglobin sangat berpengaruh terhadap warna karena yang memberi warna pada sel darah merah adalah hemoglobin dengan bantuan zat besi didalam tubuh
Contoh contoh kelainan warna :
1.	Hipokrom : warna pucat pada bagian tengah keadaan eritrosit dengan konsentrasi hemoglobin kurang dari normal, erotrosit lebih besar dari biasanya
2.	Polikromasia : Mengikat zat warna asam sehingga disamping warna merah ada kebiru-biruan. Pematangan sitoplasma lebih lambat dibandingkan pematangan inti.
3.	Hiperkrom : Keadaan eritrosit karena penebalan membran sel tidak karena kejenuhan hemoglobin.
',
                'gambar' => '',
            ],
            [
                'id' => 7,
                'id_mapel' => 2,
                'judul_materi' => 'Pembekuan Darah' ,
                'detail_materi' => '2.2.1 Definisi Pembekuan Darah
Darah merupakan komponen esensial mahluk hidup, mulai dari binatang primitif sampai manusia. Dalam keadaan fisiologik, darah selalu berada dalam pembuluh darah sehingga dapat menjaalaankan fungsinya sebagai:
(a) pembawa oksigen (oxygen carrier);  (b) mekanisme pertahanan tubuh terhadap infeksi;
(c) mekanisme hemostasis.
Hemostatis merupakan  proses yag dinamis melalui mekanisme tertentu yang cepat dan rumit. Sistem hemostasis merupakan mekanisme protektif yang sangat penting yang bertanggung jawab dalam mencegah kehilangan darah dengan menutupi lokasi cedera di sistem pembuluh darah.5’13
2.2.2 Faktor – faktor Koagulasi
Dalam tubuh manusia itu ada 13 faktor pembekuan darah, faktor-faktor tersebut antara lain:
•	Faktor I
Fibrinogen: sebuah faktor koagulasi yang tinggi berat molekul protein plasma dan diubah menjadi fibrin melalui aksi trombin. Kekurangan faktor ini menyebabkan masalah pembekuan darah afibrinogenemia atau hypofibrinogenemia.
•	Faktor II
Prothrombin: sebuah faktor koagulasi yang merupakan protein plasma dan diubah menjadi bentuk aktif trombin (faktor IIa) oleh pembelahan dengan mengaktifkan faktor X (Xa) di jalur umum dari pembekuan.
Fibrinogen trombin kemudian memotong ke bentuk aktif fibrin.
Kekurangan faktor menyebabkan hypoprothrombinemia.
•	Faktor III
Jaringan Tromboplastin: koagulasi faktor yang berasal dari beberapa sumber yang berbeda dalam tubuh, seperti otak dan paru-paru; Jaringan Tromboplastin penting dalam pembentukan prothrombin ekstrinsik yang mengkonversi prinsip di Jalur koagulasi ekstrinsik
Disebut juga faktor jaringan.
•	Faktor IV
Kalsium: sebuah faktor koagulasi diperlukan dalam berbagai fase pembekuan darah.
•	Faktor V
Proaccelerin: sebuah faktor koagulasi penyimpanan yang relatif labil dan panas, yang hadir dalam plasma, tetapi tidak dalam serum, dan fungsi baik di intrinsik dan ekstrinsik koagulasi jalur. Proaccelerin mengkatalisis pembelahan prothrombin trombin yang aktif. Kekurangan faktor ini, sifat resesif autosomal, mengarah pada kecenderungan berdarah yang langka yang disebut parahemophilia, dengan berbagai derajat keparahan. Disebut juga akselerator globulin. • Faktor VI
Sebuah faktor koagulasi sebelumnya dianggap suatu bentuk aktif faktor V, tetapi tidak lagi dianggap dalam skema hemostasis.
•	Faktor VII
Proconvertin: sebuah faktor koagulasi penyimpanan yang relatif stabildan panas dan berpartisipasi dalam Jalur koagulasi ekstrinsik. Hal ini diaktifkan oleh kontak dengan kalsium, dan bersama dengan mengaktifkan faktor III itu faktor X. Defisiensi faktor Proconvertin, yang mungkin herediter (autosomal resesif) atau diperoleh (yang berhubungan dengan kekurangan vitamin K), hasil dalam
kecenderungan perdarahan. Disebut juga serum prothrombin konversi faktor akselerator dan stabil.
•	Faktor VIII
Antihemophilic faktor, sebuah faktor koagulasi penyimpanan yang relatif labil dan berpartisipasi dalam jalur intrinsik dari koagulasi, bertindak (dalam konser dengan faktor von Willebrand) sebagai kofaktor dalam aktivasi faktor X. Defisiensi, sebuah resesif terkait-X sifat, penyebab hemofilia A. Disebut juga antihemophilic globulin dan faktor antihemophilic A.
•	Faktor IX
	Tromboplastin 	Plasma 	komponen, 	sebuah 	faktor 	koagulasi
penyimpanan yang relatif stabil dan terlibat dalam jalur intrinsik dari pembekuan. Setelah aktivasi, diaktifkan Defisiensi faktor X. hasil di hemofilia B. Disebut juga faktor Natal dan faktor antihemophilic B.
•	Faktor X
Stuart faktor, sebuah faktor koagulasi penyimpanan yang relatif stabil dan berpartisipasi dalam baik intrinsik dan ekstrinsik jalur koagulasi, menyatukan mereka untuk memulai jalur umum dari pembekuan. Setelah diaktifkan, membentuk kompleks dengan kalsium, fosfolipid, dan faktor V, yang disebut prothrombinase; hal ini dapat membelah dan mengaktifkan prothrombin untuk trombin. Kekurangan faktor ini dapat menyebabkan gangguan koagulasi sistemik. Disebut juga Prower Stuart-faktor. Bentuk yang diaktifkan disebut juga thrombokinase.
•	Faktor XI
Tromboplastin plasma yg di atas, faktor koagulasi yang stabil yang terlibat dalam jalur intrinsik dari koagulasi; sekali diaktifkan, itu mengaktifkan faktor IX. Lihat juga kekurangan faktor XI. Disebut juga faktor antihemophilic C.
•	Faktor XII
Hageman faktor: faktor koagulasi yang stabil yang diaktifkan oleh kontak dengan kaca atau permukaan asing lainnya dan memulai jalur intrinsik dari koagulasi dengan mengaktifkan faktor XI. Kekurangan faktor ini menghasilkan kecenderungan trombosis.
•	Faktor XIII
Fibrin-faktor yang menstabilkan, sebuah faktor koagulasi yang merubah fibrin monomer untuk polimer sehingga mereka menjadi stabil dan tidak larut dalam urea, fibrin yang memungkinkan untuk membentuk pembekuan darah. Kekurangan faktor ini memberikan kecenderungan seseorang hemorrhagic. Disebut juga fibrinase dan protransglutaminase. Bentuk yang diaktifkan juga disebut
transglutaminase.14
2.2.3 Mekanisme Hemostasis Primer-Trombosit
Putusnya pembuluh darah menyebabkan dinding pembuluh darah
memaparkan kolagen dan elemen lain dari matriks ekstraseluler ketempat plasma, faktor von Willebrand (VWF) dan trombosit akan terikat, suatu proses yang dipermudah dengan adanya gaya gesekan (shear stress) dalam aliran darah. VWF yang terikat dengan kolagen akan memfasilitasi lebih banyak trombosit lain unutk terikat. Selama proses pengikatan ini, trombosit teraktivasi, melepaskan ade nosin difosfat ADP, tromboksan A2 dan VWF sehingga trombosit tambahan lain juga tertangkap dan teraktivasi. Hasil akhirnya adalah terbentuk sumbat trombosit primer yang akan menghentikan kehilangan darah lebih lanjut maka dari itu dapat memperpendek interval waktu  antara lukanya kulit dan keluarnya darah sampai berhentinya perdarahan (bleeding time).

2.2.4 Mekanisme Hemostasis Sekunder-Koagulasi
Darah yang melewati lokasi kerusakan pembuluh darah terpapar dengan faktor jaringan yang diekspresi dalam jumlah besar oleh sel-sel di sekitar dinding pembuluh darah, membentuk apa yang disebut sebagai ‘selubung hemostasis’. Faktor jaringan ini berikatan dengan faktor VII diplasma, membentuk suatu kompleks aktivasi dan memicu koagulasi darah. Proses ini disebut ‘Jalur ekstrinsik’ karena faktor jaringn dinggap ekstrinsik terhadap darah. Jalur ekstrinsik merupakan jalur fisiologis untuk aktivasipembekuan darah in vivo.
Kompleks faktor jaringan-faktor VII mengubah faktor X menjadi bentuk aktif (Xa) melalui pemecahan proteolitik dan Xa kini mampu mengubah sejumlah kecil protrombin (faktor II) menjadi trombin, lagi oleh pemecahan proteolitik. Kerja yang paling penting dari trombin adalah mengaktivasi dua ko-faktor, yaitu faktor V dan faktor VIII menjadi bentuk aktif: faktor VIIIa dan vaktor Va bukan suatu enzim, tetapi secara bermakna dapat meningkatkan aktivitas enzim dari faktor IXa (juga diaktivasi oleh kompleks faktor jaringan-faktor VIII) dan faktor Xa kira-kira lima kali lipat. Hasilnya adalah amplifikasi besar-besaran stimulus awal dan lonjakan pembentukan trombin. Fase akhir adalah trombin menginduksi pemecahan fibrinopeptida A dan B dari fibrinogen membentuk fibrin monomer. Monomer-monomer ini membentuk dimers dan kemudian polimer. Proses ini dilengkapi oleh aktivasi faktor XIII oleh trombin yang membentuk jalinan fibrin monomer menjadi bekuan yang stabil. Fibrinogen larut kemudian diubah menjadi fibrin stabil yang tidak larut. Fibrin mengikat dan menstabilkan sumbat trombosit, yang cenderung untuk tidak mengalami pemisahan lagi sehingga akhirnya terbentuk sumbat yang kokoh dan tidak larut yang terdiri dari fibrin, trombosit dan sel darah lain (clotting time).5’16

',
                'gambar' => '',
            ],
            [
                'id' => 8,
                'id_mapel' => 2,
                'judul_materi' => 'Clotting Time' ,
                'detail_materi' => 'Pada pemeriksaan clotting time menggunakan metode lee-white. Sebelum memulai pemeriksaan atur terlebih dahulu stopwatch pada angka nol. Bersihkan ujung jari secara menyeluruh dengan kapas alkohol dan biarkan sampai kering. Tusuk ujung jari agak dalam untuk memastikan keluarnya darah dengan menggunakan lanset, disamping itu mulai jalankan stopwatch. Darah diteteskan sebanyak dua tetes pada objek glas stopwatch dijalankan. Darah tadi diangkat dengan jarum tiap 30 detik sampai terlihat adanya benang fibrin. Nilai normal untuk clotting time yaitu 2-6 menit.',
                'gambar' => '',
            ],
            [
                'id' => 9,
                'id_mapel' => 2,
                'judul_materi' => 'Waktu perdarahan (Bleeding Time)',
                'detail_materi' => 'Waktu perdarahan merupakan pemeriksaan untuk mengetahui fungsi trombosit. Deskripsi tentang waktu perdarahan pertama kali diperkenalkan oleh Milian seorang dokter Perancis pada tahun 1901. Pada tahun 1910 mulai dikenal metode Duke untuk pemeriksaan waktu perdarahan dan kemudian dikenal metode lain yang disebut metode Ivy. Metode DUKE lebih mudah dan sederhana untuk dilaksanakan dibanyak laboratorium tetapi tidak cukup sensitif untuk mendeteksi kelainan hemostasis meskipun trombosit berada dalam jumlah yang sedikit. Sedangkan metode Ivy memerlukan fasilitas yang lebih baik dan membutuhkan waktu yang lebih banyak dalam pelaksanaannya, sehingga secara umum tidak digunakan dalam pemeriksaan rutin laboratorium. Kedua metode tersebut berbeda
dalam pelaksanaannya:12
(1)	Duke, yaitu dengan membuat luka pada cuping telinga menggunakan lancet. Cuping telinga dibersihkan terlebih dahulu dengan menggunakan alkohol. Darah yang keluar dari lokasi tusukan kemudian dicatat menggunakan kertas saring dengan jeda waktu 30 detik. Tes berakhir jika sudah tidak ada darah lagi yang menetes atau keluar. Waktu normal adalah 1-3 menit.12,13
(2)	Ivy, pemeriksaan dilakukan dengan cara memberi tekanan pada lengan atas dengan memasang manset tekanan darah. Setelah itu, dibuat insisi kecil pada daerah fleksor lengan bawah. Selama prosedur tekanan pada lengan atas dipertahankan pada 40 mmHg. Pada keadaan normal, perdarahan akan berhenti dalam waktu 3-8 menit.
',
                'gambar' => '',
            ],
            [
                'id' => 10,
                'id_mapel' => 4,
                'judul_materi' => 'Ascaris lumbricoides' ,
                'detail_materi' => '1. Distribusi Geografis
Parasit ini ditemukan kosmopolit terutama didaerah tropik dengan udara yang lembap serta sangat erat hubungannya dengan keadaan hiegine dan sanitasi. Cacing ini terutama menyerang anak-anak usia 5-9 tahun, sedangkan menurut jenis kelamin tidak menunjukkan perbedaan nyata, artinya laki-laki dan perempuan memiliki kemungkinan terinfeksi yang sama
2. Klasifikasi
 	Klasifikasi dari Ascaris lumbricoides adalah
Kingdom  	: Animalia
Filum  	: Nemathelminthes
Kelas   	: Nematoda
Sub-kelas  	: Phasmida
Ordo   	: Rhabdidata
Sub-ordo 	: Ascaridata
Familia  	: Ascarididae
Spesies  	: Ascaris lumbricoides
3. Morfologi
 Ascaris lumbricoides merupakan salah satu jenis Soil Transmitted Helminths (STH) yaitu, cacing yang memerlukan perkembangan di dalam tanah untuk menjadi infektif. Ascaris lumbricoides merupakan nematoda parasit yang paling banyak menyerang manusia dan cacing ini disebut juga cacing bulat atau cacing gelang. Cacing dewasa berwarna agak gelap kemerahan atau putih kekuningan, bentuknya silindris memanjang, ujung anterior tumpul memipih dan ujung posteriornya agak meruncing. Terdapat garis-garis lateral yang biasanya mudah dilihat, ada sepasang, warnanya memutih sepanjang tubuhnya
Pada bagian anterior terdapat mulut dengan tiga lipatan bibir (1 bibir di dorsal dan 2 di ventral), pada bibir, tepi lateral terdapat sepasang papil peraba. Cacing jantan, memiliki ukuran panjang 15-30 cm x lebar 3-5 mm, bagian posterior melengkung ke depan, terdapat kloaka dengan 2 spikula yang dapat di tarik. Cacing betina, berukuran panjang 22-35 cm x lebar 3-6 mm, vulva membuka ke depan pada 2/3 bagian posterior tubuh terdapat penyempitan lubang vulva disebut cincin kopulasi .
Telur cacing yang telah dibuahi (ferilized) berbentuk lonjong, berukuran 45-70 mikron x 35-50 mikron, mempunyai kulit telur yang tak berwarna kuat. Di luarnya, terdapat lapisan albumin yang permukaanya bergerigi (mamillation), berwarna coklat karena menyerap zat warna empedu. Di bagian dalam kulit telur masih terdapat selubung vietelin yang tipis, tetapi kuat yang meningkatkan daya tahan hidup telur cacing ini sampai satu tahun, terhadap lingkungan sekitarnya. Telur yang telah dibuahi mengandung sel telur (ovum) yang tidak bersegmen. Di kedua kutup telur terdapat rongga udara yang tampak sebagai daerah yang terang berbentuk bulan sabit .
Telur yang tidak dibuahi (unfertilized) karena di dalam usus penderita hanya terdapat cacing betina saja, bentuknya lebih lonjong beruukuran sekitar 80 x 55 mikron. Pada telur yang tak dibuahi ini tidak terdapat rongga udara . Kadang-kadang di dalam tinja penderita ditemukan telur Ascaris lumbricoides yang telah hilang lapisan albuminnya sehingga sulit dibedakan dari telur cacing lainnya. Adanya ovarium yang besar menjadi ciri khas telur cacing Ascaris lumbricoides.
4. Siklus hidup
 Telur cacing yang telah dibuahi yang keluar bersama tinja penderita, di dalam tanah yang lembap dan suhu yang optimal akan berkembang menjadi telur infektif yang mengandung larva cacing. Infeksi terjadi dengan masukna telur cacing yang infektif ke dalam mulut melalui makanan atau minuman yang tercemar tanah yang mengandung tinja penderita Askariasis. Dalam usus halus bagian atas dinding telur akan pecah sehingga larva dapat keluar, untuk selanjutnya menembus dinding usus halus dan memasuki vena porta hati. Bersama aliran darah vena, larva akan beredar menuju jantung, paru-paru, lalu menembus dinding kapiler masuk ke dalam alveoli. Masa migrasi ini berlangsung sekitar 15 hari
Dari alveoli larva cacing merangkak ke bronki, trakea dan laring, untuk selanjutnya masuk ke faring, usofagus, turun ke lambung akhirnya sampai ke usus halus. Sesudah berganti kulit, larva cacing akan tumbuh menjadi cacing dewasa. Sirkulasi dan migrasi larva cacing dalam darah tersebut disebut “long migration”. Dua bulan sejak infeksi (masuknya telur infektif per oral) terjadi, seekor betina mulai mampu bertelur, yang jumlah produksi telurnya dapat mencapai 200.000 butir per hari.
5. Patogenesis
 Cacing dewasa yang berada di dalam usus dan larva cacing yang beredar melalui aliran darah, menimbulkan perubahan patologis pada penderita. Migrasi larva cacing di paru-paru dapat menimbulkan pneumonia dengan gejala berupa demam, batuk, sesak dan dahak berdarah. Penderita juga mengalami urtikaria dan terjadi gambaran eosinofili sampai 20%. Pneumonia disertai gejala alergi ini disebut sebagai Sindrom loeffler atau Ascaris pneumonia. Pada infeksi berat (hiperinfeksi), terutama pada anak-anak dapat terjadi gangguan pencernaan dan penyerapan protein sehingga penderita mengalami gangguan pertumbuhan dan anemia akibat kurang gizi.
Cairan tubuh cacing yang toksik dapat menimbulkan gejala mirip demam tifoid, disertai tanda-tanda alergi misalnya urtikaria, edema pada wajah, konjungtivitis dan irirtasi pernapasan bagian atas. Pada manusia cacing dewasa dapat menimbulkan berbagai akibat mekanik, yaitu obstruksi usus, intususepsi, dan perforasi ulkus yang ada di usus. Selain itu cacing dewasa dapat melakukan migrasi ke organ-organ di luar usus (askariasis ektopik), misalnya ke lambung, usofagus, mulut, hidung, rima glottis atau bronkus, sehingga menyumbat pernapasan penderita. Juga dapat terjadi sumbatan saluran empedu, apendisitis, abses hati, dan pankreatitis akut .
6. Diagnosis
Dari gejala klinis saja sering kali susah untuk menegakkan diagnosis, karena tidak ada gejala klinis yang spesifik sehingga diperlukan pemeriksaan laboratorium. Diagnosis ascariasis ditegakkan berdasarkan menemukan telur cacing dalam tinja (melalui pemeriksaan langsung atau metode konsentrasi), larva dalam sputum, cacing dewasa keluar dari mulut, anus, atau dari hidung. Tingkat infeksi ascariasis dapat ditentukan dengan memeriksa jumlah telur per gram tinja atau jumlah cacing betina yang ada dalam tubuh penderita .
7. Pengobatan
Pengobatan dapat dilakukan secara perorangan atau secara masal. Untuk perorangan dapat digunakan bermacam-macam obat misalnya piperasin, pirantel pamoat 10 mg/kg berat badan, dosis tunggal mebendazol 500 mg atau albendazol 400 mg. Oksantel-oirantel pamoat adalah obat yang dapat digunakan untuk infeksi campuran Ascaris lumbricoides dan Trichiura trichiura. Untuk pengobatan masal perlu beberapa syarat yaitu obat mudah diterima masyarakat, aturan pemakaian sederhana, mempunyai efek samping yang minim, bersifat polivalen sehingga berkhasiat terhadap beberapa jenis cacing, harganya murah. Pengobatan masal dilakukan oleh pemerintah pada anak sekolah dasar dengan pemberian albendazol 400 mg 2 kali setahun .
8. Pencegahan
 Penularan Ascaris lumbricoides dapat terjadi secara oral, maka sebagai pencegahannya menghindarkan tangan dalam keadaan kotor, karena kemungkinkan adanya kontaminasi dari telur-telur Nematoda usus, dan membiasakan mencuci tangan sebelum makan. Menghidarkan sayuran yang mentah yang tidak dimasak terlebih dahulu dan jangan membiarkan makanan terbuka begitu saja, sehingga debu-debu yang beterbangan dapat mengkontaminasi makanan tersebut ataupun dihinggapi serangga di mana terbawa telur-telur tersebut. Untuk menekan volume dan lokasi dari aliran telur-telur melalui jalan ke penduduk, maka pencegahannya dengan mengadakan penyaluran pembuangan feses yang teratur dan sesuai dengan syarat pembuangan kotoran yang memenuhi aturan kesehatan dan tidak boleh mengotori air permukaan, untuk mencegah agar tanah tidak terkontaminasi telur-telur Ascaris lumbricoides. Mengingat prevalensi yang tinggi pada golongan anak-anak maka perlu diadakan pendidikan di sekolah-sekolah mengenai cacing Ascaris lumbricoides. Dan dianjurkan untuk membiasakan mencuci tangan sebelum makan, mencuci makanan dan memasaknya dengan baik, memakai alas kaki terutama di luar rumah.
Ada baiknya di desa-desa diberi pendidikan dengan cara peragaan secara audio visual, sehingga dengan cara ini mudah dapat dimengerti oleh mereka. Untuk melengkapi hal di atas perlu ditambah dangan penyediaan sarana air minum dan jamban keluarga, sehingga sebagaimana telah menjadi program nasional, rehabilitasi sarana perumahan juga merupakan salah satu perbaikan keadaan sosial-ekonomi yang menjurus kepada perbaikan hygine dan sanitasi.
Cara-cara perbaikan tersebut adalah sebagai berikut :
1.	Buang air selalu di jamban dan menggunakan air untuk membersihkannya.
2.	Memakan makanan yang sudah dicuci dan dipanaskan serta menggunakan sendok garpu dalam waktu makan dapat mencegah infeksi oleh telur cacing.
3.	Anak-anak dianjurkan tidak bermain di tanah yang lembap dan kotor.
4.	Halaman rumah selalu dibersihkan.
',
                'gambar' => '',
            ],
            [
                'id' => 11,
                'id_mapel' => 4,
                'judul_materi' => 'Trichuris Trichiura' ,
                'detail_materi' => '1. Distribusi Geografis
Cacing ini tersebar luas di daerah tropis dan juga ditemukan kosmopolit terutama didaerah yang berhawa panas dan lembap. Tanah yang paling baik untuk perkembangan telur, yaitu tanah yang hangat, basah, dan teduh.


2. Klasifikasi
Trichuris trichiura diklasifikasikan sebagai berikut :
Kingdom  	: Animalia
Filum   	: Nemathemlminthes
Kelas   	: Nematoda
Sub-kelas  	: Aphasmidia
Ordo   	: Enoplida
Sub-ordo  	: Trichurata
Super famili  : Trichuriodea
Famili   	: Trichuridae
Genus   	: Trichuris
Spesies  	: Trichuris trichiura
3. Morfologi
 Cacing dewasa berbentuk cambuk, dengan bagian anterior yang merupakan tiga per lima panjang tubuh berbentuk langsing seperti tali cambuk, sedangkan dua perlima bagian tubuh posterior lebih tebal mirip pegangan cambuk. Cacing jantan panjangnya sekitar 4 cm dan cacing betina 5 cm. Bagian ekor cacing jantan melengkung ke arah ventral, mempunyai satu spikulum yang berselubung retrakil. Bagian kaudal cacing betina membulat tumpul seperti koma .
Telur cacing khas bentuknya, berwarna coklat mirip biji melon. Telur yang berukuran sekitar 50 x 25 mikron ini mempunyai dua kutub jernih yang menonjol . Setiap hari dapat dihasilkan telur sekitar 3.000-10.000. Telurtelur yang telah dibuahi tidak bersegem waktu dikeluarkan (Gambar 2.3). Pertumbuhan telur ini berlangsung baik di daerah panas, dengan kelembapan tinggi terutama ditempat yang terlindungi
4. Siklus hidup
Infeksi terjadi jika manusia tertelan telur cacing yang infektif, sesudah telur mengalami pematangan di tanah dalam waktu 3-4 minggu lamanya. Selanjutnya dibagian proksimal usus halus, telur menetas, keluar larva menetap selama 3-10 hari. Setelah dewasa, cacing akan turun ke usus besar dan menetap dalam beberapa tahun. Jelas sekali bahwa larva tidak mengalami migrasi dalam sirkulasi darah ke paru-paru. Waktu yang diperlukan sejak telur infektif tertelan sampai cacing betina menghasilkan telur, 30-90 hari. Seperti juga pada Ascaris lumbricoides, siklus hidup Trichuris trichiura merupakan siklus langsung karena keduanya tidak membutuhkan tuan rumah perantara .
5. Patogenesis
 Cacing dewasa yang menembus dinding usus menimbulkan trauma dan kerusakan pada jaringan usus. Selain itu cacing menghasilkan toksin yang menimbulkan iritasi dan peradangan. Pada infeksi ringan dengan beberapa ekor cacing, todak tampak gejala atau keluhan penderita. Tetapi pada infeksi yang berat, penderita akan mengalami gejala dan keluhan berupa :
1.	Anemia dengan hemoglobin yang dapat >3%
2.	Diare berdarah
3.	Nyeri perut
4.	Mual dan muntah
5.	Berat badan menurun
6.	Kadang-kadang terjadi prolaps dari rectum yang melalui pemeriksaan proktoskopi dapat dilihat adanya cacing-cacing dewasa pada kolon atau rectum penderita
Pemeriksaan darah pada infeksi yang berat, hemoglobin dapat berada di bawah 3 g% dan menunjukkan gambaran eosinofilia (eosinofil >3%). Pemeriksaan tinja dapat menemukan telur cacing yang khas bentuknya .
6. Diagnosis
Pada penderita trichuriasis untuk diagnosisnya sama dengan penderita ascariasis yaitu dapat diteggakan dengan menemukan telur pada tinja (feses). Pada infeksi ringan, metode pemeriksaan tinja dapat dilakukan dengan metode konsentrasi. Perhitungan jumlah telur dapat mendeterminasi intensitas infeksi dan dapat mengetahui hasil pengobatan. Perhitungan jumlah telur dapat dilakukan dengan metode stoll .
7. Pengobatan
Pengobatan  Trichuris trichiura sukar dilakukan karena letak cacing di dalam mukosa usus diluarjangkauan daya anthelmintika. Dianjurkan pemakaian preparat enzim yang merusak zat putih telur, dengan demikian substansi badan parasit akan hancur, selanjutnya pemberian zat warna Dithiazanin dalam kapsul yang larut dalam usus halus. Obat ini per oral sangat toksis, tapi praktis dapat dilakukan sebagai berikut. 0,5-1 gram dilarutkan dalam 300 ml aquades dengan dosis 30 mg per kg berat badan. Hal ini dilakukan supaya cacing dapat berubah posisi kepalanya dalam waktu daya kerja obat. Doenges (1966) menganjurkan pemakaian Piperazin (1,8 g dalam 500 ml larutan garam fisiologis). Harapan besar dapat digantungkan pada preparat baru Diklorovos bendazol (Minzolum R) bekerja baik malah pada telur-telurnya, tapi tidak mempan terhadap cacingnya sendiri. Sekarang Mebendazol sudah dikenal cukup ampuh untuk trichuriasis, dengan dosis 2 kali sehari, selama 3 hari berturut-turut .
8. Pencegahan
 Pecegahan penularan trikuriasis dilakukan melalui pengobatan penderita atau pengobatan massal untuk terapi pencegahan terhadap terjadinya reinfeksi di daerah endemis. Memperbaiki hiegine sanitasi perorangan dan lingkungan, agar tidak terjadi pencemaran lingkungan oleh tinja penderita, misalnya membuat WC atau jamban yang baik di setiap rumah. Memasak makanan dan minuman dengan baik dapat membunuh telur infektif cacing .
',
                'gambar' => '',
            ],
            [
                'id' => 12,
                'id_mapel' => 4,
                'judul_materi' => 'Cacing Tambang',
                'detail_materi' => 'Pada cacing tambang atau cacing kait (hook worm) pada manusia ada dua spesies, yaitu Necator americanus dan Ancylostoma duodenale . Penyakit oleh Necator americanus disebut Necatoriasis dan oleh Ancylostoma duodenale disebut Ancylostomiasis .
1. Distribusi Geografis
 Cacing tambang tersebar luas di seluruh dunia (kosmopolit) terutama di daerah tropis dan subtropis, terutama yang bersuhu panas dan mempunyai kelembapan tinggi. Di Eropa, Cina, dan Jepang, infeksi cacing-cacing ini disebut cacing tambang. Infeksi cacing tambang di Indonesia disebabkan oleh Necator americanus yang menyebabkan nekatoriasis dan Ancylostoma duodenale yang menimbulkan ankilostomiasis .

2. Klasifikasi
Klasifikasi cacing Hookworm adalah
	Kingdom   	: Animalia
 	Filum   	: Nemathelminthes
 	Kelas   	: Nematoda
 	Sub-kelas  	: Phasmidia
 	Ordo   	: Rhabditida
 	Sub-ordo  	: Strongylata
	Super familia  : Strongyloidea
	Familia  	: Ancylostomatidae
	Genus   	: Ancylostoma
	Spesies  	: Ancylostoma duodenale

a)	Kingdom  	: Animalia
	Filum   	: Nemathelminthes
	Kelas   	: Nematoda
	Sub-kelas  	: Phasmidia
	Ordo   	: Rhabditida
	Sub-ordo  	: Strongylata
Super familia : Stongyloidea
	Familia  	: Ancylostomatidae
	Genus   	: Necator
	Spesies  	: Necator americanus
3. Morfologi
 Cacing tambang berbentuk silindris berwarna putih kebuan. Cacing betina mempunyai ukuran 9-13 mm, sedangkan cacing jantan berukuran panjang 5 dan 11 mm. Cacing jantan mempunyai bursa kopulatriks (bursa copultrix), suatu alat bantu kupulasi, yang dapat di ujung posterior tubuhnya. Kedua spesies cacing tambang ini dapat dibedakan morfologi atas bentuk tubuh, rongga mulut dan bentuk bursa kopulatriksnya. Necator americanus ukuran tubuh cacing dewasa lebih kecil dan langsing dari Ancylostoma duodenale, dengan bagian anterior melengkung berlawanan dengan lengkungan tubuh sehingga bentuk tubuhnya mirip huruf S. Rongga mulut mempunyai 2 pasang alat pemotong (cutting palate). Pada tubuh bagian kaudal cacing betina, tidak ada spina kaudal (spina caudal).
Sedangkan Acylostoma duodenale bentuk tubuh cacing dewasa mirip huruf C. Rongga mulut memiliki dua pasang gigi dan satu pasang tonjolan. Cacing betina mempunyai spina caudal .
 Morfologi telur cacing tambang mirip satu spesies dengan spesies lainnya, sehingga sukar dibedakan. Telur berbentuk lonjong, tidak berwarna, berukuran sekitar 65 x 40 mikron. Dinding telur tipis, tembus sinar, dan berisi embrio yang mempunyai empat blastomer .
4. Siklus hidup
 Manusia merupakan satu-satunya hospes definitif Necator americanus maupun Acylostoma duodenale. Telur yang keluar dari usus penderita dalam waktu 2 hari akan tumbuh di tanah menjadi larva rhabditiform(tidak infektif). Sesudah berganti kulit dua kali, larva rhabditiform dalam waktu satu minggu akan berkembang menjadi larva filariform yang infektif.
 Lung migration. Larva filariform akan menembus kulit sehat manusia memasuki pembuluh darah dan limfe, beredar di dalam aliran darah, masuk ke jantung kanan, lalu masuk ke dalam kapiler paru. Larva menembus dinding kapiler masuk ke dalam alveoli. Larva cacing kemudian mengadakan migrasi ke bronki, trakea, laring dang faring, akhirnya tertelan masuk ke esofagus. Di esofagus larva berganti kulit untuk yang ke tiga kalinya migrasi larva berlangsung sekitar 10 hari. Dari esofagus larva masuk ke usus halus, berganti kulit yang ke empat kalinya, lalu tumbuh menjadi cacing dewasa. Dalam waktu satu bulan, cacing betina sudah mampu bertelur
5. Patogenesis
 Gejala klinis ditimbulkan baik oleh cacing dewasa maupun larvanya. Cacing dewasa mengisap darah penderita. Seekor cacing dewasa Necator americanus menimbulkan kehilangan darah sekitar 0,1 cc per hari, sedangkan seekor cacing Acylostoma duodenale dapat menimbulkan kehilangan darah sampai 0,34 cc per hari. Larva cacing menimbulkan dermatitis dengan gatal-gatal (ground itch) pada waktu menembus kulit penderita. Selain itu larva pada waktu beredar di dalam darah (lung migration) akan menimbulkan bronkitis dan reaksi alergi yang ringan .
6. Diagnosis
Diagnosis pasti infeksi cacing tambang ditetapkan melalui pemeriksaan mikroskopis tinja untuk menemukan telur cacing . Dalam tinja yang lama mungkin ditemukan larva. Untuk membedakan Necator americanus dan Acylostoma duodenale dapat dilakukan biakan misalnya dengan cara HaradaMori .
7. Pengobatan
 	Pengobatan 	ditujukan 	untuk 	mengatasi 	anemia 	maupun 	untuk memberantas cacingnya, yaitu :
1.	Terapi anemia menggunakan preparat besi, yang diberikan per oral atau parental.
2.	Folic acid diberikan, bila terjadi anemia megaloblastik.
3.	Obat cacing yang diberikan per oral yaitu mebendazol, albendazol, levamisol dan pyrantel.
Mebendazol : dosis dewasa dan anak berumur di atas 2 tahun, 2 x 100 mg/hari selama 3 hari. Jika perlu dapat diulang sesudah 3 minggu.
Albendazol : dosis tunggal 400 mg.
Levamisol : terutama jika terjadi infeksi gandadengan askariasis. Dosis tunggal dewasa, 120 mg dan dosis tunggal anak 2,5 mg/kg berat badan.
Pyrantel : dosis tunggal 10 mg/kg berat badan.


8. Pencegahan
 Pencegahan infeksi cacing tambang dapat dihindarkan dengan cara sebagai berikut berikut :
1.	pembuangan tinja pada jamban-jamban yang memenuhi syarat kesehatan
2.	memakai sepatu untuk menghindari masuknya larva melalui kulit 3. mengobati orang-orang yang mengandung parasit pengobatan massal dapat dilakukan bila frekuensinya melebihi 50%, jumlah cacing rata-rata melebihi 150 ekor dan bila fasilitas untuk memeriksa seluruh penduduk setempat tidak ada. Di pedesaan, bila sistem pengaliran air selokan tidak baik untuk sanitasi, defekasi di sembarang tempat dapat dihindari dengan pembuatan lubang-lubang kakus.
',
                'gambar' => '',
            ],
            [
                'id' => 13,
                'id_mapel' => 4,
                'judul_materi' => 'Strongyloides Stercoralis' ,
                'detail_materi' => '1. Distribusi Geografis
 Nematoda ini terutama terdapat di daerah tropik dan subtropik sedangkan di daerah yang beriklim dingin jarang ditemukan.
2. Klasifikasi
 klasifikasi dari Strongyloides stercoralis adalah
Kingdom  	: Animalia
Filum   	: Nemathelminthes
Kelas   	: Nematoda
Sub-kelas 	: Phasmidia
Ordo   	: Rhabditida
Sub-ordo  	: Strongylina
Familia  	: Strongyloididea
Genus   	: Strongyloides
Spesies  	: Strongyloides stercoralis
3. Morfologi
 Cacing dewasa yang hidup bebas terdiri atas : cacing betina yang memiliki ukuran 1 mm x 50 m, mempunyai esofagus dibagian posterior, ekor lurus meruncing, vulva terletak dekat pertengahan tubuh yang merupakan muara dari uterus bagian posterior. Cacing jantan, berukuran 700 x 45 m, ekor melengkung ke depan memiliki dua buah spikula kecil kecoklat-coklatan, esofagus lonjung dilengkapi bulbus esofagus. Cacing dewasa sebagai parasit terdiri atas cacing betina memiliki ukuran 2,2 mm x 50 m, esofagus silindris terletak pada 1/3 panjang tubuh, vulva pada batas 1/3 panjang posterior dan 1/3 bagian tengah tubuh cacing jantan, tidak pernah ditemukan, diduga setelah masa perkawinan yang tetap bertahan di dalam trachea.
 Telur hanya didapatkan di dalam tinja dengan diare berat atau setelah pemberian pencahar. Mirip telur cacing tambang bentuk lonjong, memiliki ukuran (50-60) x (30-35) m, dinding tipis di dalamnya mengandung .
4. Siklus hidup
 Telur disimpan di dalam mukusa usus, menetas menjadi larva rhabditiform, menembus sel epitel dan lewat ke lumen usus, keluar bersama tinja. Telur kadang-kadang juga di temukan dalam tinja. Parasit ini mempunyai 3 macam daur hidup.
1.	Daur langsung (direct cycles)
Seperti pada cacing tambang. Dalam waktu singkat, 2-3 hari larva rhabditiform (225 x 16µ), bertukar kulit menjadi larva filariform yang panjang, ramping, tidak makan dan infeksius. Berkuran sekitar 700 mikron. Larva filariform menembus kulit manusia, masuk ke dalam sirkulasi vena melewati jantung kanan sampai ke paru-paru dan menembus ke alveoli. Dari paru-paru naik ke glottis, tertelan, sampai ke usus halus dan disitu menjadi dewasa. Sering terjadi beberapa larva melewati halangan pulmo, mengikuti sirkulasi arteri dan mencapai berbagai organ dalam tubuh. Selama migrasi dalam tubuh tuan rumah larva mengalami pergantian kulit dua kali untuk menjadi dewasa muda. Betina dewasa menghasilkan telur 28 hari setelah infeksi.
2.	Daur tidak langsung (indirect cycles)
Dalam siklus tidak langsung larva rhabditiform menjadi dewasa bebas di tanah. Setelah pembuahan yang betina menghasilkan telur yang bertumbuh menjadi larva rhabditiform. Larva ini dapat menjadi larva filariform yang infeksius dalam beberapa hari dan masuk kedalam hospes baru atau mengulangi generasi hidup bebas.
3.	Auto infeksi (auto infektion)
Sewaktu-waktu larva dapat bertumbuh menjadi stadium filariform dalam usus dan menembus dinding mukosa usus, ini dinamakan endo autoinfeksi, atau di daerah kulit perianal masuk kembali ke dalam hospes.
5. Patogenesis
 Kelainan patologis disebabkan oleh larva maupun oleh cacing dewasa. Larva cacing pada waktu menembus kulit, menimbulkan dermatitis disertai urtikaria dan pruritus. Jika larva yang mengadakan migrasi paru banyak jumlahnya, maka dapat menimbulkan pneumonia dan batuk darah. Cacing dewasa yang berada di dalam mukosa usus dapat menimbulkan diare yang berdarah yang bisa disertai lendir. Infeksi yang berat dengan cacing ini dapat menimbulkan kematian penderita.
6. Diagnosis
Diagnosis klinis pada penderita strongiloidiasis tidak pasti karena tidak memberikan gejala klinis yang nyata. Diagnosis pasti ialah dengan menemukan larva rhabditiform dalam tinja segar, dalam biakan atau dalam aspirasi duodenum. Biakan selama sekurang-kurangnya 2 x 24 jam menghasilkan larva filariform dan cacing dewasa Strongyloides stercoralis yang hidup bebas.
7. Pengobatan
Albendazol 400 mg satu/dua kali sehari selama tiga hari merupakan obat pilihan. Mebendazol 100 mg tiga kali sehari selama dua atau empat minggu dapat memberikan hasil yang baik. Mengobati orang yang mengandung parasit, meskipun kadang-kadang tanpa gejala, adalah penting mengingat dapat terjadi autoinfeksi. Perhatian khusus ditujukan kepada pembersihan sekitar daerah anus dan mencegah konstipasi.

8. Pencegahan
 Tindakan pencegahan strongiloidiasis lebih sulit dilakukan dibanding pencegahan terhadap infeksi cacing tambang. Hal ini disebabkan oleh adanya hewan sebagai hospes reservoir. Selain itu terjadinya autoinfeksi di usus dan siklus hidup bebas di tanah menyulitkan pemberantasan parasit ini.
 Kontaminasi parasit
 Kotoran manusia adalah semua benda atau zat yang tidak dipakai lagi oleh tubuh dan harus dikeluarkan dalam tubuh. Zat-zat yang harus dikeluarkan oleh tubuh berbentuk tinja (feses), air seni (urine) dan CO2 sebagai hasil dari proses pernafasan. Dengan pertambahan penduduk yang tidak sebanding dengan pemukiman, masalah pembuangan kotoran manusia merupakan masalah yang sedini mungkin harus diatasi, karena kotoran manusia (tinja) adalah sumber penyebaran penyakit yang multikompleks. Penyebaran penyakit yang bersumber pada tinja dapat melalui berbagai cara. Selain dapat langsung mengkontaminasi makanan, minuman, sayuran dan buah-buahan, serangga (lalat, kecoa), air, tanah, dan juga pasir melalui beberapa media diatas dapat juga melalui bagian-bagian dari tubuh kita.
Benda atau bahan yang terkontaminasi oleh tinja seorang yang menderita suatu penyakit tertentu, merupakan penyebab penyakit bagi orang lain. Kurangnya perhatian terhadap pengelolaan tinja dan sampah disertai dengan cepatnya pertumbuhan penduduk, akan mempercepat penyebaran penyakit-penyakit yang ditularkan melalui tinja. Bahan buangan organik dapat membusuk atau terdegradasi oleh mikroorganisme. Bahan buangan yang termasuk kelompok ini sebaiknya tidak dibuang di air lingkungan karena dapat menaikkan populasi mikroorganisme di dalam air. Misalnya feses, kotoran ayam, sisa tumbuhan  dan daun yang berguguran, serta bangkai tikus.
 Feses berasal dari ekskreta manusia ketika penduduk menggunakan WC darurat yang langsung dibuang ke sungai. Kotoran ayam berasal dari perternakan ayam dan bebek yang ada di sekitar pantai. Sisa-sisa tumbuhan berasal dari pengguguran tumbuhan di pinggir pantai. Adanya bangkai tikus karena banyaknya populasi tikus di sekitar rumah penduduk sehingga memotivasi penduduk untuk meracuni tikus dan bangkainya dibuang ke sungai.
Pasir
Indonesia sebagai negara kepulauan yang berjumlah sekitar 17.508 pulau, mempunyai wilayah pantai cukup luas dengan aneka manfaat bagi kehidupan manusia maupun bagi penyangga antara ekosistem darat dan laut. Bentuk lahan wilayah pantai terdiri atas wilayah pantai berlumpur, wilayah pantai berpasir. Pasir merupakan bahan alam yang banyak tersebar di wilayah Indonesia. Pasir di Pulau Jawa dapat ditemui di daerah pesisir selatan dan sebagian di pantai utara. Pasir di Pulau Jawa juga dapat ditemui di sungai-sungai besar dan kecil. Hingga saat ini, pasir hanya digunakan sebagai bahan pendukung pada pembangunan fisik seperti gedung, jembatan, perumahan dan jalan raya.
Lahan pasir pesisir memiliki kohesi dan konsistensi (ketahanan partikel dalam tanah terhadap pemisahan) sangat kecil. Lahan pasir pesisir didominasi oleh pasir dengan kandungan lebih dari 70%, porositas rendah atau kurang dari 40%, sebagian besar ruang pori berukuran besar sehingga aerasinya baik, daya hantar cepat, tetapi kemampuan menyimpan air dan zat hara rendah. Dari segi kimia, tanah pasir cukup mengandung unsur fospor (P) dan kalium (K) yang belum siap diserap tanaman, tetapi lahan pasir kekurangan unsur nitrogen (N), sehingga untuk memperbaiki keadaan tanah seperti ini diperlukan adanya pemupukan (Sunardi dan Sarjono, 2007). Lahan pesisir sesuai dengan ciri-cirinya adalah sebagai tanah pasiran, dimana dapat dikategorikan tanah regosal seperti yang terdapat di sepanjang pantai selatan berupa bukit – bukit pasir terbentuk dari pasir pantai berasal dari abu vulkanik.
',
                'gambar' => '',
            ],
            [
                'id' => 14,
                'id_mapel' => 4,
                'judul_materi' => 'Enterobius Vermicularis' ,
                'detail_materi' => 'Enterobiasis adalah kejadian infeksi kecacingan yang diakibatkan oleh masuknya cacing spesies Enterobius vermicularis pada tubuh manusia yang ditandai dengan timbulnya rasa gatal daerah sekitar anus pada kasus infeksi berat.
1. Klasifikasi
	Phylum 	: Nemathelminthes
	Kelas  	: Nematoda
	Sub kelas 	: Secememtea
	Ordo  	: Oxyurida
	Super famili 	: Oxyuroidae
	Famili  	: Oxyuridae
	Genus  	: Enterobius
	Spesies 	: Enterobius vermicularis
2. Morfologi
1. Telur Enterobius vermicularis
Ukuran telur Enterobius vermicularis yaitu 50-60 mikron x 20-30 mikron (ratarata 55 x 26 mikron). Telur berbentuk asimetris, tidak berwarna, mempunyai dinding yang tembus sinar dan salah satu sisinya datar. Telur ini mempunyai kulit yang terdiri dari dua lapis yaitu: lapisan luar berupa lapisan albuminous, translucent, bersifat mechanical protection. Di dalam telur terdapat bentuk larvanya. Seekor cacing betina memproduksi telur sebanyak 11.000 butir setiap harinya selama 2 sampai 3 minggu, sesudah itu cacing betina akan mati.
2. Cacing Enterobius vermicularis
Cacing dewasa Enterobius vermicularis berukuran kecil, berwarna putih, yang betina jauh lebih besar dari pada yang jantan. Ukuran cacing jantan adalah 2-5 mm, cacing jantan mempunyai sayap dan ekornya melingkar seperti tanda tanya. Sedangkan ukuran cacing betina adalah 8-13 mm x 0,4 mm, cacing betina mempunyai sayap, bulbus esofagus jelas sekali, ekornya panjang dan runcing. Uterus cacing betina berbentuk gravid melebar dan penuh dengan telur. Bentuk khas dari cacing dewasa ini adalah tidak terdapat rongga mulut tetapi dijumpai adanya 3 buah bibir, bentuk esofagus bulbus ganda (double bulb oesophagus), didaerah anterior sekitar leher kutikulum cacing melebar, pelebaran yang khas disebut sayap leher (cervical alae)
2.2.3 Siklus Hidup
Infeksi cacing kremi terjadi bila menelan telur matang. Bila telur matang yang tertelan, telur akan menetas di usus halus selanjutnya larva akan bermigrasi ke daerah sekitar anus (sekum, caecum). Disini larva akan tinggal sampai menjadi dewasa, kemudian cacing dewasa betina akan bermigrasi pada malam hari ke daerah sekitar anus untuk bertelur, telur akan terdeposit disekitar area ini. Hal ini akan menyebabkan rasa gatal di sekitar anus (pruritusani nocturnal). Apabila digaruk maka penularan dapat terjadi dari kuku jari tangan ke mulut (self – infection, infeksi oleh diri sendiri). Infeksi dapat juga terjadi karena menghisap debu yang mengandung telur dan retrofeksi dari anus. Bila sifat infeksinya adalah retroinfeksi dari anus, maka telur akan menetas di sekitar anus, selanjutnya larva akan bermigrasi ke kolon asendens, sekum, atau apendiks dan berkembang sampai dewasa .
2.2.4 Distribusi Geografis
Parasit ini kosmopolit, di Indonesia frekuensinya tinggi, terutama pada anak-anak. Parasit ini banyak ditemukan di daerah dingin dari pada di daerah panas. Hal ini mungkin disebabkan pada umumnya orang di daerah dingin jarang mandi dan mengganti baju dalam. Penyebaran cacing ini juga ditunjang oleh eratnya hubungan antara manusia satu dengan yang lainnya serta lingkungan yang sesuai. Hasil penelitian menunjukkan angka prevalensi pada berbagai golongan manusia 3%-80%. Penelitian di daerah Jakarta Timur melaporkan bahwa kelompok usia terbanyak yang menderita Enterobiasis adalah kelompok usia 5-9 tahun yaitu pada 46 anak (54,1%) dari 85 anak yang diperiksa.
2.2.5 Hospes dan Nama Penyakit
Hospes definitifnya adalah manusia dan dapat menimbulkan penyakit
Enterobiasis atau Oksiuriasis.
2.2.6 Patologi dan Gejala Klinis
Enterobiasis relatif tidak berbahaya, jarang menimbulkan lesi yang berarti. Gejala klinis yang menonjol disebabkan iritasi di sekitar anus, perineum dan vagina oleh cacing betina gravid yang bermigrasi ke daerah anus dan vagina sehingga menyebabkan pruritus lokal. Karena cacing bermigrasi ke daerah anus dan menyebabkan pruritus ani, maka penderita menggaruk daerah sekitar anus sehingga timbul luka garuk di sekitar anus. Keadaan ini sering terjadi pada waktu malam hari hingga penderita terganggu tidurnya dan menjadi lemah. Kadangkadang cacing dewasa muda dapat bergerak ke usus halus bagian proksimal sampai ke lambung, esofagus dan hidung sehingga menyebabkan gangguan daerah tersebut. Cacing betina gravid mengembara dan dapat bersarang di vagina dan dituba fallopi sehingga menyebabkan radang disaluran telur. Cacing sering ditemukan di apendiks tetapi jarang menyebabkan apendisitis. Beberapa gejala infeksi Enterobius vermicularis yaitu kurang nafsu makan, berat badan turun, aktivitas meninggi, enuresis, cepat marah, gigi menggeretak, insomnia dan masturbasi, tetapi kadang-kadang sukar untuk membuktikan hubungan sebab dengan cacing kremi.
2.2.7 Diagnosis
Infeksi cacing dapat diduga pada anak yang menunjukkan rasa gatal disekitar anus pada waktu malam hari. Diagnosa dibuat dengan menemukan telur dan cacing dewasa. Telur cacing dapat diambil dengan mudah dengan alat anal swab yang ditempelkan disekitar anus pada waktu pagi hari sebelum anak buang air besar dan mencuci pantat. Anal swab adalah suatu alat dan batang gelas atau spatel lidah yang pada ujungnya diletakkan scotch adhesive tape. Bila adhesive tape ditempelkan di daerah sekitar anus, telur cacing akan menempel pada perekatnya. Kemudian adhesive tape diratakan pada kaca dan dibubuhi sedikit toluol untuk pemeriksaan mikroskopis.
Sebaiknya pemeriksaan dilakukan tiga hari berturu-turut .

2.2.8 Pemeriksaan Enterobius vermicularis
1. Metode Pemeriksaan Telur Cacing dengan Bahan Tinja
a.	Metode Langsung
Metode pemeriksaan telur cacing ini paling sederhana dan paling mudah dilakukan. Teknik ini dapat dikerjakan menggunakan kaca penutup maupun tanpa kaca penutup. Prinsip dasar pembuatan sediaan dengan cara langsung yaitu, dengan membuat sediaan setipis mungkin yang tidak ada gelembung udara didalamnya. Pemeriksaan cacing ini hanya dapat memberikan hasil secara kualitatif dengan hasil positif atau negatif saja.
b.	Metode Tidak Langsung
Metode tidak langsung disebut juga teknik konsentrasi. Dalam metode ini telur cacing tidak langsung dibuat sediaan tetapi sebelum dibuat sediaan sampel diperlakukan sedemikian rupa sehingga telur diharapkan dapat terkumpul. Teknik konsentrasi merupakan teknik yang sering dikerjakan karena cukup murah dan mudah mengerjakannya. Pada teknik konsentrasi ini dapat dibedakan menjadi beberapa cara, yaitu :
a. Sedimensi/pengendapan
Prinsipnya: dengan adanya gaya centrifuge dapat memisahkan antara suspensi dan supernatan sehingga telur cacing dapat terendap.
a.	Flotasi (pengapungan) dengan larutan NaCl jenuh ( Metode  Wills, 1921) Prinsipnya: Bj telur lebih kecil dari Bj NaCl jenuh sehingga mengakibatkan telur cacing mengapung dan menempel pada kaca penutup.
b.	Teknik Kato (Kato dan Miura,1954)
Prinsipnya: Adanya malachylt green dapat memperjelas telur cacing dengan preparat tebal, telur cacing akan mudah ditemukan.
c.	Teknik Modifikasi Katokatz (Ritchi, 1960)
d.	Teknik AMS (Asid - sodium sulfat – tricone-ether concentration) (Hunter et al,
1948)
e.	Teknik hitung telur (Stall,1923)
f.	Metode Beaver (1950)
2. Metode Pemeriksaan Telur Cacing dengan Anal Swab
Metode pemeriksaan telur cacing ini, merupakan metode yang banyak digunakan pada saat ini. Karena telur mudah ditemukan dengan menghapus daerah sekitar anus. Metode ini biasa disebut dengan teknik anal swab.
Prinsipnya : Ujung batang gelas atau spatel lidah dilekatkan dengan Scoth Adhesive Tape. Dilakukan pengambilan sampel di daerah anus penderita, sehingga didapat telur cacing yang menempel pada kaca benda Metode Anal Swab
1. Teknik Graham scoth
Menurut teknik pengambilan sampel infeksi cacing kremi, telur paling mudah ditemukan dengan menghapus daerah sekitar anus yang biasa
disebut teknik anal swab. Anal swab adalah alat dari batang gelas atau spatel lidah yang pada ujungnya diletakkan scoth adhesive tape.
Teknik Anal Swab (Graham scoth) digunakan untuk memperoleh telur Enterobius vermicularis dari area anal dan perianal dengan perekat adhesive tape yang kuat yang ada pada sisi luar bagian ujung spatel lidah terbuat dari kayu atau batang gelas (Paul C, Beaver, Rodner C Jang,1975). Bila adhesi tape ditempelkan di daerah sekitar anus, telur cacing akan menempel pada perekatnya, kemudian adhesive tape diratakan pada kaca benda dan dibumbuhi sedikit toluol diantara kaca sediaan tape supaya jernih.
Setiap telur berisi embrio yang telah berkembang sempurna akan menjadi infektif dalam beberapa jam setelah diletakkan sediaan pita plastik perekat atau scoth adhesive tape.
Pengambilan sampel berdasarkan prinsip teknik anal swab secara umum adalah bermacam-macam modifikasi dari :
a.	penghapus (swab) N.H.I cellophane
b.	penghapus pita Graham scoth
c.	objek glass
d.	gelas penumbuk yang dibasahi dengan air yang dikocok (pestle)
Macam-macam penghapus lainnya, misalnya penghapus dengan kertas toilet kecuali cellophane, penghapus kain dengan air yang dikocok, penghapus kain yang dibasahi dengan campuran vaseline dan paraffin, dan sikat dari bulu unta pernah digunakan. Modifikasi dari pita penghapus Graham Scoth memberikan hasil yang terbaik dan merupakan cara yang selalu digunakan kecuali untuk penderita yang berambut pada anusnya. (Bagian bawah penumbuk yang kasar dan basah kira-kira sudah cukup dan memberi contoh yang luas pada daerah kulit. Apusan prianal yang diambil dari penderita mempersyaratkan kondisi tertentu sehingga bahan apusan yang diambil layak dan diyakini akan memberikan hasil pemeriksaan laboratorium yang sebenarnya. Bahan apusan perianal yang diambil dari penderita saat pagi hari selepas bangun tidur sebelum mandi, buang air besar dan aktivitas lain yang dapat menghilangkan telur cacing di daerah perianal .
Dalam pemeriksaan, teknik ini dilakukan berulang dalam beberapa hari berturut-turut, karena cacing betina yang hamil bermigrasi tidak teratur. Sekali pemeriksaan dengan “swab” hanya menemukan kira-kira 50 persen dan pemeriksaan pada 7 hari berturut-turut diperlukan untuk menyatakan seorang bebas dari infeksi cacing kremi. Kemudian diagnosa dilakukan dibawah mikroskop pemberasan 100x.
2. “Periplaswab”
Seperti halnya dengan Graham Scoth, “Periplaswab” merupakan modifikasi dari teknik Graham Scoth yang dirancang untuk pemeriksaan infeksi cacing kremi. Prinsip metode ini didasarkan pada teknik pemeriksaan anal swab dengan scoth adhesive tape dan objek glass sebagai bahan utama, dimana pada teknik, persiapan, pengambilan, dan pemeriksaan sampel sama.
Bahan yang digunakan berupa mika dan selotip yang didesain sedemikian rupa dengan cetakan terbuat dari plastik. Cetakan ini dapat digunakan lebih dari satu kali pemeriksaan. Sampel diambil langsung dari probandus dengan cara menempelkan bahan pada perianal sebanyak tiga kali dan kemudian dilakukan pemeriksaan dibawah mikroskop pembesaran 10x.
Berdasarkan pengujiannya, teknik modifikasi ini telah diuji coba secara laboratoris yang diharapkan memiliki keunggulan dari segi efisiensi dan efektivitas dalam pendektesian infeksi cacing kremi. Efisiensi merupakan suatu cara yang tepat guna, daya guna, serta efisien. Artinya sesuatu yang mudah dan tepat untuk dikerjakan, tidak membuang-bungan waktu, tenaga atau pun biaya. Tingkat efisiensi “periplaswab” dapat diukur dari kemampuannya menekan biaya dan waktu pemeriksaan dengan tidak mengesampingkan hasil laboratorium. Efektifitas merupakan suatu keadaan efektif yang mudah dan tepat dalam memberikan hasil. Efektivitas “periplaswab” dapat diukur dari segi ketepatan hasil yang diperoleh dengan cara menemukan jumlah telur persatuan luas (cm2). Selain itu, jumlah telur cacing dapat dihitung dalam satu kali pemeriksaan persatu lapang pandang satuan luas (cm2).
	Jumlah telur cacing 	 =       /cm2.

2.2.9 Pengobatan
Mebendazol, albendazol, dan pyranthel palmoate tidak mematikan telurnya, sehingga setelah dua minggu cacing yang menetas harus diobati. Obat pilihan kedua yaitu piperazin. Seluruh anggota keluarga dalam satu rumah harus meminum obat tersebut karena infeksi ulang bisa menyebar dari satu orang kepada yang lainnya. Untuk mengurangi rasa gatal, bisa dioleskan krim atau salep anti gatal ke daerah sekitar anus sebanyak 2-3 kali/hari. Meskipun telah diobati, sering terjadi infeksi ulang karena telur yang masih hidup didalam tinja selama seminggu setelah pengobatan. Pakaian, seprei dan mainan anak sebaiknya sering dicuci untuk memusnahkan telur cacing yang tersisa.

2.2.10 Epidemiologi
Penyebaran kejadian Enterobiasis lebih luas dari pada cacing lainnya. Penularan dapat terjadi pada keluarga atau kelompok yang sama (asrama, rumah piatu). Telur cacing dapat diisolasi dari debu diruangan sekolah dan menjadi sumber infeksi bagi anak sekolah. Dalam lingkungan rumah tangga dengan beberapa anggota keluarga yang terinfeksi cacing kremi, telur cacing dapat ditemukan (92 %) dilantai, meja, kursi, bufet, tempat duduk, kakus (toilet seats), bak mandi, alas kasur, pakaian dan tilam. Binatang anjing dan kucing tidak mengandung cacing kremi tetapi dapat menjadi sumber infeksi oleh karena telur dapat menempel pada bulunya. Sementara itu frekuensi tinggi, terutama pada anak dan lebih banyak ditemukan pada golongan ekonomi lemah.
Frekuensi pada orang kulit putih lebih tinggi dari pada orang negro terkait dengan faktor immunitas tubuhnya secara genetik.
Kebersihan perorangan penting untuk mencegah terjadinya Enterobiasis. Kuku tangan hendaknya dipotong pendek, tangan dicuci bersih sebelum makan. Guna mengendalikan penyebaran telur, anak yang menderita Enterobiasis sebaiknya memakai celana panjang jika hendak tidur, supaya alas tidur (kasur) tidak terkontaminasi telur cacing dan tangan tidak dapat menggaruk daerah perianal. Makanan hendaknya diupayakan semaksimal mungkin untuk dapat dihindarkan dari debu dan tangan yang mengandung telur. Pakaian dan alas tidur hendaknya dicuci bersih dan diganti tiap hari.
',
                'gambar' => '',
            ],
            [
                'id' => 15,
                'id_mapel' => 4,
                'judul_materi' => 'Taenia Saginata' ,
                'detail_materi' => 'Penyebarannya kosmopolit, juga ditemukan di Indonesia, hospesnya adalah manusia sedangkan hospes perantaranya adalah sapi, penyakit yang disebabkan oleh Taenia saginata disebut Taeniasis saginata. Cara menginfeksinya yakni dengan memakan daging sapi yang mengandung cysticercus bovis yang dimasak kurang matang.
Morfologinya yakni cacing dewasa memiliki Scolex (kepala) bentuknya bulat diameter 1-2 mm, mempunyai 4 buah sucker (alat penghisap), setengah bulat, tidak mempunyai rostellum pada kepala, panjangnya 4-12 m, mempunyai 1000 proglottid, terdiri dari proglottid belum matang di belakang leher, proglottid matang di bagian tengah, dan proglottid gravid disepertiga posterior .
a)	Proglottid gravid
(1).  Ukuran panjang lebih besar daripada lebarnya, besarnya 16x6 mm
(2). Cabang – cabang uterus berjumlah 15-30 pasang dan berisi telur
(3). Tidak mempunyai uterine pore (lubang uterus), genital pore terletak di tepi/ sisi lateral
b)	Telur
1). Berbentuk bulat, berdinding tebal dengan ukuran struktur radiair, diameter 35 mikron
2). Telur berisi heksakan embrio
Telur Taenia saginata dan telur Taenia solium tidak dapat dibedakan . Taeniasis saginata biasanya tidak menimbulkan gejala. Kadang - kadang terdapat gejala usus dan eosinophilia. Penderita biasanya datang ke dokter karena proglottid dapat bergerak aktif keluar anus, Diagnosis dapat ditegakkan dengan menemukan proglottid yang keluar secara aktif melalui anus. Diagnosa genus dengan menemukan telur dalam tinja, sebab telur Taenia saginata tidak dapat dibedakan dengan telur Taenia solium .

Cara untuk mencegah agar tidak menderita gangguan yang disebabkan oleh
Taenia saginata antara lain sebagai berikut :
a)	Tidak memakan makanan mentah (sayuran, daging babi, daging sapi)
b)	Minum air yang sudah dimasak mendidih
c)	Menjaga kebersihan diri, sering menggunting kuku, membiasakan cuci tangan menjelang makan atau sesudah buang air besar.
d)	Tidak boleh buang air kecil/besar di sembarang tempat, tidak menjadikan tinja segar sebagai pupuk, tinja harus dikelola dengan tangki septik agar tidak mencemari sumber air.
e)	Di taman kanak-kanak dan sekolah dasar, harus secara rutin diadakan pemeriksaan parasit, sedini mungkin menemukan anak yang terinfeksi parasit dan mengobatinya dengan obat cacing.
f)	Bila muncul serupa gejala infeksi parasit usus, segera periksa dan berobat ke rumah sakit.
g)	Meski kebanyakan penderita parasit usus ringan tidak ada gejala sama sekali, tetapi mereka tetap bisa menularkannya kepada orang lain, dan telur cacing akan secara sporadic keluar dari tubuh bersama tinja, hanya diperiksa sekali mungkin tidak ketahuan. Maka, sebaiknya secara teratur memeriksa dan mengobatinya .
',
                'gambar' => '',
            ],
            [
                'id' => 16,
                'id_mapel' => 4,
                'judul_materi' => 'Taenia Solium',
                'detail_materi' => 'Penyebaran Taeniasis solium kosmopolit, juga ditemukan di Indonesia terutama di daerah yang penduduknya non - muslim, hospesnya yakni manusia, hospes perantaranya adalah babi, Penyakit yang ditimbulkan yakni Taeniasis solium, Cystecercosis cellulosae, cara menginfeksi yakni dengan memakan daging babi yang 	mengandung 	Cystecercosis cellulose,dimasak kurang matang.
Morfologi cacing dewasa yakni memiliki scolex (kepala) bulat diameter ± 1 mm, dengan 4 buah sucker (alat penghisap), mempunyai rostellum dan hocklets
(kait-kait), panjangnya 2-4 m, terdiri dari 1000 proglottid.
a)	Proglottid Gravid
(1). Ukuran panjang lebih besar daripada lebarnya, 1,5 kali
(2). Cabang – cabang uterus berjumlah 7-12 pasang dan berisi telur-telur.
b)	Cysticercus cellulose
(1). Pada potongan melintang tampak potongan kepala, sucker dan kait-kait
(2). Besarnya 1,5-2 cm, bahan berasal dari otot babi
(3). Bila sudah tua dapat mengalami pengapuran.
Taeniasis solium 	biasanya tanpa gejala, tapi kadang-kadang dapat menimbulkan perasaan tidak enak di perut yang diikuti oleh diare dan sembelit.
Dapat juga menyebabkan nafsu makan berkurang, hingga badan menjadi lemah. Cysticercosis biasanya juga tanpa gejala, kecuali bila mengenai alat-alat penting seperti otak dan jantung. Cysticercosis sering ditemukan sebagai benjolan di bawah kulit dan gejalanya tergantung kondisi, Taeniasis solium dapat ditegakkan dengan pemeriksaan proglottid. Cyticercosis ditegakkan dengan menemukan cysticercus dalam benjolan kulit, dan reaksi immunologi.
      Pencegahan yang dapat dilakukan yakni :
(1). Kehidupan penduduk yang dipengaruhi oleh tradisi kebudayaan dan agama sangat penting.
(2). Cara terbaik untuk mengendalikan cacing pita ini adalah dengan makan daging babi yang dimasak sepenuhnya.
(3). Kebersihan pribadi dan pencegahan terhadap kontaminasi tinja dengan makan daging babi juga memainkan peranan besar dalam pencegahan mendapatkan parasit
Masa inkubasi gejala cystecercosis muncul dalam waktu beberapa hari sampai lebih dari 10 tahun. Telur cacing tampak pada tinja 8-12 hari pasca infeksi untuk Taenia solium dan 10-14 hari pasca infeksi untuk Taenia saginata. Telur Taenia saginata hanya infektif bagi sapi, sedangkan telur Taenia solium infektif bagi babi dan manusia. Telur kedua spesies cacing pita ini tersebar di dalam lingkungan selama di dalam usus masih terdapat cacing yang kadang-kadang bisa hidup sampai 30 tahun lamanya. Telur cacing tersebut dapat bertahan hidup di lingkungan selama berbulan bulan.
',
                'gambar' => '',
            ],
            [
                'id' => 17,
                'id_mapel' => 4,
                'judul_materi' => 'Plasmodium Falciparum' ,
                'detail_materi' => '1. Daur Hidup Plasmodium falciparum
Sebagaimana makhluk hidup lainnya, plasmodium juga melakukan proses kehidupan yang meliputi metabolisme (pertukaran zat), pertumbuhan, pergerakkan, berkembang biak dan mempunyai reaksi terhadap rangsangan. Dalam berkembang biak, Plasmodium sp mempunyai dua cara , yaitu:
a.	Siklus seksual
Pembiakan ini terjadi di dalam tubuh nyamuk melalui proses sporogoni. Bila mikrogametosit (sel jantan) dan makrogametosit (sel betina) terhisap oleh vektor bersama darah penderita, maka proses perkawinan antara kedua sel kelamin itu akan terjadi, dari proses ini akan terbentuk zigot yang kemudian akan berubah menjadi ookinet dan selanjutnya menjadi ookista, terakhir ookista pecah dan membentuk sporozoit yang tinggal dalam kelenjar ludah vektor. Perubahan dari mikrogametosit dan makrogametosit sampai menjadi sporozoit di dalam kelenjar ludah vektor disebut masa tunas ekstrinsik atau siklus sporogoni. Jumlah sporokista pada setiap ookista dan lamanya siklus sporogoni, pada masing-masing spesies plasmodium adalah berbeda. Jumlah sporozoit Plasmodium falciparum adalah 10-12 butir dan siklus sporogoni selama 10 hari.
b.	Siklus aseksual
Pembiakan aseksual terjadi di dalam tubuh manusia melalui proses schizogoni yang terjadi melalui proses pembelahan sel secara ganda. Inti tropozoitdewasa membelah menjadi 2, 4, 8 dan seterusnya sampai batas tertentu tergantung pada spesies plasmodiumnya. Bila pembelahan inti telah selesai, sitoplasma sel induk dibagi-bagi kepada setiap inti dan terjadi sel baru yang disebut merozoit.
Dengan adanya proses-proses pertumbuhan dan pembiakan aseksual di dalam sel darah merah manusia, maka dikenal ada tiga tingkatan (stadium) plasmodium yaitu (1). Stadium tropozoit, plasmodium ada dalam proses pertumbuhan, (2). stadium schizon, plasmodium ada dalam proses pembiakan, (3). stadium gametosit, plasmodium ada dalam proses pembentukan sel kelamin lam proses pembentukan sel kelamin. Karena dalam setiap stadium terjadi proses, maka morfologi parasit juga mengalami perubahan. Dengan demikian, maka dalam stadium itu sendiri terdapat tingkatan umur yaitu tropozoit muda, tropozoit setengah dewasa, tropozoit dewasa, skizon muda, skizon tua, skizon matang, gametosit muda, gametosit tua, dan gametosit matang.
Jumlah merozoit dan schizon yang dihasilkan oleh satu sel sporozoit, tidak sama pada masing-masing spesies plasmodium. Jumlah merozoit Plasmodium falciparum di dalam satu sel skizon dewasa sebanyak 32 dan lama siklusnya 24 jam, artinya reproduksi tinggi dan cepat sehingga kepadatan tropozoit pada darah sangat tinggi.
2.2.2. Perkembangan Plasmodium falciparum pada Nyamuk dan Manusia
Penderita malaria yang digigit oleh nyamuk (vektor), di samping darahnya yang terhisap ke dalam tubuh vektor, juga terbawa plasmodium dari berbagai stadium aseksual yang ada dalam sel darah yaitu stadium tropozoit, stadium skizon, dan stadium gametosit. Stadium tropozoit dan skizon bersama darah dicerna oleh vektor kemudian mati, sedangkan stadium gametosit terus hidup dan masuk ke dalam lambung nyamuk vector, di dalam lambung, inti mikrogametosit membelah menjadi 4 sampai 8 buah yang masing-masing memiliki bentuk panjang seperti benang (flagel) dengan ukuran 20-25 µ, menonjol keluar dari sel induk, bergerak sebentar dan kemudian melepaskan diri. Proses ini (eksflagelasi) hanya berlangsung beberapa menit pada suhu yang optimal.
Flagel atau mikrogametosit kemudian mengalami proses pematangan (maturasi) kemudian mencari makrogametosit untuk melakukan perkawinan. Hasil perkawinan itu disebut zigot. Pada mulanya zigot hanya merupakan bentuk bulat yang tidak bergerak-gerak, tetapi dalam waktu 18-24 jam berubah menjadi bentuk panjang seperti cacing yang dapat bergerak dengan ukuran 8-24 µ yang disebut ookinet. Ookinet kemudian menembus dinding lambung melalui sel epitel ke permukaan luar lambung dan menjadi bentuk bulat yang disebut ookista.
Jumlah ookista pada dinding luar lambung nyamuk vektor berkisar antara beberapa buah sampai beberapa ratus buah. Ookista makin lama makin besar sehingga merupakan bulatan-bulatan semi transparan, berukuran 40-80µ dan mengandung butir-butir pigmen. Bila ookista makin membesar dan intinya membelah-belah, pigmen tak tampak lagi. Inti yang sudah membelah kemudian dikelilingi oleh protoplasma dan merupakan bentuk-bentuk memanjang yang ujungnya runcing dengan inti di tengahnya. Bentuk ini disebut sporozoit dengan ukuran panjang 10-15µ. Ookista kemudian pecah dan ribuan sporozoit keluar dan bergerak dalam rongga badan nyamuk vektor untuk mencapai kelenjar liur (ludah). Nyamuk yang mengandung sporozoit dalam kelenjar ludahnya, kalau menggigit manusia di samping mengeluarkan air ludahnya, sporozoit juga ikut terbawa masuk ke dalam tubuh manusia. Dalam tubuh manusia, sporozoit mengalami perkembangan sebagai berikut:
a.	Schizogoni
Sporozoit plasmodium dalam waktu 1/2-1 jam sudah masuk ke dalam jaringan hati. Sporozoit dari Plasmodium vivax dan Plasmodium ovale sebagian berubah menjadi hypnosoit, sebagian lagi berubah menjadi schizon hati. Sedangkan sporozoit Plasmodium falcifarum dan Plasmodium malariae, semuanya berubah menjadi schizon hati. Hypnosoit plasmodium vivax dan Plasmodium ovale sewaktu-waktu bisa berubah menjadi schizon hati. Karena itu untuk Plasmodium vivax dan Plasmodium ovale dikenal adanya rekurensi yaitu kambuh dalam jangka waktu panjang. Schizon hati mengandung ribuan merozoit yang akan pecah dan keluar dari jaringan hati untuk kemudian masing-masing merozoit ini menginvasi sel darah merah. Fase masuknya sporozoit ke dalam jaringan hati sampai keluar lagi dalam bentuk merozoit, disebut fase schizogoni jaringan hati atau fase praeritrosit. Lamanya fase pra eritrosit dan besarnya schizon hati serta jumlah merozoit pada satu schizon hati, berbeda-beda untuk tiap spesies plasmodium.
b.	Schizogoni eritrosit
Merozoit yang telah masuk ke dalam sel darah merah, kemudian berubah menjadi bentuk tropozoit, yaitu tropozoit muda, tropozoit lanjut, dan tropozoit tua. Tropozoit ini selanjutnya membentuk schizon darah yang mengandung merozoit yaitu bentuk schizon muda, schizon tua, dan schizon matang. Schizon matang mengalami sporulasi yaitu melepaskan merozoit untuk kemudian menginvasi sel darah merah baru, siklus schizogoni eritrosit berulang kembali. Fase masuknya merozoit ke dalam sel darah merah sampai terbentuknya merozoit untuk menginvasi sel darah merah baru, disebut fase schizogoni eritrosit. Lamanya fase eritrosit dan jumlah merozoit dalam schizon hati.
2.2.3. Morfologi Umum Plasmodium falciparum
Setiap siklus hidup plasmodium memiliki beberapa bentuk morfologi yang berbeda-beda pada tiap fasenya. Bentuk trofozoit Plasmodium dibedakan atas trofozoit muda dan trofozoit lanjut. Trofozoit muda yang berbentuk cincin tampak berinti dan sebagian sitoplasma berada dibagian tepi dari satu eritrosit (accole atau form applique) pada  Plasmodium falciparum. Sering dijumpai infeksi lebih dari satu parasit dengan bintik kromatin ganda. Trofozoit lanjut pada spesies tersebut mengadung bintikbintik maurer. Susunan merozoit tampak tidak teratur pada Plasmodium falciparum, dengan skizon berukuran 5 mikron dan mengandung merozoit yang susunannya tidak teraratur. Ukuran eritrosit yang terinfeksi Plasmodium tersebut tidak membesar. Bentuk gametosit khas seperti pisang dengan ukuran panjang gametosit lebih besar dari ukuran diameter eritrosit.
2.2.4. Manifestasi Klinis Malaria Falciparum Tanpa Komplikasi
Perjalanan penyakit malaria terdiri dari serangan demam yang disertai oleh gejala lain diselingi oleh periode tanpa gejala. Gejala khas demamnya adalah perioditasnya. Masa tunas intrinsic malaria adalah waktu antara sporozoit masuk dalam badan manusia sampai timbulnya gejala demam, biasanya berlangsung antara 8-37 hari, tergantung pada spesies parasit (terpendek untuk Plasmodium falciparum, terpanjang untuk Plasmodium malariae). Disamping itu juga tergantung pada cara infeksi, yang mungkin disebabkan oleh tusukan nyamuk atau secara induksi, misalnya melalui transfusi darah yang mengandung stadium aseksual. Masa prepaten berlangsung sejak saat infeksi sampai ditemukan parasit malaria dalam darah untuk pertama kali, karena jumlah parasit telah melewati ambang mikroskopis. Masa tunas intrinsik parasit malaria yang ditularkan oleh nyamuk kepada munusia adalah 12 hari untuk malaria falciparum.
Demam pada infeksi malaria, demam secara periodik berhubungan dengan waktu pecahnya sejumlah skizon matang dan keluarnya merozoit yang masuk dalam aliran darah. Serangan demam malaria biasanya dimulai dengan gejalaprodormal, yaitu lesu, sakit kepala, tidak ada nafsu makan, kadang disertai mual dan muntah, serangan demam yang khas terdiri dari beberapa stadium: a. Periode dingin
Mulai  menggigil,  kulit  dingin  dan kering,  penderita  sering  membungkus  diri dengan  selimut  atau  sarung  dan  pada  saat  menggigil  sering  seluruh  tubuh  bergetar  dan gigi  gemertak,  pucat  sampai  sianosis  seperti orang  kedinginan,  pada  anak  bisa  terjadi kejang.  Periode  ini  berlangsung  15–60 menit  diikuti  dengan  meningkatnya temperatur.


b. Periode panas
Muka  penderita  merah,  kulit  panas dan  kering,  nadi  cepat  dan  panas  badan tetap  tinggi  dapat  sampai  40°  C  atau  lebih. Periode  ini  lebih  lama  dapat  sampai  2  jam atau  lebih,  seiring  dengan  irama  siklus eritrositik  kemudian  diikuti  keadaan berkeringat. c. Periode berkeringat
Penderita  berkeringat  mul ai  dari temporal,  diikuti  seluruh  tubuh,  sampai basah,  temperatur  turun  drastis,  penderita merasa  capek  dan  sering  tertidur  dengan  nyenyak  dan  setelah  bangun  tidak  ada keluhan  kesuali  badan  lemah.  Stadium  ini berlangsung  2- 4 jam, pada  pasien –pasien  yang  tinggal didaerah  endemis  malaria,  gejala  tersebut tidak  khas  oleh  karena  penderita  telah mengalami  semi  imun.  Lebih  sering  dialami pada  malaria  klasik,  yaitu  penderita  yang berasal  dari  daerah  non- endemik  atau  yang baru  pertama  kali   menderita  malaria. Seluruh  rangkaian  Trias  Malaria berlangsung  ±  6- 10  jam.   Beberapa  keadaan  klinik  dalam perjalanan  infeksi  malaria  ialah:
a.	Serangan  primer
 Keadaan  mulai  dari akhir  masa  inkubasi  dan  mulai  terjadi serangan  paroksismal  yang  dapat  pendek atau  panjang  tergantung  dari  multiplikasi parasit  dan  keadaan  immunitas penderita.
b.	Periode  latent
Periode  tanpa  gejala  dan tanpa  parasitemia  selama  terjadinya infeksi  malaria, biasanya  terjadi  diantara dua keadaan paroksismal.
c.	Recrudescense
Berulangnya  gejala klinik  dan  parasitemia  dalam  masa  8 minggu sesudah  berakhirnya  serangan primer  yang  berasal  dari  stadium eritrositer  aseksual  yang  perisisten. Dapat  terjadi  berupa  berulangnya  gejala klinik  sesudah  periode  laten  dari serangan  primer.  Hal  ini  terjadi  pada Plasmodium  falciparum  dan Plasmodium  malariae,  yaitu  spesies yang  tidak  mempunyai  stadium hipnozoit, disebut  juga  short term relapse.
d.	Recurrence
Berulangnya  gejala  klinik atau  parasitemia  setelah  24  minggu berakhirnya  serangan  primer.  Terjadi disebabkan  adanya  merozoit  yang berasal  dari  stadium  hipnozoit  hati  yang aktif  kembali.
2.2.5. 	Manifestasi Klinis Malaria Falciparum Komplikasi
Pada gejala malaria berat ini pada umumnya sama dengan gejala malaria klinis ringan, tetapi diserti dengan salah satu gejala seperti gangguan kesadaran, kejang, mata kuning dan tubuh kuning adanya pendarahan hidung, warna urine seperti teh, kondisi tubuh yang lemah, naapas sesak, gagal ginjal akut, oedem paru akut.
Masa tunas intrinsik malaria falciparum  berlangsung 9-14 hari. Penyakit mulai dengan sakit kepala, punggung dan ekstremitas, perasaan dingin, mual, muntah atau diare ringan. Demam mungkin tidak ada atau ringan dan penderita tidak tampak sakit. Penyakit berlangsug terus, sakit kepala, punggung dan ekstremitas lebuh hebat dan keadaan umum makin memburuk. Pada stadium ini penderita tampak gelisah. Demam tidak teratur dan tidak menunjukkan perioditas yang jelas. Keringat keluar banyak walaupun demamnya tidak tinggi, nadi dan napas menjadi cepat, mual muntah dan diare menjadi lebih hebat kadang disertai batuk oleh karena kelainan pada paru-paru, limpa membesar dan lembek pada perabaan. Hati membesar, ada anemia ringan dan lekopenia dengan monositosis serta trombositopenia.
Malaria falciparum adalah penyakit dengan Plasmodium falciparum stadium aseksual dalam darahnya, disertai salah satu bentuk gejala klinis tersebut adalah malaria otak dengan koma, anemia normositik berat, gagal ginjal, edema paru, hipoglimikemia, syok, pendarahan spontan, kejang umum yang berulang, penderita sangat lemah dan hiperparasitemia.
Malaria otak merupakan penyulit yang menyebabkan kematian tertinggi 80%bila dibandingkan dengan malaria berat lainnya. Gejala klinis dimulai dengan cara lambat atau mendadak setelah geja permulaan. Sakit kepala dan rasa ngantuk disusul dengan gangguan kesadaran, kelainan syaraf dan kejang-kejang yang bersifat menyeluruh. Gejala neurologi yang timbul dapat menyerupai antara lain meningitis, epilepsi, delirium akut, intoksikasi, sangat panas (heat stroke). Pada orang dewasa, koma timbul beberapa hari setelah demam, pada orang dewasa non imun dapat timbul lebih cepat. Pada anak koma timbul kurang dua hari setelah demam yang didahului dengan kejang-kejang dan dilanjutkan dengan penurunan kesadaran yang disebut koma adalah bila dalam waktu kira-kira 30 menit penderita tidak memberikan respon motorik atau verbal. Derajat penurunan kesadaran pada koma dapat diukur dengan Glasglow Coma Scale .
Berikut adalah komplikasi malaria berat : a. Malaria serebral
Malaria serebral adalah malaria falciparum yang disertai kejang-kejang dan koma, tanpa penyebab lain dari koma. Malaria selebral merupakan komplikasi yang paling sering menimbulkan kematian. Penyebabnya adalah sumbatan kapiler pembuluh darah merah yang mengandung parasit malaria sehingga otak kekurangan oksigen (anoksia otak). Gejala dapat timbul secar lambat atau mendadak. Biasanya didahului oleh sakit kepala dan rasa mengantuk, disusul dengan gangguan kesadaran, kelainan saraf dan kejang-kejang. Gangguan penurunan tingkat kesadaran bisa berupa gangguan ringan (seperti apatis, somnolen, delirium dan perubahan tingkah laku) sampai berat (berupa keadaan koma yang tidak bisa dibangunkan). Biasanya, koma pada anak berlangsung 1 hari, sedangkan pada orang dewasa 2-3 hari. b. Gagal ginjal akut
Pada malaria falciparum yang berat, kelainan fungsi ginjal sering terjadi  pada orang dewasa jarang pada anak-anak. Angka kematian pada malaria berat dengan gangguan fungsi ginjal dapat mencapai 45% dibandingkan tanpa kelainan fungsi ginjal yang hanya 10%. Diduga gangguan pada ginjal diakibatkan oleh sumbatan pada kapiler darah ginjal oleh parasit malaria sehingga menyebabkan penurunan aliran darah ke ginjal, akibatnya terjadi penurunan filtrasi pada glomerulus ginjal. Komplikasi gagal ginjal akut dapat menimbulkan asidosis metabolik, hiperurisemia (peningkatan kadar asam urat dalam darah), gagal jantung kongestif, aritmia jantung (gangguan irama jantung) dan perikarditis (peradangan pada perikadium jantung).
c. Demam kencing hitam (black water fever)
Black water fever adalah sindroma dengan gejala serangan akut, berupa demam, menggigil, penurunan tekanan darah, hemolisis (penghancuran sel darah merah) intravaskuler, hemoglobinuria (terdapatnya darah dalam urine) dan gagal ginjal. Namun parasit malaria yang dijumpai dalam darah hanya sedikit. Penderita adalah orang yang tidak kebal malaria, yang terinfeksi Plasmodium falciparum secara berulang-ulang dan pernah mendapat pengobatan dengan kina secara tidak teratur, biasanya penderita mengeluh nyeri pinggang, muntah, diare, gangguan berkemih dan kecing yang berwarna hitam.
d. Anemia berat
Anemia berat timbul karena penghancuran sel darah merah yang cepat dan hebat. Anemia berat lebih sering dijumpai pada penderita anak-anak. Pada 30% kasus malaria dengan anemia diperlukan transfusi darah. Anemia berat sering memberikan gejala serebral, seperti tampak bingung, kesadaran menurun sampaikoma, serta gejala-gejala gangguan jantung paru. Anemia paling berat adalah yang disebabkan oleh Plasmodium falciparum.
e. Gangguan fungsi hati
Pada gangguan fungsi hati akibat infeksi malaria falciparum , timbul ikterus (kuning pada kulit, selaput lendir, mata dan mukosa) akibat peningkatan kadar bilirubin dalam darah. Jika gangguan fungsi hati disertai dengan gangguan organ vital lain seperti gagal ginjal akut maka prognosisnya lebih buruk. Gangguan fungsi hati dapat menyebabkan hipoglikemia, asidosis metabolik dan gangguan metabolisme obat di dalam tubuh.
f. Komplikasi lain
Malaria berat juga dapat menimbulkan komplikasi lainnya seperti edema paru, pendarahan spontan, hiperpireksia (suhu tubuh diatas 41°C) dan sepsis (reaksi inflamasi yang mengenai seluruh tubuh).
',
                'gambar' => '',
            ],
            [
                'id' => 18,
                'id_mapel' => 4,
                'judul_materi' => 'Malaria Vivax' ,
                'detail_materi' => 'Malaria vivax disebabkan oleh Plasmodium vivax. Gejala klinis berupa demam timbul berulang dengan interval bebas demam dua hari. Ditemukan kasus malaria berat yang disebabkan oleh Plasmodium vivax. Sporozoit malaria vivax yang masuk ke sel hati selain menjadi skizon hati juga membentuk hipnozoit. Hipnozoit dalam sel hati tetap beristirahat selama beberapa waktu hingga aktif kembali.
Stadium trofozoit muda Plasmodium vivax cenderung 11 menginfeksi retikulosit (eritrosit muda). Retikulosit yang diinfeksi memiliki ukuran lebih besar dibandingkan dengan eritrosit lain. Berwarna pucat dan terlihat titik halus berwarna merah yang disebut titik Schuffner apabila bentuk dan besarnya sama. Trofozoit terlihat seperti cincin dengan titik kromatin pada satu sisi. Besar trofozoit muda 1/3 dari diameter eritrosit yang diinfeksi. Sitoplasma berwarna biru dan berinti merah terlihat dengan pewarnaan giemsa serta vakuolanya besar. Trofozoit muda tumbuh menjadi trofozoit tua yang sangat aktif dan terlihat bentuk ameboid pada sitoplasmanya. Pigmen parasit menjadi semakin nyata dan berwarna kuning tengguli.
Skizon matang daur eritrosit Plasmodium vivax mengandung 12- 18 buah merozoit. Mengisi seluruh eritrosit dengan pigmen berkumpul di bagian tengah atau di pinggir. Daur eritrosit berlangsung 48 jam dan terjadi secara sinkron. Stadium parasit yang ditemukan di darah tepi tidak hanya stadium skizon, namun semua stadium juga dapat ditemukan.
Sebagian merozoit yang tumbuh menjadi trofozoit akan membentuk sel kelamin (gametosit) setelah daur eritrosit berlangsung beberapa kali. Gametosit Plasmodiun vivax berbentuk bulat atau lonjong, masih tampak titik Schuffner di sekitarnya, dan mengisi hampir seluruh eritrosit. Mikrogametosit berbentuk bulat, sitoplasma pucat, biru kelabu dengan inti besar dan difus. Makrogametosit berwarna biru pada sitoplasmanya, memiliki inti kecil, padat, dan berwarna merah. Makrogametosit maupun mikrogametosit memiliki butir-butir pigmen yang jelas dan tersebar pada sitoplasma.',
                'gambar' => '',
            ],
            [
                'id' => 19,
                'id_mapel' => 4,
                'judul_materi' => 'Trichomonas Vaginalis' ,
                'detail_materi' => 'Etiologi
Trichomonas adalah organisme eukariotik berflagel, termasuk ordo Trichomonadida. Sebagian besar trichomonas adalah organisme komensal yang terdapat pada saluran usus mamalia dan burung. Tiga diantaranya ditemukan pada manusia yaitu T.vaginalis yang merupakan parasit pada saluran kemih dan kelamin, sedangkan dan Pentatrichomonas hominis termasuk trichomonas non patogen yang ditemukan pada rongga mulut dan usus besar. Trichomonas tidak memiliki mitokondria, 28S ribosom, dan kemampuan untuk melakukan glikolisis.T.vaginalis berbentuk oval atau ftsiform dengan panjang rata-rata 15mm (seukuran sebuah leukosit). la akan hidup optimal pada lingkungan lembab dengan suhu 35-370C dan PH 4,9-7,5. Kadar PH menjadi faktor penting dalam pertumbuhan. T.vaginalis. Kadar PH pada vagina yang sudah terinfeksi akan menjadi basa yaim 5,56.
3. Patogenesis
Pada gadis-gadis sebelum usia pubertas, dinding vagina yang sebat tipis dan dan hypoestrogen, dengan PH »4,7. Pemeriksaan dengan pembiakan (kultur) akan menunjukkan beberapa mikroorganisme. Setelah gadis menjadi dewasa, dinding vagina menebal dan laktobasilus menjâdi mikroorganisme yang dominan, PH menurun 44,5. Laktobasilus adalah flora darİ vagina yang dominan (walaupun bukan merupakan satu-satunya flora vagina).
Masa inkubasİ sebelum timbulnya gejala setelah adanya infeksi bervariasi antara 3-28 hari. Selama tedadinya infeksİ, T.vaginalis yang bergerak-gerak (İerky motile trichomonads) dapat dilihat dari pemeriksaan terhadap sediaan basah.
PH vagina naik sebagaimana halnya dengan jumlah leukosit polymorphonuclear(PMN). Leukosit merupakan mekanisme pertahanan utama darİ pejamu(host/manusia), dan mereka merespon terhadap adanya substansi kimiawi yang dikeluarkan trichomonas.
T.vaginalis menginfeksi sel epitel vagİna sehingga terjadİ proses kematian sel pejamu(host-cell death) tersebut adalah mikrofilamen dari T.vaginalis. Selama proses
İnvasİ, T.vaginalis tidak hanya merusak sel epitel namun eritrosit. Eriü•osit mengandung kolesterol esensial dan asam lemak yang diperlukan bagi pembentukan membran trichomonas. Baik sel epitel maupun eritrosit juga merupakan sumber zat besi. Proses pengikatan dan pengenalan trichomonas dengan sel epitel pejamu melibatkan minimal 4 protein permukaan spesifik T.vaginalis, yang dikenal dengan sistein proteinase. Setelah proses pengikatan akan timbul reaksi kaskade yang mengakibatkan sitotoksisitas dan hemolisis pada sel.
4.	Epidemiologi
Data internasional menunjukkan bahwa angka insidensi trikomoniasis sekitar 180 juta per tahun. Sementara angka prevalensinya bervariasi dari 5,00% pada klien klinik KB sampai 75,00% pada pekerja seks. Sementara di Arnerika Serikat angka insidensi trikomoniasis sekitar 2-3juta per tahun.
Data di Indonesia menunjukkan bahwa angka kejadian trikomoniasis sebanyak 13,00% dari berbagai macam PMS .
5.	Mortalitas/Morbiditas
a.	Trikomoniasis memiliki angka infeksi gabungan yang cukup tinggudengan PMS Iain. Sebuah penelitian yang dilakukan Oleh Wolner-Hanssen dkk menemukan gonore berhubungan secara signifikan dengan infeksi trikomonas. Trikomoniasis juga memfasilitasi penularan HIV-AIDS.
b.	Pada perempuan gejala adanya infeksi trikomoniasis dapat bervariasi dari tidak ada gejala (asimptomatik) sampai adanya tanda radang seperti gatal-gatal pada vagina dan adanya duh tubuh vagina (vaginal discharge).
c.	Pada perempuan hamil, trikomoniasis yang tidak diobatİ berhubungan dengan ketuban pecah dini, bayi berat badan lahir rendah dan selulitis pasca histerektomi.
6.	Gejaıa
 gejala klinis trikomonİasİs pada perempuan adalah sebagai berikut:
a.	Rasa gatal-gatal atau rasa panas pada vagina. Kemungkinan juga ada keputihan yang berbau tidak normal (busuk).
b.	Rasa sakit sewaktu berhubungan seksual mungkİn juga merupakan keluhan utama yang dirasakan penderita trikomoniasis.
c.	Keputihan abnormal yang purulen, berbusa atau berdarah kemungkinan terjadi juga. Keputİhan yang berbusa dianggap sebagaİ tanda klasik dari trikomoniasis hanya terjadi pada penderita yang mengalamİ infeksi ini.
d.	Penderİta trikomoniasis dapat juga mengalami perdarahan pasa sanggama dan nyeri perut bagian bawah.
e.	Pada pemeriksaan panggul dengan spekulum, tanda-tanda trikomoniasis diantaranya colpitis macularis (disebut sebagai strawbeny cervix), keputihan yang purulen yang dapat berwama putih krem, kuning, hijau atau abu-abu, keputihan yang berbusa, eritema vagİna dan vulva. Colpitis macularis dan keputİhan yang berbusa sama-sama memiliki spesifisitas dan secara sendiri-sendiri memiliki nilai prediksi positif (positivepredictive value) dan 62,00%.
f.	Sebagian besar dari gejala-gejala yang disebutkan diatas tidak spesifik untuk infeksi trikomoniasis dan dapat terjadi pada berbagai infeksi vagina dan serviks yang Iain. Sehingga jika hanya bergantung pada pemeriksaan fisik saja banyak penderita trikomoniasis akan tidak terdiagnosis. Diagnosis pasti trikomoniasis ditegakkan dengan adanya protozoa berflagel yang terlihat dari pemeriksaan sediaan basah, Pap smear atau media kultur.

',
                'gambar' => '',
            ],
            [
                'id' => 20,
                'id_mapel' => 5,
                'judul_materi' => 'Respon Imun' ,
                'detail_materi' => 'Sistem imun merupakan sistem yang sangat komplek dengan berbagai peran ganda dalam usaha menjaga keseimbangan tubuh. Seperti halnya sistem indokrin, sistem imun yang bertugas mengatur keseimbangan, menggunakan komponennya yang beredar diseluruh tubuh, supaya dapat mencapai sasaran yang jauh dari pusat. Untuk melaksanakan fungsi imunitas, didalam tubuh terdapat suatu sistem yang disebut dengan sistem limforetikuler. Sistem ini merupakan jaringan atau kumpulan sel yang letaknya tersebar diseluruh tubuh, misalnya didalam sumsum tulang, kelenjar limfe, limfa, timus, sistem saluran napas, saluran cerna dan beberapa organ lainnya. Jaringan ini terdiri atas bermacam-macam sel yang dapat menunjukkan respons terhadap suatu rangsangan sesuai dengan sifat dan fungsinya masing-masing.
 Dengan kemajuan imunologi yang telah dicapai sekarang ini, maka konsep imunitas dapat diartikan sebagai suatu mekanisme yang bersifat faali yang melengkapi manusia dan binatang dengan suatu kemampuan untuk mengenal suatu zat sebagai asing terhadap dirinya, yang selanjutnya tubuh akan mengadakan tindakan dalam bentuk netralisasi, melenyapkan atau memasukkan dalam proses metabolisme yang dapat menguntungkan dirinya atau menimbulkan kerusakan jaringan tubuh sendiri.  Konsep imunitas tersebut, bahwa yang pertama-tama menentukan ada tidaknya tindakan oleh tubuh (respons imun), adalah kemampuan sistem limforetikuler untuk mengenali bahan itu asing atau tidak.
 Rangsangan terhadap sel-sel tersebut terjadi apabila kedalam tubuh terpapar suatu zat yang oleh sel atau jaringan tadi dianggap asing. Konfigurasi asing ini dinamakan antigen atau imunogen dan proses serta fenomena yang menyertainya disebut dengan respons imun yang menghasilkan suatu zat yang disebut dengan antibodi. Jadi antigen atau imunogen merupakan potensi dari zat-zat yang dapat menginduksi respons imun tubuh yang dapat diamati baik secara seluler ataupun humoral. Dalam keadaan tertentu  (patologik), sistem imun tidak dapat membedakan zat asing (non-self) dari zat yang berasal dari tubuhnya sendiri (self), sehingga sel-sel dalam sistem imun membentuk zat anti terhadap jaringan tubuhnya sendiri. Kejadian ini disebut dengan Autoantibodi.
 Bila sistem imun terpapar oleh zat yang dianggap asing, maka akan terjadi dua jenis respons imun, yaitu respons imun non spesifik dan respons imun spesifik. Walaupun kedua respons imun ini prosesnya berbeda, namun telah dibuktikan bahwa kedua jenis respons imun diatas saling meningkatkan efektivitasnya. Respons imun yang terjadi sebenarnya merupakan interaksi antara satu komponen dengan komponen lain yang terdapat didalam system imun. Interaksi tersebut berlangsung bersama-sama sedemikian rupa sehingga menghasilkan suatu aktivitas biologic yang seirama dan serasi.


1. 2 Respons Imun Nonspesifik
 Umumnya merupakan imunitas bawaan (innate immunity), dalam artian bahwa respons terhadap zat asing dapat terjadi walaupun tubuh sebelumnya tidak pernah terpapar oleh zat tersebut. Sebagai contoh dapat dijelaskan sebagai berikut : salah satu upaya tubuh untuk mempertahankan diri terhadap masuknya antigen misalnya, bakteri, adalah dengan cara menghancurkan bakteri tersebut dengan cara nonspesifik melalui proses fagositosis. Dalam hal ini makrofag, neutrofil dan monosit memegang peranan yang sangat penting. Supaya dapat terjadi fagositosis, sel-sel fagositosis tersebut harus berada dalam jarak yang dekat dengan partikel bakteri, atau lebih tepat lagi bahwa partikel tersebut harus melekat pada permukaan fagosit. Untuk mencapai hal ini maka fagosit harus bergerak menuju sasaran. Hal ini dapat terjadi karena dilepaskannya zat atau mediator tertentu yang disebut dengan factor leukotaktik atau kemotaktik yang berasal dari bakteri maupun yang dilepaskan oleh neutrofil, makrofag atau komplemen yang telah berada dilokasi bakteri.  Selain factor kemotaktik yang berfungsi untuk menarik fagosit menuju antigen sasaran, untuk proses  fagositosis selanjutnya, bakteri perlu mengalami opsonisasi terlebih dahulu. Ini berarti bahwa bakteri terlebih dahulu dilapisi oleh immunoglobulin atau komplemen (C3b), supaya lebih mudah ditangkap oleh fagosit. Selanjutnya partikel bakteri masuk kedalam sel dengan cara endositosis dan oleh proses pembentukan fagosum, ia terperangkap dalam kantong fagosum, seolah-olah ditelan dan kemudian dihancurkan baik dengan proses oksidasi-reduksi maupun oleh derajat keasaman yang ada dalam fagosit atau penghancuran oleh lisozim dan gangguan metabolisme bakteri.
 	Selain fagositosis diatas, manifestasi lain dari respons imun
nonspesifik adalah reaksi inflamasi. Reaksi ini terjadi akibat dilepaskannya mediator-mediator tertentu oleh beberapa jenis sel, misalnya histamine yang dilepaskan oleh basofil dan mastosit, Vasoactive amine yang dilepaskan oleh trombosit, serta anafilatoksin  yang berasal dari komponen – komponen komplemen, sebagai reaksi umpan balik dari mastosit dan basofil. Mediatormediator ini akan merangsang bergeraknya sel-sel polymorfonuklear (PMN) menuju lokasi masuknya antigen serta meningkatkan permiabilitas dinding vaskuler yang mengakibatkan eksudasi protein plasma dan cairan. Gejala inilah yang disebut dengan respons inflamasi akut.
1.3 Respon Imun Spesifik
 Merupakan respon imun yang didapat (acquired), yang timbul akibat dari rangsangan antigen tertentu, sebagai akibat tubuh pernah terpapar  sebelumnya. Respons imun spesifik dimulai dengan adanya aktifitas makrofag atau antigen precenting cell (APC) yang memproses antigen sedemikian rupa sehingga dapat menimbulkan interaksi dengan sel-sel imun. Dengan rangsangan antigen yang telah diproses tadi, sel-sel system imun berploriferasi dan berdiferensiasi sehingga menjadi sel yang memiliki kompetensi imunologik dan mampu bereaksi dengan antigen.
Walaupun antigen pada kontak pertama (respons primer) dapat dimusnahkan dan kemudian sel-sel system imun mengadakan involusi, namun respons imun primer tersebut sempat mengakibatkan terbentuknya klon atau kelompok sel yang disebut dengan memory cells yang dapat mengenali antigen bersangkutan. Apabila dikemudian hari antigen yang sama masuk kedalam tubuh, maka klon tersebut akan berproliferasi dan menimbulkan respons sekunder spesifik yang berlangsung lebih cepat dan lebih intensif dibandingkan dengan respons imun primer. Mekanisme efektor dalam respons imun spesifik dapat dibedakan menjadi :

1.3.1 Respons imun seluler
Telah banyak diketahui bahwa mikroorganisme yang hidup dan berkembang biak secara intra seluler, antara lain didalam makrofag sehingga sulit untuk dijangkau oleh antibody. Untuk melawan mikroorganisme intraseluler tersebut diperlukan respons imun seluler, yang diperankan oleh limfosit T. Subpopulasi sel T yang disebut dengan sel T penolong (T-helper) akan mengenali mikroorganisme atau antigen bersangkutan melalui major histocompatibility complex (MHC) kelas II yang terdapat pada permukaan sel makrofag. Sinyal ini menyulut limfosit untuk memproduksi berbagai jenis limfokin, termasuk diantaranya interferon, yang dapat membantu makrofag untuk menghancurkan mikroorganisme tersebut. Sub populasi limfosit T lain yang disebut dengan sel T-sitotoksik (T-cytotoxic), juga berfungsi untuk menghancurkan mikroorganisme intraseluler yang disajikan melalui MHC kelas I secara langsung (cell to cell). Selain menghancurkan mikroorganisme secara langsung, sel T-sitotoksik, juga menghasilkan gamma interferon yang mencegah penyebaran mikroorganisme kedalam
sel lainnya.

1.3.2 Respons Imun Humoral
Respons imun humoral, diawali dengan deferensiasi limfosit B menjadi satu populasi (klon) sel plasma yang melepaskan antibody spesifik ke dalam darah. Pada respons imun humoral juga berlaku respons imun primer yang membentuk klon sel B memory. Setiap klon limfosit diprogramkan untuk membentuk satu jenis antibody spesifik terhadap antigen tertentu (Clonal slection). Antibodi ini akan berikatan dengan antigen membentuk kompleks antigen – antibodi yang dapat mengaktivasi komplemen dan mengakibatkan hancurnya antigen tersebut. Supaya limfosit B berdiferensiasi dan membentuk antibody diperlukan bantuan limfosit T-penolong (T-helper), yang atas sinyal-sinyal tertentu baik melalui MHC maupun sinyal yang dilepaskan oleh makrofag, merangsang produksi antibody. Selain oleh sel T- penolong, produksi antibody juga diatur oleh sel T penekan (T-supresor), sehingga produksi antibody seimbang dan sesuai dengan yang dibutuhkan.

1.3.3 Interaksi Antara Respons Imun Seluler dengan Humoral
Interaksi ini disebut dengan antibody dependent cell mediated cytotoxicity (ADCC), karena sitolisis baru terjadi bila dibantu oleh antibodi. Dalam hal ini antibodi berfunsi melapisi antigen sasaran, sehingga sel natural killer (NK),  yang mempunyai reseptor terhadap fragmen Fc antibodi, dapat melekat erat pada sel atau antigen sasaran. Perlekatan sel NK pada kompleks antigen antibody tersebut mengakibatkan sel NK dapat menghancurkan sel sasaran.

 Respons imun spesifik (adaptif) dapat dibedakan dari respons imun bawaan, karena adanya cirri-ciri umum yang dimilikinya yaitu;  bersifat spesifik, heterogen dan memiliki daya ingat atau memory. Adanya sifat spesifik akan membutuhkan berbagai populasi sel atau zat yang dihasilkan (antibodi) yang berbeda satu sama lain, sehingga menimbulkan sifat heterogenitas tadi. Kemampuan mengingat, akan menghasilkan kualitas respons imun yang sama terhadap konfigurasi yang sama pada pemaparan berikutnya.

1.4 Komponen Sistem Imun
 	Sistem imun dilengkapi dengan kemampuan untuk memberikan
respons imun non spesifik, misalnya fagositosis, maupun kemampuan untuk memberikan respons imun spesifik yang dilakukan oleh sel-sel dan jaringan limfoid yang tergolong kedalam system limforetikuler. Sistem ini terdiri atas sejumlah organ limfoid yaitu :
1.	kelenjar timus
2.	kelenjar limfe
3.	limfa
4.	tonsil
5.	berbagai jenis sel serta jaringan diluar organ limfoid, seperti :
a.	peyer,s patches yang terdapat pada dinding usus
b.	jaringan limfoid yang membatasi saluran nafas dan saluran urogenital
c.	jaringan limfoid dalam sumsum tulang dan dalam darah

Sistem limforetikuler inilah yang merupakan system kendali dari semua mekanisme respons imun. Disamping system limforetikuler diatas, masih ada unsur-unsur lain yang berperan dalam mekanisme respons imun, dan factorfaktor humoral lain diluar antibody yang berfungsi menunjang mekanisme
tersebut.

1.5 Fungsi Respons Imun
 	Dalam pandangan modern, system imun mempunyai tiga fungsi utama yaitu: pertahanan, homeostasis dan perondaan.
1. Pertahanan
Fungsi pertahanan menyangkut pertahanan terhadap antigen dari luar tubuh seperti invasi mikroorganisme dan parasit kedalam tubuh. Ada dua kemungkinan yang terjadi dari hasil perlawanan antara dua fihak yang berhadapan tersebut, yaitu tubuh dapat bebas dari akibat yang merugikan atau sebaliknya, apabila fihak penyerang yang lebih kuat (mendapat kemenangan), maka tubuh akan menderita sakit.
2. Homeostasis
Fungsi homeostasis, memenuhi persyaratan umum dari semua organisma multiseluler yang menghendaki selalu terjadinya bentuk uniform dari setiap jenis sel tubuh. Dalam usaha memperoleh keseimbangan tersebut, terjadilah proses degradasi dan katabolisme yang bersifat normal agar unsure seluler yang telah rusak dapat dibersihkan dari tubuh. Sebagai contoh misalnya dalam proses pembersihan eritrosit dan leukosit yang telah habis masa hidupnya.

3.  Perondaan
Fungsi perondaan menyangkut perondaan diseluruh bagian tubuh terutama ditujukan untuk memantau pengenalan terhadap sel-sel yang berubah menjadi abnormal melalui proses mutasi. Perubahan sel tersebut dapat terjadi spontan atau dapat diinduksi oleh zat-zat kimia tertentu, radiasi atau infeksi virus. Fungsi perondaan (surveillance) dari sistem imun bertugas untuk selalu waspada dan mengenal adanya perubahabperubahan dan selanjutnya secara cepat membuang konfigurasi yang baru timbul pada permukaan sel yang abnormal.

1.6 Penyimpangan Sistem Imun
 Sebagaimana sistem-sistem yang lain dalam tubuh, sistem imun mungkin pula dapat mengalami penyimpangan pada seluruh jaringan komunikasi baik berbentuk morfologis ataupun gangguan fungsional. Gangguan morfologis, misalnya tidak berkembangnya secara normal kelenjar timus sehingga mengakibatkan defisiensi pada limfosit T. Sedangkan gangguan fungsional yang bermanifestasi sebagai toleransi imunologik disebabkan karena lumpuhnya mekanisme respons imun terhadap suatu antigen tertentu. Penyimpangan lain dalam mekanisme respons imun dapat berbentuk sebagai reaksi alergi, anafilaksis ataupun hipersensitifitas tipe lambat, dimana semua ini kadang-kadang menimbulkan kerugian pada jaringan tubuh. Keadaan ini disebabkan karena gangguan fungsi pertahanan system imun.
 Gangguan fungsi homeostatik pada system imun dapat menimbulkan kelainan yang dinamakan penyakit autoimun. Hal ini disebabkan oleh karena system imun melihat konfigurasi dari tubuh sendiri (self), sebagai benda asing, akibatnya respons imun ditujukan kepada jaringan tubuh sendiri sehingga dapat membawa kerugian.
 Apabila fungsi ketiga yang bertugas sebagai surveillance mengalami gangguan, akan mengakibatkan tidak bekerjanya system pemantauan terhadap perubahan-perubahan pada sel tubuh, sehingga akhirnya sel-sel abnormal tersebut berkembang biak diluar kendali yang menimbulkan penyakit yang bersifat pertumbuhan ganas.

1.7 Faktor Pengubah Mekanisme Imun
 	Selain faktor genetik, terdapat sejumlah factor yang dapat
mempengaruhi mekanisme imun seperti: faktor metabolik, lingkungan, gizi, anatomi, fisiologi, umur dan mikroba.

Faktor Metabolik
 Beberapa hormon dapat mempengaruhi respons imun tubuh, misalnya pada keadaan hipoadrenal dan hipotiroidisme akan mengakibatkan menurunnya daya tahan terhadap infeksi. Demikian juga pada orang-orang yang mendapat pengobatan dengan sediaan steroid sangat mudah mendapat infeksi bakteri maupun virus. Steroid akan menghambat fagositosis, produksi antibodi dan menghambat proses radang. Hormon kelamin yang termasuk kedalam golongan hormone steroid, seperti androgen, estrogen dan progesterone diduga sebagai faktor  pengubah terhadap respons imun. Hal ini tercermin dari adanya perbedaan jumlah penderita antara laki-laki dan perempuan yang mengidap penyakit imun tertentu.

Faktor lingkungan
 Kenaikan angka kesakitan penyakit infeksi, sering terjadi pada masyarakat yang taraf hidupnya kurang mampu. Kenaikan angka infeksi tersebut, mungkin disebabkan oleh karena lebih banyak menghadapi bibit penyakit atau hilangnya daya tahan tubuh yang disebabkan oleh jeleknya keadaan gizi.

Faktor Gizi
 Keadaan gizi seseorang sangat berpengaruh terhadap status imun seseorang. Tubuh membutuhkan enam komponen dasar bahan makanan yang dimanfaatkan untuk pertumbuhan dan pemeliharaan kesehatan tubuh. Keenam komponen tersebut yaitu : protein, karbohidrat, lemak, vitamin, mineral dan air. Gizi yang cukup dan sesuai sangat penting untuk berfungsinya system imun secara normal. Kekurangan gizi merupakan penyebab utama timbulnya imunodefisiensi.
Faktor Anatomi
 Garis pertahanan pertama dalam menghadapi invasi mikroba biasanya terdapat pada kulit dan selaput lender yang melapisi bagian permukaan dalam tubuh. Struktur jaringan tersebut, bertindak sebagai imunitas alamiah dengan menyediakan suatu rintangan fisik yang efektif. Dalam hal ini kulit lebih efektif dari pada selaput lender. Adanya kerusakan pada permukaan kulit, atau pada selaput lender, akan lebih memudahkan timbulnya suatu penyakit.

Faktor Fisiologis
 Getah lambung pada umumnya menyebabkan suatu lingkungan yang kurang menguntungkan untuk sebagian besar bakteri pathogen. Demikian pula dengan air kemih yang normal akan membilas saluran kemih sehingga menurunkan kemungkinan infeksi oleh bakteri. Pada kulit juga dihasilkan zatzat yang bersifat bakterisida. Didalam darah terdapat sejumlah zat protektif yang bereaksi secara non spesifik. Faktor humoral lainnya adalah properdin dan interferon yang selalu siap untuk menanggulangi masuknya zat-zat asing.

Faktor Umur
 Berhubung dengan perkembangan sistem imun sudah dimulai semasa dalam kandungan, maka efektifitasnya juga diawali dari keadaan yang lemah dan meningkat sesuai dengan bertambahnya umur. Walaupun demikian tidak berarti bahwa pada umur lanjut, sistem imun akan bekerja secara maksimal.
Malah sebaliknya fungsi sistem imun pada usia lanjut akan mulai menurun dibandingkan dengan orang yang lebih muda, walaupun tidak mengalami gangguan pada sistem imunnya. Hal tersebut, selain disebabkan karena pengaruh kemunduran biologik, secara umum juga jelas berkaitan dengan menyusutnya kelenjar timus. Keadaan tersebut akan mengakibatkan perubahan-perubahan respons imun seluler dan humoral. Pada usia lanjut resiko akan timbulnya berbagai kelainan yang melibatkan sistem imun akan bertambah, misalnya resiko menderita penyakit autoimun, penyakit keganasan, sehinggaakan mempermudah terinfeksi oleh suatu penyakit.

Faktor Mikroba
 Berkembangnya koloni mikroba yang tidak pathogen pada permukaan tubuh,baik diluar maupun didalam tubuh, akan mempengaruhi sistem imun. Misalnya dibutuhkan untuk membantu produksi natural antibody. Flora normal yang tumbuh pada tubuh dapat pula membantu menghambat pertumbuhan kuman pathogen. Pengobatan dengan antibiotika tanpa prosedur yang benar, dapat mematikan pertumbuhan flora normal, dan sebaliknya dapat menyuburkan pertumbuhan bakteri pathogen.
',
                'gambar' => '',
            ],
            [
                'id' => 21,
                'id_mapel' => 5,
                'judul_materi' => 'Komponen Reaksi Imunologik' ,
                'detail_materi' => 'System imun dilengkapi dengan kemampuan untuk memberikan
respons imun nonspesifik, misalnya fagositosis, maupun kemampuan untuk memberikan respons imun spesifik yang dilakukan oleh sel-sel dan jaringan limfoid yang tergolong kedalam system limforetikuler. Disamping system imun diatas, masih terdapat unsur-unsur lain yang berperan dalam mekanisme respons imun, misalnya antigen yang dapat menyulut timbulnya respons imun serta factor-faktor humoral lain diluar antibody yang berfungsi menunjang mekanisme tersebut.

2. 1 ANTIGEN DAN IMUNOGEN
 Antigen adalah suatu substansi atau potensi dari suatu zat yang mampu merangsang timbulnya respons imun yang dapat dideteksi, baik berupa respons imun seluler, maupun respons imun humoral atau respons imun kedua-duanya. Karena sifatnya itu, maka antigen disebut juga imunogen. Imunogen yang paling poten umumnya merupakan
makromolekuler protein, polisakharida atau polimer sintetik yang lain seperti polivinilpirolidon (PVP).  Imunogenisitas atau kemampuan dari imunogen untuk merangsang terbentuknya antibody bergantung dari antigennya sendiri, cara masuknya, individu yang menerima antigen tersebut, dan kepekaan dari metode yang digunakan untuk mendeteksi respons imunnya. Faktor-faktor yang mempengaruhi imunogenisitas dari suatu molekul atau substansi sangat kompleks dan tidak dapat dipahami secara gamblang, akan tetapi beberapa kondisi tertentu telah diketahui perannya dalam menimbulkan sifatnya imunogenisitas tersebut
seperti :

1. Keasingan
Sistem imun yang normal dapat membedakan antara diri (self) dan asing (non self), maka untuk menjadi imunogenik substansi tersebut harus bersifat asing. Misalnya, albumin yang dimurnikan dari serum kelinci kemudian disuntikkan kepada kelinci lain yang sama galurnya, maka tidak akan menimbulkan respons imun, akan tetapi apabila albumin tersebut disuntikkan kapada binatang lain atau kepada manusia, maka akan menimbulkan respons imun yang nyata. Ini menunjukan albumin kelinci dianggap asing oleh hewan yang lain.

2.  Ukuran Molekul
Molekul substansi harus berukuran cukup besar, walaupun belum diketahui secara pasti batas ukuran molekul  yang menentukan imunogenitas. Molekul-molekul kecil seperti asam amino atau monoskharida umumnya kurang atau tidak imunogenik.  Substansi yang mempunyai berat molekul kurang dari 10.000 bersifat imunogenik lemah bahkan sama sekali tidak imunogenik. Sedangkan substansi yang memiliki berat molekul lebih dari 100.000 (umumnya makromolekul), merupakan imunogen yang sangat poten.


3.  Kerumitan struktur kimiawi
      Susunan molekul harus kompleks. Semakin kompleks susunan molekulnya maka semakin tinggi imunogenitas substansi bersangkutan. Azas ini dapat dilukiskan secara jelas pada percobaan-percobaan dengan menggunakan polipeptida buatan. Suatu molekul homopolimer yang terdiri atas unit-unit yang tersusun oleh satu jenis asam amino, walaupun merupakan molekul berukuran besar, tapi bersifat sebagai imunogen yang lemah. Misalnya; polialanin, polilisin dan yang lainnya. Sedangkan molekul kopolimer yang tersusun atas dua atau tiga jenis asam amino merupakan imunogen yang sangat potensial. Adanya gugus asam amino aromatik (tirosin) akan memberikan sifat lebih imunogenik dari pada gugus non-aromatik. Hal ini dapat dibuktikan dengan penambahan molekul tirosin pada gelatin, sehingga dapat meningkatkan imunogenisitasnya. Untuk menentukan batas yang jelas struktur molekul yang bagaimana yang imunogenik tidaklah mudah. Kita hanya dapat menyatakan bahwa makin rumit atau makin kompleks struktur molekulnya maka semakin imunogenik zat tersebut.

4. Konstutusi genetik
 	Kemampuan untuk mengadakan respons imun terhadap antigen
bergantung terhadap susunan genetic dari suatu individu. Telah diketahui bahwa polisakharida yang murni akan bersifat imunogenik apabila disuntikkan pada mencit atau manusia, namun imunogenitasnya akan hilang apabila disuntikkan pada marmot. Ketergantungan akan konstitusi genetic terlihat pada percobaan dengan menggunakan marmot yang berbeda galurnya, yaitu apabila galur dua disuntik dengan polylisin akan membangkitkan respons imun, akan tetapi jika disuntikkan pada galur 13 tidak menimbulkan respons imun. Ternyata kemampuan untuk mengadakan respons imun pada marmot galur dua diatur oleh gene yang memiliki otosom dan diwariskan secara dominant.

5.  Metode pemasukan antigen
     Cara masuk antigen kedalam tubuh, akan menentukan respons imun yang ditimbulkan. Ada kalanya sejumlah antigen yang dimasukkan secara intravena tidak menimbulkan respons imun, dibandingkan dengan antigen sama yang dimasukkan secara subkutan. Pada umumnya cara pemasukan antigen kedalam tubuh dapat langsung melalui kulit, melalui pernapasan, melalui saluran pencernaan, atau disuntikkan melalui subkutan, intraperitonial, intravenosa dan intramuskuler.

6.  Dosis
     Besarnya dosis, juga dapat menentukan respons imun. Apabila dosis minimal suatu antigen telah dilampaui, maka makin tinggi dosisnya, respons imunnya akan meningkat secara sebanding. Akan tetapi pada dosis tertentu akan terjadi sebaliknya yaitu menurunnya respons imun atau bahkan dapat menghilangkan respons imun. Keadaan ini disebut dengan toleransi imunogenik.

Walaupun imunogen umumnya merupakan makromolekul, tetapi hanya bagian-bagian tertentu saja dari molekulnya yang dapat berikatan dengan antigen binding site antibodi. Daerah tersebut disamping menentukan spesifisitas reaksi antigen- antibody juga sebagai penentu timbulnya respon imun. Daerah molekul itu disebut dengan determinan antigen atau epitop. Jumlah epitop dari sebuah molekul antigen tergantung pada ukuran dan kerumitan struktur molekulnya. Dengan menentukan jumlah spesifisitas antibody yang bersenyawa dengan setiap molekul antigen, orang dapat mengira-ngira jumlah epitop dari antigen yang bersangkutan. Dengan cara pendekatan ini, dapat diperkirakan bahwa albumin telur yang berat molekulnya 42.000 memiliki lima epitop pada setiap molekulnya, sedangkan thyroglobulin yang berat molekulnya 700.000, memiliki sekitar 40 buah epitop pada setiap molekulnya (Antezak dan Gorman 1989; Abbas, 1991;
Subowo, 1993).

2.2  Jenis Imunogen
a. Protein
Protein merupakan sebuah antigen atau imunogen, apabila disuntikkan kepada spesies yang bukan merupakan sumber protein tersebut. Apabila imunogen tersebut merupakan imunogen yang dihasilkan oleh hewan berdasarkan alele yang dimiliki oleh spesies bersangkutan, maka antigen tersebut dinamakan alloantigen. Beberapa contoh dari alloantigen adalah : antigen golongan darah yang terdapat pada permukaan eritrosit, antigen system HLA yang terdapat pada permukaan leukosit, dan epitop yang terdapat pada molekul immunoglobulin disebut dengan alotipe.

b. Polisakharida
	Polisakharida 	dalam 	bentuk 	murni 	umumnya 	hanya 	dapat
menimbulkan respons imun pada spsies tertentu saja. Kelinci dan marmot yang mempunyai respons imun sangat baik bila disuntik dengan protein, tidak akan menimbulkan respons imun sama sekali apabila hewan tersebut disuntik dengan polisakharida murni. Sebaliknya mencit dan manusia sangat baik responnya terhadap polisakharida, sehingga sangat diperlukan dalam penelitian imunokimiawi. Antigen polisakharida sederhana adalah dextran dan levan. Dextran merupakan polimer yang hanya terdiri atas`glukosa, sedangkan levan tersusun dari fructose. Jenis lain dari antigen polisakharida, yaitu yang terdapat sebagai kapsel pnemokokus yang sangat penting sebagai bahan vaksin terhadap mikroorganisme tersebut. Glikoprotein dan glikopeptida merupakan protein yang mengandung karbohidrat yang dalam keadaan tertentu spesifisitasnya ditentukan oleh gugus karbohidratnya. Contoh jenis ini adalah antigen golongan darah yang larut dan antigen dari tumor (carcinoembryonic antigen = CEA)

c. polipeptida sintetik
Bentuk dari polipeptida sintetik tergantung dari yang kita kehendaki. Ada beberapa jenis polipeptida sintetik seperti :
1.	Homopolimer, merupakan polimer yang hanya terdiri dari satu jenis asam amino.
2.	Kopolimer penggal, terdiri atas peptida pendek yang tersusun dari beberapa asam amino yang dirangkai beberapa kali.
3.	Kopolimer acak, terdiri dai asam amino yang dirangkaikan secara acak.
4.	Kopolimer rantai ganda, tersusun dari rantai utama, dengan rantai cabang yang terdiri dari tiga jenis polimer lainnya.
5.	Polimer dengan rantai-rantai yang merupakan peptida yang
berulang secara periodik.

d. Asam Nukleat
     Asam nukleat murni, sangat sukar menginduksi respons imun, kecuali dilakukan denaturasi terlebih dahulu. Pada manusia, antibodi terhadap asam nukleat terbentuk secara spontan, pada beberapa kejadian penyakit seperti pada Lupus Erythematosus.

2.3 HAPTEN
Beberapa substansi dapat berikatan dengan antibodi spesifik, walaupun substansi itu sendiri tidak mampu merangsang timbulnya respons imun. Substansi itu umumnya merupakan molekul berukuran kecil yang disebut dengan hapten. Hapten berasal dari kata yunani yang berarti mempererat. Beberapa contoh hapten : Sulfonat, Arsonat dan Carboxylate. Hapten baru akan bersifat imunogenik apabila ia berikatan dengan protein carrier. Beberapa jenis hapten yang berasil disenyawakan dengan protein sebagai pengemban sehingga dapat diperoleh antibodi terhadapnya antara lain
: gugusan yang berbentuk cincin aromatik, gugus gula, steroid, peptide, purin, pirimidin, nukleosid, nukleotida dan obat-obatan seperti penisilin dan zat-zat fluoresens.

Ciri terpenting dari suatu imunogen adalah kemampuan untuk menyulut respons imun dengan bantuan dari limfosit T. berbagai penelitian telah membuktikan bahwa imunogen sedikitnya harus memiliki dua determinan untuk merangsang pembentukan antibody, dan sedikitnya satu determinan harus mampu merangsang limfosit T. selain itu ada indikasi bahwa dalam beberapa hal, determinan antigen yang berbeda pada satu molekul protein dapat menyulut respons subpopulasi limfosit T yang berlainan, misalnya salah satu determinan mungkin menyulut respons limfosit T penolong, akan tetapi determinan yang lain mungkin memicu respons limfosit T penekan.

2.4 CARA KERJA IMUNOGEN
Adakalanya suatu imunogen merangsang respons imun tanpa melibatkan limfosit T tetapi langsung merangsang limfosit B. Imunogenimunogen itu disebut dengan antigen T-independent. Antigen semacam ini mungkin terdiri atas beberapa unit, yang masing-masing mempunyai susunan molekul yang sama. Misalnya ; polisakharida pada pneumokokus, beberapa jenis polimer protein dan PVP. Respons imun yang ditimbulkan oleh antigen T-independent, terutama antibody Ig M atau mungkin hanya Ig M saja .

2.5 PENGELOMPOKKAN ANTIGEN
Secara umum antigen dapat digolongkan menjadi antigen eksogen dan antigen endogen. Antigen eksogen adalah antigen yang berasal dari luar tubuh individu, misalnya berbagai jenis bakteri, virus dan obat-obatan. Sedangkan antigen endogen adalah antigen yang berasal dari dalam tubuh sendiri, misalnya; antigen xenogenic atau heterolog yang terdapat dalam spesies yang berlainan. Antigen autolog atau idiotipik yang merupakan komponen dari tubuh sendiri, dan antigen allogenic atau homolog yang membedakan satu individu dari individu yang lain dalam satu spesies. Contoh determinant antigen homolog adalah antigen yang terdapat pada eritrosit, leukosit, trombosit, protein serum dan major histocompatibility complex (MHC) .
',
                'gambar' => '',
            ],
            [
                'id' => 22,
                'id_mapel' => 5,
                'judul_materi' => 'Sistem Limforetikuler' ,
                'detail_materi' => '3.1 UNSUR SELULER
Terdiri dari limfosit T, limfosit B dan subset limfosit yang terutama berfungsi dalam respons imun spesifik, serta sel-sel lain yang berfungsi dalam respons imun nonspesifik.
Semua sel yang berfungsi dalam respons imun, berasal dari sel induk pluripoten yang kemudian berdiferensiasi melalui dua jalur, yaitu: jalur limfoid yang akan membentuk limfosit dan subsetnya, dan jalur myeloid yang membentuk sel-sel fagosit dan sel-sel lain. Sel-sel imunokompeten yang utama, adalah limfosit T (sel T) dengan berbagai subsetnya dan limfosit B (sel B). Sel T berdiferensiasi dalam kelenjar timus, sedangkan sel B berdiferensiasi dalam bursa fabricius yang hanya terdapat dalam bangsa unggas. Disamping populasi limfosit masih ada sel-sel lain yang berfungsi dalam respons imun seperti : sel null, fagosit mononuclear (monosit dan makrofag), sel-sel polimorfonuklear (neutrofil, eosinofil dan basofil), mastosit dan trombosit.
a. Limfosit T
Limfosit T berperan pada berbagai fungsi imunologi, yaitu sebagai efektor pada respons imun seluler dan sebagai regulator yang akan mengatur respons imun seluler dan respons imun humoral. Untuk membedakan limfosit T dengan limfosit B, dapat dilakukan dengan mereaksikan limfosit dengan eritrosit domba. Limfosit T dapat membentuk roset dengan eritrosit domba secara spontan, sedangkan limfosit B tidak. Berkat adanya antibodi monoklonal, kemudian terungkap bahwa molekul pada  permukaan limfosit T yang dapat mengikat eritrosit Domba tersebut terdiri atas molekul glikoprotein yang berfungsi sebagai reseptor. Molekul ini sekarang dikenal dengan sebutan CD2 (CD = clusters of differentiation).
Dari jumlah limfosit yang ada dalam sirkulasi, 65 – 80% merupakan limfosit T. Dalam perkembangannya di Timus, sel T mengekspresikan bermacam-macam antigen permukaan diantaranya CD4, CD5 dan CD8.  Namun dalam perkembangan selanjutnya sebagian antigen itu menghilang dan sebagian lagi menetap, yang akan menandai subset limfosit T. Pada fase pematangan sel T lebih lanjut, antigen CD5 menghilang, kemudian sel T berproliferasi dan berdiferensiasi menjadi salah satu subset sel T. Sel yang kehilangan antigen CD4, tetapi tetap menunjukkan antigen CD8, akan menjadi sel T penekan (T suppressor = Ts) dan sel T sitotoksik (T cytotoxic = Tc). Sedangkan sel yang kehilangan CD8, tetapi tetap menunjukkan CD4, akan menjadi sel T penolong ( T helper = Th). berdasarkan antigen permukaanya maka Ts dan Tc dikenal sebagai CD8 +, sedangkan Th dikenal sebagai CD4+. berkat adanya antibodi monoclonal yang dapat digunakan untuk mendeteksi berbagai antigen permukaan, maka limfosit CD4+ dapat dikelompokkan lagi kedalam dua subset yang ternyata mempunyai fungsi yang berbeda yaitu T helper inducer yang berproliferasi atas rangsangan antigen larut dan memicu sel B untuk memproduksi antibodi, dan subset lain yaitu suppressor-inducer yang berproliferasi atas rangsangan concanavalin A dan sel autolog, serta berfungsi menyulut sel CD8+ untuk menghambat atau menekan sel B untuk memproduksi antibodi. Sel T suppresoor-inducer ini, tidak bereaksi terhadap antigen yang larut.

b. Limfosit B
Limfosit B, adalah sel-sel dalam sistem imun yang mengkhususkan diri dalam pembentukan antibodi. Hematopoetik sebagai pendahulu sel pra-B dalam sumsum tulang membelah diri dengan cepat dan akan menjadi jenis sel berukuran besar yang mengandung rantai u, sel prekursor mengatur kembali gena variabel (V) dengan gena D dan gena J. Tingkat pematangan sel B dapat diketahui dengan menentukan ciri-ciri sel B, sesuai dengan stadium pematangannya, yaitu: ada tidaknya imunoglobulin intrasitoplasmik, imunoglobulin permukaan
(surface immunoglobulin = sIg), dan antigen permukaan lainnya. Sel B primitif (pra-B) ditandai dengan adanya: rantai u sitoplasma, tanpa rantai ringan, tidak memiliki rantai ringan dalam sitoplasmanya, dapat mengekspresikan Hla-DR dan reseptor untuk C3b, tetapi tidak memiliki reseptor Fc. Sel-sel pra-B membelah diri dengan cepatan  menjadi sel dengan ukuran yang lebih kecil. Apabila sel-sel para-B telah memiliki molekul Ig sebagai molekul integral membran selnya, maka sel tersebut telah berkembang menjadi sel muda. sel muda dengan cepat memiliki reseptor untuk virus Epstein barr, C3B dan untuk Fc dari Ig G. Semakin dewasa selnya, akan dijumpai pula Major Histocompatibility Complex (MHC) kelas I yang juga semakin bertambah jumlahnya.

Sel B perawan (virgin) yang terdapat didalam sumsum tulang, dan belum pernah terpapar oleh antigen, umumnya menunjukkan respons yang lebih lambat dibandingkan dengan sel B yang terdapat dalam jaringan limfoid perifer. Apabila sel B mendapat rangsangan dari antigen atau imunogen, maka limfosit B akan mengalami dua proses perkembangan yaitu : pertama, akan berdiferensiasi menjadi sel plasma yang membentuk imunoglobulin (Ig), dan kedua akan membelah dan kemudian kembali dalam keadaan istirahat sebagai limfosit  B memory. Apabila kemudian ada rangsangan antigen pada sel memori ini, maka akan timbul reaksi yang lebih cepat dari reaksi pertama tadi dan menyebabkan sel B berproliferasi menjadi sel plasma yang akan mensekresikan Ig spesifik.

Sel B dapat mengenali antigen yang berkadar sangat rendah. hal ini disebabkan oleh karena sel B mempunyai sIg yang berfungsi sebagai reseptor untuk antigen. Melalui proses endositosis antigen yang ditangkap oleh sIg tersebut masuk kedalam sitoplasma hanya dalam beberapa menit saja, untuk kemudian diproses menjadi fragmenfragmen. Melalui proses eksositosis fragmen antigen ini bersamasama dengan MHC kelas II disajikan pada limfosit T, sehingga dengan demikian sel B juga berfungsi sebagai antigen presenting cell (APC).

c. Sel Plasma
 Sel Plasma merupakan fase diferensiasi terminal dari perkembangan sel B dalam upaya memproduksi dan mensekresi antibodi. Sel plasma tidak dapat membelah lagi dan pada permukaannya tidak dijumpai adanya s Ig maupun reseptor-reseptor seperti yang dimiliki sel B. sel plasma berukuran lebih besar dari limfosit dan ditandai dengan inti bulat yang letaknya eksentris dan berkromatin kasar seperti roda. satu sel plasma dapat melepaskan beribu-ribu molekul antibodi setiap detiknya.

d. Antigen Presenting Sel (APC)
Sel-sel ini, berfungsi untuk menyajikan antigen kepada sel limfoid yang tersensitisasi. Supaya antigen dapat dikenal oleh sel limfoid, penyajian antigen yang telah diproses, dilakukan bersama ekspresi MHC kelas II pada permukaan sel. Makrofag, disamping berfungsi sebagai fagosit yang profesional, juga merupakan APC yang pertama diketahui. Dalam garis besarnya, semua sel yang menampilkan MHC kelas II dapat bertindak sebagai APC, misalnya: sel-sel dendritik, kupfer, langerhans, endotel, fibroblast dan sel B. Diantara sel-sel diatas, sel dendritik, makrofag dan sel B merupakan APC yang
terpenting.


3.2 Unsur Organ dan Jaringan
       Organ dan jaringan limfoid dibagi dalam dua kelompok utama, yaitu organ limfoid primer seperti timus, ekivalen bursa fabricius dan sumsum tulang.yang berfungsi sebagai embriogenesis dari sel-sel imunologik, dan organ limfoid sekunder seperti, kelenjar limfe, limfa dan jaringan limfoid lainnya, yang bereaksi aktif terhadap stimulasi antigen. Kelenjar timus, dianggap sebagai organ limfoid utama dalam imunogenesis dan menjadi pusat pengendalian aktivitas organ serta jaringan limfoid yang lainnya.
Menurut fungsinya, sistem limfoid dibagi dalam dua kompartemen yaitu :
a. Kompartemen sentral
Merupakan tempat terjadinya diferensiasi sel-sel yang mampu beraksi dengan antigen.
b. Kompartemen perifer
Sebagai tempat terjadinya reaksi sel-sel limfoid dengan antigen.
Rangsangan untuk maturasi sel pada kompartemen sentral tidak diketahui secara pasti, namun diduga proliferasinya dipengaruhi oleh hormon timus dan dapat terjadi tanpa stimulasi antigen. Sebaliknya, maturasi sel pada kompartemen perifer terjadi atas stimulasi antigen.





3.2.1 Organ Limfoid Primer
a. Kelenjar Timus
Kelenjar timus terletak dibagian depan mediastinum, terbagi dalam dua lobus dan banyak lobulus yang masing-masing terdiri atas korteks dan medula. Sel induk pluripoten yang merupakan cikal bakal sel T, masuk kedalam timus lalu berproliferasi menjadi sel yang disebut dengan timosit. Proses diferensiasi limfosit didalam timus, dipengaruhi oleh epitel timus dan sel dendritik yang berasal dari sumsum tulang (interdigitating cells). Sel dendritik ini mengekspresikan MHC kelas II dalam jumlah banyak dan diduga berperan dalam mendidik limfosit T untuk mengenal antigen diri (self). Dalam proses maturasi ini sel T menjadi imunokompeten. Dua sampai tiga hari, setelah sel induk masuk kedalam timus, limfosit meninggalkan timus lalu masuk kedalam sirkulasi dan selanjutnya menetap didalam organ limfoid perifer.

  b. sumsum tulang dan ekivalen bursa fabrisius
Spesies unggas, mempunyai organ limfoid primer yang berasal dari epitel usus janin yang disebut dengan bursa fabrisius. Sel induk pluripoten yang memasuki bursa fabrisius berdiferensiasi menjadi sel B yang mampu membentuk antibodi. Organ semacam ini tidak dijumpai pada mamalia, akan tetapi diketahui bahwa sel B pada mamalia berdiferensiasi dalam sumsum tulang dan dalam organ limfoid perifer. Selain tempat pematangan sel B, sumsum tulang juga mengandung sel T matang dan plasmosit. Dengan demikian, sumsum tulang disamping sebagai organ limfoid primer, juga berfungsi sebagai organ limfoid sekunder.

3.2.2 Organ Limfoid Sekunder
Pembentukan limfosit dalam organ limfoid primer diikuti dengan migrasi sel-sel tersebut kedalam organ-organ limfoid perifer atau limfoid sekunder.
Migrasi ini merupakan salah satu proses sirkulasi limfosit didalam tubuh. Adapun tahap-tahap surveillance imunologik dari limfosit di dalam tubuh adalah sebagai berikut :

1.	Migrasi sel induk pluripoten dari hati janin atau sumsum tulang kedalam organ limfoid primer serta diferensiasi dan distribusi limfosit kedalam organ limfoid perifer.

2.	Resirkulasi limfosit dari peredaran darah kedalam limfa atau kelenjar limfe kembali ke peredaran darah lagi.

3.	Distribusi sel efektor ketempat-tempat tertentu bila diperlukan untuk melakukan reaksi imunologik.

4.	Limfosit T cendrung bermigrasi ke kelenjar limfe perifer, sedangkan limfosit B lebih banyak bermigrasi ke jaringan limfoid yang terdapat pada sepanjang mukosa (mukosa associated lymphoid tissue =
MALT).

Adapun jenis-jenis dari organ limfoid sekunder adalah sebagai berikut :
a. Kelenjar Limfe
Dalam bagian sinus dari kelenjar limfe terdapat banyak makrofag, sedangkan dalam bagian korteksnya terdapat banyak sel T yang berasal dari darah, serta sel B yang menyusun diri membentuk nodul. Dibagian tengah dari nodul, terdapat pusat germinal dimana kelompok-kelompok sel B membelah diri secara aktif. Bila kelenjar dirangsang oleh antigen, maka pusat-pusat germinal itu membesar dan berisi banyak limfoblast. Pusat-pusat germinal diatas juga dihuni oleh banyak sel dendritik yang mempunyai reseptor untuk C3 dan fragmen Fc dari IgG. Dengan demikian antigen yang tidak diproses dapat dipertahankan pada permukaan sel ini dalam bentuk kompleks antigen antibodi-C3 selama beberapa bulan. Antigen yang tertangkap ini diduga memberikan rangsangan secara periodik dengan sewaktuwaktu melepaskan iccomes yang kemudian ditangkap dan diproses oleh APC dan disajikan kepada sel T. Hal ini akan mengakibatkan sel T secara terus menerus akan merangsang sel B memory untuk berproliferasi dan membentuk pusat-pusat germinal.

b. Limfa
Limfa terdiri atas pulpa merah sebagai tempat penghancuran eritrosit dan pulpa putih yang terdiri atas jaringan limfoid.  Didalam limfa limfosit T menumpuk dibagian tengah lapisan limfoid periarteriolar, sedangkan sel B terdapat didalam pusat-pusat germinal dibagian perifer. Sel B dapat dijumpai dalam bentuk tidak teraktivasi maupun teraktivasi. Dalam pusat-pusat germinal juga dijumpai sel dendritik dan makrofag. Makrofag spesifik umumnya terdapat didaerah marginal dan sel ini bersama-sama dengan sel dendritik berfungsi sebagai APC yang menyajikan antigen kepada sel B.

c. Jaringan Limfoid lain
Jaringan limfoid lain tersebar dalam jaringan submukosa saluran nafas, saluran cerna dan saluran urogenital. Contoh jaringan limfoid yang tersusun baik dan mengandung banyak pusat-pusat germinal adalah tonsil yang merupakan garis pertahanan pada pintu masuk saluran cerna dan saluran nafas, dan Peyer,s patch yang tersebar dalam mukosa saluran cerna. Peyer,s patch dan apendiks termasuk kedalam gut-associated lymphoid tissue (GALT). Dalam jaringan limfoid ini terdapat bagian yang dipengaruhi oleh timus.  Mucosa associated lymphoid tissue (MALT), yang terdapat pada saluran nafas, saluran cerna dan urogenital berfungsi untuk memberikan respons imunologik lokal pada permukaan mukosa. Jaringan limfoid ini selain berisi limfosit juga berisi fagosit sehingga mampu memberikan respons imun nonspesifik maupun respons imun spesifik. Didalam jaringan limfoid sepanjang saluran cerna dan saluran nafas akan terbentuk IgA sekretorik dan Ig E yang disekresikan untuk mempertahankan tubuh terhadap antigen yang masuk melalui mukosa.
',
                'gambar' => '',
            ],
            [
                'id' => 23,
                'id_mapel' => 6,
                'judul_materi' => 'Hormon HCG',
                'detail_materi' => 'HCG (Human Chorionic Gonadotropin) merupakan suatu hormon yang dihasilkan oleh jaringan plasenta yang masih muda dan dikeluarkan lewat urin. Hormon ini juga dihasilkan bila terdapat proliferasi yang abnormal dari jaringan epitel korion seperti molahidatidosa atau suatu chorio carsinoma. Kehamilan akan ditandai dengan meningkatnya kadar HCG dalam urin pada trimester I, HCG disekresikan 7 hari setelah ovulasi. Pemeriksaan HCG dengan metode immunokromatograÞ merupakan cara yang paling efektif untuk mendeteksi kehamilan dini. Selain itu adanya gangguan fungsi hati, gerak peristaltic dari sistem pencernaan, dan infeksi juga dapat menyebabkan terjadinya hiperemesis gravidarum. Walaupun misalnya seorang wanita memiliki faktor resiko untuk mengalami hiperemesis gravidarum, namun belum tentu wanita tersebut akan benar-benar mengalaminya, tergantung lagi dari masing-masing individu',
                'gambar' => '',
            ],
            [
                'id' => 24,
                'id_mapel' => 6,
                'judul_materi' => 'Treponema Pallidum',
                'detail_materi' => 'Treponema pallidum  adalah bakteri penyebab  Infeksi Menular Seksual (IMS) yang disebut Sifilis. Sifilis bersifat kronik dan sistemik karena memiliki masa laten, dapat menyerang hampir semua organ tubuh, menyerupai banyak penyakit dan ditularkan dari ibu ke janin (Djuanda, 2015). Masa laten pada sifilis tidak menunjukkan gejala klinis, namun pada pemeriksaan serologi menunjukkan hasil postif. Gejala sifilis diawali dengan munculnya luka yang tidak terasa sakit di area kelamin, mulut, atau dubur. Luka pada area kelamin yang menjadi gejala sifilis (sifilis) sering kali tidak terlihat dan tidak terasa sakit, sehingga tidak disadari oleh penderitanya. Meski demikian, pada tahap ini, infeksi sudah bisa ditularkan ke orang lain.
Tanpa penanganan yang cepat dan tepat, sifilis dapat merusak organ otak, jantung, dan beberapa organ lain. Pada wanita hamil, infeksi juga berbahaya karena dapat menyebabkan kondisi janin tidak normal, bahkan kematian bayi. Oleh karena itu, semakin dini diagnosis dan pengobatannya, semakin mudah sifilis disembuhkan.
1. Gambaran Klinik Sifilis
 Sifilis adalah penyakit Infeksi yang disebabkan oleh bakteri Treponema pallidum dengan terbatas pada hospes manusia. Infeksi pada manusia ditularkan melalui kontak seksual, dan lesi pada kulit atau selaput mukosa di daerah genitalia. Tingkat bahaya penyakit sifilis tergantung dari seberapa besar infeksi yang ditimbulkan berdasarkan lamanya infeksi. Sehingga penyakit sifilis dikategorikan berdasarkan fase-fase manifestasi klinik,
1.	Fase Primer
Fase awal penyakit ini ditandai dengan munculnya luka sifilis (chancre) tunggal atau lebih dari satu. Bentuknya seperti sariawan, bulat, dan tidak terasa nyeri. Lokasi luka sifilis merupakan pertanda tempat masuknya infeksi sifilis ke dalam tubuh yang berkembang di lokasi tempat masuknya bakteri T.Pallidum, beberapa diantaranya menyebar ke kelenjar limfe dan menuju aliran darah. Setelah muncul luka sifilis, dalam 3-6 minggu lukanya hilang, baik dengan ataupun tanpa pengobatan. Apabila penyakit sifilis tidak diobati akan berlanjut infeksinya menjadi infeksi sifilis sekunder
2.	Fase Sekunder
Pada fase sekunder munculnya ruam di kulit atau luka seperti sariawan di mulut, vagina dan usus. Ruam yang ditimbulkan yakni kasar, merah atau bintik coklat kemerahan yang terdapat di telapak kaki maupun telapak tangan, terkadang ruamnya terjadi di bagian tubuh lainnya. Apabila penyakit sifilis fase sekunder tidak diobati akan berlanjut infeksinya menjadi infeksi sifilis laten.
3.	Fase Laten
Periode pada fase laten selama 3-30 tahun. Stadium laten terdiri dari fase laten dini merujuk pada 1 tahun pertama, sedangkan pada fase laten lanjut apabila masa dari fase latennya sudah lebih dari 2 tahun. Pada fase laten tidak tampak manifestasi klinik, tetapi pada penderita terkandung Treponema pallidum terutama pada bagian kelenjar getah bening dan limpa. Apabila pada fase laten dini tidak terus diobati, maka 10-20 tahun berikutnya, orang dengan sifilis laten akan masuk ke fase laten lanjut (tersier). Bahayanya karena fase ini dapat merusak organ dalam (otak, jantung, hati), menyebabkan kelumpuhan, kebutaan dan demensia (pikun), dan dapat berakhir dengan kematian.
2. Pemeriksaan Sifilis Secara Serologi
 Metode definitif untuk mendiagnosis sifilis dilakukan dengan pemeriksaan mikroskop lapangan gelap terhadap eksudat dari chancre pada sifilis primer dan lesi mukokutis pada sifilis sekunder serta uji antibodi fluoresens langsung. Uji serologi lebih mudah, ekonomis dan lebih sering dilakukan. Terdapat dua jenis uji serologi yaitu :
1.	Uji Nontreponemal, yang paling sering dilakukan adalah :
a.	Uji Veneral Disease Research Laboratory (VDRL)
b.	Rapid Plasma Reagen (RPR)
Pemeriksaan ini digunakan untuk mendeteksi antibodi terhadap antigen yang terdiri dari kardiolipin, kolesterol dan lesitin yang sudah terstandardisasi.
2.	Uji Treponemal, terdiri dari :
a.	Treponema Pallidum Haem Aglutination (TPHA)
b.	Treponema Pallidum Particle Aglutination (TP-PA)
c.	Fluorescent Treponemal Antibody Absorption (FTA-ABS)
d.	Micro Hemaglutination Assay for Antibodies to Treponema Pallidum
(MHA-TP)
e.	Treponemal Enzyme Immuno Assay (EIA)
Pemeriksaan ini mendeteksi antibodi terhadap antigen Treponema dan memiliki sentivitas yang lebih tinggi dibandingkan dengan Uji Nontreponemal, terutama sifilis lanjut.
',
                'gambar' => '',
            ],
            [
                'id' => 25,
                'id_mapel' => 6,
                'judul_materi' => 'ASTO' ,
                'detail_materi' => 'Anti streptolisin titer O ( ASTO ) merupakan tes darah yang dilakukan untuk mengukur antibodi terhadap streptolisin O yang dihasilkan oleh bakteri streptokokus. Kadar ASTO lebih dari 160 – 200 todd/ unit dianggap sangat tinggi dan menunjukan adanya infeksi streptokokus yang baru terjadi atau sedang terjadi atau adanya kadar antibodi yang tinggi akibat respon imun yang berlebihan terhadap infeksi sebelumnya
Infeksi Streptococcus β hemolyticus grup A menyekresi enzim yang disebut sebagai anti streptolisin O yang mampu melisiskan sel darah merah. Anti streptolisin O bertindak sebagai antigen dan menstimulasi sistem imun untuk membentuk antibodi anti streptolisin O (ASO). Kadar titer ASO yang tinggi menunjukkan bahwa streptococcus memang ada dan dapat menyebabkan demam reumatik atau glomerulonephritis akut. Peningkatan kadar ASO serum dapat juga menunjukkan terjadinya infeksi streptokokus yang baru saja dialami. Antibodi ASO muncul kira kira 1 sampai 2 minggu setelah infeksi streptococcus akut, memuncak 3 sampai 4 minggu setelah awitan, dan tetap tinggi selama berbulan-bulan. Banyak anak usia sekolah memiliki kadar titer ASO yang lebih tinggi dari pada anak usia prasekolah atau dewasa. Antigen streptococcus lain adalah antideoksiribonuklease 3 (ADNase-titer > 10) dan hialuronidase anti streptococcus.
Prinsip dari pemeriksaan ini adalah partikel lateks yang dilapisi Streptolisin O akan teraglutinasi ketika dicampurkan dengan sampel yang mengandung ASO. Hasil dinyatakan positif jika terbentuk aglutinasi selama dua menit. Aglutinasi mengindikasi tingkat ASO dalam sampel lebih dari atau sama dengan 200 IU/ml sedangkan tidak adanya aglutinasi mengindikasi tingkat ASO dalam sampel kurang dari 200 IU/ml
',
                'gambar' => '',
            ],
            [
                'id' => 26,
                'id_mapel' => 6,
                'judul_materi' => 'Rheumatoid Arthritis' ,
                'detail_materi' => 'Rheumatoid Arthritis (RA) adalah penyakit autoimun yang etiologinya belum diketahui dan ditandai oleh sinovitis erosif yang simetris dan pada beberapa kasus disertai keterlibatan jaringan ekstraartikular. Perjalanan penyakit RA ada 3 macam yaitu monosiklik, polisiklik dan progresif. Sebagian besar kasus perjalananya kronik kematian dini.
Kata arthritis berasal dari bahasa Yunani, “arthon” yang berarti sendi, dan “itis” yang berarti peradangan. Secara harfiah, arthritis berarti radang pada sendi. Sedangkan Rheumatoid Arthritis adalah suatu penyakit autoimun dimana persendian (biasanya tangan dan kaki) mengalami peradangan, sehingga terjadi pembengkakan, nyeri dan seringkali menyebabkan kerusakan pada bagian dalam sendi.
Penyakit ini sering menyebabkan kerusakan sendi, kecacatan dan banyak mengenai penduduk pada usia produktif sehingga memberi dampak sosial dan ekonomi yang besar. Diagnosis dini sering menghadapai kendala karena pada masa dini sering belum didapatkan gambaran karakteristik yang baru akan berkembang sejalan dengan waktu dimana sering sudah terlambat untuk memulai pengobatan yang adekuat.

1. Epidemiologi Rheumatoid Arthritis
Prevalensi dan insiden penyakit ini bervariasi antara populasi satu dengan lainnya, di Amerika Serikat dan beberapa daerah di Eropa prevalensi RA sekitar 1% pada kaukasia dewasa, Perancis sekitar 0,3%, Inggris dan Finlandia sekitar 0,8% dan Amerika Serikat 1,1% sedangkan di Cina sekitar 0,28%. Jepang sekitar 1,7% dan India 0,75%. Insiden di Amerika dan Eropa Utara mencapai 20-50/100000 dan Eropa Selatan hanya 9-24/100000. Di Indonesia dari hasil survei epidemiologi di Bandungan Jawa Tengah didapatkan prevalensi RA 0,3% sedang di Malang pada penduduk berusia diatas 40 tahun didapatkan prevalensi RA 0,5% di daerah Kotamadya dan 0,6% di daerah Kabupaten. Di Poliklinik Reumatologi RSUPN Cipto Mangunkusumo Jakarta, pada tahun 2000 kasus baru RA merupakan 4,1% dari seluruh kasus baru. Di poliklinik reumatologi RS Hasan Sadikin didapatkan 9% dari seluruh kasus reumatik baru pada tahun 2000-2002.
Data epidemiologi di Indonesia tentang penyakit RA masih terbatas. Data terakhir dari Poliklinik Reumatologi RSCM Jakarta menunjukkan bahwa jumlah kunjungan penderita RA selama periode Januari sampai Juni 2007 sebanyak 203 dari jumlah seluruh kunjungan sebanyak 1.346 pasien. Nainggolan (2009) memaparkan bahwa provinsi Bali memiliki prevalensi penyakit rematik di atas angka nasional yaitu 32,6%, namun tidak diperinci jenis rematik secara detail. Sedangkan pada penelitian Suyasa et al (2013) memaparkan bahwa RA adalah peringkat tiga teratas diagnosa medis utama para lansia yang berkunjung ke tempat pemeriksaan kesehatan dan pengobatan gratis di salah satu wilayah pedesaan di Bali.

2. Faktor Risiko Rheumatoid Arthritis
Faktor risiko yang berhubungan dengan peningkatan kasus RA dibedakan menjadi dua yaitu faktor risiko yang tidak dapat dimodifikasi dan faktor risiko yang dapat dimodifikasi:
2.3.1 Tidak Dapat Dimodifikasi
1.	Faktor genetik
Faktor genetik berperan 50% hingga 60% dalam perkembangan RA. Gen yang berkaitan kuat adalah HLA-DRB1. Selain itu juga ada gen tirosin fosfatase PTPN 22 di kromosom 1. Perbedaan substansial pada faktor genetik RA terdapat diantara populasi Eropa dan Asia. HLADRB1 terdapat di seluruh populasi penelitian, sedangkan polimorfisme PTPN22 teridentifikasi di populasi Eropa dan jarang pada populasi Asia. Selain itu ada kaitannya juga antara riwayat dalam keluarga dengan kejadian RA pada keturunan selanjutnya.
2.	Usia
RA biasanya timbul antara usia 40 tahun sampai 60 tahun. Namun penyakit ini juga dapat terjadi pada dewasa tua dan anak-anak (Rheumatoid Arthritis Juvenil). Dari semua faktor risiko untuk timbulnya RA, faktor ketuaan adalah yang terkuat. Prevalensi dan beratnya RA semakin meningkat dengan bertambahnya usia. RA hampir tak pernah pada anak-anak, jarang pada usia dibawah 40 tahun dan sering pada usia diatas 60 tahun.
3.	Jenis kelamin
RA jauh lebih sering pada perempuan dibanding laki-laki dengan rasio 3:1. Meskipun mekanisme yang terkait jenis kelamin masih belum jelas. Perbedaan pada hormon seks kemungkinan memiliki pengaruh.

2.3.2 Dapat Dimodifikasi
1.	Gaya hidup
a.	Status sosial ekonomi
Penelitian di Inggris dan Norwegia menyatakan tidak terdapat kaitan antara faktor sosial ekonomi dengan RA, berbeda dengan penelitian di Swedia yang menyatakan terdapat kaitan antara tingkat pendidikan dan perbedaan paparan saat bekerja dengan risiko RA.
b.	Merokok
Sejumlah studi cohort dan case-control menunjukkan bahwa rokok tembakau berhubungan dengan peningkatan risiko RA. Merokok berhubungan dengan produksi dari rheumatoid factor(RF) yang akan berkembang setelah 10 hingga 20 tahun. Merokok juga berhubungan dengan gen ACPA-positif RA dimana perokok menjadi 10 hingga 40 kali lebih tinggi dibandingkan bukan perokok. Penelitian pada perokok pasif masih belum terjawab namun kemungkinan peningkatan risiko tetap ada.
c.	Diet
Banyaknya isu terkait faktor risiko RA salah satunya adalah makanan yang mempengaruhi perjalanan RA. Dalam penelitian Pattison dkk, isu mengenai faktor diet ini masih banyak ketidakpastian dan jangkauan yang terlalu lebar mengenai jenis makanannya. Penelitian tersebut menyebutkan daging merah dapat meningkatkan risiko RA sedangkan buah-buahan dan minyak ikan memproteksi kejadian RA. Selain itu penelitian lain menyebutkan konsumsi kopi juga sebagai faktor risiko namun masih belum jelas bagaimana hubungannya.
d.	Infeksi
Banyaknya penelitian mengaitkan adanya infeksi Epstein Barr virus (EBV) karena virus tersebut sering ditemukan dalam jaringan synovial pada pasien RA. Selain itu juga adanya parvovirus B19, Mycoplasma pneumoniae, Proteus, Bartonella, dan Chlamydia juga memingkatkan risiko RA.
e.	Pekerjaan
Jenis pekerjaan yang meningkatkan risiko RA adalah petani, pertambangan, dan yang terpapar dengan banyak zat kimia namun risiko pekerjaan tertinggi terdapat pada orang yang bekerja dengan paparan silica.
2.	Faktor hormonal
Hanya faktor reproduksi yang meningkatkan risiko RA yaitu pada perempuan dengan sindrom polikistik ovari, siklus menstruasi ireguler, dan menarche usia sangat muda.
3.	Bentuk tubuh
Risiko RA meningkat pada obesitas atau yang memiliki Indeks Massa Tubuh (IMT) lebih dari 30.
2 Pemeriksaan Penunjang
1.	Laboratorium
a.	Penanda inflamasi : Laju Endap Darah (LED) dan C-Reactive
Protein (CRP) meningkat
b.	Rheumatoid Factor (RF) : 80% pasien memiliki RF positif namun RF negatif tidak menyingkirkan diagnosis
c.	Anti Cyclic Citrullinated Peptide (anti CCP) : Biasanya digunakan dalam diagnosis dini dan penanganan RA dengan spesifisitas 95-98% dan sensitivitas 70% namun hubungan antara anti CCP terhadap beratnya penyakit tidak konsisten
2.	Radiologis
Dapat terlihat berupa pembengkakan jaringan lunak, penyempitan ruang sendi, demineralisasi “juxta articular”, osteoporosis, erosi tulang, atau subluksasi sendi.
',
                'gambar' => '',
            ],
            [
                'id' => 27,
                'id_mapel' => 6,
                'judul_materi' => 'CRP',
                'detail_materi' => 'C-Reactive Protein (CRP) ialah protein fase akut dengan struktur homopentamer dan memiliki tempat ikatan kalsium yang spesifik terhadap phosphocholin. C-reactive protein (CRP) bersama dengan serum amyloid P component (SAP) merupakan anggota dari protein golongan pentraxins. Protein ini terdiri dari lima subunit yang identik (homopentamer) dengan berat subunit kurang lebih 23 kDa yang berikatan secara non-kovalen dan tersusun secara simetris.CRP memiliki 206 residu asam amino. Dengan menggunakan mikroskop elektron, terlihat gambaran cincin (anular) molekul berbentuk donat. Struktur pentamer CRP memiliki sifat stabilitas molekul yang tinggi dan ketahanan terhadap serangan enzimatik. CRP merupakan penanda inflamasi dan salah satu protein fase akut yang disintesis di hati untuk memantau secara non-spesifik penyakit lokal maupun sistemik. Kadar CRP meningkat setelah adanya trauma, infeksi bakteri, dan inflamasi. Sebagai biomarker, CRP dianggap sebagai respon peradangan fase akut yang mudah dan murah untuk diukur dibandingkan dengan penanda inflamasi lainnya.',
                'gambar' => '',
            ],
            [
                'id' => 28,
                'id_mapel' => 6,
                'judul_materi' => 'Salmonella sp.',
                'detail_materi' => 'Bakteri salmonella berada pada familyEnterobacteriaceae.Klasifikasi dari salmonella sp. dapat dibagi berdasarkan spesies, subspecies dan serotipe. Genus salmonella  terbagi kedalam 2 spesies yakni : 1. Salmonella enteric 2. Salmonella bongori. Spesies Salmonella enterica dibagi lagi menjadi 6 subspesies yaitu : subspecies enteric atau subspesies I; subspecies salamae atau subspecies II; arizonae atau IIIa; diarizonae atau IIIb; houtenae atau  IV; indica atau VI.
Bakteri Salmonella bersifat  motil,  gram negatif, anaerob fakultatif serta  berbentuk batang. Sel terluar terdiri atas struktur lipopolisakarida kompleks (LPS) yang terbebas dari lisis sel sampai batas tertentu selama kultur. Bagian lipopolisakarida dapat berfungsi sebagai endotoksin, dan berperan penting dalam menentukan virulensi organisme.Kompleks endotoksin makromolekul ini terdiri dari tiga komponen, mantel O-polisakarida luar, bagian tengah (inti R), dan lapisan dalam lipid A. Secara umum, organisme yang berasal dari genus Salmonella merupakan sumber penyebab berbagai macam infeksi, mulai dari gastroenteritis ringan sampai berat seperti demam tifoid dan bakterimia.Salmonella adalah agen penyebab salmonelosis yaitu penyakit endemis dan menimbulkan kerugian yang besar di Indonesia
1.   Karakteristik Salmonella typhi
Salmonellatyphi adalah bakteri gram negatif, memiliki flagel, bersifat anaerob fakultatif,  berkapsul dan tidak membentuk spora.
Salmonellatyphi memiliki tiga antigen utama:
1)	Antigen O (antigen somatic), yaitu berada pada lapisan luar tubuh bakteri. Bagian ini memiliki struktur kimia lipopolisakarida (endotoksin). Antigen ini tahan dengan suhu panas dan alkohol tetapi tidak tahan dengan formaldehid.
2)	Antigen H (antigen flagela), yakni terletak pada flagela, fimbriae atau fili dari kuman. Antigen ini mempunyai struktur kimia suatu protein dan tahan terhadap formaldehid tetapi tidak tahan dengan panas diatas 60o C, asam serta alkohol .
3)	Antigen Vi adalah polimer polisakarida bersifat asam yang berada pada kapsul (envelope) dari bakteri sebagai pelindung bagi bakteri salmonella terhadap fagositosis.
Kebanyakan serotipe Salmonella  tumbuh dengan kisaran suhu 5 sampai 47° C dengan suhu optimum 35 sampai 37° C, tetapi beberapa serotipe bisa tumbuh di suhu serendah 2 sampai 4° C atau setinggi 54° C (Gray dan FedorkaCray, 2012). Salmonella sensitif terhadap panas dan bisa mati pada suhu 70° C atau lebih.Salmonella tumbuh di kisaran pH 4 sampai 9 dengan optimum antara 6,5 dan 7.5. Bakteri ini membutuhkan aktivitas air yang tinggi (aw) antara 0,99 dan 0,94 (air murni aw = 1,0) namun bisa bertahan di aw <0,2 seperti pada makanan kering. Pertumbuhan akan terhambat pada suhu <7° C, pH <3,8 atau Aktivitas air <0,94 .
Salmonella typhi dapat ditularkan melalui makanan dan minuman yang terkontaminasi bakteri. Sebagian bakteri dihancurkan oleh asam lambung dan sisanya berlanjut kesaluran pencernaan dan berkembang biak. Jika bakteri masuk dengan jumlah yang banyak yaitu kurang lebih 106-109 . Apabila respon imunitas humoral mukosa IgA usus yang kurang baik maka bakteri akan masuk ke dalam usus halus. Pertama akan menembus sel-sel epitel terutama sel M lalu ke lamina propia. Di lamina propia bakteri berkembang biak dan difagosit oleh sel fagosit terutama makrofag.
Kuman dalam hal ini bakteri Salmonella typhi dapat berkembang biak dan hidup di dalam makrofag selanjutnya dibawa ke Plaque Peyeri Ileum Distal , kemudian menuju kelenjar getah bening mesenterika. Melalui duktus torasikus bakteri masuk ke dalam sistem peredaran darah sehingga menyebabkan bakterimia (asimtomatik) dan demam  tifoid. Bakterimia dikatakan asimtomatik karena baru pertama terjadi kurang lebih 24-72 jam setelah bakteri tertelan dan biasanya tanpa gejala sebab bakteri langsung ditangkap oleh sel-sel sistem retikuloendotelial tubuh yang utama yaitu hati, limpa dan sumsusm tulang. Pada organ ini, bakteri akan meninggalkan makrofag dan kemudian berkembang biak diluar sel (ruang sinusoid) selanjutnya menuju kedalam sirkulasi darah lagi yang menyebabkan bakterimia kedua kalinya dengan tanda dan gejala infeksi sistemik .
Dalam hati, bakteri masuk kedalam kandung empedu dan berkembang biak. Secara berselang akan diekskresikan bersama dengan cairan empedu kedalam lumen usus. Kurang lebih separuh bakteri dikeluarkan bersama feses dan separuhnya lagi masuk kedalam sirkulasi menembus usus. Proses yang sama diawal terulang kembali, akibat aktivasi makrofag maka saat fagositosis bakteri Salmonella terjadi pelepasan beberapa mediator inflamasi yang menimbulkan gejala reaksi inflamasi sistemik yakni; demam, malaise, mialgia, sakit perut, sakit kepala, instabilitas vascular, 	gangguan 	mental 	dan koagulasi .

Adapun taksonomi dari Salmonella typhi adalah sebagai berikut :
Kingdom 	: Bacteria
Filum   	: Proteobacteria
Ordo   	: Gamma Proteobacteria
Class   	: Enterobacteriales
Family  	: Enterobacteriaceae
Genus   	: Salmonella
Spesies  	: Salmonella enteric
Subspesies 	: enteric I
Serotipe  	: typhi .

MorfologiSalmonella typhi
Bentuk dari bakteri Salmonella typhi adalah batang, tidak berspora, ukuran 103,5 µm x 0,5-0,8 µm, besarnya koloni rata-rata 2-4 mm, memiliki flagela peritrikh. Bakteri ini memfermentasikan glukosa dan manosa tanpa membentuk gas tetapi tidak memfermentasikan laktosa dan sukrosa.Sebagian besar isolat
Salmonella yang berasal dari bahan klinik menghasilkan H2S (Jawetz et al., 2006).  Isolat Salmonellatyphi pada media SSA (salmonella dan shigella agar) ketika suhu 37oC maka menunjukkan koloni yang tampak cembung, transparan dan memiliki bercak hitam dibagian pusat (Nugraha,2012). Bakteri Salmonellatyphi akan mati pada suhu 60oC selama 15 – 20 menit melalui pasteurisasi, pendidihan dan khlorinasi.
Identifikasi Salmonella typhi
Prinsip identifikasi Salmonella typhi adalah dengan melihat penampang secara mikroskopis (pewarnaan gram), kultur bakteri, uji serologis, uji biokimia dan biomolekuler. Kelima cara identifikasi bakteri Salmonella typhi dipaparkan lebih lanjut sebagai berikut:
a)	Penampakan Secara mikroskopis
Pewarnaan Gram TP-39 dengan melakukan prosedur pewarnaan
didapatkan hasil bakteri Gram batang negatif.
b)	Kultur Bakteri
Kultur  adalah metode mengembangbiakan bakteri   dalam   suatu media. Pada  umumnya Salmonella tumbuh  dalam  media  pepton  ataupun  kaldu  ayam  tanpa  tambahan  natrium  klorida  atau  suplemen  yang  lain.  Media  kultur  yang  sering digunakan adalah agar Mac Conkey.  Media lain  seperti  agar EMB (eosine methylene blue), Mac Conkey  atau   medium   deoksikholat  dapat  mendeteksi  adanya lactose  non-fermenter  sepeti bakteri Salmonella typhi dengan  cepat.  Namun  bakteri yang tidak memfermentasikan laktosa tidak  hanya  dihasilkan  oleh  Salmonella,  tetapi  juga  Shigella, Proteus, Serratia, Pseudomonas, dan beberapa bakteri gram negatif lainnya. Untuk  mendeteksiS.  typhi dengan  cepat   dapat   pula mempergunakan   medium
bismuth   sulfit.
Untuk lebih spesifik, isolasi dapat dilakukan pada medium selektif, seperti  agarSalmonella-shigella (agar SS) ataupun agar  enteric Hectoen  yang baik untuk  pertumbuhan Salmonella  dan Shigella. Media pembiakan yang direkomendasikan untuk S. typhi adalah media empedu (gall) dari sapi, yang mana media gall ini dapat meningkatkan positivitas hasil karena hanya S. typhi dan S. paratyphi yang dapat tumbuh pada media tersebut. Pada media SSA (Salmonella Shigella Agar) S.   typhi    akan membentuk  koloni  hitam  (black  jet)  karena  bakteri  ini  menghasilkan  H2S .
Prinsip kultur bakteri ini adalah : bekuan darah penderita + media Gall atau Bile 1 % dalam Pepton Water (1 : 1) diinkubasi selama 24 jam dalam suasana aerobic, kemudian dilakukan penanaman pada media differensial seperti media MacConkey, apabila hasil yang didapat memperlihatkan kuman dapat
memfermentasikan laktosa (laktosa positif) maka pemeriksaan tidak dilanjutkan, sedangkan apabila kuman tidak memfermentasikan laktosa (laktosa negatif) maka pemeriksaan dilanjutkan untuk mencari kuman Salmonella.
Hal yang perlu diperhatikan pada isolasi kuman Salmonella dalam Kultur gall atau Gall Culture adalah waktu pengambilan bahan untuk dilakukannya pemeriksaan, jenis media yang digunakan, jumlah volume darah maupun cara inkubasi yang benar serta cara pengambilan darah harus seaseptik mungkin. Pengambilan spesimen sebaiknya dilakukan pada minggu pertama timbulnya penyakit, karena kemungkinan untuk positif mencapai 80 – 90%, khususnya pada pasien yang belum mendapat terapi antibiotik.Pada minggu ke -3 kemungkinan untuk positif menjadi 20 – 25% dan minggu 4 hanya 10 – 15%.Tujuan pemeriksaan ini adalah untuk mencari kuman Salmonella dalam darah.Bahan yang digunakan bekuan darah bukan serum.Hal ini karena serum dipakai untuk tes widal.',
                'gambar' => '',
            ],
            [
                'id' => 29,
                'id_mapel' => 6,
                'judul_materi' => 'Test Widal',
                'detail_materi' => 'Pemeriksaan serologi ini bertujuan untuk mendeteksi adanya antibodi
(didalam darah) terhadap antigen kuman Samonella typhi / paratyphi (reagen).Pemeriksaan ini sebagai dikategorikan pemeriksaan penunjang dalam hal menegakkan diagnosis.Pemeriksaan dengan uji widal dilakukan dengan mendeteksi adanya antibodi aglutinin dalam serum pasien yang terinfeksi bakteri Salmonella pada antigen yang berada pada flagela (H) dan badan bakteri (O). Hasil positif dengan pemeriksaan ini lebih spesifik dengan ditunjukkannya titer aglutinin sebesar sebesar ≥1/200 (Meta,S.,2013). Karena mempergunakan reaksi aglutinasi, maka akan tidak bermakna apabila dilakukan secara single test. Akan lebih bermakna bila dilakukan pemeriksaan widal sebanyak dua kali yaitu pada fase akut dan 7-10 hari setelah fase tersebut.Sebab, aglutinin O dan H secara signifikan meningkat kurang lebih 8 hari setelah onset demam hari pertama. Jika peningkatan titer terjadi sebanyak empat kali, maka hasilnya positif secara signifikan.
Dalam praktiknya, hal tersebut akan sulit ditemukan karena penggunaan terapi antibiotik pada awal penyakit dapat mengurangi peningkatan titer aglutinin. Berbeda dengan uji thypidot yang mendeteksi IgM lebih awal daripada IgG, dalam pemeriksaan widal didapat antibody total yaitu IgM dan IgG sekaligus. Sering terjadi cross-reaction dengan Salmonella lainnya sehingga terkadang menimbulkan hasil positif palsu. Uji widal juga dapat digunakan untuk mendeteksi penyakit paratifus, paratifus disebabkan bakteri Salmonella paratyphi. Pengerjaan yang relative murah dan mudah untuk dikerjakan  Namun, belum ada kesepakatan nilai standar aglutinasi .
',
                'gambar' => '',
            ],
            [
                'id' => 30,
                'id_mapel' => 6,
                'judul_materi' => 'Uji Tubex',
                'detail_materi' => 'Tes tubex adalah salah satu dari uji serologis yang menguji aglutinasi kompetitif semikuantitatif untuk mendeteksi adanya antibodi IgM terhadap antigen lipopolisakarida (LPS) O-9 S.typhi dan tanpamendeteksi IgG. Tes tubex memiliki sensitivitas dan spesifisitas yang lebih baik daripada uji widal (Keddy,K,et al.2011). Sensitivitasnya dapat ditingkatkan dengan mempergunakan partikel berwarna, sedangkan spesifisitasnya ditingkatkan dengan penggunaan antigen O-9. Antigen ini spesifik dan khas pada Salmonella serogrup D yakni Salmonella typhi.
Tes ini dikategorikan pemeriksaan yang ideal dan dapat dipergunakan untuk pemeriksaan rutin karena prosesnya cepat, akurat, mudah dan sederhana (Septiawan,I.,dkk.,2013). Respon terhadap antigen O-9 terjadi secara cepat dikarenakan antigen O-9 bersifat imunodominan yang dapat merangsang respon imun, sehingga deteksi antigen O-9 dapat dilakukan mulai dari hari ke-4 hingga ke-5 (infeksi primer) dan hari ke- 2 hingga ke-3 (infeksi sekunder).
Tes tubex menggunakan pemisahan partikel-partikel untuk mendeteksi antibodi 	IgM 	dari 	seluruh 	serum 	pada antigen serotypetyphi 	O-9
lipopolisakarida.Namun, antibodi pasien menghambat pengikatan antara partikel indikator yang dilapisi dengan antibodi monoklonal anti-O9 dan lipopolisakarida yang dilapisi partikel magnetik. Spesimen yang digunakan adalah sampel serum atau plasma heparin.
',
                'gambar' => '',
            ],



        ];
        DB::table('dedi_materi')->insert($defaulData);
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
