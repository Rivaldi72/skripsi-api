@extends('layouts/dedi/contentLayoutMaster')

@section('title', 'TAMBAH SOAL ')

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
                        <div class="col-12">
                            <div class="text-bold-600 font-medium-2 mb-1">
                                Mata Pelajaran
                            </div>
                            <fieldset class="form-label-group">
                                <input type="text" class="form-control form-control-lg" id="label-large"
                                    placeholder="Masukkan Mata Pelajaran">
                                <label for="label-large">Masukkan Mata Pelajaran</label>
                            </fieldset>
                        </div>
                        <div class="text-bold-600 font-medium-2 ml-2 mb-1">
                            Masukkan Soal Latihan
                        </div>
                        <fieldset class="form-label-group">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <fieldset class="form-label-group">
                                                <textarea class="form-control" id="label-textarea" rows="3" placeholder="Masukkan Pertanyaan"></textarea>
                                                <label for="label-textarea">Masukkan Pertanyaan</label>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Jawaban Benar
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" class="form-control form-control-lg" id="label-large"
                                            placeholder="Jawaban Benar">
                                        <label for="label-large">Jawaban Benar</label>
                                    </fieldset>
                                </div>
                                <div class="col-12">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Pilihan Jawaban 1
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" class="form-control form-control-lg" id="label-large"
                                            placeholder="Pilihan Jawaban 1">
                                        <label for="label-large">Pilihan Jawaban 1</label>
                                    </fieldset>
                                </div>
                                <div class="col-12">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Pilihan Jawaban 2
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" class="form-control form-control-lg" id="label-large"
                                            placeholder="Pilihan Jawaban 2">
                                        <label for="label-large">Pilihan Jawaban 2</label>
                                    </fieldset>
                                </div>
                                <div class="col-12">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Pilihan Jawaban 3
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" class="form-control form-control-lg" id="label-large"
                                            placeholder="Pilihan Jawaban 3">
                                        <label for="label-large">Pilihan Jawaban 3</label>
                                    </fieldset>
                                </div>
                                </tbody>
                                </table>
                            </div>
                            <button type="button" class="btn btn-success font-weight-bold pull-right mb-1 mr-2 mt-2"
                                data-toggle="modal" data-target="#xSmall">
                                Tambahkan Soal</button>
                            <!-- Modal -->
                            <div class="modal fade text-left" id="xSmall" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel20" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xs"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel20">Apakah Anda Yakin Untuk Menambahkan
                                                Soal Latihan ?</h4>
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
