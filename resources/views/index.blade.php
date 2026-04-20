<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - EasyFolio Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Questrial:wght@400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EasyFolio
  * Template URL: https://bootstrapmade.com/easyfolio-bootstrap-portfolio-template/
  * Updated: Feb 21 2025 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">Portofolio Dika</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Beranda</a></li>
          <li><a href="#about">Tentang Saya</a></li>
          <li><a href="#skills">Keterampilan</a></li>
          <li><a href="#resume">Organisasi & Pendidikan</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Kontak Saya</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center content">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <h1>Saya <span class="highlight">Mahardika Lucky Permana Putra</span></h1>
                <p class="lead">Informatics Engineering Student | Developer | Designer UI/UX </p>
                <p>Mahasiswa D4 Teknik Informatika di Politeknik Negeri Jember PSDKU Nganjuk, Suka dengan keterampilan Design dan mengembangkan Aplikasi mobile dan web yang efisien dan berdampak luas untuk masyarakat</p>
                <div class="cta-buttons" data-aos="fade-up" data-aos-delay="300">
                    <a href="#portfolio" class="btn btn-primary">Lihat Project saya</a>
                    <a href="#contact" class="btn btn-outline">Hubungi saya</a>
                </div>
                <div class="hero-stats" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-item">
                        <span class="stat-number">10+</span>
                        <span class="stat-label">Pengalaman Design UI/UX </span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">3</span>
                        <span class="stat-label">Project Selesai</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">3</span>
                        <span class="stat-label">Pengguna Senang</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-image">
                    <!-- Gantilah ini dengan gambar profil kamu -->
                    <img src="{{ asset('assets/img/aku.jpeg') }}" alt="Profile Hero Image" class="img-fluid rounded-img img-aos" data-aos="zoom-out" data-aos-delay="300">
                </div>
            </div>
        </div>
    </div>
</section>

 
    <!-- About Section -->
    <section id="about" class="about section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang Saya</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6 position-relative" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image">
              <img src="assets/img/aku3.jpeg" alt="Profile Image" class="img-fluid rounded-4">
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">

              <p class="lead mb-4 text-justify">Saya adalah mahasiswa Teknik Informatika yang suka terhadap pengembangan aplikasi mobile dan web. semangat dalam belajar hal baru, konsisten dan pantang menyerah, saya selalu melihat tantangan teknis sebagai peluang untuk berkembang.</p>

              <p class="mb-4 text-justify">Saya juga telah mengimplementasikan kemampuan saya dalam proyek UMKM dan Pemerintahan yang berguna nyata, Seperti Techtopia yaitu aplikasi managemen stok konter HP, GO-Book yaitu sistem kasir toko kelontong, dan terakhir E-Deslay yaitu sistem Blai desa Banjardowo untuk memudahkan masyarakat dalam mendapatkan informasi kegiatan desa. Terakhir kemampuan komunikasi Bahasa Inggris dan fleksibilitas dalam beradaptasi.</p>

              <div class="personal-info">
                <div class="row g-4">
                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">Nama</span>
                      <span class="value">Mahardika Lucky Permana Putra</span>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">Telepon</span>
                      <span class="value">+62 813 5822 7890</span>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">Umur</span>
                      <span class="value">20 Tahun</span>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">Email</span>
                      <span class="value">dikalucky1@gmail.com</span>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">Hobi</span>
                      <span class="value">Berenang & Develop Aplikasi</span>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">Nationality</span>
                      <span class="value">Indonesia</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="signature mt-4">
                </div>
                <div class="signature-info">
                  <h4>Dikalucky</h4>
                  <p>Sukses selalu untuk diri sendiri dan berguna untuk masyarakat</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-4 skills-animation">
