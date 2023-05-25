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
                    <input type="text" class="form-control" placeholder="Type here...">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                </div>
            </div>
            <form action="">
                <div class="table-responsive">
                    <table class="table" id="dataTable" border="1">
                        <thead>
                            <tr class="table-info">
                                <th scope="col">No</th>
                                <th scope="col">Nama Karya</th>
                                <th scope="col">Tipe</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Tinjau</th>
                                <th scope="col">Status</th>
                                <th scope="col">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($pengajuanHKI)
                                @forelse ($pengajuanHKI as $index => $data)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $data->judul_hki }}</td>
                                        <td>{{ $data->jenis_hki }}</td>
                                        <td>{{ $data->tgl_pengajuan }}</td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <a href="tinjauan" class="btn btn-primary btn-sm small-btn"><i class="fa fa-eye"></i> Lihat</a>
                                        </td>
                                        <td>
                                            @if ($data->status == 'Diproses')
                                                <span class="badge badge-warning" style="background-color: #FFED00">{{ $data->status }}</span>
                                            @elseif ($data->status == 'Belum Lengkap')
                                                <span class="badge badge-danger" style="background-color: #DF2E38">{{ $data->status }}</span>
                                            @elseif ($data->status == 'Lengkap')
                                                <span class="badge badge-success" style="background-color: #03C988">{{ $data->status }}</span>
                                            @endif
                                        </td>
                                        <td>{{ $data->deskripsi }}</td>
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
