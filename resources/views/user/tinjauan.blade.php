@extends('user.layouts.main')

@section('container')
    <div class="card p-2">
        <div class="card-body text-center">
            <div class="row">
                <div class="float-end">
                    <a href="{{ route('user.kembali') }}" class="btn btn-primary float-lg-start mb-5">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali
                    </a>
                </div>
                <!-- Table -->
                <form action="">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="dataTable" border="1">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Persyaratan</th>
                                    <th scope="col">Berkas</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($berkas)
                                    <tr>
                                        <td>1</td>
                                        <td>Formulir Pendaftaran</td>
                                        <td>
                                            <a href="{{ asset('storage/berkas/' . $berkas->formulir_pendaftaran) }}" target="_blank" class="btn btn-info btn-sm">
                                                <i class="fa fa-eye fa-lg" aria-hidden="true"></i> Lihat
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('berkas.edit', [$berkas->id_berkas, 'formulir_pendaftaran']) }}" class="btn btn-secondary btn-sm mr-1 float-left">
                                                <i class="fas fa-edit"></i> Ubah
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
                                        <td>
                                            <a href="{{ route('berkas.edit', [$berkas->id_berkas, 'surat_pernyataan']) }}" class="btn btn-secondary btn-sm mr-1 float-left">
                                                <i class="fas fa-edit"></i> Ubah
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
                                        <td>
                                            <a href="{{ route('berkas.edit', [$berkas->id_berkas, 'surat_pengalihan']) }}" class="btn btn-secondary btn-sm mr-1 float-left">
                                                <i class="fas fa-edit"></i> Ubah
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
                                        <td>
                                            <a href="{{ route('berkas.edit', [$berkas->id_berkas, 'ktp']) }}" class="btn btn-secondary btn-sm mr-1 float-left">
                                                <i class="fas fa-edit"></i> Ubah
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
                                        <td>
                                            <a href="{{ route('berkas.edit', [$berkas->id_berkas, 'npwp']) }}" class="btn btn-secondary btn-sm mr-1 float-left">
                                                <i class="fas fa-edit"></i> Ubah
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
                                        <td>
                                            <a href="{{ route('berkas.edit', [$berkas->id_berkas, 'contoh_ciptaan']) }}" class="btn btn-secondary btn-sm mr-1 float-left">
                                                <i class="fas fa-edit"></i> Ubah
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- Add more rows for other berkas -->
                                @endif
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
