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
                    <h1 class="m-0">2.3 Pengujian</h1>
                    <small class="text-muted">Bagaimana atur cara yang dibangunkan boleh diuji untuk melihat sama ada gerakan AkalBOT sama seperti pergerakan yang diprogramkan?
                        Mari kita uji arahan ini dengan melakukan Tugasan 5 hingga Tugasan 7.
                    </small>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4>TUGASAN 5:</h4>
                    <p>Dengan menggunakan Editor Arduino kompil atur cara yang dibangunkan. Rujuk Lampiran C untuk langkah menguji atur cara.</p>
                    <h4>TUGASAN 6:</h4>
                    <p>
Susun padang permainan supaya sesuai dengan laluan AkalBOT seperti dalam Rajah 2.6. Susun selipar pada lokasi yang sesuai seperti lokasi B.</p>
                    <!-- <div class="layout-demo-info">
                        <h7>Rajah 1: Cubaan membaling selipar dalam permainan tuju selipar</h7><br>
                        <small class="text-muted">Tentunya permainan ini boleh diubahsuai dengan menjadikan AkalBOT sebagai pemusnah susunan selipar. Masalahnya, bagaimana AkalBOT dapat diprogramkan supaya dapat menjatuhkan selipar. Ini bermaksud satu atur cara perlu dimuat naik ke AkalBOT untuk bergerak ke arah lokasi selipar. Jarak di antara selipar (lokasi B) dengan tempat AkalBOT mula bergerak
                            (lokasi A) adalah lebih 60 cm seperti dalam Rajah 2.2. Namun, pergerakan AkalBOT hanya terbatas dengan 3 pergerakan berbeza iaitu pergerakan terus, pusing kanan dan berhenti. Bagaimana menyelesaikan masalah ini?
                        </small>
                    </div> -->
                    <div class="layout-demo-info">
                        <img src="{{asset('assets/img/aktiviti_2/tugasan_6.png')}}" class="img-fluid" alt="AkalBOT">
                    </div>
                    <div class="layout-demo-info">
                        <h7>Rajah 1: Contoh susunan laluan dan lokasi selipar</h7><br>
                        <!-- <small class="text-muted">Tentunya permainan ini boleh diubahsuai dengan menjadikan AkalBOT sebagai pemusnah susunan selipar. Masalahnya, bagaimana AkalBOT dapat diprogramkan supaya dapat menjatuhkan selipar. Ini bermaksud satu atur cara perlu dimuat naik ke AkalBOT untuk bergerak ke arah lokasi selipar. Jarak di antara selipar (lokasi B) dengan tempat AkalBOT mula bergerak
                            (lokasi A) adalah lebih 60 cm seperti dalam Rajah 2.2. Namun, pergerakan AkalBOT hanya terbatas dengan 3 pergerakan berbeza iaitu pergerakan terus, pusing kanan dan berhenti. Bagaimana menyelesaikan masalah ini?
                        </small> -->
                    </div>
                    <!-- <div class="layout-demo-info">
                        <img src="{{asset('assets/img/aktiviti_2/tuju.png')}}" class="img-fluid" alt="AkalBOT">
                    </div>
                    <div class="layout-demo-info">
                        <h7>Rajah 2: Misi tuju selipar</h7><br>
                        <small class="text-muted">Tentunya permainan ini boleh diubahsuai dengan menjadikan AkalBOT sebagai pemusnah susunan selipar. Masalahnya, bagaimana AkalBOT dapat diprogramkan supaya dapat menjatuhkan selipar. Ini bermaksud satu atur cara perlu dimuat naik ke AkalBOT untuk bergerak ke arah lokasi selipar. Jarak di antara selipar (lokasi B) dengan tempat AkalBOT mula bergerak
                            (lokasi A) adalah lebih 60 cm seperti dalam Rajah 2.2. Namun, pergerakan AkalBOT hanya terbatas dengan 3 pergerakan berbeza iaitu pergerakan terus, pusing kanan dan berhenti. Bagaimana menyelesaikan masalah ini?
                        </small>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
