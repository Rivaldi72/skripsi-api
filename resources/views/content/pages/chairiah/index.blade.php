@extends('layouts/chairiah/contentLayoutMaster')

@section('title', 'Home')

@section('page-style')
    <link rel="stylesheet" href="{{ asset(mix('css/pages/chairiah/index.css')) }}">
@endsection

@section('content')

    <div class="content-body">
        <div id="user-profile">
            <div class="row">
                <div class="col-12">
                    <div class="profile-header mb-2">
                        <div class="relative">
                            <div class="cover-container">
                                <img class="img-fluid bg-cover rounded-0 w-100"
                                    src="{{ asset('images/chairiah/cover.jpg') }}" alt="User Profile Image">
                            </div>
                            <div class="profile-img-container d-flex align-items-center justify-content-between">


                            </div>
                        </div>
                        <div class="d-flex justify-content-end align-items-center profile-header-nav">
                            <nav class="navbar navbar-expand-sm w-100 pr-0">
                                <button class="navbar-toggler pr-0" type="button" data-toggle="collapse"
                                    data-target="navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"><i class="feather icon-align-justify"></i></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav justify-content-around w-75 ml-sm-auto">
                                        <li class="nav-item px-sm-0">

                                        <li class="nav-item px-sm-0">
                                            <a href="#" class="nav-link font-small-3">About</a>
                                        </li>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <section id="profile-info">

        </div>
        <div class="col-lg-12 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-start align-items-center mb-1">
                        <div class="avatar mr-1">
                            <img src="{{ asset('images/chairiah/2.png') }}" alt="avtar img holder" height="45"
                                width="45">
                        </div>
                        <div class="user-page-info">
                            <p class="mb-0">Takengon, Aceh Tengah</p>
                            <span class="font-small-2">12 Dec 2018 at 1:16 AM</span>
                        </div>

                    </div>
                    <p class="text-justify">Provinsi Aceh merupakan provinsi yang terletak pada bagian barat Indonesia.
                        Mayoritas mata
                        pencaharian masyarakat provinsi Aceh khususnya Kabupaten Aceh Tengah dan Gayo Lues salah satunya
                        adalah petani kopi.
                        Kopi merupakan salah satu komoditi perkebunan yang memiliki nilai ekonomis yang cukup tinggi di
                        antara tanaman perkebunan lainnya dan berperan penting sebagai sumber devisa negara. Kopi juga
                        merupakan sumber penghasilan bagi tidak kurang dari 1,5 juta jiwa petani kopi di Indonesia
                        . Lebih lanjut Rahardjo (2012) menyatakan keberhasilan agribisnis kopi membutuhkan
                        dukungan semua pihak yang terkait dalam proses produksi kopi baik saat pengolahan maupun pada saat
                        pemasaran.
                        Provinsi Aceh merupakan salah satu Provinsi penghasil kopi arabika di Indonesia. Daerah penghasil
                        kopi terbesar di Provinsi Aceh adalah kabupaten Aceh Tengah dan Bener Meriah. Luas areal perkebunan
                        kopi di kedua Kabupaten ini mencapai 80% (96 ribu hektar) dari total luas lahan kopi di Provinsi
                        Aceh (121 ribu hektar). Perkebunan kopi yang ada seluruhnya merupakan perkebunan rakyat dengan
                        jumlah petani mencapai 77 ribu Kepala Keluarga (KK) (Dinas Perkebunan Provinsi Aceh, 2014). Luas nya
                        areal pertanian membuat para petani memiliki keriteria tersendiri dalam memilih gudang kopi/tempat
                        untuk menjual hasil panen mereka pada saat musim panen, dan lagi bagi para petani di daerah pelosok
                        untuk mendapatkan informasi mengenai gudang kopi/tempat penjualan buah kopi dan juga harga jual
                        kopi, para petani membutuhkan waktu dan juga biaya transportasi ke kota untuk mensurvei gudang kopi
                        dan juga harga kopi di setiap gudangnya. </p>

                </div>
                </section>


            @endsection
