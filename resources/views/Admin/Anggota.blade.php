@extends('Admin/master')

@section('title', 'Anggota Data')

@section('breadcrumb', 'Anggota Data')
@section('content1')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Anggota</li>
    </ol>
@endsection

@section('button')
    
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
                    <th class="border-top-0">Username</th>
                    <th class="border-top-0">Banjar_id</th>
                    <th class="border-top-0">Banjar name</th>
                    <th class="border-top-0">Email</th>
                    <th class="border-top-0">Password</th>
                    <th class="border-top-0">Level</th>
                    
                    <th class="border-top-0">Action</th>
                   
                </tr>
            </thead>
            <tbody>
             @foreach ($Anggotas as $anggota)
            <tr>
                <th scope="row">{{ $loop->index+1+($Anggotas->currentPage()-1)*5}} </th>     <!--  looping dari metdhod index pada controller -->
                <td>{{ $anggota->name }} </td>                  
                <td>{{ $anggota->username }} </td> 
                <td>{{ $anggota->banjar_id }} </td> 
                <td>{{ $anggota->banjars->name }} </td> 
                <td>{{ $anggota->email }} </td> 
                <td>{{ $anggota->password }} </td> 
              
                <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    @csrf
                    <a type="button" class="btn btn-info" href="{{route('anggota-detail', $anggota->id)}}">Edit</a>    
                    <a type="button" class="btn btn-info" href="{{route('anggota-edit', $anggota->id)}}">Edit</a>      
                </div>
                <form action="{{route('anggota-delete',$anggota->id)}}" method='post' class='d-inline'onsubmit="return confirm('Apakah kamu yakin ingin menghapus banjar ini ?')">     
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
            {{ $Anggotas->firstItem() }}
            to
            {{ $Anggotas->lastItem() }}  
            of
            {{ $Anggotas->total()   }} 
        </div>
        <div>
            {{ $Anggotas->links() }}
        </div>
    </div>
    @include('sweetalert::alert');
@endsection