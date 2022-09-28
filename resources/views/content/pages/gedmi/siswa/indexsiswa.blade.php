@extends('layouts/gedmi/contentLayoutMaster')

@section('title', 'DATA SISWA')

{{-- page main content --}}
@section('content')

    <!-- Bordered table start -->
    <div class="row" id="table-bordered">
        <div class="col-3">
            <div class="form-group">
                <select class="select2 form-control">
                    <option value="pilih">Pilih</option>
                    <option value="kelas">Kelas VII</option>
                    <option value="rectangle">Kelas VIII</option>
                    <option value="rombo">Kelas IX</option>

                </select>
            </div>
        </div>
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
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Tahun Masuk</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Agama</th>
                                        <th>Alamat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataSiswa as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->index + 1 }}</th>
                                            <td>{{ $item->nis }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->tempat_lahir }}</td>
                                            <td>{{ $item->tanggal_lahir }}</td>
                                            <td>{{ $item->tahun_masuk }}</td>
                                            <td>{{ $item->jenis_kelamin }}</td>
                                            <td>{{ $item->agama }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button"
                                                        class="btn btn-sm dropdown-toggle hide-arrow py-0"
                                                        data-bs-toggle="dropdown">
                                                        <i data-feather="more-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="{{ route('gedmi.edit.siswa') }}">
                                                            <i data-feather="edit-2" class="me-50"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i data-feather="trash" class="me-50"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                        <a class="dropdown-item" href="{{ route('gedmi.detail.siswa') }}">
                                                            <i data-feather="info" class="me-50"></i>
                                                            <span>Detail</span>
                                                        </a>
                                                    </div>
                                                </div>
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

        <a href="{{ route('gedmi.tambah.test') }}"><button type="button"
                class="btn btn-relief-primary mr-1 mb-1 float-right">Tambah

            </button>
            <!-- Bordered table end -->
        @endsection
