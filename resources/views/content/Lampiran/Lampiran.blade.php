@php
$isNavbar = false;
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Without navbar - Layouts')

@section('content')
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


<div class="card mb-4">
<h4 class="p-4 center-text bold-text">
LAMPIRAN A <br>
KIT PEMBELAJARAN AKALBOT
</h4> 
</div>
<div class="row mb-5">
  <div class="col-md-6 col-lg-12 mb-3">
    <div class="card h-100">
      <div class="card-body">

<img src="{{asset('assets/img/lampiran/A_a.JPG')}}" alt="Lampiran A (a)"> <br>
<img src="{{asset('assets/img/lampiran/A_b.JPG')}}" alt="Lampiran A (b)"><br>
<img src="{{asset('assets/img/lampiran/A_c.JPG')}}" alt="Lampiran A (c)"> <br>
</div>
    </div>
  </div>

  <div class="row mb-5">
  <div class="col-md-6 col-lg-12 mb-3">
    <div class="card h-100">
      <div class="card-body">

  <div class="card mb-4">
<h4 class="p-4 center-text bold-text">
LAMPIRAN B <br>
PENGENALAN KEPADA AkalBLOK
</h4> 

</div>
<img src="{{asset('assets/img/lampiran/B.JPG')}}" alt="Lampiran B"> <br>
     
</div>
</div>
</div>
</div>

     
</div>
</div>
</div>
</div>
@endsection
