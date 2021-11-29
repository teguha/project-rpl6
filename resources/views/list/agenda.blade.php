@extends('layouts/master')

@section('title', 'Agenda User')

@section('breadcrumb', 'Agenda User')
@section('content1')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Agenda</li>
    </ol>
@endsection

{{-- @section('button')
    <div class="text-end upgrade-bt mr-5">
        <a href="{{ route('agenda-new') }}"
            class="btn btn-success d-none d-md-inline-block text-white">
            Tambah Agenda</a>
    </div>
@endsection --}}

@section('content')
<link rel="stylesheet" href="/css/script.css">
@if($levels =='admin')
    <div class="text-end upgrade-bt mr-5">
        <a href="{{ route('agenda-new') }}"
            class="btn btn-success d-none d-md-inline-block text-white">
            Tambah Agenda</a>
    </div>
@endif
    <h1 class="card-title " ></h1>
    <div class="table-responsive">
        <table class="table user-table no-wrap">
            <thead>
                <tr>
                    <th class="border-top-0">NO</th>
                    <th class="border-top-0">KEGIATAN</th>
                    <th class="border-top-0">TANGGAL</th>
                    <th class="border-top-0">WAKTU</th>
                    <th class="border-top-0">TEMPAT</th>
                    @if($levels =='admin')
                    <th class="border-top-0">ACTION</th>
                    @endif
                    <th class="border-top-0">STATUS</th>
                </tr>
            </thead>
            <tbody>
             @foreach ($hasil as $agendas)
            <tr>
                <th scope="row">{{ $loop->index+1+($hasil->currentPage()-1)*5}} </th>     <!--  looping dari metdhod index pada controller -->
                <td>{{ $agendas->kegiatan }} </td>                  
                <td>{{ $agendas->tanggal }} </td>    
                <td>{{ $agendas->waktu }} </td>
                <td>{{ $agendas->tempat}} </td>
                @if($levels =='admin')
                <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    @csrf
                    <a type="button" class="btn btn-warning" href="{{route('agenda-edit',$agendas->id)}}">Edit</a>      
                </div>
                <form action="{{route('agenda-delete',$agendas->id)}}" method='post' class='d-inline'onsubmit="return confirm('Apakah kamu yakin ingin menghapus agenda ini ?')">     
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                 </form> 
                </td>
                @endif
                <td>
                @if(strtotime($agendas->tanggal) > strtotime($time) )
                    @if(strtotime($agendas->waktu) > strtotime($waktu) || (strtotime($agendas->waktu) < strtotime($waktu)) || (strtotime($agendas->waktu) == strtotime($waktu)))
                        <div  class="btn btn-warning" width="100" height="50">soon</div>
                    @endif
                @elseif(strtotime($agendas->tanggal) < strtotime($time))
                     @if(strtotime($agendas->waktu) > strtotime($waktu) || (strtotime($agendas->waktu) < strtotime($waktu)) || (strtotime($agendas->waktu) == strtotime($waktu)))
                         <div  class="btn btn-danger" width="100" height="50">last</div>
                    @endif
                @else
                     @if(strtotime($agendas->waktu) > strtotime($waktu) )
                        <div  class="btn btn-warning" width="100" height="50">soon</div>
                    @else
                        <div  class="btn btn-success" width="100" height="50">now</div>
                    @endif
                @endif
                <td>
            @endforeach
                {{-- <tr>
                    <td class="border-top-0">1</td>
                    <td class="border-top-0">Rapat Teknis</td>
                    <td class="border-top-0">2021-11-20</td>
                    <td class="border-top-0">09:00</td>
                    <td class="border-top-0">Banjar Slumbung</td>
                    <td class="border-top-0"></td> --}}
                    {{-- <td><form action="" method="POST">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                @csrf
                                <a type="button" class="btn btn-info" href="">Edit</a>
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('apakah kamu yakin menghapus data ini ?')">Delete</button>
                            </div>
                    </form></td> --}}
                </tr>
            </tbody>
        </table>
        <div class='mt-4 text-center'>
            showing
            {{ $hasil->firstItem() }}
            to
            {{ $hasil->lastItem() }}  
            of
            {{ $hasil->total()   }} 
        </div>
        <div>
            {{ $hasil->links() }}
        </div>
    </div>
    @include('sweetalert::alert');
@endsection