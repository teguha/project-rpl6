@extends('Main.main')

@section('title','Add Postingan')

@section('header','Add Postingan')

@section('contents')

<form  action="{{route('posting')}}" method="post" enctype="multipart/form-data">
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
  <div class="form-group">
    <label for="keterangan">Deskripsi Banjar</label>
    <input type="text" class="form-control @error ('keterangan') is-invalid @enderror" id="keterangan" name="keterangan">
    <div class="text-danger">
      @error('keterangan')
        {{ $message }}
      @enderror
    </div>
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Save</button>
    <a type="button" class="btn btn-success" href="">back</a>
  </div>
</form>
@endsection