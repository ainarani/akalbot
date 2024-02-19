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
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h1 class="m-0 bold-text">1.3 Uji Minda</h1>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <form id="myForm">
                        <div class="form-group mb-4">
                            <label for="name">1. AkalBOT bergerak berdasarkan urutan arahan berkod iaitu atur cara yang telah dimuat naik dan diproses oleh otak AkalBOT. Adakah anda tahu atur cara yang telah diproses oleh AkalBOT?</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="option1_yes" name="option1" value="ya">
                                <label class="form-check-label" for="option1_yes">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="option1_no" name="option1" value="tidak">
                                <label class="form-check-label" for="option1_no">Tidak</label>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label for="email">2. Jika YA, tuliskan atur cara tersebut di bawah:</label>
                            <input type="text" class="form-control" id="option2_text" name="option2">
                        </div>

                        <div class="form-group mb-4">
                            <label for="age">3. Jika TIDAK, adakah anda berminat untuk mengetahui atur cara untuk mengerakkan AkalBOT?</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="option3_yes" name="option3" value="ya">
                                <label class="form-check-label" for="option3_yes">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="option3_no" name="option3" value="tidak">
                                <label class="form-check-label" for="option3_no">Tidak</label>
                            </div>
                        </div>

                        <h7>Jika berminat, ayuh teruskan langkah ke Aktiviti 2 untuk mengetahui cara mengerakkan AkalBOT menggunakan atur cara. Jika anda tidak berminat, ayuh teruskan juga langkah anda ke Aktiviti 2 , supaya anda tahu yang mengerakkan robot menggunakan atur cara adalah perkara yang menarik untuk dilakukan!</h7> <br>
                        <button type="button" onclick="checkAnswers()" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Define correct answers
    var correctAnswers1_3 = {
        option1: "ya",
        option2: "cara cara",
        option3: "ya"
        // Add other correct answers as needed
    };

    // Save correct answers to local storage
    localStorage.setItem('correctAnswers1_3', JSON.stringify(correctAnswers1_3));

    // Function to save user input to local storage
    function saveUserInput() {
        var userInput1_3 = {
            option1: $('input[name=option1]:checked').val(),
            option2: $('#option2_text').val(),
            option3: $('input[name=option3]:checked').val()
            // Add other form fields as needed
        };

        localStorage.setItem('userInput1_3', JSON.stringify(userInput1_3));
    }

    // Function to compare user input with correct answers
    function checkAnswers() {
        saveUserInput(); // Save user input before comparing

        var storedCorrectAnswers = JSON.parse(localStorage.getItem('correctAnswers1_3'));
        var storedUserInput = JSON.parse(localStorage.getItem('userInput1_3'));

        var isCorrect = true;
        for (var key in storedUserInput) {
            if (storedUserInput.hasOwnProperty(key)) {
                if (storedUserInput[key] !== storedCorrectAnswers[key]) {
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
