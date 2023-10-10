<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"/>

</head>
<body>
    @extends('layouts.index')
    @section('content')
    {{-- <a href="{{ url('kas/add') }}" class="btn btn-primary plus float- mt btn-sm"><i class="bi bi-person-plus"> Tambah data</i></a> --}}
    <div class="card border-light bg-light  mt-">
        <div class="card-body ">
        <div class="card-header mb-3 bg-primary  text-white">Data Kas Siswa</div>
        <div class="col-md-12 ">
            <table class="table table-hover table-striped table-responsive-sm  table-bordered ">
                
                <tr>
                    {{-- <th>NISN</th> --}}
                    <th>NAMA</th>
                    <th>TANGGAL/BULAN/MINGGU</th>
                    <th>JENIS</th>
                    <th>BAYAR</th>
                    <th>KETERANGAN</th>
                </tr>
                @foreach ($kas as $key => $item)    
                <tr>
                    {{-- <td>{{ $item->nis }}</td> --}}
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->jns=='pemasukan'?'pemasukan':'pengeluaran' }}</td>
                    <td>{{ $item->uang  }}</td>
                    <td>{{ $item->ket}}</td>
                    
                </tr>
                @endforeach
            </table>
        </div>
        </div>
    </div>
    @endsection
</body>
</html>