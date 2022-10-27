@extends('layouts/gedmi/contentLayoutMaster')

@section('title', 'DATA SISWA')

{{-- page main content --}}
@section('content')
    <!-- Bordered table start -->
    <div class="row" id="table-bordered">
        <div class="col-3">
            <div class="form-group mb-2">
                <select class="select2 form-control" id="filterKelas">
                    <option value="pilih" {{ Request::get('filter') == 'pilih' ? 'selected' : '' }}>Pilih</option>
                    <option value="VII" {{ Request::get('filter') == 'VII' ? 'selected' : '' }}>Kelas VII</option>
                    <option value="VIII" {{ Request::get('filter') == 'VIII' ? 'selected' : '' }}>Kelas VIII</option>
                    <option value="IX" {{ Request::get('filter') == 'IX' ? 'selected' : '' }}>Kelas IX</option>
                </select>
            </div>
        </div>
        <div class="row" id="table-bordered">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-content">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Tahun Masuk</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Agama</th>
                                        <th>Alamat</th>
                                        @if (session('role') == 'admin')
                                            <th>Action</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($dataSiswa as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->index + 1 }}</th>
                                            <td>{{ $item->nis }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->kelas }}</td>
                                            <td>{{ $item->tempat_lahir }}</td>
                                            <td>{{ $item->tanggal_lahir }}</td>
                                            <td>{{ $item->tahun_masuk }}</td>
                                            <td>{{ $item->jenis_kelamin }}</td>
                                            <td>{{ $item->agama }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            @if (session('role') == 'admin')
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button"
                                                            class="btn btn-sm dropdown-toggle hide-arrow py-0"
                                                            data-bs-toggle="dropdown">
                                                            <i data-feather="more-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item"
                                                                href="{{ route('gedmi.edit.siswa', ['id' => $item->id]) }}">
                                                                <i data-feather="edit-2" class="me-50"></i>
                                                                <span>Edit</span>
                                                            </a>
                                                            <form
                                                                action="{{ route('gedmi.delete.siswa', ['id' => $item->id]) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item">
                                                                    <i data-feather="trash" class="me-50"></i>
                                                                    <span>Delete</span>
                                                                </button>
                                                            </form>
                                                            <a class="dropdown-item"
                                                                href="{{ route('gedmi.detail.siswa', ['id' => $item->id]) }}">
                                                                <i data-feather="info" class="me-50"></i>
                                                                <span>Detail</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            @endif
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="11" class="text-center">Data Kosong</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                @if (session('role') == 'admin')
                    <a href="{{ route('gedmi.tambah.test') }}" class="btn btn-relief-primary mr-1 mb-1 float-right">
                        Tambah
                    </a>
                @endif
            </div>
        </div>
    </div>
    <!-- Bordered table end -->
@endsection

@section('page-script')
    <script>
        $("#filterKelas").change(function(e) {
            window.location.replace(`{{ route('gedmi.siswa.index') }}/?filter=${this.value}`)
        });
    </script>
@endsection
