@extends('layouts/gedmi/contentLayoutMaster')

@section('title', 'DATA SISWA')

{{-- page main content --}}
@section('content')

    <!-- Bordered table start -->
    <div class="row" id="table-bordered">
        <div class="col-3">
            <div class="form-group">
                <select class="select2 form-control">
                    <option value="kelas">Kelas VII</option>
                    <option value="rectangle">Kelas VIII</option>
                    <option value="rombo">Kelas IX</option>

                </select>
            </div>
        </div>
        <div class="col-12">
            <a href="{{ route('tambah.test') }}"><button type="button"
                    class="btn btn-relief-primary mr-1 mb-1 float-right">Tambah

                </button>
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
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Tempat, Tanggal Lahir</th>
                                    <th>Angkatan</th>
                                    <th>Alamat</th>
                                    <th>Agama</th>
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
                                    <td class="product-action">
                                        <span class="action-create"><a href="{{ route('gedmi.siswa.test') }}"><i
                                                    class="feather icon-eye"></i></span>


                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Leanne Graham</td>
                                    <td>sincere@april.biz</td>
                                    <td>@TwBootstrap</td>
                                    <td>sincere@april.biz</td>
                                    <td>sincere@april.biz</td>
                                    <td>sincere@april.biz</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Ervin Howell</td>
                                    <td>shanna@melissa.tv</td>
                                    <td>@fat</td>
                                    <td>sincere@april.biz</td>
                                    <td>sincere@april.biz</td>
                                    <td>sincere@april.biz</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Clementine Bauch</td>
                                    <td>nathan@yesenia.net</td>
                                    <td>@twitter</td>
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
