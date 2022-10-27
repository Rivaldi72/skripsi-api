@extends('layouts/gedmi/contentLayoutMaster')

@section('title', 'Detail Data Guru ')

{{-- page main content --}}
@section('content')
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
    {{-- <script>
        var picker = $('.tanggal_lahir').pickadate({
            onStart: function() {
                var date = new Date('{{ $biodata->tanggal_lahir ?? \Carbon\Carbon::now() }}');
                console.log(this)
                this.set('select', date);
            },
            selectYears: 100,
            selectMonths: true
        });
    </script> --}}



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
                                <form action="{{ route('gedmi.detail.guru', ['id' => $dataGuru->id]) }}" method="GET"
                                    id="detailGuru" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="nilai_data" id="nilaiData">
                                    <div class="row justify-content-between">
                                        <div class="col-12 mt-2">
                                            <div class="col-12 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Nama</label>
                                                    <input type="text" name="nama" class="form-control" disabled
                                                        id="nama" placeholder="Nama"
                                                        value="{{ $dataGuru->nama ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Tempat Lahir</label>
                                                    <input type="text" name="tempat_lahir" class="form-control" disabled
                                                        id="tempat_lahir" placeholder="Place Of Birth"
                                                        value="{{ $dataGuru->tempat_lahir ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Tanggal Lahir</label>
                                                    <form action="">
                                                        <input type='text' name="tanggal_lahir"
                                                            class="form-control tanggal_lahir" disabled id="tanggal_lahir"
                                                            placeholder="Data Of Birth"
                                                            value="{{ $dataGuru->tanggal_lahir ?? '' }}">
                                                    </form>
                                                </fieldset>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Jabatan</label>
                                                    <input type="text" name="jabatan" class="form-control" disabled
                                                        id="jabatan" placeholder="Masukkan Jabatan"
                                                        value="{{ $dataGuru->jabatan ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Tamatan</label>
                                                    <input type="text" name="tamatan" class="form-control" disabled
                                                        id="tamatan" placeholder="Masukkan Tamatan"
                                                        value="{{ $dataGuru->tamatan ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Gelar</label>
                                                    <input type="text" name="gelar" class="form-control" disabled
                                                        id="gelar" placeholder="Masukkan Gelar"
                                                        value="{{ $dataGuru->gelar ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Bidang Study</label>
                                                    <input type="text" name="bidang_studi" class="form-control" disabled
                                                        id="bidang_studi" placeholder="Masukkan Bidang Study"
                                                        value="{{ $dataGuru->bidang_studi ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Agama</label>
                                                    <input type="text" name="agama" class="form-control" disabled
                                                        id="agama" placeholder="Masukkan Agama"
                                                        value="{{ $dataGuru->agama ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Alamat</label>
                                                    <input type="text" name="alamat" class="form-control" disabled
                                                        id="alamat" placeholder="Masukkan Alamat"
                                                        value="{{ $dataGuru->alamat ?? '' }}">
                                                </fieldset>
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
    <a href="{{ route('gedmi.guru.index') }}"><button type="button"
            class="btn btn-relief-primary mr-1 mb-1 float-right">Simpan

        </button>
    @endsection
