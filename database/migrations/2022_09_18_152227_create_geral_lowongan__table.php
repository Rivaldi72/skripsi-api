<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeralLowonganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geral_lowongan_', function (Blueprint $table) {
            $table->id();
            $table->string('posisi_pekerjaan');
            $table->string('nama_perusahaan');
            $table->string('alamat');
            $table->string('kota');
            $table->text('deskripsi');
            $table->string('pendidikan');
            $table->text('syarat');
            $table->string('tipe_pekerjaan');
            $table->string('tipe_posisi');
            $table->text('fasilitas');
            $table->timestamps();
        });
        $defaultData = [

            [
                'id'                            =>      1,
                'posisi_pekerjaan'              =>      'Teknisi Jaringan',
                'nama_perusahaan'               =>      'Service Comp',
                'alamat'                        =>      'Jln. Rakyat GG. Blok A No.4',
                'kota'                          =>      'Medan',
                'deskripsi'                     =>      'Melakukan troubleshooting jaringan, pemasangan router beserta kabel, dan memastikan jaringan dapat terkoneksi dengan baik.',
                'pendidikan'                    =>      'SMK/Sederajat',
                'syarat'                        =>      'Disiplin, bisa bekerjasama dalam tim, Mau belajar dan bekerja keras, Memiliki keahlian dasar komputer untuk jaringan.',
                'tipe_pekerjaan'                =>      'Magang',
                'tipe_posisi'                   =>      'Junior',
                'fasilitas'                     =>      'Sertifikat, Pengalaman Bekerja, Serta Uang Saku.',
                'created_at'                    =>      now(),
                'updated_at'                    =>      now(),
            ],
            [
                'id'                            =>      2,
                'posisi_pekerjaan'              =>      'Teknisi Komputer',
                'nama_perusahaan'               =>      'Service Comp',
                'alamat'                        =>      'Jln. Rakyat GG. Blok A No.4',
                'kota'                          =>      'Medan',
                'deskripsi'                     =>      'Cepat tanggap dalam menghandle troubleshooting hardware, software, dan Menguasai pemasangan hardware maupun software.',
                'pendidikan'                    =>      'SMK/Sederajat',
                'syarat'                        =>      'Disiplin, bisa bekerjasama dalam tim, Mau belajar dan bekerja keras, Memiliki keahlian dasar komputer pemasangan hardware maupun software.',
                'tipe_pekerjaan'                =>      'Magang',
                'tipe_posisi'                   =>      'Junior',
                'fasilitas'                     =>      'Sertifikat, Pengalaman Bekerja, Serta Uang Saku.',
                'created_at'                    =>      now(),
                'updated_at'                    =>      now(),
            ],
            [
                'id'                            =>      3,
                'posisi_pekerjaan'              =>      'Teknisi Printer',
                'nama_perusahaan'               =>      'Service Comp',
                'alamat'                        =>      'Jln. Rakyat GG. Blok A No.4',
                'kota'                          =>      'Medan',
                'deskripsi'                     =>      'Menindak lanjuti keluhan pelanggan, Melakukan analisa dari kerusakan mesin, dan Melakukan perbaikan mesin / software printer.',
                'pendidikan'                    =>      'SMK/Sederajat',
                'syarat'                        =>      'Disiplin, bisa bekerjasama dalam tim
                Mau belajar dan bekerja keras, Memiliki keahlian dasar pemasangan hardware maupun software yang ada pada printer',
                'tipe_pekerjaan'                =>      'Magang',
                'tipe_posisi'                   =>      'Junior',
                'fasilitas'                     =>      'Sertifikat, Pengalaman Bekerja, Serta Uang Saku.',
                'created_at'                    =>      now(),
                'updated_at'                    =>      now(),
            ],
            [
                'id'                            =>      4,
                'posisi_pekerjaan'              =>      'Teknisi CCTV',
                'nama_perusahaan'               =>      'Service Comp',
                'alamat'                        =>      'Jln. Rakyat GG. Blok A No.4',
                'kota'                          =>      'Medan',
                'deskripsi'                     =>      'melakukan pemasangan cctv, perawatan cctv pada tempat pelanggan serta memperbaiki  keluhan terkait cctv di lokasi pelanggan.',
                'pendidikan'                    =>      'SMK/Sederajat',
                'syarat'                        =>      'Disiplin, bisa bekerjasama dalam tim ,Mau belajar dan bekerja keras, Memiliki keahlian dasar pemasangan cctv, serta kelistrikan dan tidak takut ketinggian',
                'tipe_pekerjaan'                =>      'Magang',
                'tipe_posisi'                   =>      'Junior',
                'fasilitas'                     =>      'Sertifikat, Pengalaman Bekerja, Serta Uang Saku.',
                'created_at'                    =>      now(),
                'updated_at'                    =>      now(),
            ],
            [
                'id'                            =>      5,
                'posisi_pekerjaan'              =>      'Teknisi Elektro',
                'nama_perusahaan'               =>      'Service Comp',
                'alamat'                        =>      'Jln. Rakyat GG. Blok A No.4',
                'kota'                          =>      'Medan',
                'deskripsi'                     =>      'Melakukan pemasangan komponen pada pcb board, melakukan perbaikan terhadap komponen elektronika yang rusak',
                'pendidikan'                    =>      'SMK/Sederajat',
                'syarat'                        =>      'Memiliki kemampun minat belajar yang tinggi dan mau bekerja keras, serta memiliki pengetahuan dasar mengenai komponen elektonika',
                'tipe_pekerjaan'                =>      'Magang',
                'tipe_posisi'                   =>      'Junior',
                'fasilitas'                     =>      'Sertifikat, Pengalaman Bekerja, Serta Uang Saku.',
                'created_at'                    =>      now(),
                'updated_at'                    =>      now(),
            ],
            
    ];
    DB:: table('geral_lowongan_')->insert($defaultData);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('geral_lowongan_');
    }
}
