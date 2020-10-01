<!DOCTYPE html>
<html>
<head>
    <title>Church App</title>
    <script type="text/javascript" src="{{asset('/js/newJquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/mystylesheet.css')}}">
    </style>
</head>
<body>
    <div style="width:100%; height:60px; background-color:black; position:;" class="fixed-top">
        <nav class="navbar navbar-expand-md navbar-dark  shadow-sm">
            <div class="container">
                 <a class="navbar-brand disabled" role="button" aria-disabled="true" href="#" >
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    Fir4Fire International Ministry
                </a> 
                <button class="navbar-toggler btn btn-primary" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon" style="background-color:;"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-5">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link btn btn-outline-danger btn-sm ml-5" style="color:gold;"><i>Donation</i></a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary" href="{{ route('login') }}">{{ __('Portal') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li> -->
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                         <a class="dropdown-item" href="{{ route('home') }}">
                                        {{ __('Portal') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container"  style="margin-top:60px;">
        <div style="padding:20px;">
            <span><i class="fas fa-2x fa-bars text-primary" ></i></span>  <h2 class="ml-3 text-primary" style=" display:inline;"><i>APP MENU</i></h2>
        </div>
        <div class="row" style="padding:40px; background-color:#f1f1f1;">
            <div class="col-sm-3 mb-4">
                <a href="{{route('general')}}">
                <div class="card" style="border:1px solid black;">
                    <div class="card-img-top" style="height:200px; background-color:darkred;">
                        <center><i class="fas fa-8x fa-bahai" style="margin-top:30px; color:gold; "></i></center>
                    </div>
                    <div class="card-title text-center">
                        GENERIAL
                    </div>
                </div>
                </a>
            </div>

            <div class="col-sm-3 mb-4">
                  <a href="">
                <div class="card">
                    <div class="card-img-top" style="height:190px; background-color:darkred;">
                        <center><i class="fas fa-8x fa-building" style="margin-top:30px; color:lightgray; "></i></center>
                    </div>
                    <div class="card-title text-center">
                        <h4 style="color:black;">DEPARTMENT</h4>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-sm-3 mb-4">
                  <a href="">
                <div class="card">
                    <div class="card-img-top" style="height:200px; background-color:darkred;">
                        <center><i class="fas fa-8x fa-american-sign-language-interpreting" style="margin-top:30px; color:green; "></i></center>
                    </div>
                    <div class="card-title text-center">
                        FELLOWSHIP
                    </div>
                </div>
                </a>
            </div>

            <div class="col-sm-3 mb-4">
                  <a href="">
                <div class="card">
                    <div class="card-img-top" style="height:200px; background-color:darkred;">
                        <center><i class="far fa-8x fa-gem" style="margin-top:30px; color:orange; "></i></center>
                    </div>
                    <div class="card-title text-center">
                        TITHE
                    </div>
                </div>
                </a>
            </div>

            <div class="col-sm-3 mb-4">
                <a href="">
                <div class="card">
                    <div class="card-img-top" style="height:200px; background-color:darkred;">
                        <center><i class="fas fa-8x fa-chess-queen" style="margin-top:30px; color:white; "></i>
                    </div>
                    <div class="card-title text-center">
                        PASTORIAL
                    </div>
                </div>
                </a>
            </div>

            <div class="col-sm-3 mb-4">
                <a href="">
                <div class="card">
                    <div class="card-img-top" style="height:200px; background-color:darkred;">
                        <center><i class="fas fa-8x fa-cogs" style="margin-top:30px; color:black;"></i></center>
                    </div>
                    <div class="card-title text-center">
                        SETTING
                    </div>
                </div>
                </a>
            </div>

         

        </div>
    </div>

</body>
</html>




































