@extends('info.master')

@section('title','Blog post')

@section('contents')
<header class="mb-3">
<!-- Post title-->
<h1 class="fw-bolder mb-1">{{$banjars->name}}</h1>
<!-- Post meta content-->
<div class="text-muted fst-italic mb-2">Posted on {{$banjars->created_at}}, 2021 by Banjar Digital</div>
<!-- Post categories-->
<h5><span class="badge badge-dark">Bali</span> <span class="badge badge-dark">Banjar</span>
 <span class="badge badge-dark">Digital</span> </h5>
</header>

<div class="container mt-3">
<div class="row">
    <div class="col-lg-8">
        <article>
        <figure class="mb-2"><img class="img-fluid rounded" src="{{URL::to('/')}}/foto/{{$banjars->gambar}}" alt="..." width="1000" height="300" /></figure>
        <h3 class="dashboard-title"><b class="center">{{ $banjars->name }}</b></h3>
        <p class="dashboard-text ">{{strip_tags($banjars->keterangan)}}</p>
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
                        <div class="card-header">Om Swastyastu</div>
                        <div class="card-body">Kini Anda berada di halaman blog, tempatnya berbagai informasi seputar banjar dan sejarah yang ingin kalian ketahui</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
    </article>
    <footer class="py-3 bg-dark">
    <div class="copyright m-0 text-center text-white">
        &copy; Copyright <strong><span>BanjarDigital</span></strong>. All Rights Reserved
      </div>
    </footer>
     
@endsection


