@extends('info.tampilan')

@section('title','Blog post')

@section('contents')

<form action="{{route('message-details', $message->id)}}" method="POST" >
        @csrf
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material mx-2">
                        <div class="form-group">
                            <label class="col-md-12 mb-0" for="nama">Nama</label>
                            <div class="col-md-12">
                                <input type="text" 
                                    class="form-control ps-0 form-control-line @error ('nama') is-invalid @enderror" id="nama" name="nama"  value="{{$message->nama}}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input type="email" 
                                    class="form-control ps-0 form-control-line @error ('email') is-invalid @enderror" 
                                    id="email" name="email" value="{{$message->email}}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0" for="subject">Subject</label>
                            <div class="col-md-12">
                                <input type="text" 
                                    class="form-control ps-0 form-control-line @error ('subject') is-invalid @enderror" id="subject" name="subject" value="{{$message->subject}}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0" for="message">Message</label>
                            <div class="col-md-12">
                                <input type="text"
                                    class="form-control ps-0 form-control-line  @error ('message') is-invalid @enderror" id="message" name="message" value="{{$message->message}}" readonly >
                            </div>
                            </div>
                            <a type="button" class="btn btn-info mt-3" href="{{route('message-view')}}">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection