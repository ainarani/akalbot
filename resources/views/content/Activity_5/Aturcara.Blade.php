@php
$container = 'container-xxl';
$containerNav = 'container-xxl';
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Without navbar - Layouts')

@section('content')
<div class="card mb-4">
<h3 class="p-4 bold-text">
5.1  Atur cara</h3>
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
        1. Adakah anda tahu bentuk arahan aturcara yang boleh diberikan kepada AkalBOT untuk 
bergerak dalam laluan di Rajah 1.1 <br> <br>
<style>
    /* Style the label for better visibility */
    label {
        margin-right: 5px;
    }

    /* Style the checkboxes */
    input[type="checkbox"] {
        width: 20px; /* Adjust the width as needed */
        height: 20px; /* Adjust the height as needed */
    }
</style>

<label for="Ya">Ya</label>
<input type="checkbox" id="Ya" name="Ya">

<label for="Tidak">Tidak</label>
<input type="checkbox" id="Tidak" name="Tidak">

<br><br>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        img {
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<img src="{{asset('assets/img/activity_5/rajah5_1.JPG')}}" class="img-fluid" alt="Responsive image">
<p  class="center-text">Rajah 5.1 : Laluan robot untuk menjatuhkan selipar</p>
</p>

</body>
</html>

<p class="card-text">
Jika <strong>YA</strong>, tuliskan arahan tersebut dibawah
        </p>
        <style>
    /* Apply basic styling */
    #arahan {
        width: 100%; /* Use 100% width */
        max-width: 550px; /* Set a maximum width */
        height: 150px;
    }

    /* Add some spacing for clarity */
    body {
        margin: 20px;
    }
</style>

<input type="text" id="arahan" name="arahan"> <br><br>

        </p>


        <p class="card-text">
        2. Adakah anda berminat untuk belajar mengenai aturcara yang dapat memberi arahan 
untuk AkalBOT?
<br> <br>
<style>
    /* Style the label for better visibility and add space between checkboxes */
    label {
        display: inline-block; /* Ensures labels and checkboxes are on the same line */
        margin-right: 10px; /* Adjust the margin as needed */
    }

    /* Style the checkboxes */
    input[type="checkbox"] {
        width: 20px; /* Adjust the width as needed */
        height: 20px; /* Adjust the height as needed */
    }
</style>

<label for="sangatBerminat">Sangat Berminat</label>
<input type="checkbox" id="sangatBerminat" name="sangatBerminat">

<br>

<label for="berminat">Berminat</label>
<input type="checkbox" id="berminat" name="berminat">

<br>

<label for="tidakTahu">Tidak Tahu</label>
<input type="checkbox" id="tidakTahu" name="tidakTahu">

<br>

<label for="tidakBerminat">Tidak Berminat</label>
<input type="checkbox" id="tidakBerminat" name="tidakBerminat">

<br>

<label for="sangatTidakBerminat">Sangat Tidak Berminat</label>
<input type="checkbox" id="sangatTidakBerminat" name="sangatTidakBerminat">

<br><br>


     </p>

 <!-- <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a> -->
      </div>
    </div>
  </div>
  </div>
@endsection
