@extends('dashboardAdmin.layouts.main')

@section('container')
    <div class="card p-2">
        <div class="card-body text-center">
            <div class="row">
                <div class="table-responsive">
                    <form action="">
                        <table class="table table-hover">
                            <h5 class="mb-5">User</h5>
                            <thead>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Department</th>
                                <th scope="col">Action</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Alif</td>
                                    <td>alif@gmail.com</td>
                                    <td>TRPL</td>
                                    <td><a href="" type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></td></a>
                                </tr>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Alif</td>
                                    <td>alif@gmail.com</td>
                                    <td>TRPL</td>
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
