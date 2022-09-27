@extends('layouts/gedmi/contentLayoutMaster')

@section('title', 'SMP BINA TARUNA MEDAN ')

@section('page-style')

@endsection
{{-- page main content --}}
@section('content')


    <section id="dashboard-ecommerce">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-primary p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-users text-primary font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1">GURU</h2>
                        <p class="mb-0">17 Orang</p>
                    </div>
                    <div class="card-content">
                        <div id="line-area-chart-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-success p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-users text-primary font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1">SISWA</h2>
                        <p class="mb-0">60 orang</p>
                    </div>
                    <div class="card-content">
                        <div id="line-area-chart-2"></div>
                    </div>
                </div>
            </div>



            <div class="col-lg-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-start align-item-center mb-1">

                            <img src="{{ asset('images/gedmi/logo.png') }}" style="width: 100px; height: 130px;">
                        </div>

                    </div>
                    <p class="text-justify"
                        style="margin-right: 10px; margin-left: 10px; font-size: 20px; font-weight: bold">VISI SMP Bina
                        Taruna Medan</p>
                    <p class="text-justify" style="margin-right: 10px; margin-left: 10px">Menciptakan peserta didik yang
                        berprestasi dan berwawasan dengan dilandasi iman dan taqwa terhadap tuhan yang maha esa</p>
                    <p class="text-justify"
                        style="margin-right: 10px; margin-left: 10px; font-size: 20px; font-weight: bold">MISI SMP Bina
                        Taruna Medan</p>
                    <p class="text-justify" style="margin-right: 10px; margin-left: 10px">1. Melaksanakan proses belajar
                        mengajar yang efektif dengan meningkatkan disiplin guru dan siswa</p>
                    <p class="text-justify" style="margin-right: 10px; margin-left: 10px">2. Memotivasi siswa untuk giat
                        belajar</p>
                    <p class="text-justify" style="margin-right: 10px; margin-left: 10px">3. Menanamkan kebersamaan dan
                        kesetiakawanan sosial serta memiliki kepedulian yang tinggi</p>
                    <p class="text-justify" style="margin-right: 10px; margin-left: 10px">4. Menanamkan nilai iman dan taqwa
                        kepada tuhan yang Maha Esa melalui berbagai kegiatan dan pendidikan agama</p>
                </div>

            @endsection
