@extends('user.layouts.main')

@section('container')
    <div class="row">
        <div class="col-md-20">
            <div class="card">
                <div class="card-body">
                    <form action="">
                        <h4>Data</h4>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="id">ID</label>
                                <input type="text" class="form-control" id="id" readonly>
                            </div>
                            <div class="form-group">
                                <label for="application">Nama Aplikasi</label>
                                <input type="text" class="form-control" id="application" placeholder="e.g sentra HKI" required>
                            </div>
                            <div class="form-group">
                                <label for="department">Role</label>
                                <input type="text" class="form-control" id="department" placeholder="eg. dosen, mahasiswa"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <label for="date">Tanggal</label>
                                <input type="date" class="form-control" id="date" readonly>
                            </div>
                            <div class="form-groud">
                                <label for="option">Tipe</label>
                                <select id="option" class="form-select" aria-label="Default select example">
                                    <option selected>-- Pilih --</option>
                                    <option value="1">Hak Cipta</option>
                                </select>
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
