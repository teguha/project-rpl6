@extends('info.master')

@section('title','Sejarah Post')

@section('contents')
<h1 class="fw-bolder ml-3 mt-3 mb-3">Daftar Sejarah</h1>
@foreach ($data as $sejarahs)
<div class="card-body shadow">
    <div class="row">
        <div class="col-lg-4 col-3">
            <div class="card">
                <div class="card-body profile-card">
                    <center class="mt-2"> <img src="{{URL::to('/')}}/foto/{{$sejarahs->gambar}}" alt="" class="square" width="300">
                    </center>
                </div>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card mb-4">
                <div class="slider">
                    <h5 class=" mt-3 mb-0 text-center"><b>
                    <a href="{{route('views-banjar', $sejarahs->id)}}">{{$sejarahs->judul}}</a>
                    </b></h5>
                    <p class="p-4">{{ (strip_tags($sejarahs->konten) )}}</p>          
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection


