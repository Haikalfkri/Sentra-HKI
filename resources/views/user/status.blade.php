@extends('user.layouts.main')

@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-white">Data Pengajuan Saya</h1>
</div>
<div class="card p-2">
    <div class="card-body text-center">
        <div class="row">
            <div>
                <div class="input-group w-20 mb-3 d-flex float-end">
                     <form action="/admin/user" method="GET" id="search-form">
                        <input type="search" class="form-control" name="q" placeholder="Type here..." value="{{ request('judul_hki') }}" id="search-input">
                    </form>
                </div>
            </div>
            <form action="">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" border="1">
                        <thead>
                            <tr class="table-info">
                                <th scope="col">No</th>
                                <th scope="col">Judul HKI</th>
                                <th scope="col">Tanggal Pengajuan</th>
                                <th scope="col">Status</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($pengajuanHKI)
                                @forelse ($pengajuanHKI as $index => $data)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $data->judul_hki }}</td>
                                        <td>{{ $data->tgl_pengajuan }}</td>
                                        <td>
                                            @if (isset($data->rekapPengajuan) && $data->rekapPengajuan->status == 'Diproses')
                                                <span class="badge badge-warning" style="background-color: #FFED00">{{ $data->rekapPengajuan->status }}</span>
                                            @elseif (isset($data->rekapPengajuan) && $data->rekapPengajuan->status == 'Belum Lengkap')
                                                <span class="badge badge-danger" style="background-color: #DF2E38">{{ $data->rekapPengajuan->status }}</span>
                                            @elseif (isset($data->rekapPengajuan) && $data->rekapPengajuan->status == 'Lengkap')
                                                <span class="badge badge-success" style="background-color: #03C988">{{ $data->rekapPengajuan->status }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($data->rekapPengajuan)
                                                {{ $data->rekapPengajuan->keterangan }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td> <!-- Tambah button hapus -->
                                            <form id="delete-form-{{ $data->id_pengajuanhki }}" action="{{ route('user.hapus', ['id_pengajuanhki' => $data->id_pengajuanhki]) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); if (confirm('Apakah Anda yakin ingin menghapus pengajuan ini?')) document.getElementById('delete-form-{{ $data->id_pengajuanhki }}').submit();">
                                                    <i class="fas fa-trash" aria-hidden="true"></i> Hapus
                                            </button>
                                            @if ($data->berkas)
                                                <a href="{{ route('user.tinjauan', ['id_berkas' => $data->berkas->id_berkas]) }}" class="btn btn-warning btn-sm">
                                                    <i class="fa fa-edit fa-lg" aria-hidden="true"></i> edit
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7">Tidak ada pengajuan HKI.</td>
                                    </tr>
                                @endforelse
                            @endisset
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
