@extends('layouts/geral/contentLayoutMaster')

@section('title', 'DATA LOWONGAN ')

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
                                    <th>Kewajiban</th>
                                    <th>Syarat</th>
                                    <th>Fasilitas</th>
                                    <th>Tipe Pekerjaan</th>
                                    <th>Tipe Posisi</th>
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
                                        <span class="action-edit"><i data-feather=edit></i></span>
                                        <span class="action-delete"><i data-feather=trash></i></span>
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
