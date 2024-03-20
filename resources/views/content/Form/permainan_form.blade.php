@extends('layouts/contentNavbarLayout')

@section('title', 'Without navbar - Layouts')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Permainan Baru</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-top:50px">
        <h4>Cipta Permainan Baru</h4>
        <hr>

        @if(Session::get('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif

         @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{Session::get('fail')}}
        </div>
        @endif

            <form action="{{ route('creategame') }}" method="post">

            @csrf

                <div class="form-group">
                    <label for="">ID</label>
                    <input type="text" class="form-control" name="id" placeholder="ID Permainan">
                </div>

                <div class="form-group">
                    <label for="">Tajuk</label>
                    <input type="text" class="form-control" name="tajuk" placeholder="Masukkan tajuk">
                    <span style="color:red">@error('tajuk'){{@message}} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="">Permasalahan</label>
                    <input type="text" class="form-control" name="permasalahan" placeholder="Masukkan permasalahan ">
                </div>

                <div class="form-group">
                    <label for="">gambar akalbot test</label>
                    <input type="text" class="form-control" name="gambar" placeholder="Masukkan gambar">
                </div>

                <div class="form-group">
                    <label for="">hasil kod</label>
                    <input type="text" class="form-control" name="hasilkod" placeholder="Masukkan hasil kod">
                </div>

                <div class="form-group">
                    <label for="">Uji Minda</label>
                    <input type="text" class="form-control" name="ujiminda" placeholder="Masukkan soalan uji minda">
                </div>

                <div class="form-group">
                    <label for="">Pautan Video</label>
                    <input type="text" class="form-control" name="pautanvideo" placeholder="pautan video">
                </div><br>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </div>

            </form>
        </div>
    </div>
</div>
    
</body>
</html>

    <!-- <div class="card">
        <div class="card-body">
            <h3 class="card-title">Permainan Baru</h3>
            <form id="permainan" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Tajuk </label>
                    <div class="input-group input-group-merge">
                    <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-company">Permasalahan</label>
                    <div class="input-group input-group-merge">
                    <input type="text" id="basic-icon-default-company" class="form-control" placeholder="ACME Inc." aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" />
                    </div>
                </div>

                  File input 
                
              
              
                 <div class="mb-3">
                    <label for="formFile" class="form-label">Gambar Akalbot</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                
                 <div class="mb-3">
                    <label for="formFile" class="form-label">Hasil Kod </label>
                    <input class="form-control" type="file" id="formFile">
                </div>
             

               <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Uji Minda</label>
                    <div class="input-group input-group-merge">
                    <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-company">Pautan Video</label>
                    <div class="input-group input-group-merge">
                    <input type="text" id="basic-icon-default-company" class="form-control" placeholder="ACME Inc." aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" />
                    </div>
                </div>

                <div class="card-body" style="text-align: center;">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

            </form>
        </div>
    </div> -->

    
@endsection

