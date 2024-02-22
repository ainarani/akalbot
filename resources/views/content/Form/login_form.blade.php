@extends('layouts/contentNavbarLayout')

@section('title', 'Without navbar - Layouts')

@section('content')

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto; /* This ensures the entire viewport height is covered */
        }

        .card {
            width: 500px; /* Adjust the width as needed */
            height: auto; /* Adjust the height as needed or remove this line to maintain aspect ratio */
            /* You can also set max-width or max-height if needed */
        }

        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px; /* Set the height of the container to match the image height */
        }

        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px; /* Adjust margin-top as needed */
        }

    </style>

    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Selamat Datang ke Sistem AkalBOT </h3>
            <form id="permainan" enctype="multipart/form-data">
                @csrf
                
                <br><br>
                <div class="image-container">
                    <img src="{{asset('assets/img/logo/smile.png')}}" height="200" alt="View Badge User" data-app-dark-img="logo/smile-dark.png" data-app-light-img="logo/smile.png">
                </div>
                <br><br>

                <div class="form-group">
                    <label for="tajuk">E-mel:</label>
                    <input type="text" name="tajuk" id="tajuk" class="form-control" required>
                </div><br>

                <div class="form-group">
                    <label for="video">Kata Laluan</label>
                    <input type="text" name="video" id="video" class="form-control" required>
                </div><br>

                <div class="button-container">
                    <button type="submit" class="btn btn-primary">Log Masuk</button>
                </div>

            </form>
        </div>
    </div>

@endsection
