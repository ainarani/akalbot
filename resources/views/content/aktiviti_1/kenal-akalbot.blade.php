@php
$isNavbar = false;
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Without navbar - Layouts')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h1 class="m-0">1.1 Mengenali AkalBOT</h1>
                    <small class="text-muted">AkalBOT merupakan robot bertayar dua yang bersedia menerima arahan anda untuk bergerak. Otak yang mengawal pergerakan AkalBOT ialah Arduino Nano</small>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                  <img src="{{asset('assets/img/kenal-akalbot/akalbot-1.png')}}" class="img-fluid" alt="AkalBOT">
                  <div class="layout-demo-info">
                    <h5>Rajah 1: Kedudukan Arduino Nano</h5>
                  </div>
                  <img src="{{asset('assets/img/kenal-akalbot/akalbot-2.png')}}" class="img-fluid" alt="AkalBOT">
                  <div class="layout-demo-info">
                    <h5>Rajah 2: Posisi AkalBOT menghadap ke hadapan</h5>
                  </div>
                  <img src="{{asset('assets/img/kenal-akalbot/akalbot-3.png')}}" class="img-fluid" alt="AkalBOT">
                  <div class="layout-demo-info">
                    <h5>Rajah 3: Bahagian atas AkalBOT</h5>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 
<div class="row">
  <div class="col-lg-12 mb-4 order-0">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between pb-0">
        <div class="card-title mb-0">
          <h1 class="m-0 me-2">1.1 Mengenali AkalBOT</h1>
          <small class="text-muted">AkalBOT merupakan robot bertayar dua yang bersedia menerima arahan anda untuk bergerak. Otak yang mengawal pergerakan AkalBOT ialah Arduino Nano</small>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="layout-demo-wrapper">
  <div class="layout-demo-placeholder">
    <img src="{{asset('assets/img/kenal-akalbot/akalbot-1.png')}}" class="img-fluid" alt="AkalBOT">
  </div>
  <div class="layout-demo-info">
    <h5>Rajah 1: Kedudukan Arduino Nano</h5>
  </div>
</div>

<div class="layout-demo-wrapper">
  <div class="layout-demo-placeholder">
    <img src="{{asset('assets/img/kenal-akalbot/akalbot-2.png')}}" class="img-fluid" alt="AkalBOT">
  </div>
  <div class="layout-demo-info">
    <h5>Rajah 2: Posisi AkalBOT menghadap ke hadapan</h5>
  </div>
</div>

<div class="layout-demo-wrapper">
  <div class="layout-demo-placeholder">
    <img src="{{asset('assets/img/kenal-akalbot/akalbot-3.png')}}" class="img-fluid" alt="AkalBOT">
  </div>
  <div class="layout-demo-info">
    <h5>Rajah 3: Bahagian atas AkalBOT</h5>
  </div>
</div> -->
@endsection
