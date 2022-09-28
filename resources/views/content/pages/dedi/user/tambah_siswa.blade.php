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
                        <form action="{{ route('dedi.siswa.tambah.post') }}" method="POST" id="tambahsiswa"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="col-xl-12 col-md-12 col-12">
                                <div class="mb-1">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Nama Lengkap
                                    </div>
                                    <input type="text" name="name"class="form-control form-control-lg" id="name"
                                        placeholder="Masukkan Nama Lengkap" />
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12 col-12">
                                <div class="mb-1">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Angkatan
                                    </div>
                                    <input type="text" name="angkatan" class="form-control form-control-lg"
                                        id="angkatan" placeholder="Masukkan Angkatan" />
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12 col-12">
                                <div class="mb-1">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Tempat Lahir
                                    </div>
                                    <input type="text" name="tempat" class="form-control form-control-lg" id="tempat"
                                        placeholder="Masukkan Tempat Lahir" />
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12 col-12">
                                <div class="mb-1">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Tanggal Lahir
                                    </div>
                                    <input type="text" name="tanggal_lahir" class="form-control form-control-lg"
                                        id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" />
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12 col-12">
                                <div class="mb-1">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Alamat
                                    </div>
                                    <input type="text" name="alamat" class="form-control form-control-lg" id="alamat"
                                        placeholder="Masukkan Alamat" />
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12 col-12">
                                <div class="mb-1">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Email
                                    </div>
                                    <input type="text" name="email" class="form-control form-control-lg" id="email"
                                        placeholder="Masukkan Email" />
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12 col-12">
                                <div class="mb-1">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Password
                                    </div>
                                    <input type="password" name="password" class="form-control form-control-lg"
                                        id="password" placeholder="Masukkan Password" />
                                </div>
                            </div>
                            </tbody>
                            </table>
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
        </div>
    </div>
    </div>
    <!-- Bordered table end -->
@endsection
