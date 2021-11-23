@extends('layouts/master')

@section('title', 'Agenda User')

@section('breadcrumb', 'Agenda')
@section('content1')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Agenda</li>
    </ol>
@endsection

@section('content')
<form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material mx-2">
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Kegiatan</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Rapat Teknis"
                                    class="form-control ps-0 form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Tanggal</label>
                            <div class="col-md-12">
                                <input type="date" placeholder="2021-11-20"
                                    class="form-control ps-0 form-control-line" name="example-email"
                                    id="example-email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Waktu</label>
                            <div class="col-md-12">
                                <input type="time" value="09:00"
                                    class="form-control ps-0 form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Tempat</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Banjar Slumbung"
                                    class="form-control ps-0 form-control-line">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a type="button" class="btn btn-info" href="">Kembali</a>
    </form>
</div>
@endsection