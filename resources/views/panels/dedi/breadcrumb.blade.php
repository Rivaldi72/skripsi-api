<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">@yield('title')</h2>
                <div class="breadcrumb-wrapper">
                    @if (@isset($breadcrumbs))
                        <ol class="breadcrumb">
                            {{-- this will load breadcrumbs dynamically from controller --}}
                            @foreach ($breadcrumbs as $breadcrumb)
                                <li class="breadcrumb-item">
                                    @if (isset($breadcrumb['link']))
                                        <a
                                            href="{{ $breadcrumb['link'] == 'javascript:void(0)' ? $breadcrumb['link'] : url($breadcrumb['link']) }}">
                                    @endif
                                    {{ $breadcrumb['name'] }}
                                    @if (isset($breadcrumb['link']))
                                        </a>
                                    @endif
                                </li>
                            @endforeach
                        </ol>
                    @endisset
            </div>
        </div>
    </div>
</div>
<div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
    <div class="mb-1 breadcrumb-right">
        <div class="dropdown">
            <button class="btn-icon btn btn-success btn-round btn-sm dropdown-toggle" type="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="grid"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="{{ url('/dedi/daftarsiswa') }}">
                    <i class="me-1" data-feather="user"></i>
                    <span class="align-middle">Daftar Siswa</span>
                </a>
                <a class="dropdown-item" href="{{ url('/dedi/materiindex') }}">
                    <i class="me-1" data-feather="book-open"></i>
                    <span class="align-middle">Materi</span>
                </a>
                <a class="dropdown-item" href="{{ url('/dedi/pratikumindex') }}">
                    <i class="me-1" data-feather="thermometer"></i>
                    <span class="align-middle">Pratikum</span>
                </a>
                <a class="dropdown-item" href="{{ url('/dedi/latihanindex') }}">
                    <i class="me-1" data-feather="edit-3"></i>
                    <span class="align-middle">Latihan</span>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
