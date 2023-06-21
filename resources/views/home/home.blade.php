<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="180x180" href="/theme/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/theme/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/theme/assets/img/favicon-16x16.png">
    <link rel="manifest" href="/theme/assets/img/site.webmanifest">
    <title>SIHAKI</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="homePage/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Libraries Stylesheet -->
    <link href="homePage/lib/animate/animate.min.css" rel="stylesheet">
    <link href="homePage/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="homePage/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="homePage/css/style.css" rel="stylesheet">
</head>

<body id="home" style="overflow-x: hidden;">
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small class="text-white"><i class="fa fa-map-marker-alt text-primary me-2"></i><a href="https://maps.google.com/maps?q=Batam+Centre%2C+Jl.+Ahmad+Yani" class="text-white" target="_blank">Batam Centre, Jl. Ahmad
                    Yani</a></small>
                 <small id="current-time" class="ms-4 text-white"><i class="fas fa-clock text-primary me-2"></i>9.00 am - 8.00 pm</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small class="text-white"><i class="fa fa-envelope text-primary me-2"></i><a href="mailto:info@polibatam.ac.id"  target="_blank" class="text-white">info@polibatam.ac.id</a></small>
                <small class="ms-4 text-white"><i class="fa fa-phone-alt text-primary me-2"></i><a href="tel:+62778469858" class="text-white">+62-778-469858</a></small>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn " data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="display-5 text-primary m-0">SIHAKI</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-5 p-lg-0">
                    <a href="#home" class="nav-item nav-link text-primary ">Beranda</a>
                    <a href="#about" class="nav-item nav-link text-primary ">Tentang</a>
                    <a href="{{ route('file.download', ['filename' => 'Template_dokumen_HKI']) }}"
                        class="nav-item nav-link text-primary">Templat</a>
                   <button onclick="window.location.href = '{{ route('login') }}';" class="nav-item nav-link btn btn-primary btn-lg" style="color: white; height: 40px; font-size: 15px; width: 80px;">Masuk</button>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" style="filter: brightness(90%); background-image: cover"
                        src="homePage/img/55.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8">
                                    <p
                                        class="d-inline-block border border-primary rounded text-white fw-semi-bold py-1 px-3 animated slideInDown">
                                        Selamat datang di SIHAKI</p>
                                    <h1 class="display-2 mb-4 animated slideInDown text-white">Inovasi Berkarya: Ungkapkan Kreativitasmu!</h1>
                                    <a href="#about" class="btn btn-primary py-3 px-5 animated slideInDown">Jelajahi
                                        Lebih Lanjut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div id="about" class="container-xxl py-1">
        <div class="container mt-lg-2 mb-2">
            <div class="container" style="display: flex; justify-content: space-between;">

                <div class="container my-4 justify-content-center text-center pt-4">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="theme/assets/img/logo-ki-web.jpg" class="img-fluid" alt="" style="max-width: 350px;">
                        </div>
                        <div class="col-md-8 pt-5">
                            <h2 class="section-title text-center mb-3">Pusat Hak Kekayaan Intelektual (HKI)</h2>
                            <p>Pusat Hak Kekayaan Intelektual (HKI) adalah lembaga yang bertanggung jawab untuk melayani para peneliti, inventor, dan sivitas akademika dalam hal konsultasi, pengurusan, dan perlindungan hak kekayaan intelektual. Pusat HKI berkomitmen untuk memfasilitasi percepatan perolehan HKI atas hasil-hasil penelitian dan Pengabdian kepada Masyarakat (PPM) yang dihasilkan oleh sivitas akademika Politeknik Negeri Batam dan juga masyarakat luas. Salah satu tujuan utama Pusat HKI adalah mendorong komersialisasi produk-produk yang dilindungi HKI, dengan fokus khusus pada produk inovatif yang berasal dari sivitas akademika.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeIn" data-wow-delay="0.3s">
                        <div class="h-100">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square  bg-primary" style="border-radius: 80%;">
                                    <i class="fa fa-users text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>Hak Cipta</h4>
                                    <span>merupakan salah satu bagian dari kekayaan intelektual yang memiliki cakupan
                                        objek yang dilindungi paling luas.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


 <!-- Time line start -->
