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

        .title-container {
            text-align: center;
        }

    </style>

    <div class="card">
        <div class="card-body">
            <div class="title-container">
                <h3 class="card-title">Pendaftaran Baru</h3>
            </div>
            <form id="permainan" enctype="multipart/form-data">
                @csrf

                <div class="image-container">
                    <img src="{{asset('assets/img/logo/smile.png')}}" height="100" alt="View Badge User" data-app-dark-img="logo/smile-dark.png" data-app-light-img="logo/smile.png">
                </div>
                
                <div class="form-group">
                    <label for="tajuk">Nama Penuh:</label>
                    <input type="text" name="tajuk" id="tajuk" class="form-control" required>
                </div><br>

                <div class="form-group">
                    <label for="video">Username:</label>
                    <input type="text" name="video" id="video" class="form-control" required>
                </div><br>

                <div class="form-group">
                    <label for="tajuk">E-mel:</label>
                    <input type="text" name="tajuk" id="tajuk" class="form-control" required>
                </div><br>

                <div class="form-group">
                    <label for="video">Peranan:</label>
                    <div class="form-check">
                        <br>
                        <input type="radio" id="pelajar" name="peranan" value="pelajar" class="form-check-input" required>
                        <label class="form-check-label" for="pelajar">Pelajar</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" id="guru" name="peranan" value="guru" class="form-check-input" required>
                        <label class="form-check-label" for="guru">Guru</label>
                    </div>
                </div><br>

               <div class="form-group">
                    <label for="organisasi">Organisasi:</label>
                    <div class="input-group">
                        <select name="tajuk" id="organisasi" class="form-control" required>
                            <option value="" disabled selected hidden>Sila Pilih</option>
                            <option value="sekolah rendah">Sekolah Rendah</option>
                            <option value="sekolah menengah">Sekolah Menengah</option>
                            <option value="kolej">Kolej</option>
                            <option value="universiti">Universiti</option>
                        </select>
                    </div>
                </div> <br>

                <div class="form-group">
                    <label for="tajuk">Nama Organisasi:</label>
                    <input type="text" name="tajuk" id="tajuk" class="form-control" required>
                </div><br>

                <div class="form-group">
                    <label for="video">Kata Laluan</label>
                    <input type="text" name="video" id="video" class="form-control" required>
                </div><br>

                 <div class="form-group">
                    <label for="video">Pengesahan Kata Laluan:</label>
                    <input type="text" name="video" id="video" class="form-control" required>
                </div><br>

                <div class="button-container">
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </div>     

             </form>
        </div>
    </div>

    <script>
        // JavaScript for checking file extension
        document.getElementById('permainan').addEventListener('submit', function(event) {
            var hasilBlokFile = document.getElementById('hasil_blok').value;
            var hasilKodFile = document.getElementById('hasil_kod').value;
            var allowedExtensions = /(\.png|\.jpg)$/i;

            if (!allowedExtensions.exec(hasilBlokFile) || !allowedExtensions.exec(hasilKodFile)) {
                alert('Please upload PNG or JPG files only for "Hasil Blok" and "Hasil Kod" fields.');
                event.preventDefault();
                return false;
            }
        });
    </script>
@endsection
