@extends('dashboardUser.layouts.main')

@section('container')
    <div class="row">
        <div class="col-md-20">
            <div class="card">
                <div class="card-body">
                    <form action="">
                        <h4>Contact</h4>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Your Name"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="application">App Name</label>
                                <input type="text" class="form-control" id="application" placeholder="e.g sentra HKI" required>
                            </div>
                            <div class="form-group">
                                <label for="type">Submission Type</label>
                                <input type="text" class="form-control" id="type" placeholder="e.g hak cipta"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="department">Department</label>
                                <input type="text" class="form-control" id="department" placeholder="Department"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" id="date">
                            </div>
                        </div>
                        
                        <div class="mt-5">
                            <a href="file" type="button" class="btn btn-primary">Next</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
