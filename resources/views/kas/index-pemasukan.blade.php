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
    <style>
        .btn {
            background: #DFBA4E;
        }
    </style> 
</head>
<body>
    @extends('layouts.index')
    @section('content')
    {{-- <a href="{{ url('kas/create') }}" class="btn btn-primary plus float- mt btn-sm"><i class="bi bi-person-plus"> Tambah data</i></a> --}}
    {{-- tablenew --}}
    
    <div class="container-fluid">
        <div class="card shadow mb-2">
            <div class="card-header py-3">
                <a href="{{ url('kas/create') }}" style="color: #DFBA4E;" class="bg-primary  mb-2 btn  btn-icon-split">
                    <span  class="icon bg-primary text-white-50">
                        <i  style="color: #DFBA4E;" class="fas fa-plus"></i>
                    </span>
                    {{-- <span class="text">Tambah pemasukan</span> --}}
                </a>
                {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NAMA</th>
                                <th>TANGGAL/BULAN/MINGGU</th>
                                {{-- <th>JENIS</th> --}}
                                <th>KATEGORI</th>
                                <th>BAYAR</th>
                                <th>KETERANGAN</th>
                                <th>ACTION</th> 
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>NAMA</th>
                                <th>TANGGAL/BULAN/MINGGU</th>
                                {{-- <th>JENIS</th> --}}
                                <th>KATEGORI</th>
                                <th>BAYAR</th>
                                <th>KETERANGAN</th>
                                <th>ACTION</th>  
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($kas as $key => $item)    
                            <tr>
                                {{-- <td>{{ $item->nis }}</td> --}}
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->tanggal }}</td>
                                {{-- <td>{{ $item->jns=='pemasukan'?'pemasukan':'pengeluaran' }}</td> --}}
                                <td>{{ $item->kategori}}</td>
                                <td>{{ formatrupiah($item->uang)   }}</td>
                                <td>{{ $item->ket}}</td>
                                <td>
                                    <a href="kas/edit/{{ $item->id }}" class="btn btn-circle btn-success btn-sm"><i class="bi bi-pencil-fill"></i></a>
                                    <a href="kas/destroy/{{ $item->id }}" class="btn btn-circle btn-danger btn-sm" onclick="return window.confirm('Hapus Data Ini ?')"><i class="bi bi-trash"></i></a>
                                </td>
                                <script>
                                    function destroy(id){
                                        Swal.fire({
                                        position: 'top-end',
                                        icon: 'success',
                                        title: 'Your work has been saved',
                                        showConfirmButton: false,
                                        timer: 1500
                                        })
                                    }
                                </script>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

{{-- endtable --}}

    @endsection
</body>
</html>