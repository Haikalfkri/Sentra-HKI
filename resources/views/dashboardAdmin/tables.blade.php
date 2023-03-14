@extends('dashboardAdmin.layouts.main')

@section('container')
    <div class="card p-2">
        <div class="card-body text-center">
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <th scope="col">No</th>
                            <th scope="col">Submitter</th>
                            <th scope="col">Application Name</th>
                            <th scope="col">Type</th>
                            <th scope="col">Date</th>
                            <th scope="col">Attachment</th>
                            <th scope="col">Download</th>
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
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        review
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="review"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="review">Review</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                          <label for="description">Example textarea</label>
                                                          <textarea class="form-control" id="description" rows="3"></textarea>
                                                        </div>
                                                      </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Reject</button>
                                                    <button type="button" class="btn btn-primary">Accept</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <button class="btn btn-primary">Download</button>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">2</td>
                                <td>Fadiyah</td>
                                <td>SIM PAP</td>
                                <td>Hak Cipta</td>
                                <td>12/12/2022</td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        review
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="review"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="review">Review</h5>
                                                </div>
                                                <div class="modal-body">
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Reject</button>
                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Accept</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <button class="btn btn-primary">Download</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
