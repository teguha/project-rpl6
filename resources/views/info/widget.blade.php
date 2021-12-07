{{-- <nav class="navbar navbar-dark bg-light justify-content-between"> 
<div class="container mx-auto"> --}}
{{--    
   <img src="../assets2/images/logo-icon1.png"  alt="homepage" class="dark-logo" /> --}}
   {{-- <a class=" nav-link  my-2 my-sm-0 active " aria-current="page">Blog</a> --}}
{{-- </div>
</nav> --}}
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