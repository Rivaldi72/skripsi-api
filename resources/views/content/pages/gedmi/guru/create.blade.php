@extends('layouts/gedmi/contentLayoutMaster')

@section('title', 'Tambah Data Guru ')

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
                    <form action="{{ route('gedmi.tambah.guru.post') }}" method="POST" id="tambahGuru">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Nama Guru
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="nama" class="form-control form-control-lg"
                                            id="nama" placeholder="Masukkan Nama Guru" value="">

                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Tempat Lahir
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="tempat_lahir" class="form-control form-control-lg"
                                            id="tempat_lahir" placeholder="Masukkan Tempat Lahir" value="">

                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Tanggal Lahir
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="tanggal_lahir" class="form-control form-control-lg"
                                            id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" value="">

                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Jabatan
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="jabatan" class="form-control form-control-lg"
                                            id="jabatan" placeholder="Masukkan Jabatan" value="">

                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Tamatan
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="tamatan" class="form-control form-control-lg"
                                            id="tamatan" placeholder="Masukkan Tamatan" value="">

                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Gelar
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="gelar" class="form-control form-control-lg"
                                            id="gelar" placeholder="Masukkan Gelar" value="">

                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Bidang Study
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="bidang_studi" class="form-control form-control-lg"
                                            id="bidang_studi" placeholder="Masukkan Bidang Study" value="">

                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Agama
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="agama" class="form-control form-control-lg"
                                            id="agama" placeholder="Masukkan Agama" value="">

                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Alamat
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="alamat" class="form-control form-control-lg"
                                            id="alamat" placeholder="Masukkan Alamat" value="">

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
