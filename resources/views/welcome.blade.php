<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Pedro Silva</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('public/css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .position-ref{
                color:#282828;
                text-align:right;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <h4 class="text-center"><strong> Web Developer</strong></h4>
                            <h5><strong> Frontend </strong></h5>
                            <ul>
                                <li>Angular</li>
                                <li>VueJs</li>
                            </ul>
                            <h5><strong> Backend</strong></h5>
                            <ul>
                                <li>Laravel</li>
                                <li>Go</li>
                            </ul>

                            <hr>
                            <h4 class="text-center"><strong> Web Services</strong></h4>
                            <ul>
                                <li>Desarrollo de paginas web</li>
                                <li>Desarrollo de Apps Moviles</li>
                            </ul>

                            

                            <h3 class="social-icons text-center">
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-facebook-square"></i>
                                <i class="fa fa-mail-bulk"></i>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
        </div>
        <!--style="background-image:url('{{asset('resources/welcome/net.png')}}');"-->
        <div class="wraper2" >
            <div class="container" > 
                <div class="row">
                    <div class="col-md-6">
                         <div class="block text-center">
                             <h1 class="title">&nbsp; Pedro Silva </h1>
                             <h5 class="subtitle">&nbsp; COMING SOON</h5>
                        </div>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="{{asset('public/js/app.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
