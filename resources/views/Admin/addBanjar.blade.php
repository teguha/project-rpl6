@extends('Admin/master')

@section('title', 'Banjar Data')

@section('breadcrumb', 'Add Banjar')
@section('content1')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Banjar</li>
    </ol>
@endsection

@section('button')
 <link rel="stylesheet" type="text/css" href="/trix/trix.css">
  <script type="text/javascript" src="/trix/trix.js"></script>
<div class="container">
 <link rel="stylesheet" type="text/css" href="/trix/trix.css">
  <script type="text/javascript" src="/trix/trix.js"></script>
<form  action="{{route('views-banjarr-saving')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="name">Nama Banjar</label>
    <input type="text" class="form-control @error ('name') is-invalid @enderror" id="name"  name="name" placeholder="name"></input>
    <div class="text-danger">
      @error('name')
        {{ $message }}
      @enderror
    </div>
  </div>
  <div class="form-group">
    <label for="image">Gambar Banjar</label>
    <input type="file" class="form-control @error ('image') is-invalid @enderror" id="foto" name="foto">
    <div class="text-danger">
      @error('image')
        {{ $message }}
      @enderror
    </div>
  </div>
   <div>
    <label for="keterangan">Deskripsi Banjar</label>
    <input id="keterangan" type="hidden" name="keterangan">
    <trix-editor input="keterangan"></trix-editor>
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-success">Simpan</button>
    <a type="button" class="btn btn-info" href="{{ route('add-postingan') }}">Kembali</a>
  </div>
</form>
@endsection