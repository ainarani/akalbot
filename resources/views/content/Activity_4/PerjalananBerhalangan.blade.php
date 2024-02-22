@php
$container = 'container-xxl';
$containerNav = 'container-xxl';
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Without navbar - Layouts')

@section('content')
<div class="card mb-4">
<h3 class="p-4 bold-text">
4.2 Terokai Perjalanan Perjalanan Berhalangan  </h3>
</div>
<div class="row mb-5">
  <div class="col-md-6 col-lg-12 mb-3">
    <div class="card h-100">
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
<p class="card-text">
  <strong> Tugasan 16: </strong><br>
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
Penambahan sensor ultrasonik <br>
<img src="{{asset('assets/img/activity_4/ultrasonik.JPG')}}" class="img-fluid" alt="Responsive image"><br>
<img src="{{asset('assets/img/activity_4/ultrasonik2.JPG')}}" class="img-fluid" alt="Responsive image"><br><br>

Jika anda bertanding dengan rakan anda, masa yang paling cepat menyelesaikan cabaran ini 
adalah pemenang. Semoga berjaya! <br> <br>
Untuk menjayakan tugasan ini, anda boleh membangunkan aturcara mengikut seksyen 4.2.1 
sehingga 4.2.4 dibawah.<br>
 </p>

     <h5 class="card-title bold-text">4.2.1 Analisis Masalah</h5>
        <p class="card-text">
        Ubahsuai urutan pergerakan AkalBOT agar AkalBOT dapat mengelak selipar yang pertama dan 
menjatuhkan selipar yang kedua dalam sekali jalan dengan skor yang tinggi.<br><br>
Lukis laluan AkalBOT anda: <br>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<canvas id="whiteboard1" width="500" height="400" style="border: 1px solid #000;"></canvas>
<br>
<button id="pencilButton1" onclick="setDrawingMode1(true, 'whiteboard1')">
    <i class="fas fa-pencil-alt"></i>
</button>
<button id="eraserButton1" onclick="setDrawingMode1(false, 'whiteboard1')">
    <i class="fas fa-eraser"></i>
</button>
<button id="clearButton1" onclick="clearCanvas1()">
    <i class="fas fa-trash-alt"></i> 
</button>

<script>
    const canvas1 = document.getElementById('whiteboard1');
    const context1 = canvas1.getContext('2d');
    let drawing1 = false;
    let erasing1 = false;

    canvas1.addEventListener('mousedown', startDrawing1);
    canvas1.addEventListener('mousemove', draw1);
    canvas1.addEventListener('mouseup', stopDrawing1);
    canvas1.addEventListener('mouseout', stopDrawing1);

    function startDrawing1(e) {
        if (erasing1) {
            clearPixels1(e);
        } else {
            drawing1 = true;
            draw1(e);
        }
    }

    function draw1(e) {
        if (!drawing1) return;

        const rect = canvas1.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        context1.lineWidth = 2;
        context1.lineCap = 'round';

        if (erasing1) {
            clearPixels1(e);
        } else {
            context1.strokeStyle = '#000'; // Use black color for pencil
            context1.lineTo(x, y);
            context1.stroke();
            context1.beginPath();
            context1.moveTo(x, y);
        }
    }

    function stopDrawing1() {
        drawing1 = false;
        context1.beginPath();
    }

    function clearPixels1(e) {
        const rect = canvas1.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        context1.clearRect(x - 10, y - 10, 20, 20); // Adjust the size of the eraser
    }

    function setDrawingMode1(isDrawing, whiteboardId) {
        if (whiteboardId === 'whiteboard1') {
            drawing1 = isDrawing;
            erasing1 = !isDrawing;

            const pencilButton1 = document.getElementById('pencilButton1');
            const eraserButton1 = document.getElementById('eraserButton1');

            pencilButton1.style.backgroundColor = drawing1 ? '#00FF00' : '#FFFFFF'; // Green when drawing, white when not
            eraserButton1.style.backgroundColor = erasing1 ? '#00FF00' : '#FFFFFF'; // Green when erasing, white when not
        } else {
            // handle other whiteboards here if needed
        }
    }

    function clearCanvas1() {
        context1.clearRect(0, 0, canvas1.width, canvas1.height);
    }
</script>
        </p>
        <h5 class="card-title bold-text">4.2.2 Reka bentuk Atur cara </h5>
        <p class="card-text">
        Lukis carta alir untuk penyelesaian masalah. Rujuk lampiran <br>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<canvas id="whiteboard2" width="500" height="400" style="border: 1px solid #000;"></canvas>
<br>
<button id="pencilButton2" onclick="setDrawingMode(true, 'whiteboard2')">
    <i class="fas fa-pencil-alt"></i>
</button>
<button id="eraserButton2" onclick="setDrawingMode(false, 'whiteboard2')">
    <i class="fas fa-eraser"></i>
</button>
<button id="clearButton2" onclick="clearCanvas2()">
    <i class="fas fa-trash-alt"></i> 
</button>

<script>
    const canvas2 = document.getElementById('whiteboard2');
    const context2 = canvas2.getContext('2d');
    let drawing2 = false;
    let erasing2 = false;

    canvas2.addEventListener('mousedown', startDrawing2);
    canvas2.addEventListener('mousemove', draw2);
    canvas2.addEventListener('mouseup', stopDrawing2);
    canvas2.addEventListener('mouseout', stopDrawing2);

    function startDrawing2(e) {
        if (erasing2) {
            clearPixels2(e);
        } else {
            drawing2 = true;
            draw2(e);
        }
    }

    function draw2(e) {
        if (!drawing2) return;

        const rect = canvas2.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        context2.lineWidth = 2;
        context2.lineCap = 'round';

        if (erasing2) {
            clearPixels2(e);
        } else {
            context2.strokeStyle = '#000'; // Use black color for pencil
            context2.lineTo(x, y);
            context2.stroke();
            context2.beginPath();
            context2.moveTo(x, y);
        }
    }

    function stopDrawing2() {
        drawing2 = false;
        context2.beginPath();
    }

    function clearPixels2(e) {
        const rect = canvas2.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        context2.clearRect(x - 10, y - 10, 20, 20); // Adjust the size of the eraser
    }

    function setDrawingMode(isDrawing, whiteboardId) {
        if (whiteboardId === 'whiteboard2') {
            drawing2 = isDrawing;
            erasing2 = !isDrawing;

            const pencilButton2 = document.getElementById('pencilButton2');
            const eraserButton2 = document.getElementById('eraserButton2');

            pencilButton2.style.backgroundColor = drawing2 ? '#00FF00' : '#FFFFFF'; // Green when drawing, white when not
            eraserButton2.style.backgroundColor = erasing2 ? '#00FF00' : '#FFFFFF'; // Green when erasing, white when not
        } else {
            // handle the first whiteboard or additional whiteboards here if needed
        }
    }

    function clearCanvas2() {
        context2.clearRect(0, 0, canvas2.width, canvas2.height);
    }
</script>
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
        <style>
    /* Apply basic styling */
    #masa_4_2_4 {
        width: 100%; /* Use 100% width */
        max-width: 50px; /* Set a maximum width */
    }

    /* Add some spacing for clarity */
    body {
        margin: 20px;
    }
</style>

<input type="text" id="masa_4_2_4" name="masa"> <br><br>
    
        <p class="bold-text">
        TAHNIAH di atas usaha anda!
 <br>

        </p>
        </p>

        

        <!-- <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a> -->
      </div>
    </div>
  </div>
  </div>
@endsection
