@php
$container = 'container-xxl';
$containerNav = 'container-xxl';
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Without navbar - Layouts')

@section('content')

<style>
  .bold-text {
    font-weight: bold;
  }

  .image-container {
    position: relative;
  }

  .image {
    position: absolute;
  }

  /* Add shadow to all cards */
  /* .card {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
  } */
</style>

<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <!-- <div class="card mb-4">
                <div class="card-header">
                    <h2 class="m-0 bold-text">1.1 Mengenali AkalBOT</h2>
                </div>
            </div> -->

        <!-- <div class = "card">
                <div class="card-body">
                <h3>Kitar 1</h3>
                    <div class="image-container">
                        <img src="{{asset('assets/img/kenal-akalbot/akalbot-4.png')}}" class="img-fluid" alt="AkalBOT" style="width: 150px; height: auto;">
                        <img src="{{asset('assets/img/kenal-akalbot/akalbot-4.png')}}" class="img-fluid" alt="AkalBOT" style="width: 150px; height: auto;">                            
                        <img src="{{asset('assets/img/kenal-akalbot/akalbot-4.png')}}" class="img-fluid" alt="AkalBOT" style="width: 150px; height: auto;">
                        <img src="{{asset('assets/img/kenal-akalbot/akalbot-4.png')}}" class="img-fluid" alt="AkalBOT" style="width: 150px; height: auto;">                      
                    </div>
                </div>
            </div> -->

        <br>
        <div class="card">
          <div class="card-body">
            <h2 class="m-0 bold-text">Apa itu Carta Alir?</h2>
            <br>
            <p class="text-muted">Carta Alir adalah satu jenis diagram yang digunakan untuk menggambarkan urutan langkah atau proses dalam sesuatu sistem atau prosedur. Ia menggunakan simbol-simbol tertentu yang menunjukkan jenis tindakan atau keputusan dalam proses tersebut. Berikut adalah beberapa simbol yang digunakan dalam Carta Alir:</p>
            <ul class="text-muted">
              <li><strong>Segi Empat Tepat (Rectangle):</strong> Digunakan untuk menunjukkan aktiviti atau tindakan yang perlu dilakukan.</li>
              <li><strong>Berlian (Diamond):</strong> Digunakan untuk menunjukkan keputusan atau pilihan yang perlu dibuat dalam proses tersebut.</li>
            </ul>
            <p class="text-muted">Berikut adalah contoh Carta Alir:</p>
            <div class="text-center">
              <svg width="200" height="150">
                <!-- Rectangle for Process -->
                <rect x="50" y="20" width="100" height="40" style="fill:lightblue;stroke:black;stroke-width:2" />
                <text x="100" y="40" font-size="12" text-anchor="middle" fill="black">Aktiviti</text>

                <!-- Diamond for Decision -->
                <polygon points="50,100 100,130 150,100 100,70" style="fill:lightgreen;stroke:black;stroke-width:2" />
                <text x="100" y="100" font-size="12" text-anchor="middle" fill="black">Keputusan</text>
              </svg>
            </div>
            <p class="text-muted">Dalam contoh di atas, segi empat tepat mewakili satu aktiviti (contohnya, "Lakukan Tindakan A"), manakala berlian mewakili keputusan (contohnya, "Adakah Tindakan A berjaya?").</p>
          </div>
        </div>



      </div>
    </div>
  </div>

</body>

@endsection