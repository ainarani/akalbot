@php
$container = 'container-xxl';
$containerNav = 'container-xxl';
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Analisis Masalah')

@section('content')

<div class="card mb-4">
<h3 class="p-4 bold-text">
3.2  Analisis Masalah</h3>
</div>
<div class="row mb-5">
  <div class="col-md-6 col-lg-12 mb-3">
    <div class="card h-100">
      <!-- <img class="card-img-top" src="{{asset('assets/img/elements/2.jpg')}}" alt="Card image cap" /> -->
      <div class="card-body">
<style>
  .center-text {
    text-align: center;
  }
</style>

<!-- Apply the custom class to the h4 element -->
<style>
  .bold-text {
    font-weight: bold;
  }
</style>

<h5 class="card-title bold-text">3.2.1  Penguraian </h5>
        <p class="card-text">
        Masalah utama dalam misi tuju selipar ialah bagaimana untuk menyusun pergerakan AkalBOT 
supaya berjaya meruntuhkan selipar dengan jarak 60 cm daripada ianya bermula dan terhad 
kepada tiga jenis pergerakan sahaja. Oleh itu, masalah ini boleh dihuraikan mengikut urutan 
pergerakan.
        </p>

     

<!-- Apply the custom class to the p element -->
<p class="card-text bold-text">
  Tugasan 10: <br>
  Buat 3 lorekan pada Rajah 3.2. Berdasarkan lorekan ini, leraikan kod program dalam Rajah 3.3
kepada 3 leraian dan beri label yang sesuai.</p>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        img {
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<img src="{{asset('assets/img/activity_3/tugasan10.JPG')}}" class="img-fluid" alt="Responsive image">
<p  class="center-text">Rajah 3.2: Lorekkan kepada 3 bahagian</p>
<img src="{{asset('assets/img/activity_3/tugasan10_3_3.JPG')}}" class="img-fluid" alt="Responsive image">

<p  class="center-text">Rajah 3.3: Leraikan dan labelkan kepada 3 bahagian
</p>

</body>
</html>


<p class="card-text">
<html>
<body>
  <form onsubmit="myfunc(event)">
  
Apakah makna tiga leraian ini? <br><br>
(a) Sejauh mana robot perlu bergerak terus daripada tempat bermula sehingga sebelum 
berhenti untuk belok ke kanan? <br>
<style>
    /* Apply basic styling */
    #pengekodan_aturcara {
        width: 100%; /* Use 100% width */
        max-width: 550px; /* Set a maximum width */
        height: 50px;
    }

    /* Add some spacing for clarity */
    body {
        margin: 20px;
    }
</style>

<input type="text" id="tugasan10a" name="tugasan10a" style="width: 500px;"> <br><br>

(b) Berapa darjah pusingan ke kanan? <br>
<style>
    /* Apply basic styling */
    #pengekodan_aturcara {
        width: 100%; /* Use 100% width */
        max-width: 550px; /* Set a maximum width */
        height: 50px;
    }

    /* Add some spacing for clarity */
    body {
        margin: 20px;
    }
</style>

<input type="text" id="tugasan10b" name="tugasan10b" style="width: 500px;"> <br><br>

(c) Selepas berpusing ke kanan, sejauh mana robot bergerak terus sebelum berhenti pada 
lokasi yang dapat meruntuhkan susunan selipar? <br>
<style>
    /* Apply basic styling */
    #pengekodan_aturcara {
        width: 100%; /* Use 100% width */
        max-width: 550px; /* Set a maximum width */
        height: 50px;
    }

    /* Add some spacing for clarity */
    body {
        margin: 20px;
    }
</style>

<input type="text" id="tugasan10c" name="tugasan10c" style="width: 500px;"> <br><br>

</p>
<h5 class="card-title bold-text">3.2.2 Pengecaman corak pergerakan AkalBOT</h5>
        <p class="card-text">
        Terdapat 2 masalah yang telah anda selesaikan dalam Aktiviti 2, iaitu masalah 1 dalam Tugasan 
5-7 dan masalah kedua di Tugasan 8. <br><br>
<strong>Tugasan 11: </strong><br>
Mengapa pergerakan AkalBOT dalam Masalah 1 dan Masalah 2 boleh menggunakan atur cara
yang sama dengan membandingkan lukisan anda pada Lukisan A dan Lukisan B.
</p>

        </p>
        <style>
    /* Apply basic styling */
    #pengekodan_aturcara {
        width: 100%; /* Use 100% width */
        max-width: 550px; /* Set a maximum width */
        height: 150px;
    }

    /* Add some spacing for clarity */
    body {
        margin: 20px;
    }
</style>

<input type="text" id="tugasan11" name="tugasan11" style="width: 500px;"> <br><br>

<button type="submit" class="btn btn-primary">Submit</button>
  </form>


    <script type="text/javascript">
        function myfunc(event){
          event.preventDefault();

          var tugasan10a = document.getElementById("tugasan10a".value);
          var tugasan10a = document.getElementById("tugasan10b".value);
          var tugasan10a = document.getElementById("tugasan10c".value);
          var tugasan11 = document.getElementById("tugasan11".value);

          localStorage.setItem("is_tugasan10a", tugasan10a);
          localStorage.setItem("is_tugasan10b", tugasan10b);
          localStorage.setItem("is_tugasan10c", tugasan10c);
          localStorage.setItem("is_tugasan11", tugasan11);
        }
    </script>
</body>
</html>

        <!-- <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a> -->
      </div>
    </div>
  </div>
@endsection
