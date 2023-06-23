@extends('admin.layouts.main')

@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-white">Data Pencipta</h1>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show text-white" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <div class="card">
        <div class="card-body">
            <div class="mb-4">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahPencipta">
                    Tambah
                </button>
            </div>
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" border="1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Email</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>No. HP</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($penciptas as $index => $pencipta)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $pencipta->email }}</td>
                            <td>{{ $pencipta->nik }}</td>
                            <td>{{ $pencipta->nama }}</td>
                            <td>{{ $pencipta->no_hp }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Pencipta -->
    <div class="modal fade" id="modalTambahPencipta" tabindex="-1" aria-labelledby="modalTambahPenciptaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahPenciptaLabel">Tambah Pencipta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('pencipta.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" required>
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>

                        <div class="mb-3">
                            <label for="no_hp" class="form-label">No. HP</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
