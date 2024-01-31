@php
$isNavbar = false;
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Without navbar - Layouts')

@section('content')
<div class="card mb-4">
<h4 class="p-4 center-text bold-text">
3.4 IMPLEMENTASI ALGORITMA KEPADA ATURCARA</h4>
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

        <p class="card-text">
        Algoritma dalam bentuk carta alir yang dibangunkan dalam fasa reka bentuk merupakan asas 
untuk fasa pengekodan dengan menggunakan bahasa pengaturcaraan yang sesuai. Dalam aktiviti 
2, bahasa yang digunakan untuk implementasi algoritma ialah C++ seperti dalam Rajah 3.3. 
        </p>
       
     

<!-- Apply the custom class to the p element -->
<p class="card-text bold-text">
  Tugasan 13: <br>
  Kenal pasti set arahan yang dilaksanakan lebih daripada sekali dalam Rajah 3.3. </p>

  <p class="card-text">
  Dalam Rajah 3.3, kod aturcara yang dibangunkan mengunakan set arahan yang sama secara 
berulang. Satu set arahan ini dipanggil fungsi. Ini memudahkan pengatur cara kerana dapat 
menguna semula set arahan tanpa perlu menulis satu set arahan yang baharu. 
        </p>

        <p class="card-text bold-text">
  Tugasan 14: <br>
  Jadual dibawah menunjukkan implementasi carta alir kepada aturcara untuk fungsi tertentu. 
Lengkapkan Nama Fungsi dan Definisi Fungsi di dalam jadual. </p>
<img src="{{asset('assets/img/activity_3/tugasan14.JPG')}}" alt="Tugasan 14">


        <!-- <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a> -->
      </div>
    </div>
  </div>
@endsection
