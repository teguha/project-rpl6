<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Banjar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="css/script.css" rel="stylesheet">
  <link href="css/about.css" rel="stylesheet">
  <link href="css/owl.carousel.min.css" rel="stylesheet">
   <link href="js/jsfile.js" rel="stylesheet">

  {{-- js --}}

  {{-- coursel --}}

<!-- =======================================================
  * Template Name: BizLand - v1.2.1
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/


======================================================== -->

</head>

<body>
<!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">BanjarDgtl@gmail.com</a>
        <i class="icofont-phone"></i> 085 238 661 660
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

<!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">BANJAR DIGITAL<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#">Beranda</a></li>
          <li><a href="#banjar">Banjar</a></li>
           <li><a href="#service">Layanan</a></li>
           <li><a href="#history">Sejarah</a></li>
           <li><a href="#about">Tentang</a></li>
           <li><a href="#team">Team</a></li>
           <li><a href="#contact">Kontak</a></li>
          <form action="/login" method="post">
            @csrf
            <button type="submit" class="buttonLogin px-3 py-2">Login</button>
          </form>
          {{-- <li><a href="{{url('/login')}}">Login</a></li> --}}
          {{-- <li>
            <form>
              <button type="submit" class="dropdown-item">Login</button>
            <form>
          </li> --}}
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header>
<!-- End Header -->
<!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <span>Banjar</span>
      </h1>
      <h2>Kami adalah tim yang membuat website BanjarDigital sebagai Portal untuk semua Banjar di Bali</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Memulai</a>
      </div>
    </div>
  </section>
<!-- End Hero -->
<main id="main">
<!-- ======= Featured Services Section ======= -->
    <section id="banjar" class="featured-services">
      <div class="section-title">
        <h2>Banjar</h2>
        <p>Daftar Banjar Yang Telah Beralih Ke Digital</p>
      </div>
      <section id="slider">
        <div class="container">
            <div class="slider">
                      <div class="owl-carousel">
                        @foreach ($data as $banjars)
                          <div class="slider-card">
                              <div class="d-flex justify-content-center align-items-center mb-4">
                                  <img src="{{URL::to('/')}}/foto/{{$banjars->gambar}}" alt="" >
                              </div>
                              <h5 class="mb-0 text-center"><b>
                              <a href="{{route('info-banjar', $banjars->id)}}">{{$banjars->name}}</a>
                              </b></h5>
                              <p class="text-center p-4">{{Str::limit(strip_tags($banjars->keterangan),60)}}</p>          
                          </div>
                        @endforeach
                      </div>
                  </div>
            </div>
         </div>
      </section>
          <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
          <script src="js/owl.carousel.min.js"></script>
          <script src="js/script.js"></script>
          {{$data->links()}}
    </section>
<!-- End Featured Services Section -->
<!-- ======= About Section ======= -->
    <section id="service" class="about section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Layanan</h2>
          <p>Kami Menyediakan Jasa Pembuatan Website Untuk Kebutuhan Banjar Anda</p>
        </div>
        <div class="row mt-4">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="rpl/view1.jpeg" class="cardview" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul>
              <li>
                <i class="bx bx-store-alt"></i>
                <div>
                  <h3>Hubungi Kami</h3>
                  <h5>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</h5>
                </div>
              </li>
              <br>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h3>Kirim Informasi Banjar Anda</h3>
                  <h5>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</h5>
                </div>
              </li>
              <br>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h3>Kami Akan Kerjakan</h3>
                  <h5>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</h5>
                </div>
              </li>
            </ul>
        </div>
    </section>
{{-- ---------------------------------------------------------------------------------------------------- --}}
    <section id="history" class="featured-services">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Sejarah</h2>
            <p>Informasi Sejarah </p>
        </div>
      <section id="slider">
        <div class="container">
            <div class="slider">
                      <div class="owl-carousel">
                        @foreach ($sejarah as $banjars)
                          <div class="show-slider">
                              <div class="d-flex justify-content-center align-items-center mb-4">
                                  <img src="{{URL::to('/')}}/foto/{{$banjars->gambar}}" alt="" >
                              </div>
                              <h5 class="mb-0 text-center"><b><a href="{{route('views-sejarah', $banjars->id)}}">{{$banjars->judul}}</a></b></h5>
                              <p class="text-center p-4">{{Str::limit(strip_tags($banjars->konten),60)}}</p>          
                          </div>
                        @endforeach
                      </div>
                  </div>
            </div>
         </div>
      </section>
          <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
          <script src="js/owl.carousel.min.js"></script>
          <script src="js/script2.js"></script>
          {{$sejarah->links()}}
		
    </section>

