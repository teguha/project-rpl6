<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>register!</title>
  </head>
  <body class="body">
    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="rpl/log1.jpg" class="img" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5 mt-4">
                    <h1 class="font-weight-bold-py-3">REGISTER</h1>
                    <h4>Register To Banjar</h4>
                    <form action="{{route('user-register')}}" method="post">
                    @csrf
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" placeholder="Email" class="form-control @error ('email') is-invalid @enderror my-2 p-3 " id="email" name="email" required autofocus>
                                  @error('email')
                                 <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" placeholder="Name" class="form-control my-2 p-3 @error ('name') is-invalid @enderror" id="name" name="name" required>
                                <div class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" placeholder="User Name" class="form-control my-2 p-3 @error ('username') is-invalid @enderror" id="username" name="username">
                                <div class="text-danger">
                                @error('username')
                                    {{ $message }}
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" placeholder="**********" class="form-control @error ('password') is-invalid @enderror my-2 p-3" id="password" name="password" required>
                                 <div class="text-danger">
                                @error('password')
                                    {{ $message }}
                                @enderror
                                </div>
                            </div>
                        </div>
                         <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" class="btn1 btn-primary">Login</button>
                            </div>
                        </div>
                        <p>dont have an account ?<a href="{{url('login')}}"> register here </a>now<p>
                    </form>
                </div>
            </div>
        </div>

    </section>
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   @include('sweetalert::alert');
  </body>
</html>