<header>
    <div class="container text-center">
        <h1>Alur Pendaftaran</h1>
    </div>
</header>

<section class="timeline">
    <div class="container px-5">
        <div class="timeline-item">
            <div class="timeline-img"></div>
            <div class="timeline-content js--fadeInLeft">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-door-open" viewBox="0 0 16 16">
                    <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
                    <path
                        d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z" />
                </svg>
                <h3>Login sebagai pemohon</h3>
                <p>Masuk ke akun pemohon untuk memulai pengajuan HKI.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-img"></div>
            <div class="timeline-content js--fadeInLeft">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-person" viewBox="0 0 16 16">
                    <path
                        d="M0 16a7.999 7.999 0 0 1 6.158-7.797c.872-2.673 1.377-3.997 1.377-5.203A5.98 5.98 0 0 1 8 0c1.51 0 2.949.561 4.049 1.999C13.051.561 14.49 0 16 0a5.98 5.98 0 0 1 1.465 3.001c0 1.206.505 2.53 1.378 5.203A7.999 7.999 0 0 1 16 16H0zm10.605-9.835a.503.503 0 0 0-.605-.396c-1.38.28-2.2 1.724-2.2 3.493 0 1.77.82 3.214 2.2 3.493a.504.504 0 0 0 .605-.396c.184-.936.395-1.724.395-2.597s-.211-1.66-.395-2.597zm-1.6.4a3.69 3.69 0 0 0-1.6 2.195c0 .813.31 1.574.874 2.313a.507.507 0 0 0 .74 0 7.726 7.726 0 0 0 1.325-2.317A3.688 3.688 0 0 0 8 7.56a3.69 3.69 0 0 0-1.6-2.195a.503.503 0 0 0-.608.396c-.18.938-.392 1.727-.392 2.599s.212 1.661.392 2.6a.504.504 0 0 0 .608.396c1.38-.279 2.2-1.724 2.2-3.493 0-1.769-.82-3.213-2.2-3.493zm-.805 4.783a.5.5 0 1 0-.938.346c.132.458.369.858.698 1.204.328.345.743.625 1.24.838a3.742 3.742 0 0 0 1.791 0c.497-.213.912-.493 1.24-.838.33-.346.566-.746.698-1.204a.5.5 0 1 0-.938-.346c-.131.455-.367.855-.697 1.2a2.74 2.74 0 0 1-1.29 0c-.33-.345-.566-.745-.698-1.2zm1.173-.693a.5.5 0 0 0-.658.276 1.758 1.758 0 0 1-.573.671c-.21.13-.47.223-.768.275a2.724 2.724 0 0 1-1.29 0c-.298-.052-.558-.145-.768-.275a1.76 1.76 0 0 1-.573-.671a.5.5 0 1 0-.934.358a2.757 2.757 0 0 0 .89 1.047c.246.154.537.266.877.358c.34.092.708.163 1.313.163c.605 0 .973-.071 1.313-.163c.34-.092.631-.204.877-.358a2.758 2.758 0 0 0 .89-1.047a.5.5 0 0 0-.278-.658z" />
                </svg>
                <h3>Melengkapi data diri</h3>
                <p>Lengkapi formulir profil Anda dengan informasi yang diperlukan.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-img"></div>
            <div class="timeline-content timeline-card js--fadeInRight">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-file-earmark-pdf" viewBox="0 0 16 16">
                    <path
                        d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                    <path
                        d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0-.67-1.768c-.341.12-.676.3-.998.538-.274.19-.574.44-.903.759a7.034 7.034 0 0 0-1.293 1.293c.32.297.57.628.76.903.238.323.418.657.538.999a19.719 19.719 0 0 1-1.769.669 7.68 7.68 0 0 1-.645-1.482c-.218-.371-.48-.699-.787-.897a3.079 3.079 0 0 0-1.102-.08c-.56.11-1.091.39-1.486.785A2.889 2.889 0 0 0 0 11.5c0 .78.306 1.531.897 2.122.591.59 1.342.896 2.122.896h6.93c.78 0 1.531-.306 2.122-.897.59-.59.896-1.342.896-2.122 0-.78-.306-1.531-.897-2.122a2.969 2.969 0 0 0-2.122-.896c-.78 0-1.531.306-2.122.897-.207.207-.397.425-.568.654-.17-.228-.36-.446-.567-.653z" />
                </svg>
                <h3>Isi Form dan Upload dokumen HKI</h3>
                <p>Isi formulir pengajuan dan Unggah dokumen-dokumen yang diperlukan untuk pengajuan HKI.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-img"></div>
            <div class="timeline-content js--fadeInLeft">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-cash" viewBox="0 0 16 16">
                    <path
                        d="M5.473 3.219A1.742 1.742 0 0 0 4 4.658v1.52A1.742 1.742 0 0 0 5.473 8H6v1H5.473A1.742 1.742 0 0 0 4 11.823v1.519A1.742 1.742 0 0 0 5.473 15H6v1H5.473A1.742 1.742 0 0 0 4 17.342v1.52A1.742 1.742 0 0 0 5.473 20H10V4.5c0-.846-.28-1.682-.809-2.281A3.28 3.28 0 0 0 7 1.5H5.473A1.742 1.742 0 0 0 4 3.942v-.52a1.742 1.742 0 0 0 1.473-1.223zM6 12v-1H4v1h2zm0-2v-1H4v1h2zm0-2v-1H4v1h2zm6-1h-2v1h2v1H10v1h2v1H9.227A1.742 1.742 0 0 0 8 15.342v1.519A1.742 1.742 0 0 0 9.473 18h1.054c.84 0 1.657-.206 2.375-.598.717-.392 1.318-.96 1.777-1.676A4.713 4.713 0 0 0 15 15.5v-11a3.713 3.713 0 0 0-1.244-2.778A3.717 3.717 0 0 0 11 1.5h-1.254A1.742 1.742 0 0 0 9 3.942v.52a1.742 1.742 0 0 0 1.473 1.223H14v1h-2.727a1.742 1.742 0 0 0-1.473 1.223V9z" />
                </svg>
                <h3>Menunggu Status Pengajuan</h3>
                <p>Tunggu proses verifikasi dan evaluasi pengajuan HKI Anda.</p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-img"></div>
            <div class="timeline-content timeline-card js--fadeInRight">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-check-circle" viewBox="0 0 16 16">
                    <path
                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.97 5.97a.75.75 0 0 1 0 1.06L7.53 12.53a.75.75 0 1 1-1.06-1.06l3.97-3.97a.75.75 0 0 1 1.06 0zM6.75 5.47a.8.8 0 0 1-.56-.23L3.22 2.25a.75.75 0 0 1 1.06-1.06l2.47 2.47 5.28-5.28a.75.75 0 0 1 1.06 0 .75.75 0 0 1 0 1.06L7.31 5.24a.8.8 0 0 1-.56.23z" />
                </svg>
                <h3>Selesai</h3>
                <p>Pengajuan HKI telah selesai dan Anda akan menerima konfirmasi.</p>
            </div>
        </div>
    </div>
