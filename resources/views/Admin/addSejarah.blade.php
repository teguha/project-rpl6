@extends('Admin/master')

@section('title', 'Sejarah Data')

@section('breadcrumb', 'Add Sejarah')
@section('content1')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Anggota</li>
    </ol>
@endsection

@section('button')
 <link rel="stylesheet" type="text/css" href="/trix/trix.css">
  <script type="text/javascript" src="/trix/trix.js"></script>
<div class="container">
<form  action="{{route('Sejarah-Save')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control @error ('judul') is-invalid @enderror" id="judul"  name="judul" placeholder="judul">
    <div class="text-danger">
      @error('judul')
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
    <label for="konten">Deskripsi Banjar</label>
    <input id="konten" type="hidden" name="konten">
    <trix-editor input="konten"></trix-editor>
  </div>
  <div class="mt-2">
    <button type="submit" class="btn btn-success">Simpan</button>
    <a type="button" class="btn btn-info" href="{{ route('add-postingan') }}">Kembali</a>
  </div>
</form>
</div>
@endsection