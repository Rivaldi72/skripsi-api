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
    <script>
        var picker = $('.tanggal_lahir').pickadate({
            onStart: function() {
                var date = new Date('{{ $biodata->tanggal_lahir ?? \Carbon\Carbon::now() }}');
                console.log(this)
                this.set('select', date);
            },
            selectYears: 100,
            selectMonths: true
        });
    </script>

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
                                <form action="" method="POST" id="dataForm" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="nilai_data" id="nilaiData">
                                    <div class="row justify-content-between">
                                        <div class="col-12 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">NIS</label>
                                                <input type="text" name="nis" class="form-control" disabled
                                                    id="" placeholder="NIS" value="{{ $biodata->nis ?? '' }}">
                                            </fieldset>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Nama</label>
                                                <input type="text" name="nama" class="form-control" disabled
                                                    id="" placeholder="Nama" value="{{ $biodata->nama ?? '' }}">
                                            </fieldset>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Tempat Lahir</label>
                                                <input type="text" name="tempat_lahir" class="form-control" disabled
                                                    id="" placeholder="Place Of Birth"
                                                    value="{{ $biodata->tempat_lahir ?? '' }}">
                                            </fieldset>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Tanggal Lahir</label>
                                                <form action="">
                                                    <input type='text' name="tanggal_lahir"
                                                        class="form-control tanggal_lahir" disabled id=""
                                                        placeholder="Data Of Birth"
                                                        value="{{ $biodata->tanggal_lahir ?? '' }}">
                                                </form>
                                            </fieldset>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Tahun Masuk</label>
                                                <input type="text" name="tahun_masuk" class="form-control" disabled
                                                    id="" placeholder="Place Of Birth"
                                                    value="{{ $biodata->tahun_masuk ?? '' }}">
                                            </fieldset>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Jenis Kelamin</label>
                                                <select class="form-select" name="jenis_kelamin" disabled id="customSelect">
                                                    <option selected value="">Pilih jenis kelamin</option>
                                                    <option value="L">Laki-laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Agama</label>
                                                <input type="text" name="agama" class="form-control" disabled
                                                    id="" placeholder="Masukkan Agama" value="">
                                            </fieldset>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Alamat</label>
                                                <input type="text" name="alamat" class="form-control" disabled
                                                    id="" placeholder="Masukkan Alamat" value="">
                                            </fieldset>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-12 border-right">
                                                    <div class="row align-items-center">
                                                        <div class="col-4">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Mata Pelajaran</label>
                                                                <select class="form-select" id="mapel">
                                                                    <option selected="" value="0">Pilih</option>
                                                                    <option value="B.Indo">Bahasa Indonesia</option>
                                                                    <option value="B.Ing">Bahasa Inggris</option>
                                                                    <option value="MM">Matematika</option>
                                                                    <option value="IPS">Ilmu Pengetahuan Sosial (IPS)
                                                                    </option>
                                                                    <option value="IPA">Ilmu Pengetahuan Alam (IPA)
                                                                    </option>
                                                                    <option value="PKn">Pendidikan Kewarganegaraan (PKn)
                                                                    </option>
                                                                    <option value="PAI">Pendidikan Agama Islam (PAI)
                                                                    </option>
                                                                    <option value="Prakarya">Prakarya</option>
                                                                    <option value="Penjas">Penjas</option>
                                                                    <option value="AgamaKristen">Agama Kristen</option>
                                                                    <option value="SeniBudaya">Seni Budaya</option>
                                                                    <option value="Pramuka">Pramuka</option>
                                                                </select>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-2">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Nilai</label>
                                                                <input type="number" class="form-control" id="nilai"
                                                                    placeholder="">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-3">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Bobot</label>
                                                                <input type="text" class="form-control" id="bobot"
                                                                    placeholder="Bobot" disabled>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-3 mt-2">
                                                            <button type="button" onclick="addNilai()"
                                                                class="btn btn-relief-primary">
                                                                <i data-feather="plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-n1">
                                                        <div class="col-12">
                                                            <p style="color: red;font-style: italic">* isi boleh lebih dari
                                                                1</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="table-responsive" style="overflow-x: hidden;">
                                                                <table id="datatable"
                                                                    class="table zero-configuration table-striped table-bordered text-center">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>No</th>
                                                                            <th>Mata Pelajaran</th>
                                                                            <th>Nilai</th>
                                                                            <th>Bobot</th>
                                                                            <th>Aksi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="list_nilai">
                                                                        <tr id="dummy_data_nilai">
                                                                            <td colspan="5">Tambah data terlebih dahulu
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Jurusan Pendidikan</label>
                                                <input type="text" class="form-control" name="jurusan_pendidikan"
                                                    id="" placeholder="Masukkan Jurusan Anda" value="">
                                            </fieldset>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">IPK</label>
                                                <input type="text" class="form-control" name="ipk" id=""
                                                    placeholder="Masukkan IPK" value="">
                                            </fieldset>
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
