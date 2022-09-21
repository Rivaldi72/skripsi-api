@extends('layouts/geral/contentLayoutMaster')

@section('title', 'DATA USER ')

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
                                    <th>Username</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Tanggal Lahir</th>
                                    <th>No. Handphone</th>
                                    <th>Keahlian</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataUser as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $item->username }}</td>
                                        <td>{{ $item->nama_lengkap }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->tanggal_lahir }}</td>
                                        <td>{{ $item->no_hp }}</td>
                                        <td>{{ $item->keahlian }}</td>
                                        <td class="product-action">
                                            <span class="action-edit"><i data-feather=edit></i></span>
                                            <span class="action-delete"><i data-feather=trash></i></span>
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
