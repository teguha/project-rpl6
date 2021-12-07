@extends('info.tampilan')

@section('title', 'banjar info')


@section('nav')
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
            <div class="container">
                <a class="navbar-brand" href="#!"><img src="../assets2/images/logo-icon1.png" class="justify-content-center" alt="homepage" class="dark-logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{route('banjar-view')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li>
                    </ul>
                </div>
            </div>
        </nav>
@endsection

@section('blog')
<div class="container">
<figure class="mb-4"><img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." /></figure>
            <p class="dashboard-title "><b class="title-blue">{{ $banjars->name }}</b></p>
            <p class="dashboard-text ">{{$banjars->keterangan}}</p>
</div>
@endsection

@section('judul')
{{$banjars->name}}
@endsection

@section('isi')
{{$banjars->keterangan}}
@endsection


