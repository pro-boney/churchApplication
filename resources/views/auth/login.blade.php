
    <!DOCTYPE html>
<html>
<head>
    <title>Church App</title>

        <script type="text/javascript" src="{{ asset('js/newJquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
         <link rel="stylesheet" href="{{ asset('css/mystylesheet.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">


        <style type="text/css">
            #shows2{
            background-image:url(' {{asset('/image/main.jpg')}}'); 
            background-repeat:no-repeat;
            background-size:cover;
            background-attachment:fixed;
            background-position:80% 60%;
            //height:550px;
            margin:0px;
            padding:0px;
        }
        </style>
</head>
<body>
    <div class="container-fluid" id="shows2" style="padding-top:80px;">
           
                <div>
                    <center>
                        <img src="{{asset('/image/fire.png')}}" style="width:150px; height:120px; border-radius:50%;">
                    </center>
                </div>
         <div class="cart" style="width:30%; padding:40px; margin-bottom:10px; border:1px solid gray; margin:20px auto; border-radius:50px 50px 0px 0px; background-color:gray;">
            <form>
                <div>
                    <label>User Name</label>
                    <input type="email" name="" class="form-control">
                </div>

                 <div>
                    <label>Password</label>
                    <input type="password" class="form-control" name="">
                </div>

                <div class="form-group row">
                    <div style="margin-left:13px; margin-top:20px;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                  {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div >
                        <button type="submit" class="btn btn-danger btn-lg">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>


            </form>
        </div>
        <center>
           <h1 style="color:white;">
                WELCOME TO FIRE 4 FIRE INTERNATIONAL MINISTRY PLATFORM ...
           </h1> 
        </center>
    </div>
</body>
</html>













    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->

