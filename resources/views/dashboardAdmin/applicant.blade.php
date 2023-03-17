@extends('dashboardAdmin.layouts.main')

@section('container')
    <div class="card p-2">
        <div class="card-body text-center">
            <div class="row">
                <div class="table-responsive">
                    <form action="">
                        <table class="table table-hover">
                            <h5 class="mb-5">Detail Pengajuan</h5>
                            <thead>
                                <th scope="col">No</th>
                                <th scope="col">Submitter</th>
                                <th scope="col">Application Name</th>
                                <th scope="col">Type</th>
                                <th scope="col">Date</th>
                                <th scope="col">Attachment</th>
                                <th scope="col">Status</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Alif</td>
                                    <td>Sentra HKI</td>
                                    <td>Hak Cipta</td>
                                    <td>12/12/2022</td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <a href="formPengaju" class="btn btn-primary"><i class="fa fa-eye"></i> Review</a>
                                    </td>
                                    <td><span class="badge badge-warning" style="background-color: #FFED00">
                                        Pending</span></td>
                                </tr>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Alif</td>
                                    <td>Sentra HKI</td>
                                    <td>Hak Cipta</td>
                                    <td>12/12/2022</td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <a href="formPengaju" class="btn btn-primary"><i class="fa fa-eye"></i> Review</a>
                                    </td>
                                    <td><span class="badge badge-danger" style="background-color: #DF2E38">Rejected</span></td>
                                </tr>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Alif</td>
                                    <td>Sentra HKI</td>
                                    <td>Hak Cipta</td>
                                    <td>12/12/2022</td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <a href="formPengaju" class="btn btn-primary"><i class="fa fa-eye"></i> Review</a>
                                    </td>
                                    <td><span class="badge badge-success" style="background-color: #03C988">Accepted</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
