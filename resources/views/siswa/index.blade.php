<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> 
</head>
<style>
    body {
                    background: #ecf0f3;
     }
</style>
<body>
    
</body>
</html>
@extends('layouts.index')
{{-- @section('title')
    Tambah data siswa
@endsection --}}
@section('content')

    {{-- newtable --}}

    <div class="container-fluid">
       
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}
                <a href="{{ url('siswa/create') }}" style="color: #DFBA4E;" class="bg-primary  mb-2 btn  btn-icon-split">
                    <span  class="icon bg-primary text-white-50">
                        <i  style="color: #DFBA4E;" class="fas fa-plus"></i>
                    </span>
                    {{-- <span class="text">Tambah pemasukan</span> --}}
                </a>
            </div>
            <div class="card-body">
                <div class=" table table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
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
                        </thead>
                        <tfoot>
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
                        </tfoot>
                        <tbody>
                            @foreach ($siswa as $key => $item)    
                            <tr>
                                {{-- <td>{{ $item->nis }}</td> --}}
                                <td>{{ $key+1}}</td>
                                <td>{{ $item -> nis }}</td>
                                <td>{{ $item -> nama }}</td>
                                <td>{{ $item -> kelas }}</td>
                                <td>{{ $item -> jk=='L'?'L':'P' }}</td>
                                <td>{{ $item -> no_hp }}</td>
                                <td>{{ $item -> alamat }}</td>
                                <td>
                                    <a href="siswa/edit/{{ $item->nis }}" class="btn btn-success btn-sm"><i class="bi bi-pencil-fill"></i></a>
                                    <a href="siswa/destroy/{{ $item->nis }}" class="btn btn-danger btn-sm" onclick="return window.confirm('Hapus Data Ini ?')"><i class="bi bi-trash"></i></a>
                                    <a href="kas/{{ $item->nama }}" class="btn btn-info btn-sm"><i class="bi bi-search"></i></a>                       
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- end table --}}
@endsection

<script src="{{ asset('js/bootstrap.min.js') }}"></script>

    