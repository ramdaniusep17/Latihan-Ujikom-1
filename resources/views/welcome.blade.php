<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Violet Internet</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/fesnuk.png" rel="icon">
  <link href="assets/img/fesnuk.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Techie
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/smk.png" alt="">
        <h1 class="sitename">Violett.</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">Profile</a></li>
          <li><a href="#pricing">Product</a></li>
          <li><a href="#blog-posts">Article</a></li>
          <li><a href="#portfolio">Galery</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section accent-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h2>Violet internet gacor,solusi masalah jaringan ngelag.</h2>
            <p>Kami menyediakan layanan pemasangan jaringan internet yang cepat dan stabil.</p>
            <div class="d-flex">
              <a href="#pricing" class="btn-get-started">Lihat Produk</a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Profile</h3>
            <p class="fst-italic">
                Kami adalah penyedia layanan pemasangan WiFi yang berdedikasi untuk menghadirkan koneksi internet cepat,
                stabil, dan terjangkau bagi rumah, bisnis, serta komunitas Anda.
            </p>
            <p>
                Kami menawarkan berbagai paket internet yang fleksibel dan dapat disesuaikan dengan kebutuhan Anda.
            </p>
            <h7><b>Mengapa memilih kami?</b></h7>
            <p>
                ✔️ Koneksi cepat dan stabil <br>
                ✔️ Pemasangan profesional & cepat<br>
                ✔️ Paket fleksibel sesuai kebutuhan<br>
                ✔️ Layanan pelanggan responsif<br>
                Dapatkan pengalaman internet terbaik bersama kami! 🚀
            </p>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->


        <!-- Pricing Section -->
        <section id="pricing" class="pricing section">

          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <h2>Produk</h2>
            <p>Lorem ipsum dolor sit amet</p>
          </div><!-- End Section Title -->

          <div class="container">

            <div class="row gy-4">

                @foreach ($products as $item)
              <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="pricing-item">
                  <h3>{{$item->judul}}</h3>
                  <h4><sup>IDR</sup>{{$item->harga}}<span> / bulan</span></h4>
                  <ul>
                    @foreach(explode("\n", $item->keterangan) as $item)
                        <li><i class="bi bi-check"></i><span>{{ $item }}</span></li>
                    @endforeach
                </ul>
                  <a href="#" class="buy-btn">Buy Now</a>
                </div>
              </div><!-- End Pricing Item -->
              @endforeach

            </div>

          </div>

        </section><!-- /Pricing Section -->

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Artikel</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">

      <div class="container">
        <div class="row gy-4">


            @foreach ($articles as $item)
          <div class="col-lg-6">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="{{ asset('storage/' . $item->gambar) }}" class="img-fluid" alt="">
                <span class="post-date">{{$item->tanggal}}</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">{{$item->judul}}</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">{{$item->nama}}</span>
                  </div>
                </div>

                <p>
                    {{$item->deskripsi}}
                </p>
              </div>

            </article>
          </div><!-- End post list item -->
          @endforeach



        </div>
      </div>

    </section><!-- /Blog Posts Section -->

    <div class="container section-title" data-aos="fade-up">
        <h2>Artikel</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="containertk">
        <div class="card">
            <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/hero-bg.jpg" alt="Makkela Kela">
                <span class="post-datecc">JAnuari 1,2020</span>
            </div>
            <div class="card-content">
                <h2 class="card-title">Kabar Gembira, Ada Job Fair 2025 Pameran Lowongan Kerja di Bandung 14-17 April 2025, Catat Lokasinya</h2>
                <p class="card-description">Dua agenda Job Fair 2025 ini digelar di dua Kampus di Kota Bandung, yaitu Institut Teknologi Bandung (ITB) dan Itenas (Institut Teknologi Nasional).
                    Berikut catat jadwal dan lokasinya.</p>
                <div class="card-info">
                    <span class="card-date"><a href="#">Selengkapnya</a></span>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/hero-bg.jpg" alt="Makkela Kela">
                <span class="post-datecc">JAnuari 1,2020</span>
            </div>
            <div class="card-content">
                <h2 class="card-title">Kabar Gembira, Ada Job Fair 2025 Pameran Lowongan Kerja di Bandung 14-17 April 2025, Catat Lokasinya</h2>
                <p class="card-description">Dua agenda Job Fair 2025 ini digelar di dua Kampus di Kota Bandung, yaitu Institut Teknologi Bandung (ITB) dan Itenas (Institut Teknologi Nasional).
                    Berikut catat jadwal dan lokasinya.</p>
                <div class="card-info">
                    <span class="card-date"><a href="#">Selengkapnya</a></span>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/hero-bg.jpg" alt="Makkela Kela">
                <span class="post-datecc">JAnuari 1,2020</span>
            </div>
            <div class="card-content">
                <h2 class="card-title">Kabar Gembira, Ada Job Fair 2025 Pameran Lowongan Kerja di Bandung 14-17 April 2025, Catat Lokasinya</h2>
                <p class="card-description">Dua agenda Job Fair 2025 ini digelar di dua Kampus di Kota Bandung, yaitu Institut Teknologi Bandung (ITB) dan Itenas (Institut Teknologi Nasional).
                    Berikut catat jadwal dan lokasinya.</p>
                <div class="card-info">
                    <span class="card-date"><a href="#">Selengkapnya</a></span>
                </div>
            </div>
        </div>
        {{-- @empty
            <p>Data Tidak Ditemukan</p>
        @endforelse

        @forelse ($berita2s as $berita2)
        <div class="card">
            <img src="{{asset ('uploads/'. $berita2->gambar1)}}" alt="Makkela Kela">
            <div class="card-content">
                <h2 class="card-title">{{$berita2->judul}}</h2>
                <p class="card-description">{{$berita2->deskripsi1}}</p>
                <div class="card-info">
                    <span class="card-date"><a href="{{ url('berita2') }}">Selengkapnya</a></span>
                </div>
            </div>
        </div>
        @empty
            <p>Data Tidak Ditemukan</p>
        @endforelse

        @forelse ($berita3s as $berita3)
        <div class="card">
            <img src="{{asset ('uploads/'. $berita3->gambar1)}}" alt="Makkela Kela">
            <div class="card-content">
                <h2 class="card-title">{{$berita3->judul}}</h2>
                <p class="card-description">{{$berita3->deskripsi1}}</p>
                <div class="card-info">
                    <span class="card-date"><a href="{{ url('berita3') }}">Selengkapnya</a></span>
                </div>
            </div>
        </div>
        @empty
            <p>Data Tidak Ditemukan</p>
        @endforelse --}}

    </div>

    <!-- Galery Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Galery</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout">

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">


            @foreach ($galerys as $item)
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <a href="{{ asset('storage/' . $item->gambar) }}"  class="glightbox"><img src="{{ asset('storage/' . $item->gambar) }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">{{$item->judul}}</a></h4>
                  <p>{{$item->deskripsi}}</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            @endforeach


          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Dapatkan penawaran terbaik dengan menghubungi kami segera</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Jl. Linggakencana</p>
                  <p>Ciamis Kawali 46253</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>911</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>indraramdani224@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday</p>
                  <p>07:00AM - 04:00PM</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-6">
            <form action="{{ url('/contact') }}" method="POST">
                @csrf
                <div class="row gy-4">
                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                  </div>
                  <div class="col-md-6">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                  </div>
                  <div class="col-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                  </div>
                  <div class="col-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                  </div>
                  <div class="col-12 text-center">
                    <button type="submit">Send Message</button>
                  </div>
                </div>
              </form>

          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer accent-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="#" class="logo d-flex align-items-center">
            <img src="assets/img/smk.png" alt="">
            <span class="sitename">Violett.</span>
          </a>
          <p>Kami menyediakan layanan pemasangan WiFi cepat dan stabil untuk rumah serta bisnis Anda.
            Nikmati koneksi internet tanpa hambatan dengan dukungan tim profesional yang siap membantu setiap saat.
            <br>
            Tetap terhubung dengan kami melalui media sosial untuk update terbaru dan penawaran menarik!</p>

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
            <li><a href="#hero">Home</a></li>
            <li><a href="#about">Profile</a></li>
            <li><a href="#pricing">Product</a></li>
            <li><a href="#blog-posts">Article</a></li>
            <li><a href="#portofolio">Galery</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>Jl. Linggakencana</p>
          <p>Ciamis,kawali 46253</p>
          <p>Indonesia</p>
          <p class="mt-4"><strong>Phone:</strong> <span>911</span></p>
          <p><strong>Email:</strong> <span>indraramdani224@gmail.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Violet aka UsepSigma</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="#">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
        let submitButton = document.querySelector(".php-email-form button[type='submit']");
        submitButton.disabled = false; // Pastikan tombol tidak disabled
        submitButton.style.pointerEvents = "auto"; // Pastikan tombol bisa diklik
    });
    </script>



</body>

</html>
