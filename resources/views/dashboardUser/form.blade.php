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


                        <h4 style="margin-top: 50px;">File</h4>
                        <div class="form-group">
                            <label for="pengalihan" class="form-label">Surat Pengalihan</label>
                            <input style="cursor:pointer;" class="form-control mb-3" id="pengalihan" type="file" required>
                        </div>
                        <div class="form-group">
                            <label for="ktp" class="form-label">KTP <span style="margin-left:10px; font-size: 10px; color:grey;">*file should be pdf</span></label>
                            <input style="cursor:pointer;" class="form-control mb-3" id="ktp" type="file" required>
                        </div>
                        <div>
                            <label for="pernyataan" class="form-label">Pernyataan</label>
                            <input style="cursor:pointer;" class="form-control mb-3" id="pernyataan" type="file"
                                required>
                        </div>
                        <div>
                            <label for="npwp" class="form-label">NPWP</label>
                            <input style="cursor:pointer;" class="form-control mb-3" id="npwp" type="file" required>
                        </div>
                        <div>
                            <label for="contohCiptaan" class="form-label">Contoh Ciptaan</label>
                            <input style="cursor:pointer;" class="form-control mb-5" id="contohCiptaan" type="file"
                                required>
                        </div>

                        <button type="submit" class="btn btn-default btn-primary btn-fill"
                            style="cursor:pointer;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
