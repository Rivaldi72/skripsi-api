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
                        <form class="needs-validation" novalidate>
                            <div class="mb-1">
                                <label class="form-label" for="basic-addon-name">Posisi</label>

                                <input type="text" id="basic-addon-Posisi" class="form-control"
                                    placeholder="Masukkan Posisi" aria-label="Posisi" aria-describedby="basic-addon-posisi"
                                    required />
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Silahkan Masukkan Posisi</div>
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="basic-default-perusahaan">Nama Perusahaan</label>
                                <input type="text" id="basic-default-perusahaan" class="form-control"
                                    placeholder="Masukkan Nama Prusahaan" aria-label="Perusahaan" required />
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Silahkan Masukkan Nama Perusahaaan</div>
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="basic-default-alamat">Kota/Alamat</label>
                                <input type="text" id="basic-default-alamat" class="form-control"
                                    placeholder="Masukkan Alamat/Kota" aria-label="alamat/kota" required />
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Silahkan Masukkan Kota/Alamat</div>
                            </div>
                            <div class="mb-1">
                                <label class="d-block form-label" for="validationDeskripsiBootstrap">Deskripsi</label>
                                <textarea class="form-control" id="validationDeskripsiBootstrap" name="validationDeskripsiBootstrap" rows="3"
                                    required></textarea>
                            </div>
                            <div class="mb-1">
                                <label class="d-block form-label" for="validationKewajibanBootstrap">Kewajiban</label>
                                <textarea class="form-control" id="validationKewajibanBootstrap" name="validationKewajibanBootstrap" rows="3"
                                    required></textarea>
                            </div>
                            <div class="mb-1">
                                <label class="d-block form-label" for="validationSyaratBootstrap">Syarat</label>
                                <textarea class="form-control" id="validationSyaratBootstrap" name="validationSyaratBootstrap" rows="3" required></textarea>
                            </div>
                            <div class="mb-1">
                                <label class="d-block form-label" for="validationKewajibanBootstrap">Fasilitas</label>
                                <textarea class="form-control" id="validationFasilitasBootstrap" name="validationFasilitasBootstrap" rows="3"
                                    required></textarea>
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="select-tipe-pekerjaan">Tipe Pekerjaan</label>
                                <select class="form-select" id="select-tipe-pekerjaan" required>
                                    <option value="">Pilih</option>
                                    <option value="magang">Magang</option>
                                    <option value="fulltime">Fulltime</option>
                                </select>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please select your country</div>
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="select-tipe-posisi">Tipe Posisi</label>
                                <select class="form-select" id="select-tipe-posisi" required>
                                    <option value="">Pilih</option>
                                    <option value="junior">Junior</option>
                                    <option value="senior">Senior</option>
                                </select>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please select your country</div>
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
