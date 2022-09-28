@extends('layouts/dedi/contentLayoutMaster')

@section('title', 'AKUN YANG TERDAFTAR ')

{{-- page main content --}}
@section('content')

    <!-- Bordered table start -->
    <div class="row" id="table-bordered">
        <div class="col-12">
            <a href="{{ route('dedi.siswa.tambah') }}"><button type="button"
                    class="btn btn-relief-info mr-1 mb-1 btn-success float-right">Tambahkan Akun</button>
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
                                    <th>Nama</th>
                                    <th>Angkatan</th>
                                    <th>Tempat, Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswa as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->angkatan }}</td>
                                        <td>{{ $item->tempat }},{{ $item->tanggal_lahir }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>
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
