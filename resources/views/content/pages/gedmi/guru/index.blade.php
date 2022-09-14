@extends('layouts/gedmi/contentLayoutMaster')

@section('title', 'DATA GURU ')


{{-- page main content --}}
@section('content')




    <!-- Bordered table start -->


    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">

                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Guru</th>
                                <th>Tempat, Tanggal Lahir</th>
                                <th>Jabatan</th>
                                <th>Pendidikan Tahun</th>
                                <th>Bidang Study</th>
                                <th>Agama</th>
                                <th>Alamat</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Dr. Mesran, M.Pd.I</td>
                                <td>P.Siantar, 05 Juni 1973</td>
                                <td>Kepala Sekolah</td>
                                <td>S3-2019</td>
                                <td>-</td>
                                <td>Islam</td>
                                <td>JL. TS 01 Blok 6. Martubung</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0"
                                            data-bs-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{ route('gedmi.edit.guru') }}">
                                                <i data-feather="edit-2" class="me-50"></i>
                                                <span>Edit</span>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i data-feather="trash" class="me-50"></i>
                                                <span>Delete</span>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i data-feather="info" class="me-50"></i>
                                                <span>Detail</span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Mhd. Sabdana, S.Pd</td>
                                <td>Medan, 01 September 1994</td>
                                <td>Guru</td>
                                <td>S1-2016</td>
                                <td>IPA</td>
                                <td>Islam</td>
                                <td>JL. Rawe IX Lingk. II Pasar 8</td>
                                <td class="product-action">
                                    <span class="action-create"><i class="feather icon-plus-square"></i></span>
                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                    <span class="action-delete"><i class="feather icon-trash"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Almas Adlina, S.Pd</td>
                                <td>Medan, 07 Februari 1998</td>
                                <td>Guru</td>
                                <td>S1-2019</td>
                                <td>Matematika</td>
                                <td>Islam</td>
                                <td>JL. Marelan V Pasar II Barat</td>
                                <td class="product-action">
                                    <span class="action-create"><i class="feather icon-plus-square"></i></span>
                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                    <span class="action-delete"><i class="feather icon-trash"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Keti Suyati</td>
                                <td>Medan, 01 Juli 1987</td>
                                <td>Wali Kelas</td>
                                <td>S1-2011</td>
                                <td>B.Inggris</td>
                                <td>Islam</td>
                                <td>JL. Putri Hijau Aspol</td>
                                <td class="product-action">
                                    <span class="action-create"><i class="feather icon-plus-square"></i></span>
                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                    <span class="action-delete"><i class="feather icon-trash"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Venny C. Tanjung, S.Pd</td>
                                <td>Medan, 03 April 1980</td>
                                <td>PKS II</td>
                                <td>S1-2003</td>
                                <td>Prakarya</td>
                                <td>Islam</td>
                                <td>JL. Marelan IV Pasar 3 No.2 Rengas Pulau</td>
                                <td class="product-action">
                                    <span class="action-create"><i class="feather icon-plus-square"></i></span>
                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                    <span class="action-delete"><i class="feather icon-trash"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Diana Susanti, S.S.Pd</td>
                                <td>Pangurabaan, 13 Desember 1981</td>
                                <td>Wali Kelas</td>
                                <td>S1-2004</td>
                                <td>B.Indonesia</td>
                                <td>Islam</td>
                                <td>JL. Terusan 2 Gg. Lestari</td>
                                <td class="product-action">
                                    <span class="action-create"><i class="feather icon-plus-square"></i></span>
                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                    <span class="action-delete"><i class="feather icon-trash"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Gaya Bayduri, S.PdI</td>
                                <td>Medan 11 Maret 1980</td>
                                <td>Wali Kelas</td>
                                <td>S1-2004</td>
                                <td>Agama Islam</td>
                                <td>Islam</td>
                                <td>JL. Veteran Pasar X Helvetia Gg. Budi</td>
                                <td class="product-action">
                                    <span class="action-create"><i class="feather icon-plus-square"></i></span>
                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                    <span class="action-delete"><i class="feather icon-trash"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Siti Agustina Julita, S.Pd</td>
                                <td>Medan, 09 Agustus 1993</td>
                                <td>Guru</td>
                                <td>S1-2016</td>
                                <td>Matematika</td>
                                <td>Islam</td>
                                <td>JL. Titi Pahlawan Simpang Kantor</td>
                                <td class="product-action">
                                    <span class="action-create"><i class="feather icon-plus-square"></i></span>
                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                    <span class="action-delete"><i class="feather icon-trash"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Hengki Sianturi, S.Pd</td>
                                <td>Balige, 19 Agustus 1982</td>
                                <td>Guru</td>
                                <td>S1-2007</td>
                                <td>Penjas</td>
                                <td>Kristen</td>
                                <td>JL. Manggaan VII Lingk. XVI Mabar</td>
                                <td class="product-action">
                                    <span class="action-create"><i class="feather icon-plus-square"></i></span>
                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                    <span class="action-delete"><i class="feather icon-trash"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Salamuddin</td>
                                <td>Medan, 14 Agustus 1985</td>
                                <td>Guru</td>
                                <td>STM-2002</td>
                                <td>Pramuka</td>
                                <td>Islam</td>
                                <td>JL. Pasar 5 Marelan Paya Pasir</td>
                                <td class="product-action">
                                    <span class="action-create"><i class="feather icon-plus-square"></i></span>
                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                    <span class="action-delete"><i class="feather icon-trash"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td>Agung Sihotang, S.Pd</td>
                                <td>Huta Raja, 19 Maret 1978</td>
                                <td>Guru</td>
                                <td>S1-2001</td>
                                <td>IPA</td>
                                <td>Islam</td>
                                <td>JL. Mapilindo No. 125 Medan </td>
                                <td class="product-action">
                                    <span class="action-create"><i class="feather icon-plus-square"></i></span>
                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                    <span class="action-delete"><i class="feather icon-trash"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">12</th>
                                <td>Jessica Yolanda, S.Pd</td>
                                <td>Bogor, 21 April 1998</td>
                                <td>Guru</td>
                                <td>S1-2020</td>
                                <td>Seni Budaya</td>
                                <td>Kristen</td>
                                <td>JL. Tempirai lestari X Blok V</td>
                                <td class="product-action">
                                    <span class="action-create"><i class="feather icon-plus-square"></i></span>
                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                    <span class="action-delete"><i class="feather icon-trash"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">13</th>
                                <td>Tatang Angkasa Tarigan, S.Psi</td>
                                <td>Medan, 28 Juni 1984</td>
                                <td>Guru</td>
                                <td>S1-2001</td>
                                <td>Bimbingan Konseling</td>
                                <td>Islam</td>
                                <td>JL. Pasar III Marelan</td>
                                <td class="product-action">
                                    <span class="action-create"><i class="feather icon-plus-square"></i></span>
                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                    <span class="action-delete"><i class="feather icon-trash"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">14</th>
                                <td>Novena Nurmala Sari, S.Kom</td>
                                <td>Medan, 28 Oktober 1982</td>
                                <td>Tata Usaha</td>
                                <td>S1-2012</td>
                                <td>TIK</td>
                                <td>Islam</td>
                                <td>JL. Banten Baru No. 47 Tanjung Gusta</td>
                                <td class="product-action">
                                    <span class="action-create"><i class="feather icon-plus-square"></i></span>
                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                    <span class="action-delete"><i class="feather icon-trash"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">15</th>
                                <td>Erlina Simanjuntak, S.T</td>
                                <td>P. Siantar, 13 Desember 1968</td>
                                <td>Guru</td>
                                <td>S1</td>
                                <td>Agama Kristen</td>
                                <td>Kristen</td>
                                <td>-</td>
                                <td class="product-action">
                                    <span class="action-create"><i class="feather icon-plus-square"></i></span>
                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                    <span class="action-delete"><i class="feather icon-trash"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">16</th>
                                <td>Intan Sari, S.Pd</td>
                                <td>Medan, 04 April 1995</td>
                                <td>Wali Kelas</td>
                                <td>S1-2017</td>
                                <td>IPA</td>
                                <td>Islam</td>
                                <td>JL. Rawe 3 Pasar 5 Martubung</td>
                                <td class="product-action">
                                    <span class="action-create"><i class="feather icon-plus-square"></i></span>
                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                    <span class="action-delete"><i class="feather icon-trash"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">17</th>
                                <td>ZL. Purba, Amd</td>
                                <td>Percut, 31 Desember 1964</td>
                                <td>Guru</td>
                                <td>D3-1989</td>
                                <td>-</td>
                                <td>Kristen</td>
                                <td>Dusun 1 Desa Cinta Damai Percut</td>
                                <td class="product-action">
                                    <span class="action-create"><i class="feather icon-plus-square"></i></span>
                                    <span class="action-edit"><i class="feather icon-edit"></i></span>
                                    <span class="action-delete"><i class="feather icon-trash"></i></span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <a href="{{ route('gedmi.index.test') }}"><button type="button"
            class="btn btn-relief-primary mr-1 mb-1 float-right">Tambah

        </button>


        <!-- Bordered table end -->
    @endsection
