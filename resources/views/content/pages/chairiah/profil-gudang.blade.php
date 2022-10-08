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
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#previewGudangImage')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
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
                                <form action="{{ route('chairiah.profil.gudang.post') }}" method="POST" id="dataForm"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="row justify-content-between">
                                        <div class="col-12 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Nama Gudang Kopi</label>
                                                <input type="text" name="nama" class="form-control" id="nama"
                                                    placeholder="Nama Gudang Kopi" value="{{ $data->nama ?? '' }}">
                                            </fieldset>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Alamat Gudang Kopi</label>
                                                <input type="text" name="alamat" class="form-control" id="alamat"
                                                    placeholder="Alamat Gudang Kopi" value="{{ $data->alamat ?? '' }}">
                                            </fieldset>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Url Alamat Gudang Kopi</label>
                                                <input type="text" name="url_alamat" class="form-control" id="url_alamat"
                                                    placeholder="Url Alamat Gudang Kopi"
                                                    value="{{ $data->url_alamat ?? '' }}">
                                            </fieldset>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">No.Handphone Gudang</label>
                                                <input type="text" name="no_hp" class="form-control" id="noHP"
                                                    placeholder="No.Handphone Gudang" value="{{ $data->no_hp ?? '' }}">
                                            </fieldset>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-12 border-right">
                                                    <div class="row">
                                                        <div class="col-3 mt-2">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-company">Foto Gudang Kopi</label>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <img id="previewGudangImage"
                                                                                class="img-fluid bg-cover rounded-lg mb-1 mt-1"
                                                                                style="width: 225px; height: 225px; object-fit: contain"
                                                                                src="{{ $data->gambar ?? '' != '' ? asset('storage/chairiah/gudang-image/' . $data->gambar) : asset('images/no-image.png') }}"
                                                                                alt="User Profile Image">
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <input class="form-control" type="file"
                                                                                id="gudangImage" name="gudangImage"
                                                                                onchange="readURL(this);" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="row align-items-center">
                                                                <div class="col-12 mt-2">
                                                                    <fieldset class="form-group">
                                                                        <label for="basicInput">Kopi Gelondong</label>
                                                                        <input type="number" class="form-control"
                                                                            id="hargaKopiGelondong"
                                                                            name="harga_kopi_gelondong"
                                                                            placeholder="Harga Kopi / Kg"
                                                                            value="{{ $data->harga_kopi_gelondong ?? '' }}">
                                                                    </fieldset>
                                                                </div>
                                                                <div class="col-12 mt-2">
                                                                    <fieldset class="form-group">
                                                                        <label for="basicInput">Kopi Gabah</label>
                                                                        <input type="number" class="form-control"
                                                                            id="hargaKopiGabah" name="harga_kopi_gabah"
                                                                            placeholder="Harga Kopi / Kg"
                                                                            value="{{ $data->harga_kopi_gabah ?? '' }}">
                                                                    </fieldset>
                                                                </div>
                                                                <div class="col-12 mt-2">
                                                                    <fieldset class="form-group">
                                                                        <label for="basicInput">Kopi Biji Hijau</label>
                                                                        <input type="number" class="form-control"
                                                                            id="hargaKopiBijiHijau"
                                                                            name="harga_kopi_biji_hijau"
                                                                            placeholder="Harga Kopi / Kg"
                                                                            value="{{ $data->harga_kopi_biji_hijau ?? '' }}">
                                                                    </fieldset>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-grid col-lg-12 col-md-12 mb-1 mb-lg-0 mt-2">
                                                        <button type="submit" class="btn btn-relief-success btn-primary">
                                                            Simpan
                                                        </button>
                                                    </div>
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
        </section>

        <!--/ Zero configuration table -->
    </div>
@endsection
