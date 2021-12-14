@extends('Admin/master')

@section('title', 'Sejarah Data')

@section('breadcrumb', 'Sejarah Data')
@section('content1')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sejarah</li>
    </ol>
@endsection

@section('button')
    <div class="text-end upgrade-bt mr-5">
        <a href="{{ route('Sejarah-add') }}"
            class="btn btn-success d-none d-md-inline-block text-white">
            Posting Sejarah</a>
    </div>
@endsection

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="/css/script.css">
{{-- @if($levels =='admin')
    <div class="text-end upgrade-bt mr-5">
        <a href="{{ route('agenda-new') }}"
            class="btn btn-success d-none d-md-inline-block text-white">
            Tambah Agenda</a>
    </div>
@endif --}}
    <h1 class="card-title " ></h1>
    <div class="table-responsive">
        <table class="table user-table no-wrap">
            <thead>
                <tr>
                    <th class="border-top-0">NO</th>
                    <th class="border-top-0">Judul</th>
                    <th class="border-top-0">Gambar</th>
                    <th class="border-top-0">Konten</th>
                    <th class="border-top-0">Action</th>
                </tr>
            </thead>
            <tbody>
             @foreach ($Sejarah as $sejarahs)
            <tr>
                <th scope="row">{{ $loop->index+1+($Sejarah->currentPage()-1)*5}} </th>     <!--  looping dari metdhod index pada controller -->
                <td>{{ $sejarahs->judul }} </td>                  
                <td><img src="{{URL::to('/')}}/foto/{{$sejarahs->gambar}}" alt="" width="80" height="80" ></td>    
                <td>{{Str::limit(strip_tags($sejarahs->konten),60)}}</td>
 
                <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    @csrf
                    <a type="button" class="btn btn-info" href="{{route('Sejarah-editss', $sejarahs->id)}}">Edit</a>      
                </div>
                <form action="{{route('Sejarah-delete',$sejarahs->id)}}" method='post' class='d-inline'onsubmit="return confirm('Apakah kamu yakin ingin menghapus banjar ini ?')">     
                    @csrf
                    <button type="submit" class="btn btn-danger">Hapus</button>
                 </form> 
                </td>
               
            @endforeach
            </tr>
            </tbody>
        </table>
        <div class='mt-4 text-center'>
            showing
            {{ $Sejarah->firstItem() }}
            to
            {{ $Sejarah->lastItem() }}  
            of
            {{ $Sejarah->total()   }} 
        </div>
        <div>
            {{ $Sejarah->links() }}
        </div>
    </div>
    @include('sweetalert::alert');
@endsection
