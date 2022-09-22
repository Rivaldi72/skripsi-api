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
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <div class="text-bold-600 font-medium-2 mb-1">
                                    NIS Siswa
                                </div>
                                <fieldset class="form-label-group">
                                    <input type="text" class="form-control form-control-lg" id="label-large"
                                        placeholder="Masukkan NIS Siswa">

                                </fieldset>
                            </div>
                            <div class="col-6">
                                <div class="text-bold-600 font-medium-2 mb-1">
                                    Nama Siswa
                                </div>
                                <fieldset class="form-label-group">
                                    <input type="text" class="form-control form-control-lg" id="label-large"
                                        placeholder="Masukkan Nama Siswa">

                                </fieldset>
                            </div>
                            <div class="col-6">
                                <div class="text-bold-600 font-medium-2 mb-1">
                                    Tempat Lahir
                                </div>
                                <fieldset class="form-label-group">
                                    <input type="text" class="form-control form-control-lg" id="label-large"
                                        placeholder="Masukkan Tempat Lahir">

                                </fieldset>
                            </div>
                            <div class="col-6">
                                <div class="text-bold-600 font-medium-2 mb-1">
                                    Tanggal Lahir
                                </div>
                                <fieldset class="form-label-group">
                                    <input type="text" class="form-control form-control-lg" id="label-large"
                                        placeholder="Masukkan Tanggal Lahir">
                                </fieldset>
                            </div>
                            <div class="col-6">
                                <div class="text-bold-600 font-medium-2 mb-1">
                                    Tahun Masuk
                                </div>
                                <fieldset class="form-label-group">
                                    <input type="text" class="form-control form-control-lg" id="label-large"
                                        placeholder="Masukkan Tahun Masuk">
                                </fieldset>
                            </div>
                            <div class="col-6">
                                <div class="text-bold-600 font-medium-2 mb-1">
                                    Jenis Kelamin
                                </div>
                                <fieldset class="form-label-group">
                                    <input type="text" class="form-control form-control-lg" id="label-large"
                                        placeholder="Masukkan Jenis Kelamin">
                                </fieldset>
                            </div>
                            <div class="col-6">
                                <div class="text-bold-600 font-medium-2 mb-1">
                                    Agama
                                </div>
                                <fieldset class="form-label-group">
                                    <input type="text" class="form-control form-control-lg" id="label-large"
                                        placeholder="Masukkan Agama">
                                </fieldset>
                            </div>
                            <div class="col-6">
                                <div class="text-bold-600 font-medium-2 mb-1">
                                    Alamat
                                </div>
                                <fieldset class="form-label-group">
                                    <input type="text" class="form-control form-control-lg" id="label-large"
                                        placeholder="Masukkan Alamat">
                                </fieldset>
                            </div>
                            </tbody>
                            </table>
                        </div>

                    </div>


                    <button type="button" class="btn btn-primary pull-right mb-1 mr-2 mt-2" data-toggle="modal"
                        data-target="#xSmall">
                        Tambahkan Data</button>
                    <!-- Modal -->
                    <div class="modal fade text-left" id="xSmall" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel20" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xs" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel20">Apakah Anda Yakin Untuk Menambahkan Soal
                                        Latihan ?</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    Anda Bisa Meriksa Kembali Data Yang Telah Anda Isi
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary"
                                        data-dismiss="modal">Benar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Bordered table end -->
@endsection
