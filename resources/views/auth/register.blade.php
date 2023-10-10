{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

{{-- Registnew --}}
{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <script src="{{ asset('js/app.js') }}" defer></script>
    
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/hover.css') }}">

    
        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <style>
            /* Importing fonts from Google */
                @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

                /* Reseting */
                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    font-family: 'Poppins', sans-serif;
                }

                body {
                    background: #ecf0f3;
                }

                .wrapper {
                    max-width: 350px;
                    min-height: 500px;
                    margin: 80px auto;
                    padding: 40px 30px 30px 30px;
                    background-color: #ecf0f3;
                    border-radius: 15px;
                    box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
                }

                .logo {
                    width: 80px;
                    margin: auto;
                }

                .logo img {
                    width: 100%;
                    height: 80px;
                    object-fit: cover;
                    border-radius: 50%;
                    box-shadow: 0px 0px 3px #5f5f5f,
                        0px 0px 0px 5px #ecf0f3,
                        8px 8px 15px #a7aaa7,
                        -8px -8px 15px #fff;
                }

                .wrapper .name {
                    font-weight: 600;
                    font-size: 1.4rem;
                    letter-spacing: 1.3px;
                    padding-left: 10px;
                    color: #555;
                }

                .wrapper .form-field input {
                    width: 100%;
                    display: block;
                    border: none;
                    outline: none;
                    background: none;
                    font-size: 1.2rem;
                    color: #666;
                    padding: 10px 15px 10px 10px;
                    /* border: 1px solid red; */
                }

                .wrapper .form-field {
                    padding-left: 10px;
                    margin-bottom: 20px;
                    border-radius: 20px;
                    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
                }

                .wrapper .form-field .fas {
                    color: #555;
                }

                .wrapper .btn {
                    box-shadow: none;
                    width: 100%;
                    height: 40px;
                    background-color: #4e73df;
;
                    color: #fff;
                    border-radius: 25px;
                    box-shadow: 3px 3px 3px #b1b1b1,
                        -3px -3px 3px #fff;
                    letter-spacing: 1.3px;
                }

                .wrapper .btn:hover {
                    background-color: #4e73df;
                }

                .wrapper a {
                    text-decoration: none;
                    font-size: 0.8rem;
                    color: #000000;
                }

                .wrapper a:hover {
                    color: #4e73df
                }

                @media(max-width: 380px) {
                    .wrapper {
                        margin: 30px 20px;
                        padding: 40px 15px 15px 15px;
                    }
                }
        </style>
<body class="">
 
    </div>

    {{-- newlogin --}}
    <div class="wrapper">
        <div class="logo">
        <img class="" src="{{ asset('img/KasirSaku.jpg') }}" alt="">
        </div>
        <div class="text-center mt-4 name">
            {{ __('Register') }}
        </div>
        <form action="{{ route('register') }}" method="POST" class="p-3 mt-3">
            @csrf
            <div class="form-field d-flex align-items-center">
                <span class="far fa-name"></span>
                <input type="name" name="name" id="name" placeholder="Name" value="{{ old('name') }}" class="@error('name') is-invalid @enderror form-control form-control-lg" 
                required  autofocus >
                @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                @enderror
                
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror form-control form-control-lg" 
                required autocomplete="email" autofocus >
                @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                @enderror
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="Password" value="{{ old('password') }}" class="@error('password') is-invalid @enderror form-control form-control-lg" 
                required autocomplete="new-password" autofocus>
                @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                @enderror
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password_confirmation" id="password-confirm" placeholder="Password Confirm" value="{{ old('password') }}" class="@error('password') is-invalid @enderror form-control form-control-lg" 
                required autocomplete="new-password" autofocus>
               
            </div>
            <button class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6">

            @if (Route::has('password.request'))
            <a class="hvr-underline-from-center " href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
             @endif
             <br>
            
            or <br>
             <a class="hvr-underline-from-center" href="{{ route('register') }}">Sign up</a>
        </div>
    </div>
</body>
</html>
{{-- @endsection --}}

