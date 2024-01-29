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
                    <h1 class="m-0">1.2 Cara AkalBOT Bergerak</h1>
                    <small class="text-muted">AkalBOT merupakan robot bertayar dua yang bersedia menerima arahan anda untuk bergerak. Otak yang mengawal pergerakan AkalBOT ialah Arduino Nano</small>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                  <img src="{{asset('assets/img/kenal-akalbot/akalbot-4.png')}}" class="img-fluid" alt="AkalBOT">
                  <div class="layout-demo-info">
                    <h5>Rajah 1: Tekan Butang dibawah untuk melihat pergerakan AkalBOT</h5>
                    <button class="btn btn-primary" type="button" onclick="window.open('https://www.youtube.com', '_blank')">ON</button>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