</section>
<!-- Time line end -->


 <!-- Facts Start -->
<div class="container-fluid facts py-4 my-3">
    <div class="container py-4 pb-5 mb-3">
        <div class="row text-center mb-5">
            <div class="col">
                <h1 class="text-white">Pencapaian SIHAKI</h1>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-sm-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-check fa-3x text-white mb-3"></i>
                <h1 class="display-4 text-white" data-toggle="counter-up">{{ $lengkapCount }}</h1>
                <span class="fs-5 text-white">Lengkap</span>
                <hr class="bg-white w-25 mx-auto mb-0">
            </div>
            <div class="col-sm-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                <h1 class="display-4 text-white" data-toggle="counter-up">{{ $diprosesCount }}</h1>
                <span class="fs-5 text-white">Diproses</span>
                <hr class="bg-white w-25 mx-auto mb-0">
            </div>
            <div class="col-sm-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-file fa-3x text-white mb-3"></i>
                <h1 class="display-4 text-white" data-toggle="counter-up">{{ $totalCount }}</h1>
                <span class="fs-5 text-white">Total Ajuan</span>
                <hr class="bg-white w-25 mx-auto mb-0">
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->



    <!-- Projects Start -->
    <div class="container-xxl py-5 mt-5">
        <div class="container pt-2">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="m-5">Hak cipta yang disetujui</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.3s">
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="homePage/img/at.png" alt="">
                        <a href=""><i class="fa fa-link fa-3x text-primary"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Attendance Report</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="homePage/img/sim.png" alt="">
                        <a href=""><i class="fa fa-link fa-3x text-primary"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">SIM-PAP</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="homePage/img/pelari.jpeg" alt="">
                        <a href=""><i class="fa fa-link fa-3x text-primary"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">PELARI</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="homePage/img/findi.png" alt="">
                        <a href=""><i class="fa fa-link fa-3x text-primary"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Findi</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->

    {{-- google map --}}
    <section class="feature_area p_120" id="sambutan">
        <div class="container">
            <div class="main_title text-center" data-aos="zoom-out">
                <h2 class="mb-5">LOKASI KAMI</h2>
            </div>
            <div class="interior_inner row">
                <div class="col-lg-7 d-flex align-items-center flex-wrap" data-aos="fade-left" data-aos-offset="150"
                    data-aos-easing="ease-in-sine">
                    <div class="col-lg-11">
                        <div class='center-container-lokasi'>
                            <h3 style="font-weight: 700;">Politeknik Negeri Batam</h3><br>
                            <p>Batam Centre, Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau
                                29461</p>
                            <div class=''>
                                <p><i class="fa fa-map-marker" class='px-1'
                                        style='color: #1b5b9f; font-size: 15px;' aria-hidden="true"></i> Indonesia,
                                    Kepulauan Riau</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-flex mb-5" data-aos="fade-right" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <iframe class="rounded"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15956.231689492266!2d104.0484619!3d1.1186351!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98921856ddfab%3A0xf9d9fc65ca00c9d!2sPoliteknik%20Negeri%20Batam!5e0!3m2!1sid!2sid!4v1686129400858!5m2!1sid!2sid"
                        width="500" height="380" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
    {{-- google map ends --}}

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">SIHAKI</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Distributed By SIHAKI
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="homePage/lib/wow/wow.min.js"></script>
    <script src="homePage/lib/easing/easing.min.js"></script>
    <script src="homePage/lib/waypoints/waypoints.min.js"></script>
    <script src="homePage/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="homePage/lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="homePage/js/main.js"></script>

    {{-- js for time line --}}

    <script>
        window.addEventListener('DOMContentLoaded', function() {
            var timelineItems = document.querySelectorAll('.timeline-item');

            function revealTimelineItems() {
                for (var i = 0; i < timelineItems.length; i++) {
                    if (isElementInViewport(timelineItems[i])) {
                        timelineItems[i].classList.add('show');
                    }
                }
            }

            function isElementInViewport(element) {
                var rect = element.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }

            window.addEventListener('scroll', revealTimelineItems);
            window.addEventListener('resize', revealTimelineItems);
            revealTimelineItems();
        });
    </script>

    <script>
    // Mendapatkan elemen dengan id "current-time"
    const currentTimeElement = document.getElementById("current-time");

    // Fungsi untuk memperbarui waktu setiap detik
    function updateTime() {
        // Mendapatkan waktu saat ini
        const currentTime = new Date();

        // Mendapatkan jam, menit, dan detik saat ini
        const currentHours = currentTime.getHours();
        const currentMinutes = currentTime.getMinutes();
        const currentSeconds = currentTime.getSeconds();

        // Mengubah format waktu menjadi jam:menit:detik
        const formattedTime = `${currentHours.toString().padStart(2, "0")}:${currentMinutes.toString().padStart(2, "0")}:${currentSeconds.toString().padStart(2, "0")}`;

        // Mengupdate teks pada elemen "current-time"
        currentTimeElement.innerText = formattedTime;
    }

    // Memanggil fungsi updateTime setiap detik
    setInterval(updateTime, 1000);
    </script>
</body>

</html>
