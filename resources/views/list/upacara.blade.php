@extends('layouts/master')

@section('title', 'Upacara User')

@section('breadcrumb', 'Upacara')
@section('content1')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Upacara</li>
    </ol>
@endsection

    @section('button')
        <div class="text-end upgrade-bt mr-5">
            <a href="https://www.wrappixel.com/templates/monsteradmin/"
                class="btn btn-success d-none d-md-inline-block text-white" target="_blank">
                Tambah Upacara</a>
        </div>
    @endsection


@section('content')
        <h4 class="card-title">Upacara List</h4>
        <div class="table-responsive">
            <table class="table user-table no-wrap">
                <thead>
                    <tr>
                        <th class="border-top-0">NO</th>
                        <th class="border-top-0">UPACARA</th>
                        <th class="border-top-0">TANGGAL</th>
                        <th class="border-top-0">WAKTU</th>
                        <th class="border-top-0">TEMPAT</th>
                        <th class="border-top-0">KETENTUAN</th>
                        <th class="border-top-0">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        
                    </tr>
                </tbody>
            </table>
        </div>
@endsection
                            