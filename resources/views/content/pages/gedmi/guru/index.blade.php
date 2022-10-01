@extends('layouts/gedmi/contentLayoutMaster')

@section('title', 'DATA GURU ')


{{-- page main content --}}
@section('content')




    <!-- Bordered table start -->


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
                                <th>Nama Guru</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jabatan</th>
                                <th>Tamatan</th>
                                <th>Gelar</th>
                                <th>Bidang Study</th>
                                <th>Agama</th>
                                <th>Alamat</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataGuru as $item)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->tempat_lahir }}</td>
                                    <td>{{ $item->tanggal_lahir }}</td>
                                    <td>{{ $item->jabatan }}</td>
                                    <td>{{ $item->tamatan }}</td>
                                    <td>{{ $item->gelar }}</td>
                                    <td>{{ $item->bidang_studi }}</td>
                                    <td>{{ $item->agama }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0"
                                                data-bs-toggle="dropdown">
                                                <i data-feather="more-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item"
                                                    href="{{ route('gedmi.edit.guru', ['id' => $item->id]) }}">
                                                    <i data-feather="edit-2" class="me-50"></i>
                                                    <span>Edit</span>
                                                </a>
                                                <a class="dropdown-item"
                                                    href="{{ route('gedmi.delete.guru', ['id' => $item->id]) }}">
                                                    <i data-feather="trash" class="me-50"></i>
                                                    <span>Delete</span>
                                                </a>
                                                <a class="dropdown-item"
                                                    href="{{ route('gedmi.detail.guru', ['id' => $item->id]) }}">
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
    <a href="{{ route('gedmi.index.test') }}"><button type="button"
            class="btn btn-relief-primary mr-1 mb-1 float-right">Tambah

        </button>


        <!-- Bordered table end -->
    @endsection
