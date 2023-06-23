@extends('admin.layouts.main')

@section('container')
    <div class="card p-2">
        <div class="card-body text-center">
            <div class="row">
                <div class="float-end">
                    <a href="{{ route('admin.index') }}" class="btn btn-secondary float-lg-start mb-5">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali
                    </a>
                    <a href="{{ route('admin.berkas.downloadAll') }}" class="btn btn-primary float-end mb-5">Download</a>
                </div>
                <!-- Table -->
                <h4 style="text-align: left; margin-left: 25px">Detail Pengajuan</h4>
                <div class="col-md-12">
                    <div class="card-body table-responsive">
                        <table class="table">
                            <tr>
                                <td width="300">Email</td>
                                <td width="5">:</td>
                                <td>{{ $pengaju->userProfile->email ?? '' }}</td>
                            </tr>
                            <tr>
                                <td>Nomor Induk Karyawan</td>
                                <td>:</td>
                                <td>{{ $pengaju->username ?? '' }}</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{ $pengaju->userProfile->nama ?? '' }}</td>
                            </tr>
                            <tr>
                                <td>Sebagai</td>
                                <td>:</td>
                                <td>{{ $pengaju->userProfile->role ?? '' }}</td>
                            </tr>
                            <tr>
                                <td width="300">Jenis Ciptaan</td>
                                <td width="5">:</td>
                                <td>{{ $pengajuanHKI->jenis_ciptaan ?? '' }}</td>
                            </tr>
                            <tr>
                                <td width="300">Sub Jenis Ciptaan</td>
                                <td width="5">:</td>
                                <td>{{ $pengajuanHKI->subjenis_ciptaan ?? '' }}</td>
                            </tr>
                            <tr>
                                <td>Judul HKI</td>
                                <td>:</td>
                                <td>{{ $pengajuanHKI->judul_hki ?? '' }}</td>
                            </tr>
                            <tr>
                                <td>Uraian singkat Ciptaan</td>
                                <td>:</td>
                                <td>{{ $pengajuanHKI->deskripsi ?? '' }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <h4 style="text-align: left; margin-left: 25px" class="mb-4 mt-2">Berkas</h4>
                <form action="">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="dataTable" border="1">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Persyaratan</th>
                                    <th scope="col">Berkas</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($berkas)
                                    <tr>
                                        <td>1</td>
                                        <td>Formulir Pendaftaran</td>
                                        <td>
                                            <a href="{{ asset('storage/berkas/' . $berkas->formulir_pendaftaran) }}" target="_blank" class="btn btn-info btn-sm">
                                                <i class="fa fa-eye fa-lg" aria-hidden="true"></i> Lihat
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Surat Pernyataan</td>
                                        <td>
                                            <a href="{{ asset('storage/berkas/' . $berkas->surat_pernyataan) }}" target="_blank" class="btn btn-info btn-sm">
                                                <i class="fa fa-eye fa-lg" aria-hidden="true"></i> Lihat
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Surat Pengalihan</td>
                                        <td>
                                            <a href="{{ asset('storage/berkas/' . $berkas->surat_pengalihan) }}" target="_blank" class="btn btn-info btn-sm">
                                                <i class="fa fa-eye fa-lg" aria-hidden="true"></i> Lihat
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Scan KTP</td>
                                        <td>
                                            <a href="{{ asset('storage/berkas/' . $berkas->ktp) }}" target="_blank" class="btn btn-info btn-sm">
                                                <i class="fa fa-eye fa-lg" aria-hidden="true"></i> Lihat
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>NPWP</td>
                                        <td>
                                            <a href="{{ asset('storage/berkas/' . $berkas->npwp) }}" target="_blank" class="btn btn-info btn-sm">
                                                <i class="fa fa-eye fa-lg" aria-hidden="true"></i> Lihat
                                            </a>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Contoh Ciptaan</td>
                                        <td>
                                            <a href="{{ asset('storage/berkas/' . $berkas->contoh_ciptaan) }}" target="_blank" class="btn btn-info btn-sm">
                                                <i class="fa fa-eye fa-lg" aria-hidden="true"></i> Lihat
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- Add more rows for other berkas -->
                                @endisset
                            </tbody>
                        </table>
                    </div>
                </form>


                <div class="d-flex justify-content-end mt-4">
                <!-- Reject Button -->
                <!-- Reject button -->
                <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#RejectBtn" style="margin-right: 10px;">Perbaikan</button>
                <div id="RejectBtn" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Deskripsi</h4>
                            </div>
                            <form action="{{ route('admin.applicant.reject', ['id_pengajuanhki' => $pengajuanHKI->id_pengajuanhki]) }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <!-- Description -->
                                    <div class="form-group">
                                        <textarea class="form-control" name="keterangan" rows="3" required></textarea>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary" value="Simpan" style="float: right; margin-right: 10px;">
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Accept button -->
                <button type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#AcceptBtn">Terima</button>
                <div id="AcceptBtn" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Deskripsi</h4>
                            </div>
                            <form action="{{ route('admin.applicant.accept', ['id_pengajuanhki' => $pengajuanHKI->id_pengajuanhki]) }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <!-- Description -->
                                    <div class="form-group">
                                        <textarea class="form-control" name="keterangan" rows="3" required></textarea>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary" value="Simpan" style="float: right; margin-right: 10px;">
                            </form>
                        </div>
                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>
@endsection
