@extends('layouts/master')

@section('title', 'Agenda User')

@section('breadcrumb', 'Agenda User')
@section('content1')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Agenda</li>
    </ol>
@endsection

@section('button')
    <div class="text-end upgrade-bt mr-5">
        <a href="https://www.wrappixel.com/templates/monsteradmin/"
            class="btn btn-success d-none d-md-inline-block text-white" target="_blank">
            Tambah Agenda</a>
    </div>
@endsection

@section('content')
    <h4 class="card-title">Agenda List</h4>
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
                @foreach ($kabupatens as $item)
                    <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $item->kabupaten }}</td>
                        <td>{{ $item->provinsis['provinsi'] }}</td>
                        <td>
                            <form action="{{ route('kab-delete', $item->id) }}" method="POST">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    @csrf
                                    <a type="button" class="btn btn-success" href="{{ route('kab-detail', $item->id) }}">Details</a>
                                    <a type="button" class="btn btn-primary" href="{{ route('kab-edit', $item->id) }}">Edit</a>
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('apakah kamu yakin menghapus data ini ?')">Delete</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
@endsection