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

  /* Add shadow to all cards */
  .card {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
  }
</style>

<body style="background-color: white;">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h2 class="m-0 bold-text">1.1 Mengenali AkalBOT</h2>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                  <p class="text-muted">AkalBOT merupakan robot bertayar dua yang bersedia menerima arahan anda untuk bergerak. Otak yang mengawal pergerakan AkalBOT ialah Arduino Nano</p>
                  <img src="{{asset('assets/img/kenal-akalbot/akalbot-1.png')}}" class="img-fluid" alt="AkalBOT">
                  <div class="layout-demo-info">
                    <h7>Rajah 1: Kedudukan Arduino Nano</h7>
                  </div>
                  <br>
                  <img src="{{asset('assets/img/kenal-akalbot/akalbot-2.png')}}" class="img-fluid" alt="AkalBOT">
                  <div class="layout-demo-info">
                    <h7>Rajah 2: Posisi AkalBOT menghadap ke hadapan</h7>
                  </div>
                  <br>
                  <img src="{{asset('assets/img/kenal-akalbot/akalbot-3.png')}}" class="img-fluid" alt="AkalBOT">
                  <div class="layout-demo-info">
                    <h7>Rajah 3: Bahagian atas AkalBOT</h7>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

@endsection
