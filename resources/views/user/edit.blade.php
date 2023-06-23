@extends('user.layouts.main')

@section('container')
    <div class="card p-2">
        <div class="card-body text-center">
            <div class="row">
                <div class="float-end">
                    <a href="{{ route('user.balik', ['id_berkas' => $berkas->id_berkas]) }}" class="btn btn-primary float-lg-start mb-5">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali
                    </a>
                </div>
                <!-- Form -->
                <form action="{{ route('berkas.update', [$berkas->id_berkas, $berkasField]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="{{ $berkasField }}" class="col-sm-3 col-form-label">{{ $berkasField }}</label>
                        <div class="form-group">
                            <input type="file" class="form-control" id="{{ $berkasField }}" name="{{ $berkasField }}">
                        </div>
                    </div>
                    <div class="form-group row float-end">
                        <div class="col-sm-3">
                            <a href="{{ route('user.kembali') }}" class="btn btn-secondary">Batal</a>
                        </div>
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
