@php
$isNavbar = false;
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Without navbar - Layouts')

@section('content')
<div class="card mb-4">
<h4 class="p-4 center-text bold-text">
3.3  REKA BENTUK AKALBOT MENGGUNAKAN CARTA ALIR  </h4>
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
        Dalam Seksyen 3.2, kita dapat lihat bagaimana kod aturcara dibina berdasarkan penguraian 
masalah. Namun, kod yang dibina itu telah melalui fasa reka bentuk yang yang telah mengenal 
pasti langkah demi langkah untuk menyelesaikan masalah melalui algoritma. Carta alir 
merupakan satu kaedah untuk menggambarkan algoritma menggunakan bentuk tertentu. 


        </p>
        <p class="card-text">
        Carta alir terdiri daripada bentuk tertentu untuk mengambarkan fungsinya. Rujuk Lampiran D 
untuk belajar mengenai bentuk dalam carta alir. Contohnya bentuk segi empat tepat adalah 
menunjukkan aksi.


        </p>

     

<!-- Apply the custom class to the p element -->
<p class="card-text bold-text">
  Tugasan 12: <br>
  Lengkapkan carta alir pada Rajah 3.4 berdasarkan atur cara yang mengerakkan AkalBOT dalam 
Aktiviti 2. </p>
<img src="{{asset('assets/img/activity_3/tugasan12.JPG')}}" alt="Rajah 3.4: Carta alir tuju selipar">

        <!-- <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a> -->
      </div>
    </div>
  </div>
@endsection