<!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Keterampilan</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
      </div><!-- End Section Title -->

        <!-- Skill Existing (Trello) -->
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box">
                <h3>Trello</h3>
                <p>Saya terbiasa menggunakan Trello untuk mengelola proyek, mengatur tugas, serta memantau progres pekerjaan secara terstruktur dan efisien.</p>
                <span class="text-end d-block">90%</span>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <!-- Skill Existing (VSCode & Android Studio) -->
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <div class="skill-box">
                <h3>VSCode & Android Studio (Laravel/Flutter)</h3>
                <p>Menguasai VSCode dan Android Studio untuk mengembangkan aplikasi web dan mobile menggunakan Laravel dan Flutter.</p>
                <span class="text-end d-block">95%</span>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <!-- Skill Existing (Canva & Figma) -->
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="skill-box">
                <h3>Canva & Figma</h3>
                <p>Bisa menggunakan Canva dan Figma untuk membuat desain visual seperti poster, presentasi, serta prototype UI/UX secara kreatif dan terstruktur.</p>
                <span class="text-end d-block">90%</span>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <!-- Skill Existing (Word & Excel) -->
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <div class="skill-box">
                <h3>Word & Excel</h3>
                <p>Mampu mengoperasikan Microsoft Word dan Excel dengan baik untuk kebutuhan dokumen, data, serta pembuatan laporan.</p>
                <span class="text-end d-block">85%</span>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <!-- Skill Existing (Bahasa Indonesia & Inggris) -->
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <div class="skill-box">
                <h3>Bahasa Indonesia & Inggris</h3>
                <p>Mampu berkomunikasi menggunakan Bahasa Indonesia dan Bahasa Inggris.</p>
                <span class="text-end d-block">85%</span>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
            </div>
        </div>

        <!-- Skill New (Berpikir Kritis) -->
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <div class="skill-box">
                <h3>Berpikir Kritis</h3>
                <p>Memiliki kemampuan untuk menganalisis dan mengevaluasi berbagai situasi secara objektif dan logis.</p>
                <span class="text-end d-block">85%</span>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <!-- Skill New (Problem Solving) -->
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
            <div class="skill-box">
                <h3>Problem Solving</h3>
                <p>Mampu mengidentifikasi masalah dan mencari solusi terbaik dengan pendekatan yang sistematis.</p>
                <span class="text-end d-block">80%</span>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <!-- Skill New (Mampu Bekerja Tim) -->
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="700">
            <div class="skill-box">
                <h3>Mampu Bekerja dalam Tim</h3>
                <p>Mempunyai kemampuan untuk berkolaborasi dengan anggota tim lainnya dalam mencapai tujuan bersama.</p>
                <span class="text-end d-block">95%</span>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

    </div>

