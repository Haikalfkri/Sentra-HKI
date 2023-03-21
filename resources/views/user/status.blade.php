@extends('user.layouts.main')

@section('container')
    <div class="card p-2">
        <div class="card-body text-center">
            <div class="row">
                <div class="table-responsive">
                    <form action="">
                        <table class="table table-hover">
                            <thead>
                                <th scope="col">No</th>
                                <th scope="col">Submitter</th>
                                <th scope="col">Application Name</th>
                                <th scope="col">Type</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Description</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Alif</td>
                                    <td>Sentra HKI</td>
                                    <td>Hak Cipta</td>
                                    <td>12/12/2022</td>
                                    <td>
                                        <span class="badge badge-warning" style="background-color: #FFED00">
                                            Pending</span>
                                    </td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td scope="row">2</td>
                                    <td>Fadiyah</td>
                                    <td>SIM PAP</td>
                                    <td>Hak Cipta</td>
                                    <td>12/12/2022</td>
                                    <td>
                                        <span class="badge badge-danger" style="background-color: #DF2E38">Rejected</span>
                                    </td>
                                    <td>you get accepted</td>
                                </tr>
                                <tr>
                                    <td scope="row">2</td>
                                    <td>Fadiyah</td>
                                    <td>SIM PAP</td>
                                    <td>Hak Cipta</td>
                                    <td>12/12/2022</td>
                                    <td>
                                        <span class="badge badge-success" style="background-color: #03C988">Accepted</span>
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
