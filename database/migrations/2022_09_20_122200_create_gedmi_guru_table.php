<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGedmiGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gedmi_guru', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jabatan');
            $table->string('tamatan');
            $table->string('gelar');
            $table->string('bidang_studi');
            $table->string('agama');
            $table->text('alamat');
            $table->timestamps();
        });

        $defaultData = [
            [
                'id' => 1,
                'id_user' => 1,
                'nama' => 'Agung Sihotang, S.Pd',
                'tempat_lahir' => 'Huta Raja',
                'tanggal_lahir' => '1978-03-19',
                'jabatan' => 'Guru',
                'tamatan' => '2001',
                'gelar' => 'S1',
                'bidang_studi' => 'IPA',
                'agama' => 'Islam',
                'alamat' => 'JL. Mapilindo No. 125 Medan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'id_user' => 2,
                'nama' => 'Almas Adlina,S.Pd',
                'tempat_lahir' => 'Medan',
                'tanggal_lahir' => '1998-02-07',
                'jabatan' => 'Guru',
                'tamatan' => '2019',
                'gelar' => 'S1',
                'bidang_studi' => 'Matematika',
                'agama' => 'Islam',
                'alamat' => 'JL. Marelan V Pasar II Barat',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'id' => 3,
                'id_user' => 3,
                'nama' => 'Diana Susanti, iregar, S.Pd',
                'tempat_lahir' => 'Pangurabaan',
                'tanggal_lahir' => '1981-12-13',
                'jabatan' => 'Wali Kelas',
                'tamatan' => '2004',
                'gelar' => 'S1',
                'bidang_studi' => 'B.Indonesia',
                'agama' => 'Islam',
                'alamat' => 'JL. Terusan 2 Gg. Lestari',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'id' => 4,
                'id_user' => 4,
                'nama' => 'Dr. Mesran, M.Pdi',
                'tempat_lahir' => 'P.Siantar',
                'tanggal_lahir' => '1973-06-05',
                'jabatan' => 'Kepala Sekolah',
                'tamatan' => '2019',
                'gelar' => 'S3',
                'bidang_studi' => '-',
                'agama' => 'Islam',
                'alamat' => 'JL. TS 01 Blok 6. Martubung',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'id' => 5,
                'id_user' => 5,
                'nama' => 'Erlina Simanjuntak, S.T',
                'tempat_lahir' => 'P.Siantar',
                'tanggal_lahir' => '1980-03-11',
                'jabatan' => 'Guru',
                'tamatan' => '2003',
                'gelar' => 'S1',
                'bidang_studi' => 'Agama Kristen',
                'agama' => 'Kristen',
                'alamat' => '-',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'id' => 6,
                'id_user' => 6,
                'nama' => 'Gaya Baiduri, S.Pdi',
                'tempat_lahir' => 'Medan',
                'tanggal_lahir' => '1980-03-11',
                'jabatan' => 'Wali Kelas',
                'tamatan' => '2004',
                'gelar' => 'S1',
                'bidang_studi' => 'Agama Islam',
                'agama' => 'Islam',
                'alamat' => 'JL. Veteran Pasar X Helvetia Gg. Budi',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'id' => 7,
                'id_user' => 7,
                'nama' => 'Hengki S. Sianturi, S.Pd',
                'tempat_lahir' => 'Balige',
                'tanggal_lahir' => '1982-08-19',
                'jabatan' => 'Guru',
                'tamatan' => '2007',
                'gelar' => 'S1',
                'bidang_studi' => 'Penjas',
                'agama' => 'Kristen',
                'alamat' => 'JL. Titi Pahlawan Simpang Kantor',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'id' => 8,
                'id_user' => 8,
                'nama' => 'Intan Sari Siregar, S.Pd',
                'tempat_lahir' => 'Medan',
                'tanggal_lahir' => '1995-04-04',
                'jabatan' => 'Wali Kelas',
                'tamatan' => '2017',
                'gelar' => 'S1',
                'bidang_studi' => 'IPA',
                'agama' => 'Islam',
                'alamat' => 'JL. Rawe 3 Pasar 5 Martubung',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'id' => 9,
                'id_user' => 9,
                'nama' => 'Jessica Yolanda, S.Pd',
                'tempat_lahir' => 'Medan',
                'tanggal_lahir' => '1998-04-21',
                'jabatan' => 'Guru',
                'tamatan' => '2020',
                'gelar' => 'S1',
                'bidang_studi' => 'Seni Budaya',
                'agama' => 'Kristen',
                'alamat' => 'JL. Tempirai lestari X Blok V',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'id' => 10,
                'id_user' => 10,
                'nama' => 'Keti Suyati, S.Pd',
                'tempat_lahir' => 'Nedan',
                'tanggal_lahir' => '1987-01-07',
                'jabatan' => 'Wali Kelas',
                'tamatan' => '2011',
                'gelar' => 'S1',
                'bidang_studi' => 'B.Inggris',
                'agama' => 'Islam',
                'alamat' => 'JL. Putri Hijau Aspol',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'id' => 11,
                'id_user' => 11,
                'nama' => 'Mhd. Sabdana, S.Pd',
                'tempat_lahir' => 'Medan',
                'tanggal_lahir' => '1994-09-01',
                'jabatan' => 'Guru',
                'tamatan' => '2016',
                'gelar' => 'S1',
                'bidang_studi' => 'IPA',
                'agama' => 'Islam',
                'alamat' => 'JL. Rawe IX Lingk. II Pasar 8',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'id' => 12,
                'id_user' => 12,
                'nama' => 'Novenna Nurmalasari, S.Kom',
                'tempat_lahir' => 'Medan',
                'tanggal_lahir' => '1982-10-28',
                'jabatan' => 'Tata Usaha',
                'tamatan' => '2012',
                'gelar' => 'S1',
                'bidang_studi' => 'TIK',
                'agama' => 'Islam',
                'alamat' => 'JL. Banten Baru No. 47 Tanjung Gusta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 13,
                'id_user' => 13,
                'nama' => 'Salamuddin',
                'tempat_lahir' => 'Medan',
                'tanggal_lahir' => '1985-08-14',
                'jabatan' => 'Guru',
                'tamatan' => '2002',
                'gelar' => 'STM',
                'bidang_studi' => 'Pramuka',
                'agama' => 'Islam',
                'alamat' => 'JL. Pasar 5 Marelan Paya Pasir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 14,
                'id_user' => 14,
                'nama' => 'Siti Agustina Julita, S.Pd',
                'tempat_lahir' => 'Medan',
                'tanggal_lahir' => '1993-08-19',
                'jabatan' => 'Guru',
                'tamatan' => '2016',
                'gelar' => 'S1',
                'bidang_studi' => 'Matematika',
                'agama' => 'Islam',
                'alamat' => 'JL. Titi Pahlawan Simpang Kantor',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'id' => 15,
                'id_user' => 15,
                'nama' => 'Tatang Angkasa Trg, S.Psi',
                'tempat_lahir' => 'Medan',
                'tanggal_lahir' => '1984-06-28',
                'jabatan' => 'Guru',
                'tamatan' => '2001',
                'gelar' => 'S1',
                'bidang_studi' => 'Bimbingan Konseling',
                'agama' => 'Islam',
                'alamat' => 'JL. Pasar III Marelan',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'id' => 16,
                'id_user' => 16,
                'nama' => 'Venny C. Tanjung, S.Pd',
                'tempat_lahir' => 'Medan',
                'tanggal_lahir' => '1980-12-13',
                'jabatan' => 'PKS II',
                'tamatan' => '2003',
                'gelar' => 'S1',
                'bidang_studi' => 'Prakarya',
                'agama' => 'Islam',
                'alamat' => 'JL. TS 01 Blok 6. Martubung',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'id' => 17,
                'id_user' => 17,
                'nama' => 'ZL. Purba, BA',
                'tempat_lahir' => 'Percut',
                'tanggal_lahir' => '1964-12-31',
                'jabatan' => 'Guru',
                'tamatan' => '1989',
                'gelar' => 'D3',
                'bidang_studi' => '-',
                'agama' => 'Kristen',
                'alamat' => 'Dusun 1 Desa Cinta Damai Percut',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ];

            DB::table('gedmi_guru')->insert($defaultData);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gedmi_guru');
    }
}
