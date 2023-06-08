@extends('user.layouts.main')

@section('container')
    <div class="row">
        <!-- Left Profile -->
        <div class="col-md-8">
            <div class="card"><br>
                <div class="card-body">
                    <form action="{{ isset($userProfile) ? route('user.profile.update', $userProfile->iduser_profile) : '#' }}" method="POST">
                        @csrf
                        @method('PUT')
                        <p class="text-uppercase text-sm">Informasi Pengguna</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="username" class="form-control-label">Nomor Induk Karyawan</label>
                                    <input class="form-control" id="username" type="text" value="{{ Auth::check() ? Auth::user()->username : '' }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama" class="form-control-label">Nama</label>
                                    <input class="form-control" id="nama" type="text" name="nama" value="{{ Auth::check() && Auth::user()->userProfile ? Auth::user()->userProfile->nama : (isset($userProfile) ? $userProfile->nama : '') }}" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email" class="form-control-label">Email</label>
                                    <input class="form-control" id="email" type="email" name="email" value="{{ $errors->has('email') ? old('email') : (isset($userProfile) ? $userProfile->email : '') }}" required>
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Informasi Kontak</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="depart" class="form-control-label">Jabatan</label>
                                    <select class="form-control" id="depart" name="role" required>
                                        <option value="" disabled selected>Pilih Jabatan</option>
                                        <option value="Dosen" {{ (isset($userProfile) && $userProfile->role == 'Dosen') ? 'selected' : '' }}>Dosen</option>
                                        <option value="Laboran" {{ (isset($userProfile) && $userProfile->role == 'Laboran') ? 'selected' : '' }}>Laboran</option>
                                        <option value="Karyawan" {{ (isset($userProfile) && $userProfile->role == 'Karyawan') ? 'selected' : '' }}>Karyawan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nomor" class="form-control-label">Nomor HP/WhatsApp yang aktif</label>
                                    <input class="form-control" id="nomor" type="text" name="no_hp" value="{{ $errors->has('no_hp') ? old('no_hp') : (isset($userProfile) ? $userProfile->no_hp : '') }}" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address" class="form-control-label">Alamat</label>
                                    <textarea class="form-control" id="address" name="alamat" rows="3" required>{{ $errors->has('alamat') ? old('alamat') : (isset($userProfile) ? $userProfile->alamat : '') }}</textarea>
                                </div>
                            </div>
                        @if(session('success'))
                            <div class="text-center" style="color: black; font-size: 14px;">
                                {{ session('success') }}
                            </div>
                        @endif
                        </div>
                        <button type="submit" class="btn btn-primary mt-3 float-right">Update</button>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Right Profile -->
        <div class="col-md-4">
            <div class="card card-profile">
                <img src="/theme/assets/img/poltek.jpg" alt="Image placeholder" class="card-img-top">
                <div class="row justify-content-center">
                    <div class="col-4 col-lg-4 order-lg-2">
                        <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                            <a href="javascript:;">
                                <img src="/theme/assets/img/avatar-1.png" class="rounded-circle img-fluid border border-2 border-white">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="text-center mt-4">
                        <h5>
                            {{ $errors->has('nama') ? old('nama') : (isset($userProfile) ? $userProfile->nama : '') }}
                        </h5>
                        <div class="h6 font-weight-300">
                            Teknik Informatika
                        </div>
                        <div class="h6 mt-4">
                            {{ $errors->has('email') ? old('email') : (isset($userProfile) ? $userProfile->email : '') }}
                        </div>
                        <div>
                            <i class="ni education_hat mr-2"></i>Politeknik Negeri Batam
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
