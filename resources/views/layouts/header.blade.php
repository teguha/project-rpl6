
<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">BanjarDGTL@gmail.com</a>
        <i class="icofont-phone"></i> +62 852 3866 1660
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
          <li class="active"><a href="{{ route('banjar-view') }}">Beranda</a></li>
          <li><a href="{{ route('banjar-list-block') }}">Banjar</a></li>
           <li><a href="{{ route('banjar-view') }}">Layanan</a></li>
           <li><a href="{{ route('sejarah-list-block') }}">Sejarah</a></li>
           <li><a href="{{ route('banjar-view') }}">Tentang</a></li>
           <li><a href="{{ route('banjar-view') }}">Tim</a></li>
           <li><a href="{{ route('banjar-view') }}">Kontak</a></li>
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