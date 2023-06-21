@extends('admin.layouts.main')

@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-white">Data Pengguna</h1>
        </div>
    <div class="card p-2">
        <div class="card-body text-center">
            <div class="row">
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-primary input-group w-10 align-self-end" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #0D6EFD; font-family: 'Helvetica Neue', Arial, sans-serif;">
                        <i class="fa fa-plus mt-0"><span style="margin-left: 2px;">Tambah</span></i>
                    </button>
                    <form action="/admin/user" method="GET" class="input-group w-20 mb-3 d-flex" id="search-form">
                        <input type="search" class="form-control" name="q" placeholder="Type here..." value="{{ request('nama') }}" id="search-input">
                    </form>
                </div>

                @if(session('notifikasi'))
                    <div class="alert alert-{{ session('type') }}" style="text-align: center; color: white; height: 40px; display: flex; align-items: center; justify-content: center;">
                        {{ session('notifikasi') }}
                    </div>
                @endif

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        <form action="/admin/user/add" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="form-group" style="text-align: left">
                                        <label for="username">Nomor Induk Karyawan</label>
                                        <input type="text" class="form-control" id="username" name="username" required>
                                    </div>
                                    <div class="form-group" style="text-align: left">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" required>
                                    </div>
                                    <div class="form-group" style="text-align: left">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>
                                    <div class="form-group" style="text-align: left">
                                        <label for="role">Sebagai</label>
                                        <select id="role" class="form-select" name="role" aria-label="Default select example" required>
                                            <option value="" selected>-- Pilih --</option>
                                            <option value="pemohon">Pemohon</option>
                                            <option value="admin">Admin</option>  
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
                                <button type="submit" class="btn btn-primary" style="background-color: #0D6EFD; color:#FFF;"><i class="fas fa-save"></i> Simpan</button>
                            </div>
                        </form>

                        </div>
                    </div>
                </div>

<form action="">
@if($errors->has('username'))
    <div class="alert alert-danger" style="text-align: center; color: white; height: 40px; display: flex; align-items: center; justify-content: center;">
        {{ $errors->first('username') }}
    </div>
@endif
@if(session('success'))
    <div class="alert alert-danger" style="text-align: center; color: white; height: 40px; display: flex; align-items: center; justify-content: center;">
    {{ session('success') }}
    </div>
@endif
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" border="1">
            <thead>
                <tr class="table-info">
                    <th scope="col">No</th>
                    <th scope="col">Nomor Induk Karyawan</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Sebagai</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
 <tbody>
    @isset($users)
        @forelse ($users as $index => $data)
            <tr>
                <td>{{ $index+1 }}</td>
                <td>{{ $data->username }}</td>
                <td>{{ $data->userProfile ? $data->userProfile->nama : '' }}</td>
                <td>{{ $data->userProfile ? $data->userProfile->email : '' }}</td>
                <td>{{ $data->userProfile ? $data->userProfile->role : '' }}</td>
                <td>{{ $data->userProfile ? $data->userProfile->no_hp : '' }}</td>
                <td>{{ $data->userProfile ? $data->userProfile->alamat : '' }}</td>
                <td>{{ $data->role }}</td>
                <td>
                    <form id="delete-form-{{ $data->id_users }}" action="{{ route('users.destroy', ['id_users' => $data->id_users]) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                    <button type="button" class="btn btn-danger btn-sm" onclick="event.preventDefault(); if (confirm('Apakah Anda yakin ingin menghapus pengguna ini?')) document.getElementById('delete-form-{{ $data->id_users }}').submit();">
                        <i class="fas fa-trash" aria-hidden="true"></i> Hapus
                    </button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Tidak ada data.</td>
            </tr>
        @endforelse
    @endisset
</tbody>

        </table>
    </div>
</form>
    </div>
    </div>
@endsection
