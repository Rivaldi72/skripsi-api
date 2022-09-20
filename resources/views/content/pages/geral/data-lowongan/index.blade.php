@extends('layouts/geral/contentLayoutMaster')

@section('title', 'DATA LOWONGAN ')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/animate/animate.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/sweetalert2.min.css')) }}">
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
                                    <th>Kota</th>
                                    <th>Deskripsi</th>
                                    <th>alamat</th>
                                    <th>Syarat</th>
                                    <th>Fasilitas</th>
                                    <th>Tipe Pekerjaan</th>
                                    <th>Tipe Posisi</th>
                                    <th>Pendidikan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>UI/UX Designer</td>
                                    <td>Cv. Jaya Abadi Mesra</td>
                                    <td>Medan</td>
                                    <td>..........</td>
                                    <td>..........</td>
                                    <td>..........</td>
                                    <td>..........</td>
                                    <td>Magang</td>
                                    <td>Junior</td>
                                    <td class="product-action">
                                        <button class="btn"><i id="btn-edit" data-feather="edit"></i></button>
                                        <button class="btn" id="btn-hapus"><i data-feather=trash></i></button>

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

@section('vendor-script')
    <script src="{{ asset(mix('vendors/js/extensions/sweetalert2.all.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/extensions/polyfill.min.js')) }}"></script>
@endsection

@section('page-script')
    <script>
        $('#btn-hapus').on('click', function() {
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
        });
    </script>
@endsection
