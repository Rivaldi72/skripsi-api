@extends('layouts/geral/contentLayoutMaster')

@section('title', 'DATA LOWONGAN ')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/animate/animate.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/sweetalert2.min.css')) }}">
@endsection
@section('page-style')
    <style>
        table {
            white-space: nowrap;
        }
    </style>

@endsection
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
                                    <th>Posisi</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Alamat</th>
                                    <th>Kota</th>
                                    <th>Deskripsi</th>
                                    <th>Pendidikan</th>
                                    <th>Syarat</th>
                                    <th>Tipe Pekerjaan</th>
                                    <th>Tipe Posisi</th>
                                    <th>Fasilitas</th>
                                    <th>Dibuat</th>
                                    <th>Diperbarui</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataLowongan as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $item->posisi_pekerjaan }}</td>
                                        <td>{{ $item->nama_perusahaan }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->kota }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td>{{ $item->pendidikan }}</td>
                                        <td>{{ $item->syarat }}</td>
                                        <td>{{ $item->tipe_pekerjaan }}</td>
                                        <td>{{ $item->tipe_posisi }}</td>
                                        <td>{{ $item->fasilitas }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                        <td class="product-action">
                                            <a class="btn"
                                                href="{{ route('geral.edit.lowongan', ['id' => $item->id]) }}"><i
                                                    id="btn-edit" data-feather="edit"></i></a>
                                            <button class="btn" id=""
                                                onclick="hapusData({{ $item->id }})"><i
                                                    data-feather=trash></i></button>

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

@section('vendor-script')
    <script src="{{ asset(mix('vendors/js/extensions/sweetalert2.all.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/extensions/polyfill.min.js')) }}"></script>
@endsection

@section('page-script')
    <script>
        function hapusData(id) {
            Swal.fire({
                title: 'Apakah anda ingin menghapus data?',
                text: "data tidak dapat dikembalikan",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, hapus',
                customClass: {
                    confirmButton: 'btn btn-primary',
                    cancelButton: 'btn btn-outline-danger ms-1'
                },
                buttonsStyling: false
            }).then(function(result) {
                if (result.value) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Terhapus',
                        text: 'Data berhasil di hapus',
                        customClass: {
                            confirmButton: 'btn btn-success'
                        }
                    });
                }
            });
        }
    </script>
@endsection
