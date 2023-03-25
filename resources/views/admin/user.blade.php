@extends('admin.layouts.main')

@section('container')
    <div class="card p-2">
        <div class="card-body text-center">

            <div class="row">
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-primary input-group w-10 align-self-end" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" style="background-color: #0D6EFD
                        ">
                        <i class="fa fa-plus mt-1"><span style="margin-left: 10px;">Tambah</span></i>
                    </button>

                    <div class="input-group w-20 mb-3 d-flex">
                        <input type="text" class="form-control align-self-start" placeholder="Type here...">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    </div>

                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
                                <span class="close" data-bs-dismiss="modal" aria-label="Close"aria-hidden="true" style="cursor: pointer;"><i class="fa fa-times"></i></span>
                            </div>
                            <div class="modal-body">
                                <form action="">

                                    <div class="form-group">
                                        <div class="form-group" style="text-align: left">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" required>
                                        </div>
                                        <div class="form-group" style="text-align: left">
                                            <label for="pwd">Password</label>
                                            <input type="password" class="form-control" id="pwd" required>
                                        </div>
                                        <div class="form-group" style="text-align: left">
                                            <label for="role">Role</label>
                                            <input type="text" class="form-control" id="role" required>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                        class="fa fa-times"></i> Batal</button>
                                <button type="button" class="btn"
                                    style="background-color: #0D6EFD; color:#FFF;
                                "><i
                                        class="fas fa-save"></i> Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>


                <form action="">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <th scope="col">No</th>
                                <th scope="col">ID</th>
                                <th scope="col">Email</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Role</th>
                                <th scope="col">No Hp</th>
                                <th scope="col">Aksi</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>4342201016</td>
                                    <td>alif@gmail.com</td>
                                    <td>Batu Aji</td>
                                    <td>Mahasiswa</td>
                                    <td>01274381927</td>
                                    <td><a href="" type="button" class="btn btn-danger"><i class="fa fa-trash"
                                                aria-hidden="true"></i></td></a>
                                </tr>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>434220015</td>
                                    <td>alif@gmail.com</td>
                                    <td>Batam Kota</td>
                                    <td>Mahasiswa</td>
                                    <td>0123456789</td>
                                    <td><a href="" type="button" class="btn btn-danger"><i class="fa fa-trash"
                                                aria-hidden="true"></i></td></a>
                                </tr>
                            </tbody>
                        </table>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
