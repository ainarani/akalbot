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
                    <h2 class="m-0 bold-text">2.2 Pengekodan</h2>
                    <p class="text-muted">Apakah atur cara yang perlu dimuat naik dan diproses oleh AkalBOT untuk menjatuhkan selipar?
                        Mari kita lakukan pengekodan iaitu membangunkan kod atur cara. Untuk permulaan ini, kita menggunakan editor berasaskan blok yang dipanggil AkalBLOK.
                        AkalBLOK adalah satu editor yang anda boleh gunakan untuk membangunkan atur cara secara visual iaitu dengan menggunakan blok tanpa perlu menaip satu persatu teks arahan.
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div style="text-align: center;">
                        <a href="{{ url('/index') }}" target="_blank" class="btn btn-sm btn-primary">AkalBLOK</a>
                    </div>
                    <div class="layout-demo-info">
                        <img src="{{asset('assets/img/aktiviti_2/pengekodan_1.png')}}" class="img-fluid" alt="AkalBOT">
                    </div>
                    <div class="layout-demo-info">
                        <h7>Rajah 1: Komponen dalam AkalBLOK</h7><br>
                        <!-- <small class="text-muted">Tentunya permainan ini boleh diubahsuai dengan menjadikan AkalBOT sebagai pemusnah susunan selipar. Masalahnya, bagaimana AkalBOT dapat diprogramkan supaya dapat menjatuhkan selipar. Ini bermaksud satu atur cara perlu dimuat naik ke AkalBOT untuk bergerak ke arah lokasi selipar. Jarak di antara selipar (lokasi B) dengan tempat AkalBOT mula bergerak
                            (lokasi A) adalah lebih 60 cm seperti dalam Rajah 2.2. Namun, pergerakan AkalBOT hanya terbatas dengan 3 pergerakan berbeza iaitu pergerakan terus, pusing kanan dan berhenti. Bagaimana menyelesaikan masalah ini?
                        </small> -->
                    </div>
                    <div class="layout-demo-info">
                        <img src="{{asset('assets/img/aktiviti_2/pengekodan_2.png')}}" class="img-fluid" alt="AkalBOT">
                    </div>
                    <div class="layout-demo-info">
                        <h7>Rajah 2: Gabungan blok untuk membentuk atur cara lengkap</h7><br>
                        <!-- <small class="text-muted">Tentunya permainan ini boleh diubahsuai dengan menjadikan AkalBOT sebagai pemusnah susunan selipar. Masalahnya, bagaimana AkalBOT dapat diprogramkan supaya dapat menjatuhkan selipar. Ini bermaksud satu atur cara perlu dimuat naik ke AkalBOT untuk bergerak ke arah lokasi selipar. Jarak di antara selipar (lokasi B) dengan tempat AkalBOT mula bergerak
                            (lokasi A) adalah lebih 60 cm seperti dalam Rajah 2.2. Namun, pergerakan AkalBOT hanya terbatas dengan 3 pergerakan berbeza iaitu pergerakan terus, pusing kanan dan berhenti. Bagaimana menyelesaikan masalah ini?
                        </small> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
