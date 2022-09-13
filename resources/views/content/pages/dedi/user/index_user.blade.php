@extends('layouts/dedi/contentLayoutMaster')

@section('title', 'AKUN YANG TERDAFTAR ')

{{-- page main content --}}
@section('content')

    <!-- Bordered table start -->
    <div class="row" id="table-bordered">
        <div class="col-12">
            <a href="{{ route('daftar.akun') }}"><button type="button"
                    class="btn btn-relief-info mr-1 mb-1 btn-success float-right">Datar Akun</button>
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
                                    <th>Password</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Leanne Graham</td>
                                    <td>sincere@april.biz</td>
                                    <td>@mdo</td>
                                    <td>sincere@april.biz</td>
                                    <td>sincere@april.biz</td>
                                    <td>sincere@april.biz</td>
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
