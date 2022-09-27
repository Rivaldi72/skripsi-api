@extends('layouts/gedmi/contentLayoutMaster')

@section('title', 'Tambah Data Siswa ')

{{-- page main content --}}
@section('content')



    <div class="row" id="table-bordered">
        <div class="col-3">
            <div class="form-group">

            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form action="{{ route('gedmi.tambah.siswa.post') }}" method="POST" id="tambahSiswa">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        NIS Siswa
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="nis" class="form-control form-control-lg"
                                            id="nis" placeholder="Masukkan NIS Siswa">

                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Nama Siswa
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="nama" class="form-control form-control-lg"
                                            id="nama" placeholder="Masukkan Nama Siswa">

                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Tempat Lahir
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="tempat_lahir" class="form-control form-control-lg"
                                            id="tempat_lahir" placeholder="Masukkan Tempat Lahir">

                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Tanggal Lahir
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="tanggal_lahir" class="form-control form-control-lg"
                                            id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir">
                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Tahun Masuk
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="tahun_masuk" class="form-control form-control-lg"
                                            id="tahun_masuk" placeholder="Masukkan Tahun Masuk">
                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Jenis Kelamin
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="jenis_kelamin" class="form-control form-control-lg"
                                            id="jenis_kelamin" placeholder="Masukkan Jenis Kelamin">
                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Agama
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="agama" class="form-control form-control-lg"
                                            id="agama" placeholder="Masukkan Agama">
                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Alamat
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="alamat" class="form-control form-control-lg"
                                            id="alamat" placeholder="Masukkan Alamat">
                                    </fieldset>
                                </div>
                                </tbody>
                                </table>
                            </div>

                        </div>


                        <button type="submit" class="btn btn-primary pull-right mb-1 mr-2 mt-2">
                            Tambahkan Data</button>
                        <!-- Modal -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Bordered table end -->
@endsection
