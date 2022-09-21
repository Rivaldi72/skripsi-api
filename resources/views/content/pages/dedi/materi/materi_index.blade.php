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
                                @foreach ($materi as $item)
                                    <tr>
                                        <td scope="row">{{ $loop->index + 1 }}</td>
                                        <td>{{ $item->matapelajaran->mata_pelajaran }}</td>
                                        <td>{{ $item->judul_materi }}</td>
                                        <td width="200px">
                                            {{ $item->detail_materi }}
                                        </td>
                                        <td>{{ $item->gambar }}</td>
                                        <td><a href="{{ route('dedi.materi.edit') }}"><span class="action-edit"><i
                                                        class="feather icon-edit"></i></span>
                                                <span class="action-delete"><i class="feather icon-trash"></i></span>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bordered table end -->
@endsection
