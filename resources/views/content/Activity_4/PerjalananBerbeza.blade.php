@php
$isNavbar = false;
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Without navbar - Layouts')

@section('content')
<div class="card mb-4">
<h4 class="p-4 center-text bold-text">
4.1 Terokai Perjalanan Berbeza  </h4>
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
        Permainan ini ialah untuk menentukan sendiri corak perjalanan AkalBOT bagi menjatuhkan 
selipar dengan menggunakan papan padang permainan dengan nilai setiap papan seperti tercatat 
pada papan permainan. 
     </p>
     

     <img src="{{asset('assets/img/activity_4/tugasan15.JPG')}}" alt="Rajah 4.1 Contoh susunan untuk padang permainan.">


<!-- Apply the custom class to the p element -->
<p class="card-text bold-text">
  Tugasan 15: <br>
  Gunakan kreativiti anda untuk menyusun papan tersebut supaya hasil tambah nilai papan yang 
dilalui AkalBOT mesti melebihi skor 75 markah. Peraturan permainan ialah:
</p>

<p class="card-text">
        1) AkalBot perlu menjatuhkan 2 lokasi selipar. <br>
2) Laluan bermula pada mana-mana papan.<br>
3) Laluan berakhir pada tapak selipar yang kedua.<br>
4) Menggunakan sekurang-kurangnya 8 keping papan permainan dan maksimum 12 keping.<br>
5) AkalBOT akan berhenti sekejap selepas menjatuhkan selipar.<br>
6) Pastikan selipar yang disusun berjaya dijatuhkan oleh AkalBOT.<br>
7) AkalBot akan berhenti selepas menjatuhkan selipar pada lokasi yang kedua.<br>
8) Melibatkan sekurang-kurangnya 3 pergerakan berbeza.<br>
9) Tambah bunyi dengan menggunakan buzzer apabila sampai ke selipar pertama dan kedua 
(bonus 5 markah) <br>
10) Tambah nyalaan LED apabila sampai ke selipar kedua (bonus 5 markah) <br>
11) Tambah paparan “Berjaya” menggunakan paparan OLED apabila sampai ke selipar kedua 
(bonus 5 markah) <br> <br>

Maklumat untuk tambahan: <br>
Penambahan Buzzer <br>
-table <br>
Penambahan Nyalaan LED <br>
-table <br>
Penambahan Paparan OLED <br>
-table <br> <br>

Jika anda bertanding dengan rakan anda, pemenang adalah skor markah yang tertinggi iaitu hasil 
tambah papan yang dilalui AkalBOT dengan markah bonus dalam waktu yang paling singkat. 
Semoga berjaya! <br>
Untuk menjayakan tugasan ini, anda boleh membangunkan aturcara mengikut seksyen 4.1.1 
sehingga 4.1.4 dibawah.

     </p>

     <h5 class="card-title bold-text">4.1.1 Analisis Masalah </h5>
        <p class="card-text">
        Lukis carta alir untuk penyelesaian masalah. Rujuk lampiran D <br>
-choose file lukisan-
        </p>
        <h5 class="card-title bold-text">4.1.2 Reka bentuk Atur cara </h5>
        <p class="card-text">
        Ubahsuai urutan pergerakan AkalBOT agar AkalBOT dapat melanggar dua susunan selipar dalam 
sekali jalan dengan skor yang tinggi. <br>
Lukis laluan AkalBOT anda: <br>
-choose file lukisan-
        </p>
        <h5 class="card-title bold-text">4.1.3 Pengekodan</h5>
        <p class="card-text">
        Bina aturcara menggunakan AkalBLOK dan Editor Arduino. Rujuk lampiran B dan lampiran C.<br>

        </p>
        <input type="text" id="pengekodan_4_1_3" name="pengekodan_aturcara" style="width: 550px; height: 150px;"> <br><br>
        <h5 class="card-title bold-text">4.1.4 Pengujian</h5>
        <p class="card-text">
        Muat naik ke AkalBOT dan lihat hasilnya. Rujuk lampiran C. <br>
        Jika berjaya, catatkan nilai skor.    
        <input type="text" id="skor_4_1_4" name="skor" style="width: 50px;"> <br> <br>
    
        <p class="bold-text">
        TAHNIAH di atas usaha anda!
 <br>

        </p>
        </p>

        

        <!-- <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a> -->
      </div>
    </div>
  </div>
@endsection
