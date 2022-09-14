@extends('layouts/chairiah/contentLayoutMaster')

@section('title', 'Profil Gudang Kopi')

@section('vendor-style')
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection
@section('page-style')
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-pickadate.css')) }}">
@endsection

@section('vendor-script')
    <!-- vendor files -->
    <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.date.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.time.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/pickers/pickadate/legacy.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection
@section('page-script')
    <!-- Page js files -->
    <script src="{{ asset(mix('js/scripts/forms/pickers/form-pickers.js')) }}"></script>
    <script>
        var gudangImage = $("#gudangImage");
        var previewGudangImage = $("#previewGudangImage");
        gudangImage.change(function(e) {
            const [file] = gudangImage.files
            if (file) {
                previewGudangImage.src = URL.createObjectURL(file)
            }
        });
    </script>


@endsection

@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrum-right">

            </div>
        </div>
    </div>

    <div class="content-body">
        <!-- Zero configuration table -->
        <section id="basic-datatable">
            <div class="row">
                <div class="col-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                {{-- @foreach ($errors->all() as $error) --}}
                                <li>Data belum lengkap, Pastikan Semua Data Terisi</li>
                                {{-- @endforeach --}}
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="col-12">
                    <div class="card">

                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <form action="" method="POST" id="dataForm" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="nilai_data" id="nilaiData">
                                    <div class="row justify-content-between">
                                        <div class="col-12 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Nama Gudang Kopi</label>
                                                <input type="text" name="nama" class="form-control" id=""
                                                    placeholder="Nama Gudang Kopi" value="">
                                            </fieldset>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Alamat Gudang Kopi</label>
                                                <input type="text" name="alamat" class="form-control" id=""
                                                    placeholder="Alamat Gudang Kopi" value="">
                                            </fieldset>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">No.Handphone Gudang</label>
                                                <input type="text" name="No.Hp" class="form-control" id=""
                                                    placeholder="No.Handphone Gudang" value="">
                                            </fieldset>
                                        </div>

                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-12 border-right">
                                                    <div class="row align-items-center">
                                                        <div class="col-4">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Kopi Basah</label>
                                                                <input type="number" class="form-control" id="nilai"
                                                                    placeholder="Harga Kopi / Kg">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-4">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Kopi Gelondong</label>
                                                                <input type="number" class="form-control" id="nilai"
                                                                    placeholder="Harga Kopi / Kg">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-4">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Kopi Biji Hijau</label>
                                                                <input type="number" class="form-control" id="nilai"
                                                                    placeholder="Harga Kopi / Kg">
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-company">Foto Gudang Kopi</label>
                                                                <div class="row">
                                                                    <div class="col-3"><img id="previewGudangImage"
                                                                            class="img-fluid bg-cover rounded-lg mb-1 "
                                                                            style="width: 225px; height: 225px "
                                                                            src="{{ asset('images/chairiah/gudang.jpg') }}"
                                                                            alt="User Profile Image">
                                                                    </div>
                                                                </div>
                                                                <div class="custom-file">
                                                                    <input type="file" class name="file[gambar]"
                                                                        id="gudangImage" placeholder="Pilih Foto">

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>




                                                    <div class="d-grid col-lg-12 col-md-12 mb-1 mb-lg-0 mt-2">
                                                        <button type="button"
                                                            class="btn btn-relief-success btn-primary">Simpan</button>
                                                    </div>
                                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--/ Zero configuration table -->
    </div>
@endsection
