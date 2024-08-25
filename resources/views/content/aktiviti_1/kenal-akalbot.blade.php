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
                  <h2 class="m-0 bold-text">Apa itu AkalBOT?</h2>
                  <br>
                  <p class="text-muted">AkalBOT merupakan robot bertayar dua yang bersedia menerima arahan anda untuk bergerak. Otak yang mengawal pergerakan AkalBOT ialah Arduino Nano</p>
                  <!-- <img src="{{asset('assets/img/kenal-akalbot/akalbot-1.png')}}" class="img-fluid" alt="AkalBOT"> -->
                    <img id="jawapanImage" class="card-img-top mx-auto d-block" src="{{asset('assets/img/kenal-akalbot/akalbot-1.png')}}" alt="Masalah 2" style="width: 350px; height: auto; display: none;">
                  
                  <div class="layout-demo-info">
                    <h7>Kedudukan Arduino Nano</h7>
                  </div>
                  <br>
                    <img id="jawapanImage" class="card-img-top mx-auto d-block" src="{{asset('assets/img/kenal-akalbot/akalbot-2.png')}}" alt="Masalah 2" style="width: 350px; height: auto; display: none;">

                  <!-- <img src="{{asset('assets/img/kenal-akalbot/akalbot-2.png')}}" class="img-fluid" alt="AkalBOT"> -->
                  <div class="layout-demo-info">
                    <h7>Posisi AkalBOT menghadap ke hadapan</h7>
                  </div>
                  <br>
                    <img id="jawapanImage" class="card-img-top mx-auto d-block" src="{{asset('assets/img/kenal-akalbot/akalbot-3.png')}}" alt="Masalah 2" style="width: 350px; height: auto; display: none;">

                  <!-- <img src="{{asset('assets/img/kenal-akalbot/akalbot-3.png')}}" class="img-fluid" alt="AkalBOT"> -->
                  <div class="layout-demo-info">
                    <h7>Bahagian atas AkalBOT</h7>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

@endsection
