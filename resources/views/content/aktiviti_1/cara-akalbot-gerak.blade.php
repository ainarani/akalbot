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
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h2 class="m-0 bold-text">1.2 Cara AkalBOT Bergerak</h2>
                    <!-- <p class="text-muted">AkalBOT merupakan robot bertayar dua yang bersedia menerima arahan anda untuk bergerak. Otak yang mengawal pergerakan AkalBOT ialah Arduino Nano</p> -->
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                  <img src="{{asset('assets/img/kenal-akalbot/akalbot-4.png')}}" class="img-fluid" alt="AkalBOT">
                  <!-- <br> Rajah 1: Tekan Butang dibawah untuk melihat pergerakan AkalBOT <br> -->
                  <div class="layout-demo-info">
                    <h7>Rajah 1: Tekan Butang dibawah untuk melihat pergerakan AkalBOT</h7>
                    <br>
                    <button class="btn btn-primary" type="button" onclick="window.open('www.youtube.com', '_blank')">ON</button>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
