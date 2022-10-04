@extends('layouts/gedmi/contentLayoutMaster')

@section('title', 'Detail Data Siswa ')

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

    <script>
        var itemNilai = [];
        var indexNilai = 0;
        $("#nilai").keyup(function(event) {
            nilai = $(this).val();
            if (nilai >= 86) {
                $("#bobot").val('A');
            } else if (nilai >= 76) {
                $("#bobot").val('B');
            } else if (nilai >= 66) {
                $("#bobot").val('C');
            } else if (nilai == '') {
                $("#bobot").val('');
            } else {
                $("#bobot").val('D');
            }
        });

        function addNilai() {
            mapel = $('#mapel').find(":selected").val();
            mapelText = $('#mapel').find(":selected").text();
            nilai = $("#nilai").val();
            bobot = $("#bobot").val();

            if (mapel == '' || nilai == '' || bobot == '') {
                return alert('Isi semua data terlebih dahulu')
            }

            indexNilai = indexNilai + 1;
            idItem = 'nilai' + indexNilai;

            itemNilai.push({
                idItem: idItem,
                mapel: mapel,
                nilai: nilai,
                bobot: bobot
            });

            $("#mapelmapel option[value=0]").attr("selected", "selected");
            $("#nilai").val('');
            $("#bobot").val('');

            $("#dummy_data_nilai").remove();
            $("#list_nilai").append(`
            <tr id="${idItem}">
                <td>${indexNilai}</td>
                <td>${mapelText}</td>
                <td>${nilai}</td>
                <td>${bobot}</td>
                <td><button type="button" onClick="removeListNilai('${idItem}');" class="btn btn-icon btn-danger btn-relief-danger rounded-circle mb-1 px-1 waves-effect waves-light">x</button></td>
            </tr>
        `);

            $("#nilai").focus();
            var listItemNilai = JSON.stringify(itemNilai);
            $("#nilaiData").val(listItemNilai);

            console.table(itemsPengalamanKerja);
            return false;
        }

        function removeListNilai(id) {
            var idItem = id.substr(id.length - 1);
            $("#" + id).remove();

            const deleteIndex = itemNilai.findIndex(item => item.idItem === id);
            // console.log(deleteIndex);
            itemNilai.splice(deleteIndex, 1);
            $("#nilai").focus();

            if (itemNilai.length == 0) {
                $("#list_nilai").append(`
                <tr id="dummy_data_nilai">
                    <td colspan="5">Isi minimal 1 data</td>
                </tr>
            `);
            }
            console.table(itemNilai);
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
                                <form action="{{ route('gedmi.detail.siswa', ['id' => $dataSiswa->id]) }}" method="GET"
                                    id="detailSiswa" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="nilai_data" id="nilaiData">
                                    <div class="row justify-content-between">
                                        <div class="col-12 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">NIS</label>
                                                <input type="text" name="nis" class="form-control" disabled
                                                    id="nis" placeholder="NIS" value="{{ $dataSiswa->nis ?? '' }}">
                                            </fieldset>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Nama</label>
                                                <input type="text" name="nama" class="form-control" disabled
                                                    id="nama" placeholder="Nama" value="{{ $dataSiswa->nama ?? '' }}">
                                            </fieldset>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Tempat Lahir</label>
                                                <input type="text" name="tempat_lahir" class="form-control" disabled
                                                    id="tempat_lahir" placeholder="Place Of Birth"
                                                    value="{{ $dataSiswa->tempat_lahir ?? '' }}">
                                            </fieldset>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Tanggal Lahir</label>
                                                <form action="">
                                                    <input type='text' name="tanggal_lahir"
                                                        class="form-control tanggal_lahir" disabled id="tanggal_lahir"
                                                        placeholder="Data Of Birth"
                                                        value="{{ $dataSiswa->tanggal_lahir ?? '' }}">
                                                </form>
                                            </fieldset>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Tahun Masuk</label>
                                                <input type="text" name="tahun_masuk" class="form-control" disabled
                                                    id="tahun_masuk" placeholder="Place Of Birth"
                                                    value="{{ $dataSiswa->tahun_masuk ?? '' }}">
                                            </fieldset>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Jenis Kelamin</label>
                                                <input type="text" name="jenis_kelamin" class="form-control" disabled
                                                    id="jenis_kelamin" placeholder="Masukkan Jenis Kelamin"
                                                    value="{{ $dataSiswa->jenis_kelamin ?? '' }}">
                                            </fieldset>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Agama</label>
                                                <input type="text" name="agama" class="form-control" disabled disabled
                                                    id="agama" placeholder="Masukkan Agama"
                                                    value="{{ $dataSiswa->agama ?? '' }}">
                                            </fieldset>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Alamat</label>
                                                <input type="text" name="alamat" class="form-control" disabled
                                                    id="alamat" placeholder="Masukkan Alamat"
                                                    value="{{ $dataSiswa->alamat ?? '' }}">
                                            </fieldset>
                                        </div>

                                        <p class="mt-2 mb-0 text-center">Nilai Semester 1</p>
                                        <div class="row justify-content-between">
                                            <div class="col-3 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Matematika</label>
                                                    <input type="number" name="matematika_1" class="form-control"
                                                        disabled id="matematika_1" placeholder="Nilai Matematika"
                                                        value="{{ $dataSiswa->matematika_1 ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-3 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Bahasa Indonesia</label>
                                                    <input type="number" name="bindo_1" class="form-control" disabled
                                                        id="bindo_1" placeholder="Nilai Bahasa Indonesia"
                                                        value="{{ $dataSiswa->bindo_1 ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-3 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Bahasa Inggris</label>
                                                    <input type="number" name="bing_1" class="form-control" disabled
                                                        id="bing_1" placeholder="Nilai Bahasa Indonesia"
                                                        value="{{ $dataSiswa->bing_1 ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-3 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">IPA</label>
                                                    <input type="number" name="ipa_1" class="form-control" disabled
                                                        id="ipa_1" placeholder="Nilai IPA"
                                                        value="{{ $dataSiswa->ipa_1 ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-3 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">IPS</label>
                                                    <input type="number" name="ips_1" class="form-control" disabled
                                                        id="ips_1" placeholder="Nilai IPS"
                                                        value="{{ $dataSiswa->ips_1 ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-3 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">PKn</label>
                                                    <input type="number" name="pkn_1" class="form-control" disabled
                                                        id="pkn_1"
                                                        placeholder="Nilai Penddisabled idikan Kewarganegaraan"
                                                        value="{{ $dataSiswa->pkn_1 ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-3 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Penddisabled idikan Agama Islam</label>
                                                    <input type="number" name="agama_1" class="form-control" disabled
                                                        id="agama_1" placeholder="Nilai PAI"
                                                        value="{{ $dataSiswa->agama_1 ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-3 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Penjas</label>
                                                    <input type="number" name="penjas_1" class="form-control" disabled
                                                        id="penjas_1" placeholder="Nilai Penjas"
                                                        value="{{ $dataSiswa->penjas_1 ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-3 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Seni Budaya</label>
                                                    <input type="number" name="senbud_1" class="form-control" disabled
                                                        id="senbud_1" placeholder="Nilai Seni Budaya"
                                                        value="{{ $dataSiswa->senbud_1 ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <p class="mt-2 mb-0 text-center">Nilai Semester 2</p>
                                            <div class="row justify-content-between">
                                                <div class="col-3 mt-2">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">Matematika</label>
                                                        <input type="number" name="matematika_2" class="form-control"
                                                            disabled id="matematika_2" placeholder="Nilai Matematika"
                                                            value="{{ $dataSiswa->matematika_2 ?? '' }}">
                                                    </fieldset>
                                                </div>
                                                <div class="col-3 mt-2">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">Bahasa Indonesia</label>
                                                        <input type="number" name="bindo_2" class="form-control"
                                                            disabled id="bindo_2" placeholder="Nilai Bahasa Indonesia"
                                                            value="{{ $dataSiswa->bindo_2 ?? '' }}">
                                                    </fieldset>
                                                </div>
                                                <div class="col-3 mt-2">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">Bahasa Inggris</label>
                                                        <input type="number" name="bing_2" class="form-control"
                                                            disabled id="bing_2" placeholder="Nilai Bahasa Indonesia"
                                                            value="{{ $dataSiswa->bing_2 ?? '' }}">
                                                    </fieldset>
                                                </div>
                                                <div class="col-3 mt-2">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">IPA</label>
                                                        <input type="number" name="ipa_2" class="form-control"
                                                            disabled id="ipa_2" placeholder="Nilai IPA"
                                                            value="{{ $dataSiswa->ipa_2 ?? '' }}">
                                                    </fieldset>
                                                </div>
                                                <div class="col-3 mt-2">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">IPS</label>
                                                        <input type="number" name="ips_2" class="form-control"
                                                            disabled id="ips_2" placeholder="Nilai IPS"
                                                            value="{{ $dataSiswa->ips_2 ?? '' }}">
                                                    </fieldset>
                                                </div>
                                                <div class="col-3 mt-2">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">PKn</label>
                                                        <input type="number" name="pkn_2" class="form-control"
                                                            disabled id="pkn_2"
                                                            placeholder="Nilai Penddisabled idikan Kewarganegaraan"
                                                            value="{{ $dataSiswa->pkn_2 ?? '' }}">
                                                    </fieldset>
                                                </div>
                                                <div class="col-3 mt-2">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">Penddisabled idikan Agama Islam</label>
                                                        <input type="number" name="agama_2" class="form-control"
                                                            disabled id="agama_2" placeholder="Nilai PAI"
                                                            value="{{ $dataSiswa->agama_2 ?? '' }}">
                                                    </fieldset>
                                                </div>
                                                <div class="col-3 mt-2">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">Penjas</label>
                                                        <input type="number" name="penjas_2" class="form-control"
                                                            disabled id="penjas_2" placeholder="Nilai Penjas"
                                                            value="{{ $dataSiswa->penjas_2 ?? '' }}">
                                                    </fieldset>
                                                </div>
                                                <div class="col-3 mt-2">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">Seni Budaya</label>
                                                        <input type="number" name="senbud_2" class="form-control"
                                                            disabled id="senbud_2" placeholder="Nilai Seni Budaya"
                                                            value="{{ $dataSiswa->senbud_2 ?? '' }}">
                                                    </fieldset>
                                                </div>

                                                <p class="mt-2 mb-0 text-center">Nilai Semester 3</p>
                                                <div class="row justify-content-between">
                                                    <div class="col-3 mt-2">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">Matematika</label>
                                                            <input type="number" name="matematika_3"
                                                                class="form-control" disabled id="matematika_3"
                                                                placeholder="Nilai Matematika"
                                                                value="{{ $dataSiswa->matematika_3 ?? '' }}">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-3 mt-2">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">Bahasa Indonesia</label>
                                                            <input type="number" name="bindo_3" class="form-control"
                                                                disabled id="bindo_3"
                                                                placeholder="Nilai Bahasa Indonesia"
                                                                value="{{ $dataSiswa->bindo_3 ?? '' }}">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-3 mt-2">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">Bahasa Inggris</label>
                                                            <input type="number" name="bing_3" class="form-control"
                                                                disabled id="bing_3"
                                                                placeholder="Nilai Bahasa Indonesia"
                                                                value="{{ $dataSiswa->bing_3 ?? '' }}">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-3 mt-2">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">IPA</label>
                                                            <input type="number" name="ipa_3" class="form-control"
                                                                disabled id="ipa_3" placeholder="Nilai IPA"
                                                                value="{{ $dataSiswa->ipa_3 ?? '' }}">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-3 mt-2">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">IPS</label>
                                                            <input type="number" name="ips_3" class="form-control"
                                                                disabled id="ips_3" placeholder="Nilai IPS"
                                                                value="{{ $dataSiswa->ips_3 ?? '' }}">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-3 mt-2">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">PKn</label>
                                                            <input type="number" name="pkn_3" class="form-control"
                                                                disabled id="pkn_3"
                                                                placeholder="Nilai Penddisabled idikan Kewarganegaraan"
                                                                value="{{ $dataSiswa->pkn_3 ?? '' }}">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-3 mt-2">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">Penddisabled idikan Agama Islam</label>
                                                            <input type="number" name="agama_3" class="form-control"
                                                                disabled id="agama_3" placeholder="Nilai PAI"
                                                                value="{{ $dataSiswa->agama_3 ?? '' }}">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-3 mt-2">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">Penjas</label>
                                                            <input type="number" name="penjas_3" class="form-control"
                                                                disabled id="penjas_3" placeholder="Nilai Penjas"
                                                                value="{{ $dataSiswa->penjas_3 ?? '' }}">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-3 mt-2">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">Seni Budaya</label>
                                                            <input type="number" name="senbud_3" class="form-control"
                                                                disabled id="senbud_3" placeholder="Nilai Seni Budaya"
                                                                value="{{ $dataSiswa->senbud_3 ?? '' }}">
                                                        </fieldset>
                                                    </div>

                                                    <p class="mt-2 mb-0 text-center">Nilai Semester 4</p>
                                                    <div class="row justify-content-between">
                                                        <div class="col-3 mt-2">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Matematika</label>
                                                                <input type="number" name="matematika_4"
                                                                    class="form-control" disabled id="matematika_4"
                                                                    placeholder="Nilai Matematika"
                                                                    value="{{ $dataSiswa->matematika_4 ?? '' }}">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-3 mt-2">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Bahasa Indonesia</label>
                                                                <input type="number" name="bindo_4" class="form-control"
                                                                    disabled id="bindo_4"
                                                                    placeholder="Nilai Bahasa Indonesia"
                                                                    value="{{ $dataSiswa->bindo_4 ?? '' }}">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-3 mt-2">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Bahasa Inggris</label>
                                                                <input type="number" name="bing_4" class="form-control"
                                                                    disabled id="bing_4"
                                                                    placeholder="Nilai Bahasa Indonesia"
                                                                    value="{{ $dataSiswa->bing_4 ?? '' }}">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-3 mt-2">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">IPA</label>
                                                                <input type="number" name="ipa_4" class="form-control"
                                                                    disabled id="ipa_4" placeholder="Nilai IPA"
                                                                    value="{{ $dataSiswa->ipa_4 ?? '' }}">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-3 mt-2">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">IPS</label>
                                                                <input type="number" name="ips_4" class="form-control"
                                                                    disabled id="ips_4" placeholder="Nilai IPS"
                                                                    value="{{ $dataSiswa->ips_4 ?? '' }}">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-3 mt-2">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">PKn</label>
                                                                <input type="number" name="pkn_4" class="form-control"
                                                                    disabled id="pkn_4"
                                                                    placeholder="Nilai Penddisabled idikan Kewarganegaraan"
                                                                    value="{{ $dataSiswa->pkn_4 ?? '' }}">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-3 mt-2">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Penddisabled idikan Agama
                                                                    Islam</label>
                                                                <input type="number" name="agama_4" class="form-control"
                                                                    disabled id="agama_4" placeholder="Nilai PAI"
                                                                    value="{{ $dataSiswa->agama_4 ?? '' }}">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-3 mt-2">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Penjas</label>
                                                                <input type="number" name="penjas_4"
                                                                    class="form-control" disabled id="penjas_4"
                                                                    placeholder="Nilai Penjas"
                                                                    value="{{ $dataSiswa->penjas_4 ?? '' }}">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-3 mt-2">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Seni Budaya</label>
                                                                <input type="number" name="senbud_4"
                                                                    class="form-control" disabled id="senbud_4"
                                                                    placeholder="Nilai Seni Budaya"
                                                                    value="{{ $dataSiswa->senbud_4 ?? '' }}">
                                                            </fieldset>
                                                        </div>

                                                        <p class="mt-2 mb-0 text-center">Nilai Semester 5</p>
                                                        <div class="row justify-content-between">
                                                            <div class="col-3 mt-2">
                                                                <fieldset class="form-group">
                                                                    <label for="basicInput">Matematika</label>
                                                                    <input type="number" name="matematika_5"
                                                                        class="form-control" disabled id="matematika_5"
                                                                        placeholder="Nilai Matematika"
                                                                        value="{{ $dataSiswa->matematika_5 ?? '' }}">
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-3 mt-2">
                                                                <fieldset class="form-group">
                                                                    <label for="basicInput">Bahasa Indonesia</label>
                                                                    <input type="number" name="bindo_5"
                                                                        class="form-control" disabled id="bindo_5"
                                                                        placeholder="Nilai Bahasa Indonesia"
                                                                        value="{{ $dataSiswa->bindo_5 ?? '' }}">
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-3 mt-2">
                                                                <fieldset class="form-group">
                                                                    <label for="basicInput">Bahasa Inggris</label>
                                                                    <input type="number" name="bing_5"
                                                                        class="form-control" disabled id="bing_5"
                                                                        placeholder="Nilai Bahasa Indonesia"
                                                                        value="{{ $dataSiswa->bing_5 ?? '' }}">
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-3 mt-2">
                                                                <fieldset class="form-group">
                                                                    <label for="basicInput">IPA</label>
                                                                    <input type="number" name="ipa_5"
                                                                        class="form-control" disabled id="ipa_5"
                                                                        placeholder="Nilai IPA"
                                                                        value="{{ $dataSiswa->ipa_5 ?? '' }}">
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-3 mt-2">
                                                                <fieldset class="form-group">
                                                                    <label for="basicInput">IPS</label>
                                                                    <input type="number" name="ips_5"
                                                                        class="form-control" disabled id="ips_5"
                                                                        placeholder="Nilai IPS"
                                                                        value="{{ $dataSiswa->ips_5 ?? '' }}">
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-3 mt-2">
                                                                <fieldset class="form-group">
                                                                    <label for="basicInput">PKn</label>
                                                                    <input type="number" name="pkn_5"
                                                                        class="form-control" disabled id="pkn_5"
                                                                        placeholder="Nilai Penddisabled idikan Kewarganegaraan"
                                                                        value="{{ $dataSiswa->pkn_5 ?? '' }}">
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-3 mt-2">
                                                                <fieldset class="form-group">
                                                                    <label for="basicInput">Penddisabled idikan Agama
                                                                        Islam</label>
                                                                    <input type="number" name="agama_5"
                                                                        class="form-control" disabled id="agama_5"
                                                                        placeholder="Nilai PAI"
                                                                        value="{{ $dataSiswa->agama_5 ?? '' }}">
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-3 mt-2">
                                                                <fieldset class="form-group">
                                                                    <label for="basicInput">Penjas</label>
                                                                    <input type="number" name="penjas_5"
                                                                        class="form-control" disabled id="penjas_5"
                                                                        placeholder="Nilai Penjas"
                                                                        value="{{ $dataSiswa->penjas_5 ?? '' }}">
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-3 mt-2">
                                                                <fieldset class="form-group">
                                                                    <label for="basicInput">Seni Budaya</label>
                                                                    <input type="number" name="senbud_5"
                                                                        class="form-control" disabled id="senbud_5"
                                                                        placeholder="Nilai Seni Budaya"
                                                                        value="{{ $dataSiswa->senbud_5 ?? '' }}">
                                                                </fieldset>
                                                            </div>

                                                            <p class="mt-2 mb-0 text-center">Nilai Semester 6</p>
                                                            <div class="row justify-content-between">
                                                                <div class="col-3 mt-2">
                                                                    <fieldset class="form-group">
                                                                        <label for="basicInput">Matematika</label>
                                                                        <input type="number" name="matematika_6"
                                                                            class="form-control" disabled
                                                                            id="matematika_6"
                                                                            placeholder="Nilai Matematika"
                                                                            value="{{ $dataSiswa->matematika_6 ?? '' }}">
                                                                    </fieldset>
                                                                </div>
                                                                <div class="col-3 mt-2">
                                                                    <fieldset class="form-group">
                                                                        <label for="basicInput">Bahasa Indonesia</label>
                                                                        <input type="number" name="bindo_6"
                                                                            class="form-control" disabled id="bindo_6"
                                                                            placeholder="Nilai Bahasa Indonesia"
                                                                            value="{{ $dataSiswa->bindo_6 ?? '' }}">
                                                                    </fieldset>
                                                                </div>
                                                                <div class="col-3 mt-2">
                                                                    <fieldset class="form-group">
                                                                        <label for="basicInput">Bahasa Inggris</label>
                                                                        <input type="number" name="bing_6"
                                                                            class="form-control" disabled id="bing_6"
                                                                            placeholder="Nilai Bahasa Indonesia"
                                                                            value="{{ $dataSiswa->bing_6 ?? '' }}">
                                                                    </fieldset>
                                                                </div>
                                                                <div class="col-3 mt-2">
                                                                    <fieldset class="form-group">
                                                                        <label for="basicInput">IPA</label>
                                                                        <input type="number" name="ipa_6"
                                                                            class="form-control" disabled id="ipa_6"
                                                                            placeholder="Nilai IPA"
                                                                            value="{{ $dataSiswa->ipa_6 ?? '' }}">
                                                                    </fieldset>
                                                                </div>
                                                                <div class="col-3 mt-2">
                                                                    <fieldset class="form-group">
                                                                        <label for="basicInput">IPS</label>
                                                                        <input type="number" name="ips_6"
                                                                            class="form-control" disabled id="ips_6"
                                                                            placeholder="Nilai IPS"
                                                                            value="{{ $dataSiswa->ips_6 ?? '' }}">
                                                                    </fieldset>
                                                                </div>
                                                                <div class="col-3 mt-2">
                                                                    <fieldset class="form-group">
                                                                        <label for="basicInput">PKn</label>
                                                                        <input type="number" name="pkn_6"
                                                                            class="form-control" disabled id="pkn_6"
                                                                            placeholder="Nilai Penddisabled idikan Kewarganegaraan"
                                                                            value="{{ $dataSiswa->pkn_6 ?? '' }}">
                                                                    </fieldset>
                                                                </div>
                                                                <div class="col-3 mt-2">
                                                                    <fieldset class="form-group">
                                                                        <label for="basicInput">Penddisabled idikan Agama
                                                                            Islam</label>
                                                                        <input type="number" name="agama_6"
                                                                            class="form-control" disabled id="agama_6"
                                                                            placeholder="Nilai PAI"
                                                                            value="{{ $dataSiswa->agama_6 ?? '' }}">
                                                                    </fieldset>
                                                                </div>
                                                                <div class="col-3 mt-2">
                                                                    <fieldset class="form-group">
                                                                        <label for="basicInput">Penjas</label>
                                                                        <input type="number" name="penjas_6"
                                                                            class="form-control" disabled id="penjas_6"
                                                                            placeholder="Nilai Penjas"
                                                                            value="{{ $dataSiswa->penjas_6 ?? '' }}">
                                                                    </fieldset>
                                                                </div>
                                                                <div class="col-3 mt-2">
                                                                    <fieldset class="form-group">
                                                                        <label for="basicInput">Seni Budaya</label>
                                                                        <input type="number" name="senbud_6"
                                                                            class="form-control" disabled id="senbud_6"
                                                                            placeholder="Nilai Seni Budaya"
                                                                            value="{{ $dataSiswa->senbud_6 ?? '' }}">
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
@endsection
