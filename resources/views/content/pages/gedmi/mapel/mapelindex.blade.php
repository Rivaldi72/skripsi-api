@extends('layouts/gedmi/contentLayoutMaster')

@section('title', 'Mata Pelajaran ')

{{-- page main content --}}
@section('content')

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
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">

                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Hari</th>
                                    <th>Jam</th>
                                    <th>Nama Guru</th>
                                    <th>B. Studi</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mapel as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $item->hari }}</td>
                                        <td>{{ $item->jam }}</td>
                                        <td>{{ $item->nama_guru }}</td>
                                        <td>{{ $item->bidang_studi }}</td>

                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0"
                                                    data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{ route('gedmi.edit.mapel') }}">
                                                        <i data-feather="info" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="">
                                                        <i data-feather="info" class="me-50"></i>
                                                        <span>Hapus</span>
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
    <a href="{{ route('gedmi.tambah.mapel') }}"><button type="button"
            class="btn btn-relief-primary mr-1 mb-1 float-right">Tambah

        </button>


        <!-- Bordered table end -->
    @endsection
