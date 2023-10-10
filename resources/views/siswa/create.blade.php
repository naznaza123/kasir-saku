
 @extends('layouts.index')

    @section('content')
        
    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="container pt-4 mt-4">
                <div class="row justify-content-center align-item-center">
                    <div class="col-md-4 py-4">
                        <h3 class="text-center fw-bold pt-3">Tambah Data Siswa</h3>
                        <div class="form-group">
                            <div class="col-mb-3 @error('nis') is-invalid @enderror   ">
                                <label class="form-label fw-bold" for="">Nis</label>
                                <input class="form-control hvr-grow-shadow" type="text" name="nis" id="nis" value="{{ old('nis') }}{{ $siswa->nis }}" placeholder="Masukkan Nisn">
                            </div>
                            @error('nis')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <div class="col-mb-3  @error('nama') is-invalid @enderror">
                                <label class="form-label fw-bold" for="">Nama</label>
                                <input class="form-control hvr-grow-shadow" type="text" name="nama" id="nama" value="{{ old('nama') }}{{ $siswa->nama }}" placeholder="Masukkan Nama">
                            </div>
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <div class="col-mb-3">
                                <label class="form-label fw-bold" for="">Kelas</label>
                                <input class="form-control hvr-grow-shadow" type="text" name="kelas" id="kelas" value="{{ old('kelas') }}{{ $siswa->kelas }}" placeholder="Masukkan Kelas">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-mb-3">
                                <label class="form-label fw-bold" for="jk">Jenis Kelamin</label><br>
                                <input class="" type="radio" name="jk" id="jk" value="L"

                                    @if(old('jk',$siswa->jk)=="L") checked @endif

                                > Laki-laki
                                    <br>
                                <input type="radio" name="jk" id="jk" value="P"
                                
                                    @if(old('jk',$siswa->jk)=="P") checked @endif
                                
                                > Perempuan

                            </div>

                            
                        </div>
                        <div class="form-group">
                            <div class="col-mb-3  @error('no_hp') is-invalid @enderror">
                                <label class="form-label fw-bold" for="">No Hp</label>
                                <input class="form-control hvr-grow-shadow" type="text" name="no_hp" id="no_hp" value="{{ old('no_hp') }}{{ $siswa->no_hp }}" placeholder="Masukkan No Hp">
                            </div>
                            @error('no_hp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <div class="col-mb-3  @error('alamat') is-invalid @enderror">
                                <label class="form-label fw-bold" for="">Alamat</label>
                                <input class="form-control hvr-grow-shadow" type="text" name="alamat" id="alamat" value="{{ old('alamat') }}{{ $siswa->alamat }}" placeholder="Masukkan Alamat">
                            </div>
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                        @enderror
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
    
    
           
    </html>

    @endsection
