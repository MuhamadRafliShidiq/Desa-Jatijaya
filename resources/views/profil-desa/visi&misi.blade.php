<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Portfolio Details - Website Desa Jatijaya</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('/assets/img/logokabupaten.png') }}" rel="icon">
    <link href="{{ asset('/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('/assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Append
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="portfolio-details-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <img class="#" src="{{ asset('/assets/img/logokabupaten.png') }}" alt="desajatijaya">
                <h1>Desa Jatijaya</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li class="dropdown"><a href="#"><span>Profil Desa</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{('tentangkami') }}">Tentang Kami</a></li>
                            <li><a href="{{('visimisi') }}">Visi & Misi</a></li>
                            <li><a href="#">Sejarah Desa
                                </a></li>
                            <li><a href="#">Geografis Desa</a></li>
                            <li><a href="#">Demografi Desa</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Transparansi</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">APBDesa</a></li>
                            <li><a href="#">Perencaan Pembangunan</a></li>
                            <li><a href="#">Pembangunan Desa</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Pemerintahan</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Struktur Organisasi</a></li>
                            <li><a href="#">Perangkat Desa</a></li>
                            <li><a href="#">Lembaga Desa</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Informasi Publik</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Berita Desa</a></li>
                            <li><a href="#">Pengumuman</a></li>
                            <li><a href="#">Agenda Kegiatan</a></li>
                            <li><a href="#">Galeri</a></li>
                            <li><a href="#">Download</a></li>
                            <li><a href="#">Produk Hukum</a></li>
                        </ul>
                    </li>
                    <li><a href="index.html#pricing">Potensi Desa</a></li>
                    <li><a href="index.html#team">Produk Desa</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>


        </div>
    </header>

    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Tentang Kami</h1>
                            <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio
                                sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus
                                dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="#">Profil Desa</a></li>
                        <li class="current">Visi & Misi</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Portfolio Details Section -->
        <section id="portfolio-details" class="portfolio-details section">

            <div class="container" data-aos="fade-up">

                <div class="portfolio-details-slider swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>

                    <div class="row justify-content-between gy-4 mt-4">

                        <div class="col-lg-12" data-aos="fade-up">
                            <div class="portfolio-description">
                                <h2>Visi & Misi</h2>
                                <p><b>Visi</b></p>
                                <p>
                                    Tasikmalaya yang religius atau islami, sebagai Kabupaten yang maju dan sejahtera,
                                    serta kompetitif dalam bidang agribisnis di Jawa Barat tahun 2010

                                <p><b>Misi</b>
                                </p>

                                <p>
                                <ol type="a">
                                    <li>Mewujudkan sumber daya manusia yang beriman dan bertakwa, serta berakhlakul
                                        karimah.</li>
                                    <li>Mewujudkan sumber daya manusia yang berkualitas dan mandiri</li>
                                    <li>Mewujudkan kepemerintahan yang baik dan pemerintah yang bersih</li>
                                    <li>Mewujudkan pembangunan daerah melalui pemberdayaan masyarakat</li>
                                    <li>Mewujudkan pertumbuhan ekonomi daerah melalui pembaruan agribisnis dengan di
                                        dukung oleh sektor lain</li>
                                    <li>Mewujudkan tataruang dan pengelolaan pertanahan yang berkesinambungan dan
                                        berwawasan lingkungan</li>
                                </ol>
                                </p>
                            </div>
                        </div>

                    </div>

                </div>

        </section><!-- /Portfolio Details Section -->

    </main>

    <footer id="footer" class="footer position-relative light-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Tentang Kami</span>
                    </a>
                    <p>
                        Website desa dibangun sebagai bagian dari SISTEM INFORMASI DESA yang berfungsi sebagai portal
                        informasi, transparansi,
                        dan sosialisasi pemerintah terkait tata kelola pembangunan kawasan perdesaan (pembangunan,
                        pembinaan dan pemberdayaan)
                        yang dirasakan langsung oleh masyarakat sebagai penerima manfaat.</p>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>


                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>Jl Kp. Panuusan Gng. Cikodol, Ds. Jatijaya, Kec. Gunungtanjung, Kabupaten Tasikmalaya, Jawa Barat
                        46418</p>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="sitename">Jatijaya</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <span>Ahmad Fauzi</span>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <!-- Vendor JS Files -->
    <script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('/assets/js/main.js') }}"></script>

</body>

</html>