@extends('layouts/dedi/contentLayoutMaster')

@section('title', 'TAMBAH SISWA ')

{{-- page main content --}}
@section('content')

    <!-- Bordered table start -->
    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="col-xl-12 col-md-12 col-12">
                            <div class="mb-1">
                                <div class="text-bold-600 font-medium-2 mb-1">
                                    Nama Lengkap
                                </div>
                                <input type="text" class="form-control form-control-lg" id="helpInputTop"
                                    placeholder="Masukkan Nama Lengkap" />
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12 col-12">
                            <div class="mb-1">
                                <div class="text-bold-600 font-medium-2 mb-1">
                                    Angkatan
                                </div>
                                <input type="text" class="form-control form-control-lg" id="helpInputTop"
                                    placeholder="Masukkan Angkatan" />
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12 col-12">
                            <div class="mb-1">
                                <div class="text-bold-600 font-medium-2 mb-1">
                                    Tempat Lahir
                                </div>
                                <input type="text" class="form-control form-control-lg" id="helpInputTop"
                                    placeholder="Masukkan Tempat Lahir" />
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12 col-12">
                            <div class="mb-1">
                                <div class="text-bold-600 font-medium-2 mb-1">
                                    Tanggal Lahir
                                </div>
                                <input type="text" class="form-control form-control-lg" id="helpInputTop"
                                    placeholder="Masukkan Tanggal Lahir" />
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12 col-12">
                            <div class="mb-1">
                                <div class="text-bold-600 font-medium-2 mb-1">
                                    Alamat
                                </div>
                                <input type="text" class="form-control form-control-lg" id="helpInputTop"
                                    placeholder="Masukkan Alamat" />
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12 col-12">
                            <div class="mb-1">
                                <div class="text-bold-600 font-medium-2 mb-1">
                                    Email
                                </div>
                                <input type="text" class="form-control form-control-lg" id="helpInputTop"
                                    placeholder="Masukkan Email" />
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12 col-12">
                            <div class="mb-1">
                                <div class="text-bold-600 font-medium-2 mb-1">
                                    Password
                                </div>
                                <input type="password" class="form-control form-control-lg" id="helpInputTop"
                                    placeholder="Masukkan Password" />
                            </div>
                        </div>
                        </tbody>
                        </table>
                        <button type="button" class="btn btn-success pull-right mb-2 mt-2 ml-5 font-weight-bold"
                            data-toggle="modal" data-target="#xSmall">
                            Simpan</button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade text-left" id="xSmall" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel20" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xs" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel20">Apakah Anda Yakin Untuk Melanjutkan Daftar ?
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    Anda Bisa Meriksa Kembali Data Yang Telah Anda Isi
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-success"
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
