<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KEUANGAN | Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
            body{
            background-color: rgb(250, 251, 252);
           
            }
    </style>
</head>
<body>
    <form action="{{ url('register') }}" method="post">
        @csrf
        <div class="container pt-4 mt-4 ">
            <div class="row justify-content-center align-item-center">
                <div class="col-md-4 py-4">
                    <h3 class="text-center fw-bold pt-3">R E G I S T E R</h3>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Nama</label>
                           <input class="form-control" type="nama" name="nama" id="nama" placeholder="Masukkan Nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Email</label>
                            <input class="form-control" type="email" name="email" id="email" placeholder="Masukkan Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Password</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="Masukkan Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-mb-3">
                            <label class="form-label fw-bold" for="">Confirm Password</label>
                            <input class="form-control" type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="pt-3">
                            <input type="submit" value="SIMPAN" class="form-control btn btn-primary">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>   
</body>
</html>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
