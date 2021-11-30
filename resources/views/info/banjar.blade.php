@extends('info.tampilan')

@section('title','Blog post')

@section('nav')
 <nav class="navbar navbar-dark bg-light justify-content-between"> 
<div class="container mx-auto">
{{--    
   <img src="../assets2/images/logo-icon1.png"  alt="homepage" class="dark-logo" /> --}}
   {{-- <a class=" nav-link  my-2 my-sm-0 active " aria-current="page">Blog</a> --}}
</div>
</nav>
@endsection

@section('contents')
<header class="mb-3">
<!-- Post title-->
<h1 class="fw-bolder mb-1">Welcome to Blog Post!</h1>
<!-- Post meta content-->
<div class="text-muted fst-italic mb-2">Posted on {{$banjars->created_at}}, 2021 by Banjar Digital</div>
<!-- Post categories-->
<h4><span class="badge badge-dark">Bali</span> <span class="badge badge-dark">Banjar</span>
 <span class="badge badge-dark">Digital</span> <span class="badge badge-dark">Banjar</span></h4>
</header>

<div class="container mt-3">
<div class="row">
    <div class="col-lg-8">
        <article>
        <figure class="mb-2"><img class="img-fluid rounded" src="{{URL::to('/')}}/foto/{{$banjars->gambar}}" alt="..." width="1000" height="300" /></figure>
        <h3 class="dashboard-title"><b class="center">{{ $banjars->name }}</b></h3>
        <p class="dashboard-text ">{{$banjars->keterangan}}</p>
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

