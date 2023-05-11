@extends('admin/layouts/main')


@section('container')
    <div style="" class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Disetujui</p>
                            <h5 class="font-weight-bolder">
                                234
                            </h5>
                            <p class="mb-0">
                                <span class="text-success text-sm font-weight-bolder">Disetujui</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-success shadow-success text-center mt-1 rounded-circle">
                            <i class="ni ni-check-bold text-lg opacity-10" aria-hidden="true"></i>
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
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Ditolak</p>
                            <h5 class="font-weight-bolder">
                                100
                            </h5>
                            <p class="mb-0">
                                <span class="text-danger text-sm font-weight-bolder">Ditolak</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-danger shadow-danger text-center mt-1 rounded-circle">
                            <i class="ni ni-fat-remove text-lg opacity-10" aria-hidden="true"></i>
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
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Diproses</p>
                            <h5 class="font-weight-bolder">
                                34
                            </h5>
                            <p class="mb-0">
                                <span class="text-success text-sm font-weight-bolder">Diproses</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-warning shadow-warning text-center mt-1 rounded-circle">
                            <i class="fa fa-solid fa-spinner" aria-hidden="True"></i>
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
                            <p class="text-sm mb-0 text-uppercase font-weight-bold">Total ajuan</p>
                            <h5 class="font-weight-bolder">
                                73
                            </h5>
                            <p class="mb-0">
                                <span class="text-success text-sm font-weight-bolder">Total ajuan</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow-primary text-center mt-1 rounded-circle">
                            <i class="fa fa-flag" aria-hidden="True"></i>
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
                    <div class="carousel-inner border-radius-lg h-100 mt-5">
                        <div class="carousel-item h-100 active">
                            <div class="text-center mt-3 w-80" style="font-family: jost; margin-left:40px">
                                <h4>UU Hak Cipta</h4>
                                <h5>Nomor 28 Tahun 2014</h5>
                                <div class="mt-4">
                                    <p>Setiap Orang dilarang melakukan Penggunaan Secara Komersial, Penggandaan, Pengumuman,
                                        Pendistribusian, dan/atau Komunikasi atas Potret yang dibuatnya guna kepentingan
                                        reklame atau periklanan secara komersial tanpa persetujuan tertulis dari orang yang
                                        dipotret atau ahli warisnya.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item h-100">
                            <div class="text-center mt-3 w-80" style="font-family: jost; margin-left:40px">
                                <h4>UU Hak Cipta</h4>
                                <h5>Nomor 19 Tahun 2002</h5>
                                <div class="mt-4">
                                    <p>Pencipta atau Pemegang Hak Cipta atas karya sinematografi dan Program Komputer
                                        memiliki hak untuk memberikan izin atau melarang orang lain yang tanpa
                                        persetujuannya menyewakan Ciptaan tersebut untuk kepentingan yang bersifat komersial
                                    </p>
                                </div>
                            </div>
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
