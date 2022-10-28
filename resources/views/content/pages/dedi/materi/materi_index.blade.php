@extends('layouts/dedi/contentLayoutMaster')

@section('title', 'MATERI PELAJARAN ')

{{-- page main content --}}
@section('content')

    <!-- Bordered table start -->
    <div class="row" id="table-bordered">
        <div class="col-12">
            <a href="{{ route('dedi.materi.tambah') }}"><button type="button"
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

                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($materi as $item)
                                    <tr>
                                        <td scope="row">{{ $loop->index + 1 }}</td>
                                        <td>{{ $item->matapelajaran->mata_pelajaran }}</td>
                                        <td>{{ $item->judul_materi }}</td>
                                        <td>
                                            {{ $item->detail_materi }}
                                        </td>
                                        {{-- <td>{{ $item->gambar }}</td> --}}
                                        <td>
                                            <a href="{{ route('dedi.materi.edit', ['id' => $item->id]) }}" type="button"
                                                class="btn btn-icon btn-icon rounded-circle btn-success">
                                                <i data-feather="edit"></i>
                                            </a>
                                            <form action="{{ route('dedi.materi.delete', ['id' => $item->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-icon btn-icon rounded-circle btn-success">
                                                    <i data-feather="trash"></i>
                                                </button>
                                            </form>
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
