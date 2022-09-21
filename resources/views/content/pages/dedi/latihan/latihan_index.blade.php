@extends('layouts/dedi/contentLayoutMaster')

@section('title', 'SOAL LATIHAN ')

{{-- page main content --}}
@section('content')

    <!-- Bordered table start -->
    <div class="row" id="table-bordered">
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
                                    <th>Soal</th>
                                    <th>Jawaban Benar</th>
                                    <th>Pilihan Jawaban 1</th>
                                    <th>Pilihan Jawaban 2</th>
                                    <th>Pilihan Jawaban 3</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($latihan as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $item->matapelajaran->mata_pelajaran }}</td>
                                        <td>{{ $item->soal }}</td>
                                        <td>{{ $item->jawaban_benar }} </td>
                                        <td>{{ $item->pilihan_jawaban1 }}</td>
                                        <td>{{ $item->pilihan_jawaban2 }}</td>
                                        <td>{{ $item->pilihan_jawaban3 }}</td>
                                        <td><span class="action-edit"><i class="feather icon-edit"></i></span>
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
