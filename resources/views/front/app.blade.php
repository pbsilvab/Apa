<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apa Project</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/mdb.css')}}">
    <style>
        .wrapper{
            padding-top:25px;
            padding-bottom:15px;
        }
        .navbar.navbar-1 .navbar-toggler-icon {
            background-image: url('https://mdbootstrap.com/img/svg/hamburger6.svg?color=000');
            }
            .navbar.navbar-2 .navbar-toggler-icon {
            background-image: url('https://mdbootstrap.com/img/svg/hamburger2.svg?color=fff');
            }
            .navbar.navbar-3 .navbar-toggler-icon {
            background-image: url('https://mdbootstrap.com/img/svg/hamburger1.svg?color=6a1b9a');
            }
            .navbar.navbar-4 .navbar-toggler-icon {
            background-image: url('https://mdbootstrap.com/img/svg/hamburger7.svg?color=BFE100');
            }
            .navbar.navbar-5 .navbar-toggler-icon {
            background-image: url('https://mdbootstrap.com/img/svg/hamburger5.svg?color=f3e5f5');
            }
            .navbar.navbar-6 .navbar-toggler-icon {
            background-image: url('https://mdbootstrap.com/img/svg/hamburger8.svg?color=E3005C');
            }
            .navbar.navbar-7 .navbar-toggler-icon {
            background-image: url('https://mdbootstrap.com/img/svg/hamburger9.svg?color=FF2C00');
            }
            .navbar.navbar-8 .navbar-toggler-icon {
            background-image: url('https://mdbootstrap.com/img/svg/hamburger4.svg?color=1729B0');
            }
            .navbar.navbar-9 .navbar-toggler-icon {
            background-image: url('https://mdbootstrap.com/img/svg/hamburger3.svg?color=00FBD8');
            }
    </style>
</head>
<body class="special-color">
    <!--Navbar-->
        <nav class="navbar navbar-light special-color-dark navbar-1">

        <!-- Navbar brand -->
        <a class="navbar-brand text-white-50" href="#">Developers Guide</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15"
            aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent15">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link text-white-50" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white-50" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white-50" href="#">Pricing</a>
            </li>
            </ul>
            <!-- Links -->

        </div>
        <!-- Collapsible content -->

        </nav>
        <!--/.Navbar-->
        <div class="container">
            <div class="wrapper">

            </div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <!-- Card Narrower -->
                        <div class="card card-cascade narrower">

                        <!-- Card content -->
                        <div class="card-body card-body-cascade">

                            <!-- Default form login -->
                                    <form class="text-center p-5"   method="POST" action="{{ route('login') }}">

                                        <p class="h4 mb-4">Sign in</p>

                                        <!-- Email -->
                                        <input type="email" id="defaultLoginFormEmail" class="mb-4 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus  placeholder="{{ __('E-Mail Address') }}">

                                        <!-- Password -->
                                        <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

                                        <div class="d-flex justify-content-around">
                                            <div>
                                                <!-- Remember me -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                                                    <label class="custom-control-label" for="defaultLoginFormRemember" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember me</label>
                                                </div>
                                            </div>
                                            <div>
                                                <!-- Forgot password -->
                                                <a href="">Forgot password?</a>
                                            </div>
                                        </div>

                                        <!-- Sign in button -->
                                        <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

                                        <!-- Register -->
                                        <p>Not a member?
                                            <a href="">Register</a>
                                        </p>

                                        <!-- Social login -->
                                        <p>or sign in with:</p>

                                        <a type="button" class="light-blue-text mx-2">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a type="button" class="light-blue-text mx-2">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a type="button" class="light-blue-text mx-2">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a type="button" class="light-blue-text mx-2">
                                            <i class="fab fa-github"></i>
                                        </a>

                                    </form>
                                    <!-- Default form login -->

                        </div>
                    </div>
                        <!-- Card Narrower -->

                </div>
            </div>
        </div>
        
    <script src="{{asset('assets/js/jquery-3.4.0.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>