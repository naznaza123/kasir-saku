<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KEUANGAN | Pengeluaran</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="style.css">
</head>
<body>
@extends('sidebar')
@section('content')
    <a href="{{ url('pengeluaran/add') }}" class="btn btn-primary float-right mt-4 btn-sm"><i class="bi bi-plus-circle"></i> Add Pengeluaran</a>
    <div class="card border-light mt-5">
        <div class="card-header bg-primary text-white">Data Pengeluaran</div>
        <div class="card-body">
        <div class="col-md-12">
            <table class="table table-hover table-striped table-bordered text-center">
                <tr>
                    <th>NO</th>
                    <th>TANGGAL</th>
                    <th>NAMA KATEGORI</th>
                    <th>HARGA</th>
                    <th>KETERANGAN</th>
                    <th>ACTION</th>
                </tr>
                @foreach ($pengeluaran as $key => $item)    
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->harga_barang}}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>
                        <a href="pengeluaran/edit/{{ $item->id }}" class="btn btn-success btn-sm"><i class="bi bi-pencil-fill"></i></a>
                        <a href="pengeluaran/hapus/{{ $item->id }}" class="btn btn-danger btn-sm" onclick="return window.confirm('Hapus Data Ini ?')"><i class="bi bi-trash"></i></a>
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