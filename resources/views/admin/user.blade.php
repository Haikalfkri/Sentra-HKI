@extends('admin.layouts.main')

@section('container')
    <div class="card p-2">
        <div class="card-body text-center">
            <div class="row">
                <div class="table-responsive">
                    <form action="">
                        <table class="table table-hover">
                            <div class="input-group w-20 mb-3 d-flex float-end">
                                <input type="text" class="form-control" placeholder="Type here...">
                                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                            </div>
                            <thead>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Role</th>
                                <th scope="col">No Hp</th>
                                <th scope="col">Aksi</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Alif</td>
                                    <td>alif@gmail.com</td>
                                    <td>Batu Aji</td>
                                    <td>Mahasiswa</td>
                                    <td>01274381927</td>
                                    <td><a href="" type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></td></a>
                                </tr>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Alif</td>
                                    <td>alif@gmail.com</td>
                                    <td>Batam Kota</td>
                                    <td>Mahasiswa</td>
                                    <td>0123456789</td>
                                    <td><a href="" type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></td></a>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
