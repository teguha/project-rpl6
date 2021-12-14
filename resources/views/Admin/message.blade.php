@extends('Admin/master')

@section('title', 'Message')

@section('breadcrumb', 'Message')
@section('content1')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="list.dashboard">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Message</li>
    </ol>
@endsection
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="/css/script.css">
    <h1 class="card-title " ></h1>
    <div class="table-responsive">
        <table class="table user-table no-wrap">
            <thead>
                <tr>
                    <th class="border-top-0">NO</th>
                    <th class="border-top-0">Nama</th>
                    <th class="border-top-0">Email</th>
                    <th class="border-top-0">Subjek</th>
                    <th class="border-top-0">Message</th>
                    <th class="border-top-0">Action</th>
                </tr>
            </thead>
            <tbody>
             @foreach ($message as $hasil)
            <tr>
                <th scope="row">{{ $loop->index+1+($message->currentPage()-1)*5}} </th>     <!--  looping dari metdhod index pada controller -->
                <td>{{ $hasil->nama }} </td>                  
                <td>{{ $hasil->email }} </td>    
                <td>{{ $hasil->subject }} </td>
                <td>{{ $hasil->message}} </td>
                <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    @csrf
                    <a type="button" class="btn btn-info" href="{{route('message-detail', $hasil->id)}}">Detail</a>      
                </div>
                <form action="{{route('message-delete',$hasil->id)}}" method='post' class='d-inline'onsubmit="return confirm('Apakah kamu yakin ingin menghapus agenda ini ?')">     
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
            {{ $message->firstItem() }}
            to
            {{ $message->lastItem() }}  
            of
            {{ $message->total()   }} 
        </div>
        <div>
            {{ $message->links() }}
        </div>
    </div>
    @include('sweetalert::alert');
@endsection