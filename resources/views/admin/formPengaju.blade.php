@extends('admin.layouts.main')

@section('container')
    <div class="card p-2">
        <div class="card-body text-center">
            <div class="row">
                <div class="table-responsive">
                    <a href="applicant" class="btn btn-secondary float-lg-start mb-5"><i
                            class="fa fa-arrow-left"aria-hidden="true"></i> Kembali</a>
                    <a href="" class="btn btn-primary float-end mb-5">Download</a>

                    <!-- Table -->
                    <form action="">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <th scope="col">No</th>
                                <th scope="col">Persyaratan</th>
                                <th scope="col">Berkas</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</td>
                                    <th>KTP</td>
                                    <th>
                                        <a href="" class="btn btn-primary btn-sm"><i class="fa fa-eye fa-lg"
                                                aria-hidden="true"></i>
                                            Lihat</a>
                                        </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</td>
                                    <th>KTM</td>
                                    <th>
                                        <a href="" class="btn btn-primary btn-sm"><i class="fa fa-eye fa-lg"
                                                aria-hidden="true"></i>
                                            Lihat</a>
                                        </td>

                                </tr>
                            </tbody>
                        </table>
                    </form>

                    <!-- Button -->
                    <div class="mt-5 float-end">
                        <!-- Reject Button -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#RejectBtn">Reject</button>
                        <div id="RejectBtn" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Description</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Description -->
                                        <form action="">
                                            <div class="form-group">
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Reject</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Accept button -->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#AcceptBtn">Accept</button>
                        <div id="AcceptBtn" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Description</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Description -->
                                        <form action="">
                                            <div class="form-group">
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success"
                                            data-bs-dismiss="modal">Accept</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
