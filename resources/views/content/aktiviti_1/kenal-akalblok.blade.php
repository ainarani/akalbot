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
                  <h2 class="m-0 bold-text">Apa itu AkalBLOK?</h2>
                  <br>
                  <p class="text-muted">AkalBlok merupakan </p>
                  <p class="mb-4">Mari kita cuba menyusun komponen-komponen dalam akalblok. Tekan butang "Cuba Akalblok" untuk teruskan.</p>
                  <a href="{{ url('/Akalblok/akalblok') }}" target="_blank" class="btn btn-sm btn-outline-primary">Cuba Akalblok</a>
                </div>
            </div>
        </div>
        
    </div>
    
</div>

</body>

@endsection
