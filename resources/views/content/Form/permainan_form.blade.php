@extends('layouts/contentNavbarLayout')

@section('title', 'Without navbar - Layouts')

@section('content')

    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Permainan Baru</h3>
            <form id="permainan" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="tajuk">Tajuk:</label>
                    <input type="text" name="tajuk" id="tajuk" class="form-control" required>
                </div><br>

                <div class="form-group">
                    <label for="permasalahan">Permasalahan:</label>
                    <!-- <input type="text" name="permasalahan" id="permasalahan" class="form-control" required> -->
                    <textarea name="permasalahan" id="permasalahan" class="form-control" required></textarea>

                </div><br>

                <div class="form-group">
                    <label for="hasil_blok">Hasil Blok (Image):</label><br>
                    <input type="file" name="hasil_blok" id="hasil_blok" class="form-control-file" required accept="image/png, image/jpeg">
                </div><br>

                <div class="form-group">
                    <label for="hasil_kod">Hasil Kod (Image):</label><br>
                    <input type="file" name="hasil_kod" id="hasil_kod" class="form-control-file" required accept="image/png, image/jpeg">
                </div><br>

                <div class="form-group">
                    <label for="uji_minda">Uji Minda:</label>
                    <textarea name="uji_minda" id="uji_minda" class="form-control" required></textarea>
                </div><br>

                <div class="form-group">
                    <label for="video">Video:</label>
                    <input type="text" name="video" id="video" class="form-control" required>
                </div><br>

                <button type="submit" class="btn btn-primary">Simpan</button>
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
