@php
$container = 'container-xxl';
$containerNav = 'container-xxl';
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Without navbar - Layouts')

@section('content')

<style>
    /* Custom CSS for image positioning */
    .image-container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    /* Style for the images */
    .image-container .image-wrapper {
        width: 100%;
        /* Ensure images fill the width of the card */
        max-width: 200px;
        /* Limit maximum width of the images */
        margin-bottom: 10px;
        /* Adjust the margin between images */
        text-align: center;
        /* Center text */
        cursor: pointer;
        /* Change cursor to pointer for better UX */
    }

    .image-container .image-wrapper img {
        width: 100%;
        /* Ensure images fill the width of their wrappers */
        height: auto;
        /* Maintain aspect ratio */
    }

    /* Center the container horizontally */
    .container {
        display: flex;
        justify-content: center;
    }

    /* Hide explanation cards by default */
    .explanation-card {
        display: none;
    }

    .cardLakukan .card-body {
        position: relative;
        padding-bottom: auto;
        /* 16:10 aspect ratio */
    }

    .cardLakukan .card-body video {
        position: absolute;
        top: 0px;
        left: 10px;
        right: 10px;
        width: 98%;
        height: 100%;
    }

    .jawapan {
        color: blue;
        text-decoration: underline;
        cursor: pointer;
    }

    .step.active .step-number {
        background-color: #00008B;
        /* Dark blue color */
    }

    .arrow {
        margin-left: 5px;
    }

    .timeline {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    .step {
        text-align: center;
        position: relative;
    }

    .step::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 2px;
        background-color: #ccc;
        top: 25px;
        left: 50%;
        z-index: -1;
    }

    .step:last-child::after {
        display: none;
    }

    .step-number {
        width: 50px;
        height: 50px;
        background-color: #007bff;
        color: white;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto 10px;
    }

    .step-text {
        font-weight: bold;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var timelineSteps = document.querySelectorAll('.timeline .step');
        timelineSteps.forEach(function(step) {
            step.addEventListener('click', function() {
                // Remove active class from all steps
                timelineSteps.forEach(function(s) {
                    s.classList.remove('active');
                });

                // Add active class to clicked step
                this.classList.add('active');

                var stepId = this.id.split('-')[1];
                showExplanation(stepId);
            });
        });
    });

    function showExplanation(image) {
        // Hide all explanation cards
        var explanationCards = document.getElementsByClassName('explanation-card');
        for (var i = 0; i < explanationCards.length; i++) {
            explanationCards[i].style.display = 'none';
        }

        // Show the explanation card corresponding to the clicked image or timeline step
        var explanationCard = document.getElementById('explanation-' + image);
        if (explanationCard) {
            explanationCard.style.display = 'block';
            // Scroll to the explanation card
            explanationCard.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    }
</script>

<body>

    <div class="{{ $container }}">
        <div class="row justify-content-center">
            <div class="col-lg-12">

                <div class="timeline">
                    <?php
                    $steps = ["Berfikir", "Lakukan", "Uji", "Renung"];
                    foreach ($steps as $index => $step) {
                        echo "<div class='step' id='step-" .
                            strtolower($step) .
                            "'>
                    <div class='step-number'>" .
                            ($index + 1) .
                            "</div>
                    <div class='step-text'>$step</div>
                </div>";
                    }
                    ?>
                </div>
                <!-- <div class="card">
                <div class="card-body">
                    <h2>Jom Jatuhkan Selipar !!!</h2>
                   <div class="card mb-3">
                        <div class="card-body">
                            <div class="image-container">
                                <div class="image-wrapper" onclick="showExplanation('berfikir')">
                                    <img src="{{ asset('assets/img/kitar_1/berfikir.JPG') }}" class="img-fluid" alt="AkalBOT">
                                    <h5>Berfikir</h5>
                                </div>                 
                                <div class="d-flex justify-content-between w-100">
                                    <div class="image-wrapper" onclick="showExplanation('merenung')">
                                        <img src="{{ asset('assets/img/kitar_1/merenung.JPG') }}" class="img-fluid" alt="AkalBOT">
                                        <h5>Merenung</h5>


                                    </div>
                                    
                                    <div class="image-wrapper" onclick="showExplanation('lakukan')">
                                        <img src="{{ asset('assets/img/kitar_1/lakukan.JPG') }}" class="img-fluid" alt="AkalBOT">
                                        <h5>Lakukan</h5>
                                    </div>
                                </div>
                                <div class="image-wrapper" onclick="showExplanation('uji')">
                                    <img src="{{ asset('assets/img/kitar_1/uji.JPG') }}" class="img-fluid" alt="AkalBOT">
                                    <h5>Menguji</h5>
                                    <img src="{{ asset('assets/img/kitar_1/left_arrow.gif') }}" class="gif" alt="GIF">
                                    
                                </div>

                                

                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
                <br>

                <!-- Explanation cards -->
                <div class="explanation-card" id="explanation-berfikir">
                    <div class="">
                        <div class="">
                            <h4 class="">1. Berfikir</h4>

                            <div class="card mb-3">
                                <div class="card-body">

                                    <h5 class="card-subtitle mb-2">Masalah</h5>

                                    <!-- Masalah 1 -->
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <br>
                                            <img class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_1/masalah1.JPG') }}" alt="Masalah 1" style="width: auto; height: 180px;">
                                            <br>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <p class="card-text">Seorang kanak-kanak sedang cuba membaling selipar ke arah susunan selipar untuk menjatuhkannya. Ini merupakan asas dalam permainan tradisional tuju selipar iaitu seorang pemain pada jarak tertentu perlu membaling satu selipar ke arah satu susunan selipar untuk meruntuhkannya. Tentunya permainan ini boleh diubahsuai dengan menjadikan AkalBOT sebagai pemusnah susunan selipar.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Masalah 2 -->
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <br>
                                            <img class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_1/masalah2.JPG') }}" alt="Masalah 2" style="width: auto; height: 180px;">
                                            <br>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <p class="card-text">Namun, bagaimana AkalBOT dapat diprogramkan supaya dapat menjatuhkan selipar. Ini bermaksud satu atur cara perlu dimuat naik ke AkalBOT untuk bergerak ke arah lokasi selipar. Jarak di antara selipar (lokasi B) dengan tempat AkalBOT mula bergerak (lokasi A) adalah lebih 60 cm. Namun, pergerakan AkalBOT hanya terbatas dengan 3 pergerakan berbeza iaitu pergerakan terus, belok kanan dan berhenti. Bagaimana menyelesaikan masalah ini?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- end masalah -->

                            <!-- analisis masalah -->

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Analisis Masalah</h5>
                                    <p class="card-text text-muted">Mari kita analisis masalah ini menggunakan teknik pemikiran komputasional iaitu penguraian.</p>
                                    <br>
                                    <h6 class="card-subtitle mb-2 text-muted"><strong>Penguraian</strong></h6>
                                    <p class="card-text text-muted"><strong>Masalah utama</strong> dalam misi tuju selipar ialah bagaimana untuk menyusun pergerakan AkalBOT supaya berjaya meruntuhkan selipar dengan jarak 60 cm daripada ianya bermula dan terhad kepada tiga jenis pergerakan sahaja. Oleh itu, masalah ini boleh dihuraikan mengikut urutan pergerakan.</p>
                                    <br>
                                    <p class="card-text text-muted">Berapakah huraian pergerakan yang terhasil?</p>
                                    <p class="card-text text-muted jawapan">Jawapan <span class="arrow">&#9660;</span></p>
                                    <div id="tableContainer" style="display: none;">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_1/analisismasalahjawapan1.JPG') }}" alt="Masalah 2" style="width: 250px; height: auto;">
                                                    </td>
                                                    <td>
                                                        1) Gerak terus dan berhenti iaitu sejauh mana robot perlu bergerak terus daripada tempat bermula sehingga sebelum berhenti untuk belok ke kanan.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_1/analisismasalahjawapan2.JPG') }}" alt="Masalah 2" style="width: 250px; height: auto;">
                                                    </td>
                                                    <td>
                                                        2) Belok kanan berdasarkan darjah pusingan ke kanan dan berhenti.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_1/analisismasalahjawapan3.JPG') }}" alt="Masalah 2" style="width: 250px; height: auto;">
                                                    </td>
                                                    <td>
                                                        3) Gerak terus dan berhenti iaitu selepas belok ke kanan, sejauh mana robot bergerak terus sebelum berhenti pada lokasi yang dapat meruntuhkan susunan selipar.
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                            <!-- end analisis masalah -->

                            <!-- reka bentuk -->
                            <br>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Reka bentuk atur cara</h5>
                                    <p class="card-text text-muted">Berdasarkan huraian pergerakan, langkah demi langkah untuk menyelesaikan masalah iaitu <strong>algoritma</strong> perlu dikenal pasti. Untuk menggambarkan algoritma menggunakan bentuk tertentu, carta alir boleh digunakan. Carta alir terdiri daripada bentuk tertentu untuk mengambarkan fungsinya. Rujuk CARTA ALIR untuk belajar mengenai bentuk dalam carta alir. Contohnya bentuk segi empat tepat adalah menunjukkan aksi.</p>
                                    <p class="card-text text-muted">Apakah langkah yang perlu untuk melengkapkan carta alir ini?</p>
                                    <img class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_1/rekabentuksoalan.JPG') }}" alt="Masalah 2" style="width: 250px; height: auto;">
                                    <p class="card-text text-muted jawapan">Jawapan <span class="arrow">&#9660;</span></p>
                                    <img id="jawapanImage" class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_1/rekabentukjawapan.JPG') }}" alt="Masalah 2" style="width: 250px; height: auto; display: none;">

                                </div>
                            </div>
                            <!-- end reka bentuk -->

                        </div>
                    </div>
                </div>

                <!-- LAKUKAN -->

                <div class="explanation-card" id="explanation-lakukan">
                    <div class="">
                        <div class="">
                            <h4>2. Lakukan</h4>

                            <div class="card cardLakukan">
                                <div class="card-body">
                                    <h5 class="mb-2">Pengekodan</h5>
                                    <p class="text-muted">Algoritma dalam bentuk carta alir yang dibangunkan dalam fasa reka bentuk merupakan asas untuk fasa pengekodan dengan menggunakan bahasa pengaturcaraan yang sesuai. Bahasa yang digunakan untuk implementasi algoritma ialah C++. Bahasa ini digunakan untuk memberi arahan kepada AkalBOT untuk bergerak bagi menjatuhkan selipar. Arahan ini dipanggil atur cara. AkalBOT tidak boleh berfikir sendiri, kita yang mengatur pergerakan AkalBOT menggunakan atur cara. Mari kita lakukan pengekodan iaitu membangunkan kod atur cara menggunakan AkalBLOK.</p>

                                    <h5 class="card-title">Mari Lakukan </h5>
                                    <!-- <h5 class="card-subtitle mb-2">Subtitle Goes Here</h5> -->
                                    <p class="card-text text-muted">Dengan menggunakan AkalBLOK, susun blok untuk mengerakkan AkalBOT supaya AkalBOT bergerak menuju ke selipar berdasarkan urutan carta alir. Blok yang terlibat adalah:</p>
                                    <ul>
                                        <li>Blok Motor: Pergerakan Terus, Berhenti, dan Belok Kanan.</li>
                                        <li>Blok Input/Output: Delay dan Exit.</li>
                                    </ul>
                                    <img class="card-img-top mx-auto d-block img-fluid" src="{{ asset('assets/img/kitar_1/lakukan_pengekodan.JPG') }}" alt="Masalah 1" style="width: 50%; height: auto;">
                                    <br>
                                    <h5 class="card-title">Mari lihat video dibawah </h5>
                                    <div class="video-container" style="width: 100%; height: 100%;">
                                        <iframe
                                            class="video-iframe"
                                            width="100%"
                                            height="100%"
                                            src="https://www.youtube.com/watch?v=OR2j0kqYUK0"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                    <br>
                                    <!-- <div class="embed-responsive embed-responsive-16by9"> -->
                                    <!-- <video autoplay loop muted playsinline class="embed-responsive-item">
                                        <source src="{{asset('assets/img/kitar_1/video1_akalBLOK.mp4')}}" type="video/mp4">
                                    </video>
                                </div> -->
                                    <p class="card-text text-muted">Selepas mengabungkan semua blok, perhatikan kod yang membentuk atur cara lengkap di sebelah kanan editor.</p>
                                    <img class="card-img-top mx-auto d-block img-fluid" src="{{ asset('assets/img/kitar_1/lakukan_pengekodan2.JPG') }}" alt="Masalah 1" style="width: 50%; height: auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- END LAKUKAN -->

                <!-- UJI -->

                <div class="explanation-card" id="explanation-uji">
                    <h4>3. Menguji</h4>
                    <div class="card">
                        <div class="card-body">

                            <h5 class="card-subtitle mb-2">Pengujian</h5>
                            <p class="card-text text-muted">Mari uji bagaimana atur cara yang dibangunkan dapat mengerakkan AkalBOT untuk menjatuhkan selipar. </p>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <img class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_1/uji2.JPG') }}" alt="Masalah 2" style="width: 250px; height: auto;">
                                        </td>
                                        <td>
                                            1) Susun padang permainan supaya sesuai dengan laluan AkalBOT.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_1/uji1.JPG') }}" alt="Masalah 2" style="width: 250px; height: auto;">
                                        </td>
                                        <td>
                                            2) Kemudian, susun tiga selipar secara menegak pada lokasi yang sesuai seperti lokasi B.
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <br>
                            <p class="card-text text-muted">Dengan menggunakan Editor Arduino, kompil atur cara yang dibangunkan. Rujuk bahagian Kompil Aturcara untuk langkah menguji atur cara. Kemudian, letak AkalBot pada satu lokasi yang anda rasakan sesuai dengan kod anda pada padang permainan seperti lokasi A. Larikan AkalBOT dengan menekan butang On bermula daripada lokasi tersebut.</p>
                            <p>video 2</p>
                            <p class="card-text text-muted">Jika anda tidak berjaya menjatuhkan selipar menggunakan AkalBOT, ubahsuai nilai pada blok delay dan uji semula sehingga berjaya. </p>
                            <p>video 3</p>
                            <p class="card-text text-muted">Jika anda telah berjaya menjatuhkan selipar, tahniah diucapkan. Mari teroka lokasi baharu untuk AkalBOT bermula selain daripada lokasi A. Tanpa perlu mengubah atur cara, ubah 4 atau 5 papan permainan supaya lokasi A untuk AkalBot berubah tetapi lokasi selipar tetap sama. Semoga berjaya!</p>
                            <img class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_1/uji3.JPG') }}" alt="Masalah 2" style="width: 250px; height: auto;">

                        </div>
                    </div>
                </div>

                <!-- END UJI -->

                <!-- MERENUNG -->

                <div class="explanation-card" id="explanation-renung">
                    <div class="">
                        <div class="">
                            <h4>4. Merenung</h4>
                            <h5 class="mb-2"></h5>
                            <!-- <p class="card-text text-muted">Mari uji bagaimana atur cara yang dibangunkan dapat mengerakkan AkalBOT untuk menjatuhkan selipar. </p> -->
                            <table class="table table-bordered mb-3">
                                <tr>
                                    <td class="align-top" style="width: 30%;"> <!-- Set column 1 to 30% -->
                                        <p class="card-text">Cuba renungkan bagaimana AkalBOT boleh bergerak menggunakan atur cara yang anda bangunkan. Mengapa ada ketika AkalBOT tidak bergerak seperti yang anda mahukan?</p>
                                    </td>
                                    <td class="align-top" style="width: 70%;"> <!-- Set column 2 to 70% -->
                                        <pre>
                void loop()
                {
                    terus();
                    delay(2300);
                    berhenti();

                    belokkanan();
                    delay(400);
                    berhenti();

                    terus();
                    delay(800);
                    berhenti();
                    exit(0);
                }
            </pre>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="align-top" style="width: 30%;"> <!-- Set column 1 to 30% -->
                                        <img class="img-fluid" src="{{ asset('assets/img/kitar_1/merenung1.JPG') }}" alt="Masalah 1" style="width: 50%; height: auto;">
                                    </td>
                                    <td class="align-top" style="width: 70%;"> <!-- Set column 2 to 70% -->
                                        <p class="card-text">Semuanya bergantung pada arahan yang anda berikan melalui atur cara. Contohnya arahan terus () yang membolehkan komponen servo motor pada tayar bergerak ke hadapan pada jarak yang selaras dengan nilai delay. Jom lihat apa yang ada dalam arahan terus:</p>
                                        <pre>
                void terus()
                {
                    ServoL.write(0);
                    ServoR.write(180);
                }
            </pre>
                                        <p>Ternyata arahan ini mengawal bagaimana servo motor kanan dan kiri bergerak.</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="align-top" style="width: 30%;"> <!-- Set column 1 to 30% -->
                                        <img class="img-fluid" src="{{ asset('assets/img/kitar_1/merenung2.JPG') }}" alt="Masalah 1" style="width: 50%; height: auto;">
                                    </td>
                                    <td class="align-top" style="width: 70%;"> <!-- Set column 2 to 70% -->
                                        <p class="card-text">Pengecaman corak bagaimana AkalBOT bergerak membolehkan anda memilih lokasi lain untuk menjatuhkan selipar. Bagaimana jika ada lebih daripada satu lokasi selipar pada satu masa?</p>
                                    </td>
                                </tr>
                            </table>



                        </div>
                    </div>
                </div>

                <!-- END MERENUNG -->

                <br>

            </div>
        </div>
    </div>

    <script>
        function showExplanation(image) {
            // Hide all explanation cards
            var explanationCards = document.getElementsByClassName('explanation-card');
            for (var i = 0; i < explanationCards.length; i++) {
                explanationCards[i].style.display = 'none';
            }

            // Show the explanation card corresponding to the clicked image
            var explanationCard = document.getElementById('explanation-' + image);
            if (explanationCard) {
                explanationCard.style.display = 'block';
                // Scroll to the explanation card
                explanationCard.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            var jawapan = document.querySelector('.jawapan');
            var tableContainer = document.getElementById('tableContainer');

            jawapan.addEventListener('click', function() {
                if (tableContainer.style.display === 'none') {
                    tableContainer.style.display = 'block';
                } else {
                    tableContainer.style.display = 'none';
                }
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            var jawapanText = document.querySelector('.jawapan');
            var jawapanImage = document.getElementById('jawapanImage');

            jawapanText.addEventListener('click', function() {
                if (jawapanImage.style.display === 'none') {
                    jawapanImage.style.display = 'block';
                } else {
                    jawapanImage.style.display = 'none';
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const videoIframes = document.querySelectorAll('.video-iframe');

            videoIframes.forEach(function(iframe) {
                iframe.addEventListener('mouseenter', function() {
                    const src = iframe.getAttribute('src');
                    if (src.indexOf('?') > -1) {
                        iframe.setAttribute('src', src + '&autoplay=1');
                    } else {
                        iframe.setAttribute('src', src + '?autoplay=1');
                    }
                });

                iframe.addEventListener('mouseleave', function() {
                    const src = iframe.getAttribute('src');
                    iframe.setAttribute('src', src.replace('&autoplay=1', '').replace('?autoplay=1', ''));
                });
            });
        });
    </script>

</body>
@endsection