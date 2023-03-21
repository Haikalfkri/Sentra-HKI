@extends('user.layouts.main')

@section('container')
    <div class="row">

        <!-- Left Profile -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <p class="text-uppercase text-sm">User Information</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="form-control-label">Name</label>
                                <input class="form-control" id="name" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="amil" class="form-control-label">Email address</label>
                                <input class="form-control" id="email" type="email">
                            </div>
                        </div>
                    </div>
                    <hr class="horizontal dark">
                    <p class="text-uppercase text-sm">Contact Information</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address" class="form-control-label">Address</label>
                                <input class="form-control" id="address" type="text">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="depart" class="form-control-label">Department</label>
                                <input class="form-control" id="depart" type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Profile -->
        <div class="col-md-4">
            <div class="card card-profile">
                <img src="/theme/assets/img/poltek.jpg" alt="Image placeholder" class="card-img-top">
                <div class="row justify-content-center">
                    <div class="col-4 col-lg-4 order-lg-2">
                        <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                            <a href="javascript:;">
                                <img src="/theme/assets/img/avatar-1.png"
                                    class="rounded-circle img-fluid border border-2 border-white">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="text-center mt-4">
                        <h5>
                            Haikal Fikri
                        </h5>
                        <div class="h6 font-weight-300">
                            Teknik Informatika
                        </div>
                        <div class="h6 mt-4">
                            text@gmail.com
                        </div>
                        <div>
                            <i class="ni education_hat mr-2"></i>Politeknik Negeri Batam
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
