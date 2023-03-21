@extends('user.layouts.main')

@section('container')
    <div class="row">
        <div class="col-md-20">
            <div class="card">
                <div class="card-body">
                    <form action="">
                        <h4 class="mt-3"">File</h4>
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

                        <a href="form" type="button" class="btn btn-secondary"><i class="fa fa-arrow-left"aria-hidden="true"></i>  Back</a>
                        
                        <button type="submit" class="btn btn-default btn-primary btn-fill float-end"
                            style="cursor:pointer;">Submit</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
