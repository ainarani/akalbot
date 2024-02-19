@php
$container = 'container-xxl';
$containerNav = 'container-xxl';
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Analisis Masalah')

@section('content')
<div class="card mb-4">
<h3 class="p-4 bold-text">
Soalan Kuiz</h3>
</div>
<div class="row mb-5">
  <div class="col-md-6 col-lg-12 mb-3">
    <div class="card h-100">
    <div class="card">
                <div class="card-body">
                    <form id="myForm">
                        <div class="form-group mb-4">
                            <label for="name">1. AkalBOT bergerak berdasarkan urutan arahan berkod iaitu atur cara yang telah dimuat naik dan diproses oleh otak AkalBOT. Adakah anda tahu atur cara yang telah diproses oleh AkalBOT?</label>
                            <br><br>
                            <div class="form-check">
                                 <input class="form-check-input" type="radio" id="option_animal" name="option1" value="animal" required>
                                 <label class="form-check-label" for="option_animal">animal</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_bola" name="option1" value="bola" required>
                                <label class="form-check-label" for="option_bola">bola</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_coala" name="option1" value="coala" required>
                                <label class="form-check-label" for="option_coala">coala</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_dudu" name="option1" value="dudu" required>
                                <label class="form-check-label" for="option_dudu">dudu</label>
                            </div>
                            <br>

                        <div class="form-group mb-4">
                            <label for="age">2. Jika TIDAK, adakah anda berminat untuk mengetahui atur cara untuk mengerakkan AkalBOT?</label><br><br>
                            
                            <div class="form-check">
                                 <input class="form-check-input" type="radio" id="option_animal" name="option2" value="animal">
                                 <label class="form-check-label" for="option_animal">animal</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_bola" name="option2" value="bola">
                                <label class="form-check-label" for="option_bola">bola</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_coala" name="option2" value="coala">
                                <label class="form-check-label" for="option_coala">coala</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_dudu" name="option2" value="dudu">
                                <label class="form-check-label" for="option_dudu">dudu</label>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label for="age">3. Jika TIDAK, adakah anda berminat untuk mengetahui atur cara untuk mengerakkan AkalBOT?</label><br><br>
                            
                            <div class="form-check">
                                 <input class="form-check-input" type="radio" id="option_animal" name="option3" value="animal">
                                 <label class="form-check-label" for="option_animal">animal</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_bola" name="option3" value="bola">
                                <label class="form-check-label" for="option_bola">bola</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_coala" name="option3" value="coala">
                                <label class="form-check-label" for="option_coala">coala</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_dudu" name="option3" value="dudu">
                                <label class="form-check-label" for="option_dudu">dudu</label>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label for="age">4. Jika TIDAK, adakah anda berminat untuk mengetahui atur cara untuk mengerakkan AkalBOT?</label><br><br>
                            
                            <div class="form-check">
                                 <input class="form-check-input" type="radio" id="option_animal" name="option4" value="animal">
                                 <label class="form-check-label" for="option_animal">animal</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_bola" name="option4" value="bola">
                                <label class="form-check-label" for="option_bola">bola</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_coala" name="option4" value="coala">
                                <label class="form-check-label" for="option_coala">coala</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_dudu" name="option4" value="dudu">
                                <label class="form-check-label" for="option_dudu">dudu</label>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label for="age">5. Jika TIDAK, adakah anda berminat untuk mengetahui atur cara untuk mengerakkan AkalBOT?</label><br><br>
                            
                            <div class="form-check">
                                 <input class="form-check-input" type="radio" id="option_animal" name="option5" value="animal">
                                 <label class="form-check-label" for="option_animal">animal</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_bola" name="option5" value="bola">
                                <label class="form-check-label" for="option_bola">bola</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_coala" name="option5" value="coala">
                                <label class="form-check-label" for="option_coala">coala</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_dudu" name="option5" value="dudu">
                                <label class="form-check-label" for="option_dudu">dudu</label>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label for="age">6. Jika TIDAK, adakah anda berminat untuk mengetahui atur cara untuk mengerakkan AkalBOT?</label><br><br>
                            
                            <div class="form-check">
                                 <input class="form-check-input" type="radio" id="option_animal" name="option6" value="animal">
                                 <label class="form-check-label" for="option_animal">animal</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_bola" name="option6" value="bola">
                                <label class="form-check-label" for="option_bola">bola</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_coala" name="option6" value="coala">
                                <label class="form-check-label" for="option_coala">coala</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_dudu" name="option6" value="dudu">
                                <label class="form-check-label" for="option_dudu">dudu</label>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label for="age">7. Jika TIDAK, adakah anda berminat untuk mengetahui atur cara untuk mengerakkan AkalBOT?</label><br><br>
                            
                            <div class="form-check">
                                 <input class="form-check-input" type="radio" id="option_animal" name="option7" value="animal">
                                 <label class="form-check-label" for="option_animal">animal</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_bola" name="option7" value="bola">
                                <label class="form-check-label" for="option_bola">bola</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_coala" name="option7" value="coala">
                                <label class="form-check-label" for="option_coala">coala</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_dudu" name="option7" value="dudu">
                                <label class="form-check-label" for="option_dudu">dudu</label>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label for="age">8. Jika TIDAK, adakah anda berminat untuk mengetahui atur cara untuk mengerakkan AkalBOT?</label><br><br>
                            
                            <div class="form-check">
                                 <input class="form-check-input" type="radio" id="option_animal" name="option8" value="animal">
                                 <label class="form-check-label" for="option_animal">animal</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_bola" name="option8" value="bola">
                                <label class="form-check-label" for="option_bola">bola</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_coala" name="option8" value="coala">
                                <label class="form-check-label" for="option_coala">coala</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_dudu" name="option8" value="dudu">
                                <label class="form-check-label" for="option_dudu">dudu</label>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label for="age">9. Jika TIDAK, adakah anda berminat untuk mengetahui atur cara untuk mengerakkan AkalBOT?</label><br><br>
                            
                            <div class="form-check">
                                 <input class="form-check-input" type="radio" id="option_animal" name="option9" value="animal">
                                 <label class="form-check-label" for="option_animal">animal</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_bola" name="option9" value="bola">
                                <label class="form-check-label" for="option_bola">bola</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_coala" name="option9" value="coala">
                                <label class="form-check-label" for="option_coala">coala</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="option_dudu" name="option9" value="dudu">
                                <label class="form-check-label" for="option_dudu">dudu</label>
                            </div>
                        </div>

                        <button type="button" onclick="checkAnswers()" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
    </div>
  </div>
</div>
<script>
    // Define correct answers
    var correctAnswersKuiz = {
        option1: "bola",
        option2: "bola",
        option3: "bola",
        option4: "bola",
        option5: "bola",
        option6: "bola",
        option7: "bola",
        option8: "bola",
        option9: "bola"
        // Add other correct answers as needed
    };

    // Function to save user input to local storage
    function saveUserInput() {
        var userInputKuiz = {
            option1: $('input[name=option1]:checked').val(),
            option2: $('input[name=option1]:checked').val(),
            option3: $('input[name=option3]:checked').val(),
            option4: $('input[name=option4]:checked').val(),
            option5: $('input[name=option5]:checked').val(),
            option6: $('input[name=option6]:checked').val(),
            option7: $('input[name=option7]:checked').val(),
            option8: $('input[name=option8]:checked').val(),
            option9: $('input[name=option9]:checked').val()
            // Add other form fields as needed
        };

        localStorage.setItem('userInputKuiz', JSON.stringify(userInputKuiz));
    }

    // Function to compare user input with correct answers and redirect accordingly
    function checkAnswers() {
        saveUserInput(); // Save user input before comparing

        var storedCorrectAnswers = correctAnswersKuiz;
        var storedUserInput = JSON.parse(localStorage.getItem('userInputKuiz'));

        var isCorrect = true;
        var feedback = {};

        for (var key in storedUserInput) {
            if (storedUserInput.hasOwnProperty(key)) {
                if (storedUserInput[key] !== storedCorrectAnswers[key]) {
                    isCorrect = false;
                }
                feedback[key] = {
                    userAnswer: storedUserInput[key],
                    correctAnswer: storedCorrectAnswers[key]
                };
            }
        }

        // Redirect user and display feedback
        localStorage.setItem('quizFeedback', JSON.stringify(feedback));
        if (isCorrect) {
            // Redirect to success UI
            window.location.href = 'success_ui.html';
        } else {
            // Redirect to error UI
            window.location.href = "{{ route('Kuiz-Error') }}"
        }
    }
</script>

@endsection