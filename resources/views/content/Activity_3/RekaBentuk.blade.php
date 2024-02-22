@php
$container = 'container-xxl';
$containerNav = 'container-xxl';
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Without navbar - Layouts')

@section('content')
<div class="card mb-4">
<h3 class="p-4 bold-text">
3.3  Reka Bentuk AkalBOT Menggunakan Carta Alir  </h3>
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
        Dalam Seksyen 3.2, kita dapat lihat bagaimana kod aturcara dibina berdasarkan penguraian 
masalah. Namun, kod yang dibina itu telah melalui fasa reka bentuk yang yang telah mengenal 
pasti langkah demi langkah untuk menyelesaikan masalah melalui algoritma. Carta alir 
merupakan satu kaedah untuk menggambarkan algoritma menggunakan bentuk tertentu. 


        </p>
        <p class="card-text">
        Carta alir terdiri daripada bentuk tertentu untuk mengambarkan fungsinya. Rujuk Lampiran D 
untuk belajar mengenai bentuk dalam carta alir. Contohnya bentuk segi empat tepat adalah 
menunjukkan aksi.


        </p>

     

<!-- Apply the custom class to the p element -->
<p class="card-text">
  <strong>Tugasan 12: </strong><br>
  Lengkapkan carta alir pada Rajah 3.4 berdasarkan atur cara yang mengerakkan AkalBOT dalam 
Aktiviti 2. </p>
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

<img src="{{asset('assets/img/activity_3/tugasan12.JPG')}}" alt="Rajah 3.4: Carta alir tuju selipar">
<p  class="center-text">Rajah 3.4: Carta alir tuju selipar</p>
</body>
</html>
<p>
  <br>
  Sila nyatakan jawapan di ruang yang disediakan. <br>
</p>
<input type="text" id="tugasan12a" name="tugasan12a" placeholder="(a)" style="width: 500px;"><br><br>
<input type="text" id="tugasan12b" name="tugasan12b" placeholder="(b)" style="width: 500px;"><br><br>
<input type="text" id="tugasan12c" name="tugasan12c" placeholder="(c)" style="width: 500px;"><br><br>

<button type="submit" onclick="checkAnswers()" class="btn btn-primary">Submit</button>


        <!-- <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a> -->
      </div>
    </div>
  </div>
  </div>

  <!-- local storage stored for tugasan 12 -->

  <script>
    // Define correct answers
    var tugasan12Answers = {
      tugasan12a: "abc",
      tugasan12b: "def",
      tugasan12c: "def",        
        // Add other correct answers as needed
    };

    // Save correct answers to local storage
    localStorage.setItem('tugasan12Answers', JSON.stringify(tugasan12Answers));

    // Function to save user input to local storage
    function saveTugasan12Input() {
        var tugasan12Input = { 
            tugasan12a: $('#tugasan12a').val(),
            tugasan12b: $('#tugasan12b').val(),
            tugasan12c: $('#tugasan12c').val(),
            // Add other form fields as needed
        };

        localStorage.setItem('tugasan12Input', JSON.stringify(tugasan12Input));
    }

    // Function to compare user input with correct answers
    function checkAnswers() {
        saveTugasan12Input(); // Save user input before comparing

        var storedTugasan12Answers = JSON.parse(localStorage.getItem('tugasan12Answers'));
        var storedTugasan12Input = JSON.parse(localStorage.getItem('tugasan12Input'));

        var isCorrect = true;
        for (var key in storedTugasan12Input) {
            if (storedTugasan12Input.hasOwnProperty(key)) {
                if (storedTugasan12Input[key] !== storedTugasan12Answers[key]) {
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
