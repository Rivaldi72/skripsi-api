@extends('layouts/dedi/contentLayoutMaster')

@section('title', 'SMK DHARMA ANALITIKA ')

{{-- page main content --}}
@section('content')
    <div class="card">
        <div class="card-body">
            <!-- post img -->
            <img class="img-fluid rounded mb-75 " src="{{ asset('images/dedi/sekolah.png') }}" alt="avatar img" />
            <!--/ post img -->
            <p class="card-text">
                <br>
                <br>
                Identitas Sekolah <br>
                <br>
                Nama Sekolah : SMKS DHARMA ANALITIKA MEDAN<br>
                Nomor Pokok Sekolah Nasional : 10258790<br>
                Jenjang Pendidikan : SMK<br>
                Status Sekolah : Swasta<br>
                Alamat Sekolah : JLN. PANCING II NO. 40 MEDAN<br>
                RT/RW : 0 / 0<br>
                Dosun : -<br>
                Desa Kelurahan : Indra Kasih<br>
                Kecamatan : Kec. Medan Tembung<br>
                Kabupaten : Kota Medan<br>
                Provinsi : Prov. Sumatera Utara<br>
                Kode Pos : 20221<br>
                Lokasi Geografis : Lintang 3 Bujur 98<br>
                <br>
                VISI<br>
                “Menghasilkan Lulusan yang bermoral baik dan terampil sesuai kompetensi serta mampu bersaing di era
                globalisasi untuk menghadapi Masyarakat Ekonomi Asean (MEA).”<br>
                <br>
                MISI<br>
                1. Menyelengarakan pendidikan menengah Kejuruan yang bermutu dan berahlak/berbudi untuk menghasilkan
                Asisten Tenaga Laboratorium yang terampil dan Profesional sesuai dengan Kompetensi.<br>
                2. Mengembangkan kompetensi keahlian dan menerapkan IPTEK pada Proses pembelajaran<br>
                3. Membina Kemitraan dengan Dunia Usaha dan Industri dalam menghadapi pasar Global<br>
                <br>
                TUJUAN SEKOLAH<br>
                1. Mendidik Asisten Tenaga Laboratorium Kesehatan dengan Standart profesi dan Kode Etik Asisten Tenaga
                Kesehatan<br>
                2. Membimbing dan Membina SDM Kesehatan dan SDM Industri yang Menjadi Tanggung Jawabnya<br>
                3. Melaksanakan pembelajaran yang berbasis metode pembelajaran yang berorientasi pada kebutuhan pasar
                kerja<br>
                4. Mengembangkan kerjasama dengan Institusi terkait dan masyarakat untuk memanfaatkan SDM yang tersedia<br>
            </p>


        </div>
    @endsection

    @section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset(mix('vendors/js/editors/quill/katex.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/editors/quill/highlight.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/editors/quill/quill.min.js')) }}"></script>
    @endsection
    @section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/forms/form-quill-editor.js')) }}"></script>
    @endsection