<!-- about section ends -->
        {{-- <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="about.php">Banjar A</a></h4>
              <p class="description">Banjar A merupakan banjar yang terletak di kabupaten A kecamatan A desan A provinsi bali</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="about.php">Banjar A</a></h4>
              <p class="description">Banjar A merupakan banjar yang terletak di kabupaten A kecamatan A desan A provinsi bali</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="about.php">Banjar A</a></h4>
              <p class="description">Banjar A merupakan banjar yang terletak di kabupaten A kecamatan A desan A provinsi bali</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="about.php">Banjar A</a></h4>
              <p class="description">Banjar A merupakan banjar yang terletak di kabupaten A kecamatan A desan A provinsi bali</p>
            </div>
          </div>

        </div> --}}
      </div>
    </section>
{{-- section service ------------------------------------------------------------------------------------ --}}
    <section id="about" class="service section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Tentang</h2>
          <p>Tentang  Website ini</p>
        </div>
        <div class="container">
        {{-- --------------------------------------------------------------------------------------------- --}}
        <div class=malasngoding-slider>
          <div class=isi-slider>
            <img src="rpl/dance.jpeg" alt="Gambar 1">
            <img src="rpl/view.jpeg" alt="Gambar 2">
            <img src="rpl/barong.jpeg" alt="Gambar 3">
            <img src="rpl/view1.jpeg" alt="Gambar 3">
          </div>
	      </div>
        {{-- --------------------------------------------------------------------------------------------- --}}
        <div class="container justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <p> Sarana Akses digital untuk seluruh masyarakat di bali bertujuan untuk memudahkan krama banjar mengetahui informasi terkait kegiatan ,beserta riwayat kegiatan,selain itu ,memberikan akses kepada masyarakat luar bali untuk  mendapatkan informasi terkait banjar .kontak yang dapat dihubungi dengan tetap mempertahankan privasi kelian banjar (kepala lingkungan)</p>
        </div>
    </section>
<!-- End Services Section -->
<!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Tim Banjar Digital</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Muhammad Fauzi</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>I Made Teguh Arthana</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Bayu Pradnya Wira Ditya</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center mt-3">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Anak Agung Inten Cahyani Dewi</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Ni Made Ardhiya Sita Pramesti Dewi</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>
        </div>
    </section>
<!-- End Team Section -->
<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>If You are interested, please contact us via email, phone, or send a direct message via the Form on this website</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>BanjarDGTL@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+6285238661660</p>
            </div>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26542.491161391066!2d115.39316053044617!3d-8.54154912325752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd21119c4d14f17%3A0x4030bfbca7d2ed0!2sSemarapura%2C%20Klungkung%2C%20Klungkung%20Regency%2C%20Bali!5e0!3m2!1sen!2sid!4v1638891067753!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>
          <div class="col-lg-6">
            <form action="{{route('message-save')}}" method="post">
             @csrf
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Your Name" data-msg="Please enter at least 4 chars" required />
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required />
             
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"  data-msg="Please enter at least 8 chars of subject" required />
               
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" id="message" rows="5"  data-msg="Please write something for us" placeholder="Message" required></textarea>
                
              </div>
              <div class="text-center">
                <button type="submit" class="btn1 btn-primary">Send Message</button>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section>
<!-- End Contact Section -->
    </main> <!-- End #main -->
  <!-- ======= Footer ======= -->

    <div class="footer-top mt-5">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact ">
            <h3>BizLand<span>.</span></h3>
            <p>
              jalan rajawali<br>
              Bali, nomor 87777<br>
              Indonesia<br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links ">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Banjar</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">History</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">contact</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links ">
            <h4>Our Social Networks</h4>
            <p>You can see other info about us through the following social media</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

<div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>BanjarDigital</span></strong>. All Rights Reserved
      </div>
    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
      </div>
    </div>
  </footer><!-- End Footer -->

 <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
