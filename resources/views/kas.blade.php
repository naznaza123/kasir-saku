<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    @extends('sidebar')
    @section('content')
    <a href="{{ url('kas/add') }}" class="btn btn-primary plus float-right mt-4 btn-sm"><i class="bi bi-person-plus"></i></a>
    <div class="card border-light mt-5">
        <div class="card-body">
        <div class="card-header bg-primary text-white">Data Kas Siswa</div>
        <div class="col-md-12">
            <table class="table table-hover table-striped table-bordered text-center">
                <tr>
                    <th>NISN</th>
                    <th>NAMA</th>
                    <th>TANGGAL/BULAN/MINGGU</th>
                    <th>BAYAR</th>
                    <th>KETERANGAN</th>
                    <th>ACTION</th>
                </tr>
                @foreach ($kas as $key => $item)    
                <tr>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->uang  }}</td>
                    <td>{{ $item->ket=='Lunas'?'Lunas':'Belum Bayar' }}</td>
                    <td>
                        <a href="kas/edit/{{ $item->id }}" class="btn btn-success btn-sm"><i class="bi bi-pencil-fill"></i></a>
                        <a href="kas/hapus/{{ $item->id }}" class="btn btn-danger btn-sm" onclick="return window.confirm('Hapus Data Ini ?')"><i class="bi bi-trash"></i></a>
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