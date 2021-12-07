@extends('Main.main')

@section('title','Add Sejarah')

@section('header','Add Sejarah')

@section('contents')

<form  action="{{route('posting-sejarah')}}" method="post" enctype="multipart/form-data">
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
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Save</button>
    <a type="button" class="btn btn-success" href="{{route('banjar-view')}}">back</a>
  </div>
</form>
@endsection