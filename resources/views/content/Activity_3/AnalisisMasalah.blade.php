@php
$isNavbar = false;
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Without navbar - Layouts')

@section('content')

<div class="card mb-4">
<h4 class="p-4 center-text bold-text">
3.2  ANALISIS MASALAH</h4>
</div>
<div class="row mb-5">
  <div class="col-md-6 col-lg-12 mb-3">
    <div class="card h-100">
      <!-- <img class="card-img-top" src="{{asset('assets/img/elements/2.jpg')}}" alt="Card image cap" /> -->
      <div class="card-body">
<style>
  .center-text {
    text-align: center;
  }
</style>

<!-- Apply the custom class to the h4 element -->
<style>
  .bold-text {
    font-weight: bold;
  }
</style>

<h5 class="card-title bold-text">3.2.1  Penguraian </h5>
        <p class="card-text">
        Masalah utama dalam misi tuju selipar ialah bagaimana untuk menyusun pergerakan AkalBOT 
supaya berjaya meruntuhkan selipar dengan jarak 60 cm daripada ianya bermula dan terhad 
kepada tiga jenis pergerakan sahaja. Oleh itu, masalah ini boleh dihuraikan mengikut urutan 
pergerakan.
        </p>

     

<!-- Apply the custom class to the p element -->
<p class="card-text bold-text">
  Tugasan 10: <br>
  Buat 3 lorekan pada Rajah 3.2. Berdasarkan lorekan ini, leraikan kod program dalam Rajah 3.3
kepada 3 leraian dan beri label yang sesuai.</p>

<img src="{{asset('assets/img/activity_3/tugasan10.JPG')}}" alt="Rajah 3.2: Lorekkan kepada 3 bahagian"> <br>
<img src="{{asset('assets/img/activity_3/tugasan10_3_3.JPG')}}" alt="Rajah 3.3: Leraikan dan labelkan kepada 3 bahagian"> <br>

<p class="card-text">
Apakah makna tiga leraian ini? <br>
(a) Sejauh mana robot perlu bergerak terus daripada tempat bermula sehingga sebelum 
berhenti untuk belok ke kanan? <br>
(b) Berapa darjah pusingan ke kanan? <br>
(c) Selepas berpusing ke kanan, sejauh mana robot bergerak terus sebelum berhenti pada 
lokasi yang dapat meruntuhkan susunan selipar? <br>
</p>
<h5 class="card-title bold-text">3.2.2 Pengecaman corak pergerakan AkalBOT</h5>
        <p class="card-text">
        Terdapat 2 masalah yang telah anda selesaikan dalam Aktiviti 2, iaitu masalah 1 dalam Tugasan 
5-7 dan masalah kedua di Tugasan 8 <br>
Tugasan 11: <br>
Mengapa pergerakan AkalBOT dalam Masalah 1 dan Masalah 2 boleh menggunakan atur cara
yang sama dengan membandingkan lukisan anda pada Lukisan A dan Lukisan B.
</p>

        </p>
        <input type="text" id="pengekodan_4_1_3" name="pengekodan_aturcara" style="width: 550px; height: 150px;"> <br><br>


        <!-- <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a> -->
      </div>
    </div>
  </div>
@endsection
