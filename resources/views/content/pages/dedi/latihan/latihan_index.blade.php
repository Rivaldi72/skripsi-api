@extends('layouts/dedi/contentLayoutMaster')

@section('title', 'SOAL LATIHAN ')

{{-- page main content --}}
@section('content')

    <!-- Bordered table start -->
    <div class="row" id="table-bordered">
        <div class="col-12">
            <a href="{{ route('dedi.latihan.tambah') }}"><button type="button"
                    class="btn btn-relief-info mr-1 mb-1 btn-success float-right">Tambah Soal</button>
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
                                        <td>{{ $item->jawaban_beneran }} </td>
                                        <td>{{ $item->pilihan_jawaban1 }}</td>
                                        <td>{{ $item->pilihan_jawaban2 }}</td>
                                        <td>{{ $item->pilihan_jawaban3 }}</td>
                                        <td>
                                            <a href="{{ route('dedi.latihan.edit', ['id' => $item->id]) }}" type="button"
                                                class="btn btn-icon btn-icon rounded-circle btn-success">
                                                <i data-feather="edit"></i>
                                            </a>
                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-success">
                                                <i data-feather="trash"></i>
                                            </button>
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