</div>

    </section><!-- /Skills Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Organisasi & Pendidikan</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-12">
            <div class="resume-wrapper">
              <div class="resume-block" data-aos="fade-up">
                <h2>Organisasi</h2>
                <div class="timeline">
                  <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="timeline-left">
                      <h4 class="company">TIF Exhibition (Pameran Proyek Teknik Informatika)</h4>
                      <span class="period">Des 2025 - Jan 2026 </span>
                    </div>
                    <div class="timeline-dot"></div>
                    <div class="timeline-right">
                      <h3 class="position">Sie Acara</h3>
                      <p class="description">Bertanggung jawab dalam merancang konsep, menyusun rundown acara, dan mengatur alur pameran untuk menampilkan berbagai proyek mahasiswa setiap semester.</p>
                    </div>
                  </div>

                  <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="timeline-left">
                      <h4 class="company">Study Club dan Inkubasi  (Persiapan Lomba Nasional)</h4>
                      <span class="period">Apr 2026 - Juli 2026 </span>
                    </div>
                    <div class="timeline-dot"></div>
                    <div class="timeline-right">
                      <h3 class="position">Penanggung Jawab</h3>
                      <p class="description">
                        Mengelola program persiapan lomba nasional dengan mengoordinasikan narasumber profesional untuk meningkatkan kompetensi teknis serta kesiapan mahasiswa.
                      </p>
                      <p></p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="resume-block" data-aos="fade-up" data-aos-delay="100">
                <h2>Pendidikan</h2>

                <div class="timeline">
                  <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="timeline-left">
                      <h4 class="company">SMK PGRI 1 Nganjuk</h4>
                      <span class="period">2021-2024</span>
                    </div>
                    <div class="timeline-dot"></div>
                    <div class="timeline-right">
                      <h3 class="position">Teknik Komputer Jaringan</h3>
                      <p class="description">Peringkat satu di kelas 3 SMK.</p>
                    </div>
                  </div>

                  <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="timeline-left">
                      <h4 class="company">Politeknik Negeri Jember (PSDKU Nganjuk)</h4>
                      <span class="period">2024 - Sekarang</span>
                    </div>
                    <div class="timeline-dot"></div>
                    <div class="timeline-right">
                      <h3 class="position">D4 Teknik Informatika</h3>
                      <p class="description">IPK Saat Ini: 3.6 / 4.00.
                      Relevansi Mata Kuliah: Struktur Data, Workshop Mobile Framework, Workshop Sistem Informasi, Pengujian Perangkat Lunak</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Pengalaman -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>Ini hasil pengerjaan project kelompok saya setiap semester mulai dari semester 1, 2, 3 </p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-web">
            
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/techtopia.png" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-1.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-web"><i class="bi bi-eye"></i></a>
                      <a href="https://pameran-jti.polije.ac.id/product/105/techtopia"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Web & Mobile</span>
                  <h3>Techtopia (UMKM Konter Hp)</h3>
                  <p>Aplikasi manajemen operasional konter HP yang menyederhanakan kontrol stok dan pencatatan transaksi. Dilengkapi fitur pelaporan keuangan bulanan untuk memvalidasi performa pemasukan dan pengeluaran secara real-time.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-graphics">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/gobook.png" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-10.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-graphics"><i class="bi bi-eye"></i></a>
                      <a href="https://pameran-jti.polije.ac.id/product/232/go-book"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Web & Mobile</span>
                  <h3>GO-Book (UMKM Toko Kelontong)</h3>
                  <p>Sistem kasir multifungsi yang berfokus pada akurasi data finansial dan efisiensi transaksi. Fitur utama meliputi modul inventory tracking, laporan laba-rugi otomatis, serta sistem administrasi pelanggan yang mendukung cetak kartu member dan struk belanja, guna menciptakan ekosistem bisnis UMKM yang lebih terorganisir.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-motion">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/edeslay.png" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-7.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-motion"><i class="bi bi-eye"></i></a>
                      <a href="https://pameran-jti.polije.ac.id/product/427/e-deslay-elektronik-desa-layanan"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Web & Mobile</span>
                  <h3>E-Deslay</h3>
                  <p class="justify-text">Platform digital Desa Banjardowo untuk penyebaran informasi kegiatan resmi dan manajemen umpan balik masyarakat. Memfasilitasi warga dalam menyampaikan kritik serta saran demi peningkatan kualitas pelayanan dan kemajuan infrastruktur desa.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->      
          </div><!-- End Portfolio Container -->
        </div>
      </div>
    </section><!-- /Portfolio Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">
          <div class="col-lg-6">
            <div class="content" data-aos="fade-up" data-aos-delay="200">
              <div class="section-category mb-3">Bisnis bisa Kontak saya</div>
              <h2 class="display-5 mb-4">Hubungi Saya untuk Informasi Lebih Lanjut</h2>
              <p class="lead mb-4">Saya akan senang mendiskusikan lebih lanjut mengenai projek atau peluang kerjasama.</p>

              <div class="contact-info mt-5">
                <div class="info-item d-flex mb-3">
                  <i class="bi bi-envelope-at me-3"></i>
                  <span>dikalucky1@gmail.com</span>
                </div>

                <div class="info-item d-flex mb-3">
                  <i class="bi bi-telephone me-3"></i>
                  <span>+62 813 5812 1995</span>
                </div>

                <div class="info-item d-flex mb-4">
                  <i class="bi bi-geo-alt me-3"></i>
                  <span>Nganjuk Jawa Timur</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="contact-form card" data-aos="fade-up" data-aos-delay="300">
              <div class="card-body p-4 p-lg-5">

                <form action="forms/contact.php" method="post" class="php-email-form">
                  <div class="row gy-4">

                    <div class="col-12">
                      <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Anda" required="">
                    </div>

                    <div class="col-12 ">
                      <input type="email" class="form-control" name="email" placeholder="Masukkan Email Anda" required="">
                    </div>

                    <div class="col-12">
                      <input type="text" class="form-control" name="subject" placeholder="Alamat"">
                    </div>

                    <div class="col-12">
                      <textarea class="form-control" name="message" rows="6" placeholder="Tulis Pesan di sini""></textarea>
                    </div>

                    <div class="col-12 text-center">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Terima Kasih telah mengirim pesan. Thank you!</div>

                      <button type="submit" class="btn btn-submit w-100">Kirim Pesan</button>
                    </div>

                  </div>
                </form>

              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Portofolio Dika</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
      <a href="https://www.instagram.com/dikaluki_" target="_blank"><i class="bi bi-instagram"></i></a>
      <a href="https://www.linkedin.com/in/mahardika-lucky-384339404" target="_blank"><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> | <a href="https://bootstrapmade.com/tools/">DevTools</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"> </script>
  <script>
  AOS.init({
    duration: 1000,  // Durasi animasi
    once: true       // Animasi hanya terjadi sekali saat scroll
  });
</script>

</body>

</html>