

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Banjar Edit</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets2/images/favicon.png">
    <!-- Custom CSS -->
    <link href="../assets2/plugins/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('../css2/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../css2/style.min.css') }}">
     <link rel="stylesheet" type="text/css" href="/trix/trix.css">
  <script type="text/javascript" src="/trix/trix.js"></script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6 bg-info">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets2/images/logo-icon1.png" alt="homepage" class="dark-logo" />
                        </b>
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../assets2/images/users/1.jpg" alt="user" class="profile-pic me-2">{{ auth()->user()->name}}
                            </a>
                            <ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        @include('Admin/navigation')
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="list.dashboard">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Agenda</li>
                            </ol>
                        </h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
     <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('banjar-edits-save',$banjar->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-lg-8 col-xlg-9 col-md-7">
                                        <div class="card">
                                            <div class="card-body">
                                                <form class="form-horizontal form-material mx-2">
                                                    <div class="form-group">
                                                        <label class="col-md-12 mb-0" for="name">Judul</label>
                                                        <div class="col-md-12">
                                                            <input type="text" placeholder=""
                                                                class="form-control ps-0 form-control-line @error ('name') is-invalid @enderror" id="nama" name="name"  value="{{$banjar->name}}" autofocus>
                                                        </div>
                                                        <div class="text-danger">
                                                            @error('name')
                                                                {{ $message }}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="gambar">Gambar Hewan</label>
                                                        <input type="file" class="form-control-file" id="foto" name="foto">
                                                            <img src="{{ URL::to('/') }}/foto/{{ $banjar->gambar }}" class="img-thumbnail" width="200px"/>
                                                        <input type="hidden" class="form-control" id="hidden_image" name="hidden_image" value="{{$banjar->gambar}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="keterangan" class="col-md-12 mb-0" >Konten</label>
                                                            <input id="keterangan" type="hidden" name="keterangan" value="{{$banjar->keterangan}}">
                                                            <trix-editor input="keterangan" ></trix-editor>
                                                        </div>
                                                    <div>
                                                    <button type="submit" class="btn btn-success mt-3">Simpan</button>
                                                    <a type="button" class="btn btn-info mt-3" href="{{route('banjars-user')}}">Kembali</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                © 2021 RPL D oleh Kelompok 6
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets2/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets2/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="{{ asset('../js2/app-style-switcher.js') }}"></script>
    <!--Wave Effects -->
    <script type="text/javascript" src="{{ asset('../js2/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script type="text/javascript" src="{{ asset('../js2/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript" src="{{ asset('../js2/custom.js') }}"></script>
    <!--This page JavaScript -->
    <!--flot chart-->
    <script src="../assets2/plugins/flot/jquery.flot.js"></script>
    <script src="../assets2/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script type="text/javascript" src="{{ asset('../js2/pages/dashboards/dashboard1.js') }}"></script>
    
</body>

</html>

