@extends('admin.layouts.main')

@section('container')
    <div class="card p-2">
        <div class="card-body text-center">
            <div class="row">
                <div>
                    <div class="input-group w-20 mb-4 float-end text-end">
                        <input type="search" class="form-control" placeholder="Type here...">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    </div>
                </div>
                <form action="">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <th scope="col">No</th>
                                <th scope="col">ID</th>
                                <th scope="col">Nama Karya</th>
                                <th scope="col">Tipe</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Tinjauan</th>
                                <th scope="col">Status</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>4342201016</td>
                                    <td>Sentra HKI</td>
                                    <td>Hak Cipta</td>
                                    <td>12/12/2022</td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <a href="formPengaju" class="btn btn-primary"><i class="fa fa-eye"></i> Tinjau</a>
                                    </td>
                                    <td><span class="badge badge-warning" style="background-color: #FFED00">
                                            Diproses</span></td>
                                </tr>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>4342201016</td>
                                    <td>Sentra HKI</td>
                                    <td>Hak Cipta</td>
                                    <td>12/12/2022</td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <a href="formPengaju" class="btn btn-primary"><i class="fa fa-eye"></i> Tinjau</a>
                                    </td>
                                    <td><span class="badge badge-danger" style="background-color: #DF2E38">Belum Lengkap</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>43412981319</td>
                                    <td>Sentra HKI</td>
                                    <td>Hak Cipta</td>
                                    <td>12/12/2022</td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <a href="formPengaju" class="btn btn-primary"><i class="fa fa-eye"></i> Tinjau</a>
                                    </td>
                                    <td><span class="badge badge-success" style="background-color: #03C988">Lengkap</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
