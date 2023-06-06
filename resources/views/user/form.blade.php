@extends('user.layouts.main')

@section('container')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('pengajuan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h4>Form Registrasi Hak Cipta</h4>
                        <hr class="horizontal dark mt-1 mb-1">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="" value="{{ Auth::user()->userProfile->email }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="id">Nomor Induk Karyawan</label>
                                <input type="text" class="form-control" id="id" placeholder="cth : 113053" value="{{ Auth::user()->username }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="" value="{{ Auth::user()->userProfile->nama }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="date">Tanggal</label>
                                <input type="date" class="form-control" id="date" name="tgl_pengajuan" value="{{ old('tgl_pengajuan', $pengajuanHKI->tgl_pengajuan ?? '') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="application">Judul HKI</label>
                                <input type="text" class="form-control" id="application" placeholder="Masukkan Judul HKI" name="judul_hki" required value="{{ old('judul_hki', $pengajuanHKI->judul_hki ?? '') }}" >
                            </div>
                            <div class="form-group">
                                <label for="uraian">Uraian singkat Ciptaan</label>
                                <textarea class="form-control" id="uraian" name="deskripsi" rows="4" placeholder="Deskripsi" required>{{ old('deskripsi', $pengajuanHKI->deskripsi ?? '') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="department">Jabatan</label>
                                <input type="text" class="form-control" id="department" placeholder="Dosen, Laboran, Karyawan" value="{{ Auth::user()->userProfile->role }}" readonly>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="type" class="form-control-label">Jenis Permohonan</label>
                                    <select class="form-control" id="type" name="jenis_hki" required>
                                        <option value="Hak Cipta" {{ old('jenis_hki', $pengajuanHKI->jenis_hki ?? '') === 'Hak Cipta' ? 'selected' : '' }}>Hak Cipta</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pengalihan" class="form-label">Formulir permohonan pendaftaran online <span class="text-danger"> (format .doc atau .docx)*</span></label>
                            <div class="input-group mb-3">
                                <input style="cursor:pointer;" class="form-control" id="pengalihan" type="file" name="file_1[]" required>
                                <span class="input-group-text"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pengalihan" class="form-label">Surat Pengalihan Hak Cipta <span class="text-danger">(Sudah ditandatangani Direktur format .pdf)*</span></label>
                            <div class="input-group mb-3">
                                <input style="cursor:pointer;" class="form-control" id="pengalihan" type="file" name="file_2[]" required>
                                <span class="input-group-text"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ktp" class="form-label">Scan KTP Semua Pencipta <span class="text-danger"> (format .pdf)*</span></label>
                            <div class="input-group mb-3">
                                <input style="cursor:pointer;" class="form-control" id="ktp" type="file" name="file_3[]" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pernyataan" class="form-label">Surat Pernyataan Hak Cipta<span class="text-danger"> (Sudah ditandatangani Direktur format .pdf)*</span></label>
                            <div class="input-group mb-3">
                                <input style="cursor:pointer;" class="form-control" id="pernyataan" type="file" name="file_4[]" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="npwp" class="form-label">Scan NPWP Pecipta<span class="text-danger"> (bisa diwakili satu orang format .pdf)*</span></label>
                            <div class="input-group mb-3">
                                <input style="cursor:pointer;" class="form-control" id="npwp" type="file" name="file_5[]" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contohCiptaan" class="form-label">Contoh Ciptaan<span class="text-danger"> (lampiran disesuaikan dengan halaman terakhir form pendaftaran)*</span></label>
                            <div class="input-group mb-5">
                                <input style="cursor:pointer;" class="form-control" id="contohCiptaan" type="file" name="file_6[]" required multiple>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default btn-primary btn-fill float-end" style="cursor:pointer;">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
