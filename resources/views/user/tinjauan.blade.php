@extends('user.layouts.main')

@section('container')
    <div class="card p-2">
        <div class="card-body text-center">
            <div class="row">
                <div class="float-end">
                    <a href="status" class="btn btn-primary float-lg-start mb-5"><i
                            class="fa fa-arrow-left"aria-hidden="true"></i> Kembali</a>
                </div>
                <!-- Table -->
                <form action="">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <th scope="col">No</th>
                                <th scope="col">Persyaratan</th>
                                <th scope="col">Berkas</th>
                                <th scope="col">Aksi</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</td>
                                    <th>KTP</td>
                                    <th>
                                        <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye fa-lg"
                                                aria-hidden="true"></i>
                                            Lihat</a>
                                        </td>
                                        <td>
                                        <a href="" class="btn btn-secondary btn-sm mr-1 float-left"><i class="fas fa-edit"></i> Ubah</a>
                                        </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</td>
                                    <th>KTM</td>
                                    <th>
                                        <a href="" class="btn btn-info btn-sm"><i class="fa fa-eye fa-lg"
                                                aria-hidden="true"></i>
                                            Lihat</a>
                                        </td>
                                        <td>
                                        <a href="" class="btn btn-secondary btn-sm mr-1 float-left"><i class="fas fa-edit"></i> Ubah</a>
                                        </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
