@extends('layouts/master')

@section('title', 'Agenda Edit Data')

@section('breadcrumb', 'Agenda Edit Data')
@section('content1')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="list.dashboard">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Agenda</li>
    </ol>
@endsection

@section('content')

<form action="{{route('agenda-edit-save', $data->id)}}" method="POST" >
        @csrf
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material mx-2">
                        <div class="form-group">
                            <label class="col-md-12 mb-0" for="kegiatan">Kegiatan</label>
                            <div class="col-md-12">
                                <input type="text" placeholder=""
                                    class="form-control ps-0 form-control-line @error ('kegiatan') is-invalid @enderror" id="kegiatan" name="kegiatan"  value="{{$data->kegiatan}}" autofocus>
                            </div>
                            <div class="text-danger">
                                @error('kegiatan')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggal" class="col-md-12">Tanggal</label>
                            <div class="col-md-12">
                                <input type="date" 
                                    class="form-control ps-0 form-control-line @error ('tanggal') is-invalid @enderror" name="tanggal" 
                                    id="tanggal" name="tanggal" value="{{$data->tanggal}}">
                            </div>
                            <div class="text-danger">
                                @error('tanggal')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0" for="waktu">Waktu</label>
                            <div class="col-md-12">
                                <input type="time" 
                                    class="form-control ps-0 form-control-line @error ('waktu') is-invalid @enderror" id="waktu" name="waktu" value="{{$data->waktu}}">
                            </div>
                            <div class="text-danger">
                                @error('waktu')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0" for="tempat">Tempat</label>
                            <div class="col-md-12">
                                <input type="text"
                                    class="form-control ps-0 form-control-line  @error ('tempat') is-invalid @enderror" id="tempat" name="tempat" value="{{$data->tempat}}">
                            </div>
                            <div class="text-danger">
                                @error('tempat')
                                    {{ $message }}
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success mt-3">Simpan</button>
                            <a type="button" class="btn btn-info mt-3" href="{{route('agenda-user')}}">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection