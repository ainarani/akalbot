<!-- @extends('layouts/blankLayout') -->

@section('title', 'Blank layout - Layouts')

@section('content')

<h4 class="p-4 center-text bold-text">
4.2 Terokai Perjalanan Perjalanan Berhalangan  </h4>
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
        Permainan ini adalah untuk mengelak selipar pada lokasi yang pertama tetapi tetap menjatuhkan 
selipar pada lokasi kedua berdasarkan lokasi selipar yang sama seperti dalam Aktiviti 5.1. Dalam 
permainan ini, anda diberi cabaran baharu iaitu perlu menggunakan sensor ulrasonik untuk 
mengelak selipar pada lokasi yang pertama.

     </p>
     

<!-- Apply the custom class to the p element -->
<p class="card-text bold-text">
  Tugasan 16: <br>
  Gunakan sensor ultrasonik untuk mengelak selipar pada lokasi yang pertama dan kemudian 
bergerak untuk menjatuhkan selipar pada lokasi kedua. Peraturan permainan ialah:

</p>

<p class="card-text">
1) Laluan bermula pada mana-mana papan. <br>
2) Laluan berakhir pada tapak selipar yang kedua. <br>
3) Menggunakan sekurang-kurangnya 8 keping papan permainan dan maksimum 12 keping <br>
4) AkalBOT akan berhenti sekejap selepas mengelak selipar pada lokasi yang pertama. <br>
5) AkalBot akan berhenti selepas menjatuhkan selipar pada lokasi yang kedua. <br>
6) Pastikan selipar yang disusun pada lokasi kedua berjaya dijatuhkan oleh AkalBOT.<br>
7) Melibatkan sekurang-kurangnya 3 pergerakan berbeza.<br>
8) Tambah bunyi dengan menggunakan buzzer apabila dapat mengesan selipar yang petama 
dan apabila sampai ke selipar kedua (bonus 5 markah)<br>
9) Tambah paparan “Selipar 1” menggunakan paparan OLED apabila dapat mengesan selipar 
yang pertama (bonus 5 markah)<br>
10) Tambah nyalaan LED apabila sampai ke selipar kedua (bonus 5 markah)<br><br>
Penambahan sensor ultrasonik<br> 
-table <br><br>
Jika anda bertanding dengan rakan anda, masa yang paling cepat menyelesaikan cabaran ini 
adalah pemenang. Semoga berjaya! <br>
Untuk menjayakan tugasan ini, anda boleh membangunkan aturcara mengikut seksyen 4.2.1 
sehingga 4.2.4 dibawah.<br>
 </p>

     <h5 class="card-title bold-text">4.2.1 Analisis Masalah</h5>
        <p class="card-text">
        Ubahsuai urutan pergerakan AkalBOT agar AkalBOT dapat mengelak selipar yang pertama dan 
menjatuhkan selipar yang kedua dalam sekali jalan dengan skor yang tinggi.<br>
Lukis laluan AkalBOT anda: <br>
-choose file lukisan-
        </p>
        <h5 class="card-title bold-text">4.2.2 Reka bentuk Atur cara </h5>
        <p class="card-text">
        Lukis carta alir untuk penyelesaian masalah. Rujuk lampiran <br>
-choose file lukisan-
        </p>
        <h5 class="card-title bold-text">4.2.3 Pengekodan</h5>
        <p class="card-text">
        Bina aturcara menggunakan AkalBLOK dan Editor Arduino. Rujuk lampiran
        </p>
        <input type="text" id="pengekodan_4_1_3" name="pengekodan_aturcara" style="width: 550px; height: 150px;"> <br><br>
        <h5 class="card-title bold-text">4.2.4 Pengujian</h5>
        <p class="card-text">
        Muat naik ke AkalBOT dan lihat hasilnya. Rujuk lampiran <br>
        Jika berjaya, catatkan nilai masa.    
        <input type="text" id="masa_4_2_4" name="masa" style="width: 50px;"> <br> <br>
    
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
