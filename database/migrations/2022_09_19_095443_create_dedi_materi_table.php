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
            $table->string('judul_materi');
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
            [
                'id' => 31,
                'id_mapel' => 1,
                'judul_materi' => 'Pendahuluan Tentang Mikroorganisme',
                'detail_materi' => 'Dunia Mikroba
Mikroorganisme (disingkat mikroba, jasad renik, protista) adalah makhluk kecil yang hanya dapat dilihat dengan bantuan mikroskop. Ilmu yang mempelajari tentang perikehidupan mikroba ini disebut MIKROBIOLOGI (bahasa Yunani : mikro = kecil, bios =] hidup, logos = ilmu. Mikrobiologi mempunyai beberapa cabang, yakni mencakup pengetahuan tentang protozoologi (hewan bersel satu atau protozoa), bakteriologi (ilmu tentang bakteri), virology (ilmu tentang virus) dan mikologi (ilmu tentang jamur, terutama jamur yang bertingkat rendah).
Mikroorganisme adalah makhluk kecil yang tidak dapat dilihat dengan mata. Besarnya dinyatakan dengan satuan micron (symbol u), 1 mikron - 0,001 mm. Virus adalah paling kecil dari mikroorganisme, besarnya dinyatakan dengan satuan millimikron (mu), 1 millimikron = 0,001 mu. Besar mikroorganisme yang dinyatakan dengan micron, dapat dilihat dengan mikroskop biasa. Sedangkan virus yang besarnya dinyatakan dengan millikron, hanya dapat dilihat dengan mikroskop electron.

 Tempat hidup
Mikroorganisme terdapat dimana-mana. Mereka dijumpai pada lapisan tanah sebelah atas, dalam air, diudara, sampah-sampah, debu-debu, pada makanan dan minuman, tumbuh-tumbuhan dan juga pada tubuh manusia dan hewan. Jenis mikroorganisme yang kita jumpai bergantung kepada tempatnya. Keanekaragaman dan tata hidup mikroorganisme ini sangat menarik dan mengesankan. Mereka mudah berkembangbiak dan berpindah-pindah dari satu tempat ketempat yang lain, misalnya melalui debu-debu, udara, makanan dan minuman dan sebagainya.
Manusia dalam kandungan bebas dari mikroba, dengan kata lain steril (bebas hama). Akan tetapi sejak saat dilahirkan, hubungan manusia dengan mikroba tetap ada sampai akhir hayatnya. Jumlah dan jenis mikroba ini pada tubuh manusia selalu mengalami perubahan. Hal ini tergantung pada tubuh manusia, situasi dan lingkungan itu sendiri. Dan sejak saat itu pulalah, mikroba menjadi masalah dalam hidup manusia terutama terhadap mikroorganisme yang merugikan atau yang dapat menyebabkan penyakit, merusak makanan dan sebagainya.
Asal mikroba
Dari manakah asalnya makhluk-makhluk kecil atau kehidupan ini telah menjadi perdebatan sejak berabad-abad, jauh sebelum jaman Masehi. Aristoteles (384-322 SM) seorang filosofi dan ilmuan yang terkenal dari Yunani berpendapat, bahwa makhluk-makhluk mikroskopis (mikroba) itu dapat terjadi dengan sendirinya.

Perintis mikrobiologi
Sebelum abad ke 17 dunia mikroba masih gelap, artinya makhluk kecil yang tidak dapat dilihat dengan mata belum dikenal. Sebagai perintis dalam penemuan didunia mikroorganisme ialah Leeuwenhoek, kemudian dikembangkan oleh Pasteur dan Robenrt Koch. Dibawah ini kita uraikan secara singkat bagaimana penemuan-penemuan mereka

Antonio van Leeuwenhock (1632-1723)
Leeuwenhock seorang bangsa Belanda, adalah orang yang pertama menemukan mikroorganisme dengan mikroskop ciptaannya sendiri. Dengan mikroskopnya yang sederhana, beliau memeriksa setitik air kotor (air sungai, danau, hujan, air buangan), beliau melihat benda-benda aneh yang kecil. Makhluk kecil dinamakannya : animacula" (influsoria) dan mikroskop yang digunakannya disebut "magic eye" (mata ajaib). Apa yang dilihat oleh Leeuwenhock didalam setetes air tidak lain adalah protozoa yang kita kenal sekarang (1676). Leeuwenhock dapat dipandang sebagai peletak batu pertamanya dalam penemuan mikroorganisme dan sebagai perintis mikrobiologi.

Louis Pasteur (1822-1895)
Pasteur berasal dari Perancis, seorang apoteker dan ahli kimia, akan tetapi banyak melakukan penyelidikan dibidang mikroorganisme. Penemuan mikroskop dan mikroorgansme oleh Leeuwenhock sangat menarik perhatiannyda dan menjadi landasan dalam penyelidikan-penyelidikan Pasteur. Setelah melakukan percobaan-percobaan ternyata bahwa paham generatio spontanea itu tidak benar (Pasteur, Lazzaro Spallanzani, Francesco Redi). Kemudian timbullah pendapat baru tentang kehidupan sebagai berikut :
-	Omne vivum ex vivo : artinya bahwa adanya kehidupan hanya dapat terjadi karena ada kehidupan sebelumnya.
-	Omne vivum ex evo : artinya bahwa segala sesuatu yang hidup berasal dari telur

Dari keterangan diatas dapat ditarik kesimpulan, bahwa benda mati tetap sebagai benda mati dan makhluk hidup berasal dari makhluk yang sama jenisnya. Pasteur dianggap sebagai Bapak bakteriologi dan pencipta mikrobiologi (ilmu kuman). Beliau banyak melakukan penyelidikan tentang hubungan mikroorganisme dengan manusia, baik yang merugikan maupun yang menguntungkan. Perkembangan mikrobiologi sangat pesat pada jaman beliau. Penemuan-penemuan Pasteur antara lain dapat disebutkan :
-	Pendapatnya tentang teori kuman penyakit (penularannya)
-	Pengembangan teknik pencegahan penyakit (vaksinasi)
-	Dasar-dasar sterilisasi (menghapus hamakan)
-	Pembuatan vaksin kolera ayam, vaksin rabies (gila anjing)
-	Pemeliharaan Pemeliharaan kuman dilaboratorium (biakan murni)
-	Penemuan peragian pada anggur, bir dan sebagainya.
terkenal dengan sebutan " generatio spontanea" (generasi spontan) atau teori abiogenesis. Bedanya teori generasi spontan abiogenesis, ialah pada generasi spontan, makhluk hidup terjadi begitu juga tanpa asal. Sebaliknya pada teori abiogenesis, makhluk hidup itu terjadi dari benda-benda mati (a= tidak, bios=hidup, genesis=kejadian). Pendapat ini dianut oleh Needam (seorang pendeta bangsa Irlandia), helmont, Pouchet, Joly, Mussef dll.
Timbulnya teori atau hipotese generasi spontan ini, berdasarkan atas kenyataan adanya perubahan-perubahan yang terjadi, misalnya :
-	Daging yang telah direbus, kemudian disimpan dalam botol yang tertutup, setelah beberapa hari, didalamnya sudah terdapat makhluk-makhluk kecil
-	Air hujan yang kelihatannya jernih, setelah beberapa hari ditampung, didalamnya sudah terdapat makhluk-makhluk kecil.
-	Begitu juga, susu menjadi asam, air gulai menjadi basi setelah beberapa hari dan sebagainya.
Teori generasi spontan ini lama mempengaruhi para ahli, etrbukti bahwa baru 22 abad kemudian atau pada abad ke-19 dapat dibuktikan bahwa teori generatio spontanea dan teori abiogenesis tidak benar.

Robert Koch ( 1843-1910)

Robert Koch adalah seorang dokter bangsa Jerman, murid Pasteur. Beliau yang pertama-tama memperkenalkan cara-cara pemeriksaan bakteri dilaboratorium, mengisolasi (mengasingkan) kuman penyakit dari bahan sakit yang berasal dari penderita. Perbenihan yang digunakan adalah perbenihan padat, mula-mula dipalai gelatin, kemudian atas anjuran Dr. Hess pembantunya, diganti dengan agar-agar.
Dengan pengembangan cara-cara modern ini, kuman-kuman penyakit dapat dibuat biakan murni. Biakan murni artinya hanya terdiri dari satu jenis kuman saja. Dengan adanya biakan murni, penyelidikan-penyelidikan terhadap satu jenis kuman mengenai virulensinya, patogenitasnya, sifat-sifat biokimianya dapat dilakukan.
Robert Koch menemukan basil TBC tahun 1882 dan vibrio kolera pada tahun 1883 di Mesir. Bakteriologi kedokteran maju dengan pesatnya karena hasil penelitian Robert Koch, terutama tentang piaraan murni dari kuman. Berdasarkan penemuan beliau, ia mengemukakan 4 dalil yang terkenal dengan Postulate Koch (1883). Bagaimana isi dari 4 dalil itu :
1.	Tiap penyakit infeksi harus disebabkan oleh mikroorganisme
2.	Mikroorganisme atau kuman penyebab harus dapat diasingkan dilaboratorium dengan pembiakan (biakan murni).
3.	Jika kuman piaraan tadi disuntikkan kepada binatang sehat, pada binatang itu harus menimbulkan penyakit yang sama pada manusia.
4.	Kemudian dari binatang tadi, setelah dibedah harus dapat diasingkan lagi dengan cara pembiakan dan dibuat biakan murni.
Meskipun dalil Koch ini masih mempunyai kelemahan-kelemahan akan tetapi dalil ini tetap merupakan prosedur rutin dalam bakteriologi modern.

Golongan Mikroorganisme
Pada umumnya kita mengambil ketentuan, bahwa semua makhluk yang berukuran beberapa micron atau lebih kecil kita sebutkan mikroorganisme. Alam mikroorganisme meliputi : Protozoa (binatang yang terdiri dari 1 sel), jamur (cendawan) tingkat rendah, ganggang (alga), bakteri dan virus (disebut juga makhluk ultra-mikroskopik).

Komensal
Adalah bakteri-bakteri yang hidup dalam usus kita, misalnya bakteri koli. Mereka turut menguraikan sisa-sisa zat makanan dan membantu penyerapan zat-zat makanan. Selain itu bakteri koli ini juga membentuk sintetik viamin K dalam usus.

Menguntungkan
1.	Bakteri dalam pertanian
Bakteri ini turut menyuburkan tanah, dengan cara memecahkan zat-zat organic menjadi zat anorganik (denitrifikasi) yang diperlukan oleh tumbuh-tumbuhan. Bakteri pengikat Nitrogen dari udara bebas yang diperlukan oleh tanaman untuk membentuk.
Contoh : Clostridium Pasteurianum, Azetobacter Chroococum
2.	Bakteri pembusuk (safrofit)
Bakteri pembusuk menghancurkan tumbuh-tumbuhan dan hewan yang telah mati, sampah-sampah. Selain menyuburkan tanah, safrofit turut juga mengurangi kemungkinannya penularan penyakit.
3.	Bakteri dan mikrobiologi industri
Mikrobiologi industri ialah ilmu pengetahuan yang meneliti kemungkinannya digunakan mikroba untuk industri. Banyak mikroorganisme dapat digunakan untuk membuat hasil industri, antara lain dapat disebutkan : asam cuka (Azobacteriaceti), alcohol, anggur, sake dan bir (Sacharomyces sp), tape, kecap (Aspergillus sp) dan sebagainya
4.	Pembuatan antibiotika
Banyak antibiotika yang dapat dihasilkan oleh mikroorganisme terutama golongan jamur dan bakteri.
Jamur : Penicillin (Penicillin notatum), Streptomycin (Streptomyces griseus), Terramycin (Strep. Ramous), Kloromycetin (Strep. Venezula), viomycin (Strop.punicous), dll
Bakteri : Bacitracin (Bacillus substillis), polymixin (B.polymyra), Tyrothrisin (B. brevis dubos), dll.
Mereka ada yang dapat digolongkan sebagai hewan, ada yang dapat digolongkan sebagai tumbuh-tumbuhan dan ada pula yang tidak dapat digolongkan sebagai hewan maupun tumbuhan. Sementara itu ada diantaranya mempunyai “bentuk jembatan” antara dua mikroorganisme, dengan kata lain sifatnya treletak antara 2 jenis mikroorganisme.
Misalnya :
-	Spirokheta, merupakan bentuk jembatan antara lain dengan jamur dan protozoa
-	Actinomycetes, adalah bentuk jembatan antara bakteri dengan jamur (cendawan)
-	Virus, merupakan bentuk peralihan antara bakteri atau makhluk hidup dengan benda mati. Karena ia dapat berbentuk kristal (benda mati) tetapi juga adanya molekul protein yang menyusun tubuh virus. Adanya molekul protein ini merupakan ciri bahwa virus bentuk hidup.

Perbedaan benda mati dengan benda hidup
Makhluk hidup adalah merupakan rangkaian dari aktivitas yang terjadi pada suatu organisme dengan cara dan susunan tertentu. Perbedaan benda hidup dengan tak hidup adalah : Makhluk hidup :
1.	Melakukan pertumbuhan
2.	Melakukan gerak aktif
3.	Melakukan proses metabolisme
4.	Melakukan perkembangan biakan
5.	Melakukan respon terhadap rangsangan.
Benda mati : - tidak dapat melakukan kegiatan-kegiatan seperti diatas
',
                'gambar' => '',
            ],
            [
                'id' => 32,
                'id_mapel' => 1,
                'judul_materi' => 'Mikroorganisme Dalam Kehidupan Manusia',
                'detail_materi' => 'Peranan mikroorganisme dalam kehidupan manusia ada yang merugikan, komensal (tidak merugikan) dan ada yang menguntungkan.

Mikroorganisme yang merugikan adalah bakteri-bakteri patogen yang dapat menimbulkan penyakit (infeksi).
Misalnya :
-	Gonococcus : kencing nanah
-	Shigella : disentri
-	S. typhi : tipus
-	M. Tbc : tuberculose
-	V. kolera : kolera
-	T. pallidum : syphilis

MORFOLOGI BAKTERI
Morfologi : Ilmu mengenai bentuk dan struktur
Berdasarkan bentuknya bakteri dibagi 3 kelompok utama :
1.	Coccus => bulat
2.	Bacil => batang / silinder
3.	Spiral => batang melengkung atau melingkar

UKURAN SEL BAKTERI
-	Sel bakteri bentuk bulat 0,7-1,3µ
-	Sel bakteri bentuk batang : lebar : 0,2-2 µ, panjang : 0,7-3,7 µ
Bakteri yang kecil sekali contohnya Dialester pneumosintes berukuran 0,5-0,3µ
Bakteri yang besar sekali contohnya Sprillum volutan berukuran 1,5 x 13 – 15 µ
Ukuran sel bakteri dipengaruhi oleh :
-	Umur bakteri
-	Perubahan lingkungan
-	Pewarnaan sel bakteri
Anatomi sel bakteri
1.	Dinding sel
2.	Protoplasma (membran sel, mesosom, ribosome, nukeoid, endospora)
3.	Bagian yang terletak diluar dinding sel
-	kapsul
-	flagella
-	pilli ( fibriae )
Dinding sel
Bagian sel yang berfungsi terutama memberi bentuk dan perlindungan terhadap sel, mengatur pertukaran zat-zat dari dan kedalam sel dan terletak antara kapsul dan membran sel. Tebal dinding sel : 0,01 -0,023 µ
Beratnya : +20% berat kering sel bakteri
',
                'gambar' => '',
            ],
            [
                'id' => 33,
                'id_mapel' => 1,
                'judul_materi' => 'Klasifikasi Bakteri',
                'detail_materi' => 'Menyusun suatu sistematik didalam dunia mikroorganisme, bukanlah suatu pekerjaan yang mudah. Kesulitan pertama yang kita hadapi ialah menentukan apakah bakteri itu termasuk golongan hewan atau golongan tumbuh-tumbuhan. Pertama kali sarjana-sarjana zoology seperti Muller (Denemarkon, 1773) dan EHRENBERG (Jerman, 1838) memasukkan bakteri kedalam protozoa (golongan hewan). Baru pada tahun 1872 timbul pendapat lain. COHN seorang sarjana petani dari Jerman, memasukkan bakteri kedalam tumbuh-tumbuhan, berdasarkan ciri-ciri yang terdapat pada bakteri.
Klasifikasi mengenai bakteri yang agak lengkap disusun oleh Cohn pada tahun 1875, sejak itu selalu mendapat perubahan dan penyempurnaan secara berangsur angsur.

Klasifikasi
Yang diartikan dengan klasifikasi adalah penggolongan atau penyusunan secara sistematis untuk tumbuh-tumbuhan dan hewan, mulai dari kelompok besar hingga kelompok yang sekecil-kecilnya.

Tujuan :
-	Untuk mendapatkan keseragaman dalam memberikan nama bakteri
-	Untuk memudahkan penyelidikan-penyelidikan baru.
Seandainya tidak ada keseragaman dan cara yang tertentu untuk memberikan nama yang dianut oleh semua para ahli, hingga masing-masing para ahli memberikan nama sendiri-sendiri, maka dapatlah kita bayangkan bahwa keadaan yang demikian sangat membingungkan.

Nomenklatur
Cara yang tertentu untuk memberikan nama bakteri disebut nomenklatur (tatanama). Untuk menyebutkan nama suatu bakteri kita gunakan system “dua nama” atau binomenklatur. Yakni nama genus diikuti oleh spesies. Huruf pertama dari genus ditulis dengan huruf besar, sedangkan nama keterangan spesiesnya ditulis dengan huruf kecil biasa. Misalnya : Mycobacterium tuberculose, Salmonella typhi.

',
                'gambar' => '',
            ],
            [
                'id' => 34,
                'id_mapel' => 1,
                'judul_materi' => 'Mikroskop',
                'detail_materi' => 'Mikroskop mempunyai hubungan erat dengan mikrobiologi. Karena ukuran mikroba sangat kecil dan baru dapat dilihat dengan mikroskop. Untuk mendapatkan pembesaran yang cukup dari suatu benda atau obyek yang sangat kecil (diameternya kurang dari 0,1 mm) diperlukan mikroskop.
Sebelum perang dunia II, para ahli mikrobiologi pada umumnya menggunakan mikroskop medan terang (Bright field microscope) didalam pekerjaan-pekerjaan mereka. Sejak itu kemajuan teknologi dibidang mikroskop, boleh dikatakan telah berkembang pesat, hal ini karena ditemukannya alat-alat optik yang lebih baik disertai dengan perbaikan-perbaikan mekanik.

A.	MACAM-MACAM MIKROSKOP
Dewasa ini ada beberapa macam mikroskop:
1.	Mikroskop medan terang
Sebuah mikroskop yang baik dengan perlengkapan optik medan terang, merupakan alat paling dasar bagi seorang ahli mikrobiologi. Seperti tercermin dari namanya. mikroskop medan terang adalah suatu bentuk mikroskop dengan medan yang mengelilingi spesimen kelihatan terang (berwarna cerah), sedangkan spesimennya sendiri memperlihatkan warna lebih gelap. Hal ini disebabkan karena cahayanya dari sumbernya lewat melalui system-sistem lensa keatas tanpa mengalami. perubahan, sehingga terbentuklah medan yang terang. Berbeda dengan mikroskop lens tunggal yang sederhana dari jaman Leeuwenhoek, mikroskop yang umum dipakai pada masa kini menggunakan system lensa terpisah, yaitu lensa obyektif dan lensa okuler untuk menambah perbesaran, karena itu seringkali disebut juga sebagai mikroskop majemuk.
Pada prinsipnya mikroskop ini terdiri dari dua bagian, yaitu bagian mekanik dan bagian optik.
a.	Bagian mekanik berupa : statif, tubus, revoler, meja benda, sekrup pengatur tubus (kasar dan halus), sekrup pengatur kondensor dan sekrup-sekrup penggerak meja benda
b.	Bagian optik : lensa okuler, lensa obyektif, kondensor dan cermin pengatur cahaya

2.	Lensa Obyektif Lensa
Obyektif didalam tubus mikroskop membentuk bayngan nyata dari preparat (benda). Bayangan nyata ini selanjutnya diperbesar oleh lensa okuler. Untuk memperoleh obyektif yang baik perlu diperhatikan perbesaran dan daya pisahnya.
a.	Perbesaran.
Makin pendek jarak focus suatu lensa, makin kuat perbesarannya. Misalnya obyektif yang mempunyai perbesaran minimal (satu kali) mempunyai jarak focus 55 mm, sedang obyektif yang mempunyai perbesaran maksimal (120x)
b.	Daya pisah
Daya pisah adalah kemampuan suatu obyektif untuk memisahkan 2 buah titik yang sangat berdekatan didalam struktur pada suatu obyek. Jadi makin besar kemampuan suatu obyek, makin kecil jarak dua buah titik yang berdekatan yang dapat dilihat secara terpisah dengan mikroskop itu.
3.	Lensa okuler
Lensa okuler merupakan lensa yang berfungsi untuk membuat bayangan semu terakhir, sehingga bayangan semu tersebut dapat dilihat langsung oleh mata.
4.	Kondensor
Fungsi kondensor yaitu untuk mengatur intensitas cahaya yang masuk kedalam mikroskop. Kondensor terdiri atas dua bagian, yaitu :
a.	Susunan lensa-lensa untuk mengumpulkan sinar-sinar sebelum masuk kedalam mikroskop.
b.	Diafragma, untuk mengatur sinar-sinar tepi yang masuk kedalam mikroskop. Dengan adanya diafragma ini kesalahan-kesalahan aberasi sferik dan aberasi astigmatisma akan berkurang.

B.	MACAM-MACAM MIKROSKOP
1.	Mikroskop ultraviolet
Mikroskop ini menggunakan sinar ultra violet dan dilengkapi dengan alat pemotret sebagai alat pengamatannya. Oleh karena cahaya yang digunakan sinar ultra violet (UV) mempunyai panjang gelombang yang lebih pendek dari pada sinar biasa, maka mikroskop ini mempunyai daya pisah yang kuat.
2.	Mikroskop fase kontras.
Mikroskop fase kontras berbeda dengan mikroskop biasa. Mikroskop ini dilengkapi dengan diafragma khusus, yaitu diafragma dengan celah berbentuk cincin dan lensa obyektifnya dilengkapi dengan lempeng defraksi. Pada mikroskop biasa perbedaan indeks bias yang sangat kecil pada obyek tidak dapat terlihat, tetapi dengan adanya lempeng defraksi pada susunan lensa onyektif ini. maka perbedaan indeks bias yang kecil pada obyek itu dapat terlihat dengan jelas. Hal ini memungkinkan untuk dapat membedakan perbedaan-perbedaan struknu dengan jelas.
3.	Mikroskop Elektron
Daya pisah mikroskop biasa kira-kira hanya 0,2 mikron, apabila daya pisah yang digunakan adalah maksimum. Pada mikroskop electron digunakan sinar electron yang mempunyai panjang gelombang sangat pendek, tergantung pada voltase yang digunakan. Untuk mendapat sinar electron yang mempunyai panjang gelombang 0,005 diperlukan voltase (tegangan) 50.000 volt. Dengan mikroskop biasa perbesaran yang dapat dicapai kurang lebih 2000 kali, dengan mikroskop ultra violet, perbesaran yang dapat dipakai kurang lebih 3000 kali. Dengan mikroskop electron perbesaran yang dapat dipakai untuk sedikitnya 10.000 -30.000 kali atau lebih, sehingga dapat dipakai untuk melihat molekul-molekul protein, virus, baktriofage, struktur dalam bakteri dan lain-lain.
',
                'gambar' => '',
            ],
            [
                'id' => 35,
                'id_mapel' => 1,
                'judul_materi' => 'Cara - Cara Pewarnaan Bakteri',
                'detail_materi' => 'Banyak istilah yang dipakai untuk menyatakan “pewarnaan”, misalnya pengubaran, pemulasan dan pengecatan. Pewarnaan ini sangat penting dalam suatu pemeriksaan suatu bakteri dan sekaligu dapat diketahui bentuk (morfologi) bakteri. Dengan pewarnaan, bakteri mudah dilihat dibawah mikroskop.
Tiap bakteri mempunyai reaksi atau sifat yang khas terhadap zat warna. Sifat ini terletak dalam sitoplasmanya. Ada bakteri yang mudah diwarnai (menangkap zat warna), ada yang sukar diwarnai. Beberapa jenis bakteri memerlukan penguburan khusus atau istimewa.
Dalam sejarah kesehatan, para sarjana yang mula-mula menemukan pengubaran ialah Hoffman (1869), Weigert (1871), Erlich (1882, Ziehl Neelsen (1882) dan Gram (1884). Zat warna yang digunakan adalah zat warna aniline yakni fuchsin, Victoria blue, gentian violet, methyl biolet dan sebagainya.
Menurut fungsi dan tujuannya, pengubaran bakteri dapat dibagi :
1.	Pewarnaan negatip
2.	Pewarnaan sederhana
3.	Pewarnaan Gram
4.	Pewarnaan tahan asam ( Khusus )

Tujuan pewarasan :
1.	Mengamati dengan lebih baik morfologi
2.	Mengidentifikasi bagian-bagian dan struktur sel mikroorganisme
3.	Membantu identifikasi
4.	Membedakan organisme yang serupa

Pewarnaan Negatip
Pewarnaan negatip adalah pewarnaan secara tidak langsung. Kita hanya mewarnai latar belakang bakteri saja, sedangkan bakteri itu sendiri tidak menangkap zat warna. Pada pewarnaan ini tidak dilakukan fiksasi (pemanasan), dengan demikian tubuh bakteri praktis tidak mengalami perubahan. Oleh karena itu, pewarnaan cara ini berguna untuk :
a.	Melihat bentuk asli bakteri
b.	Untuk pengukuran besar bakteri
Pewarnaan cara negatif dapat dilakukan dengan tinta cina (Buri), dimana latar belakang hitam, sedangkan bakteri tidak berwarna atau berkilat putih. Penggunaan praktis, untuk pemeriksaan :
-	Treponema fuchsin :
-	Leptospira dan kapsul bakteri

Pewarnaan sederhana
Cara ini hanya memakai satu macam zat warna saja, misalnya methylen biru dan fuchsin. Warna bakteri bergantung kepada zat warna yang dipakai, dengan methyle biru berwarna biru dan dengan fuchsin berwarna merah jambu. Dalam rutin lebih banyak digunakan methylen biru.
Jika hanya dikehendaki ada atau tidak jasad renik (kuman) saja padan bahan yang diperiksa, cara ini lebih cepat, memerlukan waktu sangat singkat. Paling banyak digunakan ialah methylen biru menurut Loffler, yakni dengan menambahkan basa (KOH 1%) kedalam larutan methylen biru biasa.
Cara kerja :
1.	Buat sediaan dari bahan yang diperiksa, keringkan pada suhu kamar atau bantuan nyala api spiritus, fiksasi 3 x diatas api.
2.	Tuangi dengan larutan pulas methylen biru loffler, biarkan selama 20-30 detik, dengan methylen biru biasa biarkan 3 menit.
3.	Cuci dengan air kran, keringkan pada suhu kamar (kertas saring).
4.	Lihat dengan mikroskop memakai lensa rendam minyak
Hasil : bakteri berwarna biru
Latar belakang biru muda.
Susunan larutan methylen biru
Biasa : - kristal methylen biru 0,3 gram
- alcohol 95% 30 ml
- air suling 100 ml
Loffler : tambahkan 1 ml KOH 1 % kepada methylen biru biasa.

Pewarnaan Gram
Pewarnaan ini pertama kali dikembangkan oleh Hans Christian Gram seorang histology bangsa swedia. Pewarnaan cara gram ini hampir dilakukan setiap hari dilaboratorium bakteriologi dan mikrobiologi. Sangat penting membantu diagnosis spesies dari bakteri penyebab penyakit. Pada umumnya hampir semua bakteri dapat diwarnai dengan Gram bakteri dibagi atas 2 golongan : Gram positif dan Negatif dan reagensia

Prinsip pewarnaan :
1.	Pewarnaan dengan karbol gentian violet (berwarna ungu)
2.	Direkatkan dengan larutan mordan, yaitu larutan lugol.
3.	Tuangi dengan zat peluntur (decolorisasi) yaitu alcohol 95%
4.	Bubuhi dengan zat warna penutup (countur staining) fuchsin.

Susunan zat warna
1.	Larutan gentian violet 5%
-	bubuk (kristal) gentian violet : 5 gram
-	alcohol 95 % : 95 ml
2.	Larutan penol (karbol) 5 %
-	phenol cair : 5 ml
-	air suling : 95 ml.
3.	Larutea fuchsin 5 %
-	bubuk ( kristal) fuchsin : 5 gram
-	alcohol 95 % : 95%
-	alcohol 95 % : 95 ml
Larutan pakai : 10 ml larutan fuchsin 5 % +90 ml air suling
4.	Larutan lugol
jodium 1 gram + kalium jodida 2 gram + 300 ml air suling
Selain fuchsin, safranin dapat dipakai sebagai counter staining (zat wama penutup). Susunannya adalah sebagai berikut : safranin 1 gram + 4 ml alcohol 95 % + air suling 360 ml.

Cara kerja:
1.	Buat sediaan bakteri pada kaca benda, keringkan dan fiksasi 3 kali diatas nyala api Bunsen / spiritus.
2.	Tuangi dengan larutan karbol gentian violet, biarkan 3-5 menit
3.	Cuci dengan air, bubuhi lugol, biarkan selama 2-3 menit
4.	Tuangi dengan alcohol hingga zat warna violet tidak luntur
5.	Cuci dengan air, tuangi dengan larutan fuchsin selama 1-2 menit
6.	Cuci lagi dengan air hingga bersih, keringkan pada suhu kamar atau dengan kertas saring rangkap dua.
7.	Lihat dengan mikroskop memakai lensa rendam minyak.
Hasil : bakteri gram positif berwarna ungu (violet)
bakteri gram negatif berwarna merah jambu (rose)

Kesalahan yang mungkin terjadi pada pengubaran
1.	Terlalu lama diwamai dengan gentian violet.
2.	Terlalu lama dicuci dengan alcohol (decolorinast)
3.	Menggunakana larutan zat-zat Warna yang telah lama, sudah mengkristal, larutan zat warna sebelum dipakai hendaknya disaring lebih dahulu.

PEWARNAAN GRAM

Gram Positif :
Batang : Bacillus ,Clostridium, Mycobacterium, Corynebacterium
Kokkus : Stapilokokus, Streptococcus, Pneumokokus, Gaffkya

Gram Negatif :
Batang : Salmonella, Shigella, Vibrio, Hemophilus
Kokkus : Gonococus, Meningikokus

Pewarnaan tahan asam
Ada beberapa mikroorganisme tidak dapat diwarnai dengan cara sederhana ataupun Gram, karena dindingnya tebal hingga sukar ditembus oleh zat warna. Bakteri seperti ini memerlukan pengubaran istimewa atau khusus, yaitu memerlukan larutan zat warna yang keras misalnya didalam phenol. Kadang-kadang diperlukan pemanasan agar supaya zat warna mudah meresap kedalam tubuh bakteri. Bakteri tahan asam, adalah mikroorganisme yang menangkap zat warna sukar dilunturkan atau tahan terhadap pencucian dengan asam-asam mineral (HCL dan H2SO4) dan alcohol
Contoh bakteri tahan asam : M. tbc, M. lepra, Safrofit.
Basil TBC misalnya mempunyai dinding yang kuat, dua lapis dan mengandung lipoid dan asam mycolat.
Pewarnaan bakteri tahan asam dapat dilakukan dengan Ziehl Neelsen (cara panas) dan Kinyoun-Gabbet (cara dingin)
Prinsip kerjanya sama dengan pengubaran Gram yaitu : Karbol fuchsin sebagai zat warna, dibubuhi dengan zat warna penutup (HCL, H2SO4 dan alcohol), kemudian diwarnai dengan zat pewarna penutup (methylen biru, malachite green)

CARA ZEHL NEELSEN CARA ZIEHL NEELSEN
1.	Buat sediaan dahak (sputum) merata pada kaca benda, keringkan pada suhu kamar, kemudian fiksasi 3 kali diatas nyala api.
2.	Bubuhi karbol fuchsin hingga menutupi seluruh permukaan kaca benda, panasi hingga keluar uap, biarkan selama 5 menit.
3.	Bilasi dengan air, kemudian bubuhi dengan 3 % HCL-alkohol hingga warna fuchsin tidak luntur lagi dari sediaan.
4.	Bilasi dengan air, tuangi dengan 0,5 % methylen biru 30 detik
5.	Cuci dengan air, keringkan diudara atau dengan kertas saring
Hasil : Basil tahan asam (BTA) : merah tua
Tidak tahan asam : biru

REAGENSIA
1.	Fuchsin jenuh dalam alcohol	: basic fuchsin 3 gram + alcohol 95%: 100 ml
2.	Larutan phenol 5% 		: phenol cair 5 ml + air suling 100 ml
3.	Karbol fuchsin pakai		: fuchsin jenuh 10 ml +5% phenol 90 ml
4.	3 % HCL-alkohol		: HCL 3 ml + alcohol 95 % 97 ml
5.	Larutan methylen biru 0,1 %	: M.biru 0,1 g + air suling 100 ml

CARA KINYOUN – GABBET
1.	Sediaan yang telah dikeringkan, fiksasi 3 kali diatas nyala api, kemudian tuangi dengan larutan Kinyoun dan biarkan selama 3-5 menit (minimum 3 menit)
Larutan Kinyoun : Basic fuchsin 4 gram, phenol 8 gram, alcohol 95-96 % 20 ml dan air suling 100 ml : 120 ml
2.	Cuci dengan air kran selama kurang 1/2, kemudian dibubuhi dengan larutan Gabbet, biarkan selama 1 menit.
Larutan Gabbet : methylen biru 1 gram, H2S04 96 % 20 ml, alcohol 95-96 % 30 ml dan air suling 50 ml.
3.	Cuci dengan air kran, selanjutnya keringkan pada temperatur kamar (kertas saring), lihat dengan mikroskop.
Hasil : Basil tahan asam (BTA)	: merah muda
Tidak tahan asam 		: biru muda
Pembesaran mikroskop sebaiknya digunakan pembesaran 10 x 100

Pewarnaan Spora menurut cara Klein
1.	Buatlah suspensi tebal dari kuman yang akan diperiksa hingga menyerupai air susu.
2.	Tambahkan karbol fuchsin Ziehl Neelsen sama banyaknya, kemudian campuran panaskan dengan api kecil selama 6 menit atau didalam penangas air 80°C selama 10 menit
3.	Buat sediaan dari suspensi tadi, keringkan dan rekatkan kemudian celupkan kedalam larutan H2S04 1% selama 2-3 detik.
4.	Cuci dengan air, tuangi dengan larutan methylen biru 2-4 menit.
5.	Cuci lagi dengan air, keringkan diudara dan dilihat dengan mikroskop memakai lensa rendam minyak.
Hasil : badan bakteri berwarna biru
Spora bakteri berwarna merah.
',
                'gambar' => '',
            ],
            [
                'id' => 36,
                'id_mapel' => 1,
                'judul_materi' => 'Fungsi Fiksasi',
                'detail_materi' => '1.	Mencegah mengkerutnya globula-globula protein sel
2.	Mempertinggi sifat reaktif gugusan-gugusan (gugusan karboksil, amino primer)
3.	Merubah afinitas (daya lekat) cat
4.	Dapat terjadinya otolisis sel
5.	Dapat membunuh kuman secara cepat dengan tidak menyebabkan perubahan-perubahan bentuk atau strukturnya
6.	Melekatkan kuman diatas gelas kaca
7.	Membuat sel-sel lebih kuat

Pewarnaan difteri menurut Albert

Pewarnaan ini digunakan untuk melihat granula basil difteri, selain cara Albert dapat juga dilakukan dengan cara Neisser.
1.	Buat sediaan kuman seperti biasa, rekatkan diatas nyala api kemudian bubuhi larutan Albert, biarkan selama 3-5 menit
Larutan Albert: Toluidin biru 0,15 g, Malachiet hijau 0,20 g, asam asetat pekat 1 ml, alcohol 95 % 2 ml dan air suling sebanyak 100 ml.
2.	Cuci dengan air kran mengalir pelan-pelan, bubuhi dengan larutan lugol, biarkan selama 1 menit.
Larutan Lugol : jodium 1 gram + Kj 2 gram dan air suling 300 ml
3.	Lugol dibuang kemudian keringkan dengan kertas saring, periksa dengan mikroskop memakai lensa rendam minyak.
Hasil : badan bakteri berwarna hijau
Butir granula berwarna hitam kebiru-biruan.
',
                'gambar' => '',
            ],
            [
                'id' => 37,
                'id_mapel' => 1,
                'judul_materi' => 'Sediaan',
                'detail_materi' => 'Untuk mengamati mikrob dengan mikroskop cahaya, dapat disiapkan tiga macam sediaan yaitu :
1.	Sediaan basah (sediaan hidup yang tidak diwarnai)
2.	Sediaan hidup yang diwarnai
3.	Sediaan yang dimatikan dan diwarnai

A.	SEDIAAN HIDUP YANG TIDAK DIWARNAI
Sediaan semacam ini digunakan dalam bidang mikrobiologi, terutama karena mungkinkan dilakukannya pengamatan bentuk dan ukuran organisme secara individu. Pengelompokan sel-sel bakteri, serta mengetahui apakah suatu organisme itu dapat bergerak atau tidak dalam keadaan alamiah yang tidak terganggu.
Dalam mengadakan pengamatan terhadap gerak bakteri bakteri harus bisa dibedakan dengan gerak Brown. gerak sejati biasanya berupa gerakan progresif dan terarah (sering kali amat cepat), gerakan ini disebabkan karena mikroba tersebut mempunyai flagel. Sedangkan gerak Brown merupakan suatu gerakan yang dapat menggetarkan partikel-partikel secara acak atau terarah, karena terus menerus kena pukulan molekul-molekul kecil tak terlihat yang ada dalam cairan.
Seringkali dalam pengamatan, terjadi kekeliruan antara gerakan sejati dengan gerakan semu yang bergerak karena disebabkan adanya arus cairan. Bila preparat yang bersifat basah mengandung udara atau tidak bersegel dengan baik, maka arus udara dapat menyebabkan timbulnya arus cair, sehingga mikroba yang kita amati akan terlihat berduyun-duyun mengalir mengikuti arus cairan tersebut.
Sediaan hidup dibagi dapat dibedakan menjadi 2 :
a.	Sediaan tetes tegak
b.	Sediaan tetes bergantung

B.	MACAM-MACAM SEDIAAN
1.	Sediaan tetes tegak
Sediaan tetes tegak ada dua macam :
-	tetes tegak tanpa kaca penutup
-	tetes tegak dengan kaca penutup
Untuk membuat sediaan tetes tegak, diperlukan kaca gelas dan kaca penutup. Suspensi bakteri yang akan diamati diletakkan ditengah kaca gelas, kemudian diamati dengan mikroskop (untuk sediaan tetes tegak tanpa kaca penutup) sedangkan untuk sediaan tetes tegak dengan kaca penutup. Sebelum diamati, suspensi bakteri ditutup dahulu dengan kaca penutup, yang sebelumnya pada bagian pinggirnya diolesi dengan vaselin.
1.	Tetes bergantung
Untuk membuat preparat ini, diperlukan gelas kaca yang cekung, gelas penutup dan vaselin.
Cara pembuatan sediaan tetes bergantung :
-	Diambil gelas penutup yang bersih dan bebas lemak
-	Pindahkan satu tetes suspensi kuman pada gelas penutup tersebut
-	Ambillah gelas kaca cekung, bagian keliling cekung diolesi dengan vaselin
-	Letakkanlah gelas kaca cekung tersebut diatas gelas penutup sedemikian rupa sehingga bagian yang cekung terletak persis diatas tetesan kuman.
-	Baliklah dengan cepat gelas kaca cekung tersebut. Sehingga gelas penutup posisinya terdapat diatas, sehingga tetesan kuman posisinya menggantung.
Untuk melihat gerak kuman dengan cara tetes tegak atau tetes bergantung, dapat digunakan mikroskop dengan obyektif 45 kali.
Catatan :
-	Preparat hidup yang ditutup dengan gelas penutup, umumnya lebih baik bila dibandingkan dengan yang tanpa diberi gelas penutup, hal ini karena bahan yang diperiksa tidak lekas kering, tidak begitu dipengaruhi oleh aliran udara luar, mempunyai ketebalan yang sama dan menekan terjadinya infeksi.
-	Sediaan tetes bergantung merupakan cara yang terbaik untuk melihat gerak bakteri, tetapi tidak dipakai sebari-hari karena kurang praktis.
2.	Sediaan hidup yang diwarnai
Biasanya digunakan untuk pemeriksaan Protozoa (Amoeba, flagellata dan ciliata) sediaan ini biasa disebut juga dengan pengecatan vital.
Cat-cat yang dipakai antara lain :
-	larutan biru metilen 1 %
-	larutan eosin 2%
-	Lugol dengan formula : kristal jodium	: 1 gram
       kristal Kj		: 2 gram
       aquadest		: 300 cc
Ketiga cat ini tidak boleh mengandung alcohol, karena alcohol dapat membunuh protozoa
3.	Sediaan yang dimatikan dan diwarnai
Sediaan ini berfungsi untuk :
a.	Melihat bentuk bakteri
b.	Melihat ukuran bakteri
c.	Spora bakteri
d.	Kapsul bakteri
e.	Sifat bakteri ( gram positif / gram negatif)
Dalam pembuatan sediaan ini, kuman dimatikan terlebih dahulu dengan cara khusus dan dicat dengan cat yang khusus pula sesuai dengan tujuan pemeriksaanannya.
Untuk pembuatan sediaan mati yang dicat ini, akan dibahas dalam bab tersendiri tentang pengecatan.
',
                'gambar' => '',
            ],
            [
                'id' => 38,
                'id_mapel' => 1,
                'judul_materi' => 'Perbenihan Media',
                'detail_materi' => 'Fungsi media
Media adalah substansi yang berisi zat-zat makanan yang diperlukan untuk tumbuhnya bakteri, fungsi media ini dilaboratorium bakteriolog adalah :
1.	Untuk pembiakan dan mengisolasi bakteri
2.	Pengujian sifat-sifat fisiologi danreaksi biokimia
Zat-zat makanan yang diperlukan bakteri sangat bervariasi. Ada senyawa-senyawa organic dan anorganik yang sederhana maupun majemuk. Unsur-unsur anorganik dapat disebutkan : Na, K, Ca, Mg, Fe, CI, S dan P. unsur-unsur C, H, O dan P diperlukan untuk penyusunan sitoplasma bakteri.
Banyak bakteri memerlukan zat-zat tambahan seperti vitamin B kompleks, asam-asam amino, serum dan darah. Sedangkan bakteri patogen misalnya tumbuhnya sangat baik dalam media yang berisi ekstrak daging.
Syarat-syarat media
1.	Cukup berisi zat-zat makanan yang diperlukan
2.	Tidak mengandung zat-zat penghambat pertumbuhan bakteri
3.	Steril dan pH yang sesuai dengan pertumbuhan bakteri
Susunan umum media
Untuk mendapatkan unsur-unsur yang diperlukan dalam pertumbuhan bakteri, maka susunan umum media adalah sebagai berikut :
1.	Ekstrak daging
Ekstrak daging kaya dengan protein yang sangat diperlukan dalam pertumbuhan bakteri. Di laboratorium media yang mengandung ekstrak daging ini disebut kaldu atau buillon.
2.	Pepton
Pepton diperoleh dari prptein, rasanya pahit, jenis pepton yang banyak digunakan di laboratorium ialah bacto pepton, pepton witte, pepton ini gunanya sebagai sumber Nitrogen dan sumber energi.
3.	Gula-gula
Jenis gula-gula banyak digunakan ialah : dextrose (glukosa), sakarosa, mannit, laktosa, maltosa dan sebagainya. Gula ini diperlukan bakteri sebagai sumber hydrat arang (energi)
4.	Agar-agar
Agar-agar adalah semacam hydrat arang diperlukan dari ganggang, mencair pada temperatur 95°C dan membeku pada temperatur dibawah 40°C. guna agar-agar hanya untuk mengeraskan pernihan. Gelatin dapat juga dipakai sebagai bahan pengental media yang digunakan didaerah beriklim dingan (eropa), mencair pada suhu 23°C dan membeku pada suhu dibawah 15°C, gelatin diperoleh dari rebusan tulang-tulang, jadi gelatin itu serupa perekat.
5.	Garam-garam
Pada umumnya dipaki garam-garam dari NaCl, phospat dan karbonat. Guna NaCL untuk mengatur tekanan osmotis, sedangkan garam-garam phospat dan karbonat sebagai sumber buffer (mengatur pH media)
6.	Zat-zat warna
Zat-zat warna yang ditambahkan kemedia untuk mencegah tumbuhnya suatu bakteri, sedangkan bakteri lain tumbuh dengan subur. Kedalam perbenihan TBC misalnya ditambahkan zat warna malachite green untuk menghambat tumbuhnya lain sedangkan basil TBC tumbuh dengan subur
7.	Serum atau darah
Kebanyakan bakteri dapat tumbuh baik dengan dasar makanan yang telah disebutkan diatas, akan tetapi beberapa bakteri patogen, misalnya basil TBC, Brucella abortus, Pneumococcus, Gonococcus memerlukan zat makanan tambahan berupa serum atau darah yang tidak lagi mengandung fibrinogen.
Dan sebagainya

MEDIUM POKOK ( INDUK)
Banyak kita kenal jenis media yang dipakai dilaboratorium. Pada umumnya sebagian besar dari media ini adalah variasi dari medium pokok ini, medium pokok dan banyak digunakan dalam pekerjaan rutin ialah kaldu cair (bouiilon ), kaldu agar dan air

Air pepton.
Adalah medium yang paling sederhana, susunannya terdiri dari :
Pepton 10 gram, NaCL 5 gram dan air 1 liter, pH 7,1 - 7,3
Kaldu ( bouillon)
Larutan bouillon dapat dibuat dengan komposisi sebagai brikut :
a.	air kran	: 1 liter
pepton	: 10 gram
NaCL	: 5 gram
Ekstrak	: 3 gram
b.	air daging	: 1 liter
pepton		: 10 gram
NaCL		: 5 gram
Setelah dimasak diatas api hingga bahan-bahan larut semuanya, saring. Sterilkan dengan autoklaf pada suhu 120°C selama 20 menit. Tetapkan pH berkisar 7
Jika diperlukan perbenihan padat, tambahkan agar-agar 30 gram perliter, maka kita mendapatkan agar kaldu. Jika diperlukan agar darah maka kepada agar kaldu kita tambahkan eritrosit domba 10%

Menyediakan air daging
Jika kita tidak mempunyai ekstrak daging, bouillon dapat kita buat dengan menyediakan air daging, caranya sebagai berikut :
Timbang 500 gram daging yang tidak berlemak, rendam dalam 1000 ml air suling, biarkan 24 jam dalam lemari es. Keesokan harinya dimasak hingga mendidih, biarkan 1 jam di saring dengan kain mori atau kasa yang halus. Genapkan volumenya menjadi 1000ml kembali.
Tambahkan 10 gram pepton, 5 gram NaCl, lalu panasi suspensi 100°C selarna 20menit. Genapkan lagi isisnya hingga 100ml, sterilkan dalam autoklaf 120°C selama 20 menit, tetapkan pH berkisar 7. Larutan inilah dinamakan bouillon (kaldu)
Perbenihan padat
Untuk mengisolasi bakteri agar supaya didapatkan kultur murni digunakan berbaagai macam perbenihan padat. Mengisolasi bakteri ini kerapkali kita pilih salah satu cara yang dibawah ini.
1.	Perbenihan selektif (selektif differensial)
Pada perbenihan selektif ini kita dapat membedakan tumbuhnya koloni-koloni satu bakteri dengan koloni-koloni bakteri lain. Dengan demikian kita mudah mengisolasi atau mengasingkan bakteri-baktei penyakit dari suatu bahan pemeriksaan, misalnya tinja.
Contoh perbenihan ini : bakteri tipus dan paratipus koloninya tidak berwarna, sedangkan bakteri usus (koli ) merah jambu.
2.	Perbenihan ekslusif
Pada perbenihan ini suatu spesies bakteri tumbuh dengan baik sedangkan bakteri dihambat atau dicegah pertumbuhannya. Perbenihan ini dilaboratorium sering disebutkan perbenihan khusus.
Contoh :
-	Perbenihan Lowenstein untuk basil TBC
-	Perbenihan Telluriat untuk kuman dipteri
-	Perbenihan TCBS untuk kuman vibrio
-	Perbenihan Wilson blair untuk kuman tipus
-
Perbenihan cair
1.	Perbenihan persemian ( enrichment)
Media ini bertujuan untuk mempebanyak kuman terlebih dahulu sebelum ditanam keperbenihan padat
Contoh : - Alkalis pepton persemaian untuk kuman vibrio
  - Empedu pepton persemaian untuk kuman tipus
2.	Perbenihan pengangkutan (transformasi medium)
Media ini biasanya digunakan untuk membawa bahan (spesimen) pemeriksaan dari tempat yang jauh ke laboratorium. Jika bahan tidak ditanam kemedia pengangkutan mungkin banyak kuman yang mati. Dalam media ini jumlah bakteri tetap, tidak berkembang biak dan tidak mati. Contoh media pengangkutan adalah Carry Blair.
Carry blair dapat digunakan untuk pengangkutan tinja, guna pemeriksaan : vibrio kolera, Salmonella, Shigella dan coli pathogen

Tumbuhnya bakteri pada media padat
	Pada media padat tumbuhnya bakteri dalam bentuk koloni. Tiap spesies bakteri menunjukkan koloni yang khas. Ada yang smooth (licin), rough (kasar) dan mucoid (berlendir). Ada juga tumbuhnya merayap tidak bentuk koloni, misalnya kuman proteus jika diperhatikan pinggir koloni, ada beberapa kemungkinan :
1.	Pinggir rata		: bakteri tipus dan pertaipus
2.	Pinggimya bergerigi	: Streptococcus
3.	Pinggirnya berombak	: Bacillus anthrax
4.	Pinggirnya bercabang	: Bakteri mycoides (bakteri tanah)
dan sebagainya
',
                'gambar' => '',
            ],
            [
                'id' => 39,
                'id_mapel' => 1,
                'judul_materi' => 'Inokulasi',
                'detail_materi' => 'Inokulasi merupakan usaha penanaman mikroba kedalam suatu media, menurut wujudnya dikenal 3 macam media yaitu :
1.	Media cair
2.	Media padat
3.	Media setengah padat

A.	INOKULASI PADA MEDIA CAIR
Tujuannya adalah untuk memperbanyak dan mengidentifikasi bakteri, misalnya penanaman pada nutrien broth, media gula.
Sifat-sifat koloni pada media cair
Media cair pada dasarnya diperoleh dengan tidak mencampurkan agar-agar atau gelatin. Didalam media cair, bakteri dapat diketahui sifatnya terhadap udara. Demikian pula sifat-sifat koloninya akan tampak berbeda-beda. Permukaan medium dapat memperlihatkan bentuk serabut, cincin, langit-langit atau selaput.

Pembacaan hasil inokulasi pada media cair :
Untuk melihat adanya pertumbuhan bakteri, cukup dilihat apakah media menjadi keruh atau tidak. Jika jernih atau tetap berarti tidak tumbuh, tetapi jika untuk memperbanyak dan untuk identifikasi, disamping dilihat keruh dan tidaknya perlu pula lihat ada tidaknya perubahan warna pada media.

B.	INOKULASI MEDIA PADAT DALAM TABUNG
Tujuan :
1.	Untuk memperbanyak bakteri dalam rangka untuk identifikasi
2.	Untuk identifikasi saja
3.	Untuk memperbanyak koloni sekaligus untuk identifikasi.

Sifat koloni pada media agar miring dalam tabung.
Sifat koloni dapat dilihat dari bentuk dan tepinya
Sifat-sifat koloni dapat dinyatakan dengan :
-	Serupa pedang
-	Serupa duri
-	Serupa tasbih
-	Serupa titik-titik
-	Serupa batang
-	Serupa akar

Sifat koloni hasil penanaman pada media agar tegak dalam tabung dan sifat-sifat koloni

tusukan dalam gelatin.
Adapun bakteri yang dapat mengencerkan gelatin, ada pula bakteri yang tidak mampu mengencerkan gelatin, sehingga bentuk koloninya juga berbeda-beda. Bentuk koloni yang tidak mengencerkan gelatin berbeda satu sama lain. Demikian pula bentuk koloni yang mengencerkan gelatin.

Bila dilihat dari samping, maka bentuk koloni yang tidak mengencerkan gelatin, dapat serupa pedang, serupa tasbih, bertonjol-tonjol, berjonjot, serupa batang. Jika bakteri mampu mengercerkan gelatin, maka bentuk koloninya dapat serupa kawah, serupa mangkuk, serupa corong, serupa pundi, berlapis.

Pembacaan hasil penanaman :
Tergantung dari media yang ditanami. Apabila untuk memperbanyak koloni, hanya dilihat ada pertumbuhan atau tidak. Tetapi bila juga untuk identifikasi, dilihat ada tidaknya perubahan warna disamping ada tidaknya koloni bakteri yang tumbuh dan bentuk-bentuk pertumbuhan koloninya.

C.	INOKULASI PADA MEDIA PADAT
Tujuan untuk menyebarkan koloni bakteri dari spesimen, merata pada permukaan medium, sehingga mudah dipisahkan atau diisolasi bakteri yang satu dengan yang lainnya.
Flora mikroba di lingkungan mana saja, pada umumnya terdapat dalam populasi campuran. Boleh dikatakan amat jarang mikroba dijumpai sebagai satu spesies tunggal di alam. Untuk mencirikan dan mengidentifikasi suatu spesies mikroorganisme tertentu, pertama-tama spesies tersebut harus dapat dipisahkan dari organisme lain yang umun dijumpai dalam habitatnya, lalu ditumbuhkan menjadi biakan murni. Biakan Murni ialah biakan yang sel-selnya berasal dari pembelahan satu sel tunggal.
Semua metoda mikrobiologik yang digunakan untuk menelaah dan mengidentifikasi mikroorganisme, termasuk penelaah ciri-ciri cultural, morfologik, fisiologik, maupun serologic, memerlukan suatu populasi yang terdiri dari satu macam mikroorganisme saja.

Metode cawan tuang
Cara lain untuk memperoleh koloni murni dari populasi campuran mikroba adalah dengan mengencerkan spesimen dalam medium agar yang telah dicairkan dan didinginkan (50°C) yang kemudian dituangkan kedalam cawan. Karena konsentrasi sel mikroba didalam spesimen pada umumnya tidak diketahui sebelumnya, maka pengenceran perlu dilakukan beberapa tahap, sehingga sekurang-kurangnya satu diantara cawan-cawan tersebut mengandung koloni-koloni terpisah diatas permukaan ataupun didalam agar.
Metode ini memboroskan bahan waktu, namun tidak memerlukan keterampilan yang terlampau tinggi.
Sifat-sifat yang perlu diperhatikan pada medium plate adalah :
a.	Besar kecilnya koloni
Ada koloni yang hanya serupa titik, ada pula yang melebar sampai menutup permukaan medium.
b.	Bentuk
Ada koloni yang bulat, ada yang memanjang, ada yang tepinya rata ada yang tepinya tidak rata.
c.	Kenaikan permukaan
Ada koloni yang rata saja dengan permukaan medium, ada pula yang timbul yaitu menjulang tebal diatas permukaan medium.
d.	Halus kasarnya permukaan
Ada koloni yang permukaannya halus saja, ada yang permukaannya kasar, tidak rata
e.	Wajah permukaan
Ada koloni yang permukaannya mengkilat, ada yang permukaannya suram
f.	Warna
Kebanyakan koloni bakteri berwarna keputihan atau kekuning-kuningan. Akan tetapi ada juga yang kemerah-merahan, coklat jingga, biru, hijau, ungu.
g.	Kepekatan (konsisten)
Ada koloni yang lunak seperti lendir, ada yang lunak seperti mentega, ada yang keras dan kering

Untuk mengisolasi bakteri dari suatu carapuran, ada dua macam teknik yaitu :
1.	Teknik cawan gores
2.	Teknik cawan tuang

2. Teknik cawan gores
Metode ini mempunyai dia keberuntungan, yaitu menghemat bahan dan waktu. Namun untuk memperoleh hasil yang baik diperlukan keteRampilan yang biasanya diperoleh dari suatu pengalaman. Metode cawan gores yang dilaksanakan dengan baik, kebanyakan akan menyebabkan terisolasinya seperti yang diinginkan.
Sukar untuk dibayangkan betapa kecil ukuran sel bakteri, satu ukuran bakteri berukuran kurang lebih 1/10.000 cm. Jadi jika kita menggoreskan satu lup inokulasi yang mengandung bakteri pada permukaan agar nutrien di dalam cawan petri, pada hakekatnya telah menaruh puluhan ribu sel pada medium tersebut. Bila menggunakan teknik menggores yang baik, maka pada suatu area tertentu pada permukaan medium yang digores, sel-sel bakteri akan terpisahkan satu dari lainnya. Sel tunggal yang dipisahkan seperti ini disebut sel induk. Pada waktu inkubasi setiap sel induk membelah diri dengan cara biner dalam 20 - 30 menit menjadi dua sel anak, lalu pada 20 - 30 menit berikutnya setiap sel anak membelah diri lagi sehingga terdapat 4 sel anak. Sel-sel baru itu terus membelah diri dalam jumlah eksponensial menjadi bermilyar-milyar sel anak yang saling bertumpukan diatas dan disampingnya membentuk suatu koloni. Bila setelah waktu inkubasi koloni-koloni itu saling terpisahkan cukup jauh sehingga tidak bersentuhan, maka diperoleh koloni murni
Bagi kebanyakan bakteri, setelah masa inkubasi setelah 4 jam satu koloni murni dapat terdiri dari 50 - 72 generasi sel yang timbul dari satu sel induk tunggal, dengan perkataan lain satu koloni murni terdiri dari bermilyar-milyar sel anak.

',
                'gambar' => '',
            ],
            [
                'id' => 40,
                'id_mapel' => 1,
                'judul_materi' => 'Struktur Halus Bakteri (Sitologi Bakteri)',
                'detail_materi' => 'Untuk mengetahui sifat-sifat bakteri, sebaiknya kita mengetahui lebih dahulu mengenai struktur bakteri (sitologi bakteri). Yang dibicarakan dalam struktur bakteri ini, antara lain dapat disebutkan adalah :
1.	Susunan tubuh
Zat-zat terdapat dalam badan bakteri ialah : air, protein (albumin, globulin), hydrat arang (polisakarida), lemak, lipid. Banyaknya protein yang terdapat dalam tubuh bakteri, tergantung kepada perbenihan dimana bakteri itu tumbuh.
Garam-garam yang terdapat pada bakteri adalah : Natrium (Na), Kalium (K), Kalsium (Ca), Phospor (P), Shulpur (S), Chlor (CI), dan sebagainya.
2.	Bangun sel
Bakteri terdiri dari satu sel, lazimnya orang berpendapat bahwa sel bakteri itu mempunyai dinding luar, dan protoplasma ( sitoplasma ) sebagai inti sel. Dinding luar terdiri dari 3 lapis, berturut-turut dari luar kedalam yaitu lapisan lendir, dinding sel dan membran sitoplasma.
Dinding sel ini sangat tipis, namun dinding inilah yang memberikan bentuk kepala sel bakteri. Bentuk sel bakteri itu tetap, zat-zat yang menyusun dinding sel pada umumnya terdiri dari bahan-bahan organic seperti : Selulosa, hemiselulosa dan khitin (karbohydrat yang mengandung unsurN). Adanya zat-zat itulah yang menyebabkan kebanyakan sarjana menggolongkan bakteri kedalam dunia tumbuh-tumbuhan

Fungsi dinding sel
1.	Memberi bentuk kepada sel
2.	Mengatur sel dari luar
3.	Mengatur keluar masuknya zat-zat kimia (semipermeable)
4.	Memegang peranan penting dalam pembelahan sel.
Protoplasma adalah bagian utama dari sel, bersifat koloid dengan zat-zat yang terdapat didalamnya seperti : Karbohydrat, protein, enzim-enzim, kalsium karbonat, belerang, volutin dan sebagainya. Protoplasma dikelilingi oleh suatu membran tipis, elastis, dinamakan membran protoplasma (sitoplasma), nama lain plasmodium atau hialin. Palsmolema juga memegang peranan dalam pembelahan sel. Setelah luar membran protoplasma ini terdapat dinding sel yang sebenarnya.
3.	Lapisan lendir, kapsel
Pada umumnya bakteri mempunyai lapisan lendir yang menyelubungi sel seluruhnya. Jika lapisan lendir ini cukup tebal dinamakan kapsel (simpay ). Kapsel bukanlah suatu integrasi dari sel, akan tetapi sebagai hasil sekresi dari bakteri. Lapisan lendir ini tidak mudah menangkap zat warna dan tebalnya tidak sama pada semua bakteri
Kapsel pada umumnya terdiri dari karbohydrat (Pneumokokus ), akan tetapi ada juga terdiri dari protein ( Bacillus antrax)
Guna kapsel : untuk memberikan perlindungan terhadap kekeringan, seakan-akan merupakan suatu benteng pertahanan.
Pada beberapa spesies kuman, selubung ini bertalian dengan virulensinya. Pneumococcus misalnya, yang berkapsel adalah virulen (ganas) sedangkan yang tidak berkapsel tidak virulen lagi (misalnya ditumbuhkan dalam media di laboratorium ). Contoh bakteri yang berkapsel dapat disebutkan : Pneumococcus, Klebsiella, Bacillus anthrax

4.	Flagell (bulu cambuk)
Flagel adalah benang protoplasma yang kuat, tebalnya kira-kira 0,1 mikron. Flagel diangkat dari kata Greek flagellum" artinya kipas kecil.
Flagel digunakan oleh bakteri untuk bergerak (gerak aktip). Golongan basil dan spiril dapat bergerak, sedangkan golongan kokus tidak dapat bergerak karena tidak mempunyai flagel. Pada bakteri ada yang mempunyai kedua jenis rambut berikut, yaitu :
a. flagel (bulu cambuk) sebagai alat untuk bergerak
b. fimbria sebagai alat untuk melekat.

Flagel berasal dari sitoplasma, sedangkan fimbria berasal dari dinding sel. Tempat darimana asal flagel atau pangkalnya dinamakan rizoblast (dibawah membran sel). Berdasarkan tempat kedudukan flagel pada bakteri dapat diklasifikasikan sebagai berikut :
a.	Flagel monotrik, jika satu flagel terdapat pada satu ujung.
b.	Flagel lofotrik, jika terdapat seberkas flagel ( lebih dari satu flagel ) pada satu ujung atau kedua ujung bakteri
c.	Flagel anfitrik, jika terdapat satu flagel pada masing-masing uiune halten
d.	Flagel peritrik, jika flagel terdapat banyak mengelilingi tubuh bakteri.
e.	Atrik, adalah bakteri yang tidak mempunyai flagel

Ada juga pendapat mengadakan klasifikasi saja mengenai kedudukan flagel, yaitu flagel terminal yang terdapat pada ujung saja seperti kuman Vibrio, Sprillium dan Pseudomonas dan flagel lateral yang meliputi tubuh bakteri, seperti halnya pada Escherichia coli, Proteus vulgaris serta pada beberapa Bacillus dan Clostridium yang dapat bergerak.

Granula
Granula terdapat dalam sitoplasma terjadi karena pemisahan benda-benda mati. Hanya dijumpai pada stadium tertentu dalam pertumbuhan suatu bakteri. Granula ini bukanlah sebagai inti, akan tetapi sebagai tempat (tabungan) bahan makanan untuk bakteri, yang berisi asam nuclein dan disebut titik-titik volutin. Yang mula-mula menemukan granula ialah Babes dan Emst pada kuman difteri, makanya disebut granula Babes Ernst. Berdasarkan zat-zat yang terdapat dalam granula, maka granula dapat dibedakan atas :
1.	Granula metakhromatik yang terdiri atas volutin yang dinamakan granula Babes dan Ernst, terdapat pada kuman difteri. Dengan pewarisan Neisser, granula berwarna biru -hitam, sedangkan badan bakteri berwarna kuning.
2.	Granula lemak, adalah granula yang mengandung lemak dan berwarna kuning bila diwarnni dengan sudan III
3.	Granula glycogen, adalah granula yang mengandung glycogen dan berwarna coklat bila dibubuhi jodium.
5.	Inti (nucleus)
Menurut teori tiap sel mempunyai inti. Inti penting dalam proses-proses hidup, misalnya reproduksi, metabolisme dan sebagainya. Sejak lama menjadi pertanyaan para sarjana, apakah bakteri itu mempunyai inti. Mengenai inti bakteri banyak pendapat yang dikemukakan, antara lain dapat disebutkan adalah :
a.	Bakteri tidak mempunyai atau apapun yang menyerupai inti.
b.	Isi sel seluruhnya itulah inti, sedangkan protoplasmanya hanya sedikit benar, merupakan lapisan tipis membungkus inti.
c.	Kemungkinan tersebar bercampur homogen dalam sitoplasma, karena terdapat bahan-bahan inti (kromatin) yang tidak mempunyai membran atau dinding inti. Inti yang tidak mempunyai membran disebut "prokaryon". Sedangkan inti yang membran disebut "eukaryon", terdapat pada inti sel tumbuhan tingkat tinggi.
Anggapan bahwa zat inti tersebar diseluruh sel pertama kali diselidiki oleh fuelgen. Dengan pengecatan fuelgen maka zat ini warnanya merah muda atau merah jambu dan terdapat diseluruh sel bakteri.
6.	Pembentukan spora (endospora)
Spora pada bakteri dinamakan endospora, karena ia terbentuk didalam bakteri. Biasanya istilah spora itu dipakai untuk menyebutkan alat-pembiak yang terdapat pada jamur, ganggang, lumut dan paku-pakuan.
Istilah spora pada bakteri mempunyai arti yang lain. Pembentukan spora pada bakteri adalah usaha untuk mengamankan diri terhadap pengaruh buruk dari luar, misalnya karena : kekeringan, kekurangan air, kurang makanan, suhu, pengaruh zat-zat kimia dan sebagainya. Bila keadaan luar tidak membahayakan lagi, maka pecahlah bungkus spora (sporulasi) dan tumbuhlah bakteri (bentuk vegetatip) sebagai mana biasanya.

Bagaimana pembentukan spora (endospora)
Bila keadaan sekitar bakteri buruk, mula-mula terjadi penggumpalan protoplasma. Gumpalan ini bentuknya bermacam-macam, ada yang bulat, ada yang lonjong, bergantung kepada spesies bakteri. Bentuk spora ini sangat membantu dalam identifikasi spesies bakteri.
 Kemudian gumpalan protoplasma ini dibungkus oleh suatu membran yang kuat dan tebal, hingga kuat dan tahan terhadap gangguan-gangguan luar atau resisten. Spora mengandung air kira-kira 60-70 % sedangkan bentuk vegetatif atau bakteri kurang lebih 3-21 %.
Sepanjang pengetahuan sampai sekarang hanyalah golongan hasil yang dapat membentuk spora. Beberapa spesies dari Bacillus yang aerob dan Clostridium yang anaerob, dapat membentuk spora.

Letak spora dan bakteri.
Berdasarkan letaknya spora pada sel bakteri, dapat dibedakan :
1.	Spora terminal : spora terdapat diujung basil, bentuknya ada yang oval dan bulat
contoh : - oval pada Cl. Fallex
 - bulat pada Cl. tetani
2.	Spora sentral (aquatorial) : spora terdapat ditengah-tengah basil, bentuknya ada bulat atau lebih besar dari sel bakteri.
contoh : membesar pada Cl. Multifermentans
 oval pada Cl. Botulinum
3.	Spora subterminal : spora terdapat diantara terminal dan sentral
      bentuk spora umuinnya oval memanjang.
Contoh : -CI. Sporongenes
  - Cl. welchii
  -Cl. oedematicus
Ada spor yang garis tengahnya lebih besar dari garis tengah bakteri, hingga menyebabkan pembengkakan bakteri.
',
                'gambar' => '',
            ],
            [
                'id' => 41,
                'id_mapel' => 3,
                'judul_materi' => 'Pengenalan Kimia Klinik (Patologi Klinik)',
                'detail_materi' => 'Kimia Klinik adalah merupakan urine terapan yang digunakan untuk menganilisa cairan tubu dan jaringan untuk membantu klinukus dalam mendiagnosa dan mengobati seseorang. Sebagai ilmu terapan Kimia Klinik menggunakan Ilmu Fisiologi dan Biokimia untuk menerangkan suatu keadaan.
Perkembangan Kimia Klinik mengikti perkembangan Ilmu kedokteran, Biokimia dan Teknik Kimia Analisa.
RIWAYAT PERKEMBANGAN
Pelajaran patologi Kimia Klinik tahun 1847 oleh Bence Jones telah diketahui mengenai analisa kwantitatif urine, bola, asam urat dan urea dalam darah, hanya saja metode pemeriksaannya yang agak sulit diterapka.
 Pada tahun 1913 tes kimia darah telah menggunakan alat spektroskopi walaupun tes tersebut belum memuaskan, tahun 1910 sampai dengan 1920 metodologi pemeriksaan maju pesat, kolorimeter visual tersedia secara luas dan umumnya dipakai metode Analisa yang hanya memerlukan 1 ml darah tahun 1940 perkembangan metodologi utama berikutnya adalah fotometer nyala ap! (flame photo) dan potasiun, kolorimeter foto elektrik yang memberikan kecepatan dan ketepatan yang lebih besar dari kolorimeter visual dan teknik mikro bagi conton 0,1ml, sehingga memungkinkan pemakaian darah kapiler, karena kemajuan metode in lebih banyak penerapan pengetahuan biokimia klinikus yang lebih bersifat ilmiah dan lebih banyak kebutuhan kontrol biokimia bagi terapi yang manjur (baik) untuk analissa secara biokimia pada pasien.
Pertengahan abad sembilan belas, dckter dapat megukur konsentrasi asam Honda di dalam getah tambung dan menganalisa gula urine dengan test febling, protein urine melalui pendidikan dengan pengasaman dari empedu urine dengan asam nitrat
',
                'gambar' => '',
            ],
            [
                'id' => 42,
                'id_mapel' => 3,
                'judul_materi' => 'Ginjal',
                'detail_materi' => 'A.	SISTEM URINARIA
Sistim urinaria terdiri atas :
- Ginjal : yang mengeluarkan sekret ginjal
- Ureter : yang menyalurkan urine dari ginjal ke kandung kemih kencing
- Kandung kencing : sebagai penampung urine
- Uretra : yang mengeluarkan urine dari kandung
Setiap duktus papilans bellini masuk kedalam suatu perluasan ujung pelvis inial berbentuk cawan yang disebut kaliks minor. Beberapa kaliks minor bersatu membentuk kaliks mayor yang selanjutnya bersatu membentuk pelvis ginjal, pelvis ginjal dengan adanya ureter akan bergabung dengan kandung kemih.


B.	PEMBULUH DARAH GINJAL
Artera Interlobaris Arteria renalis Artena arkuata Artain Interlobularis Aforon Eleren Arten renalis masuk ke dalam hilus bercabang menjadi arteri interlobaris selanjutnya membentuk arteri arkuta, arteri arkuta kemudian membentuk arteriola arteriola interlobularis yang tersusun dalam korteks, arteriola interlobularis selanjutnya membentuk arteriola aferen.
Arteriola aferen akan berakhir pada rumbai-rumbai kapiler yang disebut glomerulus dan glomerulus bersatu membentuk arteriola eferen yang kemudian bercabang-cabag mengelilingi tubulus disebut kapiler-kapiler pentubular.
Darah yang mengalir melalu kapiler peritubular dialirkan kedalam interlobulans, vena arkuta, vena interlobularis , vena renalis interlobularis , vena renalis dan akhirnya ke vena cava inferior.

C.	PROSES PEMBENTUKAN URINE/KEMIH
Fungsi ginjal adalah mengatur komposisi plasma darah dan cairan tubuh. Proses-proses yang terjadi dalam ginjal adalah :
a. Filtrasi : Penyaluran/penyaringan bahan-bahan dengan berat molekul kecil dari plasma ke filtrat glomerulus
b. Reabsorbsi : Penyerapan kembali molekul-molekul dan ion-ion dari filtrat untuk dikembalikan ke plasma darah
c. Sekresi : Penyaluran molekul-molekul dan ion-ion dari plasma ke urine.
Ginjal memiliki unit fungsional disebut nephron, setiap ginjal memiliki 1-1,5 juta nephron, terdiri atas : -Glomerulus
           -Tubulus
Pembentukan kemih dimulai dengan proses filtrasi plasma pada glomerulus. Filtrael H20. elektrolit, non elektrolit Aliran darah ginjal (RBF = Renal Blood Flow) melalui arteri afferent $ 1200 Sokresi ml/menit mengalir menuju glomerulus dari 1200 ml darah yang mengalir 600 Ostosa Acam amino PAH Kroatinin ml adalah plasma (RPF = Renal Plasma No Flow), dari 600 ml plasma yang Ponisilin Ko Cow Mg HCOS HPC mengalir hanya 1/5 yang dapat tersaring TUBULUS PROKSIMAL melalui kapiler-kapiler glomerulus serta ditampung di kapsula Bouwman, keadaan ini diistilahkan sebagai LAJU FILTRASI GLOMERULUS (GFR), NOCI LENGKUNG HENLE harga normalnya adalah :
Pria : 120 ml/menit
Wanita : 110 ml/menit
Komposisi filtrat yang dihasilkan setelah  filtrasi sama dengan plasma sebelum NH filtrasi kecuali protein dan sel-sel darah Pombuluh darah porttubular tidak di jumpai di dalam filtrat, selanjutnya filtrat yang ditampung di kapsula Bouwman dialirkan kedalam hibulus didalam perjalanannya filtrat ini akan mengalami teabsorbsi melalui pori on van terdapat dalam tubulus sehingga zat-zat tersebut kembali lagi ke dalam kapiler pertubular yang mengelilingi tubulus, disamping itu juga beberapa zat disekresi dan pembuluh darah peritubular ke dalam tubulus sehingga yang keluar sebagai unnet 1 ml/menit.
Bahan-bahan yang terlarut dalam urine terdiri atas 95% air, 2% urea dan 3% terdin atas bahan-bahan organik dan anorganik antara lain:
Organik Anorganik - amoniak urea - asam urat - klorida - kreatinin dll - sulfat, fosfat dll
Bahan-bahan yang terlarut dalam urine dapat meningkat pada keadaan patologis misalnya adanya protein, glukosa, badan-badan keton, bilirubin, porphomilinogen, urobilinogen, hemoglobin dll.
',
                'gambar' => '',
            ],
            [
                'id' => 43,
                'id_mapel' => 3,
                'judul_materi' => 'Urinalis',
                'detail_materi' => 'Hasil pemeriksaan laboraturium yang baik tidak hanya memerlukan cara-cara pemeriksaan yang baik, pemeriksaan yang berpengalaman, tapi perlu jutaan cara pengambilan dan pengiriman dan contoh urine keA diperhankan cara-cara penrambilan Ishratonum, hal-hal yang perlu diperhatikan adalah sebagai berikut:
CARA CARA MEMPERSIAPKAN URINE UNTUK PEMERIKSAAAN LABORATORIUM
A.	PENAMPUNG
Penampung untuk urine dapat digunakan tempat bermacam-macam, tapi yang harus diperhatikan adalah tempat penampung tersebut harus kering dan bersih, karena adanya air dan kotoran dalam penampung dapat menyebabkan berkembang biaknya kuman-kuman dalam urine serta mengubah susunannya. Wadah yang baik adalah tempat yang terbuat dari kaca, plastik yang tidak fembus cahaya atau "paper costed" dengan mulut yang lebar dan mempunyai tutup untuk mencegah bertambahnya kuman atau kontaminasi zat-zat lain dan rada penampung jangan lupa menuliskan identitas penderita, nama, ruangan, tanggal, macam pemeriksaan yang dimintakan.
B.	CARA PENGAMBILAN CONTOH URINE
Untuk pemeriksaan unine dianjurkan memakai urine segar. Penderita mengeluarkan unne langsung dalam penampung seperti tersebut disuruh untuk mengeluarkan urine lan listas kemudian ditutup dan segera dikirimkan ke laboratorium. Pada penderita sedang haid atau leukorrohoe, untuk mencegah kontaminasi dianjurkan pengambilan contoh urine dengan cara "Clean voided speciman" seperti pengambilan urine untuk pemeriksaan bakteriologi.
Cara "Clean voided specimen" dapat dilakukan dengan beberapa macam :
1.	Kateterisasi
2.	Punksi suprapubik dan
3.	Pengambilan urine "midstream" dimana urine yang pertama keluar tidak di tampung, tetapi urine yang keluar kemudian ditampung dan yang terakhir tidak turut ditampung (Clean voided midstream).
Pengambilan urine untuk pemeriksaan bakteriologi memerlukan tindakan undakan aseptis, penampung dan alat-alat yang steril. Urine yang ditampung dalam hal ini adalah urine "midstream" yang ditutup dengan penutup stent si segera dikirim ke laboratorium
C. MACAM-MACAM CONTOH URINE
1.Urine Sewaktu
Untuk bermacam-macam pemeriksaan dapat digunakan urine sewaktu ialah urine yang dikeluarkan pada satu waktu yang tidak ditentukan dengan khusus. Urine sewaktu ini biasanya cukup baik untuk pemeriksaan rutin seperti protein, reduksi, sediment
2. Urine pagi
Yang dimaksud dengan urine pagi adalah urine yang pertama-tama (dikeluarkan pada pagi hari. Unine ini lebih pekat dari urine yang dikeluarkan siang hari jadi baik untuk pemeriksaan terhadap sediment, berat jenis, protein, test kehamilan. Pada urine yang encer mungkin unsur unsur sediment seperti eritrosit, silinder protein tidak ditemukan.
3. Urine Post Prandial
Urine yang pertama kali dikeluarkan 2 jam sehabis makan, contoh urne ini baik untuk pemeriksaan adanya glukosa (reduksi), urine pagi tidak baik untuk pemeriksaan penyaringan terhadap adanya glukosuria.
4. Urine 24 jam
Urine yang dikumpulkan selama 24 jam, cara mengumpulkan uri sebagai berikut: jam 8 pagi penderita mengumpulkan u penderita mengumpulkan urinenya : urine ini dibuang Semua urine yang dikelu ocmua urine yang dikeluarkan kemudian termasuk juga urine harus ditampung dalam botol urine yang tersedia dan jam 8 esok harinya harus ditampung dalam botol urine v kemudian diukur volumenya dengan tepat. Unne 24 jam ini dicampur, kemudian diukur volume diperlukan untuk penetapan kwantitatif sesuatu zat dalam urine, seperti penetapan ekskresi kalsium, phospat, protein, kadar hormon 17 hidroksiketosteroid dan lain-lain
',
                'gambar' => '',
            ],
            [
                'id' => 44,
                'id_mapel' => 3,
                'judul_materi' => 'Pengawet Urine',
                'detail_materi' => 'Kecuali elektrolit semua ikatan-ikatan (komponen-komponen) dalam urine diuraikan oleh bakteri dan jamur. Apabila urine tidak dapat segera diperiksa perlu ditambahkan bahan pengawet untuk mencegah kejadian-kejadian seperti tersebut diatas. Untuk mengawetkan unine dapat dilakukan cara-cara sebagai berikut:
A.	FISIK
1.	Disimpan dalam lemari es (+ 4°C) Terutama ditujukan terhadap urine yang tidak segera diperiksa atau untuk pemeriksaan bakteriologis.
2.	Disimpan dibawah titik beku (dibawah 20°C) Terutama ditujukan untuk pemeriksaan badan kimia
 B. KIMIAWI
1. Toluena :
Sangat baik dipakai untuk mengawetkan glukosa . aceton dan cam ascto setat penggunaannya sebanyak 2 - 5 ml tolucna untuk mengawetkan urine 24 jam
2. Thrmol:
- Sebutir thymol mempunyai daya seperti toluena
- Dalam bentuk hablur + 100 mg untuk 100 ml urine
- 10% thymol dalam propanol (5 ml sudah cukup untuk urine 24 jam)
Penggunaan thymol dalam jumlah berlebihan dapat mengganggu pemenksaan proteinuria, dapat menyebabkan positif palsu
3.	Formaldehida
Khusus dipakai untuk mengawetkan sediment penggunaanya sebanyak 1-2 ml larutan formaldehida 40% untuk mengawetkan urine 24 jam, dapat mengganggu pemeriksaan reduksi urine.
4.	Asam Sulfar Pekat
Asam ini dipakai untuk mengawetkan urine guna penetapan kuantitatif catsium nitrogen dan kebanyakan zat anorganik lain. Jumlah yang harus diberikan adalah sebanyak itu hingga ph urine tetap lebih rendah dari 4,5. Reaksi asam mencegah terlepasaya N dalam bentuk amonial dan mencegah juga terjadinya endapan calsium fosfat
5.	Natrium Carbonat
Khusus untuk mengawetkan urobilinogen jika hendak menentukan Khusus dipakai untuk mengawetkan Masukkan kira-kira 5 gram natrium karbonat dalam stanesinya per 24 jam. Masukkan kira-kira 5 gram natrium botol penampung bersama dengan beberapa ml toluena.
',
                'gambar' => '',
            ],
            [
                'id' => 45,
                'id_mapel' => 3,
                'judul_materi' => 'Urine Rutin',
                'detail_materi' => 'Pemeriksaan urine merupakan pemeriksan yang sering diminta dalam antu menegakkan berbagai macam penyakit karena pemeriksaan urine tidak hava dapat memberikan fakta-fakta tentang kelainan ginjal dan salurannya tetapi juga mengenai saal beberapa organ seperti hati, saluran empedu, pankreas dll
Pemerksaan urine rutin terdiri atas :
1. Fisik
a. wama
b. kekeruhan
c. bau
d. bui
e. Ph
f berat jenis
2. Kimiawi
a. protein
b. glukosa
c. aceton
d. bilirubin
e. urobilinogen
f. urobilin
3. Sediment/mikroskopis
a. lekosit
b. critrosit
c. silinder/torak-cast
d. hablur-hablur
e. bakteri

L.PEMERIKSAAN FISIK
A Warna :
Pada pemeriksaan urine perubahan warna urine harus diperhatikan benar-benar sebab perubahan wama urine bisa disebabkan oleh 2 penyebab :
1. Keadaan non patologis disebabkan oleh obat-obatan atau makanan
2. Keadaan patologis disebabkan oleh penyakit yang diderita Warna urine yang normal disebabkan oleh urochrom yang berwarna kuning muda sampai kuning tua tergantung dari kadar urochromnya.
B. KEKERUHAN/KEJERNIHAN
urine yang harus dikeluarkan normalnya tampak jernih, kekenihan dalam urine biasanya disebabkan oleh:
1. fospat amorf dan CO3 dalam jumlah besar
2. bakteri
3. unsur-unsur sediment dalam jumlah besar
- eritrosit
- leikosit
-sel-sel epithel
4. chylus dan lemak
5. koloid
Sebab-sebab urine menjadi keruh setelah dibiarkan:
1. nebecula
2. urat amorf
3. fosfat amorf dan CO3
4. bakteri

C. BAU
Umumnya bau urine erat hubungannya dengan kerusakan urine itu sendin. Urine normal dan baru berbau tidak keras. Urine yang sudah lama berbau amoniak karena pemecahan ureum. Bila urine baru tetapi berbau amoniak/busuk mungkin Keadaan ini disebabkan oleh perombakan zat-zat protein umpamanya pada dan saluran kencing/cystitis 19

D. BUIR
Urine tidak berbuih, bilirubin menyebabkan buih berwama kuning Unine biasanya tidck berbuih, bilirubin protein urine menimbulkan buh berwarna putih. meningkatnya kadar protein urine menimbulkan buih berwarna putih

E. PA
Pada orang yang sehat PH urine berkisar antara 4,5 sampai 8,5 tetapi rata-rata sedimen urine Phnya sekitar 6,0. Pengukuran Ph harus dilakukan terhadap urine yang masih baru dan dilakukan dengan kertas Ph Mis:
1.	Penetapan reaksi dengan kertas lakmus:
Basahilah sepotong kertas lakmus biru merah dengan urine yang diperiksa: tunggu satu menit dan perhatikanlah warna yang terjadi :
-	urine asam mengubah warna kertas lakmus biru menjadi merah
-	urine lindi(basa) mengubah kertas lakmus merah menjadi biru
-	urine netral tida mengubah kertas lakmus
2.	Penetapan PH dengan kertas nitrazin Basahilah sepotong kertas nitrazin dengan urine yang diperiksa, tunggu satu menit dan bandingkanlah warna kertas itu dengan skala wama standard.
3.	Penetapan PH dengan campuran indikator Penetapan PH dengan cara ini lebih cepat dan lebih tepat, pada segons kertas terdapat campuran 2 macam indikator yaitu:
Metil red dan brom thymol blue, perubahan warna kedua indikator ini Metil red dan brom thymnol blue ne enyebabkan warna pada kertas tersebut akan berubah dari jingga-hau sampai menjadi biru sesuai dengan reaksi asam suasana urine tersebut
4.	Carik celup (disptick)
Cank celup berupa secarik plastik kaku yang pada sisinya dilekari dengan satu sampai sembilan kertas isap atau bahan penyerap lain yang masing masing mengandung reagens spesifik terhadap salah satu zat yang mungkin ada di dalam urine, adanya dan banyaknya zat yang dicari ditandai oleh perubahan warna tertentu pada bagian yag mengandung reagens spesifik, skala wana yang menyertai carik oclup memungkinkan penilaian semi kwantitatif.
Cara kerjanya sebagai berikut:
1. urine harus dijadikan serba sama sebelum diperiksa; campurlah baik baik sampai juga sediment terbagi merata
2. Celupkan carik celup ke dalam urine, angkat
3. Hilangkan kelebihan urine yang melekat pada carik celup dengan umpamanya = menyentuhkan pinggir carik celup pada pinggir wadah urine
4.Jangan pegang bagian dari carik celup yang mengandung reagens dengan jari
5. Cocokkan dengan standar
Catatan :
Pada pemeriksaan PH urine dengan menggunakan kertas nitrazin, test diptsick dll Pada pemeriksaan PH urine perlu diperhatikan bal-hal sebagai berikut:
1.	hanya kemih yang segar saja yang boleh dipakai
2.	test yang mempergunakan kertas celup, kertas harus segera diangkat setelah dicelupkan ke dalam urine agar reagens dalam kertas tersebut tidak tercuci
3.	Perbandingan warna terhadap warna standar harus langsung dilakukan dibawa cahaya yang baik 1. BJ 001
Penentuan berat jenis merupakan barometer untuk mengukur jumlah z padat yang terlarut dalam urine dan di gunakan juga untuk menentukan konsentrasi urine serta daya dilusi ginjal. Pengukuran Bj ini dipengaruhi oleh adanya zat-zat bermolekul besar yang terlarut dalam urine, zat-zat tersebut dapat berasal dari dalam tubuh mis : glukosa atau protein atau yang sengaja dimasukkan dari luar yang nantinya akan keluar bersama urine mis: kontras & Pay atau dextran
Batas-batas nomal Bi adalah nyai berat jenis 1.025 atau lebih tinggi sedangkan reduksi urine une pagi mempunyai berat je dok ada protein hal ini menunjukkan kepada faal pemekatan ginjal yang negatif dan tidak ada vang lebih 1.030 memberikan isyarat akan kemungkinan glukosuria. baik, berat jenis yang lebih 1.030 rium kimia klinik BJ urine diukur dengan kapasitas pengapungan
 Dilaboratorium kimia klinik B Hidrometer urinometer dalam suatu silinder yang berisi urine Tindakan atau cara tepat unuk mengukur berat jenis urine sebagai berikut:
1.	Periksa ketepatan urinometer terhadap air suling apakah niai yang terbaca 1000 pada suhu teranya.
2.	Isi silinder penuh dengan kemih yang telah tercampur dengan baik
3.	Putar urinometer perlahan-lahan sambil dimasukkan ke dalam kemih agar jangan sampai terjadi kesalahan pada tegangan permukaan yang terbentuk pada batang urinometer tersebut dan jangan sampai menempel pada sisi silinder
4.	Baca dan atas ke bawah, urinometer ditera dalam unit 0,001 mulai dan 1.000 disebelah atas dan terus ke bawah sampai 1.060, cara membaca yang baik ialah pada permukaan dasar miniskus yang harus dibaca pada ketinggian mata
5.	Perbaiki hasil bacaan berat jenis tersebut kalau suhu contoh yag diperiksa vengan suhu tera unimometer berbeda gunakan termometer un mementukan suhu kemih yang sebenarnya nin yang sebenarnya, tambahkan 0.001 pada hasil yang  untuk setiap 3°C diatas suhu tera dan kurangi 0,001 untuk setiap 39 dibawah suhu tera
Contoh:
Kalau urinometer yang ditera pada 16°C ditempatkan pada suhu contoh kemih segar dengan suhu 31°C memperlihatkan hasil bacaan sebesar 0,015 maka hasil bacaan itu perlu ditambah 0,005
 (31-16°C) - 15 x 0.001/3°C = 0,005
BJ sebenarnya sesudah dikoreksi suhunya 1, 020

II. PEMERIKSAAN KIMTAWI
A.	Protein Dalam
Urine Protein dalam urine (proteinuria) dapat terjadi karena:
1.	GFR yang meningkat
2.	Kelainan basal membrane glomerulus
3.	Kelainan tubulus
4.	Perubahan molekul protein sehingga mudah difiltrasi (mis: multiple myeloma)
Macam-nacam proteinuria
1.	Functional proteinuria, penyebabnya antara lain:
-	demam
-	karena expose dengan udara yang sangat dingin
-	otot-otot yang kerja keras
-	pada kehamilan
2.	Organic proteinuria
a.	Pre rental proteinuria
-	pada asci tes
-	karena keracurtan obat-obatan (Hg, Pb dll) mattede gerdk.
b.	Renal proteinuria
-	pada peradangan (nephritis)
-	nephrosis
-	kanker ginjal, infark ginjal, TBC ginjal all
c.	False proteinuria
-	cyctitis
-	pyelitis
-	urethritis
-	sekret dari vagina
Pemeriksaan terhadap protein termasuk pemeriksaan rutin. Kebanyakan cara rutin untuk menyatakan adanya protein dalam urine berdasarkan kepada timbulnya kekeruhan kepadatannya atau kasarnya kekeruhan menjadi suatu ukuran jumlah protein yang ada, maka menggunakan urine yang jemih betul-betul menjadi syarat penting pada test terhadap protein
Proteinuria dapat ditentukan dengan beberapa metode yaitu :
A.	SECARA KWALITATIF:
1.	Didih bang
2.	Pemanasan asam acetat 6%
3.	Asam sulfosalicyl
4.	Reaksi heiler
5.	Carik celup

DIDIH BANG PEMANASAN ASAM ACETAT 6%

Dasar reaksi dari keadaan presipitasi bila dipanaskan, percobaan kedua cara ini dapat akan membentuk menentukan kadar sebanyak 0,604 % protein
Sumber reaksi (+) palsu (kekeruhan yang tidak disebabkan oleh albumin atau globulin) mungkin
a.	nucleo protein, kekeruhan terjadi pada pemberian asam asetat sebelum pemanasan
b.	mucin, kekeruhan yang disebabkan oleh mucin juga terjadi pada saat pemberian asan asetat sebelum pemanasan
c.	protease (albumose), presipiat oleh zat ini terjadi setelah campuran reaksi mendingin, kalau dipanasi menghilang lagi
d.	asam resin, kekeruhan oleh zat-zat ini larut dalam alkohol
e.	protein bence jones

ASAM SULFO SALICYL
Caranya :
a.	Dua tabung reaksi di isi masing-masing dengan 2 ml urine jernih
b.	Kepada yang satu ditambah 8 tetes larutan asam sulfo salicyl 20% kocok
-	Bandingkan isi tabung pertama daripada yang kedua kalau tetap sama jernihnya test terhadap protein (-)
-	Jika tabung pertama lebih keruh daripada yang kedua panasilah tabung pertama itu diatas nyala api sampai mendiddih dan kemudian diinginkan kembali dengan air mengalir.
a.	Jika kekeruhan tetap ada pada waktu pemanasan dan tetap ada juga setelah dingin kembali, test terhadap protein adalah (+)
b.	Jika kekeruhan itu hilang pada waktu pemanasan dan tetap ada juga setelah dingin, mungkin sebabnya protein bence jines dan perlu diselidiki lebh lanjut
Test dengan asam sulfpsilicyly tidak bersifat spesidik, meskin sangat peka, adanya protein dalam konsetrasi 0,002% dapat dinyatakan, kalau hasil test itu (-), tidak perlu lagi memikirkan kemungkinan adanya proteinuria.
CARIK CELUP
Carik celup yang dpakai untuk menentukan proteinuria biasanya menggunakan indikator tetrabrom phonelblue yang berwarna kuning Ph3 dan berubah warna menjadi hijau sampai hijau biru sesuai dengan banyaknya protein dalam urine.
PROTEIN BENCE JONES
Protein Bence Jones adalah protein yang mengalami perubahan striktur molekul-molrkulnya, protein patalogi ini mrmpunyai sifat sebagai berikut :
-	Mengendap pada suhu 40-60°C (optimum 36°C) dan larut pada suhu 100°C
-	Di jumpai pada MULTIPLE MYELOMA
-	Kadang-kadang dijumpai juga pada
o	Tumor tulang
o	Leukemia
o	Nephritis khroni
Pemeliharaan protein bence jones dapat dilakukan dengan cara :
1.	Osgood
2.	Asam solfoslicly
CARA OSGOOD
1.	Masukkanlah kira-kira 5 ml urine dan sebatang thermometer, kedalam tabung reaksi dan masukkanlah tabung itu ke dalam gelas kimia berisi air
2.	Panasilah berhati-hati air dalam gelas kimia itu dan perhatikanlah suhu yang ditunjukkan oleh thermometer
3.	Catatlah suhu timbulnya kekeruhan pertama-tama dan juga suhu kekeruhan itu menjadi maksimal
4.	Angkatlah tabung itu dari air dan panasilah diatas nyala api sampai isinya mendidihselama satu menit.
•	Jika presipitat lenyap, biarkan urine itu mendingin lagi, catatlah suhu presipitat muncul lagi
•	Jika persipitat tidak mau menghilang waktu dipanasi, berilah 1 ml asam asetat 50% tetes demi tetes dengan terus memanasi urine itu hingga mendidih, jika kekeruhan menetap, maka persipitat itu setidaknya mengadung albunin dan fitrat ditinjau, jika kekekruhan timbul dalam fitrasi itu pada waktu cairan mendingin dan hilang lagi kalau dipanasi maka adanya protein bence jones terbukti.
Jika pada langkah 3 dan langkah 4a terlihat adanya kekeruhan yang timbul pada suhu antara 50°C – 65°C yang menghilang pada 100°C, adanya protein bonce Jones terbukti juga.
B.	SECARA KWANTITATIF
-	Esbach
Cara ini dapat dibaca bila kadar proteinnya lebih besar atau sama dengan 0,5 gr/l. sehingga bila dalam urine kadarnya kurang dari 0,5 gr/l tidak dapat dibaca dengan tepat.
-	Reaksi biuret
Protein urine di presipitasikan dengan asam trichlorasetat kemudian dipusing. Cairan diatasnya di buang dan endapan yang terbentuk dilarutkan dengan reagensia biuret
Warna yang terbentuk kemudian dibaca dengan spektrofotometer.
GLUKOSA DALAM URINE
Semua zat yang terdapat dalam plasma (kecuali protein) di glomerulus akan difitrasi : demikian juga dengan glukosa sehingga setelah difitrasi maka glukosa akan terdapat dalam fitrat glomerulus.
Dalam keadaan normal semua glukosa yang terdapat di filtrate glomerulus akan mengalami reabsorbsi dalam tuulud proximalis. Sehingga dalam urine tidak terdapat glukosa lagi, tetapi perlu diketahui baham tubulus ginjal mempunyai batas kemampuan untuk mereabsorbsi secara maximal. Kemampuan untuk mereabsorbsi ini disebut ambang gula dari ginjal atau Tm (Transport maxsimal) suatu zat. Nilai amabng gula dari ginjal normalnya 160-180% apabila jumlah glukosa dalam filtrat glomerulus melewati Tm ini, maka tidak semua glukosa yang terdapat dalam fitrat akan di reabsorbsi dan ini menyebabkan dijumpainya glukosa dalam urine yang disebut glukosuria.
Glukosaria dapat disebabkan karen adua hal :
1.	Bila kadar glukosa dalam plasma melampai batas kemampuan dya reabsorbsdi ginjal. Keadaan ini dapat dijumpai pada keadaan : emosi, penggunaan anastesi eter, tekanan intra cranial dan sidrom cushing.
2.	Bila kemampuan daya rabsorbsi ginjal menurun. Keadaan ini dijumpai pada : renal glukosuria, alementary glukosuria, kehamilan, tubular demage.
Untuk mengetahui adanya glukosa dalam urine (glukosuria) dapat ditentukan dengan cara :
1.	Test reduksi :
– benedict
– fehting
– nylander
2.	 Test enzimatis/carik celup atau stjck (berdasarkan reaksi glukosa oksidase)
TEST REDUKSI
Cara yang lazim digunakan untuk menentukan glukosa dalam urine berdasarkan pada sifatnya sebagai reduktor tetapi karena terdapat banyak bahan-bahan yang bersifat reduktor dalam urine maka cara ini tentukanya tidak spesifik untuk glukosa dalam urine. Dari ketiga cara ini reaksi benedict lebih baik dari pad acara fehling maupun nylander.
CARA REAKSI BENEDICT/FEHLING
Perediksi benedict ataupun fehling adalah larutan lembaga sulfat (Cu++) dalam suasana alkali. Bila urine yang mengadung glukosa dereaksikan sengan peraksi tersebut dlam suasana panas, tembga (Cu++) yang berwarna kuning samapi merah bata tergantung pada jumlah glukosa yang terdapat .
C.	KETONURIS
C KETONURIA
Pada penderita kencing manis tubuh kekurangan insulin sehingga proses pengangkutan glukosa ke dalam sel terhambat yang mengakibatkan glukosa tidak dapat dipakai sebagai sumber energi.
Untuk mengatasinya tubuh mengkatabolisme lemak yang terdapat dalam hati secara berlebihan yang menghasilkan asam aseto asetat yang seterusnya terurai menjadi aceton dan beta hydrexvbutiric acid Asam aseto asctat, aceton dan beta butiric acid dikenal sebagai badan-badan keton dan dijumpai didalam darah (ketonemia). selanjutnya diekskresikan ke dalam urine (ketonuria), keadaan ini didapat pada
 - diabetes melitus yang terlarut
- kelaparan
-kerja jasmani berat pada waktu puasa
- makan banyak lemak
- diare berat yang disertai muntah-muntah
Pada pemeriksaan ketonuria hanya asam aseto asetat dan aceton saja yang lazim ditentukan pada analisa rutin. Diketemukanya badan-badan keton dalam urine menunjukkan bahwa kadamnya dalam darah meningkat, apabila seorang pendenta DM mengalami peninggian kadar badan-badan keton di dalam darahnya maka pendenta ini sudah mendekati keadaan yang berbahaya yang mungkin dapat mengalami koma dan seterusnya meninggal.
Metode Pemeriksaanya
Metode yang lazim digunakan untuk menunjukkan adanya asam aseto asetat dan Metode yang lazim digunakan aceton adalah:
-	rothera
-	- lange
-	- Gerhard (Reaksi Feri chlorida)
-	- carik celup/stick (Nitro prusid)
ROTHERA/LANGE:
Aceton adalah zat yang bersifat mudah menguap maka urine yang diperiksa harus dalam bentuk segar untuk menghindarkan hilangnya aceton dalam urine
Pemeriksaan aceton dalam urine berdasarkan reaksi antara nitroprusid dengan asam aseto asetat dan aceton akan terbentuk zat berwarna ungu, reaksi ini sangat peka sekali sampai 1:400.000 terhadap asam aseto asetat, 1:20.000 terhadap aceton Sedangkan asam beta hydroxy butiric tidak dapat dinyatakan dalam reaksi ini.
GERHARD :
zal ini berdasarkan kepada reaksi antara asam aseto asetat dan ferri chlorida Sastikan zat berwama seperti anggur port (merah coklat), Kepekaan sampai pengenceran 1:1000 (jauh kurang peka dari reaksi rothera), sedangkan aceton. dan asam beta-hydroxybutiric tidak beraksi.
Cara kerjanya:
-	5 ml urine dimasukkan ke dalam tabung reaksi kemudian diteteskan larutan ferri chlorida 10%, ke dalam tabung itu sambil mengocoknya
-	jika terbentuk presipitat putih, saring cairan tersebut
-	Kepada filtrat diberikan beberapa tetes larutan feri chlorida lagi, perhatikanlah adanya warna merah coklat yang menandakan test ini (+)
Postif palsu dapat dijumpai blinemiria tersebut mengandung:
- fenol
- salicylat
- antipyrin dan Na2HCO3
Warna hijau terjadi disebabkan adanya fenil alanine
Test rothera lebih peka daripada test gerhard terhadap asam aseto asetat oleh karena itu bila test gerhard positif selalu harus disertai test rothera yang positif juga, seandainya gerhard positif, sedangkan rothera negatif maka test gerhard dinyatakan positif palsu.
 Untuk membedakan hasil test positif palsu dengan positif sejati adalah memanamı sifat asam aceto asetat yang mudah menghilang.
Cara sebagai berikut:
1. 5 ml urine diasamkan dengan asam diasamkan dengan asam acetat kemudian ditambah 5 ml aquadest
2. Masaklah campuran itu sampai volume 5 ml lagi
3. Dinginkanlah dan jika perlu saringlah
4. Lakukan test gerhard dengan cil dengan urine yang tidak, dimasak (+) dan test dengan urine yang
5. Jika hasil dengan urine yang ti mocak menjadi () maka test itu (+) sejati. Sebaliknya jika baik dengan urine yang tidak dipanasi dan dengan urine yang dipanasi hasilnya (+), maka test itu sebenarnya berhasil (+) palsu
CARIK CELUP/STICK
Dasar reaksi sama seperti pada test rothera yang memakai Na- Nitro prusid menghasilkan warna ungu, penilaian ini kwantitatif diadakan berdasarkan hanya wama ungu yang terjadi pada carik celup
D. BILIRUBIN DALAM URINE
Dalam keadaan normal urine tidak mengandung bilirubin. Dalam plasma darah terdapat dua macam bilirubin:
 - Bilirubin bebas (unconjugated bilirubin/bilirubin indirect)
- Bilirubin terikat (conjugated biliubin/BD)
blirubin bebas (unconjugated bilirubine/BI) terikat pada albunin sehingga bersifat pat larut dalam air akibatnya tidak tersaring melalui glomunulus dan tidak dijumpai didalam urine.
 Bilirubisne terikat (conjugated tenkat (conjugated bilirubine/BD) adalah senyawa bilirubine glucoronida yang bersilat yang bersifat mudah larut dalam air dan mudah tersaring melalui glomurulus sehingga dijumpai didalam urine.
Pemeriksaan biliburin dalam urine dilakukan untuk membantu diagnosa dari penyakit hepatitis infectioca dan infectin sekaligus juga untuk mengetahui perjalan penyakit hepatitis tai lintuk mengetahui kerusakan-kerusakan hepar yang disebabkan oleh penyakitnya atau untuk bahan kimia yang bersifat racun terhadap hati.
 Urie yang mengandung biliburin dalam konsentrasi tinggi berwarna tidak pekat dan bila dicocok akan terlihat buih berwama kuning Pemeriksaan biliburin dalam urine yang lazim dilakukan adalah sebagai berikut: - - test busa
- metode cincin yodium.
- metode fouchet/percobaan horision
- carik celup/stick
PERCOBAAN BUSAI
- kocoklah 5 ml urine segar dalam tabung dengan kuat-kuat
- jika terjadi busa kuning, itu tanda bawah biliburin sangat mungkin ada
Busa urineyang tidak mengandung biliburin adalah putih, test busa mungkin menjadi su pada konsentrasi urobobilin yang tinggi dan juga oleh obat-obatan seperti akriflavine dan pyridium
CINCIN YODIUM
Dasar reaksi  adalah bilirubin dalam urine akan dioksidasi dengan joulun menghasilkan biliverdin dan tampak cincin hijau dibatasi kedua cairan tersebut
METODE FOUCHET/PERCOBAAN HORISON
Dasar reaksinya adalah bilirubin yang ada dalam unine di.pekatkan dengan Ba Cl, membentuk presipitat fosfat. pilipitin yang melihat pada presipitat fosfat dioxidasi menjadi biliverdin yang hijau dengan reagens fouchet
CARK CELUP/STICK
Dasar reaksinya adalah reaksi diazotisasi antara bilirubin dalam unire dengan senyawa diazo pada carik celup. Warna yang terjadi pada reaksi ini ditentukan oleh jenis senyawa yang dipakai, sedangkan intensitasnya dapat menunjukkan banyaknya bilirubin
E. UROBILINOGEN
Urobilinogen dalam urine akan beraksi dalam reagans Ehrlich membentuk zat warna merah, karena urobilinogen dioksidasi oleh udara teristimewa kalau terkena sinar matahari menjadi urod kan menjadi urobilin yang tidak dapat bereaksi dengan reagans Ehrlich, maka urine yang diguna ne yang digunakan adalah urine segar atau memakai pengawet.
 Jika ingin memak ingin memakai urine sewaktu lebih baik memiliki unne yang dikeluarkan pada sore hari, karena ekskresi urobilinogen tinggi pada sore han, pada pemeriksaan ini juga me "ini juga menggunakan cara carik celup/stick
F. UROBILIN
Pada unine segar praktis tidak ada urobilin, sehingga untuk pemeriksaan ini ditambahkan larutan LUGOL guna mengoksidasi urobilinogen menjadi urobilin. Cara yang dipakai yaitu cara schlesinger dengan reagens schlesinger vang terdiri dan Zn asetat atau Zn klorida jenuh, dalam alkohol 95%, test ini dinyatakan positif jika ada flouresensi hijau
Positif palsu dapat timbul pada urine yang mengandung
-	Riboflavin dari tablet vitamin B kompleks, dapat dikenal dengan test Naumann
-	Flouresensi yang dipakai untuk keperluan diagnostik
-	 Eosin dan mercurochrome.
III PEMERIKSAAN MIKROSKOPIS/SEDIMENT
A. SYARAT : URINE YANG AKAN DIPERGUNAKAN UNTUK PEMERIKSAAN
1.	Urine pagi, karena masih dalam keadaan pekat, benda-benda yang berbentuk belum rusak/lysis.
2.	Urine mid-stream dapat ditampung di laboratorium
3.	Urine harus segera dibawa ke laboratorium, berumur tidak lebih dari 2 jam.
4.	Bila tidak dapat segera diperiksa awetkan dengan penambahan 8 tetes formaldelyde 10% untuk tiap 300 ml urine. jangan disimpan dalam lemari es
5.	Penting untuk diperhatikan wadah harus benar-benar bersih dan kering
6.	Urine dipusing dengan kecepatan sedang selama 5 menit, bila terlalu cepat dan lama benda-benda berbentuk dapat rusak
B. CARA MELIHAT DI MIKROSKOP:
1.	Pertama gunakan obyective 10 x, kemudian 40°C
Jangan menggunakan filter
2.	Condensor diturunkan secukupnya agar benda-benda yang transparan tampak jelas
C. CARA MELAPOR HASIL
1.	Benda-benda yang tampak dimikroskop dihitung dan dilaporkan
2.	Perlapangan pandang besar (pib)
3.	Per lapangan pandang kecil (plk)
4.	Sediment dibagi dalam dua bagian:
o	Sedimen organik
o	Sedimen anorganik
D. SEDIMEN ORGANIK ANTARA LAIN :
1. Sel-sel darah merah
2. Sel-sel darah putih
3. Sel-sel epitel
4. Torak = Silinder = casts
5. Sel-sel ragi
6. Trichomonas
7. Spermatozoa
8. Bakteri-bakteri
1. Sel-sel darah merak = Erythrocyte
Pada keadaan abnormal, erythrocyte dalam urine dapat berasal dari seluruh tractus urogenitalis.
Normal : 2-3 /plb (beberapa)
Dalam urine dapat berbentuk bulat, granation atau mengkerut.
Jumlah sedang : 10-30/plb
Jumlah banyak : lebih dari 30/plb
2.	Sel-sel darah putih=uecocyte;
 Normal: 4-5/plb .
Dalam keadaan patologis leucocyte terdapat dalam jumlah:
Sedang : 10 - 20 /plb
Banyak : 20-30/plb
Disebut Pyuria
Leucocyte dalam urine dapat berasal dari:
Infeksi = misalnya Pyelonephritis
Non Infeksi = Infiametory disease dari ginjal
Misalnya : Lupus Nephritis
Loucocyte bergerombol kemungkinan besar menunjukkan adanya infeksi.
Untuk memastikan lakukan urine culture
Sebaliknya leucocyte tidak selalu ada pada infeksi tractus urinarius
Kadang-kadang terdapat bacteriuria yang persistent tetapi leacocyte normal.
3.	Sed Epitel
• Dapat berasal dari lapisan dalam tractus urogenitalis, pelvis renalis, urethra, vagina atau buli-buli
-	Squamous epithelial cells
Besar dan biasa disebut epitel bertatah .
Berasal dari urethra atau vagina
-	Sel-sel kandung seni
 Berbentuk besar seringkali berbentuk diamond dengan nukleus jel
-	Sel-sel dari pelvis
Berbentuk sedang ( 3x lekosit), gramular dengan ekor pendek.
-	Sel-sel dari ureter dan pelvis
Bentuk sedang, oval dengan nukleus yang jelas
Bila terdapat banyak bersama dengan lekosit dan benang-benang (sediments), berasal dari ureter
Bila terdapat hanya sedikit tanpa lekosit, berasal dari pelvis
-	Sel-sel ginjal .
Berbentuk kecil (+ 1-2 x lekosit)
Berbintik-bintik banyak (mengandung barryak granular) .
Biasanya diketemukan bersama-sama dengan protein.
4.	Torak = Cast = Slinder
 Murni berasal dari ginjal, proses pembentukannya belum diketahui dengan jelas, tetapi diperkirakan terbentuk karena adanya precipitasi protein atau conglutinasi (penggerombolan) bahan-bahan dalam lumen.
Faktor-faktor yang mempengaruhi pembentukan torak ini adalah:
1. Kadar protein
2. pH filtrat
3. Kadar garam
1. Torak dibagi dalam beberapa bagian sebagai berikut:
-Torak Hyaline
-Torak Epitel
-Torak Granular
-Torak Darah
a Torak Hyaline
Terbentuk karena adanya precipitasi protein dalam lumen Tak berwarna, homogen, semi transparant, berbentuk silinder dengan kedua sisi pararel dan bulat pada ujungnya. Biasanya berwarna kuning bila urine banyak mengandung bilirubin
b.Torak Epitel
Torak penuh dengan sel-sel epitel, agar sel-sel tampak lebih jelas tambahi. 1 (satu) tetes asam acetat 10% pada sediment
c. Torak Granular
Torak Granular kasar penuh dengan bintik-bintik besar, berwarna kuning pucat dengan kedua ujung tumpul. Torak Granular harus berisi bintik-bintik halus dan tidak mengisi seluruh torak, jangan sampai salah dengan torak Hyaline yang mengandung hablur-hablur fosfat amorf. Dikatakan torak Granular ini adalah torak Epitel yang mengalami perubahan (degenarated cells).
d. Torak darak
Terdiri atas :
Torak sel-sel darah putih dan torak sel-sel darah merah.
Torak bakteri dan torak lernak (Fatty casts, jarang, hanya tampak pada penyakit ginjal yang sudah parah).
E. SEDIMENT AN ORGANIK
Terdiri dari hablur-habluir kimia yang terbagi atas:
1.	Hablur-hablur yang berasal dari urine asam antara lain:
Hablur-hablur asam urat
 Hablur-=hablur urate amorph
Calsium oxalate .
 Hablur-hablur cystino
2.	Hablur-hablur berasal dari Urine alkali anatara lain:
Hablur-hablur Triple Phosphate
Hablur-hablur Calsium Carbonate
Hablur-hablur Amorph Phospate
Hablur-hablur Ammonia Biurate
',
                'gambar' => '',
            ],
            [
                'id' => 46,
                'id_mapel' => 3,
                'judul_materi' => 'Fungsi Ginjal',
                'detail_materi' => 'A.	TUJUAN PEMERIKSAAN
Untuk mengetahui :
1.	kemungkinan adanya kerusakan ginjal
2.	Derajat Gangguan fungsi ginjal
B.	FUNGSI GINJAL:
1. Mengeluarkan kelebihan cairan tubuh
2. Mengeluarkan Waste products misalnya urea, creating dan lain-lain
3. Mengeluarkan bahan-bahan asing misalnya obat-obatan
4. Menahan bahan-bahan yang dibutuhkan untuk fungsi tubuh dalam keadaan normal misalnya glucosa, asam-asam amino, protein
5. Mengatur keseimbangan elektrolit dan tekanan osmotik cairan tubuh Tes fungsi ginjal dapat digolongkan:
1. Mengukur fungsi glomeruli
2. Mengukur fungsi tubult
3. Mengukur Renal blood flow
C. MENGUKUR FUNGSI GLOMERULI
Untuk mengetahui fungsi glomeruli dapat ditempuh 2 jalan:
Mengukur G.F.R
Memeriksa Urine GFR
dapat diukur dengan beberapa cara antara lain:
1. Clearance INULIN
2. Clearance CREATININE
3. Clearance Urea
Renal Plasma Clearance dari suatu bahan yaitu volume plasma yang dibersihkan dari bahan tersebut oleh ginjal dalam suatu waktu (1 menit).
1. Clearance INULIN
 - Merupakan yang paling baik diantara Clearance yang lain
- Merupakan Clearance exogen karena bahan ini tidak ada dalam tubuh
- INULIN hanya di filtrasi oleh glomurulus dan tidak direabsorpsi oleh tubuh, sehingga Clearance inulin=G.F.R
- Karena sukar pelaksanaannya mak tidak dikerjakan dalam klinik, hanya untuk penelitian saja.
2. Clearance CREATININE
a. Rumus untuk menghitung clearance adalah sebagai berikut: U V
Clearance bahan yang Clerancenya akan ditentukan Kadar bahan per ml urine (atau per dl urine) ml urine yang diekskresi per menit V = Kadar bahn per ml plasma (atau per dl plasma) Creatinine merupakan hasil akhir dari metabolisme Phospho Creatine sehingga dengan cepat diekskresikan melalui ginjal. endogen karena Clearance creatine merupakan clearance creatinine terdapat dalam tubuh dan merupakan cara yang sederhana, baik dan cukup tepat untuk mengukur G.FR Creatinine difiltrasi oleh glomurulus dan sedikit disekresi oleh tubulus.
 b. Cara pemeriksaan:
Kumpulkan urine 24 jam
Ambil darah vena
Volume urine diukur dan tentukan juga kadar creatininenya
Tentukan kadar creatinine serum/plasma
Hitunglah Creatinine clearancenya seperti rumus diatas. Angka normal
Laki-laki : 72 - 141 ml/menit
Wanita :74 - 130 ml/menit
Kadar creatinine plasma/serum dapat ditentukan setiap saat, karena creatinine darah kurang lebih konstan.
3.	Urea Clearance :
Ureum merupakan hasil katabolisme asam amino dihati
Difiltasi oleh ,Glomurulus dan sebagian direabsorbsi oleh tubuh besarnya reabsorbsi urea bertambah bila aliran urine berkurang
Fraksi reabsorbsi minimal bila diproduksi
Urine = 2 ml/menit disebut AUGMERTATION LIMIT Pada orang normal :
Bila urine flow lebih besar atau sama dengan 2 ml/menit, maka clearance urea = 3/5 dari G.E.N = 75 ml/menit, disebut Clearance MAXIMAL
Bila urine flow lebih kecil dari 2 ml/menit, maka clearance rata-rata = 54 ml/menit, disebut Clearance STANDARD a. Rumus: UV Clearance MAXMAL = UVV Clearance STANDARD = SP (V2)
Oleh karena kadar urea berfluktuasi dari waktu ke waktu dan clearance urea sangat dipengaruhi oleh urine flow, maka sebaiknya dikerjakan dalam waktu yang singkat. b. Cara mengumpulkan bahan dan cara pemeriksaan - Penderita yang akan diperiksa harus dalam keadaan puasa Jam 09.00 penderita diberi minum 2 gelas air Jam 09.00 penderita disuruh kencing dan urinenya dibuang Jam 10.30 penderita disuruh kencing, dikumpulkan dan diberi tanda sample - 1 jam (I) Jam 10.35 darah vena penderita diambil Jam 11.30 Pednerita disuruh kencing, dikumpulkan dan diberi tanda sample - 2 jam (II) - Volume sample I dan II dihitung. Contoh : Misalnya volume sample urine 1 = 120 ml dan dikumpulkan tepat 1 jam (= 60 menit) maka ml urine per menit = 120/60 = 2 Kadar ureum darah dan urine I dan II ditentukan -52
Tirea clearance sample I dan Il dihitung sendiri-sendin dan hasilnya tidak boleh berbeda lebih dari 15% (contoh penghitungan lihat di Penuntun Praktikum Kimia Klinik) Angka normal Abnormal 40 - 70 % : Kerusakan ringan 20-40% : Kerusakan sedang < 20% : Kerusakan berat 10% Kerusakan ginjal dan uremia Interpretasi Clearance Test - Gangguan dapat disebabkan oleh: Rusaknya filtrasi misalnya pada Chronic Glomerulo Nephritis Blodd Flow di glomerulus menurun misalnya pada Nephro Selerosis Tekanan dalam tubulus yang tinggi misalnya pada obtruksi seluruh kencing D. MENGUKUR FUNGSI TUBULUS Kemamy umpulan ginjal untuk mereabsorbsi air, merupakan salah satu mekanisme homeostatik tubuh, dilak A tubuh, dilakukan dengan mengukur berat jenis urine.
dishsorbsi dari filtrat glomerulus, bahan-bahan yang lain yang Pada saat air diabsorbsi dari tertinggal dalam urine menjadi pekat Pada saat urine menjadi pekat berat jenisnya meningkat Uni Kepekaan Urine (Urine Concentration test) Skre hari setelah makan penderita diberi minum 200 ml air, kemudian pukul 2000 sampai pukul 10.00 keesokan harinya penderita tidak boleh minum sama sekali. Kencing penderita pada malam hari tidak perlu dikumpulkan (dibuan) Pelaksanaannya dilakukan sebagai berikut: 1. Pada pukul 06.00 penderita disuruh kencing dan ditampung 2. Demikian juga pada pukul 08.00 dan 10.00 3. Tentukan B.J dari masing-masing urine di atas. Angka Normal: BJ dari salah satu lebih dari ketiga urine tersebut harus sebesar 1,025 atau lebih Nilai yang lebih rendah menandakan penurunan daya konsentrasi ginjal

',
                'gambar' => '',
            ],
            [
                'id' => 47,
                'id_mapel' => 7,
                'judul_materi' => 'Pengenalan Kimia Makanan',
                'detail_materi' => 'Dasar ilmu kimia adalah Ilmu Kimia Anorganik, Organik, Analitik dan Fisika, sehingga hal-hal yang penting untuk pengetahuan diatas, penting pula dalam Ilmu Kimia makanan, termasuk dalam hal ketepatan dan ketelitian Tujuan analisa makanan adalah untuk mengetahui susunan kimia dari makanan dan dengan pengetahuan dalan hal gizi dan kimia hayat, dapatlah diketahui makananmakanan yang boleh dimakan maupun yang tidak.
Pada zaman dahulu analisa makanan hanya dilakukan secara organoleptis, yaitu hanya menggunakan indera meliputi bau, rasa, bentuk dan rabaab. Dengan bertambah majunya ilmu pengetahuan, oleh Person ( Inggris 1795 ) didapatkan analisa makanan secara kuantitatif yaitu perkiraan perbandingan antara kader air, tepung, serabut-serabut, bahan-bahan tersari dan sisa kering dalam kentang. Diketemukan pula adanya lemak, asam-asam dan gula. Peneliti-peneliti berikutnya menekankan pada perbandingan antara zat karbon dan Nitrogen dalam berbagai makanan. Kemudian Liebig dkk. ( Perancis 1840 - 1865 ) membuat pertama kali sistematika analisa makanan dengan metoda - metoda yang sedikit banyak seperti yang dilakukan pada masa kini.
Perkembangan analisa makanan sebagai ilmu pengetahuan berdasarkan atas beberapa faktor pokok :
1. Keinginan untuk memperoleh pengetahuan dalam hal gizi dan kimia hayat, yang perlu untuk mencapai keadaan makhluk hidup yang sehat melalui makanan.
 2. Standarisasi dalam produksi makanan untuk perkembangan perdagangannya.
3. Kontrol kualitas dalam memproduksi makanan
4. Pengawasan makanan untuk perlindungan terhadap konsumen, termasuk kebutuhan untuk menyusun peraturan pemerintah tentang makanan yang merugikan kesehatan dan pemalsuan makanan.
5. Kebutuhan untuk menyusun peraturan tentang pajak makanan dan minuman. Analisa makanan adalah suatu cabang dari ilmu kimia analitik. Diperlukan analisa Lualitatif dan kuantitatif, jadi daya tariknya tidak hanya pada komponen apa tetapi juga berapa banyak yang terkandung dalam makanan. Ketelitian yang diminta pada analisa makanan tergantung dari kegunaan dari hasil analisa tersebut. Misalnya : untuk keperluan gizi dan kimia hanya memerlukan lebih banyak ketelitian dari pada untuk keperluan pengawasan apakah suatu produk makanan masuk dalam batas-batas yang diminta atau tidak
',
                'gambar' => '',
            ],
            [
                'id' => 48,
                'id_mapel' => 7,
                'judul_materi' => 'Pengambilan Sampling (sampel)',
                'detail_materi' => 'Banyak kemungkinan diperoleh hasil analisa yang tidak benar disebabkan oleh kombinasi kesalahan-kesalahan pada pengambilan sampel, pengukuran-pengukuran, pemilihan metoda, cara kerja, penghitungan hasil dan sebagainya. Untuk mendapatkan sampel yang betul-betul mewakili suatu bacth atau yang disebut sampel yang representatif kadang-kadang sangat sukar. Apabila jumlah produk dalam satu bacth cukup banyak, harus diambil beberapa buah sampel. Pada sampel harus dicantumkan label yang memuat keterangan-keterangan lengkap mengenai : jumlah seluruh bahan yang diambil sampelnya, jumlah sampel itu sendiri, nomor, tanggal, pemilik, tempat pengambilan sampel dan petugas pengambil sampel. Selama dan setelah pengambilan sampel sampai saat analisa dilakukan, sampel harus dijaga supaya tidak mengalami :
1. Kerusakan oleh jasad renik
 2. Kerusakan karena aksi otolitik oleh enzim-enzim atau menjadi tengik pengaruh sinar matahari atau panas
3. Pencemaran Untuk itu sampel harus dimasukkan wadah-wadah yang dapat ditutup rapat. Untuk menghindari pertumbuhan jasad renik, sebaiknya sampel dalam lemari es. Pemakaian es kering ( CO2 padat ) sebaiknya dihindari karena akan menyebabkan sampel membeku sehingga menimbulkan kerusakan jaringan-jaringannya. PERSIAPAN TERHADAP SAMPEL Untuk mendapatkan hasil akhir yang benar dari suatu analisa sebelumnya harus dilakukan persiapan terhadap sampel. Sampel harus dibuat serba sama ( homogen ) dahulu sehingga tiap porsi yang diambil untuk analisa dapat mewakili seluruh bahan yang diperiksa. Sebagai pedoman dapat dilakukan cara berikut :
1. Serbuk atau butiran : dengan teknik perempat ( quartening) yaitu dengan meratakannnya pada selembar kertas atau aluminium foil dan dicampur. Ambil tiap kali / bagian yang berlawanan, dicampur dan diratakan lagi, sampai mendapat sampel kira-kira 250 gr. Pindah kebotol sampel dan ditutup rapat.
2. daging atau ikan dan hasil olahnya : pindahkan dari tulang-tulangnya, kulit atau kulit yang keras. Pada ikan hanya diambil bagian yang dapat dimakan. Giling dengan penggiling daging.
3. bahan setengah padat (semi solid) seperti keju atau coklat : diparut kemudian kerjakan dengan teknik perempat.
4. pasta dan cairan yang mengandung padatan : dicampur dalam blender dengan kecepatan tinggi, masukkan kebotol sampel.
5. sayuran mentah : dipotong-potong halus dan kerjakan teknik perempat. Sampel yang mudah kehilangan air harus disimpan dalam wadah yang tertutup rapat. Sampel yang mudah rusak harus disimpan dalam lemari es. Harus diingat bahwa didalarn lemari es sampel dapat menjadi kering apabila tidak dimsukkan wadah yang tertutup rapat.
',
                'gambar' => '',
            ],
            [
                'id' => 49,
                'id_mapel' => 7,
                'judul_materi' => 'Kemasan',
                'detail_materi' => 'A. Wadah Wadah atau suatu pembungkus makanan/minuman diperlukan dalam pemasaran. Fungsinya selain untuk melindungi makanan/minuman dari kerusakan, adalah untuk menambah daya tarik pembeli / konsumen. Syarat-syarat wadah / pembungkus, meliputi :
1. dapat melindungi dan mempertahankan mutu dan isi terhadap pengaruh dari luar
 2. tidak terpengaruh oleh isi
3. dibuat dari bahan yang tidak melepaskan bagian unsure yang dapat mengganngu kesehatan atau mempengaruhi mutu manakanan.
4. menjamin keutuhan dan keaslian isinya.
5. tahan terhadap perlakuan selama pengolahan, pengangkutan dan peredaran
6. tidak boleh merugikan atau membahayakan konsumen. B. Label Yang dimaksud dengan label menurut Permenkes RI nomor 329/Menkes/Per/X11/76 adalah tanda berupa tulisan, gambar atau bentuk persyaratan lain yang disertakan pada wadah atau pembungkus sebagai keterangan atau penjelasan. Pada label atau etiket harus dicantumkan :
1. Nama makanan dan atau merk dagang
2. komposisi, kecuali untuk makanan yang cukup diketahui komposisinya secara umum
3. isi / berat netto
4. nama dan alamat perusahaan yang memproduksi atau mengedarkan
5. kode produksi/ nomor bacth untuk jenis makanan tertentu yang ditetapkan oleh Menteri Kesehatan, pada label / etiket harus dicantumkan juga tanggal kadaluarsa, nilai gizi, petunjuk penggunaan dan cara penyimpanan. C. Isi netto Isi netto adalah bilangan dalam satuan metrik yang menunjukkan jumlah bahan makanan/minuman yang terdapat dalam wadah tersebut. Hal ini perlu dicantumkan untuk memenuhi ketentuan yang ditetapkan oleh Direktorat Jenderal Pengawasan obat dan makanan Departemen Kesehatan RI.
D. Nomor Registrasi Nomor registrasi adalah nomor yang menunjukkan terdaftarnya produk bahan makanan/minuman di Direktorat Jenderal Pengawasan Obat dan Makanan sebagai tanda bahwa kualitas produk tersebut telah sesuai atau memenuhi syarat sebagaimana yang dicantumkan dalam label. E. Nomor Bacth Nomor bacth adalah nomor yang menunjukkan kode produksi dari suatu produk makanan/minuman yang dikeluarkan oleh perusahaan yang memproduksi bahan makanan/minuman tersebut. F. Batas daluarsa makanan/minuman Batas daluarsa adalah waktu yang menunjukkan batas terakhir suatu produk masih memenuhi syarat baku. Daluarsa dinyatakan dalam bulan dan tahun serta dicantumkan didalam label/etiket. Bahan makanan/minuman yang telah lewat masa edarnya, harus ditarik dari peredaran untuk menjaga hal-hl yang tidak diinginkan. Contoh batas daluarsa beberapa makanan/minuman : 1. susu segar, selama satu minggu
2. susu persuasi, selama satu bulan
3. Susu steril, selama dua belas bulan
4. Susu fermentasi, selama satu bulan
5. Susu bubuk, selama dua belas bulan
6. Makanan bayi dan anak-anak, selama enam bulan
 7. Minuman serbuk yang mengandung susu, selama tiga bulan & Minuman ringan yang mengandung spisy, selama tiga bulan .
makanan kaleng :  makanan kaleng yang disteril komersial, selama dua belas buļan, makan kaleng yang diisi secara aseptic, selama dua belas bulan
',
                'gambar' => '',
            ],
            [
                'id' => 50,
                'id_mapel' => 7,
                'judul_materi' => 'Uji Organoleptis',
                'detail_materi' => 'Uji Organoleptis didasarkan pada kegiatan penguji rasa ( panelis ) yang pekerjaannya mengamati, menguji dan menilai secara organoleptis, Sensoris berasal dari Kata sense yang berarti timbulnya rasa dan selulu dihubungkan dengan panca indera, leptis berarti menangkap dan menerima schingga perkataan tersebut mempunyai pengertian dasar melakukan suatu kejadian yang melibatkan pengumpulan data (keterangan ) atau catatan mekanis dengan tubuh jasmani sebagai penerima. Sebagai contoh, rasa enak adalah hasil sejumlah faktor pengamatan yang masing-masing mempunyai sifat tersendiri, misal:
1. Tekstur (konsistensi ) adalah hasil pengamatan yang didapat berupa sifat-sifat, Junak, keras, liat. Kenyal, gurih dan sebagainya.
2. rasa (laste) dengan empat sifat dasar rasa yaitu manis, asam, asin dan pahit
3. bau ( odor) dengan berbagai sifat seperti harum, amis, apek dan sebagainya
4. warna Uji organoleptis adalah pengujian secara subyektif yaitu suatu pengujian penerimaan selera makanan (reseptance ) yang didasarkan pada uji kegemaran ( ferference ) dan analisis perbedaan (difference analysis ), sehingga dapat digolongkan menjadi :
1. Psikofisik: uji perbedaan
2. Fisikometrik : a. Uji kegemaran b. Uji penilaian dengan angka c. Uji ahli penguji rasa
3. Uji fenomena : Uji profil rasa untuk menilai atau menguji secara organoleptis diperlukan : a, lingkungan suasana terang dan beralih b. peralatan yang bebas bau e. bahan dasar yang tepat d. baku pembanding e, para panelis yang terlatih Faktor-faktor yang mempengaruhi uji organoleptis :  1. Penguji (panelis) Faktor panelis sangatlah penting peranannya, sebab pengujian tersebut tidak dapat dilakukan oleh satu orang, melainkan harus diuji dengan sejumlah panelis yang banyaknya tergantung kepada tujuan pengujian.
Para panelis harus tetap yaitu selalu sama selama awal pengujian bahan contoh dan akhir pengujian. Panelis diutamakan yang telah berpengalaman dan mempunyai kepekaan yang cukup, integritas yang tinggi, kemampuan pemusatan ingatan pikiran yang baik perasaan, intelektualitas, kesediaan dan kemauan untuk menggunakan waktu dalam menilai. Berapa macam tipe panelis atau penguji yang dipilih untuk setiap macam tujuan pengujian yaitu : a. Panelis konsumen b. Panelis analitik c. Panelis penentuan mutu d. Panelis yang terpilih 2. Penyajian contoh makanan/minuman pengolahan atau jenis pengujiannya, jumlah makanan, minuman harus cukup dan yang diuji harus secukupnya, sehingga merata dan mencapai semua daerah kepekaan dalam indera tanpa menyebabkan gangguan atau kelelahan. Pemberian kode dapat dilakukan dengan pemberian angka, huruf atau tanda khusus. 3. Pengalaman makan dan minum Pengalaman makan dan minum yang melibatkan rasa ( taste ) atau kesadaran akan nilai-nilai rasa ( flavor ) berbeda dari waktu ke waktu menurut faktor penerimaan. Panelis, yaitu : a. golongan individu, umur, kelamin, pendidikan b. lingkungan, tempat, suasana, keadaan sosial masyarakat c. faktor waktu ( periodic) Sifat kejiwaan yang mempunyai variable, seperti ingatan rasa, pengalaman, persangkaan, kelelahan adalah faktor-faktor yang mempengaruhi respon dari alat-alat indera manusia, seperti indera penglihatah dan pendengaran, maka panelis harus berada dalam kondisi yang sehat. Teknik pengujian Teknik pengujian organoleptis melalui indera pencium dan perasa. Pada teknik ini pertama harus dilakukan penciuman dengan hati-hati menggunakan hidung, kemudian dilakukan pengujian rasa. Dalam melakukan pengujian rasa harus memakai waktu yang lama dan waktu tergantung pada contoh. Setelah pengujian terhadap contoh yang pertama maka rasa yang tertinggal dimulut harya dihilangkan lebih dahulu dengan air minum biasa, dan air hangat sebelum melakukan nestöillan rasa untuk yang berikutnya."
Metoda pengujian organoleptis Beberapa macam pengujian organoleptis adalah meliputi : a. uji oleh ahli penguji rasa dengan cara penggolongan b. uji dengan angka ( Acceptability ) yaitu derajat perbedaan dengan cara penggolongan c. uji perbandingan d. uji berurutan e uji propil rasa ( descript) Dari metoda-metoda tersebut diatas untuk membedakan rasa tidak ada metoda yang memberikan kepuasan sepenuhnya.
KADAR AIR
Air selalu terkandung didalam makanan. Hanya ada beberapa jenis yang tidak mengandung air, misalnya minyak. Beberapa bahan yang berbentuk kristal yang relatif murni, misalnya gula dan garam, masih mengandung air yang diadsorpsi pada permukaan kristal. Pada sayuran segar kadar airnya 90 % atau lebih dan pada daging yang sudah dimasak masih mengandung air 50 - 65%, Air dalam makanan terdapt dalam bentuk : 1. Cairan bebas, didalamnya terlarut atau terbagi rata bahan makan 2. sebagai air hidrat 3. sebagai air yang mengisi ruangan-ruangan sel 4. sebagai air yang diadsorpsi pada permukaaan bahan padat Penetapan kadar air dalam bahan makanan termasuk kepada analisis umum yang biasa dilakukan terhadap bahan makanan. Penetapan kadar air dalam bahan makanan ini penting artinya untuk mengetahui kadar zat kering dalam makanan yang terkandung dalam bahan makanan itu. Hal tersebut dapat dilihat dari hasil analisis terhadap at makanan yang terdapat dalam beberapa bahan makanan dibawah ini : % Bahan Air Lemak Protein makanan Karbohidrat Beras Daging % Mineral 0,69 0,54 0,23 0,2 Vitamin AB AB A,B,C A,B,C Ubi 1,33 Susu Daging ayam Telur 72,2 75 21.3 12 0,3 Penetapan kadar air tergantung pada sifat bahan yang dianalisis dan penetapannya dapat dilakukan secara langsung maupun tidak langsung Penetapan secara langsung adalah pengukuran banyaknya air yang terdapat dalam contoh bahan makanan baik dengan menentukan volumenya maupun dengan menimbang beratnya.
A. Penetapan secara langsung dapat dilakukan dengan :
1. Metoda destilasi Prinsip : Kedalam bahan makanan dimasukkan pelarutan yang menyebabkan terjadinya campuran aziotrop dengan air. Dalam pemanasan keluar uap dari campuran aziotrop yang mengembun kembali dengan pendinginan. Destilat ditampung dalam tabung berskala. Aimya memisah karena Bj air lebih besar dari Bj pelarut organic sehingga air terdapat dalam lapisan sebelah bawah yang dapat dilihat banyaknya. Penentuan kadar air secara destilasi, kalau kadar airnya tinggi dan mengandung senyawa-senyawa yang mudah menguap seperti : toluene, xilol dan heptana yang berat jenisnya lebih rendah dari pada air.
2. Disamping cara-cara fisik, ada pula cara-cara kimia untuk menentukan kadar air, Me Neil mengukur kadar air berdasarkan volume gas asetilen yang dihasilkan dari reaksi kalsium karbida dengan bahan yang akan diperiksa. Cara ini dipergunakan untuk bahan seperti sabun, tepung, kulit, mentega dan sari buah. Mereaksikan bahan makanan dengan CaCz ( Kalsium karbid ) Prinsip : . Sejumlah bahan makanan dicampurkan dengan sejumlah kalsium karbid. Air yang ctrdapat dalam bahan makanan tersebut bereaksi dengan kalsium karbid sebagai berikut : CaC2 + 2H:0 - Ca(OH)2 + C2H2 Karena campuran bahan makanan dan CaCz dibiarkan ditempat yang kering, maka air yang bereaksi hanya air dari bahan makanan.pengurangan berat campuran sebelum dan sesudah dibiarkan, maka kehilangan berat menunjukkan jumlah C2H2 yang dihasilkan. Secara teoritis 1 gram C H2 sesuai dengan 1,385 gram H2O, secara praktis 1 gram C2H2 sesuai dengan 1,443 gram H2O. dengan demikian kadar air dari bahan makanan dapat dihitung. B. Penetapan secara tidak langsung Penetapan kadar air secara tidak langsung dapat dilakukan terhadap :
1. Bahan yang tahan terhadap pemanasan 100 - 105°C Sampai ditimbang, kemudian dipanaskan didalam oven sampai didapat berat konstan. Selisih beratnya adalah banyaknya air yang menguap. Biasanya sampel ditimbang dalam cawan aluminium atau cawan lain yang tidak bereaksi dengan makanan atau mudah menyerap air. Oven yang dipakai dipasang suhunya 100° - 105°C, dan dikontrol dengan termostat. Untuk mempercepat pengeringan, seringkali pada dasar cawan diberi pasir, serbuk batu apung atau asbes. Tentu saja penggunaan bahan-bahan tersebut harus ditata terlebih dahulu, berat konstannya pada suhu pemanasan yang sama.
',
                'gambar' => '',
            ],
            [
                'id' => 51,
                'id_mapel' => 7,
                'judul_materi' => 'Abu dan NaCl',
                'detail_materi' => 'Abu adalah hasil oksidasi yang sempurna dari zat-zat yang ada dalam bahan makanan / minuman pada suhu + 600°C dan sebagai oksidatornya udara. Pada proses pengabuan ada kemungkinan sebagian zat-zat mineral yang menguap, umpamanya fosfor, belerang, NaCl dan senyawa-senyawa As, Pb, Zn. Bila pemanasan terlalu tinggi, karbonat-karbonat terurai menjadi oksidasi, hal ini tidak boleh terjadi. Maksud mengetahui kadar abu terutama dalah untuk mengetahui kandungan mineral yang etrdapat dalam makanan/minuman. Uji kadar abu biasa dilakukan sebagai :
kadar abu jumlah, kadar abu yang terlarut dan yang tak larut dalam air, kadar abu yang tak larut dalam asam terdapat abu yang larut dan yang tak larut dalam air, bisa dilakukan uji alkalinitasnya. Hal ini dilakukan sebab ada beberapa bahan makanan mengandung asam-asam organic yang selama pemanasan sebagian besar terurai menjadi CO2 yang terikat oleh garam-garam alkali menjadi karbonat. Uji kadar abu yang tak larut dalam asam maksudnya untuk mengetahui adanya pengotoran terhadap makanan / minuman yang disebabkan oleh pasir tlk dan lain-lain.
Uji kadar abu dari contoh yang banyak mengandung air, sebelum diabukan terlebih dahulu harus diuapkan diatas pemanas air sampai kering. Apabila makanan / minuman banyak mengandung NaCl, uji kadar abunya dilakukan sebagai kadar abu sulfat. Hal ini dilakukan untuk mengurangi kesalahan karena pada proses pengabyan terhadap makanan yang banyak mengandung NaCl biasa timbul letupan / percikan keluarnya air hidrat dari molekul NaCl. Untuk memperoleh kadar abu, berat abu sulfat harus dikalikan 8 / 9 ( faktor yang didapat dari hasil eksperimen) NaCl (Natrium Chlorida ) Garam Natrium Chlorida termasuk gaam mineral yang dibutuhkan oleh tubuh. Garam tersebut berfungsi sebagai zat pembangun dan zat pengatur. Dalam makanan NaCl berfungsi sebagai bahan pengawet dan sebagai penyedap rasa makanan. Uji kadar NaCl dalam makanan/minuman biasa dilakukan dengan metoda Argentometri (titrimetri ) melalui proses pengabuan dengan penambahan Natrium karbonat, sehingga semua chlorida terikat sebagai garam natrium. Abu setelah diasamkan direaksikan dengan sejumlah larutan baku AgNO3 0,1 N. kelebihan larutan baku AgNO3 0,1 N dititrasi kembali oleh larutan baku KCNS 0,1 N dengan indicator ion Fe*/Volhard
',
                'gambar' => '',
            ],
            [
                'id' => 52,
                'id_mapel' => 7,
                'judul_materi' => 'Karbohidrat',
                'detail_materi' => 'Karbohidrat merupakan penyusun utama diet penduduk di seluruh dunia dan lebih dari 30 % jumlah zat gizi yang dikonsumsi diperoleh dari karbohidrat. Walaupun bahan makanan sumber karbohidrat di tiap-tiap Negara berbeda-beda tetapi kandungan karbohidrat dalam diet dan sumbangan energinya hampir sama. Bahan makanan sumber karbohidrat yang banyak dikonsumsi adalah beras, gandum, jagung, kentang, ketela pohon, ubi-ubian, pisang, sagu, cantle. Bahan makanan tersebut setiap harinya memberikan energi yang besar dan diantara sumber karbohidrat tersebut diatas yang paling banyak memberikan energi tiap hari adalah ketela pohon. Bahan makanan sumber karbohidrat berasal dari tanaman yang dibudidayakan berasa sangat enak, murah dan dapat disimpan dalam waktu yang lama tanpa perlakuan yang rumit. Karbohidrat dibentuk didalam tanaman melalui proses fotosintesa yang meliputi serangkaian reaksi kimia. Didalam tanaman terdapat klorofil atau zat warna hijau pada daun dan dengan bantuan energi sinar matahari, CO2 dan H20 akan dibentuk glukosa Gambar
 2 ). Glukosa mengalami polimerisasi membentuk pati dan selulosa. Pati dikonsumsi oleh manusia, menghasilkan energi, Co2 dan H20. selulosa dimakan hewan, kemudian daging dan susunya dikonsumsi manusia. CO2 dan H20 yang dikeluarkan manusia digunakan lagi oleh tanaman untuk mensintesa karbohidrat. Dengan demikian dapat dipahami bahwa karbohidrat disusun oleh unsure C, H dan 0. unsure-unsur tersebut membentuk sakarida. Sakarida yang disusun oleh satu molekul saja disebut monosakarida, disusun oleh 2 mol sakarida disebut disakarida dan banyak mol sajarida disebut polisakarida Sunlight Energi CO2 + H20 Energy Oxigen Glukosa Starch Gambar 2. Pembentukan glukosa
Monosakarida Monosakarida mempunyai arti penting sebagai zat gizi adalah glukosa, fruktosa dan galaktosa. Glukosa sering juga disebut dekstrosa atau gula anggur terdapat pada buah-buahan dan sayuran, Glukosa merupakan senyawa pati dan glikogen yang rumus kimianya.
3. Struktur glukosa Glukosa larut dalam air dan berasa manis. Glukosa merupakan karbohidrat yang terdapat akrasi darah manusia dan hewan dimana dia akan berfungsi sebagal energi. Kadar glukosa darah normal untuk manusia adalah 80 mg setiap 100 ml darah, Fruktosa dan galaktosa mempunyai jumlah atom CH dan O yang sama dengan glukosa tetapi sedikit berbeda susunan atom dalam molekulnya. Gambar 4. Struktur fruktosa Fruktosa atau levulosa mempunyai rasa paling manis. Fruktosa terdapat dalam madu, buah-buahan dan sayuran. Fruktosa yang masuk dalam tubuh dengan cepat akan diubah menjadi lemak didalam darah. Pada penderita diabetes, fruktosa ini kurang berbahaya, tetapi apabila fruktosa terlalu banyak dimakan dapat mengakibatkan asidosis dan naiknya asam urat dalam darah. Galaktosa tidak seperti halnya dengan glukosa ataupun fruktosa dialam, tidak berada dalam bentuk bebas. Galaktosa merupakan hasil pemecahan laktosa, apabila kekurangan enzim yang mengubah galaktosa menjadi glukosa mengakibatkan terjadinya galaktosamia. Laktosa intokrans banyak disebabkan tidak adanya enzim galaktosa didalam usus.
Disakarida Disakarida yang banyak dijumpai dalam makanan yaitu sukrosa, laktosa dan maltosa. Sukrosa merupakan gula yang banyak terdapat dalam dict. Gula tebu ataupun gula bit merupakan sukrosa murni. Sukrosa terdiri atas dua molekul monosakarida, oleh kegiatan enzim pencernaan sukrosa dipecah menjadi glukosa dan fruktosa.
4. Struktur sukrosa Sukrosa yang dimakan bila terlalu lama berada dalam mulut, mengakibatkan bakteri menjadi aktif dan merusak gigi. Laktosa dan maltosa adalah dua jenis disakarida yang hanya sedikit terdapat dalam diet, disebut juga gula susu. Dalam susu sapi terdapat laktosa sebanyak 5 % dan dalam air susu ibu terdapat 6,8 %. Didalam usus halus, laktosa dipecah oleh enzim laktosa menjadi glukosa dan galaktosa. Maltosa terdapat dalam ekstra malk, memberi rasa manis dan viskositas tinggi, juga banyak terdapat dalam sirup jagung. Maltosa juga dapat merupakan hasil pemecahan pati oleh enzim amilase. Oleh enzim matosa dipecah menjadi dua molekul glukosa.
Polisakarida Polisakarida merupakan karbohidrat kompleks yang disusun oleh beberapa ribu unit karbohidrat sederhana yang saling ikatan membentuk molekul dengan rantai lurus maupun rantai yang pembentukan dan pemecahan glikogen dalam tubuh merupakan serangkaian reaksi kimia yang kompleks dan sangat erat kaitannya dengan faktor fisiologis. Pembentukn glikogen terjadi bila kadar gula darah naik diatas normal dan lebih banyak glukosa berada dalam aliran darah. Sebaliknya pemecahan glikogen terjadi apabila karbohidrat tidak diabsorpsi oleh saluran pencernaan dan untuk kebutuhan energi, glikogen hati dengan cepat diubah menjadi glukosn dan dialirkan kedalam darah. Selulosa, Merupakan polisakarida yang hanya terdapat dalam tanaman. Selulosa merupakan komponen penyusun dinding sel dan dalam diet manusia disebut serat. Selulosa pada golongan mamalia bukan merupakan makanan, karena didalam tubuh mempunyai enzim yang diperlukan untuk menghidrolisanya menjadi glukosa. Pada golongan herbivar atau ruminansia yang mempunyai bakteri dalam lambungnya, bakteri tersebut mengaktifkan pemecahan selulosa menjadi senyawa karbohidrat lain yang dapat digunakn oleh tubuhnya. Serat dalam diet manusia membantu gerak peristaltic usus dan pembuangan bhan sisa dari saluran pencernaan. Kebutuhan serat tiap hari sebanyak 4 - 7 mg dan hal ini mudah diperoleh apabila dalam diet berisi sayuran, nasi dan buah-buahan. Komposisi kimiawi selulosa, pati dan glikogen sedikit berbeda yaitu : (a) starch ( amylose) (b) cellulose Gambar 7. Struktur pati dan selulosa
Fungsi karbohidrat Fungsi utama karbohidrat adalah menyediakan energi untuk proses-proses yang terjadi didalam tubuh. Walaupun energi yang dihasilkan lemak 2 kali energi yang dihasilkan karbohidrat, tetapi dalam diet lebih banyak mengandung karbohidrat sehingga sumbangan energi terbesar berasal dari karbohidrat. Karbohidrat juga membantu penggunaan lemak oleh tubuh. Hal ini dapat terjadi sebab pada oksidasi lemak untuk menghasilkan CO2 dan air, tergantung pada asam piruvat yang terbentuk selama oksidasi karbohidrat. Apabila jumlah karbohidrat tidak mencukupi maka akan diperoleh lebih banyak bahan-bahan keton dan akumulasi / penimbunan bahan-bahan keton tersebut akan menaikkan keasaman darah dan menurunkan kebebasan darah, keadaan tersebut disebut ketosis. Ketosis dapat terjadi pada penderita diabetes dimana sel-sel tidak dapat menggunakan karbohidrat dan juga terjadi pada penderita kelaparan dimana sel-sel menggunakan simpanan lemak untuk keperluan energi. Akibat dari ketosis yaitu penderita mengalami koma dan bila berlanjut dapat mati. Karbohidrat juga membantu fungsi system usus mamalia. Karbohidrat tersebut berperanan sebagai sumber energi untuk mikroba yang mensintesa beberapa vitamin B kompleks dalam saluran usus. Sellulosa juga membantu proses pencernaan sehingga kerja usus menjadi baik. Analis kualitatif J. Uji Molish. Reagen umum terhadap karbohidrat kedalam 2 mi larutan contoh dalam tabung reaksi ditambah 2 tetes pereaksi alfa naftol 10 % ( buat baru ) dan dikocok. Secara berhati-hati 2 ml H2SO4 pekat ditambahkan kedalam tabung reaksi tadi sehingga timbul dua lapisan cairan dalam tabung reaksi dimana larutan contoh akan berada dilapisan atas. Cincin berwarna karbohidrat dalam contoh. 2. Uji Antron sebanyak 0,2 ml larutan contoh didalam tabung reaksi ditambahkan kedalam larutan antron (0,2 % dalam H2SO4 pekat ). Timbulnya warna hijau atau hijau kebiruan menandakan adanya karbohidrat larutan contoh. Uji ini sangat sensitive sehingga juga dapat memberikan hasil positif. Jika dilakukan pada kertas saring yang mengandung selulosa. 3. Uji barfoet pereaksi terdiri dari kupri asetat dan asam asetat. Kedalam 5 ml pereaksi dalam tabung reaksi ditambah 1 ml larutan contoh, kemudian tabung ditempatkan dalam air mendidih selama 1 menit. Endapan warna merah orange menunjukkan adanya monosakarida dalam contoh. 17
4. Uji benedict pereaksi terdiri dari kupri sulfat, natrium sitrat dan natrium karbonat. Kedalam 5 ml pereaksi dalam tabung reaksi ditambahkan 8 tetes larutan contoh, kemudian tabung reaksi ditempatkan dalam air mendidih selama 5 menit. Timbulnya endapan warna hijau, kuning atau merah orange menunjukkan adanya gula pereduksi dalam contoh. 5. Uji iodin Larutan contoh diasamkan dengan HCL. Sementara itu dibuat larutan Iodin dalam larutan KI, larutan contoh sebanyak 1 tetes ditambah larutan iodine. Timbulnya warna biru menunjukkan adanya pati dalam contoh, sedangkan warna merah menunjukkan adanya glikogen atau eritrodekstrin. 6. Uji seliwanof Pereaksi dibuat secara segera sebelum uji dimulai. Pereaksi ini dibuat dengan mencampurkan 3,5 ml resorsinal 0,5 % dengan 12 ml HCL pekat, kemudian diencerkan menjadi 35 ml dengan air suling. Uji dilakukan dengan penambahan 1 ml larutan contoh kedalam 5 ml larutan pereaksi, kemudian ditempatkan dalam air mendidih selama 10 menit. Warna merah menunjukkan adanya fruktosa dalam contoh. 7. Uji Tauber sebanyak 2 tetes larutan contoh ditambah kedalam 1 ml larutan benzidina, didihkan dan didinginkan cepat-cepat. Timbulnya warna ungu menunjukkan adanya fruktosa dalam contoh. 8. Pembentukan hidrazin beberapa monosakarida dan disakarida dapat bereaksi dengan fenihidrazin membentuk suatu senyawa yang disebut osamon. Glukosa akan menjadi glukosazon dan laktosa akan menjadi laktusazon. Ini merupakan kristal kuning yang dapat dibedakan bentuknya secara mikroskopis dan titik leburnya. Uji kuantitatif karbohidrat Uji kuantitatif terhadap karbohidrat dapat dilakukan dengan beberapa cara : a. Polarimetri untuk senyawa gula yang bersifat aktif optik dan merupakan senyawa tunggal dapat ditentukan dengan menggunakan alat polarimeter. Rotasi spesifik dari suatu persenyawaan dalam larutan adalah : spesifik rotasi pada 20°C = { } 20 = 100 @ D 1.c
@ = Rotasi yang diukur ( dalam°) c = konsentrasi gula (%) 1 = Panjang tabung polarimeter ( dm) D = menunjukkan penggunaan sinar natrium. Berdasarkan rumus diatas dapat dihitung konsentrasi gula yang terdapat didalam suatu larutan apabila rotasi spesifiknya telah diketahui. b. Volumetri Uji kuantitatif terhadap gula secara volumetric dapat ditentukan dengan dua metoda yaitu metode Luff Schoorl, dengan mengukur daya mereduksi karbohidrat terhadap larutan tembaga alkalis. Garam tembaga oleh gula direduksi menjadi endapan tembaga oksida Prinsip pengujian metoda Luff Schoorl adalah sebagai berikut : gugus aldehid dalam glukosa dioksida dengan CuO yang berada dalam bentuk kompleks menjadi gugus karbonil. R = C = 0 + CuO - Cu2O + RCOOH H Kompleks CHO direaksikan secara berlebih dan kelebihannya ditetapkan secara jcdometri. CuO kompleks + H2SO4 - CuSO4 + CO2 + H2O CuSO4 + KI -- Cul2 + K2CO4 2 Cul2 - Cuzl2 + 12 12 + Na2S2O3 - 2 Na I + Na2S06 Perlu dilakukan penetapan blanko dengan menggunakan larutan tembaga dengan volume yang sama . banyaknya ml larutan Thio untuk penetapan blanko dikurangi banyaknya ml thio untuk penetapan sampel adalah banyaknya ml thio yang setara dengan jumlah gula dalam sample. Dengan menggunakan daftar table gula invert, maka kadar gula dalam sampel dapat dihitung. Metoda kedua untuk uji kuantitatif karbohidrat dapat dilakukan secara jodimetri. Prinsipnya bahwa larutan gula akan mereduksi larutan baku jodium dalam keadaan alkalis. Kelebihan jodium dititrasi dengan larutan baku Nathio sulfat menggunakan indicator kanji. Perlu dilakukan penetapan blanko dengan menggunakan air suling sebagai pengganti larutan gula. Selisih kedua titrasi tersebut menunjukkan banyaknya jodium yang bereaksi dengan sampel.
C. Gravimetri Banyaknya tembaga oksida yang dibentuk pada reduksi gula terhadap garam tembaga, dapat dihitung secara gravimetric dengan dipijarkan, ditimbang sebagai Cu20, kemudian dapat dilihat pada table banyaknya karbohidrat yang setara dengan berat Cu2o. d. Kolorimetri Tembaga oksida yang etrjadi dapat mereduksi asam molibdat menjadi oksida molibdat yang berwarba biru Zat penjemih ( Clearing agent) Untuk mendapatkan hasil yang lebih tepat dalam penetepan karbohidrat dapat ditambahkab larutan atau zat penjernih. Selain menjernihkan sampel, juga dapat mengendapkan protein dan sedikit menyerap warna. a. Allumina cream (bubur Al(OH)3 ) Larutan tawas dalam air (1 : 20 ) dimasukkan kedalam ammonia 10 % (1.1.1). Endapan yang diperoleh dibiarkan mengendap, cairan diatasnya dituang. Endapan dicuci berulang kali dengan air sampai tidak bereaksi basa. Endapan disimpan sebagai pasta b. Timbal asetat setengah basis Tiga bagian timbal asetat dan satu bagian timbal oksida yang telah dipijarkan, dicairkan diatas penangas air dan diaduk sampai timbal oksidasinya larut. c. Larutan seng besi sianida Larutan seng asetat dibuat dengan melarutkan 21,9 gram kristal seng asetat, 3 ml asam asetat glacial kedalam air dan diencerkan sampai 100 ml. larutan kalium ferosianida 10 % dalam air, dan pemakaiannya masing-masing sebanyak 4 ml untuk 250 ml larutan. d. Larutan seng sulfat 15 % dan larutan Natrium hidroksida, pemakaiannya masing masing 5 ml untuk 250 ml larutan E. Norit
',
                'gambar' => '',
            ],
            [
                'id' => 53,
                'id_mapel' => 7,
                'judul_materi' => 'Lemak dan Minyak',
                'detail_materi' => 'Lemak dan minyak merupakan zat makanan yang penting untuk menjaga kesehatan tubuh manusia. Selain itu lemak dan minyak juga merupakan sumber energi yang lebih efektif disbanding dengan karbohidrat dan protein. Satu gram minyak / lemak dapat menghasilkan 2 kkal sedangkan karbohidrat dan protein hanya menghasilkan 4 kkal 1 gram. Minyak atau lemak, khususnya minyak nabati mengandung asam-asam lemak esensial seperti asam lenoleat, lenoleat dan arakidonat yang dapat mencegah penyempitan pembuluh darah akibat penumpukan cholesterol. Minyak dan lemak juga berfungsi sebagai sumber dan pelarut bagi vitaminb-vitamin A, D, E, dan K. Lemak hewani mengandung banyak sterol yang disebut cholesterol sedangkan lemak nabati mengandung fitosterol dan lebih banyak mengandung fitosterol dan lebih banyak mengandung asam lemak tak jenuh sehingga umumnya berbentuk cair. Lemak dan minyak termasuk dalam kelompok senyawa yang disebut lipida yang umumnya mempunyai sifat sama yaitu tidak larut dalam air. Dalam penanganan dan pengolahan bahan pangan, perhatian lebih banyak ditujukan pada suatu bagian dari lipida, vaitu trigliserida. Pada umumnya untuk pengertian sehari-hari lemak merupakan bahan padat pada suhu kamar, sedangkan minyak dalam bentuk cair pada suhu kamar, tetapi keduanya terdiri dari molekul-molekul trigliserida. Lemak merupakan bahan padat pada suhu kamar, antara lain disebabkan kandungan yang tinggi akan asam lemak jenuh dan secara kimia tidak mengandung ikatan rangkap, sehingga mempunyai titik lebur yang lebih tinggi. Contoh asam lemak jenuh yang banyak terdapat di alam adalah asam palmitat dan asam stearat. Minyak merupakan bahan cair, antara lain disebabkan rendahnya kandungan asam lemak jenuh, tingginya kandungan asam lemak yang tidak jenuh, sehingga mempunyai titik lebur yang rendah. LEMAK DAN MINYAK Lemak atau minyak adalah ester dari karbon trihidroksida alcohol atau gliserol dengan asam lemak dan disebut trigliserida atau triasigliserol. Pada hidrolisa trigliserida akan terbentuk asam lemak dan gliserol. Gliserida dalam hewan adalah lemak sedangkan gliserida dalam tumbuh-tumbuhkan adalah minyak. Lemak dan minyak sering diberi nama sebagai senyawa dari asam-asam lemak tersebut. misalnya ester tristearat dari gliserol disebut triastearin, sedangkan tripalmitat dari gliserol disebut tripalmitin.
biasanya lemak dan minyak alamiah merupakan trigliserida campuran yaitu tiga bagian asam lemak tidak semua sama. H2C-OH CH(CH2) 14 COOH HįC-O-C-(CH2)14 COOH H-C-OH HC-O-C-(OH2)16 COOH + 3H20 asam palmitat + H,C-OH Gliserol 2CH,(CH2)16 COOH asam stearat H,C-O-C-(CH2)16 COOH Trigliserida Palmitodistearin Sifat lemak Sifat lemak dan minyak pada umumnya merupakan sifat gliserida dan dipengaruhi oleh komponen asam lemak. Lemak mempunyai bobot jenis lebih rendah dari air dan hampir tidak larut dalam lemak. Dalam pelarut bukan air, kelarutan lemak dipengaruhi oleh panjang rantai komponen asam dan derajat kejenuhan. Makin panjang rantai dan jenuh kelarutan makin kecil dan akan anik dengan makin banyaknya jumlah ikatan rangkap. Kelarutan dipengaruhi oleh suhu, pada pendinginan larutan lemak dalam aseton akan mengkristal trigliserida yang lebih jenuh. Perbedaan asam dipengaruhi suhu lebur dari trigliserida yang bersangkutan. Karena itu trigliserida dengan 3 molekul asam tidak jenuh berupa cair dan dengan 3 molekul asam lemak jenuh berupa padat, Bila dibiarkan diudara, lemak akan menyerap oksigen tergantung dari derajat kejenuhan. Hal ini dipengaruhi oleh suhu dan cahaya. Peroksida akan pecah menjadi aldehida dan keton dan menyebabkan lemak dan minyak menjadi tengik. Sifat lemak lain adalah sebagai berikut :
1. Pada pemanasan lama-kelamaan menjadi cair, jadi tidak mempunyai suhu lebur tertentu.
 2. Bila dipanaskan lebih lanjut mula berasap kemudian menyala dan terbakar. Suhu ini disebut titik asap ( smoke point), titik nyala ( flash point ) dan titik api ( fire point ). Hal ini penting dalam proses penggorengan.
3. Lemak menjadi tengik bila teroksidasi atau bila asam lemak dibebaskan oleh enzima.
4. Lemak membentuk emulsi dengan air dan udara. Gelembung lemak tersuspensi dalam air seperti dalam susu atau krim atau tetesan air tersuspensi dalam tiap lemak seperti dalam mentega. Udara dapat seperti suatu emulsi dalam lemak seperti lapisan krem mentega atau dalam whipped butter.
5. Lemak dapat berupa lubrikan dalam makanan, yaitu mentega mempermudah roti ditelan. 6. Lemak mempunyai daya shortening, yaitu terjalin antara protein dan amilum. Sebab-sebab kerusakan lemak
1. Penyerapan bau Minyak bersifat mudah menyerap bau. Apabila bahan pembungkus dapat menyerap lemak, maka lemak yang tertutup ini akan teroksidasi oleh udara sehingga rusak dan berbau. Bau dari bagian lemak yang rusak akan diserap oleh lemak yang ada dalam bungkusan sehingga seluruh lemak akan rusak.
2. Hidrolisa Dengan adanya air, lemak dapat terhidrolisa menjadi gliserol dan asam lemak. Reaksi ini dapat dipercepat oleh basa, asam dan enzim-enzim. Hidrolisa sangat mudah terjadi pada asam lemak rendah ( lebih kecil dari C) seperti pada mentega, minyak kelapa sawit dan minyak kelapa. Hidrolisa sangat menurunkan mutu minyak goring. Selama penyimpanan dan pengolahan minyak atau lemak menyebabkan bertambahnya asam lemak bebas. Asam lemak bebas dihilangkan dengan proses pemurnian, sekaligus menghilangkan bau untuk menghasilkan minyak yang lebih baik mutunya.
3. Reaksi oksidasi Kerusakan lemak yang utama adalah timbulnya bau dan rasa tengik, yang disebut proses ketengikan. Hal ini disebabkan oleh otooksidasi radikal asam lemak tidak jenuh dalam lemak. Otooksidasi dimulai dengan pembentukan radikal-radikal bebas yang disebabkan oleh faktor-faktor yang dapat mempercepat reaksi seperti cahaya, panas, peroksida lemak atau hidroperoksida, logam-logam berat ( Cu, Fe, Co, Mn ), logam forfirin (hematin, hemoglobin, mioglobin, klorofil), enzim-enzim lipaksidase. Molekul-molekul leinak yang mengandung radikal asam lemak tidak jenuh mengalami oksidasi dan menjadi tengik. Bau tengik yang tidak sedap tersebut disebabkan oleh pembentukan senyawa-senyawa hasil pemecahan hidroperoksida. Menurut teori yang sampai kini masih dianut orang, sebuah atom hydrogen yang terikat pada suatu atom karbon yang letaknya disebelah atom karbon lain yang mempunyai ikatan rangkap dapat dihilangkan oleh suatu kuantum energi sehingga membentuk radikal bebas. Radikal bebas ini dengan adanya oksigen (02 ) akan membentuk peroksida aktif, yang dapat membentuk hidroperoksida yang bersifat sangat labil dan mudah pecah menjadi senyawa dengan rantai mkarbon yang lebih pendek. 24
Penguraian ini bisa terjadi Jarena radiasi energi tineel energi panas, logam atau enzim Senyawa-senyawa dengan rantai C lebih pendek ini adalah asam-asam lemak, aldehidaaldehida dan keton yang bersifat volatile dan menimbulkan bau tengik pada lemak. Pencegahan ketengilan Proses ketengikan sangat dipengaruhi oleh adanya peroksida dan anti oksidan. Peroksida akan mempercepat terjadinya oksidasi, sedangkan antioksidan akan menghambat terjadinya oksidasi. Karena itu penyimpanan lemak yang baik, adalah dalam tempat tempat tertutup yang gelap dan dingin, Wadah lebih baik terbuat dari aluminium atau stainless stell dan harus dihindarkan penyimpanan dalam wadah dari logam besi, atau tembaga. Bila minyak diolah menjadi bahan makan lain, ketengikannya akan berbeda. Kandungan gula yang tinggi dapat mengurangi kecepatan timbulnya ketengikan, Misalnya, biscuit yang manis akan lebih sukar menjadi tengik dari pada yang ildak bergula. Adanya antioksidan dalam lemak akan mengurangi proses kecepatan ketengikan (proses oksidasi ), antioksidan terdapat secara alamiah dalam lemak nabati dan kadangkadang dengan sengaja ditambahkan pada bahan makanan, (lihat Permenkes No. 235/Menkes/Per/V1/79 tentang bahan tambahan makanan ) Pengujian terhadap bahan amakanan yang mengandung lemak/minyak antara lain adalah: Uji mutu yang umum pada lemak dan minyak Uji ketengikan : Uji ketengikan dilakukan untuk menentukan derajat ketengikan, dengan cara mengukur senyawa-senyawa hasi! oksidasi. Penentuan yang dilakukan meliputi penentuan bilangan peroksida, jumlah karbonil, oksigen aktif, asam tio barbiturat dan uji oven schaaal. 1. Bilangan peroksida Yang dimaksud dengan bilangan peroksida adalah banyaknya milligram equivalen peroksida yang terdapat dalam 100 gram lemak / minyak. Atau banyaknya miligrol peroksida dalam 1000 gram lemak atau minyak. Bilangan peroksida ditentukan berdasarkan jumlah lodium yang dibebaskan setelah lemak / minyak ditambah Kl. Pada prinsipnya lemak / minyak direaksikan dengan KI dalam pelarut asam asetat dan kloroform (2:1), kemudian lodium yang terbentuk ditentukan secara titrimetri dengan larutan NazS2O3. 2. Jumlah karbonil Jumlah karbonil ditentukan secara tidak langsung dengan menambahkan senyawa tertentu yang dapat membentuk warna bila direaksikan dengan karbonil, lalu dititrasi dengan larutan floroglusinol Icara Kreiss atau dengan larutan 4 dinitrofenil hidrazin (cara Happin Clark)
3. Oksigen aktif Oksigen aktif dihitung dengan cara melewatkan udara dengan kondisi tertentu pada lemak yang dipanaskan pada suhu tetap 100°C kemudian diukur waktu yang diperlukan untuk menghasilkan 20 miliequivalen peroksida. Cara ini sering dipakai untuk menentukan keadaan awal lemak dengan tanpa antioksidan. 4.Uji asam tio barbiturat Uji ini dipakai untuk menentukan adanya ketengikan lemak. Lemak yang tengik akan bereaksi dengan asam tio barbiturat menghasilkan warna merah. Intensitas warna menunjukkan derajat ketengikan. 5. Uji oven Schaal Uji oven Schaal sering dilakukan pada industri biscuit. Bahan dimasukkan kedalam gelas bersih dengan tutup yang agak longgar, supaya masih bisa masuk. Kemudian dipanaskan sampai 65°C. dalam selang waktu diukur bau dan rasanya. Bilangan Penyabunan Bilangan penyabunan adalah jumlah mg KOH yang dibutuhkan untuk menyabunkan 1 gram lemak / minyak. Untuk menetralkan sátu molekul gliserida dengan asam lemak yang rantai C=nya pendek, akan didapat bilagan penyabunan yang lebih tinggi dibandingkan dengan asam lemak yang rantai C-nya panjang Bilangan Asam Bilangan asam adalah bilangan yang menunjukkan jumlah mg KOH yang dibutuhkan untuk menetralkan asam lemak bebas yang etrdapat dalam 1 gram lemak/ minyak Bilangan Ester Bilangan ester adalah jumlah mg KOH yang diperlukan untuk menetralkan asam hasil hidrolisa seumpama 1 gram lemak / minyak. Jadi bilangan ester = bilangan penyabunan - bilangan asam. Bilangan lodium Bilangan lodium adalah bilangan yang menunjukkan jumlah gram la yang diserap oleh 100 gram lemak / miityak. Ia akan mengadisi ikatan rangkap pada asam lemak tidak jenuh baik dalam bentuk bebas maupun dalam bentuk ester. Bilangan Iodium tergantung pada jumlah asam lemak tidak jenuh dalam lemak. Lemak yang akan diperiksa dilarutkan dalam CHCL (CCO) 26
kemudian ditambah larutan Jodium berlebih (0,1 - 0,5 gram). Sisa lodium yang tidak bereaksi dititrasi dengan larutan tiosulfat. Ada dua cara yang digunakan untuk mengukur bilangan jodium tersebut, yaitu cara Hanus dan cara Wijs. Pada cara Hanus, larutan iodium standar dibuat melarutkan 12 dan Br2 dalam larutan asam asetat pekat. Sedangkan pada cara Wijs, larutan standar Jodium dibuat dengan melarutkan 12 dan sodium klorida dalam larutan asam pekat glacial. Fumgsi iodium-beramida dan sodium klorida pada kedua larutan standar tersebut adalah sebagai pemicu reaksi. Uji kualitatif terhadap minyak mineral Untuk mengetahui apakah lemak / minyak murni tidak tercampur dengan minyak mineral, maka dilakukan uji minyak mineral. Bilangan Hehner Jumlah persen asam lemak tidak larut ditambah bagian tidak tersabunkan dalam minyak atau lemak. Bilangan Reichert - Meisel Jumlah ml Natrium hidroksida 0,1 N yang dibutuhkan untuk menetralisir asam lemak yang larut dalam air yang didestilasi dari 5 gram lemak atau minyak dengan kondisi tertentu. Sebagian asam lemak yang diperoleh dari lemak dan minyak menguap dengan uap air dan sebagian tidak. Asam lemak yang menguap : asam butirat, kaproat, kaprilat, kaprat, laural dan asam miristat. Asam butirat, kaproat larut dalam air dan asam kapriiat dan kaprat sedikit larut dalam air ditetapkan dalam bilangan Reichert - Meissl. Asam kaprat, laurat dan miristat ditetapkan dalam bilangan polenshe. Bagian tidak tersabunkan Zat yang tidak larut dalam air setelah penyabunan lemak digolongkan kedalam bagian yang tidak tersabunkan. Dalam minyak / lemak murni bagian tidak tersabunkan terdiri atas kolesterol dan sitosterol. Yang termasuk kedalam bagian tidak tersabunkan adalah 200 sterin dan fitosterin, hidrokarbon dan alcohol tinggi. Juga pemalsuan dengan minyak mineral mempertinggi bagian tidak tersabunkan. Jadi bagian tidak tersabunkan merupakan uji kemurnian. Indeks bias Indeks bias tergantung dari suhu, karena itu penting untuk mengetahui suhu penetapan. Biasanya lemak berupa cair pada suhu 40°C tetapi daftar yang ada pada 20°C. 27
Suhu lebur Gliserida murni dapat dihablurkan dan mempunyai suhu lebur tetap. Cara penghabluran yang berbeda dapat memberikan hablur dengan suhu lebur yang bervariasi. Lemak yang merupakan campuran berbagai jenis gliserida tidak mempunyai suhu lebur yang tajam. Penyabunan dan zat yang tidak tersabunkan. Penyabunan adalah hidrolisa ester, biasanya dengan mendidihkan dalam alkali. Trigliserida adalah ester, bila direaksikan dengan kalium hidroksida, maka 3 molekul kalium hidroksida bereaksi satu molekul lemak : Gambar II. 1. Reaksi penyabunan lemak Apabila lemak atau minyak direaksikan dengan alkali maka trigliseridatrigliserida, fosfolipida waxes dan asam lemak bebas akan membentuk sabun yang terdisperi di dalam air, dan hasil. 28
Uji kuantitatif Untuk mengetahui kadar lemak dari suatu bahan, dilakukan beberapa cara antara lain : a. cara Rose Gottlicb b. Cara HCL dengan alat Soxhlet c. Cara Gerber. Prinsip pengujian kadar lemak : Berdasarkan sifat lemak yang mudah larut dalam pelarut organic, maka uji kadar lemak dilakukan dengan cara ekstraksi. Pelarut organic yang umumnya digunakan adalah petroleum eter atau dietil eter. Setelah pelarutnya diuapkan, lemaknya ditentukan kadarnya dengan cara ditimbang. Lemak yang biasa terdapat dalam bahan makanan, umumnya tertutup oleh zat-zat lain. Misalnya kacang tanah lemaknya terdapat dalam sel-sel dari selulosa. Dalam daging atau susu, lemaknya biasanya tertutupi oleh dinding protein. Lemak tersebut harus dibebaskan dengan memanaskannya dengan HCL 25 % sehingga selulosanya ataupun proteinnya larut sedangkan lemaknya tidak. Cara pengujian ini disebut cara HCL dan alat yang digunakannya adalah alat sokslet.
',
                'gambar' => '',
            ],
            [
                'id' => 54,
                'id_mapel' => 7,
                'judul_materi' => 'Protein',
                'detail_materi' => 'Protein termasuk suatu zat makanan yang sangat penting bagi pertumbuhan, karena selain berfungsi sebagai bahan atau sumber kalori yang diperlukan atas asam amino yang mengandung unsure-unsur C, H, O dan N yang tidak dimiliki oleh lemak ataupun karbohidrat. Molekul protein dapat mengandung fosfor, belerang atau logamlogam lain misal : besi dan tembaga. Protein adalah bagian utama dari seluruh kehidupan sel tanaman dan hewan, karena protein merupakan bagian utama dari penyusun sel. Protein adalah polimer dari beberapa 21 asam amino yang bergabung bersama dengan ikatan peptida. Akibat berbeda rantai penyusun dari asam amino penyusun • protein makan dapat mempunyai sifat kimia berbeda dan juga berbeda struktur sekunder dan tersier. Asam amino digolongkan berdasarkan sifat kimia rantai penyusun. Pengujian protein metoda konvensional digunakan untuk mengetahui kadar protein dalam makanan berdasarkan penetapan jumlah Nitrogen total yang kemudian dikonversikan menjadi protein. Pengujian protein semakin berkembang tidak hanya berapakah kandungan protein dalam makanan yang diuji, namun sekarang telah berkembang asam-asam amino apakah yang menyusun protein tersebut dan berapakah kandungannya.
II. KOMPOSISI ASAM AMINO Asam amino bergabung bersama menggunakan ikatan peptida membentuk protein struktur primer. Komposisi asam amino dibentuk secara alami dengan struktur sekunder dan tersier. Sebaliknya ini adalah faktor penting termasuk sifat dan fungsi dari protein makanan dan perlakuan selama prosessing dari 2 asam amino, hanya 8 yang penting bagi nutrisi manusia. Jumlah asam amino esensial yang terdapat didalam protein dan ketersediaan penetapannya dari kualitas nutrisi protein, secara umum protein hewani lebih tinggi kualitasnya dari protein nabati.
III. KLASIFIKASI PROTEIN Protein adalah molekul komplek dan klasifikasinya umum didasarkan atas kelarutan dalam pelarut yang berbeda. Dengan bertambahnya pengetahuan, seperti meningkatnya ilmu pengetahuan komposisi molekuler dan diketemukannya struktur, ataụ criteria lain digunakan sebagai dasar klasifikasi ini termasuk kelakuan dalam ultrasentrifugasi dan sifat elektroporetiknya. Protein dibagi menjadi 3 group utama yaitu protein sederhana, terkonjugasi dan derivat protein. 30
1. Protein sederhana Protein sederhana hanya menghasilkan asam amino pada hidrolisa Albumin Larut dalam air netral dan bebas garam. Biasanya adalah protein dengan bobot molekul rendah, misal albumin telur, laktalbumin dan serum albumin dalam protein ( air dadihnya ) dari susu, leukosin dari seralia dan legurelin dalam biji kacang-kacangan b. Globulin Larut dalam larutan garam netral dan hampir tidak larut dalam air. Misal serum globulin dan B-laktoglobulin dalam susu, myosin dan aktin dalam daging, glisin dalam kedele. c. Glutelin Larut dalam asam atau basa encer, tidak larut dalam pelarut netral, protein ini terdapat pada seralia, misal glutenin dalam gandum dan orizonin dalam beras., d. Prolamin Larut dalam etanol 50 - 90 % dan tidak larut dalam air. Protein ini mempunyai prolin dan asam glutamat dalam jumlah besar dan terdapat dalam seralia. Misal zain dalam jagung, gliadin dalam gandum dan hordein dalam barley. e. Skelroprotein Tidak larut dalam air dan pelarut netral dan tahan terhadap enzim hidrolisa. Ini merupakan serta protein dan berguna sebagai pengikat. Kolagen dari jaringan otot termasuk dalam group ini dan gelatin merupakan derivat dari kolagen. Elastin adalah komponen dari tendon dan keratin dari rambut dan kuku.. & Protamin Merupakan basa kuat yang mengandung molekul berbobot rendah ( 4000 - 8000 ), yang kaya akan arginin, misal klupein dari ikan herring dan scrombin dari ikan mackarel, oleh sebab itu bersifat amfoter artinya dapat bereaksi dengan asam atau basa gugus yang bereaksi dengan asam 3. Derivat Protein Senyawa ini diperoleh dengan metoda kimia atau enzimatil dan dibagi menjadi derivat primer dan skunder tergantung pada luas dari perubahan yang telah diambil. Derivat primer sedikit termodifikasi dan tidak larut di dalam air. Derivat skunder lebih luas permukaannya dan termasuk proteuses, pepton dan peptida. Perbedaan antara hasil uraian adalah ukuran dan kelarutan. Seluruhnya larut didalam air dan tidak terkoagulasi oleh panas, tetapi proteuses dapat diendapkan oleh larutan ammonium sulfat jenuh. Peptida mengandung dua atau lebih asam amino residu. Kerusakan dari produk terbentuk selama prosessing dari berbagai makanan, misal: selania mematangkan keju.
IV. DENATURASI
 Denaturasi adalah proses perubahan dalam struktur tanpa pemecahan ikatan kovalent. Proses ini adalah anch pada protein dan efek protein nerbeda hingga derajat berbeda. Denaturasi dapat diakibatkan oleh beberapa senyawa atau bahan dan sangat penting adalah panas, pH, garam, asam, basa dan berbagai jenis senyawa kimia atau fisika yang dapat merubah struktur protein. Dengan adanya denaturasi dapat merubah tekstur dan bau, rasa dari makanan.
 A. Sifat protein
1. Protein bersifat amfoter NH2 Rumus umum protein adalah R-C H COOH oleh sebab itu bersifat amfoter artinya dapat bereaksi dengan asam atau basa gugus yang bereaksi dengan asam adalah amino bebas sedangkan yang bereaksi dengan basa adalah gugus karbohidrat bebas. Protein dapat bersifat asam atau basa, tidak saja bergantung pada banyaknya gugus karboksilat atau amino, tetapi juga pada letak gugus tersebut apakah dekat permukaan atau tertutup dalam molekul protein.
2. Protein bersifat mengikat ion Protein dapat mengikat kation atau anion dengan cara bereaksi dengan gugus amino tau karboksilat. Pada pH diatas titik isoelektrisnya suatu protein bersifat ion negatif dan dapat mengikat kation, NH3 NH2 R-C-COO® + Na* + OH --R-C-COONa+ H20 . н н Pada pH dibawah titik isoelektrisnya protein bersifat ion positif dan dapat mengikat anion NH NH R-C-C00- + CL- + H+ --R-C-COOH H Н Pada titik isoelektris protein merupakan zwitter ion dan muatannya seimbang. NH* R-C-C00 32
B. Uji Kualitatif Protein Protein mempunyai ikatan peptida yang dapat bereaksi dengan tembaga (+2) dalam suasana basa, membentuk senyawa kompleks tembaga yang berwarna ungu. Uji kualitatif ini dikenal sebagai uji cara Diuret, PENGUJIAN KUANTITATIF PROTEIN DALAM MAKANAN Hingga akhir-akhir ini penetapan kandungan protein dalam makanan / mimaran hanya dilakukan dan ditetapkan kandungan nitrogen organic menggunakan prosedur Kjeldahl, Bekarang beberapa metoda Kimia dan fisika sebagai metoda alternatif telah ada, bahkan beberapa metoda telah dilakukan secara semi otomatik bahkan hingga otomatik Metoda umum jumlahnya dapat dihitung untuk penetapan nitrogen di dalam bahan makanan telah dibuat oleh lilevik (1970) dan Pomerasa dan Meloen (1978), Lakin 1978 ) telah mengembangkan lebih modern,Prosedur Kjeldahl Walaupun telah dimodifikasi beberapa tahun, prosedur dasar kjeldahl tetap terjaga posisinya sebagai teknik yang paling dipercaya untuk penetapan nitrogen organic. Lebih lanjut hasil yang diperoleh dengan cara kjeldahl digunakan untuk mengkalibrasi metoda fisika dan otomatik, Metoda kjeldahl berdasarkan pembakaran secara basah ( destruksi basah ) dari sampel dengan asam sulfat pekat dengan adanya katalisator logam dan lain katalisator yang berefek mereduksi Nitrogen organic dalam sampel makanan menjadi ammonia yang tertahan sebagai ammonium sulfat. Hasil digesti dibuat alkali dan disuling atau menggunakan penyulingan uap untuk membebaskan ammonía yang ditampung dalam asam lemah dan kelebihan asam dititrasi menggunakan larutan baku basa. Umumnya sebagai katalisator digunakan merkuri sebagai merkuri oksida disetujui bahwa katalisator ini yang saling efektif, dengan selenium juga efektif, tetapi kedua senyawa tersebut sangat berbahzya dan beracun serta menimbulkan problem pada pembuangan sampahnya. Lebih lanjut merkuri bentuk ammonia komplek selama digesti memerlukan penambahan natrium tio sulfat untuk mencegah kompleks dan melepaskan ammonia. William ( 1976 ) merekomendasikan penggunaan campuran tembaga (II) sulfat dan titaniurn dioksida. Walaupun menurut Wall dan Gehrke ( 1975 ) memandang. bahwa campuran kurang efektif. 29
Reduksi pada waktu digesti telah dipertajam dengan penambahan kalium atau natrium tio sulfat yang meningkatkan suhu digesti, Katalisator logam yang untuk memudahkan pemakaiannya tersedia dalam bentuk tablet yang etrsusun dengan dasar kalium sulfat. Concon dan Soltneass ( 1973 ) dan Koops ( 1975 ) dan rekan melaporkan bahwa penambahan hydrogen peroksida menaikkan perolehan kembali digesti dan menurunkan terjadinya busa. Secara tradisional, ammonia yang dibebaskan dari digesti dengan membuat suasana alkali, disuling kedalam larutan standar yang telah diketahui secara kuantitatif dalam asam encer yang akhirnya dititrasi menggunakan larutan standar basa untuk mendapatkan kandungan nitrogen dari sampel. Sekarang yang popular disuling kedalam larutan asam berat 4 % dan titrasi secara langsung ammonia menggunakan asam sulfat standar. Prosedur mengikuti prosedur makro Kjeldahl berdasarkan AOAC. Reaksi : Reaksi pada saat destruksi NH2 R-C-COOH - CO2 + H20 = NH3 +SO2 H .Cutt NH3 + H2SO4 -- NH4HSO4 Pada saat destilasi NH3 NH4HSO4 + NaOH - Na2SO4 + NH3 + H2O NH3 + HCL -- NHACL Pada saat titrasi kelebihan HCL + NaOH -- NaCl + H20 Faktor-faktor konversi untuk kadar protein 6,38 6,26 5,46 5,93 1. Susu 2. Jagung 3. Kacang tanali 4. Beras 5. Tepung gandum 6. Tepung gandum 7. Kacang kedelai 5,70 5,70 5,71 35
BAB X PENETAPAN KADAR ETANOL / METANOL PADA MINUMAN BERALKOHOL
Minuman merupakan kebutuhan pokok bagi manusia didunia baik mereka yang berstatus sosial rendah maupun tinggi. Fungsi minuman bagi manusia sangat beraneka ragm, muli dari obat penghapus dahaga, menambah kalori, penyegar dan lain-lain. Kebutuhan minuman semakin membengkak mengikuti pembengkakan populasi manusia di dunia dan searah dengan perkembangan teknologi jenis minuman maupun kemasannya semakin beraneka ragam pula. Secara garis besar minuman dikelompokkan menjadi 2 kelompok yang besar yakni : - minuman ringan - minuman keras (beralkohol) berdasarkan Peraturan Menteri Kesehatan RI No. 86/Menkes/Per/IV/77 tentang minuman keras dijelaskan bahwa minuman keras dikelompokkan menjadi 3 yakni : - kelompok A, mengandung etanol 1 - 5 % v/v - kelompok B, mengandung etanol >5 - 20 % v/v - kelompok C, mengandung etanol > 20 - 55 % v/v Sedangkan minuman yang berisi alcohol dengan kadar dibawah kelompok tersebut diatas dinyatakan sebagai minuman ringan. Minuman keras yang beredar dipasaran sangat beragam ditinjau dari cara pengolahan dan kandungan etanolnya. Menurut edaran Direktur Jenderal Pengawasan Obat dan Makanan No. 00365/5/11/86 tertulis beberapa jenis minuman keras beserta kandungan etanolnya.
Beberapa alcohol alfatik merupakan bahan yang bersifat toksis, tetapi dari kelompok tersebut hanya etanol yang mempunyai efek farmakologi. Biarpun etanol sangat terbatas pemakaiannya sebagai obat, tetapi bahan ibi sangat banyak dipergunakan dalam bentuk minuman sehingga menarik untuk dipelajari. Etanol ( ctil alcohol ) merupakan alcohol alifatik sederhana dengan rumus molekul CH3CH2OH. Dapat diperoleh dari hasil oksidasi gula secara fermentasi, misal fermentasi dari teles tebu atau buah-buahan. Beberapa minuman beralkohol dapat ditemui di pasaran termasuk anggur, bir dan minuman lain hasil fermentasi. Minuman yang diperoleh dari hasil fermentasi mempunyai kandungan alcohol relatif rendah sebab kadar alcohol lebih dari 12 % akan bersifat toksis bagi ragi yang dipergunakan untuk fermentasi. Minuman dengan kadar alcohol tinggi biasanya merupakan hasil destilasi dari minuman hasil fermentasi tersebut diatas. Pada umumnya kita percaya bahwa segala akibat yang ditimbulkan dari minuman beralkohol berasal dari pengaruh alcohol. Metanol / Alofatik sikert u dapat membut dan mata. Metanol : metil alcohol alifatik yang paling sederhana. Senyawa ini tidak mempunyai manfaat untuk pengobatan, tetapi banyak dipergunakan sebagai pelarut maupun sebagai bahan bakar. Kerja farmakologi methanol mirip dengan etanol, sehingga bahan itu kadang kala dipergunakan sebagai pengganti alcohol. Tapi penggantian ini memberikan hasil yang lebih jelek bagi kesehatan manusia karena dapat menyebabkan seseorang mengalami kebutaan, tak sadarkan diri dan mati.
Kecepatan absorbsi methanol lebih kurang 1/7 kali kecepatan etanol, dan keracunan methanol mula-mula ditunjukkan dengan pembentukan formaldehid atau asam formiat. Pembentukan kedua bahan itu akan menyebabkan kerusakan jaringan mata, dan hal ini akan menyebabkan seseorang akan mengalami kebutaan sebagian atau kebutaan total. Kerusakan mata ini diakibatkan oleh kerusakan pada pusat saraf penglihatan tetapi bukan disebabkan oleh kerusakan pada retina. Pengujian etanol maupun methanol dapat dilakukan melalui beberapa metoda yaitu metoda fisika, kimia fisika dan metoda enzimatik. Metoda fisika berdasarkan pada penetapan bobot jenis dari cairan yang diuji dan penetapan dengan cara ini akan dihitung alcohol total yang dihitung sebagai etanol Metoda kimia fisika berdasarkan pada pemisahan dari methanol dan etanol didalam kolom kromatografi gas. Disamping itu dapat pula ditetapkan berdasarkan sifat resapan maksimum methanol pada panjang gelombang tertentu setelah methanol tersebut direaksikan dengan asam kromatropat. Metoda enzimatis berdasarkan reaksi oksidasi secara enzimatis antara alcohol dengan nikotinamid dinukleotida (NAD) dengan katalisator alcohol dehidrogenase (ADG ). Penetapan ini akan menghitung alcohol total dihitung sebagai etanol. Penetapan etanol secara fisika Dasar dari metoda ini adalah gravimetric yakni penetapan bobot jenis dari larutan uji setelah dilakukan proses destilasi. Penetapan bobot jenis dilakukan pada temperatur tertentu dan kadar alcohol ditetapkan berdasarkan table yang menggambarkan hubungan antara bobot jenis dengan kadar etanol (Tabel ini terdapat di Farmakope Indonesia edisi III ). Prosedur pengujian dapat dilakukan melalui 3 tingkat seperti tersebut dibawah ini : 1. ekastraksi / destilasi -> Penyulugon -> pe mitsd hou 2 porsuqan. 2. penetapan bobot jenis 3. penetapan kadar alcohol Penetapan kadar alcohol Dari data bobot jenis cairan uji yang telah ditetapkan dengan cara seperti tersebut diatas, dapat ditetapkan kadar etanolnya berdasarkan table bobot jenis versus kadar etanol ( daftar ini termuat di Farmakope Indonesia edisi III ). Contoh : Bobot jenis cairan uji hasil perhitungan = 0,8115 38
',
                'gambar' => '',
            ],
            [
                'id' => 55,
                'id_mapel' => 8,
                'judul_materi' => 'Pengenalan Kimia Air',
                'detail_materi' => '
Air merupakan bagian terbesar dari kehidupan di permukaan bumi. Air mendominasi permukaan bumi dengan 97 % air lautan dan hanya 3 % yang berasal dari air hujan, salju, es dan air dalam tanah. 97 % air tawar di permukaan bumi berada di daerah kutub secara permanen dalam bentuk gunung es atau glacier sedangkan sisanya berada di dalam lapisan tanah.
Dari kenyataan ini di peroleh bahwa hanya sebagian kecil saja dari air yang ada di bumi yang dapat dipergunakan oleh manusia. Untuk itu pemeliharaan sumber air untuk menjamin penyediannya.
PERANAN AIR BAGI KEHIDUPAN
Air berperan dalam proses metabolisme makhluk hidup. Tubuh manusia mengandung 60-70% air dari seluruh berat badannya. Kehilangan 20% dapat menimbulkan kematian pada manusia. Air juga berperan dalam kegiatan sehari-hari. Untuk kebersihan diri dan juga menjalankan kegiatan industri dalam skala yang lebih besar lagi. Selain peran-peran positifnya air juga berperan dalam menimbulkan musibah bagi kehidupan. Bencana alam tak kurang yang disebabkan oleh air. Air berperan pula sebagai tempat berkembangbiaknya bibit penyakit dan berperan pula dalam penularannya.
MACAM-MACAM AIR
Air berada di bumi sebagai suatu proses alam yang berlanjut sehingga merupakan suatu siklus. Energi untuk berlangsungnya siklus ini diperoleh dari matahari. Sinar matahari sebagai sumber energi akan memanasi permukaan bumi termasuk sumber air permukaan hingga terjadi penguapan (evaporasi). Penguapan dari hasil proses biologis hewan, tumbuh-tumbuhan dan manusia disebut sebagai transpirasi. Uap air ini di udara mengalami peristiwa pengembunan yang disebut kondensasi.
Proses kondensasi dibagi menjadi 2 :
1.	Proses coalescence
Pada proses ini uap air di udara saling berbenturan (hamine) partikel yang lebih besar (awan) dan karena berat lalu turun ke bumi sebagai hujan
2.	Proses Bergeron
Pada proses ini terjadi awan yang diatasnya terdapat kristal-kristal es sedang bagian bawahnya menjadi sangat dingin. Kristal es itu lalu menjadi tetes-tets air dan selanjutnya turun sebagai hujan.
Air hujan yang turun ke bumi sebagian mengalir dan sebagian lagi terserap ke dalam tanah (infiltrasi). Air hujan yang masuk ke dalam tanah ini dapat keluar kembali ke sungai-sungai dan disebut interflow sedang yang tersimpan di dalam tanah disebut air tanah (ground water)
Berdasarkan sumbernya air dapat dibagi menjadi :
1.	Air angkasa seperti : hujan, salju dan es dengan karakteristik bersifat lunak (soft water) karena kurang mengandung mineral, dapat mengandung beberapa zat yang ada di udara seprti CO2 agresif dan NH3 serta dari segi bakteriologis relatif lebih bersih dari air permukaan.
2.	Air tanah seperti : mata air, sumur dangkal, sumur dalam dan air artesis dengan karakteristik debitnya dapat berubah-ubah dipengaruhi oleh curah hujan ataupun run off, kurang baik untuk langsung dikonsumsi.
3.	Air permukaan seperti : air sungai, air rawa, danau, telaga dan sebagainya. Air ini mempunyai karakteristik mengandung banyak mineral, lebih praktis untuk mendapatkan dan membaginya, dapat dibuat dekat pemukiman dan dari segi bakteriologis menguntungkan.

STANDAR KUALITAS AIR
Standar kualitas air adalah : ketentuan-ketentuan yang dituangkan dalam bentuk pernyataan atau angka yang menunjukkan persyaratan-persyaratan yang harus dipenuhi agar air tersebut tidak menimbulkan gangguan-gangguan kesehatan, gangguan teknis atau gangguan dalam bentuk aestetika.
Fungsi dari standar kualitas air adalah : sebagai ukuran untuk mengukur kualitas air :
Ada macam-macam standar kualitas air misalnya :
1.	Syarat fisik,
Perubahan sifat fisik kualitas air dari keadaan alami dapat digunakan sintetik petunjuk tentang kondisi dari suatu jenis badan air. Nilai-nilai normal dari sifat fisik kualitas air sangat tergantung pada berbagai kondisi spesifik badan air dan adanya pencemaran yang mungkin masuk ke dalam badan air tersebut. Tingkat perubahan yang nyata dari beberapa parameter dan perubahan yang terjadi sesuai dengan perjalanan waktu.
2.	Syarat kimia
Nilai-nilai parameter sifat kimia air merupakan petunjuk penting untuk menggolongkan tingkat kualitas suatu badan air. Beberapa pokok yang harus dipertimbangkan dan diperhatikan sehubungan dengan sifat kimia air diantaranya yaitu :
a.	senyawa-senyawa kimia yang terdapat di dalam air yang keberadannya secara alami atau sintesis.
b.	Senyawa-senyawa kimia mempunyai sifat tidak stabil, agak stabil dan stabil
c.	Senyawa-senyawa kimia yang selalu terdapat dalam air dalam jumlah yang cukup dan terutama sangat mempengaruhi kualitas atau ada senyawa-senyawa yang tidak terlampau banyak.
3.	Sifat mikrobiologis
Air merupakan media yang baik untuk kehidupan organisme pathogen maupun non pathogen sehingga timbul istilah "water born disease". Adanya bakteri-bakteri seperti Salmonella typhi dan vibrio cholerae menunjukkan air sudah terkontaminasi oleh tinja. Jenis-jenis organisme non patogen diantaranya yaitu Actinomycetes, algae, bakteri coli, bakteri Fe dan rotifera. Komunitas yang ada pada suatu badan air memberikan gambaran tingkat bahan organic maupun pencemaran organic.
4.	Syarat radioaktifitas
Pengaruh bahan-bahan buangan yang memberikan emisi radioaktif akan membahayakan manusia. Beberapa bahan yang dapat mengadakan emisi radioaktif pada kegiatan tertentu dan dikenal dengan nama isotop. Badan-badan air dapat mengandung bahan radiaktif yaitu berasal dari kegiatan manusia yang berhubungan dengan nuklir melalui pencemaran bersama air hujan.
Menurut PP-RI No. 20 Tahun 1990 berdasarkan peruntukannya air dibagi atas 5 golongan
1.	Air golongan A yaitu air pada sumber air yang dapat digunakan sebagai air minum secara langsung tanpa pengolahan dahulu.
2.	Air golongan B yaitu air yang dapat digunakan sebagai air baku untuk diolah menjadi air minum dan keperluan rumah tangga lainnya.
3.	Air golongan C yaitu air yang dapat dipergunakan untuk keperluan perikanan dan peternakan
4.	Air golongan D yaitu air yang dapat dipergunakan untuk keperluan pertanian dan dimanfaatkan untuk usaha di perkotaan, industri dan listrik tenaga air.
5.	Air golongan E yaitu air yang tidak dapat dipergunakan untuk keperluan tersebut pada peruntukkan air golongan A, B, C dan D,

Air libah dibagi menjadi 4 golongan :
1.	Limbah golongan I yaitu air limbah yang dibuang ke dalam air golongan B
2.	Limbah golongan Il yaitu air limbah yang dibuang ke dalam air golongan C
3.	Limbah golongan III yaitu air limbah yang dibuang ke dalam air golongan D
4.	Limbah golongan IV yaitu air limbah yang dibuang ke dalam air golongan E
',
                'gambar' => '',
            ],
            [
                'id' => 56,
                'id_mapel' => 8,
                'judul_materi' => 'Cara Pengambilan Sampel Air',
                'detail_materi' => 'PENGAMBILAN AIR DAN PERSYARATAN TEMPATNYA UNTUK PEMERIKSAAN KIMIA
Jumlah contoh air untuk pemeriksaan kimia lebih kurang 2 liter dan tidak boleh digabungkan untuk pemeriksaan mikrobiologis. Dan segera mungkin langsung diperiksa dilaboratorium.
Beberapa hal yang harus diperhatikan :
	Untuk pemeriksaan AI, Cd, Cr, Cu, Fe, Pb, Mn, Hg, Zn dan zat organic perlu dipisahkan dan diberi HCL,
〖HNO〗_3 atau
H_2 〖SO〗_4 pekat hingg pH 3,5 agar tidak terjadi pengendapan dan adsorbsi oleh dinding botol.
	Untuk pemeriksaan senyawa nitrogen contoh air dipisahkan dan diawetkan dengan beberapa tetes toluol
	Untuk pemeriksaan suhu, gas terlarut langsung diperiksa di lapangan
	Senyawa besi dan mangan valensi rendah larut sedangkan valensi tinggi mengendap
	Jasad renik dapat merubah keseimbangan nitrit, ammonia, menurunkan kadar phenol, BOD dan mereduksi sulfat menjadi sulfide
	Sisa klor akan direduksi menjadi klorida
	Sulfida, sulfit, ferro, iodida dan cyanida akan hilang karena pengaruh oksidasi
	Warna, bau dan kekeruhan dapat bertambah, berkurang atau berubah sifatnya.
Peralatan :
	Botol timba dengan pemberat dari timah putih dan pengikat dari kuningan atau tembaga dan tidak boleh pengikat dari besi karena dapat berkarat. Mulut botol harus bermulut besar sehingga dapat dimasuki sumbat karet yang diberi lubang 2.
	Jirigen plastik 1000 ml
	Jirigen plastik 500 ml
	Botol plastik 250 ml
	Botol plastik pereaksi (tutup asah) 250 ml
Bahan-bahan :
	H_2 〖SO〗_4 pekat ditambahkan ke botol 500 ml
	Toluol 5 tetes ditambahkan ke 250 ml
Cara kerja :
	Air pada pengambilan pertama dibuang untuk membilas botol timba
	Air pada pengambilan ke dua dipakai untuk membilas wadah-wadah penyimpanan contoh air
	Air pada pengambilan ketiga dan seterusnya dipakai untuk contoh air
	Pada masing-masing wadah ditempelkan label yang berisi data-data kode, jam, tanggal dan tempat pengambilan contoh air, pengawet yang digunakan, nama pengambil contoh air, tanda tangan pengambil contoh air dan jenis pemeriksaannya (kimia/mikrobiologi)
PENGAMBILAN AIR DAN PERSYARATAN TEMPATNYA UNTUK PEMERIKSAAN MIKROBIOLOGI
Air yang tidak diolah atau air yang telah tercemar oleh bahan pencernar seperti limbah, faeces besar kemungkinannya mengandung bakteri patogen. Untuk menentukan adanya bakteri patogen tersebut digunakan indikator bakteri golongan coli (coliform bakteri). Dengan kata lain bakteri golongan coli selalu dihubungkan dengan bakteri patogen. Oleh karena itu dalam pemeriksaan mikrobiologis air selalu ditekankan pada pemeriksaan bakteri koliform.
Dalam pemeriksaan mikrobiologis sangat dihindarkan terjadinya kontaminasi, untuk itu dalam pengambilan contoh air alat-alat yang akan dipakai harus disterilkan dahulu.
Peralatan :
Botol bermulut besar yang steril (autoclave 121 derajat celcius 15 menit)
Bahan-bahan :
Natrium thio sulfat 15% sebanyak 0,1 ml dapat menetralkan sisa klor 15 mg/l. (bila diperlukan)
Cara kerja:
Untuk contoh air kran
	Air kran di biarkan mengalir selama 2-3 menit, tutup kran
	Mulut kran dipanaskan lalu masukkan air kran
	Apabila air yang akan diambil contohnya mengandung klor maka penambahan larutan natrium thio sulfat 10% sebanyak 0,1 ml dapat menetralkan sisa klor sebanyak 15 mg/l dalam contoh air. Penambahan dilakukan sebelum botol contoh disterilisasi. Selanjutnya pada label seperti pada pengambilan contoh untuk pemeriksaan kimia.
CARA PENGIRIMAN CONTOH AIR
	Contoh air yang dikirim adalah contoh yang diambil sesuai dengan persyaratan yang ditentukan dan harus sesegera mungkin dikirimkan ke laboratorium
	Contoh yang dikirim harus mempunyai label dan tulisan yang lengkap seperti diuraikan di atas
	Contoh disertai surat pengantar yang jelas yang mencantumkan nama dan tanda tangan pengirim serta maksud pemeriksaan
	Contoh air yang dikirim harus disimpan di dalam tempat yang terjamin keamanannya seperti termos atau peti.

SELANG WAKTU ANTARA PENGAMBILAN DAN ANALISA CONTOH AIR
Makin pendek selang waktu antara pengambilan dan analisa contoh air, akan memberikan hasil yang makin baik. Batas waktu maksimum untuk menunda analisa kimia adalah :
	Untuk air bersih			72 jam
	Untuk air yang sedikit tercemar	48 jam
	Untuk air kotor/limbah		12 jam
Beberapa unsur dapat mengalami perubahan yang cepat, untuk itu harus diperiksa secara langsung di lapangan. Beberapa unsure lain dapat mengalami perubahan selama penyimpanan, untuk itu diperlukan penambahan bahan pengawet. Bahan pengawet yang digunakan dicantumkan pada label
Untuk pemeriksaan mikrobiologis maksimum waktu yang diizinkan adalah 1 jam sesudah pengambilan contoh dan tidak boleh lebih dari 12 jam dan sebaiknya dalam pengiriman contoh air tersebut didinginkan.
',
                'gambar' => '',
            ],
            [
                'id' => 57,
                'id_mapel' => 8,
                'judul_materi' => 'Pemeriksaan Air Secara Fisika Kekeruhan',
                'detail_materi' => 'Air yang jernih diperlukan untuk keperluan rumah tangga dan industri makanan, farmasi dan industri-industri lain. Kekeruhan dalam air ditimbulkan oleh bahan-bahan yang tersuspensi misalnya tanah liat, Lumpur, bahan-bahan organik yang halus, plankton dan mikroba. Hal ini disebabkan partikel-partikel tersebut menghaburkan cahaya yang melewati air.
Akibat yang ditimbulkan oleh kekurangan air adalah :
	Mengurangi aestetika
	Mengurangi efektifitas desinfeksi air
Menurut standar kualitas air kekeruhan air ditetapkan 5-25 unit dalam skala silikat yaitu kekeruhan yang disebabkan oleh mg/l 〖SiO〗_2.
Kekeruhan sebaiknya diukur pada hari yang sama dengan pengambilan sampel. Bila pemeriksaan ditunda, sampel harus disimpan ditempat gelap dan diperiksa sebelum 24 jam. Lebih dari waktu tersebut terjadi perubahan kekeruhan pada sample tersebut. Sampel harus digojok kuat sebelum pemeriksaan. Pereriksaan kekeruhan dengan menggunakan metode turbidimetri (nevelometrik).
Ada beberapa metode pengukuran kekeruhan :
	Metode turbidimetri (Nepbelometrik)
Prinsip : Membandingkan intensitas cahaya yang dihamburkan oleh sampel dengan intensitas cahaya yang dihamburkan oleh suspensi baku pembanding pada kondisi sama. Makin tinggi intensitas cahaya yang terhambur makin tinggi keterhambur, makin tinggi kekeruhannya.
Pengganggu : adanya gelembung udara, getaran dan pemakaian alat gelas yang kotor memberikan hasil yang salah. Adanya warna air yang ditimbulkan oleh zat-zat terlarut yang menyerap cahaya memberikan hasil pengukuran lebih rendah
Alat	: Turbidimetri
Satuan	: NTU (Nephelometric Turbidity Unit)
Alat ini sangat peka, sebagai pembanding dibuat dari 1 g silika gel H yang dilarutkan dalam 1000 ml air suling, sehingga setiap 1 ml mengandung 1 mg 〖SiO〗_2 atau kekeruhannya 1 unit
	Metode Visual
Prinsip : mengukur panjang cahaya yang melalui suatu suspensi yang dihitung tepat pada saat bayangan lilin (candle) hilang makan panjang jalan cahaya makin rendah kekeruhan.
Alat	: Candle turbidity
Satuan	: JTU (Jackson Turbidity Unit)
	Metode Hellige
Prinsip : penerapan efek Tyndall dalam pengusunan sumber cahaya terhadap sampel air.
Dalam hal ini tidak digunakan suspensi standar
Alat : Turbiditer Hellige
Metode ini untuk kekeruhan 0 - 15 unit
Penentuan Kekeruhan
Prinsip : membandingkan intensitas cahaya yang dihamburkan oleh sample dengan intensitas cahaya yang dihamburkan oleh suspensi baku pembanding pada kondisi sama. Makin tinggi intensitas cahaya yang terhambur makin tinggi keterhambur, makin tinggi kekeruhannya.
Pengganggu : adanya gelembung udara, getaran dan pemakaian alat gelas yang kotor memberikan hasil yang salah. Adanya warna air yang ditimbulkan oleh zat-zat terlarut yang menyerap cahaya memberikan hasil pengukuran lebih rendah.
Alat : Turbidimetri
Alat ini sangat peka. Sebagai pembanding dibuat dari 1 g silika gel H yang dilarutkan dalam 1000 ml air suling, sehingga setiap 1 ml mengandung 1 mg 〖SiO〗_2 atau kekeruhannya 1 unit
Cara lain adalah dengan standar hidrazin sulfat dan hexamethylen tetramin
Prinsip : membandingkan intensitas cahaya contoh air dengan intensitas cahaya larutan standar secara turbidimetri.
Bahan :
	Larutan I Hidrazin sulfat
Pembuatan : timbang 1 g Hidrazin sulfat, larutkan dengan air destilasi dan dipenuhkan volumenya hingga 100 ml di dalam labu takar
	Larutan II Hexamethylene tetramin
Pembuatan : timbang 10 g hexamethylene tetramin, larutkan dengan air destilasi dan penuhkan volumenya hingga 100 ml
	Larutan campuran : Campur 5 ml larutan 1 dengan 5 ml larutan II lalu dibiarkan selama 24 jam pada 25-28°C lalu diencerkan hingga 100 ml. larutan ini mempunyai kekeruhan 400 NTU (Nephlometer Turbidity Unit)
Alat :
	Turbidity meter
	Pipet volume
Cara kerja :
Buah deretan larutan standar 0-5-10-15-20-25 NTU (Tahan 1 minggu). Baca kekeruhannya pada turbidity meter pada λ 450 nm. Buat grafik NTU vs absorbans. Ambil 50 ml contoh air. Baca kekeruhannya pada turbidity meter. Hasil pembacaan absorbans contoh diekstrapolasikan pada kurva kalibrasi (kurva antara absorbansi dan konsentrasi kekeruhan standar). Bila contoh keruh encerkan dengan air destilasi
Perhitungan :
NTU cth encer pada grafik x (Vol. Pengencer + Volume contoh)
Kekeruhan (NTU) =
Volume contoh

JUMLAH PADATAN TERLARUT
Air yang mengandung padatan terlarut yang tinggi terutama akan mempengaruhi rasanya. Air yang kandungan mineralnya tinggi juga tidak dapat dipergunakan untuk keperluan industri. Untuk air minum kandungan jumlah padatan terlarut dianjurkan tak lebih dari 500 mg/l. jumlah padatan terlarut adalah residu setelah sample diuapkan kemudian dikeringkan pada suhu 103-105°C. suhu pengeringan sangat mempengaruhi hasilnya, karena pengurangan berat dapat terjadi karena penguapan zat organic, air kristal, penguapan gas-gas yang terjadi karena perubahan susunan kimia, atau terjadi kenaikan berat karena oksidasi.
Akibat yang ditimbulkan dari jumlah zat padat yang berlebihan adalah :
	Mempengaruhi daya hantar listrik air
	Air tidak enak rasanya
	Menyebabkan rasa mual terutama bila zat padatnya merupakan senyawa natrium sulfat dan magnesium sulfat
	Terjadinya cardiac disease serta toxacmia pada wanita-wanita hamil
Total solid adalah jumlah dari zat tersuspensi dengan zat terlarut (TDS = Total Disolved Solid)
TS = TSS + TDS
PENENTUAN SOLID
Prinsip : Sejumlah air diuapkan aimya. Zat padat yang tertinggal ditentukan secara gravimetri.
Alat
	Cawan porselen
	Oven
	Pipet volume
	Desikator
	Neraca
Cara kerja
Timbang cawan porselen kosong (A.). pipet 25 ml air lalu masukkan. Uapkan hingga airnya kering. Panaskan di dalam oven pafa temperatur 100° selama 1 jam kemudian dinginkan di dalam desikator. Timbang bobotnya. (B)
Perhitungan :
Total Solid (mg/1)=((B-A)  x 1.000.000)/(Volume contoh)

ZAT TERSUSPENSI

Pada air keruh atau air limbah sering diminta untuk menentukan zat tersuspensi, yang di dapat dengan cara menyaring air tersebut dengan saringan tertentu yang sudah diketahui beratnya. Kemudian saringan dan isinya dikeringkan pada 103 - 105°C. Selisih beratnya adalah zat terendap. Dapat pula ditentukan dengan menguapkan tapisan dan dikeringkan pada 103 - 105°C dan ditimbang. Selisih zat padat jumlah dengan tapisan jumlah adalah zat tersuspensi.

PENENTUAN TOTAL SUSPENDED SOLID (TSS)
Prinsip : zat padat yang tersuspensi di dalam air disaring dengan filter selulosa Residu yang tidak lolos saringan diuapkan dan kemudian dikeringkan pada temperatur 105°C. setelah dingin ditimbang sampai diperoleh bobot yang tetap
Alat :
	Filter GF/A
	Milivor vacuum
	Oven
	Pipet
Cara kerja :
Timbang bobot kertas saring filter GF/A (A). pipet 25 mi contoh air saring dengan filter GF/A dengan alat milivor vacuum. Keringkan di dalam oven pada temperatur 105°C selama 1 jam. Dinginkan di dalam desikator dan ditimbang bobotnya (B). bila air limbah pekat, lakukan pengenceran dengan air destilasi.
Perhitungan :
TSS (mg/1)=((B-A)  x pengenceran x 1.000.000)/(Volume contoh)


BAU DAN RASA
Biasanya bau dan rasa dalam air terjadi bersamaan yaitu akibat dari adanya organisme seperti plankton, octimycetes, bakteri atau karena dekomposisi bahan organik di dalam air dan juga karena adanya bahan kimia tertentu.
Air untuk keperluan air minum dan industri makanan, minuman dan farmasi harus tidak berbau dan tidak berasa. Sebahagian besar zat organic dan beberapa zat anorganik menimbulkan rasa atau bau. Zat-zat ini berasal dari buangan rumah tangga dan industri, atau dari alam misalnya pembusukan daun atau dari kegiatan mikroba. Ada 4 sensasi rasa yaitu asam, manis, asin dan pahit. Garam-garam Cu, Fe, Mn, K, Na dan Zn dapat diketahui dari rasa. Pemeriksaan rasa hanya dilakukan untuk sampel air minum. Tidak dilakukan untuk air yang kemungkinan tercemar bakteri, virus, parasit atau zat kimia beracun, juga tidak dikerjakan untuk air limbah dan air kotor.

WARNA
 Warna air ditimbalkan oleh ion-ion logam terutama besi dan mangan, humus dan susunan tanah, plamgton, ganggang dan linbah industri.
Warna ini dapat berasal dari bahan padat atau tersuspensi, tetapi dapat juga dalam larutan. Karena itu warna dalam air dapat dibedakan menjadi dua.
	Wama yang sesungguhnya yaitu warna yang tampak setelah suspensi dalam air dihilangkan
	Warna yang tampak yaitu warna air termasuk suspensi-suspensi dalam air
Warna air ditetapkan dengan membandingkan sample dengan warna larutan Platina-Cobalt baku, atau dengan disk berwarna yang sudah dibakukan. 1 unit Pt-Co adalah warna yang ditimbulkan oleh 1 mg Platina/liter, sebagai ion kloroplatinat.
Akibat yang ditimbulkan bila warna menyimpang dari ketetapan tersebut adalah :
	Air tidak disukai konsumen karena secara aestetika tidak diterima masyarakat
	Konsumen mencari sumber air lain mungkin malah sangat tidak sesuai dengan persyaratan kesehatan kecuali parameter warna saja.

PENENTUAN WARNA

Prinsip :
Dengan deretan larutan kalium kloroplatinat yang konsentrasinya berbeda sebagai standart, absorbans contoh air diekstrapolasikan pada kurva kalibrasi
Bahan :
	Larutan standar warna
Pembuatan : timbang 12,46 g K_2 〖PtCl〗_6 dan 1 g 〖Cocl〗_2. 〖6H〗_2 O ke dalam beaker glass 500 ml larutkan dengan 100 ml HCL pekat lalu [indahkan ke labu ukur 11 dan  penuhkan volumenya hingga tanda batas
	Larutan 1 N H_2 〖SO〗_4
	Larutan 1 N NaOH
Alat	:
	Spektrofotometer
	Filter Ø 40 µm
Cara kerja :
Pipet 50 ml contoh lalu disentrifus. Ambil cairan jernihnya dan atur pHnya hingga 7,6 dengan menambahkan larutan 0,1 N H_2 〖SO〗_4  atau larutan 1 N NaOH. Baca absorbansnya pada λ dimana terjadi absorbansi maksimum pada kisaran λ 400 – 700. Buat deretan standar 0-5-10-20-30-40-50 unit. Baca absorbansnya lalu buat grafik antara unit warna dengan absorbansi. Hasil pembacaan absorbans contoh diekstrapolasikan pada kurva kalibrasi.
(kurva antara absorbansi dan konsentrasi warna standar)
Perhitungan	:
Color unit=(Pengenceran x 50)/(Volume contohml contoh)
',
                'gambar' => '',
            ],
            [
                'id' => 58,
                'id_mapel' => 8,
                'judul_materi' => 'Pemeriksaan Kimia Di Lapangan Sisa Klor',
                'detail_materi' => 'Pembubuhan klor yang disebut juga klorinasi dalam air minum dan air tercemar dimaksud untuk membunuh mikroba. Tujuan kedua adalah untuk meningkatkan kualitas air karena klor bereaksi dengan ammonia, besi, mangan, sulfida dan beberapa senyawa organik. Apabila pemberian berlebihan, sisa klor akan mempengaruhi bau dan rasa air minum. Disamping itu klorinasi dapat mempertajam rasa dan bau senyawa fenol dan senyawa organic
Pembubuhan klor dapat sebagai unsurnya atau sebagai garam hipoklorit. Klor bebas yang terjadi tergantung pH-nya dan pada pH air normal yang terbanyak berupa asam hipoklorit dan ion hipoklorit.
〖Cl〗_2+ H_2 O= H^1+Cl+H^3+Cl + HOCl as. Hipoklorit
PH tinggi pH rendah
H^1 + OCl
Ion hipoklorit
HOCI sifat desinfektannya 10 kali lebih tinggi dari ion hipoklorit
Metode penetapan klor aktif terutama berdasarkan reaksinya dengan bahan-bahan pereaksi, sehingga beberapa oksidator termasuk halogen-halogen berbasa akan terhitung sebagai klor bebas. Cara yang sering dipergunakan adalah metode ortotolidine karena mudah dikerjakan, juga dilapangan. Akan tetapi metode ini mulai tergeser dengan metode DPD (NN-dietil-p-fenilan diamin) karena ortotolidine bersifat karsinogenik. Dicegah pemipetan dengan mulut dan kontak kulit.
Metode ortotolidine
Prinsip : Ortotolidine berubah menjadi senyawa yang berwarna kuning dalam larutan asam kuat, setelah terikat dengan klor bebas. Untuk memperoleh warna yang benar yang dibentuk oleh klor dengan ortotolidine :
	pH larutan pada waktu bereaksi 1,3 atau lebih rendah
	Perbandingan berat antara ortotolidine dengan klor paling sedikit 3 : 1
	Kadar klor tidak boleh lebih dari 10 mg/l
Alat : komparator Taylor
Cara kerja :
	Tabung gelas komparator dibersihkan dengan sample air yang akan diperiksa kadar klornya
	Tabung gelas komparator ini diisi dengan sample air sampai batas tertentu
	Salah satu tabungnya diberi indikator ortho toulidine 5 tetes
	Dicampur dengan membalikkan tabung tersebut ditutup dengan ibu jari
	Ketiga tabung tersebut diletakkan pada komparator dan tabung berwarna diletakkan ditengah-tengah
	Tunggu 5 menit kemudian bandingkan dengan warna larutan dengan warna larutan standar.
Reaksi :
〖2H〗_2 O + 〖2Cl〗_2 => 4 HCI + O_2
NH_2 CH_3 C_6 H_3 C_6 H_3 〖CH〗_3 NH_2 NHCL => +〖NOCH〗_3 C_6 H_3 C_6 H_3 〖CH〗_3 NH_2 NHL+ H_2 O
Cara yang lain adalah dengan metode lod-pati, yang berdasarkan prinsip iodometri. Sisa klor akan bereaksi dengan KI dan l_2 yang bebas dititrasi dengan larutan thio dengan indikator pati (amylum).
Reaksi :
 2KI + 〖Cl〗_2 => l_2 + 2KCL
l_2 + 2Na_2 S_6 O_3  => 2 Nal + Na_2 S_4 O6


SUHU
Pada keadaan normal suhu air sama dengan suhu udara lingkungan. Peningkatan suhu terjadi pada air yang dibuang dari proses produksi yang menggunakan pemanasan, yang akan mengganggu kehidupan biota air atau tanaman. Suhu mempengaruhi pertumbuhan dan perkembangan algae tertentu. Temperatur yang diharapkan antara 1015°C. akibat dari penyimpangan suhu adalah :
	Air tersebut tidak disukai konsumen
	Meningkatnya daya toksin bahan kimia yang mencemari air
	Pertumbuhan mikroba di dalam air
Pengukuran dilakukan dengan termometer air raksa biasa dan dilaporkan dalam Pengukuran suhu dilakuka derajat yang terdekat.

PH
Air di alam umumnya mempunyai pH di antar 4-9. sebagian besar agak alkalis adanya karbinat dan bikarbonat. Perubahan pH dibawah atau diatas normal terjadi karena buangan industri yang bersifat asam kuat atau basa kuat. Penentuan pH sangat penting untuk kegiatan sanitasi. Untuk penyediaan air bersih merupakan faktor yang penting dalam proses koagulasi, desinfeksi, pelunakan air dan pengawasan korosi pada system distribusi. Pada proses pengolahan air limbah industri secara biologik, pH harus dijaga supaya sesuai dengan pertumbuhan optimal kuman yang dipergunakan.
Penetapan pH air dapat dilakukan dengan :
Kertas pH
Dipilih kertas pH yang mempunyai daerah pH antara 6 - 9. cara ini kasar, tidak teliti.
Cara kolorimetrik
Dilakukan dengan menggunakan deret larutan dapar yang sudah diketahui pH-nya, dan diberi larutan indikator yang tepat. Sample air diberi indikator yang sama, warnanya dibandingkan dengan deret larutan dapar baku. Larutan indikator yang dapat dipakai adalah :
Biru brom timol	: daerah pH 6,0 - 7,6
Fenolftalein		: daerah pH 8,2-9,8
Dapat pula menggunakan komparator Hellige atau komparator lovibond, warna sample air yang sudah ditambah larutan indikator dibandingkan dengan warna disk dalam komparator



PH meter
Dengan alat pengukuran potensial yang dilengkapi dengan elektroda gelas. Perubahan pH akan merubah potensial sebesar 59,1 mV setiap unit pH pada suhu 25°C. elektroda sebelumnya harus dibakukan terhadap larutan dapar baku yang sudah diketahui pH-nya. Cara penetapan pH dengan pH meter lebih teliti dari pada cara kolorimetri karena tidak terganggu oleh adanya warna dalam sample air, kekeruhan, kandungan garam yang tinggi, bahan-bahan koloid, klor bebas, oksidator dan reduktor.

OKSIGEN TERLARUT
Oksigen merupakan gas yang sukar larut dalam air. Kelarutan oksigen dalam air tawar antara 14,6 mg/l pada 0°C dan 7 mg/l pada 35°C pada tekanan 1 atmosfer. O_2   merupakan petunjuk apakah air itu kotor atau bersih. Air dikatakan bersih bila O_2 terlarut besar dan tidak melampaui batas maksimum. Dan air dikatakan kotor bila O_2 sangat kecil dan mendekati nol.
Kelarutan O_2 sangat dipergaruhi oleh tekanan udara pada suatu suhu. Karena proses oksidasi biologik bertambah cepat dengan naiknya suhu, kebutuhan oksigen juga bertambah. Oksigen terlarut diperlukan untuk pemurnian air alam dan pengolahan air limbah yaitu mengurangi bahan pencemaran sebelum dimasukkan kedalam air sungai. Proses pengolahan dilakukan oleh jasad renik aerob atau anaerob. Yang acrob memerlukan oksigen bebas untuk mengoksidasi bahan organik dan anorganik sehingga diperoleh hasil yang tidak berbahaya. Oksigen terlarut disebut juga dissolved oxygen (DO), dinyatakan dalam mg/1 O_2.
DO sangat diperlukan pula untuk pertumbuhan dan perkembangbiakan ikan-ikan dan makhluk air lainnya. Persyaratan DO untuk air golongan B dianjurkan lebih besar dari 4 mg/l, sedang untuk air golongan C dianjurkan lebih dari 3 mg/l O_2.
Kadar oksigen terlarut dalam air buangan tergantung keadaan fisik, khemis dan aktifitas biologisnya. Analisa oksigen terlarut merupakan kunci tes terhadap pencemaran air dan kontrol terhadap pengolahan air buangan. Penetapan oksigen terlarut merupakan dasar dari penetapan BOD yang menilai derajat pencemaran pencemaran dari buangan rumah tangga maupun industri. Pengambilan contoh untuk penetapan oksigen terlarut dalam BOD.
Cara pengambilan contoh air untuk penentuan oksigen terlarut memerlukan cara tersendiri. Kadar oksigen ini biasanya lebih rendah dari pada kadar jenuhnya, sehingga kalau berhubungan dengan udara akan berubah.
Alat yang dipergunakan adalah botol pereaksi tutup asah (botol oksigen) 250 ml. botol diisi penuh oleh dengan contoh air, ditutup hati-hati sehingga tidak ada gelembung udara dalam botol. Diperlukan 2 botol, satu untuk oksigen terlarut yang lain untuk BOD. Penentuan oksigen ini tidak dapat ditunda harus dilakukan dilapangan. Kadar oksigen akan berubah karena kegiatan biologik, sehingga diperlukan pemantapan (fiksasi) dengan menambah pereaksi O2 dilapangan, kemudian penentuannya dilanjutkan di laboratorium. Dengan cara ini kegiatan jasad renik dihambat dan titrasinya dapat ditunda sampai 6 jam. Sample kemudian segera dibawa kelaboratorium dengan memasukkannya dalam termos yang diberi es.
Penetapan oksigen terlarut metode Winkler
Prinsip : Air dalam botol bertutup asah. Jika tidak terdapat DO, akan terjadi endapan putih 〖Mn(OH)〗_2 karena pereaksi O_2 terdiri dari NaOH dan KL.
〖Mn〗^(2+)+ 2 〖OH〗^- => 〖Mn(OH)〗_2 ↓ putih
Jika terdapat oksigen, akan terjadi oksidasi sejumlah 〖Mn〗^2 yang setara menjadi endapan 〖MnO〗_2  yang berwarna coklat.
〖Mn〗^(2+)+2OH- + ½ O_2 => 〖MnO〗_2 + H_2 O
Pada reaksi 〖Mn〗^(2+) menjadi 〖MnO〗_2  ini disebut juga pengikatan oksigen, berjalan lambat terutama pada suhu rendah. Oleh karena itu diperlukan pencampuran kuat paling sedikit 20 detik. Setelah semua oksigen bereaksi, endapan dibiarkan mengendap dan setelah cairan yang jernih setebal kira-kira 5 cm, ditambah asam sulfat. Maka 〖MnO〗_2, akan mengoksidasi I^2 menjadi I2
〖MnO〗_2+〖2I〗^- 〖+ 4〗^+ => 〖Mn〗^(2+)+I_2+〖2H〗_2O
2+Na_2 S_2 O_3 => 2 Nal + Na_2 S_4 O_6
Cara lain menggunakan DO-meter, secara potensiometrik.
Adanya nitrit, garam besi dan beberapa bahan organik tertentu dapat mengganggu. Nitrit dalam medium asam sulfat akan bereaksi dengan KI dan membebaskan I_2 sehingga hasil percobaan menjadi lebih tinggi dari yang sebenarnya. Nitrit dapat terbentuk di dalam air antara lain bila contoh air dibiarkan pada tempat terbuka. Pada keadaan ini oksigen terlarut dapat bereaksi dengan N_2 O_2 menghasilkan senyawa nitrit. Untuk mencegahnya contoh air tidak boleh dibiarkan di udara terbuka. Efek nitrit dapat dihilangkan dengan penambahan natrium azida. Pada metode Rideal-Stewart gangguan nitrit, garam besi dan senyawa organic dihilangkan dengan cara mengoksidasinya dengan kalium oksalat pada persiapan contoh air. Akan tetapi bila kalium oksalat terlalu berlebihan dapat juga mengganggu pada akhir reaksi.
',
                'gambar' => '',
            ],
            [
                'id' => 59,
                'id_mapel' => 8,
                'judul_materi' => 'Pemeriksaan Air Secara Kimia Alkaliniti (Kebebasan)',
                'detail_materi' => 'Ada tiga jenis alkalinitas yaitu hidroksida (OH), karbon normal (〖CO〗_2) dan bikarbonat (〖HCO〗_2). Karbonat normal disebut juga mono karbonat. Penentuan alkalinitas dilakukan dengan titrasi asam-basa dengan menggunakan indikator ferolftalein yang memberikan warna pink bila terdapat hidroksida atau karbonat normal. Perubahan warna pink menjadi tidak berwarna berlangsung pada pH 8,3. metil orange akan berwana kuning jika terdapat ketiga jenis alkalinitas dalam suasana basa dan berubah menjadi merah jika dalam suasana asam. Perubahan warna berlangsung pada pH sekitar 4,4.
Ada 5 kondisi alkaliniti yang mungkin terjadi :
	Hanya hidroksida saja (P = T atau M=0) 2.
	Hidroksida dan normal karbonat (P> ½T)
	Hanya normal karbonat (P=½ T atau P=M)
	Normal karbonat dan bikarbonat (P<½T)
	Hanya bikarbonat saja (P  O)
P adalah alkalinitas yang ditunjukkan dari hasil titrasi dengan indikator penolftalein.
T adalah alkalinitas yang ditunjukkan dari hasil titrasi dengan indikator metil orange (total alkaliniti)
M = T-P adalah alkalinitas yang ditunjukkan dari selisih hasil titrasi dengan indikator metil orange dan fenolftalein.
Kelima keadaan ini dapat ditentukan jumlahnya dari hasil titrasi dengan asam, biasanya digunakan asam sulfat 0,02 N.

ALKALINITAS P
Prinsip : Ion hidroksil dalam contoh air sebagai hasil disosiasi atau hidrolisis dititrasi dengan larutan asam dengan indikator phenolfalein.
Bahan :
	Larutan 0,02 N H_2 〖SO〗_4
	Indikator Phenolftalein
Alat :
	Buret
	Erlenmeyer
	Pipet volume
Cara kerja :
Pipet contoh air sebanyak 20 ml dengan pipet volume lalu masukkan ke dalam Edlenmeyer 100 ml. tambahkan 5 tetes indikator phenolftalein. Jika timbul warna merah jambu berarti alkalinitas ada dan selanjutnya titrasi dengan larutan standar 0,02 N H_2 〖SO〗_4  hingga warna merah hilang. Jika setelah penambahan indicator phenolftalein tidak timbul warna merah jambu berarti alkalinitas P tidak ada dilanjutkan ke penentuan alkalinitas M.
Perhitungan :
Alkalinitas P (mg/1)-  (MI H_2 〖SO〗_(4 ) X H_2 〖SO〗_4  x 50.000)/(Volume contoh)

ALALINITAS M
Prinsip : lon-ion bikarbonat dititrasi dengan larutan asam dengan indikator metil jingga.
Bahan :
	Larutan 0,02 N H_2 〖SO〗_4
	Indikator metil orange
Alat :
	Buret
	Erlenmeyer
	Pipet volume
Cara kerja : Pipet 100 ml contoh air dengan pipet volume lalu masukkan ke dalam Erlenmeyer 400 ml. tambahkan 5 tetes methyl orange lalu titrasi dengan larutan standar 0,1 N HCL hingga timbul warna jingga.
Perhitungan :
Karbonat (mg/l) = M- (2 x P) x 100 x N HCL x 6,1
M = volume H_2 〖SO〗_4 pada titrasi karbonat
P = volume HCL pada titrasi bikarbonat
',
                'gambar' => '',
            ],
            [
                'id' => 60,
                'id_mapel' => 8,
                'judul_materi' => 'Aciditi (Keasaman)',
                'detail_materi' => 'Keasaman didalam air dan limbah biasanya disebabkan oleh karbon dioksida, asam mineral dan hasil hidrolisa garam. Kebanyakan air cenderung bersifat alkalis walaupun didalamnya terkandung karbon dioksida yang berada didalam air sebagai asam karbonat 〖(H〗_2 〖CO〗_3). Inilah sebabnya banyak air menggunakan NaOH sebagai larutan standart dan fenolftalein sebagai indikator.
C_2+NaOH=> 〖NaHCO〗_3
Limbah industri biasanya berperan sebagai sumber asam didalam air.

PENENTUAN CO_2 (ZAT ASAM ARANG)

Analisa ini dilakukan bila kandungan karbonat tidak nyata di dalam contoh air.
Prinsip : Titrasi asam basa dengan larutan standar NaOH dan indikator phenolftalein
Bahan :
	Larutan 0,02 N NaOH
	Indikator phenolftalein
Alat :
	Buret
	Erlenmeyer
	Pipet volume
Cara kerja :
Pipet 100 ml contoh air lalu tambahkan 5 tetes indikator phenolftalein selanjutnya titrasi dengan larutan standar 0,02 N NaOH sampai terbentuk warna merah.
Perhitungan :
〖CO〗_2 (mg/l) = ml titrasi x 10 x N NaOH x 44
',
                'gambar' => '',
            ],
            [
                'id' => 61,
                'id_mapel' => 8,
                'judul_materi' => 'Besi FE',
                'detail_materi' => 'Besi terdapat dalam air alam, dengan kadar sangat rendah. Air permukaan yang alkalis dan disaring, jarang mengandung besi lebih dari 1 mg/1. beberapa air tanah dan air permukaan yang asam, kadang-kadang mengandung besi yang lebih banyak.
Besi dapat menimbulkan bekas berkarat pada pakaian dan porselen (dalam bentuk 〖Fe〗_2 O_3). Pada konsentrasi lebih dari 0,31 ppm dapat menimbulkan rasa pahit. Di dalam air besi terlarut dalam bentuk ferro yang bila terkena udara dapat teroksidasi membentuk ferihidroksida yang berwarna abu-abu putih. Karena ferihidroksida tidak stabil, di udara akan terurai membentuk endapan merah ferioksida. lon ferro dalam air biasanya terdapat bersama-sama dengan ion Mn. Bila ion Mn ini banyak terminum akan terjadi akumulasi besi di hati dan ginjal.
Dalam keadaan yang tereduksi sebagai ferro, besi ini larut dalam adanya ion-ion pembentuk kompleks, ion fero hanya larut pada pH kurang dari 5. di udara terbuka atau karena oksidasi akan terbentuk ferri dan dapat terhidrolisa menjadi ferri oksida hidrat yang tak larut. Bentuk ini banyak terdapat dalam sample-sample yang sampai di laboratorium bila tidak dicegah terjadinya oksidasi. Pembentukan besi dapat juga karena pertumbuhan kuman selama penyimpanan maupun pengiriman. Pada air limbah yang asam dengan pH kurang dari 3,5 besi akan larut dalam bentuk ferri. Jadi dalam air, besi dapat sebagai larutan maupun bentuk koloidal yang mengikat bahan organic dalam bentuk ferri maupun ferro.
Besi dapat ditemukan dalam Lumpur yang berada dalam air. Dapat berasal dari kerusakan pipa-pipa atau tutup wadah sampel yang terbuat dari logam. Secara analitis sukar dibedakan antara besi terlarut dan besi tersuspensi karena di udara terbuka ion ferro yang larut dapat dioksidir oleh oksigen terlarut dan dihidrolisa pada pH lebih dari 5 menjadi ion ferri yang tak larut. Dalam jurnlah kecil besi diperlukan untuk pembuatan sel-sel darah merah. Batas yang diizinkan adalah 0,1 - 1,0 mg/l. penyimpangan terhadap standar kualitas ini akan menyebabkan :
	Oksidator kuat, sianida, nitrit, fosfat-fosfat, krom.
	Seng yang kadarnya 10 kali besi
	Bi, Cd, Hg, Ag, Molibdat
Akan mengendapkan fenantroline, pendidihan dengan asam akan merubah pirofosfat menjadi ortofosfat yang tak mengganggudan menghilangkan sianida dari nitrit-nitrit. Penambahan hidroksilamin lebih banyak dan mengurangi kesalahan-kesalahan yang timbul oleh oksidator kuat. Bila terdapat logam-logam pengganggu, tambahkan fenantroline lebih banyak untuk mengganti yang diikat oleh ion-ion logam tadi. Bila sample berwarna dan mengandung zat organic, mungkin perlu penguapan sample sampai kering dan residunya dilarutkan dalam asam. Pengeringan sebaiknya dalam cawan silica, porselen atau platina yang sebelumnya direbus dalam HCL 1+1 selama beberapa jam. Selain itu analisa Fe secara kolorimeter dengan pereaksi ammonium thiosianida.
Reaksi
〖Fe〗^(2+)+〖3 NH〗_4 CNS =>  〖Fe(CNS)〗_3 + 〖3NH〗^(3+)
〖Fe〗^(2+)+〖KMn〗_4+H_2 〖SO〗_4 =>  〖MnSO〗_(4 )+ 〖Fe〗^(3+)+ K_2 〖SO〗_4+ H_2 〖SO〗_4
 〖Fe〗^(3+)+〖3 NH〗_4 CNS =>  〖Fe(CNS)〗_3 + 〖3NH〗^(4+)
				Merah
',
                'gambar' => '',
            ],
            [
                'id' => 62,
                'id_mapel' => 8,
                'judul_materi' => 'Karbon Dioksida Agresif',
                'detail_materi' => 'Air di alam mengandung karbon dioksida yang menurut bentuknya dapat dibedakan menjadi :
	〖CO〗_2 bebas yaitu 〖CO〗_2 yang terlarut di dalam air
	〖CO〗_2 di dalam kesetimbangan dengan 〖HCO〗_3
	〖CO〗_2 agresif yaitu 〖CO〗_2 yang dapat merusak bangunan perpipaan.
Karbondioksida agresif adalah 〖CO〗_2 yang mampu merusak marmer. Air yang mengandung 〖CO〗_2 agresif akan merusak bangunan dari semen dan beton. Dalam standar kualitas air 〖CO〗_2 agresif tidak boleh ada. Penyimpang terhadap standar tersebut akan mengakibatkan korosi (pengikisan) pada pipa air yang terbuat dari logam. Pemeriksaannya dilakukan dengan cara analitis yaitu mereaksikan sejumlah sample air dengan serbuk marmer, kadar CO2 diukur sebelum dan sesudah dibiarkan selama 24 jam.
Cara lain dilakukan dengan menggunakan grafik.
Prinsip : ditentukan terlebih dahulu kadar 〖CO〗_2 dengan menitrasi sampel dengan NaOH 0,1 N dengan inkator fenolftalein. Kemudian ditentukan kadar 〖HCO〗_3 dengan menitrasi sampel HCL 0,1 N dengan indikator metil jingga. Misalnya kadar 〖CO〗_2 = 50 mg/l dan 〖HCO〗_3 = 140 mg/l. pada grafik dari harga 〖CO〗_2 ditarik garis mendatar dan dari harga 〖CO〗_2 ditarik garis mendatar dan dari harga 〖HCO〗_3 ditarik garis tegak yang bertemu pada titik A. di tarik garis melalui titik A sejajar dengan garis marmer yang memotong garis lengkung di titik B. dari titik B ditar a dari titik B ditarik garis mendatar akan memotong garis tegak 〖HCO〗_3 = 140 mg/l pada titik C. kadar 〖CO〗_2 agresif = garis AC = (50 - 14) mg/l = 36 mg/1.
',
                'gambar' => '',
            ],
            [
                'id' => 63,
                'id_mapel' => 8,
                'judul_materi' => 'Zat Organik',
                'detail_materi' => 'Air minum mempunyai batas syarat zat organik, yang diukur dengan banyaknya mg/l KMnO4 yang diperlukan untuk mengoksidir zat organik yang terkansung di dalamnya dengan pendidihan selama 10 menit. Adanya zat organik di dalam air disebabkan karena pencemaran air dari buangan rumah tangga, industri, kegiatan pertanian dan pertambangan. Kandungan zat organik yang melebihi batas memungkinkan pertumbuhan kuman, disamping menunjukkan pengotoran zat-zat organic yang kemungkinan membahayakan kesehatan.
Akibat yang ditimbulkan dari penyimpangan angka permanganat adalah :
	Timbulnya bau yang tidak sedap
	Menyebabkan sakit perut.
Di dalam standar kwalitas ditentukan angka maksimal adalah 10 mg/l.
Metode asam untuk penentuan bilangan permanganat dipakai untuk air yang mengandung ion Cl kurang dari 300 mg/l. pengganggu ion sulfida dan nitrit untuk menghilangkan harus dipanaskan dengan H_2 〖SO〗_4  encer sampei H_2 S  dan nitritnya hilang. Air yang menguap kemudian diganti dengan air suling. Gangguan dari garam ferro dihilangkan dengan penambahan beberapa tetes larutan 〖KMnO〗_4  sebelum dianalisa Larutan tetap merah muda. Adanya klorida lebih dari 300 mg/l memerlukan perlakuan khusus yaitu oksidasi dalam suasana basa Asam.
Metode basa,  untuk air yang mengandung ion Cl kurang dari 300 mg/l
Prinsip : sample dididihkan dahulu dengan NaOH, selanjutnya dioksidasikan dengan larutan baku 〖KMnO〗_4 direduksi dengan larutan baku asam oksalat yang diberikan berlebih. Kelebihan asam oksalat dititrasi kembali dengan larutan baku 〖KMnO〗_4
Metode basa, untuk air yang mengandung ion Cl lebih dari 300 mg/l
Prinsip : Sampel dididihkan dahulu dengan NaOH, selanjutnya dioksidasikan dengan Lamitan baku 〖KMnO〗_4. sisa 〖KMnO〗_4 direduksi dengan larutan asam oksalat yang diberikan berlebih Kelebihan asam oksalat dititrasi kembali dengan larutan baku 〖KMnO〗_4
',
                'gambar' => '',
            ],
            [
                'id' => 64,
                'id_mapel' => 8,
                'judul_materi' => 'Kesadahan',
                'detail_materi' => 'Kesadahan air artinya daya air tersebut untuk mengendapkan sabun. Sabun terutama diendapkan oleh ion kalsium dan magnesium yang ada dalam air, serta diendapkan pula oleh ion-ion logam bermartabat tinggi seperti aluminium, besi, mangan, stronsium dan seng juga oleh ion hydrogen. Tetapi karena ion-ion logam tersebut selain Ca dan Mg. Tetapi bila ion-ion logam yang menimbulkan kesadahan berjumlah cukup besar, harus dimasukkan dalam perhitungan.
 Kesadahan disebabkan terutama oleh ion Ca dan Mg dan kadang-kadang oleh aluminium dan besi. Kesadahan oleh calsium dan magnesium adalalı sebagai Ca dan Mg karbonat dan bikarbonat. Selain itu terdapat ada juga kesadahan yang disebabkan calsium dan magnesium sulfat, nitrat dan klorida.
Kesadahan dibagi menjadi dua :
	Kesadahan tetap yaitu kesadahan yang tetap di dalam air walaupun contoh air di didihkan. kesadahan ini terutama disebabkan oleh calsium sulfat. Senyawa yang menyebabkan kesadahan tetap disebut incrustants. Kesadahan tetap, ion Ca dan Mg berada sebagai karbonat dan sebagainya.
	Kesadahan sementara yaitu kesadahan yang dapat dihilangkan dengan pendidihan kesadahan sementara oleh Ca dan Mg bikarbonat. Pada kesadalian sementara, ion Ca dan Mg berada sebagai bikarbonat.
Kesadahan jumlah (total) adalah jumlah kedua kesadahan diatas.
Dalam menentukan kesadahan dipakai satuan derajat kesalahan (°D) yang artinya di beberapa negara berbeda.
1°D (Jerman) sesuai dengan 10 mg CaO/ atau 7,1 mg MgO/
1° (Prancis) sesuai dengan 10 mg 〖CaCO〗_3/1 atau 8,4 mg 〖MgCO〗_3/l. sedangkan di Amerika kesadahan dinyatakan sebagai mg 〖CaCO〗_3/1 atau ppm 〖CaCO〗_3. Indonesia memakai derajat kesadahan Jerman.
Akibat yang ditimbulkan oleh kesadahan yang tinggi :
	Mengurangi efektifitas kerja sabun
	Menyebabkan kerak pada alat dapur dari logam
	Menyebabkan kerak pada pada ketel (boiler) yang mengakibatkan ketel sukar menghantarkan panas dan keraknya sukar dihilangkan sehingga memungkinkan menghantarkan terjadinya ledakan pada boiler
	Pipa-pipa tersumbat
	Sayur-sayuran menjadi keras bila dicuci dengan air yang sadah
Untuk air minum dikehendaki kesadahan antara 5 - 10°D.
Untuk menurunkan kadar kesadahan di lakukan pengolahan air yang disebut dengan pelunakan air (water softening) dengan lime-soda proses dengan menggunakan 〖Ca(OH)〗_(2 )untuk mengendapkan Ca dan Mg karbonat dan 〖Na〗_2 〖CO〗_3 untuk menghilangkan Ca dan Mg untuk mengendapkan Ca dan Me yang non karbonat
Kesadahan penting artinya bagi air industri karena air yang mempunyai kesadahan tinggi bon menimbulkan kerak pada ketel yang sukar menghantarkan panas dan sukar dihilangkan Untuk air minum dikehendaki kesadahan antara 5 - 10°D.
Metoda untuk menentukan kesadahan antara lain :
	Dengan cara perhitungan
Diperoleh dengan menjumlah kadar ion-ion Ca dan Mg. Bila terdapat sejumlah besar ion-ion lain yang mempengaruhi kesadahan harus dimasukkan dalam perhitungan. Caranya mengalikan kadar tiap ion dengan suatu faktor, sehingga di dapat CaCO yang ekivalen.
Kation	Faktor	Kation	Faktor
Ca	1,398	Al	3,116
Mg	2.305	Zn	0,857
Sr	0.640	Mn	1,203
Fe	1,004

	Kompleksometri
Prinsip : Etilen Diamin Tetra Acetic Acid (EDTA) dan garamnya membentuk senyawa complex yang larut bila ditambahkan kepada kation logam. Bila indicator eriokrom black T ditambahkan kepada suatu larutan yang mengandung ion Ca dan Mg pada pH 10 + 0,1 larutan akan menjadi merah anggur. Bila kemudian di titer dengan EDTA. Ion Ca dan Mg akan terikat sebagai kompleks. Pada TAT yaitu bila seluruh ion Ca dan Mg sudah terikat oleh EDTA, larutan yang berwarna merah anggur akan berubah menjadi biru.
Logam - Indikator + EDTA logam EDTA + Indikator
Merah 					biru

Untuk mendapatkan TAT yang jelas harus ada ion Mg dalam larutan. Ketajaman TAT naik dengan naiknya pH. Akan tetapi tidak boleh terlalu tinggi karena terjadi endapan 〖CaCO〗_3 atau 〖Mg(OH)〗_2 dan indikator juga rusak. Disarankan membuat pH 10,0 ± 0,1. titrasi harus dilakukan kurang dari 5 menit untuk mengurangi terjadinya endapan 〖CaCO〗_3. paling baik titrasi dilakukan pada suhu kamar, karena pada suhu rendah nenbaitan wama agak lambat dan pada suhu tinggi akan terjadi kerusakan indicator.
Untuk mencegah pengendapan 〖CaCO〗_3  beberapa cara dapat dilakukan :
	Sample diencerkan untuk memperkecil kadar 〖CaCO〗_3.
	Bila pada orientasi didapatkan harga kesadahan kira-kira dapat ditambahkan titrasi 90% atau lebih kedalam sample sebelum pH-nya disesuaikan dengan dapar
	Sample diasamkan dan diaduk selama 2 menit untuk mengusir 〖CO〗_2 sebelum pH-nya disesuaikan dengan dapar. Banyaknya asam yang ditambahkan diperhitungkan dari penentuan alkalinitas yang dilakukan sebelumnya.

',
                'gambar' => '',
            ],
            [
                'id' => 65,
                'id_mapel' => 8,
                'judul_materi' => 'Kalsium (Ca)',
                'detail_materi' => 'Adanya kalsium berasal dari aliran air yang melewati tanah-tanah kapur. Kadar kalsium berada diantara 0 sampai beberapa ratus mg/1, tergantung keadaan air tersebut dan pengolahannya. 〖CaCO〗_3 dengan kadar rendah mencegah korosi dari pipa-pipa logam karena membentuk lapisan pelindung. Banyaknya Ca dalam air diukur dengan mg/l dengan batas 75 - 200 mg/l. apabila konsentrasi kurang dari 75 mg/l dapat menyebabkan penyakit tulang rapuh karena Ca dibutuhkan untuk pertumbuhan tulang dan gigi. Apabila konsentrasi lebih dari 200 mg/l dapat menyebabkan merusak ketel, pipa (korosifitas) dan alat-alat memasak.
Untuk menurunkan kadar kalsium harus dilakukan pengolahan air tersebut. Penyimpanan sample dijaga supaya 〖CaCO〗_3 yang mengendap pada waktu disimpan dapat larut kembali.
Ada beberapa cara penetapan kadar Ca dalam air :
	Gravimetri
Prinsip : Amonium oksalat dapat mengendapkan kalsium secara kwantitatif sebagai Ca-Oksalat. Sedikit kelebihan ammonium oksalat mengatasi yang kurang baik dari Mg. Pembentukan kristal yang sempurna dilakukan dengan cara pengendapan bertahap, dengan cara merubah pH perlahan-lahan sampai pH yang dikehendaki. Endapan Ca-Oksalat dipijarkan dan ditimbang sebagai Cao.
	Permanganometri
Prinsip : Seperti halnya pada cara gravimetric, tetapi Ca-Oksalat yang terbentuk dilarutkan kembali dalam asam dan dititrasi dengan permanganat. Banyaknya permanganat yang diperlukan untuk mengoksidir oksalat sesuai dengan banyaknya kalsium
	Kompleksometri
Prinsip : Bila EDTA ditambahkan kedalam air yang mengandung Ca dan Mg mula-mula EDTA akan mengikat Ca yang ada. Penetapan Ca dengan EDTA dapat dilakukan dengan cara membuat pH cukup tinggi sehingga Mg akan mengendap sebagai hidroksida dan dengan memakai indicator yang hanya mengikat Ca. dapat dipakai indicator Murexid yang pada titik akhir titrasi, yaitu bila Ca seluruhnya telah terikat oleh EDTA, pada pH 12 - 13 berubah warnanya dari merah muda menjadi ungu merah. Karena indikator Murexide cepat rusak dalam suasana alkalis, diberikan dalam bentuk kering yaitu 200 mg Murexide dicampur dengan 100 g NaCl dan digerus halus, pemakaian 0,1-0,2 g.

PENENTUAN KADAR KALSIUM
Prinsip : Titra kompleksometri dimana ion-ion Ca membentuk senyawa kompleks berwarna dengan indicator logam. Pada penambahan larutan pengkompleks (EDTA) indikator yang dibebaskan akan membentuk warna yang berbeda dengan warna kompleks logam dengan indikator.
Bahan :
	Larutan standar EDTA
Pembuatan : larutkan 6,64 g EDTA (C10H14N2Na203.2H20) dengan air destilasi hingga volume 1 L
	Larutan 4 N NaOH
Pembuatan : larutkan 80 g NaOH dengan air destilasi hingga volume 500 ml
	Indikator 1 % murexid
Pembuatan : campur 0,5 g murexid dengan 50 g NaCl p.a. giling dan panaskan 1 jam pada temperatur 100°C. simpan di dalam botol berwarna.
Alat :
1. Buret
2. Erlenmeyer
3. Pipet volume
Cara kerja :
ke dalam Erlenmeyer yang dipipet 50 ml contoh air dan ditambahkan 10 ml 4 N NaOH. Ditambahkan indikator murexid dan dititrasi dengan EDTA sampai terbentuk warna lembayung. Dicatat volume titrasinya. Perhitungan :
Volume titrasi x pengenceran x mg/l Ca Komplekson Cao
(mg/l) Ca=	 bobot contoh x 1000
Standarisasi larutan komplekson (EDTA)
timbang 0.250 g CaCO3 laiu larutkan hingga volume 250 ml di dalam labu takar. Pipet lalu tambahkan 90 ml air destilasi, 1 ml 4 N NaOH dan indikator murexid. Titrasi hingga warna lembayung.
Perhitungan :
1 x MeCao
(mg/l) CaO = Vol,. Titrasi x Mr CaCO3
',
                'gambar' => '',
            ],
            [
                'id' => 66,
                'id_mapel' => 8,
                'judul_materi' => 'Magnesium',
                'detail_materi' => 'Terdapat dalam air alain, mempengaruhi kesadahan air. Banyaknya Mg dalam air juga diukur dengan mg/1. daiam jumlah kecil Mg diperlukan untuk pertumbuhan tulang akan tetapi dalam jumlah lebih dari 125 mg/l dapat menimbulkan daya pencaliar dan diuretika dan kadar diatas 150 mgl dapat menimbulkan rasa mual. Kadar Mg dalam air berkisar antara 0 sampai beberapa ratus mg/l tergantung asalnya dan pengolahannya. Ada beberapa cara penetapan Mg, diantaranya adalah :
a.	Cara Gravimetri
Prinsip : Diamonium hydrogen fosfat akan mengendapkan Mg secara kwantitatif dari larutan amoniakal, membentuk magnesium ammonium fosfat, MgNH4PO4.6H20. endapan ini dipijarkan dan ditimbang sebagai Mg pyrofosfat, Mg2P207.
b.	Cara kompleksometri
Prinsip : Ca yang diendapkan dahulu sebagai Ca Oksalat, supaya sempurna pembentukannya dikocok berulang-ulang selama 2 jam atau didiamkan selama 1 malam dan disaring. Filtrat dititrasi dengan EDTA, indicator eriokrom black T pada pH 10. perubahan warna pada TAT adalah dari merah ke biru. Pembentukan ikatan komplek Mg dengan EDTA agak lambat, sehingga dekat titik akhir titrasi harus dilakukan agak lambat atau dipanaskan sekitar 40°C.
c.	Dengan perhitungan
karena yang menyebabkan kesadahan air yang terutama adalah ion Ca dan Mg  maka setelah didapat angka kesadah yang menyebabkan kesadahan air yang terutama adalah ion Ca dan Mg, maka dapat angka kesadahan dalam CaCO3/1 dikurangi kadar Ca dalam mg CaC02/1 dapat kadar Mg dalam CaCO3/1. kadar Mg(mg/l)= angka di atas dikalikan 0.24.

PENENTUAN KADAR MAGNESIUM
prinsip: titrasi kompleksometri dimana ion-ion Ca membentuk senyawa kompleks berwarna dengan indikator logam. Pada penambahan larutan pengkompleks (EDTA) indicator yang dibebaskan akan membentuk warna yang berbeda dengan warna kompleks logam dengan indikator.
Bahan :
1. larutan standar EDTA pembuatan : timbang 6,64 g EDTA (C10H/4N Na2O2.2H2O) larutkan dengan air destilasi hingga volume 1 liter
2. larutan buffer ammonium pH 10 pembuatan : ke dalam 5,4 g NH4Cl tambahkan 35 ml ammonia pakat (25 % bj 0.91, Mr : 17,03) lalu larutkan dengan air destilasi hingga volumenya 100 ml
3. Indikator 1 % Eriochrome Black -T Pembuatan : campur 0,5 g bubuk EBT dengan 100 g NaCl p.a
Alat :
1. Buret
2. Erlenmeyer
3. Pipet voluma
Cara kerja :
Pipet 100 ml contoh air dan masukkan ke dalam Erlenmeyer 250 ml. tambahkan 2 ml buffer ammonium dan indicator EBT. Titrasi dengan EDTA sampai terbentuk warna biru terang. Catat volume titrasinya.
Perhitungan :
M titrasi (Mg-Ca) x pengenceran x mg/1 Mg komplekson x 100
 MgO (%) =	 Bobot contoh air
TEMBAGA (Cu) Tembaga merupakan unsur yang penting untuk tubuh manusia, diperkirakan In sehari 2 mg. Dalam kecil Cu sangat diperlukan tubuh untuk pembentukan seldarah merah, sedangakan dalam jumlah yang besar dapat menyebabkan rasa tidak muntah, dan masuknya tembaga berlebih kedalain tubuh lama kelamaan akan kebutuhan sehari 2 mg. Dal merusak hati.
Kadar 1,0 mg/l dalam air membuat rasa pahit. Dalam air minum jarang terdapat tembaga lebih dari 600 mg/l, umumnya kurang dari 30 mcg, batas yang diizinkan 0,05 - 15 mg/l. bila Cu terdapat dalam jumlah yang besar dapat menyebabkan :
1. rasa tidak enak di lidah
2. kerusakan hepar
Garam Cu dipergunakan untuk mencegah pertumbuhani jasad reaik, sebagai katalisator oksidasi mangan. Kerusakan pipa air dapat mengakibatkan naiknya kadar tembaga dalam air.
Penetapan kadar tembaga dengan inetode dietil ditokarbamat.
Prinsip : Ion Cu dengan dietil ditiokarbamat membentuk persenyawaan kompleks koloidal berwarna coklat. Tetapi bila kadar Cu tinggi koloid akan menjadi kekeruhan. Warna yang terjadi dibaca dengan spektrofotometer. Pembacaan setelah 5 menit tetapi kurang dari 1 jam. Warna yang terjadi sama dalam suasana sedilat asam, netral atau alkalis. Dengan tabung Nessler deteksi minimum 0,05 mg.
Pengganggu : pada penetapan air minum tidak boleh ada zat pengganggu seperti Zn, Pb, logam-logam yang lain menimbulkan kekeruhan putih. Bila perbandingan Fe dan Cu
lebih dari 50 : 1 akan terjadi warna coklat dari senyawa Fe-kompleks yang menutup warna dari Cu-kompleks. Metode yang lebih peka adalah dengan menggunakan spektrofotometer serapan atom.
',
                'gambar' => '',
            ],
            [
                'id' => 67,
                'id_mapel' => 8,
                'judul_materi' => 'Timbal (Pb)',
                'detail_materi' => 'Timbal merupakan racun tubuh yang bersifat kumulatif. Air alami jarang mengandung Pb lebih dari 20 mg/1. sumber pencemaran Pb dapat berasal dari alam atau dari aktifitas manusia Ceas manusia, yang akhirnya dapat mempengaruhi kadarnya di dalam air, udara h Emisi yang berasal dari aktifitas manusia terutama berasal dari pembakaran bar timbal, Pb (CH3)4 yang digunakan sintetik anti knocking Pb juga dapat el dari batuan galena (PbS) dan kerusakan pipa-pipa air yang sudah aus, terutama ma bersifat lunak dan sedikit asam. Keracunan Pb akan menyebabkan kerusakan bahan bakar timbal, Pb sustem reproduksi, hati, otak dan sistem syaraf.
Sebagaimana layaknya logam berat lainnya, Pb merupakan penghambat reaksi enzymatic. Keracunan Pb akan menyebabkan kerusakan ginjal, sistem reproduksi, hati. otak dan sistem syaraf sentral. Sumber pencemaran P5 lainnya berasal dari bungkus makanan, cat tembok, pipa timbal, buangan industri solder dan ceceran bensin. Kandungan maksimum yang diperbolehkan hanyalah 0,1 mg/l.
Analisa Pb dengan jumlah runut dengan metoda ditizon dianggap cukup peka. Bila perlu dilakukan digestion yaitu bila berada dalam ikatan organic atau anorganik yang tidak larut atau larut, maka diperlukan sample sebanyak 2 liter. Pada penganbilan sample perlu penambahan asam nitrat pekat 1,5 ml/1 sampel (pH V 2) agar pB tidak melekat pada dindingwadah. Sampai dilaboratorium harus segera diperiksa.
Penetapan kadar timbal dengan metode dithizone
Prinsip : Ditizone yang larut dalam kloroform akan menarik ion Pb dari larutan yang sedikit alkalis. Akan terbentuk Pb ditizone yang berwarna merah cherry dalam larutan kloroform. Warna merah yang terbentuk dibandingkan dengan warna baku pembanding
Pengganggu :
Sebelum mengerjakan metode ini, harus dikuasai teori dan praktek ditizon. Harus dijaga dari kontaminasi Pb, kalau perlu alat gelas yang dipakai khusus analisa Pb, reagen harus disari dengan ditizon untuk menghilangkan runut Pb. Harus dikerjakan blanko untuk memeriksa pb yang mungkin terkandung dalam reagens. Karena hampir 20 macam logam dapat bereaksi dengan ditizone membentuk senyawa kompleks yang berwarna, harus dihindari gangguan dari logam-logam tersebut. Maka pb-ditizon disari pada suasana amonikal kuat pada pH 10,0 - 11,5. deteksi minimum 1 meg Pb. Metode yang lebih peka dengan spektrofotometer serapan atom.
Sebelum melakukan analisa terhadap contoh air perlu dilakukan ekstraksi untuk menghilangkan zat pengganggu. Setelah itu contoh air ditambah cegah pembentukan hidroksida dan NaCN. Kemudian timbal diekstraksi pendahuluan untuk mengh tartrat untuk mencegah pembent dengan larutan eter diti timbal dithizonat tertutu stap eter ditizon. Karena pemberian ditizon berlebihan maka warna "ni hizonat tertutup oleh warna hijau dari dithizone yang berlebihan dan hal ini dengan larutan alkali sianida sehingga di dalam yang tertinggal hanya ot Larutan diencerkan hingga volume tertentu dan intensitas warnanya dapat diatasi dengan larutan dithizonat. Larutan diencer ditentukan secara spektrofotometer.
',
                'gambar' => '',
            ],
            [
                'id' => 68,
                'id_mapel' => 8,
                'judul_materi' => 'Amonia (NH3)',
                'detail_materi' => 'Dalam air badan air dan air limbah, seballagian besar nitrogen terdapat sebagai rat nitrit ammonia dan nitrogen organic. Secara analitik, nitrogen organik dan amidonia dapat ditetapkan bersama dan disebut nitrogen jumlah atau lebih tepatnya nitrogen kjeldahl karena penetapannya dilakukan dengan metode kjeldahl. Bentuk-bentuk senyawa di atas, seperti halnya gas N2 merupakan komponen dari siklus nitrogen. Banyaknya ammonja dalam air diukur dengan mg/l bahan ini sangat berbau sehingga tidak boleh sama sekali di dalam air.
Amonia secara alami ada pada air permukaan dan air tanah serta air limbah. Sebahagian besar erjadi pada uraian zat organic yang mengandung nitrogen oleh mikroorganisme dan dari hidrolisa urea. Secara alami juga merupakan hasil reduksi nitrat pada kondisi anaerob. Maka adanya ammonia merupakan salah satu petunjuk adanya pencemaran zat organik pada badan air.
Penetapan kadar ammonia secara kolorimetrik
Prinsip :
Amonia dapat bereaksi dengan reagen Nessler yaitu suatu larutan garam kompleks Kx(Hg14). Tergantung banyaknya ammonia, akan terbentuk larutar. koloid kuning sampai orange coklat. Warna yang terjadi dibandingkan dengan larutan baku ammonium yang sudah diketahui kadarnya, dengan spektrofotometer dengan panjang gelombang 400 - 500 nm atau dengan tabung Nessler.
2 K2 [Hg[4] + 2 NH2 + NH,Hg213 + 4 KI + NHI
Hasil analisa dinyatakan sebagai N
Pengganggu :
Ca, Fe,Mg dan sulfida dapat menimbulkan kekeruhan dengan reagens Nessler, dapat hindari dengan penambahan seng sulfa dan alkali atau KNa-tartrai.
PENENTUAN AMONIA
prinsip : Senyawa ammonia dengan pereaksi nessler dalam suasana basa akan membentuk senyawa kompleks berwarna kuning.
Reaksi : 2 (2KI.Hg/2) +2 NH; + 3 KOH                   (NH2)2HgOHHgI + 7 KI + 2H2O
Bahan:
1.	Pereaksi Nessler
Pembuatan : larutkan 10 g Hgt2 + 7 g KI dengan 25 ml H20. kocok dan tambahkan 16 g NaOH dalam 50 nd H20. penuhkan volume campuran hingga 100 ml.
2.	Standar Ammonium 100 mgfi
Pembuatan : larutkan 2,966 g NH4Cl p.a sampai 1 L. pipet 10 ml dan encerkan hingga volume 100 ml dengan air destilasi bebas ammonia.
Alat :
1. Tabung Nessler
2. .Labu ukur 100ml
3. Pipet volume 10 ml
Cara kerja :
Buat larutan seri standar 0-5-10-20-30-40-50 mg/l NH4. ke dalam labu ukur 100 ml pipet 50 ml contoh air, blanko dan larutan seri standar. Tambahkan 1 ml pereaksi Nessler lalu penuhkan volumenya hingga 100 ml dengan air destilasi. Larutan akan berwarna kuning. Baca absorbansinya pada à maksimum pada 400 - 425 nm. Hasil whecaan absorbans contoh diekstrapolasikan pada kurva kalibrasi (kurva antara absorbansi dan konsentrasi NHA standar).
Cara lain dengan menitrasi larutan blanko dalam tabung Nessler dengan larutan standar ammonia 10 mg/l sambil dicampur sampai warnanya sesuai dengan warna larutan contoh.
Perhitungan :
Dengan spektrofotometer:
NH (mg/l) = NHA pada grafik x pengenceran
Dengan tabung Nessler :
NH. (mg/l)-ml standar x konsentrasi standar (mg/l) x 1000/ml contoh
',
                'gambar' => '',
            ],
            [
                'id' => 69,
                'id_mapel' => 8,
                'judul_materi' => 'Nitrat (No3)',
                'detail_materi' => 'Nitrat merupakan hasil akhir dalam siklus nitrogen alam. Umumnya hanya terdapat dalam jumlah runut dalam air permukaan tetapi pada beberapa air tanah kadarnya lebih tinggi. Satuannya mg/l dengan batas maksimum 20 mg/l. jumlah nitrat yang besar dalam usus cenderung untuk berubah menjadi nitrit yang dapat bereaksi langsung dengan Hb membentuk methaemoglobin yang dapat menghalangi perjalanan oksigen di dalam tubuh. Bila kadarnya dalam air cukup besar dapat membahayakan kesehatan pada anak kecil mengakibatkan infant methaemoglobinemia.
Nitrat dapat ditentukan dengan 2 cara :
1. dengan mereduksinya menjadi ammonia dengan hydrogen nacendi. Reduksi dilakukan dengan medium HCL sehingga ammonia berubah menjadi ammonium klorida. NaNO3 + 8H + 2 HCI- NH-CI + NaCl + 3H20 Ammonia kemudian ditentukan dengan metode ammonia nitrogen dan dikonvensi sebagai N-NO3.
2. Cara lain adalah dengan metode asam disulfat. Asam disulfonat dibuat dengan mereaksikan phenol dengan asam sulfat. CHOH + 2H2SO4 CH3 (OH) (SO3)2 + 2H2O
Jika nitrat direaksikan dengan asam disulfonat dan larutan hasilnya di basakan dengan NaOH akan dihasilkan senyawa berwarna kuning. Senyawa ini adalah garam natrium dari asam pikrat yang terbentuk karena nitrasi phenol. CH(OH) (SOH)2 + 3HNO; - CH(OH) (NO2)2 + 2H2SO4+H2O Warna yang dihasilkan dibandingkan dengan warna dari standar yang telah diperlakukan sama dengan larutan contoh.

Penetapan kadar nitrat dengan metode asam fenoldisaifonat
Prinsip : Nitrat dapat bereaksi dengan asam fenoldisulfonat membentuk warna kuning. Warna yang terjadi dibandingkan dengan deret baku dengan spektrofotometer pada panjang gelombang 410 nm atau dengan tabung-tabung Nessler.
Pengganggu :
Adanya klorida menyebabkan hasil lebih rendah, harus direduksi jumlahnya sampai dibawah 10 mg/l dengan mengendapkannya dengan AgSO4, nitrit dengan kadar lebih dari 0,2 mg/l menyebabkan hasil lebih tinggi, harus diubah dahulu menjadi nitrat. Hasil yang didapat harus dikurangi dengan kadar nitrit. Sample yang berwarna harns dihilangkan dahulu warnanya dengan Al(OH)3. Deteksi minimum 10 mg/i.

Penetapan kadar nitrat dengan metode brusin
Prinsip : Reaksi antara nitrat dengan brusin menghasilkan warna kuning yang dapat diperiksa secara spektrofotometrik pada panjang gelombang 410 nm. Kecepatan reaksi dipengaruhi oleh jumlah panas yang dihasilkan selama pengujian. Pengaturan panas dilakukan dengan penambahan reagens secara berurutan dan mengeramkan campuran selama waktu tertentu pada suhu tertentu pula. Suasan asam dan waktu reaksi diperlukan untuk pembentukan warna yang optimum dan stabil. Metoda ini dapat digunakan pula pada air asin.
Metode ini hanya baik untuk kadar nitrat diantara 0,1-1 mg/l nitrat-N.
Pengganggu :
Semua oksidator atau reduktor kuat. Bila ada sisa klor dinetralkan dengan Na-arsenit, gangguan dari nitri-N sampai 0,5 mg/l diatasi dengan asam sulfanilat.
Catatan : Brusin sangat toksik, hindari memipet dengan mulut
',
                'gambar' => '',
            ],
            [
                'id' => 70,
                'id_mapel' => 8,
                'judul_materi' => 'Penentuan Kadar Nitrat',
                'detail_materi' => 'Prinsip : Senyawa nitrat dengan asam phenoldisulfonat dalam suasana basa akan Prinsip : Senyawa nitrat bentuk senyawa yang berwarna kuning.
Reaksi :
CH(OH) (SO3H2)2 + 3 HNO, - C6H (OH) (NO2)3 + 2H2SO4 + H20
Bahan :
1. asam phenol disulfonat
2. pembuatan : tambahkan 75 ml 85 % asam sulfat dan 37,5 ml asam sulfat berasap kedalam 12 ml phenol
3. larutan 12 N KOH
4. pembuatan : larutkan 67,2 g KOH hingga volume 100 ml
5. larutan standar nitrat 100 mg/l pembuatan : timbang 0,72189 g KNO3 yang telah dikeringkan 105°C selama 24 jam. Larutkan hingga 1 L di dalam labu ukur. Tambahkan 2 ml CHCI, untuk pengawetan.
Bahan :
1. Labu ukur 100 ml
2. Spektrofotometer
3. Tabung Nessler
Cara kerja :
Buat larutan seri standar 0-1-2-4-6-8-10 mg/l NO3. pipet larutan contoh, standar dan blanko sebanyak 25 ml lalu masukkan ke dalam beaker glass. Keringkan dengan water bath.setelah kering tambahkan 2 ml asam phenoldisulfonat dan 20 ml air destilasi serta 2 ml 12 N KOH.
Masukkan ke labu ukur 100 ml. penuhkan dengan air destilasi sampai tanda batas. cari maksimumnya pada spektrofotometer, baca absorbans blanko, deret larutan standar dan contoh. Hasil pembacaan absorbans contoh diekstrapolasikan pada kurva kalibrasi (kurva antara absorbansi dan konsentrasi NO3 standar).
Cara lain adalah dengan membandingkan warna larutan contoh dengan warna Cara lain adalah dengan me Contoh lebih pekat. Pada blanko ditambahkan larutan standar nitrat 1 blanko. Bila warna contoh leb; ma blanko sama dengan warna contoh. catat volume larutan standar yang mg/l sampai warna blant terpakai.
Perhitungan :
Dengan spektrofotometer : NO3 (mg/l) = NO3 pada grafik x pengenceran.
Dengan tabung Nessler :
NO3 (mg/l) = ml titrasi x konsentrasi larutan standar (mg/l) x 1000/ml contoh.
',
                'gambar' => '',
            ],
            [
                'id' => 71,
                'id_mapel' => 8,
                'judul_materi' => 'Nitrit (No2)',
                'detail_materi' => 'Nitrit dalam air merupakan peruraian biologik dari zat organik. Bila dihubungkan dengan bentuk-bentuk nitrogen yang lain, adanya tapak nitrit merupakan petunjuk adanya pencemaran organic. Dalam air minum jarang terdapat nitrit lebih dari 0,1 mg/1. nitrit dapat menyebabkan penyakit blue babies. Nitrit ditentukan dengan mereaksikan larutan contoh asam sulfanilat dan naphtylamin HCI. Warna merah azobenzol-naphtylamin asam sulfanilat yang timbul dibandingkan dengan warna dari larutan standar yang telah diperlakukan sama dengan larutan contoh.
C.H4 (NH2) (SO3H) + NaNO2 + 2 HCl - C6H4(N=N-CI)(SO3H) + NaCl + 2 H2O Asam sulfanilat
C6H4 (N=N-CI) (SO3H) + C6H6C_H4(NH2) CH.SO3H-N=N-C6H6C_H4(NH2)

Penetapan kadar nitrit dengan metode diazo
Prinsip : Nitrit akan mengikatkan asam sulfanilat dengan nafilamin HCl membentuk senyawadiazo pada pH 2,0 - 2,5 yang berwarna merah. Warna yang erjadi dibandingkan baku dan dibaca pada spektrofotometer pada panjang gelombang 520 nm atau dengan tabung Nessler, menggunakan pembanding deret baku. Deteksi minimum 1 mcg/l dengan tabung Nessler.
PENENTUAN NITRIT
Prinsip : Senyawa nitrit senyawa dengan asam sulfanilat dan maphtylamin akan membentuk warna merah yang kepekatannya sebanding dengan kandungan nitrit dalam berwarna contoh air.
Bahan :
1.	Asam sulfanilat
pembuatan : 2 g asam sulfanilat dilarutkan dengan 50 ml 4 N (50%) asam asras.
2.	a-naphtylamin
pembuatan : 1 g naphtylamin dilarutkan dalam 50% asam asetat
3.	Larutan standar 100 mg/l NO2
Pembuatan : Timbang 4,93 g NaNO2 larutkan dengan air destilasi hingga 1 L
Alat :
1. Labu ukur 100 ml
2. Tabung Nessler
3. Spektrofotometer
Cara kerja :
Buat deretan larutan standar 0-5-10-20-30-40-50 mg/l. pipet 50 ml contoh, baloko dan seri standar ke dalam labu ukur 100 ml lalu tambahkan 1 ml asam sulfanilat dan 1 ml -naphtylamin. Isi dengan air destilasi sampai tanda batas. Jika warna merah muncul berarti nitrit ada. Lalu dibaca absorbansnya dengan spektrofotometer pada 7. 520 mm. Hasil pembacaan absorbans contoh diekstrapolasikan pada kurva kalibrasi (kurva antara absorbansi dan konsentrasi NO2 standar). Cara lain adalah dengan membandingkan warna contoh dengan warna blanko di dalam tabung Nessler. Titrasi dengan larutan standar nitrit 1 mg/l sampai warnanya sama dengan warna contoh. Dicatat volume larutan standar.
Perhitungan :
Dengan spektrofotometer:
NO2 (mg/i) = NO3 pada grafik x pengenceran
Dengan tabung Nessler : NO2 (mg/l) = ml titrasi x konsentrasi larutan standar (mg/l) x 1000/ml ',
                'gambar' => '',
            ],
            [
                'id' => 72,
                'id_mapel' => 8,
                'judul_materi' => 'Flourida',
                'detail_materi' => 'Satuan yang digunakan untu ng diizinkan adalah 1,0 - 2.0 sebagai pencegah karies gigi melebihi 1,0 mg/l dapat noda coklat yang susah hilang) Fluorida dalam air minum karies gigi. Fluorida dapat secara minum. Bila kadarnya melebihi ha h hilang) kadar 1-2 mg/l tersebut untuk daerah tropis perlu direvisi.
Fluorida dalam  air minum dengan kadar sekitar 1,0 mg/l secara efektif mencegah dapat secara alami ada dalam air atau sengaja ditambahkan dalam air va melebihi batas dapat menimbulkan fluorosis yaitu kerusakan pada gigi.
Penetapan fluorosis secara kolorimetrik :
Prinsip:
Ion fluorida bereaksi dengan zat warna zikronil-alizarin senyawa kompleks yang tidak berwarna.Sehingga makin tinggi kadar fluorida, warna makinn hendingkan dengan larutan baku, dalam deret tabung Nessler atau dengan terjadi dibandingkan dengan larutan baku, dalam deret tabung Nessler atau dengan kolorimeter.
',
                'gambar' => '',
            ],
            [
                'id' => 73,
                'id_mapel' => 8,
                'judul_materi' => 'Klorida (CI)',
                'detail_materi' => 'Klorida adalah salah satu anion yang terbanyak terkandung dalam air. Rasa asin yang ditimbulkan oleh klorida berbeda-beda tergantung dari susunan kimia air tersebut. Air yang mengandung klorida 250 mg/l terasa asin bila mengandung pula ion natrium. Ada pula air yang rasa asinnya berbeda meskipun mengandung klorida 100 mg/l bila mengandung banyak ion Ca dan Mg. Klorida yang kadarnya tinggi akan merusak pipapipa logam dan tanaman.
Penetapan kadar secara Argentometri
Prinsip :
Dalam larutan netral atau sedikit alkalis klorida diendapkan oleh larutan perak nitrat. Indikator yang dipilih adalah kalium kromat yang pada TAT membentuk endapan perak kromat yang berwarna merah.
Pengganggu : Bahan-bahan yang normal terdapat dalam air minum tidak mengganggu.bromida, lodida dan Sianida terhitung sebagai klorida, sulfida dan tiosulfat mengganggu, dihilangkan dengan perhidrol dalam suasana netral. H2S bebas dihilangkan dengan pendidihan.
PENENTUAN KADAR KLORIDA
Prinsip : Dalam suasana netral atau se na netral atau sedikit basa klorida yang terkandung di dalam contoh air akan beraksi dengan AgNO3 membentuk AgCl pada titik akhir titrasi, kelebihan AgNO3 aksi dengan K2C+04 membentuk AgCrO4 yang berwarna merah bata.
Reaksi : cr +AgNO3 --- AgCl + NO, AgNO3 + K2CrO4 ---- AgCrO4/
Bahan :
1.	Larutan standa AgNO3 merah coklat
Pembuatan : larutkan 4,7924 g AgNO3 di dalam labu ukur 1 L dengan air destilasi hingga tanda batas
2.	Larutan 5% KCM.
Pembuatan : 50 g KC14 dilarutkan sarnpai voluine 1 L di dalam labu ukur
Alat:
1. Buret
2. Pipet
3. Erlenmeyer
Cara kerja :
ke dalam 100 ml contoh air tambahkan 1 ml kalium kromat, titrasi dengan AgNO3 sampai warna merah coklat. Catat volume titrasiny (A). dibuat juga penentuan blanko (B).
(B-A)x 1000 x AgNO3
Cl (mg/l) =	Ml contoh
',
                'gambar' => '',
            ],
            [
                'id' => 74,
                'id_mapel' => 8,
                'judul_materi' => 'BOD = Biochemical Oxygen Demand (Kebutuhan Biologik Akan Oksigen)',
                'detail_materi' => 'BOD adalah banyaknya oksigen yang diperlukan utnuk menguraikan zat organik BOD adalah banyaknya oksi dalam air secara biologik, sampai menjadi senyawa yang stabil. Dalam air limbah, bahan pencemar organik akan diuraikansecara alami oleh bakteri yang ada. Bakteri dalam air dapat digolongkan menjadi beberapa golongan. Golongan aerob adalah mereka memerlukan oksigen bebas untuk kehidupannya dan golongan anaerob adalah yang tidak memerlukan oksigen bebas pemecahan senyawa lain. Ada golongan ketiga yang dinamakan golongan falkultatif yang dapat berlaku sebagai aerob maupun anaerob tergantung keadaan lingkungannya. Kebanyakan Bakteri dalam air kotor adalah sapropit, hidup dari zat organik yang telah banyakan bakteri dalam air kotor adalah san mati.
Kalau DO cukup banyak, bakteri aerob akan melakukan oksidasi dan terbentuklah yawa nitrit yang selanjutnya menjadi nitrat. Kalau kehabisan DO selama proses ini nitrat akan direduksi kembali menjadi nitrit oleh bakteri anaerob. Ini akan terjadi bila sebahagian besar zat otganik tersebut telah dioksidasi menjadi nitrat. Kalau persediaan oksigen tidak cukup zat organik akan diuraikan oleh bakteri anaerob membentuk amonia. Jadi bila ada pencemar organik dalam air limbah, DO yang ada akan dipergunakan oleh bakteri untuk menguraikannya, sehingga cepat habis. Sebaliknya bila air limbah yang mengandung bahan pencemar organik diberi oksigen secukupnya (dilakukan aerasi) akan terjadi peruraian aerobik sampai mencapai keadaan stabil. Banyaknya oksigen yang diperlukan untuk mencapai keadaan stabil ini yang disebut BOD.
BOD merupakan petunjuk penting untuk mengetahi banyaknya zat organik yang terkandung dalam air limbah. Makin banyak kandungan zat organik makin tinggi BODnya. Nilai BOD dipengaruhi oleh suhu, cahaya matahari, pertumbuhan biologik, gerakan air dan kadar oksigen.
BOD ditentukan dengan mengukur oksigen yang dioksidasi oleh zat organik dalam sample yang diwakili oleh mikroorganisme. Uji ini dilakukan dengan mengukur. kadar oksigen terlarut dari sua dari suatu contoh segar dan diikuti pengukuran kadar oksigen lah diinkubasi selama 5 hari pada suhu 20°C.jika kebutuhan worlarut untuk contoh yang telah diinkubasi sa lebih besar dari oksigen yang terlarut perlu dilakukan pengenceran otoh analisis. Besarnya pengenceran tergantung dari kebutuhan oksigen dan terlarut itu sendiri. Untuk contoh air limbah perlu dilakukan oksigen dari sample lebih bese terhadap contoh analisis. jumlah kandungan oksigen sejumlah penmgenceran untuk Beberapa faktor yang dapa jenis larutan peng penceran untuk meyakinkan salah satunya sesuai dengan yang dibutuhkan yang dapat meningkatkan laju oksidasi zat organik oleh bakteri yaitu genceran, pH dan kandungan bakteri. Beberapa larutan pengencer mengandung garam Ca, Mg, PO, dan NH.NO,
Untuk mencapai keadaan stabil dilaboratorium diperiukan waktu inkubasi. dipakai waktu 5 hari pada suhu 20°C. jadi bila 1 liter limbah memerlukan 100 dalam waktu hari pada suhu 20°C maka BOD-nya untuk 5 hari pada suhu 20°C umumnya dipakai waktu 5 har mg O2 dalam waktu h adalah 100 mg/l atau BOD. 20°C = 100 mg/i.
Prinsip penetapan BOD :
Karena sering kali DO sampel rendah, maka diperlukan air untuk pengencer yaitu air suling yang diberi nutrien untuk perumbuhan bakteri (terdiri dari dapar pospat, MgSO4, CaCl2 dan FeCl3) kemudian sampai jenuh oksigen.
Disediakan 5 botol oksigen :
1. Botol I diisi air pengencer, tentukan DO = a mg/l
2. Botol II diisi air pengencer, diinkubasi 5 hari pada suhu 20°C, tentukan DO = b mg/l
3. Botol III diisi sample + air pengencer, tentukan DO=cmg/l
4. Botol IV dan V diisi sample_ air pengencer, diinkubasi 5 hari pasa suhu 20°C, tentukan DO = d dan e mg/l
DO air pengencer rata-rata = 2 x (a + b) mg/l
DO sample + air pengencer setelah inkubasi rata-rata = 2 x (d + c) mg/l = y mg/l
HOD sample = faktor pengenceran x (c-y), dinginkan antara 20 - 80 % dari Z Pada keadaan tertentu diperlukan seeding yaitu penambahan bakteri karena dalam sample tidak cukup jumlah bakterinya.
',
                'gambar' => '',
            ],
            [
                'id' => 75,
                'id_mapel' => 8,
                'judul_materi' => 'Penentuan BOD = Biochemical Oxygen Demand',
                'detail_materi' => 'Prinsip: Oksigen di dalam contoh air limbah akan mengoksidasi Mnso, yang ke dalam contoh dalam keadaan alkalis, sehingga terjadi endapan MnO ambahan dan KI, akan dibebaskan 12 yang jumlahnya ekivalen dengan jumlah erlarut. Iodium yang dibebaskan dititrasi dengan larutan standar tiosulfat dengan ditambahkan ke dalam cont dengan penambahan dan oksigen terlarut. Iodium indikator amilum.
 Reaksi :
MnSO4 +2 KOH Mn(OH)2 + 1/2O2
MnO2+2 KI + 2H2O 12 + 2S2O3
Mn(OH)2 + K2SO4 MnO2 + H2O
 Mn(OH)2 + 12 + 2KOH S204 +21
Bahan :
1.	Larutan MnSO4
Pembuatan : larutkan 480 g MnSO4.4H20 atan 400 g MnS04.2H20 atau 364 g MnSO4.H20 dengan air destilasi. Saring dan tepatkan volumenya sampai 1 L
2.	 Larutan alkali-iodide-azide
Pembuatan : larutkan 500 g NaOH di dalam air destilasi dengan bobot yang sama. Biarkan beberapa hari untuk mengendapkan karbonat. Pindahkan larutan yang kernih ketempat lain lalu tambahkan 150 g KI dan 10 g Na-azide (encerkan dengan air destilasi) penuhkan volumenya sampai 1 L.
3.	H2SO4 (p)
4.	 Larutan kanji
Pembuatan : Emulsikan 5g amylum dengan sedikit air destilasi lalu masukkan ke dalam 1 L air mendidih. Awetkan dengan menambahkan 1,25 g asam salisilat untuk tiap liternya atau beberapa tetes toluen.
5.	Larutan stok 0,25 N Na2S2O3 Pembuatan : 63 g Na2S2O3.5H20 dilarutkan dalam 1 L dengan air destilasi. Stabilkan dengan menambahkan 1 ml CHCl3. biarkan beberapa hari sebelum digunakan.lalu Larutan standar 0,0125 dan penuhkan volumenya hingga 1 L (setiap satu minggu ambahkan 1 ml CHC13 dan penuhkan v 5o FeCl2.6H2O dalam 1 liter air destilasi, larutkan 11,0 g sekali distandarisasi).
6.	Larutan pengencer:
Sediakan larutan 0,25 g Fe CaCl2 dalam 1 L air destilas larutan buffer fosfat sir destilasi, larutkan MgSO4.7H2O dalam 1 L air destilasi dan sfat (34 g KHPO4 dalam 500 ml air destilasi tambahkan 175 ml 1 15 g ammonium sulfat lalu encerkan sampai 1 liter) lalu ambil N NaOH dan 1,5 g ammonium bo-masing 0,5 ml FeCl3.6H20, 2,5 ml CaCl2 2,5 ml MgSO4.7H,O dan 1.25 buffer fosfat kemudian encerkan sampai 1 liter.
Alat:
1. Botol Winkler
2. Inkubator
3. Buret
Cara kerja :
Masukkan 1 mi air limbah ke dalam dua buah botol BOD (botol winkler) penuhkan volumenya dengan larutan pengencer. Tutup rapat mulut botol lalu goncang sehingga sehingga isinya tercampur rata. Inkubasikan botol kedua di dalam inkubator pada temperatur 20°C selama 2 hari (BOD) sedang botol pertama langsung tentukan kandungan oksigen terlarutnya dengan cara berikut (BOD) :
ke dalam botol BOD tambahkan 2 ml MnSO4 dan 2 ml Na-azide. Tutup botolnya dan goncang. Akan terbentuk endapan berwarna coklat. Diamkan hingga semua endapan mengendap. Buang cairan atasnya dan jaga jangan sampai ada endapan yang terbuang. Tambahkan 2 ml asam sulfat pekat. Endapan coklat akan larut. Titrasi dengan larutan standar natrium tio sulfat hingga terbentuk warna kuning lemah. Tambahkan 1 ml larutan kanji. Lanjutkan titrasi hingga warna biru tepat hilang. Setelah 3 hari tentukan oksigen terlarut pada botol kedua dan blanko.
Perhitungan :
(V BOD. - V cth BOD)-( v bl BOD. - VI BOD)]) x 100 x N thio X8
mg/1 BOD = 	volume contoh - 2 ml
V cth= Volume contoh
V bl= volume blanko
',
                'gambar' => '',
            ],
            [
                'id' => 76,
                'id_mapel' => 8,
                'judul_materi' => 'COD = Chemical Oxygen Demand (Kerutuhan Kimiawi Akan Oksigen',
                'detail_materi' => 'Penetapan COD gunanya untuk mengukur banyaknya oksigen setara dengan bahan organik dalam sample air, yang mudah dioksidasi oleh senyawa kimia oksidator Penetapan ini sangat penting untuk dapat diuraikan secara biologik. Maka dapat an COD adalah banyaknya oksidator kuat yang diperlukan untuk mengoksidasi panik dalam air, dihitung sebagai mgf. 02. beberapa zat organik yang tidak terurai secara biologik antara lain asam asetat, asam sitrat, selulosa dan lignin (zat kaya).
Penggunaan teknik yang benar-benar sama antara lain sample dan blanko pada setiap penetapan sangat penting karena hanya sebahagian dari senyawa zat organik vang terhitung, tergantung pada oksidator kimia yang dipakai. Cara refluks dengan dikromat dipilih untuk penetapan COD karena kemampuannya untuk mengoksidasi, pemakaiannya luas terhadap berbagai jenis sample dan mudah dilakukan.
Prinsip :
Kebanyakan dari jenis bahan organic dirusak oleh campuran senyawa dikromat dan asam sulfat mendidih. Kelebihan dikromat dititrasi dengan fenro ammonium sulfat. Banyaknya bahan organic yang dioksidasi dihitung sebagai oksigen yang setara dengan kalium dikromat yang terikat.


Pengganggu :
Senyawa alifatik rantai 1 ebih baik dari cara permanganat. Senyawa alifatik rantai lurus lebih meskipun cara ini lebih baik nambahkan katalisator AgSO4, tetapi akan terjadi endapan efektif oksidasinya vida atau klorida yang hanya sebahagian dioksidasi dalam prosedur dengan iodida, bromida atau ini. Pada oksidasi hidroka rantai lurus. Kesulitan omatik penambahan katalisator tidak ada manfaatnya,  karena adanya klorida dalam sample diatasi dengan so, sebelum direfluks. Akan terjadi komplek merkuri klorida yang larut penambahan HgSO4 sebelum d berkurang kemampuannya untuk bereaksi lebih lanjut.
PENENTUAN CHEMICAL OXYGEN DEMAND (COD)
Prinsip :
bahan kimia organic pada air limbah akan mengoksidasi K2Cr2O7 dalam suasana asam Bhan kimia organic pada air limbah Velebihan kalium bikromat dititrasi dengan larutan standar ferri ammonium sulfat dengan indicator diphenil amin.
Reaksi : 3C +2 C1207 Cr207 + FeSO4 3 CO2 +4 Cr3+ + 8H20 Cr2(SO4)3 + Fe3+
Bahan :
1. Reaktor COD
2. Buret
3. Erlenmeyer
Cara kerja :
Masukkan 1 ml air limbah PKS ke dalam tabung yang sudah berisi reagen untuk penentuan COD. Masukkan ke dalam lubang reactor COD. Lakukan destruksi pada temperatur 150°C selama 2 jam. Setelah dingin masukkan ke dalam Erlenmeyer 100 ml sambil dibilas dengan air destilasi. Tambahkan 0,5 ml indicator diphenil amin lalu titrasi dengan larutan ferroamonium sulfat (FAS) hingga terjadi perubahan warna dari biru menjadi hijau.
Perhitungan:
(ml blanko - ml contoh) x N larutan FAS x 8000
COD (mg/1) = 	Volume contoh air SO
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
