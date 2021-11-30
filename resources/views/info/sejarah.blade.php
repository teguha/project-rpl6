@extends('info.tampilan')

@section('title', 'Banjar aa')

@section('content')
<link href="assets/css/style.css" rel="stylesheet">
<link href="css/script.css" rel="stylesheet">
<link href="css/about.css" rel="stylesheet">
<link href="css/owl.carousel.min.css" rel="stylesheet">
<link href="js/jsfile.js" rel="stylesheet">

        <center class="mt-2 mb-5">
        <img src="{{URL::to('/')}}/foto/{{$banjars->gambar}}" alt="user" width="1000">
            <p class="dashboard-title "><b class="title-blue">{{ $banjars->name }}</b></p>
            <p class="dashboard-text ">{{$banjars->keterangan}}</p>
        </center>
            {{-- <div class="table-responsive">
                <table class="table stylish-table no-wrap">
                    <thead>
                        <tr>
                            <th class="border-top-0" colspan="2">Nama</th>
                            <th class="border-top-0">Jabatan</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div> --}}
@endsection