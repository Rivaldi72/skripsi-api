@extends('layouts/gedmi/contentLayoutMaster')

@section('title', 'Mata Pelajaran ')

{{-- page main content --}}
@section('content')

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
                                        <th>Hari</th>
                                        <th>Jam</th>
                                        <th>Nama Guru</th>
                                        <th>B. Studi</th>
                                        <th>Kelas</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($mapel as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->index + 1 }}</th>
                                            <td>{{ $item->hari }}</td>
                                            <td>{{ $item->jam }}</td>
                                            <td>{{ $item->nama_guru }}</td>
                                            <td>{{ $item->bidang_studi }}</td>
                                            <td>{{ $item->kelas }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button"
                                                        class="btn btn-sm dropdown-toggle hide-arrow py-0"
                                                        data-bs-toggle="dropdown">
                                                        <i data-feather="more-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                            href="{{ route('gedmi.edit.mapel', ['id' => $item->id]) }}">
                                                            <i data-feather="edit-2" class="me-50"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                        <form
                                                            action="{{ route('gedmi.delete.mapel', ['id' => $item->id]) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="dropdown-item">
                                                                <i data-feather="trash" class="me-50"></i>
                                                                <span>Delete</span>
                                                            </button>
                                                        </form>

                                                    </div>
                                                </div>
                                            </td>
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
                <a href="{{ route('gedmi.tambah.mapel') }}" class="btn btn-relief-primary mr-1 mb-1 float-right">
                    Tambah
                </a>
            </div>
        </div>
    </div>
    <!-- Bordered table end -->
@endsection

@section('page-script')
    <script>
        $("#filterKelas").change(function(e) {
            window.location.replace(`{{ route('gedmi.mapel.index') }}/?filter=${this.value}`)
        });
    </script>
@endsection
