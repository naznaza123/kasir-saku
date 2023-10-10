<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAS</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
           
            /* background-color: #E0ECE4; */
            /* font-family: Georgia; */
        }
    </style>
</head>
@extends('layouts.index')

@section('content')
    
<body>
    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container pt-1 mt-1">
            <div class="row justify-content-center align-item-center">
                <div class="col-md-4 py-4">
                    <h3 class="text-center fw-bold pt-3">Tambah Data Kas</h3>
                    {{-- <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Nisn</label>
                            <input class="form-control" type="text" name="nis" id="nis" value="{{ $kas->nis }}" placeholder="Masukkan Nisn">
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Nama</label>
                            <input class="form-control" type="text" name="nama" id="nama" value="{{ $kas->nama }}" placeholder="Masukkan Nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Tanggal</label>
                            <input class="form-control" type="date" name="tanggal" id="tanggal" value="{{ $kas->tanggal }}" placeholder="Masukkan Tanggal">

                        </div>
                    </div>
                    {{-- <div class="col-mb-3">
                        <div class="form-group">
                            <label class="form-label fw-bold" for="jk">Keterangan</label><br>
                            <input type="radio" name="jns" id="jns" value="pemasukan" {{ $kas->jns=="pemasukan"?"checked":"" }}>pemasukan
                            <input type="radio" name="jns" id="jns" value="pengeluaran" {{ $kas->jns=="pengeluaran"?"checked":"" }}>pengeluaran
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Uang Bayar</label>
                            <input class="form-control" type="text" name="uang" id="uang" value="{{ $kas->uang }}" placeholder="Masukkan Banyak Uang">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Keterangan</label>
                            <input class="form-control" type="text" name="ket" id="nama" value="{{ $kas->ket }}" placeholder="Masukkan keterangan">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="pt-3">
                            <input class="form-control btn btn-primary" type="submit" value="{{ $tombol }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>   
</body>
@endsection
</html>
