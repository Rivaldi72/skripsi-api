@extends('layouts/gedmi/contentLayoutMaster')

@section('title', 'Edit Mata Pelajaran ')

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
                                <form action="{{ route('gedmi.edit.mapel.update', ['id' => $mapel->id]) }}" method="POST"
                                    id="editSiswa" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="nilai_data" id="nilaiData">
                                    <div class="row justify-content-between">
                                        <div class="col-12 mt-2">
                                            <div class="col-12 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Hari</label>
                                                    <input type="text" name="hari" class="form-control" id="hari"
                                                        placeholder="Hari" value="{{ $mapel->hari ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Jam</label>
                                                    <input type="text" name="jam" class="form-control" id="jam"
                                                        placeholder="Jam" value="{{ $mapel->jam ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Nama Guru</label>
                                                    <form action="">
                                                        <input type='text' name="nama_guru"
                                                            class="form-control tanggal_lahir" id="nama_guru"
                                                            placeholder="Nama Guru" value="{{ $mapel->nama_guru ?? '' }}">
                                                    </form>
                                                </fieldset>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Bidang Studi</label>
                                                    <input type="text" name="bidang_studi" class="form-control"
                                                        id="bidang_studi" placeholder="Bidang Studi"
                                                        value="{{ $mapel->bidang_studi ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Kelas</label>
                                                    <input type="text" name="kelas" class="form-control" id="kelas"
                                                        placeholder="Kelas" value="{{ $mapel->kelas ?? '' }}">
                                                </fieldset>
                                            </div>





                                            <div class="d-grid col-lg-12 col-md-12 mb-1 mb-lg-0 mt-2">
                                                <button type="submit"
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
