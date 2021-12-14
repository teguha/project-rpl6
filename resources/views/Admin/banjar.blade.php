@extends('Admin/master')

@section('title', 'Data Banjar')

@section('breadcrumb', 'Data Banjar')
@section('content1')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Banjar</li>
    </ol>
@endsection

@section('button')
    <div class="text-end upgrade-bt mr-5">
        <a href="{{ route('banjar-user-add') }}"
            class="btn btn-success d-none d-md-inline-block text-white">
            Tambah Banjar</a>
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
                    <th class="border-top-0">Name</th>
                    <th class="border-top-0">id</th>
                    <th class="border-top-0">Foto</th>
                    <th class="border-top-0">Keterangan</th>
                    <th class="border-top-0">Action</th>
                 
                </tr>
            </thead>
            <tbody>
             @foreach ($Banjar as $banjars)
            <tr>
                <th scope="row">{{ $loop->index+1+($Banjar->currentPage()-1)*5}} </th>     <!--  looping dari metdhod index pada controller -->
                <td>{{ $banjars->name }} </td>       
                 <td>{{ $banjars->id }} </td>               
                <td><img src="{{URL::to('/')}}/foto/{{$banjars->gambar}}" alt="" width="80" height="80" ></td>    
                <td>{{Str::limit(strip_tags($banjars->keterangan),80)}}</td>
                <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    @csrf
                 
                    <a type="button" class="btn btn-info" href="{{route('banjar-edited', $banjars->id)}}">Edit</a>      
                </div>
                <form action="{{route('banjar-deletes',$banjars->id)}}" method='post' class='d-inline'onsubmit="return confirm('Apakah kamu yakin ingin menghapus banjar ini ?')">     
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
            {{ $Banjar->firstItem() }}
            to
            {{ $Banjar->lastItem() }}  
            of
            {{ $Banjar->total()   }} 
        </div>
        <div>
            {{ $Banjar->links() }}
        </div>
    </div>
    @include('sweetalert::alert');
@endsection