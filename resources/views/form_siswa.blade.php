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
           
            background-color: #E0ECE4;
            font-family: Georgia;
        }
    </style>
</head>
<body>
    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container pt-4 mt-4">
            <div class="row justify-content-center align-item-center">
                <div class="col-md-4 py-4">
                    <h3 class="text-center fw-bold pt-3">Tambah Data Siswa</h3>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Nisn</label>
                            <input class="form-control" type="text" name="nis" id="nis" value="{{ $siswa->nis }}" placeholder="Masukkan Nisn">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Nama</label>
                            <input class="form-control" type="text" name="nama" id="nama" value="{{ $siswa->nama }}" placeholder="Masukkan Nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Kelas</label>
                            <input class="form-control" type="text" name="kelas" id="kelas" value="{{ $siswa->kelas }}" placeholder="Masukkan Kelas">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="jk">Jenis Kelamin</label><br>
                            <input type="radio" name="jk" id="jk" value="L" {{ $siswa->jk=="L"?"checked":"" }}>Laki-laki
                            <input type="radio" name="jk" id="jk" value="P" {{ $siswa->jk=="P"?"checked":"" }}>Perempuan
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">No Hp</label>
                            <input class="form-control" type="text" name="no_hp" id="no_hp" value="{{ $siswa->no_hp }}" placeholder="Masukkan No Hp">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Alamat</label>
                            <input class="form-control" type="text" name="alamat" id="alamat" value="{{ $siswa->alamat }}" placeholder="Masukkan Alamat">
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
</html>
