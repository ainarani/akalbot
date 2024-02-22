@extends('layouts/contentNavbarLayout')

@section('title', 'Without navbar - Layouts')

@section('content')
@php
$container = 'container-xxl';
$containerNav = 'container-xxl';
@endphp

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
<h3 class="p-4 bold-text">
3.1  Fasa Pembangunan Aturcara</h3>
</div>

<div class="row mb-5">
  <div class="col-md-6 col-lg-12 mb-3">
    <div class="card h-100">
      <!-- <img class="card-img-top" src="{{asset('assets/img/elements/2.jpg')}}" alt="Card image cap" /> -->
      <div class="card-body">

        <p class="card-text">
        AkalBOT hanya bergerak mengikut arahan yang diberikan. Arahan ini dipanggil atur cara. AkalBOT 
tidak boleh berfikir sendiri, kita yang mengatur pergerakan AkalBOT menggunakan atur cara. <br> <br>
Ada dua perkara yang penting dalam pembangunan atur cara iaitu : <br>
<?php
echo "<style>";
echo ".numbered-list { padding-left: 20px; }";
echo "</style>";

echo "<div class='numbered-list'>1) <strong>Algoritma</strong> ialah langkah demi langkah untuk selesaikan masalah. </div>";
echo "<div class='numbered-list'>2) <strong>Atur cara</strong> ialah arahan untuk implementasi algoritma.</div><br>";?>
Algoritma dibangunkan dalam fasa reka bentuk atur cara dan di implementasi sebagai atur cara 
menggunakan bahasa pengaturcaraan C++ dalam fasa pengekodan. Namun, reka bentuk 
dibangunkan berdasarkan analisis yang dilakukan pada masalah iaitu pada fasa kedua dalam fasa 
pembangunan atur cara seperti pada Rajah 3.1.
        </p>

     

<!-- Apply the custom class to the p element -->
<p class="card-text">
<strong>Tugasan 9:</strong> <br>
  Lengkapkan fasa pembangunan atur cara pada Rajah 3.1. <br>
  
</p>
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
<img src="{{asset('assets/img/activity_3/tugasan9.JPG')}}" class="img-fluid" alt="Responsive image">


</body>
</html>
<p>
  <br>
  Sila nyatakan jawapan di ruang yang disediakan. <br>
</p>
<input type="text" id="tugasan9_3" name="tugasan9_3" placeholder="(3)" style="width: 500px;"><br><br>
<input type="text" id="tugasan9_4" name="tugasan9_4" placeholder="(4)" style="width: 500px;"><br><br>

<button type="submit" onclick="checkAnswers()" class="btn btn-primary">Submit</button>


        <!-- <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a> -->
      </div>
    </div>
  </div>
  </div>

  <!-- local storage stored for tugasan 9 -->

  <script>
    // Define correct answers
    var tugasan9Answers = {
      tugasan9_3: "abc",
      tugasan9_4: "def",
        
        // Add other correct answers as needed
    };

    // Save correct answers to local storage
    localStorage.setItem('tugasan9Answers', JSON.stringify(tugasan9Answers));

    // Function to save user input to local storage
    function saveTugasan9Input() {
        var tugasan9Input = { 
            tugasan9_3: $('#tugasan9_3').val(),
            tugasan9_4: $('#tugasan9_4').val(),
            // Add other form fields as needed
        };

        localStorage.setItem('tugasan9Input', JSON.stringify(tugasan9Input));
    }

    // Function to compare user input with correct answers
    function checkAnswers() {
        saveTugasan9Input(); // Save user input before comparing

        var storedTugasan9Answers = JSON.parse(localStorage.getItem('tugasan9Answers'));
        var storedTugasan9Input = JSON.parse(localStorage.getItem('tugasan9Input'));

        var isCorrect = true;
        for (var key in storedTugasan9Input) {
            if (storedTugasan9Input.hasOwnProperty(key)) {
                if (storedTugasan9Input[key] !== storedTugasan9Answers[key]) {
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
