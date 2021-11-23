@extends('layouts/master')

@section('title', 'Agenda User')

@section('breadcrumb', 'Agenda')
@section('content1')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Agenda</li>
    </ol>
@endsection

@section('content')
<form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material mx-2">
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Full Name</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Johnathan Doe"
                                    class="form-control ps-0 form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input type="email" placeholder="johnathan@admin.com"
                                    class="form-control ps-0 form-control-line" name="example-email"
                                    id="example-email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Password</label>
                            <div class="col-md-12">
                                <input type="password" value="password"
                                    class="form-control ps-0 form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Phone No</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="123 456 7890"
                                    class="form-control ps-0 form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 mb-0">Country</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Indonesia"
                                    class="form-control ps-0 form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Gender</label>
                            <div class="col-sm-12 border-bottom">
                                <select class="form-select shadow-none border-0 ps-0 form-control-line">
                                    <option>Female</option>
                                    <option>Male</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a type="button" class="btn btn-info" href="">Back</a>
    </form>
</div>
@endsection