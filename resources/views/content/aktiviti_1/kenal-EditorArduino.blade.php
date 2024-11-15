@php
$container = 'container-xxl';
$containerNav = 'container-xxl';
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Without navbar - Layouts')

@section('content')

<style>
  .bold-text {
    font-weight: bold;
  }

  .image-container {
    position: relative;
  }

  .image {
    position: absolute;
  }

  /* Add shadow to all cards */
  /* .card {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
  } */
</style>

<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <!-- <div class="card mb-4">
                <div class="card-header">
                    <h2 class="m-0 bold-text">1.1 Mengenali AkalBOT</h2>
                </div>
            </div> -->

        <!-- <div class = "card">
                <div class="card-body">
                <h3>Kitar 1</h3>
                    <div class="image-container">
                        <img src="{{asset('assets/img/kenal-akalbot/akalbot-4.png')}}" class="img-fluid" alt="AkalBOT" style="width: 150px; height: auto;">
                        <img src="{{asset('assets/img/kenal-akalbot/akalbot-4.png')}}" class="img-fluid" alt="AkalBOT" style="width: 150px; height: auto;">                            
                        <img src="{{asset('assets/img/kenal-akalbot/akalbot-4.png')}}" class="img-fluid" alt="AkalBOT" style="width: 150px; height: auto;">
                        <img src="{{asset('assets/img/kenal-akalbot/akalbot-4.png')}}" class="img-fluid" alt="AkalBOT" style="width: 150px; height: auto;">                      
                    </div>
                </div>
            </div> -->

        <br>
        <div class="card">
          <div class="card-body">
            <h2 class="m-0 bold-text">Apa itu Editor Arduino?</h2>
            <br>
            <p class="text-muted">Editor Arduino adalah sebuah perisian yang digunakan untuk menulis dan memprogramkan kod untuk papan litar Arduino. Ia membolehkan kita mengawal komponen elektronik seperti lampu LED, motor, dan sensor. Dalam editor ini, kita tulis kod menggunakan bahasa pengaturcaraan tertentu, kemudian menghantarnya ke papan Arduino untuk menjalankan tugas-tugas yang kita inginkan. Ia sangat berguna untuk projek-projek robotik dan elektronik.</p>
            <div>
              <!-- LED -->
              <h5>Apa itu LED ?</h5>
              <p>LED digunakan dalam banyak aplikasi seharian seperti pada lampu isyarat. Lampu isyarat di jalan raya biasanya menggunakan LED untuk menunjukkan warna merah, kuning, dan hijau untuk memberi arahan kepada pemandu. Selain itu, LED juga digunakan dalam lampu depan kenderaan untuk memberi penerangan semasa memandu pada waktu malam.</p>
              <p>Contoh :</p>
              <p>LED digunakan dalam lampu isyarat untuk menunjukkan warna merah, kuning, dan hijau.</p>
              <div class="led red"></div>
              <div class="led yellow"></div>
              <div class="led green"></div>
              <div class="led led-animation"></div> <!-- LED dengan animasi -->

              <!-- Motor -->

              <h5>Apa itu Motor ?</h5>
              <p>Motor digunakan dalam penyejuk udara (air conditioner). Dalam peralatan ini, motor digunakan untuk menggerakkan kipas yang membantu menyejukkan udara di dalam bilik. Motor juga terdapat dalam pencetak yang menggerakkan mekanisme dalaman untuk menarik kertas dan mencetak dokumen.</p>
             
              <button class="motor-button" onclick="startMotor()">Mulakan Motor</button>
              <div id="motor-status" class="motor-status"></div>

              <!-- Sensor -->
              <h5>Apa itu Sensor ?</h5>
         
              <p>Sensor digunakan dalam sistem keselamatan seperti di pintu automatik. Pintu ini menggunakan sensor gerakan untuk membuka apabila seseorang mendekati pintu. Selain itu, sensor juga digunakan dalam kereta untuk mengesan halangan semasa parking (sensor parking), yang memberi amaran kepada pemandu jika terlalu dekat dengan objek lain.</p>
             
              <button class="sensor-button" onclick="activateSensor()">Aktifkan Sensor</button>
              <div id="sensor-status" class="sensor-status"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

<script>
  // Fungsi untuk motor
  function startMotor() {
    document.getElementById('motor-status').innerHTML = "Motor sedang berfungsi...";
  }

  // Fungsi untuk sensor
  function activateSensor() {
    document.getElementById('sensor-status').innerHTML = "Sensor mengesan pergerakan... Pintu terbuka!";
  }
</script>

<style>
  /* Gaya untuk LED */
  .led {
    width: 30px;
    height: 30px;
    border-radius: 20%;
    margin: 10px;
    display: inline-block;
  }

  .red {
    background-color: red;
  }

  .yellow {
    background-color: yellow;
  }

  .green {
    background-color: green;
  }

  /* Animasi LED */
  @keyframes changeColor {
    0% {
      background-color: red;
    }

    33% {
      background-color: yellow;
    }

    66% {
      background-color: green;
    }

    100% {
      background-color: red;
    }
  }

  .led-animation {
    animation: changeColor 3s infinite;
  }

  /* Gaya untuk bahagian motor */
  .motor-button {
    margin: 10px;
    padding: 10px 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
  }

  .motor-status {
    margin-top: 10px;
    font-size: 14px;
  }

  /* Gaya untuk bahagian sensor */
  .sensor-button {
    margin: 10px;
    padding: 10px 10px;
    background-color: #FF6347;
    color: white;
    border: none;
    cursor: pointer;
  }

  .sensor-status {
    margin-top: 10px;
    font-size: 14px;
  }
</style>

@endsection