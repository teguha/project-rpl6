@extends('info.master')

@section('title','Blog post')

@section('nav')
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
@endsection

@section('contents')
<header class="mb-3">
<!-- Post title-->
<h1 class="fw-bolder mb-1">{{$sejarahs->judul}}</h1>
<!-- Post meta content-->
<div class="text-muted fst-italic mb-2">Posted on {{$sejarahs->created_at}}, 2021 by Banjar Digital</div>
<!-- Post categories-->
<h4><span class="badge badge-dark">Bali</span> <span class="badge badge-dark">Banjar</span>
 <span class="badge badge-dark">Digital</span> <span class="badge badge-dark">Banjar</span></h4>
</header>

<div class="container mt-3">
<div class="row">
    <div class="col-lg-8">
        <article>
        <figure class="mb-2"><img class="img-fluid rounded" src="{{URL::to('/')}}/foto/{{$sejarahs->gambar}}" alt="..." width="1000" height="300" /></figure>
        <h3 class="dashboard-title"><b class="center">{{ $sejarahs->name }}</b></h3>
        <p class="dashboard-text ">{{ strip_tags ($sejarahs->konten)}}</p>
    </div>
    </article>
     <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">BALI</a></li>
                                        <li><a href="#!">BANJAR</a></li>
                                        <li><a href="#!">DIGITAL</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">BALI</a></li>
                                        <li><a href="#!">BANJAR</a></li>
                                        <li><a href="#!">DIGITAL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
    </article>
    <footer class="py-3 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Banjar Digital 2021</p></div>
    </footer>
     
@endsection


