@extends('layouts/geral/contentLayoutMaster')

@section('Title', 'Login page')

@section('page-style')

@endsection

@section('content')
    <section class="bs-validation">
        <div class="row">
            <!-- Bootstrap Validation -->
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Data Lowongan</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('geral.edit.lowongan.update', ['id' => $dataLowongan->id]) }}" method="PUT"
                            id="edit_lowongan" class="needs-validation" novalidate>
                            {{ csrf_field() }}
                            <div class="mb-1">
                                <label class="form-label" for="basic-addon-name">Posisi</label>

                                <input type="text" id="posisi_pekerjaan" name="posisi_pekerjaan" class="form-control"
                                    placeholder="Masukkan Posisi" aria-label="Posisi"
                                    aria-describedby="basic-addon-posisi alu" value="{{ $dataLowongan->posisi_pekerjaan }}"
                                    required />
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Silahkan Masukkan Posisi</div>
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="basic-default-perusahaan">Nama Perusahaan</label>
                                <input type="text" id="nama_perusahaan" name="nama_perusahaan" class="form-control"
                                    placeholder="Masukkan Nama Prusahaan" aria-label="Perusahaan"
                                    value="{{ $dataLowongan->nama_perusahaan }}" required />
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Silahkan Masukkan Nama Perusahaaan</div>
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="basic-default-alamat">Alamat</label>
                                <input type="text" id="alamat" name="alamat" class="form-control"
                                    placeholder="Masukkan Alamat" aria-label="alamat" value="{{ $dataLowongan->alamat }}"
                                    required />
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Silahkan Masukkan Alamat</div>
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="basic-default-alamat">Kota</label>
                                <input type="text" id="kota" name="kota" class="form-control"
                                    placeholder="Masukkan Kota" aria-label="kota"value="{{ $dataLowongan->kota }}"
                                    required />
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Silahkan Masukkan Kota</div>
                            </div>

                            <div class="mb-1">
                                <label class="d-block form-label" for="validationDeskripsiBootstrap">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ $dataLowongan->deskripsi }}</textarea>
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="basic-default-pendidikan">Pendidikan</label>
                                <input type="text" id="pendidikan" name="pendidikan" class="form-control"
                                    placeholder="Masukkan Pendidikan" aria-label="Pendidikan"
                                    value="{{ $dataLowongan->pendidikan }}" required />
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Silahkan Masukkan Pendidikan</div>
                            </div>
                            <div class="mb-1">
                                <label class="d-block form-label" for="validationSyaratBootstrap">Syarat</label>
                                <textarea class="form-control" id="syarat" name="syarat" rows="3" required>{{ $dataLowongan->syarat }}</textarea>
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="select-tipe-pekerjaan">Tipe Pekerjaan</label>
                                <select class="form-select" id="tipe_pekerjaan" name="tipe_pekerjaan" required>
                                    <option value=""{{ $dataLowongan->tipe_pekerjaan == '' ? 'selected' : '' }}>Pilih
                                    </option>
                                    <option
                                        value="magang"{{ $dataLowongan->tipe_pekerjaan == 'magang' ? 'selected' : '' }}>
                                        Magang</option>
                                    <option
                                        value="fulltime"{{ $dataLowongan->tipe_pekerjaan == 'fulltime' ? 'selected' : '' }}>
                                        Fulltime</option>
                                </select>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please select your country</div>
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="select-tipe-posisi">Tipe Posisi</label>
                                <select class="form-select" id="tipe_posisi" name="tipe_posisi" required>
                                    <option value="" {{ $dataLowongan->tipe_posisi == '' ? 'selected' : '' }}>Pilih
                                    </option>
                                    <option value="junior" {{ $dataLowongan->tipe_posisi == 'junior' ? 'selected' : '' }}>
                                        Junior
                                    </option>
                                    <option value="senior" {{ $dataLowongan->tipe_posisi == 'senior' ? 'selected' : '' }}>
                                        Senior
                                    </option>
                                </select>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please select your country</div>
                            </div>
                            <div class="mb-1">
                                <label class="d-block form-label" for="validationSyaratBootstrap">Fasilitas</label>
                                <textarea class="form-control" id="fasilitas" name="fasilitas" rows="3" required>{{ $dataLowongan->fasilitas }}</textarea>
                            </div>
                            <button type="submit" class="btn bg-gradient-info">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Bootstrap Validation -->
        </div>
    </section>
@endsection

@section('page-script')

@endsection
