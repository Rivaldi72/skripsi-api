@extends('layouts/dedi/contentLayoutMaster')

@section('title', 'TAMBAH SOAL LATIHAN ')

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
                        <form action="{{ route('dedi.latihan.tambah.post') }}" method="POST" id="tambahlatihan"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="col-xl-12 col-md-12 col-12">
                                <div class="mb-1">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Masukkan Mata Pelajaran
                                    </div>
                                    <div class="mb-1">
                                        <select class="form-select form-select-lg" name="id_mapel" id="id_mapel">
                                            <option selected>Pilih Mata Pelajaran</option>
                                            <option value="1">Bakteriologi</option>
                                            <option value="2">Hematologi</option>
                                            <option value="3">Patologi Klinik</option>
                                            <option value="4">Parasitologi</option>
                                            <option value="5">Imunologi</option>
                                            <option value="6">Serologi</option>
                                            <option value="7">Kimia Makanan</option>
                                            <option value="8">Kimia Minuman</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12 col-12">
                                <div class="mb-1">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Masukkan Soal Latihan
                                    </div>
                                    <input type="text" class="form-control form-control-lg" name="soal" id="soal"
                                        placeholder="Masukkan Soal Latihan" />
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12 col-12">
                                <div class="mb-1">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Pilihan Jawaban Benar
                                    </div>
                                    <input type="text" class="form-control form-control-lg" name="jawaban_beneran"
                                        id="jawaban_benar" placeholder="Pilihan Jawaban Benar" />
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12 col-12">
                                <div class="mb-1">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Pilihan Jawaban 1
                                    </div>
                                    <input type="text" class="form-control form-control-lg" name="pilihan_jawaban1"
                                        id="pilihan_jawaban1" placeholder="Pilihan Jawaban 1" />
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12 col-12">
                                <div class="mb-1">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Pilihan Jawaban 2
                                    </div>
                                    <input type="text" class="form-control form-control-lg" name="pilihan_jawaban2"
                                        id="pilihan_jawaban2" placeholder="Pilihan Jawaban 2" />
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12 col-12">
                                <div class="mb-1">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Pilihan Jawaban 3
                                    </div>
                                    <input type="text" class="form-control form-control-lg" name="pilihan_jawaban3"
                                        id="pilihan_jawaban3" placeholder="Pilihan Jawaban 3" />
                                </div>
                            </div>
                            <button type="button" class="btn btn-success pull-right mb-2 mt-2 ml-5 font-weight-bold"
                                data-bs-toggle="modal" data-bs-target="#small">
                                Simpan</button>
                            <!-- Modal -->
                            <div class="modal fade text-start" id="small" tabindex="-1"
                                aria-labelledby="myModalLabel19" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel19">Simpan Perubahan ?</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Periksa Kembali Apakah Data Yang Anda Periksa Sudah Benar.
                                            Anda Bisa Pilih Tanda X Untuk Mengisi Data Kembali atau
                                            Pilih Simpan Bila Data Sudah Benar.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success"
                                                data-bs-dismiss="modal">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
