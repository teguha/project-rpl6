@extends('layouts/master')

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
        <div class="table-responsive">
            <table class="table stylish-table no-wrap">
                <thead>
                    <tr>
                        <th class="border-top-0" colspan="2">Nama</th>
                        <th class="border-top-0">Jabatan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width:50px;"><span class="round">T</span></td>
                        <td class="align-middle">Teguh Artana</td>
                        <td class="align-middle">Kelian Adat</td>
                    </tr>
                    <tr class="active">
                        <td><span class="round"><img src="../assets2/images/users/2.jpg"
                                    alt="user" width="50"></span></td>
                        <td class="align-middle">Ardhiya Shita</td>
                        <td class="align-middle">Sekretaris</td>
                    </tr>
                    <tr>
                        <td><span class="round round-success">M</span></td>
                        <td class="align-middle">Masfauzi</td>
                        <td class="align-middle">Bendahara</td>
                    </tr>
                    <tr>
                        <td><span class="round round-primary">B</span></td>
                        <td class="align-middle">Bayu Pradnya</td>
                        <td class="align-middle">Ketua STT</td>
                    </tr>
                    <tr>
                        <td><span class="round round-warning">G</span></td>
                        <td class="align-middle">Gung Inten</td>
                        <td class="align-middle">Wakil Ketua STT</td>
                    </tr>
                </tbody>
            </table>
        </div>
@endsection