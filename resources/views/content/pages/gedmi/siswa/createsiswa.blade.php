@extends('layouts/gedmi/contentLayoutMaster')

@section('title', 'Tambah Data Siswa ')

{{-- page main content --}}
@section('content')



    <div class="row" id="table-bordered">
        <div class="col-3">
            <div class="form-group">

            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form action="{{ route('gedmi.tambah.siswa.post') }}" method="POST" id="tambahSiswa">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Username
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="username" class="form-control form-control-lg"
                                            id="username" placeholder="Masukkan Username">

                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Password
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="password" class="form-control form-control-lg"
                                            id="password" placeholder="Masukkan Password">

                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        NIS
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="nis" class="form-control form-control-lg"
                                            id="nis" placeholder="Masukkan NIS Siswa">

                                    </fieldset>
                                </div>

                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Jenis Kelamin
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="jenis_kelamin" class="form-control form-control-lg"
                                            id="jenis_kelamin" placeholder="Masukkan Jenis Kelamin">
                                    </fieldset>
                                </div>

                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Nama Siswa
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="nama" class="form-control form-control-lg"
                                            id="nama" placeholder="Masukkan Nama Siswa">

                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Tahun Masuk
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="tahun_masuk" class="form-control form-control-lg"
                                            id="tahun_masuk" placeholder="Masukkan Tahun Masuk">
                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Kelas
                                    </div>
                                    <div class="mb-1">
                                        <select class="form-select form-select-lg" name='kelas' id="kelas">
                                            <option selected>Pilih Kelas</option>
                                            <option value="VII">VII</option>
                                            <option value="VIII">VIII</option>
                                            <option value="IX">IX</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Agama
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="agama" class="form-control form-control-lg"
                                            id="agama" placeholder="Masukkan Agama">
                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Tempat Lahir
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="tempat_lahir" class="form-control form-control-lg"
                                            id="tempat_lahir" placeholder="Masukkan Tempat Lahir">

                                    </fieldset>
                                </div>

                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Alamat
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="alamat" class="form-control form-control-lg"
                                            id="alamat" placeholder="Masukkan Alamat">
                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Tanggal Lahir
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="tanggal_lahir" class="form-control form-control-lg"
                                            id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir">
                                    </fieldset>
                                </div>

                                <p class="mt-2 mb-0 text-center">Nilai Semester 1</p>
                                <div class="row justify-content-between">
                                    <div class="col-3 mt-2">
                                        <fieldset class="form-group">
                                            <label for="basicInput">Matematika</label>
                                            <input type="number" name="matematika_1" class="form-control"
                                                id="matematika_1" placeholder="Nilai Matematika"
                                                value="{{ $dataSiswa->matematika_1 ?? '' }}">
                                        </fieldset>
                                    </div>
                                    <div class="col-3 mt-2">
                                        <fieldset class="form-group">
                                            <label for="basicInput">Bahasa Indonesia</label>
                                            <input type="number" name="bindo_1" class="form-control" id="bindo_1"
                                                placeholder="Nilai Bahasa Indonesia"
                                                value="{{ $dataSiswa->bindo_1 ?? '' }}">
                                        </fieldset>
                                    </div>
                                    <div class="col-3 mt-2">
                                        <fieldset class="form-group">
                                            <label for="basicInput">Bahasa Inggris</label>
                                            <input type="number" name="bing_1" class="form-control" id="bing_1"
                                                placeholder="Nilai Bahasa Indonesia"
                                                value="{{ $dataSiswa->bing_1 ?? '' }}">
                                        </fieldset>
                                    </div>
                                    <div class="col-3 mt-2">
                                        <fieldset class="form-group">
                                            <label for="basicInput">IPA</label>
                                            <input type="number" name="ipa_1" class="form-control" id="ipa_1"
                                                placeholder="Nilai IPA" value="{{ $dataSiswa->ipa_1 ?? '' }}">
                                        </fieldset>
                                    </div>
                                    <div class="col-3 mt-2">
                                        <fieldset class="form-group">
                                            <label for="basicInput">IPS</label>
                                            <input type="number" name="ips_1" class="form-control" id="ips_1"
                                                placeholder="Nilai IPS" value="{{ $dataSiswa->ips_1 ?? '' }}">
                                        </fieldset>
                                    </div>
                                    <div class="col-3 mt-2">
                                        <fieldset class="form-group">
                                            <label for="basicInput">PKn</label>
                                            <input type="number" name="pkn_1" class="form-control" id="pkn_1"
                                                placeholder="Nilai Pendidikan Kewarganegaraan"
                                                value="{{ $dataSiswa->pkn_1 ?? '' }}">
                                        </fieldset>
                                    </div>
                                    <div class="col-3 mt-2">
                                        <fieldset class="form-group">
                                            <label for="basicInput">Pendidikan Agama Islam</label>
                                            <input type="number" name="agama_1" class="form-control" id="agama_1"
                                                placeholder="Nilai PAI" value="{{ $dataSiswa->agama_1 ?? '' }}">
                                        </fieldset>
                                    </div>
                                    <div class="col-3 mt-2">
                                        <fieldset class="form-group">
                                            <label for="basicInput">Penjas</label>
                                            <input type="number" name="penjas_1" class="form-control" id="penjas_1"
                                                placeholder="Nilai Penjas" value="{{ $dataSiswa->penjas_1 ?? '' }}">
                                        </fieldset>
                                    </div>
                                    <div class="col-3 mt-2">
                                        <fieldset class="form-group">
                                            <label for="basicInput">Seni Budaya</label>
                                            <input type="number" name="senbud_1" class="form-control" id="senbud_1"
                                                placeholder="Nilai Seni Budaya" value="{{ $dataSiswa->senbud_1 ?? '' }}">
                                        </fieldset>
                                    </div>
                                    <p class="mt-2 mb-0 text-center">Nilai Semester 2</p>
                                    <div class="row justify-content-between">
                                        <div class="col-3 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Matematika</label>
                                                <input type="number" name="matematika_2" class="form-control"
                                                    id="matematika_2" placeholder="Nilai Matematika"
                                                    value="{{ $dataSiswa->matematika_2 ?? '' }}">
                                            </fieldset>
                                        </div>
                                        <div class="col-3 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Bahasa Indonesia</label>
                                                <input type="number" name="bindo_2" class="form-control" id="bindo_2"
                                                    placeholder="Nilai Bahasa Indonesia"
                                                    value="{{ $dataSiswa->bindo_2 ?? '' }}">
                                            </fieldset>
                                        </div>
                                        <div class="col-3 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Bahasa Inggris</label>
                                                <input type="number" name="bing_2" class="form-control" id="bing_2"
                                                    placeholder="Nilai Bahasa Indonesia"
                                                    value="{{ $dataSiswa->bing_2 ?? '' }}">
                                            </fieldset>
                                        </div>
                                        <div class="col-3 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">IPA</label>
                                                <input type="number" name="ipa_2" class="form-control" id="ipa_2"
                                                    placeholder="Nilai IPA" value="{{ $dataSiswa->ipa_2 ?? '' }}">
                                            </fieldset>
                                        </div>
                                        <div class="col-3 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">IPS</label>
                                                <input type="number" name="ips_2" class="form-control" id="ips_2"
                                                    placeholder="Nilai IPS" value="{{ $dataSiswa->ips_2 ?? '' }}">
                                            </fieldset>
                                        </div>
                                        <div class="col-3 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">PKn</label>
                                                <input type="number" name="pkn_2" class="form-control" id="pkn_2"
                                                    placeholder="Nilai Pendidikan Kewarganegaraan"
                                                    value="{{ $dataSiswa->pkn_2 ?? '' }}">
                                            </fieldset>
                                        </div>
                                        <div class="col-3 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Pendidikan Agama Islam</label>
                                                <input type="number" name="agama_2" class="form-control" id="agama_2"
                                                    placeholder="Nilai PAI" value="{{ $dataSiswa->agama_2 ?? '' }}">
                                            </fieldset>
                                        </div>
                                        <div class="col-3 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Penjas</label>
                                                <input type="number" name="penjas_2" class="form-control"
                                                    id="penjas_2" placeholder="Nilai Penjas"
                                                    value="{{ $dataSiswa->penjas_2 ?? '' }}">
                                            </fieldset>
                                        </div>
                                        <div class="col-3 mt-2">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Seni Budaya</label>
                                                <input type="number" name="senbud_2" class="form-control"
                                                    id="senbud_2" placeholder="Nilai Seni Budaya"
                                                    value="{{ $dataSiswa->senbud_2 ?? '' }}">
                                            </fieldset>
                                        </div>

                                        <p class="mt-2 mb-0 text-center">Nilai Semester 3</p>
                                        <div class="row justify-content-between">
                                            <div class="col-3 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Matematika</label>
                                                    <input type="number" name="matematika_3" class="form-control"
                                                        id="matematika_3" placeholder="Nilai Matematika"
                                                        value="{{ $dataSiswa->matematika_3 ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-3 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Bahasa Indonesia</label>
                                                    <input type="number" name="bindo_3" class="form-control"
                                                        id="bindo_3" placeholder="Nilai Bahasa Indonesia"
                                                        value="{{ $dataSiswa->bindo_3 ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-3 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Bahasa Inggris</label>
                                                    <input type="number" name="bing_3" class="form-control"
                                                        id="bing_3" placeholder="Nilai Bahasa Indonesia"
                                                        value="{{ $dataSiswa->bing_3 ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-3 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">IPA</label>
                                                    <input type="number" name="ipa_3" class="form-control"
                                                        id="ipa_3" placeholder="Nilai IPA"
                                                        value="{{ $dataSiswa->ipa_3 ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-3 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">IPS</label>
                                                    <input type="number" name="ips_3" class="form-control"
                                                        id="ips_3" placeholder="Nilai IPS"
                                                        value="{{ $dataSiswa->ips_3 ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-3 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">PKn</label>
                                                    <input type="number" name="pkn_3" class="form-control"
                                                        id="pkn_3" placeholder="Nilai Pendidikan Kewarganegaraan"
                                                        value="{{ $dataSiswa->pkn_3 ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-3 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Pendidikan Agama Islam</label>
                                                    <input type="number" name="agama_3" class="form-control"
                                                        id="agama_3" placeholder="Nilai PAI"
                                                        value="{{ $dataSiswa->agama_3 ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-3 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Penjas</label>
                                                    <input type="number" name="penjas_3" class="form-control"
                                                        id="penjas_3" placeholder="Nilai Penjas"
                                                        value="{{ $dataSiswa->penjas_3 ?? '' }}">
                                                </fieldset>
                                            </div>
                                            <div class="col-3 mt-2">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Seni Budaya</label>
                                                    <input type="number" name="senbud_3" class="form-control"
                                                        id="senbud_3" placeholder="Nilai Seni Budaya"
                                                        value="{{ $dataSiswa->senbud_3 ?? '' }}">
                                                </fieldset>
                                            </div>

                                            <p class="mt-2 mb-0 text-center">Nilai Semester 4</p>
                                            <div class="row justify-content-between">
                                                <div class="col-3 mt-2">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">Matematika</label>
                                                        <input type="number" name="matematika_4" class="form-control"
                                                            id="matematika_4" placeholder="Nilai Matematika"
                                                            value="{{ $dataSiswa->matematika_4 ?? '' }}">
                                                    </fieldset>
                                                </div>
                                                <div class="col-3 mt-2">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">Bahasa Indonesia</label>
                                                        <input type="number" name="bindo_4" class="form-control"
                                                            id="bindo_4" placeholder="Nilai Bahasa Indonesia"
                                                            value="{{ $dataSiswa->bindo_4 ?? '' }}">
                                                    </fieldset>
                                                </div>
                                                <div class="col-3 mt-2">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">Bahasa Inggris</label>
                                                        <input type="number" name="bing_4" class="form-control"
                                                            id="bing_4" placeholder="Nilai Bahasa Indonesia"
                                                            value="{{ $dataSiswa->bing_4 ?? '' }}">
                                                    </fieldset>
                                                </div>
                                                <div class="col-3 mt-2">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">IPA</label>
                                                        <input type="number" name="ipa_4" class="form-control"
                                                            id="ipa_4" placeholder="Nilai IPA"
                                                            value="{{ $dataSiswa->ipa_4 ?? '' }}">
                                                    </fieldset>
                                                </div>
                                                <div class="col-3 mt-2">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">IPS</label>
                                                        <input type="number" name="ips_4" class="form-control"
                                                            id="ips_4" placeholder="Nilai IPS"
                                                            value="{{ $dataSiswa->ips_4 ?? '' }}">
                                                    </fieldset>
                                                </div>
                                                <div class="col-3 mt-2">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">PKn</label>
                                                        <input type="number" name="pkn_4" class="form-control"
                                                            id="pkn_4" placeholder="Nilai Pendidikan Kewarganegaraan"
                                                            value="{{ $dataSiswa->pkn_4 ?? '' }}">
                                                    </fieldset>
                                                </div>
                                                <div class="col-3 mt-2">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">Pendidikan Agama Islam</label>
                                                        <input type="number" name="agama_4" class="form-control"
                                                            id="agama_4" placeholder="Nilai PAI"
                                                            value="{{ $dataSiswa->agama_4 ?? '' }}">
                                                    </fieldset>
                                                </div>
                                                <div class="col-3 mt-2">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">Penjas</label>
                                                        <input type="number" name="penjas_4" class="form-control"
                                                            id="penjas_4" placeholder="Nilai Penjas"
                                                            value="{{ $dataSiswa->penjas_4 ?? '' }}">
                                                    </fieldset>
                                                </div>
                                                <div class="col-3 mt-2">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">Seni Budaya</label>
                                                        <input type="number" name="senbud_4" class="form-control"
                                                            id="senbud_4" placeholder="Nilai Seni Budaya"
                                                            value="{{ $dataSiswa->senbud_4 ?? '' }}">
                                                    </fieldset>
                                                </div>

                                                <p class="mt-2 mb-0 text-center">Nilai Semester 5</p>
                                                <div class="row justify-content-between">
                                                    <div class="col-3 mt-2">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">Matematika</label>
                                                            <input type="number" name="matematika_5"
                                                                class="form-control" id="matematika_5"
                                                                placeholder="Nilai Matematika"
                                                                value="{{ $dataSiswa->matematika_5 ?? '' }}">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-3 mt-2">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">Bahasa Indonesia</label>
                                                            <input type="number" name="bindo_5" class="form-control"
                                                                id="bindo_5" placeholder="Nilai Bahasa Indonesia"
                                                                value="{{ $dataSiswa->bindo_5 ?? '' }}">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-3 mt-2">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">Bahasa Inggris</label>
                                                            <input type="number" name="bing_5" class="form-control"
                                                                id="bing_5" placeholder="Nilai Bahasa Indonesia"
                                                                value="{{ $dataSiswa->bing_5 ?? '' }}">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-3 mt-2">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">IPA</label>
                                                            <input type="number" name="ipa_5" class="form-control"
                                                                id="ipa_5" placeholder="Nilai IPA"
                                                                value="{{ $dataSiswa->ipa_5 ?? '' }}">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-3 mt-2">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">IPS</label>
                                                            <input type="number" name="ips_5" class="form-control"
                                                                id="ips_5" placeholder="Nilai IPS"
                                                                value="{{ $dataSiswa->ips_5 ?? '' }}">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-3 mt-2">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">PKn</label>
                                                            <input type="number" name="pkn_5" class="form-control"
                                                                id="pkn_5"
                                                                placeholder="Nilai Pendidikan Kewarganegaraan"
                                                                value="{{ $dataSiswa->pkn_5 ?? '' }}">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-3 mt-2">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">Pendidikan Agama Islam</label>
                                                            <input type="number" name="agama_5" class="form-control"
                                                                id="agama_5" placeholder="Nilai PAI"
                                                                value="{{ $dataSiswa->agama_5 ?? '' }}">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-3 mt-2">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">Penjas</label>
                                                            <input type="number" name="penjas_5" class="form-control"
                                                                id="penjas_5" placeholder="Nilai Penjas"
                                                                value="{{ $dataSiswa->penjas_5 ?? '' }}">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-3 mt-2">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">Seni Budaya</label>
                                                            <input type="number" name="senbud_5" class="form-control"
                                                                id="senbud_5" placeholder="Nilai Seni Budaya"
                                                                value="{{ $dataSiswa->senbud_5 ?? '' }}">
                                                        </fieldset>
                                                    </div>

                                                    <p class="mt-2 mb-0 text-center">Nilai Semester 6</p>
                                                    <div class="row justify-content-between">
                                                        <div class="col-3 mt-2">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Matematika</label>
                                                                <input type="number" name="matematika_6"
                                                                    class="form-control" id="matematika_6"
                                                                    placeholder="Nilai Matematika"
                                                                    value="{{ $dataSiswa->matematika_6 ?? '' }}">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-3 mt-2">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Bahasa Indonesia</label>
                                                                <input type="number" name="bindo_6" class="form-control"
                                                                    id="bindo_6" placeholder="Nilai Bahasa Indonesia"
                                                                    value="{{ $dataSiswa->bindo_6 ?? '' }}">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-3 mt-2">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Bahasa Inggris</label>
                                                                <input type="number" name="bing_6" class="form-control"
                                                                    id="bing_6" placeholder="Nilai Bahasa Indonesia"
                                                                    value="{{ $dataSiswa->bing_6 ?? '' }}">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-3 mt-2">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">IPA</label>
                                                                <input type="number" name="ipa_6" class="form-control"
                                                                    id="ipa_6" placeholder="Nilai IPA"
                                                                    value="{{ $dataSiswa->ipa_6 ?? '' }}">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-3 mt-2">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">IPS</label>
                                                                <input type="number" name="ips_6" class="form-control"
                                                                    id="ips_6" placeholder="Nilai IPS"
                                                                    value="{{ $dataSiswa->ips_6 ?? '' }}">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-3 mt-2">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">PKn</label>
                                                                <input type="number" name="pkn_6" class="form-control"
                                                                    id="pkn_6"
                                                                    placeholder="Nilai Pendidikan Kewarganegaraan"
                                                                    value="{{ $dataSiswa->pkn_6 ?? '' }}">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-3 mt-2">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Pendidikan Agama
                                                                    Islam</label>
                                                                <input type="number" name="agama_6" class="form-control"
                                                                    id="agama_6" placeholder="Nilai PAI"
                                                                    value="{{ $dataSiswa->agama_6 ?? '' }}">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-3 mt-2">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Penjas</label>
                                                                <input type="number" name="penjas_6"
                                                                    class="form-control" id="penjas_6"
                                                                    placeholder="Nilai Penjas"
                                                                    value="{{ $dataSiswa->penjas_6 ?? '' }}">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-3 mt-2">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Seni Budaya</label>
                                                                <input type="number" name="senbud_6"
                                                                    class="form-control" id="senbud_6"
                                                                    placeholder="Nilai Seni Budaya"
                                                                    value="{{ $dataSiswa->senbud_6 ?? '' }}">
                                                            </fieldset>
                                                        </div>



                                                        </tbody>
                                                        </table>
                                                    </div>

                                                </div>


                                                <button type="submit" class="btn btn-primary pull-right mb-1 mr-2 mt-2">
                                                    Tambahkan Data</button>
                                                <!-- Modal -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Bordered table end -->
@endsection
