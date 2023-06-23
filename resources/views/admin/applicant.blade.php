@extends('admin.layouts.main')

@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-white">Data Pengajuan HKI</h1>
</div>
<div class="card p-2">
    <div class="card-body text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group w-20 mb-4 float-end text-end">
                    <input type="search" class="form-control" placeholder="Type here...">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        <form action="">
            <div class="table-responsive">
                <table class="table" id="dataTable" border="1">
                    <thead>
                        <tr class="table-info">
                            <th scope="col">No</th>
                            <th scope="col">Nomor Induk Karyawan</th>
                            <th scope="col">Judul HKI</th>
                            <th scope="col">Tanggal diumumkan</th>
                            <th scope="col">Tinjauan</th>
                            <th scope="col">Status</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($pengajuanHKI)
                            @foreach ($pengajuanHKI as $index => $data)
                                <tr>
                                    <td scope="row">{{ $index + 1 }}</td>
                                    <td>{{ $data->user->username }}</td>
                                    <td>{{ $data->judul_hki }}</td>
                                    <td>{{ $data->tgl_pengajuan }}</td>
                                    <td>
                                        @if (optional($data->berkas)->id_berkas)
                                            <a href="{{ route('admin.tinjauan', ['id_berkas' => $data->berkas->id_berkas]) }}" class="btn btn-info btn-sm">
                                                <i class="fa fa-eye fa-lg" aria-hidden="true"></i> Lihat
                                            </a>
                                        @endif
                                    </td>
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
                                </tr>
                            @endforeach
                        @endisset
                        @if ($pengajuanHKI->isEmpty())
                        <tr>
                            <td colspan="7">Tidak ada pengajuan HKI.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>
@endsection
