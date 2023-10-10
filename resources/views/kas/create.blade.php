<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAS</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hover.css') }}">
    {{-- <link rel="stylesheet" href="style.css"> --}}
    
        
</head>
@extends('layouts.index')

@section('content')
    
<body class="">
    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="animate__animated animate__fadeIn animate__slow container pt-1 mt-1" >
            <div class="row justify-content-center align-item-center">
                <div class="col-md-4 py-2">
                    <h3  class=" text-center fw-bold pt-3">Tambah Pemasukan</h3>
                    {{-- <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Nisn</label>
                            <input class="form-control" type="text" name="nis" id="nis" value="{{ $kas->nis }}" placeholder="Masukkan Nisn">
                        </div>
                    </div> --}}
                    <div class="form-group ">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Nama</label>
                            <select name="nama" id="nama" class="hvr-grow  shadow-lg  form-control @error('nama') is-invalid @enderror">
                                <option value="{">- pilih nama -</option>
                                @foreach ($namas as $item)
                                    
                                <option name="nama" id="nama" class="" 

                                    @if (old('nama'))
                                        == {{ $item->nama }};
                                        {{ 'selected' }}
                                    @endif
                                    @if ($kas->nama)
                                        == {{ $item->nama }};
                                        {{ 'selected' }}
                                    @endif
                                 value="{{ $item->nama }}">{{ $item->nama }}</option>
                                @endforeach

                                

                            </select>
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                    
                                </div>
                                
                            @enderror
                            {{-- <input class="form-control" type="text" name="nama" id="nama" value="{{ Auth::user()->name }} {{ $kas->nama }}" placeholder="Masukan nama" > --}}
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3 ">
                            <label class="form-label fw-bold" for="">Tanggal</label>
                            <input class="form-control hvr-grow  shadow-lg" type="date" name="tanggal" id="tanggal" value="{{ date('Y-m-d', time()) }}" placeholder="Masukkan Tanggal">
                            

                        </div>
                    </div>
                    <div class="col-mb-3">
                        <div class="form-group">
                            <label for="form-label" class="form-label fw-bold">Pilih jenis</label>
                        <div class="form-group input-group ">
                            <select class="form-control shadow-lg hvr-grow @error('kategori') is-invalid @enderror " name="kategori" id="kategori">
                                <option value="">- pilih jenis -</option>
                                @foreach ($kateg as $item)
                                    <option value="{{ $item->kategori }} {{ $kas->kategori }}"
                                        
                                        @if (old('kategori'))
                                        == {{ $item->kategori }};
                                        {{ 'selected' }}
                                         @endif
                                         @if ($kas->kategori)
                                        == {{ $item->kategori }};
                                        {{ 'selected' }}
                                         @endif
                                        


                                     >{{ $item->kategori }}</option>
                                @endforeach
                            </select>
                            <div class="input-group-append">
                                <button class="btn hvr-grow btn-primary" type="submit">
                                    <a class=" text-light"  href="{{ route('kategori-create') }}">+</a>
                                </button>  
                            </div>
                            @error('kategori')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            
                        @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Uang Bayar</label>
                            <input class="form-control hvr-grow  shadow-lg @error('uang') is-invalid @enderror"  name="uang" id="uang" value="{{ old('uang') }} {{ $kas->uang }}" placeholder="Masukkan Banyak Uang">
                        </div>
                        @error('uang')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3 ">
                            {{-- <label class="form-label fw-bold" for="jk">Keterangan</label><br> --}}
                            {{-- <input type="radio" name="ket" id="ket" value="Lunas" {{ $kas->ket=="Lunas"?"checked":"" }}>Lunas
                            <input type="radio" name="ket" id="ket" value="Belumbayar" {{ $kas->ket=="Belumbayar"?"checked":"" }}>Belum Bayar 
                            --}}
                            <label class="form-label fw-bold" for="">Keterangan</label>
                            <input class="form-control hvr-grow shadow-lg @error('ket') is-invalid @enderror form-control" type="text" name="ket" id="ket" value="{{ old('ket') }} {{ $kas->ket }}" placeholder="Detail Keterangan">
                        </div>
                        @error('ket')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                        @enderror
                    </div>
                    <div class="form-group text-center">
                        <div class="pt-3">
                            {{-- <a href="" value="{{ $tombol }}" type="submit" class=" btn form-control hvr-underline-from-center">SIMPAN</a> --}}
                            <button class="btn hvr-float-shadow">
                                <input class=" form-control btn btn-primary text" type="submit" value="{{ $tombol }}">

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>   
</body>


@endsection
</html>
