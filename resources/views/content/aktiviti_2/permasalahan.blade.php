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
                    <h2 class="m-0 bold-text ">2.1 Permasalahan</h2>
                    <p class="text-muted">Dalam permainan tradisional tuju selipar, selipar perlu dijatuhkan dalam jarak tertentu. Asas permainan ini ialah satu selipar perlu dibaling kepada satu susunan selipar untuk meruntuhkannya. Rajah 1 menunjukkan seorang kanak-kanak sedang cuba membaling selipar ke arah susunan selipar.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="layout-demo-info">
                        <img src="{{asset('assets/img/aktiviti_2/permasalahan.png')}}" class="img-fluid" alt="AkalBOT">
                    </div>
                    <div class="layout-demo-info">
                        <h7>Rajah 1: Cubaan membaling selipar dalam permainan tuju selipar</h7><br>
                        <p class="text-muted">Tentunya permainan ini boleh diubahsuai dengan menjadikan AkalBOT sebagai pemusnah susunan selipar. Masalahnya, bagaimana AkalBOT dapat diprogramkan supaya dapat menjatuhkan selipar. Ini bermaksud satu atur cara perlu dimuat naik ke AkalBOT untuk bergerak ke arah lokasi selipar. Jarak di antara selipar (lokasi B) dengan tempat AkalBOT mula bergerak
                            (lokasi A) adalah lebih 60 cm seperti dalam Rajah 2.2. Namun, pergerakan AkalBOT hanya terbatas dengan 3 pergerakan berbeza iaitu pergerakan terus, pusing kanan dan berhenti. Bagaimana menyelesaikan masalah ini?
                        </p>
                    </div>
                    <div class="layout-demo-info">
                        <img src="{{asset('assets/img/aktiviti_2/tuju.png')}}" class="img-fluid" alt="AkalBOT">
                    </div>
                    <div class="layout-demo-info">
                        <h7>Rajah 2: Misi tuju selipar</h7><br>
                        <p class="text-muted">Tentunya permainan ini boleh diubahsuai dengan menjadikan AkalBOT sebagai pemusnah susunan selipar. Masalahnya, bagaimana AkalBOT dapat diprogramkan supaya dapat menjatuhkan selipar. Ini bermaksud satu atur cara perlu dimuat naik ke AkalBOT untuk bergerak ke arah lokasi selipar. Jarak di antara selipar (lokasi B) dengan tempat AkalBOT mula bergerak
                            (lokasi A) adalah lebih 60 cm seperti dalam Rajah 2.2. Namun, pergerakan AkalBOT hanya terbatas dengan 3 pergerakan berbeza iaitu pergerakan terus, pusing kanan dan berhenti. Bagaimana menyelesaikan masalah ini?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
