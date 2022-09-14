@extends('layouts/dedi/contentLayoutMaster')

@section('title', 'MATERI PELAJARAN ')

{{-- page main content --}}
@section('content')

    <!-- Bordered table start -->
    <div class="row" id="table-bordered">
        <div class="col-12">
            <a href="{{ route('dedi.materi.index') }}"><button type="button"
                    class="btn btn-relief-info mr-1 mb-1 btn-success float-right">Tambah Materi</button>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-content">
                    <div class="card-body">

                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Judul Materi</th>
                                    <th>Isi Materi</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Leanne Graham</td>
                                    <td>sincere@april.biz</td>
                                    <td width="200px">sfjjjrjajkj;l;lsd;las;ld;laskd;laskd;lkaskdkaskdlk;sdkldklskdks
                                        sds;ldlskd;lskd;lks;ldk;laskd;lskdlskd;lks;lkd;lskdlskdlksldksd
                                        asdsdasdadasdasdasdasdasddasdsdsdsdsdppriei asksalkdksd;lakldasd
                                        asdasdaskdk aslkdlkkrk;lkrkrwekr;k aslk;lak;lkek al;lask;lklakfa-spinas
                                        sdmfm;ldmfdmflmlfme;lmf;lsm;dmf;smd;lfm;ldflsm;ldfm;ldmlmlemeererrer
                                        ererererererererererklekrlkekrkekrkekrkelrlekrlkelkrlekrlekrlkelrkelk
                                    </td>
                                    <td></td>
                                    <td>
                                    <td><a href="{{ route('dedi.materi.edit') }}"><span class="action-edit"><i
                                                    class="feather icon-edit"></i></span>
                                            <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bordered table end -->
@endsection
