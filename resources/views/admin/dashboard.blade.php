@extends('admin/layouts/main')


@section('container')
    <div style="" class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Approve</p>
                            <h5 class="font-weight-bolder">
                                234
                            </h5>
                            <p class="mb-0">
                                <span class="text-success text-sm font-weight-bolder">Approve</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                            <i class="ni ni-check-bold text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Upload</p>
                            <h5 class="font-weight-bolder">
                                34
                            </h5>
                            <p class="mb-0">
                                <span class="text-success text-sm font-weight-bolder">Upload</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                            <i class="ni ni-single-02" aria-hidden="True"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="" class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Submitted</p>
                            <h5 class="font-weight-bolder">
                                73
                            </h5>
                            <p class="mb-0">
                                <span class="text-success text-sm font-weight-bolder">Submitted</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                            <i class="ni ni-single-02" aria-hidden="True"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-body p-3">
                    <div id="chart" class="chart"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="card card-carousel overflow-hidden h-100 p-0">
                <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
                    <div class="carousel-inner border-radius-lg h-100">
                        <div class="carousel-item h-100 active"
                            style="background-image: url('/theme/assets/img/atd-report.jpeg');
                            background-size: cover;">
                        </div>
                        <div class="carousel-item h-100"
                            style="background-image: url('/theme/assets/img/simpap.jpeg');
                            background-size: cover;">
                        </div>
                        <div class="carousel-item h-100"
                            style="background-image: url('/theme/assets/img/pelari.jpeg');
                            background-size: cover;">
                        </div>
                        <div class="carousel-item h-100"
                            style="background-image: url('/theme/assets/img/findi.jpeg');
                            background-size: cover;">
                        </div>
                    </div>
                    <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>


    </div>
@endsection
