@extends('layouts/master')

@section('title', 'Profile User')

@section('breadcrumb', 'Profile')
@section('content1')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Profile</li>
    </ol>
@endsection

@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body profile-card">
                    <center class="mt-4"> <img src="../assets2/images/users/5.jpg"
                            class="rounded-circle" width="150" />
                        <h4 class="card-title mt-2">Hanna Gover</h4>
                        <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                    </center>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
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
                        <div class="form-group">
                            <div class="col-sm-12 d-flex">
                                <button class="btn btn-success mx-auto mx-md-0 text-white">Update
                                    Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
@endsection