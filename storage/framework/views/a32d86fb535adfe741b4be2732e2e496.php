<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Desa Jatijaya - Website Desa Jatijaya</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="<?php echo e(asset('/assets/img/logokabupaten.png')); ?>" rel="icon">
  <link href="<?php echo e(asset('/assets/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('/assets/vendor/aos/aos.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('/assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('/assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?php echo e(asset('/assets/css/main.css')); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Append
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="<?php echo e(('dashboard')); ?>" class="logo d-flex align-items-center me-auto me-xl-0">
        <img class="#" src="<?php echo e(asset('/assets/img/logokabupaten.png')); ?>" alt="desajatijaya">
        <h1>Desa Jatijaya</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li class="dropdown"><a href="#"><span>Profil Desa</span> <i
                class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="<?php echo e(('tentangkami')); ?>">Tentang Kami</a></li>
              <li><a href="<?php echo e(('visimisi')); ?>">Visi & Misi</a></li>
              <li><a href="<?php echo e(('sejarah')); ?>">Sejarah Desa
                </a></li>
              <li><a href="<?php echo e(('geografi')); ?>">Geografis Desa</a></li>
              <li><a href="#">Demografi Desa</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Transparansi</span> <i
                class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">APBDesa</a></li>
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
              <li><a href="<?php echo e(('berita')); ?>">Berita Desa</a></li>
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

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="<?php echo e(asset('/assets/img/kantordesa.jpg')); ?>" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <h2 data-aos="fade-up" data-aos-delay="100">Welcome to Desa Jatijaya</h2>
            <p data-aos="fade-up" data-aos-delay="200">Kecamatan Gunung Tanjung Kabupaten Tasikmalaya
            </p>
          </div>
        </div>
        <div class="d-flex">
          <a href="https://youtu.be/eBpLkZ02Jx4?si=3rNGpzCfjPY9uGUR"
            class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span> Sekilas
              Tentang Jatijaya</span></a>
        </div>
      </div>

    </section><!-- /Hero Section -->


    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pelayanan Desa</h2>

      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
              <div>
                <h4 class="title"><a href="services-details.html" class="stretched-link">Administrasi Kependudukan :</a>
                </h4>
                <p class="description">Pembuatan dan pengurusan Kartu Tanda Penduduk (KTP), Pembuatan Kartu Keluarga
                  (KK), Akta kelahiran, kematian, perkawinan, dan perceraian, Surat pindah domisili.</p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
              <div>
                <h4 class="title"><a href="services-details.html" class="stretched-link">Pelayanan Sosial :</a></h4>
                <p class="description">Bantuan sosial seperti Program Keluarga Harapan (PKH) dan bantuan sembako,
                  Pengurusan jaminan sosial seperti BPJS Kesehatan, dan lain-lain </p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
              <div>
                <h4 class="title"><a href="services-details.html" class="stretched-link">Pendidikan dan Pelatihan :</a>
                </h4>
                <p class="description">Program pendidikan untuk anak-anak seperti PAUD dan taman kanak-kanak, Pelatihan
                  keterampilan untuk masyarakat, seperti kursus menjahit, pertanian, atau teknologi, dan lain-lain</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
              <div>
                <h4 class="title"><a href="services-details.html" class="stretched-link">Kesehatan :</a></h4>
                <p class="description">Puskesmas atau posyandu untuk pelayanan kesehatan ibu dan anak, Penyuluhan
                  kesehatan dan program imunisasi, dan lain-lain</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="500">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
              <div>
                <h4 class="title"><a href="services-details.html" class="stretched-link">Pembangunan Infrastruktur :</a>
                </h4>
                <p class="description">Pembangunan dan pemeliharaan jalan desa, Penyediaan air bersih dan sanitasi,
                  Penerangan jalan umum, dan lain-lain</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="600">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
              <div>
                <h4 class="title"><a href="services-details.html" class="stretched-link">Pelayanan Lingkungan :</a></h4>
                <p class="description">Program kebersihan lingkungan seperti gotong royong, Pengelolaan sampah, Program
                  penghijauan atau reboisasi, dan lain-lain</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->



    <!-- Team Section -->
    <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Aparat Desa Jatijaya</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="<?php echo e(asset('/assets/img/Ruswandi.png')); ?>" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4>Ruswandi</h4>
              <span>Kepala Desa Jatijaya</span>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="<?php echo e(asset('/assets/img/Iing S.png')); ?>" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4>Iing S</h4>
              <span>Sekretaris Desa Jatijaya</span>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="<?php echo e(asset('/assets/img/Uyun.png')); ?>" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4>Asep Syaiful Uyun</h4>
              <span>Kaur Keuangan Desa Jatijaya</span>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="<?php echo e(asset('/assets/img/Uyat.png')); ?>" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4>Uyat</h4>
              <span>Kaur TU dan Umum</span>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="<?php echo e(asset('/assets/img/dadang.png')); ?>" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4>Dadang</h4>
              <span>Kaur Perencanaan</span>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="<?php echo e(asset('/assets/img/aidah.png')); ?>" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4>Aidah</h4>
              <span>Staff Administrasi</span>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="<?php echo e(asset('/assets/img/Nurhaedah.png')); ?>" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4>Hj. Nurhaedah</h4>
              <span>Kasi Pelayanan Desa Jatijaya</span>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="<?php echo e(asset('/assets/img/Yuda.png')); ?>" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4>Muhammad Yuda</h4>
              <span>Kasi Kesejahteraan</span>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="<?php echo e(asset('/assets/img/Khoer.png')); ?>" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4>Hoer Apandi</h4>
              <span>Kawil Sukahurip</span>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
            <div class="member-img">
              <img src="<?php echo e(asset('/assets/img/Saeful.png')); ?>" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4>Saepul Rahman</h4>
              <span>Kawil Neglasari</span>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
            <div class="member-img">
              <img src="<?php echo e(asset('/assets/img/Cecep.png')); ?>" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4>Cecep Herdiawan</h4>
              <span>Kawil Panuusan</span>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
            <div class="member-img">
              <img src="<?php echo e(asset('/assets/img/Toto.png')); ?>" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4>Toto Heryanto</h4>
              <span>Kawil Pasirmuncang</span>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
            <div class="member-img">
              <img src="<?php echo e(asset('/assets/img/Sutisman.png')); ?>" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4>Sutisman</h4>
              <span>Kawil Rancaherang</span>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
            <div class="member-img">
              <img src="<?php echo e(asset('/assets/img/Neng Eli.png')); ?>" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4>Neng Eli</h4>
              <span>Kawil Ciroyom</span>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->


    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Jl Kp. Panuusan Gng. Cikodol, Ds. Jatijaya, Kec. Gunungtanjung, Kabupaten Tasikmalaya, Jawa Barat
                    46418</p>

                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55</p>
                  <p>+1 6678 254445 41</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com</p>
                  <p>contact@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday</p>
                  <p>9:00AM - 05:00PM</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>


        </div>

      </div>

    </section><!-- /Contact Section -->

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
  <script src="<?php echo e(asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/assets/vendor/php-email-form/validate.js')); ?>"></script>
  <script src="<?php echo e(asset('/assets/vendor/aos/aos.js')); ?>"></script>
  <script src="<?php echo e(asset('/assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/assets/vendor/purecounter/purecounter_vanilla.js')); ?>"></script>
  <script src="<?php echo e(asset('/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>

  <!-- Main JS File -->
  <script src="<?php echo e(asset('/assets/js/main.js')); ?>"></script>

</body>

</html><?php /**PATH C:\Users\RAFLI-20031908\Desktop\Desa-Jatijaya\resources\views/dashboard.blade.php ENDPATH**/ ?>