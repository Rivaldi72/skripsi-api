@extends('layouts/chairiah/contentLayoutMaster')

@section('title', 'Profil Gudang Kopi')

@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                            aria-labelledby="account-pill-general" aria-expanded="true">

                            <hr>
                            <form novalidate>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-company">Nama Gudang Kopi</label>
                                                <input type="text" class="form-control" id="account-company"
                                                    placeholder="Nama Gudang Kopi">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-company">Alamat Gudang</label>
                                                <input type="text" class="form-control" id="account-company"
                                                    placeholder="Alamat Gudang">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-company">Nomor Handphone</label>
                                                <input type="text" class="form-control" id="account-company"
                                                    placeholder="Nomor Handphone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-company">Foto Gudang Kopi</label>
                                                <div class="row">
                                                    <div class="col-3"><img class="img-fluid bg-cover rounded-lg mb-1 "
                                                            style="width: 225px; height: 225px "
                                                            src="{{ asset('images/chairiah/gudang.jpg') }}"
                                                            alt="User Profile Image">
                                                    </div>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class name="file[gambar]" id="account-company"
                                                        placeholder="Pilih Foto">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                        <button type="submit"
                                            class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light px-5">Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
