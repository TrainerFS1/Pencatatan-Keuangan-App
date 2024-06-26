<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Uangku | Pencatatan Keuangan</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assetsLanding/img/favicon.png" rel="icon" />
    <link href="assetsLanding/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assetsLanding/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assetsLanding/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assetsLanding/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assetsLanding/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assetsLanding/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assetsLanding/css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo d-flex align-items-center">
                <a href="index.html" class="logo-img">
                    <img src="assetsLanding/img/logo.png" alt="Logo" class="img-fluid" />
                </a>
                <h1><a href="index.html" class="align-items-center">Uangku</a></h1>
            </div>

            <!-- navbar section -->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ '/' }}">Home</a></li>
                    <li><a href="{{ '/fitur' }}">Fitur</a></li>
                    <li><a href="{{ '/about' }}">About</a></li>
                    <li><a class="active" href="{{ '/contact' }}">Contact Us</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <main id="main">
        <section class="hero-section inner-page">
            <div class="wave">
                <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                            <path
                                d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z"
                                id="Path"></path>
                        </g>
                    </g>
                </svg>
            </div>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <div class="col-md-7 text-center hero-text">
                                <h1 data-aos="fade-up" data-aos-delay="">Kontak Kami</h1>
                                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Punya pertanyaan, saran, atau
                                    ingin berkolaborasi? Jangan ragu untuk menghubungi kami! Kami siap membantu Anda
                                    dengan segala kebutuhan Anda.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row mb-5 align-items-end">
                    <div class="col-md-6" data-aos="fade-up">
                        <h2>Kontak Form</h2>
                        <p class="mb-0">Isi formulir di bawah ini untuk terhubung dengan kami. Kami siap membantu
                            dengan pertanyaan, saran, atau permintaan Anda.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 ms-auto order-2" data-aos="fade-up">
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <strong class="d-block mb-1">Alamat</strong>
                                <span> Kota Salatiga, Jawa Tengah, Indonesia</span>
                            </li>
                            <li class="mb-3">
                                <strong class="d-block mb-1">Phone</strong>
                                <span>+1 232 3235 324</span>
                            </li>
                            <li class="mb-3">
                                <strong class="d-block mb-1">Email</strong>
                                <span>Gamelab.id</span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        required />
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label for="name">Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        required />
                                </div>
                                <div class="col-md-12 form-group mt-3">
                                    <label for="name">Subjek</label>
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        required />
                                </div>
                                <div class="col-md-12 form-group mt-3">
                                    <label for="name">Pesan</label>
                                    <textarea class="form-control" name="message" required></textarea>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Pesan Kamu Telah Terkirim. Terimakasih!</div>
                                </div>

                                <div class="col-md-6 form-group">
                                    <input type="submit" class="btn btn-primary d-block w-100"
                                        value="Kirim Pesan" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= CTA Section ======= -->
        <section class="section cta-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 me-auto text-center text-md-start mb-5 mb-md-0">
                        <h2>Starts Publishing Your Apps</h2>
                    </div>
                    <div class="col-md-5 text-center text-md-end">
                        <p>
                            <a href="#" class="btn d-inline-flex align-items-center"><i
                                    class="bx bxl-apple"></i><span>App store</span></a>
                            <a href="#" class="btn d-inline-flex align-items-center"><i
                                    class="bx bxl-play-store"></i><span>Google play</span></a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End CTA Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer class="footer" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h3>Tentang Uangku</h3>
                    <p>
                        Uangku adalah aplikasi pencatatan keuangan pribadi yang dirancang untuk membantu pengguna
                        mengelola pengeluaran dan pendapatan mereka dengan lebih efektif dan efisien. Aplikasi ini
                        menawarkan berbagai fitur yang memungkinkan
                        pengguna untuk memantau arus kas, membuat anggaran, serta mendapatkan laporan keuangan yang
                        rinci.
                    </p>
                </div>
                <div class="col-md-7 ms-auto">
                    <div class="row site-section pt-0">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3>Navigasi</h3>
                            <ul class="list-unstyled">
                                <li><a href="{{ '/' }}">Home</a></li>
                                <li><a href="{{ '/fitur' }}">Features</a></li>
                                <li><a href="{{ '/about' }}">About</a></li>
                                <li><a href="{{ '/contact' }}">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3>Support</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Hubungi Kami</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3>Temukan dan Ikuti Kami</h3>
                            <ul class="social">
                                <a href="#"><span class="bi bi-twitter"></span></a>
                                <a href="#"><span class="bi bi-facebook"></span></a>
                                <a href="#"><span class="bi bi-instagram"></span></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-md-7">
                    <p class="copyright">&copy; Copyright Uangku. All Rights Reserved</p>
                    <div class="credits">
                        <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=SoftLand
          -->
                        Designed by <a href="https://bootstrapmade.com/">GAMELAB INDONESIA</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assetsLanding/vendor/aos/aos.js"></script>
    <script src="assetsLanding/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assetsLanding/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assetsLanding/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assetsLanding/js/main.js"></script>
</body>

</html>
