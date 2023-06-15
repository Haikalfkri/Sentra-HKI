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
                <small class="text-white"><i class="fa fa-map-marker-alt text-primary me-2"></i>Batam Centre, Jl. Ahmad
                    Yani</small>
                <small class="ms-4 text-white"><i class="fa fa-clock text-primary me-2"></i>9.00 am - 8.00 pm</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small class="text-white"><i class="fa fa-envelope text-primary me-2"></i>info@polibatam.ac.id</small>
                <small class="ms-4 text-white"><i class="fa fa-phone-alt text-primary me-2"></i>+62-778-469858</small>
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
                    <a href="../login" class="nav-item nav-link text-primary ">pemohon</a>
                    <a href="#about" class="nav-item nav-link text-primary ">Tentang</a>
                    <a href="{{ route('file.download', ['filename' => 'Template_dokumen_HKI']) }}"
                        class="nav-item nav-link text-primary">Template</a>
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
                                    <h1 class="display-2 mb-4 animated slideInDown text-white">Ungkapkan Kreativitasmu:
                                        Ajukan Karyamu!</h1>
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
                            <img src="theme/assets/img/logo-ki-web.jpg" class="responsive-image" alt="">
                        </div>
                        <div class="col-md-8 pt-5">
                            <h2 class="section-title text-center mb-3">Pusat Hak Kekayaan Intelektual (HKI)</h2>
                            <p>Pusat HKI memiliki fungsi melayani para peneliti dan inventor dalam konsultasi dan
                                pengurusan HKI, membantu percepatan perolehan HKI atas hasil-hasil penelitian dan PPM
                                sivitas akademika USD dan masyarakat luas, serta mendorong upaya komersialisasi produk
                                HKI, khususnya dari sivitas akademika.</p>
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
                    <h1 class="display-4 text-white" data-toggle="counter-up">234</h1>
                    <span class="fs-5 text-white">disetujui</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">34</h1>
                    <span class="fs-5 text-white">Unggah</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">73</h1>
                    <span class="fs-5 text-white">dikirimkan</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    {{-- time line start --}}
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

                <div class="timeline-content timeline-card js--fadeInRight">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-file-earmark-pdf" viewBox="0 0 16 16">
                        <path
                            d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                        <path
                            d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z" />
                    </svg>
                    <h3>Isi form pengajuan HKI</h3>
                    <p>Isi formulir pengajuan HKI dengan informasi yang diperlukan.</p>
                </div>

            </div>

            <div class="timeline-item">

                <div class="timeline-img"></div>

                <div class="timeline-content js--fadeInLeft">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-card-checklist" viewBox="0 0 16 16">
                        <path
                            d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                        <path
                            d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                    </svg>
                    <h3>Pengajuan HKI disetujui</h3>
                    <blockquote>Pengajuan HKI Anda telah disetujui setelah diverifikasi.</blockquote>
                </div>
            </div>
        </div>
    </section>

    {{-- time line end --}}

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
            <div class="main_title text-center data-aos="zoom-out">
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
</body>

</html>
