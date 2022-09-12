@extends('layouts/chairiah/contentLayoutMaster')

@section('title', 'Daftar Gudang Kopi')

@section('content')


    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Produk Gudang</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">

                        </p>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Jenis Kopi</th>
                                    <th>Harga Kopi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>@mdo</td>
                                    <td>Aman Kuba Kopi</td>
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
