<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> KEUANGAN| Home </title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            background-color: rgb(255, 255, 255);
        }
    </style>
</head>
<body>
@extends('sidebar')
@section('content')
<br>
<br><br><br><br><br> 
@csrf
            <h1 class="text-center mt-2 text-light" style="font-family: Impact">W E L C O M E !</h1>
            <p class="text-center mt-2 text-light" style="font-family: monospace"> WELCOME TO MY CASH APPLICATION_LUSSY
             </p>

    @endsection   
</body>
</html>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>



{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
