@extends('layouts/master')

@section('title', 'Agenda User')

@section('breadcrumb', 'Agenda')
@section('content1')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Agenda</li>
    </ol>
@endsection

@section('button')
    <div class="text-end upgrade-bt mr-5">
        <a href="{{ route('agenda-new') }}"
            class="btn btn-success d-none d-md-inline-block text-white">
            Tambah Agenda</a>
    </div>
@endsection

@section('content')
    <h4 class="card-title">List Agenda</h4>
    <div class="table-responsive">
        <table class="table user-table no-wrap">
            <thead>
                <tr>
                    <th class="border-top-0">NO</th>
                    <th class="border-top-0">KEGIATAN</th>
                    <th class="border-top-0">TANGGAL</th>
                    <th class="border-top-0">WAKTU</th>
                    <th class="border-top-0">TEMPAT</th>
                    <th class="border-top-0">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border-top-0">1</td>
                    <td class="border-top-0">Rapat Teknis</td>
                    <td class="border-top-0">2021-11-20</td>
                    <td class="border-top-0">09:00</td>
                    <td class="border-top-0">Banjar Slumbung</td>
                    <td class="border-top-0"></td>
                    <td><form action="" method="POST">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                @csrf
                                <a type="button" class="btn btn-primary" href="">Edit</a>
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('apakah kamu yakin menghapus data ini ?')">Delete</button>
                            </div>
                    </form></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection