@extends('user.layouts.main')

@section('container')
    <div class="card p-2">
        <div class="card-body text-center">
            <div class="row">
                <div>
                    <div class="input-group w-20 mb-3 d-flex float-end">
                        <input type="text" class="form-control" placeholder="Type here...">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    </div>
                </div>
                <form action="">
                    <div class="table-responsive">
                        <table class="table table-hover">

                            <thead>
                                <th scope="col">No</th>
                                <th scope="col">ID</th>
                                <th scope="col">Nama Aplikasi</th>
                                <th scope="col">Tipe</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Status</th>
                                <th scope="col">Deskripsi</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>4342201015</td>
                                    <td>Sentra HKI</td>
                                    <td>Hak Cipta</td>
                                    <td>12/12/2022</td>
                                    <td>
                                        <span class="badge badge-warning" style="background-color: #FFED00">
                                            Tertunda</span>
                                    </td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td scope="row">2</td>
                                    <td>4342201015</td>
                                    <td>SIM PAP</td>
                                    <td>Hak Cipta</td>
                                    <td>12/12/2022</td>
                                    <td>
                                        <span class="badge badge-danger" style="background-color: #DF2E38">Ditolak</span>
                                    </td>
                                    <td>you get accepted</td>
                                </tr>
                                <tr>
                                    <td scope="row">3</td>
                                    <td>4342201015</td>
                                    <td>SIM PAP</td>
                                    <td>Hak Cipta</td>
                                    <td>12/12/2022</td>
                                    <td>
                                        <span class="badge badge-success" style="background-color: #03C988">Diterima</span>
                                    </td>
                                    <td>you get Rejected </td>
                                </tr>
                            </tbody>
                        </table>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
