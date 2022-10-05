@extends('layouts/gedmi/contentLayoutMaster')

@section('title', 'Tambah Mata Pelajaran ')

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
                    <form action="{{ route('gedmi.tambah.mapel.post') }}" method="POST" id="mapel">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Hari
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="hari" class="form-control form-control-lg"
                                            id="hari" placeholder="Masukkan Hari" value="">

                                    </fieldset>
                                </div>

                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Nama Guru
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="nama_guru" class="form-control form-control-lg"
                                            id="nama_guru" placeholder="Masukkan Tanggal Lahir" value="">

                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Jam
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="jam" class="form-control form-control-lg"
                                            id="jam" placeholder="Masukkan jam" value="">

                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Bidang Studi
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="bidang_studi" class="form-control form-control-lg"
                                            id="bidang_studi" placeholder="Masukkan Jabatan" value="">

                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="text-bold-600 font-medium-2 mb-1">
                                        Kelas
                                    </div>
                                    <fieldset class="form-label-group">
                                        <input type="text" name="kelas" class="form-control form-control-lg"
                                            id="kelas" placeholder="Masukkan Kelas" value="">

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
