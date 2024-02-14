@php
$container = 'container-xxl';
$containerNav = 'container-xxl';
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Without navbar - Layouts')

@section('content')
<style>
  .center-text {
    text-align: center;
  }

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
  <div class="card mb-4">
  <div class="card-body">

    <img src="{{asset('assets/img/lampiran/A_a.JPG')}}" class="img-fluid" alt="Responsive image">
<p  class="center-text">(a)</p>

<img src="{{asset('assets/img/lampiran/A_b.JPG')}}" class="img-fluid" alt="Responsive image">
<p  class="center-text">(b)</p>


<img src="{{asset('assets/img/lampiran/A_c.JPG')}}" class="img-fluid" alt="Responsive image">
<p  class="center-text">(c)</p> <br>

<p  class="center-text">Rajah 1: (a) kedudukan arduino nano, (b) Posisi AkalBOT menghadap ke hadapan
(c) Bahagian atas AkalBOT
</p>


  </div>
</div>

<div class="card mb-4">
  <h4 class="p-4 center-text bold-text">
    LAMPIRAN B <br>
    PENGENALAN KEPADA AkalBLOK
  </h4>
  <div class="card-body">
    <img src="{{asset('assets/img/lampiran/B.JPG')}}" class="img-fluid" alt="Responsive image">
</p> <br>

  </div>
</div>
@endsection
