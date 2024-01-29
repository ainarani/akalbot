<!-- @extends('layouts/blankLayout') -->

@section('title', 'Blank layout - Layouts')

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

<h4 class="p-4 center-text bold-text">
3.1  FASA PEMBANGUNAN ATURCARA</h4>
<div class="row mb-5">
  <div class="col-md-6 col-lg-4 mb-3">
    <div class="card h-100">
      <!-- <img class="card-img-top" src="{{asset('assets/img/elements/2.jpg')}}" alt="Card image cap" /> -->
      <div class="card-body">

        <p class="card-text">
        AkalBOT hanya bergerak mengikut arahan yang diberikan. Arahan ini dipanggil atur cara. AkalBOT 
tidak boleh berfikir sendiri, kita yang mengatur pergerakan AkalBOT menggunakan atur cara. <br> <br>
Ada dua perkara yang penting dalam pembangunan atur cara iaitu : <br>
1) Algoritma ialah langkah demi langkah untuk selesaikan masalah. <br>
2) Atur cara ialah arahan untuk implementasi algoritma.<br><br>
Algoritma dibangunkan dalam fasa reka bentuk atur cara dan di implementasi sebagai atur cara 
menggunakan bahasa pengaturcaraan C++ dalam fasa pengekodan. Namun, reka bentuk 
dibangunkan berdasarkan analisis yang dilakukan pada masalah iaitu pada fasa kedua dalam fasa 
pembangunan atur cara seperti pada Rajah 3.1.
        </p>

     

<!-- Apply the custom class to the p element -->
<p class="card-text bold-text">
  Tugasan 9: <br>
  Lengkapkan fasa pembangunan atur cara pada Rajah 3.1. <br>
  
</p>
<img src="{{asset('assets/img/activity_3/tugasan9.JPG')}}" alt="Rajah 3.1: Fasa pembangunan atur cara">



        <!-- <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a> -->
      </div>
    </div>
  </div>
@endsection
