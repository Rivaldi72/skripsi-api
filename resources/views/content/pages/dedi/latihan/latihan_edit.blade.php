@extends('layouts/dedi/contentLayoutMaster')

@section('title', 'EDIT SOAL LATIHAN ')

@section('vendor-style')
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/editors/quill/katex.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/editors/quill/monokai-sublime.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/editors/quill/quill.snow.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/editors/quill/quill.bubble.css')) }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Inconsolata&family=Roboto+Slab&family=Slabo+27px&family=Sofia&family=Ubuntu+Mono&display=swap"
        rel="stylesheet">
@endsection

@section('page-style')
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-quill-editor.css')) }}">
    <style>
        .ql-editor {
            min-height: 200px;
        }
    </style>
@endsection

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
                                    Masukkan Mata Pelajaran
                                </div>
                                <input type="text" class="form-control form-control-lg" id="helpInputTop"
                                    placeholder="Masukkan email" />
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12 col-12">
                            <div class="mb-1">
                                <div class="text-bold-600 font-medium-2 mb-1">
                                    Masukkan Soal Latihan
                                </div>
                                <input type="text" class="form-control form-control-lg" id="helpInputTop"
                                    placeholder="Masukkan Soal Latihan" />
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12 col-12">
                            <div class="mb-1">
                                <div class="text-bold-600 font-medium-2 mb-1">
                                    Pilihan Jawaban Benar
                                </div>
                                <input type="text" class="form-control form-control-lg" id="helpInputTop"
                                    placeholder="Pilihan Jawaban Benar" />
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12 col-12">
                            <div class="mb-1">
                                <div class="text-bold-600 font-medium-2 mb-1">
                                    Pilihan Jawaban 1
                                </div>
                                <input type="text" class="form-control form-control-lg" id="helpInputTop"
                                    placeholder="Pilihan Jawaban 1" />
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12 col-12">
                            <div class="mb-1">
                                <div class="text-bold-600 font-medium-2 mb-1">
                                    Pilihan Jawaban 2
                                </div>
                                <input type="text" class="form-control form-control-lg" id="helpInputTop"
                                    placeholder="Pilihan Jawaban 2" />
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12 col-12">
                            <div class="mb-1">
                                <div class="text-bold-600 font-medium-2 mb-1">
                                    Pilihan Jawaban 3
                                </div>
                                <input type="text" class="form-control form-control-lg" id="helpInputTop"
                                    placeholder="Pilihan Jawaban 3" />
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-success pull-right font-weight-bold" data-toggle="modal"
                        data-target="#xSmall">
                        Tambahkan Soal</button>
                    <!-- Modal -->
                    <div class="modal fade text-left" id="xSmall" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel20" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xs" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel20">Apakah Anda Yakin Untuk Menambahkan
                                        Materi ?</h4>
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
                </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Bordered table end -->
@endsection

@section('vendor-script')
    <!-- vendor files -->
    <script src="{{ asset(mix('vendors/js/editors/quill/katex.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/editors/quill/highlight.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/editors/quill/quill.min.js')) }}"></script>
@endsection
@section('page-script')
    <!-- Page js files -->
    <script src="{{ asset(mix('js/scripts/forms/form-quill-editor.js')) }}"></script>
@endsection
