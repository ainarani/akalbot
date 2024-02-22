@php
$container = 'container-xxl';
$containerNav = 'container-xxl';
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Without navbar - Layouts')

@section('content')
<div class="card mb-4">
<h3 class="p-4 bold-text">
3.4 Implementasi Algoritma Kepada Aturcara</h3>
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
        Algoritma dalam bentuk carta alir yang dibangunkan dalam fasa reka bentuk merupakan asas 
untuk fasa pengekodan dengan menggunakan bahasa pengaturcaraan yang sesuai. Dalam aktiviti 
2, bahasa yang digunakan untuk implementasi algoritma ialah C++ seperti dalam Rajah 3.3. 
        </p>
       
     

<!-- Apply the custom class to the p element -->
<p class="card-text">
  <strong>Tugasan 13: </strong><br>
  Kenal pasti set arahan yang dilaksanakan lebih daripada sekali dalam Rajah 3.3. </p>
  <style>
    /* Apply basic styling */
    #pengekodan_aturcara {
        width: 100%; /* Use 100% width */
        max-width: 550px; /* Set a maximum width */
        height: 150px;
    }

    /* Add some spacing for clarity */
    body {
        margin: 20px;
    }
</style>


<input type="text" id="pengekodan_aturcara" name="pengekodan_aturcara"> <br><br>

  <p class="card-text">
  Dalam Rajah 3.3, kod aturcara yang dibangunkan mengunakan set arahan yang sama secara 
berulang. Satu set arahan ini dipanggil fungsi. Ini memudahkan pengatur cara kerana dapat 
menguna semula set arahan tanpa perlu menulis satu set arahan yang baharu. 
        </p>

        <p class="card-text">
  <strong>Tugasan 14: </strong><br>
  Jadual dibawah menunjukkan implementasi carta alir kepada aturcara untuk fungsi tertentu. 
Lengkapkan <strong>Nama Fungsi</strong> dan <strong>Definisi Fungsi</strong> di dalam jadual. </p>
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

<img src="{{asset('assets/img/activity_3/tugasan14a.JPG')}}" class="img-fluid" alt="Responsive image">
<img src="{{asset('assets/img/activity_3/tugasan14b.JPG')}}" class="img-fluid" alt="Responsive image">

</body>
</html>
<p>
  <br>
  Sila nyatakan jawapan di ruang yang disediakan. <br>
</p>
<input type="text" id="tugasan14a" name="tugasan14a" placeholder="(a)" style="width: 500px;"><br><br>
<input type="text" id="tugasan14b" name="tugasan14b" placeholder="(b)" style="width: 500px;"><br><br>
<input type="text" id="tugasan14c" name="tugasan14c" placeholder="(c)" style="width: 500px;"><br><br>
<input type="text" id="tugasan14d" name="tugasan14d" placeholder="(d)" style="width: 500px;"><br><br>
<input type="text" id="tugasan14e" name="tugasan14e" placeholder="(e)" style="width: 500px;"><br><br>
<input type="text" id="tugasan14f" name="tugasan14f" placeholder="(f)" style="width: 500px;"><br><br>
<input type="text" id="tugasan14g" name="tugasan14g" placeholder="(g)" style="width: 500px;"><br><br>
<input type="text" id="tugasan14h" name="tugasan14h" placeholder="(h)" style="width: 500px;"><br><br>
<input type="text" id="tugasan14i" name="tugasan14i" placeholder="(i)" style="width: 500px;"><br><br>
<input type="text" id="tugasan14j" name="tugasan14j" placeholder="(j)" style="width: 500px;"><br><br>
<input type="text" id="tugasan14k" name="tugasan14k" placeholder="(k)" style="width: 500px;"><br><br>
<input type="text" id="tugasan14l" name="tugasan14l" placeholder="(l)" style="width: 500px;"><br><br>
<input type="text" id="tugasan14m" name="tugasan14m" placeholder="(m)" style="width: 500px;"><br><br>

<button type="submit" onclick="checkAnswers()" class="btn btn-primary">Submit</button>


        <!-- <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a> -->
      </div>
    </div>
  </div>
  </div>


  <script>
    // Define correct answers
    var tugasan14Answers = {
      tugasan14a: "abc",
      tugasan14b: "def",
      tugasan14c: "def", 
      tugasan14d: "abc",
      tugasan14e: "def",
      tugasan14f: "def",        
      tugasan14g: "abc",
      tugasan14h: "def",
      tugasan14i: "def",        
      tugasan14j: "abc",
      tugasan14k: "def",
      tugasan14l: "def",        
      tugasan14m: "abc",
                     
        // Add other correct answers as needed
    };

    // Save correct answers to local storage
    localStorage.setItem('tugasan14Answers', JSON.stringify(tugasan14Answers));

    // Function to save user input to local storage
    function saveTugasan14Input() {
        var tugasan14Input = { 
          tugasan14a: $('#tugasan14a').val(),
          tugasan14b: $('#tugasan14b').val(),
          tugasan14c: $('#tugasan14c').val(),
          tugasan14d: $('#tugasan14d').val(),
          tugasan14e: $('#tugasan14e').val(),
          tugasan14f: $('#tugasan14f').val(),
          tugasan14g: $('#tugasan14g').val(),
          tugasan14h: $('#tugasan14h').val(),
          tugasan14i: $('#tugasan14i').val(),
          tugasan14j: $('#tugasan14j').val(),
          tugasan14k: $('#tugasan14k').val(),
          tugasan14l: $('#tugasan14l').val(),
          tugasan14m: $('#tugasan14m').val(),
          
        };

        localStorage.setItem('tugasan14Input', JSON.stringify(tugasan14Input));
    }

    // Function to compare user input with correct answers
    function checkAnswers() {
        saveTugasan14Input(); // Save user input before comparing

        var storedTugasan14Answers = JSON.parse(localStorage.getItem('tugasan14Answers'));
        var storedTugasan14Input = JSON.parse(localStorage.getItem('tugasan14Input'));

        var isCorrect = true;
        for (var key in storedTugasan14Input) {
            if (storedTugasan14Input.hasOwnProperty(key)) {
                if (storedTugasan14Input[key] !== storedTugasan14Answers[key]) {
                    isCorrect = false;
                    break;
                }
            }
        }

        if (isCorrect) {
            alert("Congratulations! Your answers are correct.");
            // You can perform additional actions here, such as redirecting the user to a success page.
        } else {
            alert("Sorry, some of your answers are incorrect. Please try again.");
            // You can perform additional actions here, such as highlighting the incorrect answers or providing feedback to the user.
        }
    }
</script>
@endsection
