@extends('Admin/master')

@section('title', 'Dasboard User')

@section('breadcrumb', 'Dasboard')
@section('content1')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
@endsection

@section('content')
        <center class="mt-2 mb-5">
        <img src="..\assets2\images\big\image1.png" alt="user" width="1000">
            <p class="dashboard-title ">Selamat Datang <b class="title-blue">{{ $banjar }}</b></p>
            <p class="dashboard-text ">Banjar adalah pembagian wilayah administratif  di Provinsi Bali, Indonesia di bawah
            Kelurahan atau Desa, setingkat dengan Rukun Warga. Mengurus hal-hal yang 
            bersifat administratif, seperti pembuatan KTP, Kipem.</p>
        </center>

@endsection