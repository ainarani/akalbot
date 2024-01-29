<!-- @extends('layouts/blankLayout') -->

@section('title', 'Blank layout - Layouts')

@section('content')

<h4 class="p-4 center-text bold-text">
5.1  ATURCARA</h4>
<div class="row mb-5">
  <div class="col-md-6 col-lg-4 mb-3">
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
Ya
<input type="text" id="Ya" name="Ya" style="width: 30px;"> 
Tidak    
    <input type="text" id="Tidak" name="Tidak" style="width: 30px;"> <br> <br>

    <img src="{{asset('assets/img/activity_5/rajah5_1.JPG')}}" alt="Rajah 5.1 : Laluan robot untuk menjatuhkan selipar."> <br>

Rajah 5.1 : Laluan robot untuk menjatuhkan selipar <br>
<p class="card-text">
Jika YA, tuliskan arahan tersebut dibawah
        </p>
        <input type="text" id="arahan" name="arahan" style="width: 550px; height: 150px;"> <br><br>

        </p>


        <p class="card-text">
        2. Adakah anda berminat untuk belajar mengenai aturcara yang dapat memberi arahan 
untuk AkalBOT?
<br> <br>
Sangat Berminat
<input type="text" id="Ya" name="Ya" style="width: 30px;"> <br> <br>
Berminat    
    <input type="text" id="Tidak" name="Tidak" style="width: 30px;"> <br> <br> 
    Tidak Tahu
<input type="text" id="Ya" name="Ya" style="width: 30px;"> <br> <br>
Tidak Berminat    
    <input type="text" id="Tidak" name="Tidak" style="width: 30px;"> <br> <br>
    Sangat Tidak Berminat 
<input type="text" id="Ya" name="Ya" style="width: 30px;"> <br> <br>

     </p>

 <!-- <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a> -->
      </div>
    </div>
  </div>
@endsection
