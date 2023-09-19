<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEUANGAN | Data Siswa</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="style.css">
    <style>

    </style>
</head>
<body>
@extends('sidebar')
@section('content')
<a href="{{ url('siswa/add') }}" class="btn btn-primary plus float-right mt-4 btn-sm"><i class="bi bi-person-plus"></i> Add Siswa </a>
<div class="card border-light mt-5">
        <div class="card-header bg-primary text-white">Data Siswa</div>
        <div class="card-body ">
        <div class="col-md-12">
            <table class="table table-hover table-striped table-bordered text-center">
                <tr>
                    <th>NO</th>
                    <th>NISN</th>
                    <th>NAMA</th>
                    <th>KELAS</th>
                    <th>JK</th>
                    <th>NO HP</th>
                    <th>ALAMAT</th>
                    <th>ACTION</th>
                </tr>
                @foreach ($siswa as $key => $item)
                <tr>
                    <td>{{ $key+1}}</td>
                    <td>{{ $item -> nis }}</td>
                    <td>{{ $item -> nama }}</td>
                    <td>{{ $item -> kelas }}</td>
                    <td>{{ $item -> jk=='L'?'L':'P' }}</td>
                    <td>{{ $item -> no_hp }}</td>
                    <td>{{ $item -> alamat }}</td>
                    <td>
                        <a href="siswa/edit/{{ $item->nis }}" class="btn btn-success btn-sm"><i class="bi bi-pencil-fill"></i></a>
                        <a href="siswa/hapus/{{ $item->nis }}" class="btn btn-danger btn-sm" onclick="return window.confirm('Hapus Data Ini ?')"><i class="bi bi-trash"></i></a>
                        <a href="kas/{{ $item->id }}" class="btn btn-info btn-sm"><i class="bi bi-search"></i></a>                       
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        </div>
    </div>
@endsection
</body>
</html>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

