@extends('layouts/master')

@section('title', 'Postingan')

@section('content')

<div class="row">
    <div class="col-lg-5 col-3">
        <div class="card shadow mb-4">
            <div class="card-body profile-card">
                <center class="mt-2"> <img src="..\foto\282637694 - Copy.jpeg" class="square" style="border-radius: 25px;" width="300">
                </center>
            </div>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="col-lg-7 col-xlg-9 col-md-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                <h2 class="m-0 font-weight-regular text-info d-flex" >Tambah Postingan</h2>
            </div>
            <div class="px-2"><p>Disini Anda dapat menambah postingan yang diinginkan. Hasil dari postingan akan termuat pada laman utama website.</p></div>
            <div class="card-body d-flex justify-content-center">
                    <a href="{{ route('add-banjar') }}" class="d-none d-sm-inline-block btn btn-lg btn-info shadow-sm mr-3"><i
                        class=" fas fa-pencil-alt fa-sm text-white-50"></i>  Postingan Banjar</a>
                    <a href="{{ route('add-sejarah') }}" class="d-none d-sm-inline-block btn btn-lg btn-info shadow-sm"><i
                        class=" fas fa-pencil-alt fa-sm text-white-50"></i>  Postingan Sejarah</a>
            </div>
        </div>
    </div>
</div>

@endsection
