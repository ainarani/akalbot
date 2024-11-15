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
        padding-bottom: 180.25%;
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

                                    <p>Jom sahut cabaran untuk mengarahkan AkalBOT dalam misi untuk mengesan selipar musuh pada lokasi yang pertama untuk mengeluarkan amaran dan kemudian bergerak menuju ke lokasi kedua untuk mengesan dan menjatuhkan selipar. </p>
                                    <img id="jawapanImage" class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_3/masalah1.jpg') }}" alt="Masalah 2" style="width: 250px; height: auto; display: none;">

                                    <p>Anda perlu menggunakan sensor ultrasonik untuk mengesan kedudukan selipar. Anda akan menentukan sendiri corak perjalanan AkalBOT bagi mengesan dan menjatuhkan selipar dengan menyusun papan padang permainan berdasarkan nilai setiap papan. </p>
                                    <img id="jawapanImage" class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_3/masalah2.jpg') }}" alt="Masalah 2" style="width: 250px; height: auto; display: none;">

                                    <p>
                                        Gunakan kreativiti anda untuk menyusun papan tersebut supaya hasil tambah nilai papan yang dilalui AkalBOT mesti melebihi 75 markah. Peraturan permainan ialah:
                                    </p>
                                    <ol>
                                        <li>AkalBot perlu mengesan 2 lokasi selipar.</li>
                                        <li>Laluan bermula pada mana-mana papan.</li>
                                        <li>Laluan berakhir pada tapak selipar yang kedua.</li>
                                        <li>Menggunakan sekurang-kurangnya 8 keping papan permainan dan maksimum 15 keping.</li>
                                        <li>AkalBOT akan mengesan selipar musuh pada lokasi yang pertama untuk memaparkan amaran menggunakan OLED dan bunyian buzzer.</li>
                                        <li>AkalBOT akan mengelak selipar musuh pada lokasi pertama dan meneruskan perjalanan ke lokasi kedua.</li>
                                        <li>Pada lokasi kedua, AkalBOT perlu mengesan kedudukan selipar untuk menjatuhkan selipar.</li>
                                        <li>AkalBot akan berhenti selepas menjatuhkan selipar pada lokasi yang kedua dengan paparan OLED berubah menjadi berjaya.</li>
                                        <li>Melibatkan sekurang-kurangnya 4 pergerakan berbeza.</li>
                                    </ol>
                                    <p>
                                        Jika anda bertanding dengan rakan anda, pemenang adalah yang mendapat markah yang tertinggi iaitu hasil tambah papan yang dilalui AkalBOT dengan tambahan LED (markah bonus) dalam tempoh yang paling singkat. Semoga berjaya!
                                    </p>
                                    <p>Contoh pergerakan yang tersasar! Sepatutnya akalBot tidak melanggar selipar musuh pada lokasi pertama, hanya memberi amaran sahaja dan kemudian mengundur untuk menuju ke lokasi kedua.</p>
                                    <img id="jawapanImage" class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_3/masalah3.jpg') }}" alt="Masalah 2" style="width: 250px; height: auto; display: none;">
                                    <p>
                                        &#9734; BONUS
                                    </p>

                                    <p>Tambah nyalaan LED apabila sampai ke selipar pertama (bonus 5 markah)</p>
                                    <p>Penambahan Nyalaan LED</p>
                                    <img id="jawapanImage" class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_3/bonus.jpg') }}" alt="Masalah 2" style="width: 250px; height: auto; display: none;"> <br>
                                    <p>Blok LED dalam AkalBLOK</p>
                                    <img id="jawapanImage" class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_3/bonus_LED.jpg') }}" alt="Masalah 2" style="width: 50%; height: auto; display: none;">


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
                                    <p class="card-text text-muted"><strong>Masalah utama</strong> dalam misi tuju selipar kali ini ialah bagaimana untuk menyusun pergerakan AkalBOT supaya berjaya mengesan selipar pada dua lokasi supaya tambah nilai papan yang dilalui AkalBOT adalah melebihi 75 markah. Untuk masalah ini, anda perlu membantu akalBOT membuat keputusan jika sensor ultrasonik mengesan selipar pada jarak tertentu. Oleh itu, cuba huraikan masalah ini berdasarkan pertambahan penggunaan sensor ini. </p>
                                    <br>
                                    <p>
                                        <span style="font-size: 24px;">&#128161;</span>
                                        <strong>Fikir:</strong> Mungkin anda perlu tahu dahulu bagaimana sensor ultrasonik berfungsi dengan merujuk panduan berkaitan sensor ultrasonik. Secara asasnya, sensor ini dapat mengesan jarak kedudukan semasa akalBOT dengan objek dihadapannya. Bagaimana jarak ini boleh digunakan untuk membuat keputusan? Masalah ini boleh dihuraikan kepada dua keadaan.
                                    </p>

                                    <div class="d-grid d-sm-flex p-3 border">
                                        <img src="{{asset('assets/img/kitar_3/keadaan1.jpg')}}" alt="collapse-image" height="250" class="me-4 mb-sm-0 mb-2">
                                        <span>
                                            <p>Keadaan Pertama:</p>
                                            <ul>
                                                <li>Jarak di antara selipar dan lokasi selipar adalah melebihi 30 cm.</li>
                                                <li>Pada keadaan ini, AkalBOT akan meneruskan misi dengan terus bergerak.</li>
                                            </ul>
                                        </span>
                                    </div>

                                    <div class="d-grid d-sm-flex p-3 border">
                                        <span>
                                            <p>Keadaan Kedua:</p>
                                            <ul>
                                                <li>Jarak di antara selipar dan lokasi selipar adalah kurang 30 cm. </li>
                                                <li>Pada keadaan ini, akalBOT perlu menetapkan apakah tindakan untuk pengesanan kali pertama dan kedua. </li>
                                            </ul>
                                        </span>
                                    </div>

                                    <br>

                                    <div class="d-grid d-sm-flex p-3 border">
                                        <img src="{{asset('assets/img/kitar_3/pengesanan1.jpg')}}" alt="collapse-image" height="250" class="me-4 mb-sm-0 mb-2">
                                        <span>
                                            Pengesanan selipar kali pertama iaitu pada lokasi pertama, perlu memaparkan mesej amaran pada OLED dan bunyikan buzzer tapi tidak perlu menjatuhkan selipar. Hanya perlu elak.
                                        </span>
                                    </div>

                                    <div class="d-grid d-sm-flex p-3 border">
                                        <span>
                                            Pengesanan selipar kali kedua iaitu pada lokasi kedua, perlu melanggar selipar dan berhenti selepas berjaya menjatuhkannya. Buzzer turut dibunyikan bersama paparan mesej berjaya pada OLED.
                                        </span>
                                        <img src="{{asset('assets/img/kitar_3/pengesanan2.jpg')}}" alt="collapse-image" height="250" class="me-4 mb-sm-0 mb-2">
                                    </div>

                                </div>
                            </div>

                            <!-- end analisis masalah -->

                            <!-- reka bentuk -->
                            <!-- <br>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Reka bentuk atur cara</h5>
                                <p class="card-text text-muted">Jom bangunkan algoritma bagi menyusun langkah demi langkah. Boleh rujuk semula panduan membangunkan algoritma menggunakan carta alir.  </p>  
                                
                                <div class="d-grid d-sm-flex p-3 border">
                                    <span>
                                        <p>
                                        <span style="font-size: 24px;">&#128161;</span>
                                        <strong>Fikir : </strong>Carta alir dibawah adalah untuk AkalBOT membuat keputusan apabila jarak objek yang terima daripada sensor adalah kurang 30. Oleh kerana melibatkan keputusan, komponen carta alir bebentuk keputusan digunakan.
                                        </p>                                    
                                    </span>
                                    <img src="{{asset('assets/img/elements/2.jpg')}}" alt="collapse-image" height="125" class="me-4 mb-sm-0 mb-2">
                                </div>
                              
                            </div>
                        </div> -->
                            <!-- end reka bentuk -->

                        </div>
                    </div>
                </div>

                <!-- LAKUKAN -->

                <div class="explanation-card" id="explanation-lakukan">
                    <div class="">
                        <div class="">
                            <h4>2. Lakukan</h4>
                            <h5 class="mb-2">Pengekodan</h5>
                            <p>
                                <span style="font-size: 24px;">&#129302;</span>
                                <strong>Lakukan:</strong>Dengan menggunakan AkalBLOK, susun blok untuk mengerakkan AkalBOT supaya AkalBOT bergerak menuju ke dua lokasi selipar berdasarkan urutan carta alir. Blok yang terlibat adalah:
                            </p>
                            <ul>
                                <li>Blok Sensor Ultrasonik</li>
                                <li>Blok Motor</li>
                                <li>Blok Input/Output</li>
                                <li>Blok Buzzer</li>
                                <li>Blok OLED</li>
                                <li>Blok LED</li>
                            </ul>

                            <p>Misi kali ini memerlukan anda menghasilkan satu aturcara baharu atau mengedit aturcara yang dihasilkan melalui akalBLOK. Atur cara yang dihasilkan menggunakan akalblok ini adalah untuk carta alir pada seksyen sebelum ini. Aturcara ini perlu ditambah baik supaya misi ketiga dicapai.</p>
                            <img id="jawapanImage" class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_3/lakukan.jpg') }}" alt="Masalah 2" style="width: 350px; height: auto; display: none;">

                        </div>
                        <p>
                            <span style="font-size: 24px;">&#129302;</span>
                            <strong>Bimbingan:</strong>Anda boleh bertindak untuk mendapatkan maklumat lanjut berkaitan atur cara yang terhasil menggunakan chatbot AI seperti chatGPT (https://chat.openai.com/). Mari kita terokai dunia pembelajaran interaktif dengan bertanya soalan menggunakan 2 topi berbeza: sebagai pelajar dan sebagai guru. Terokai lebih lanjut dengan pelbagai soalan yang anda karang sendiri sehingga berjaya memahami kod tersebut dan dapat tambah baik kod sehingga misi kali ini berjaya.
                        </p>
                        <p>Sebagai pelajar: “Saya pelajar sekolah menengah, bantu saya untuk memahami kod ini:”
                            Anda perlu salin dan tampal (copy & paste) kod yang terhasil dalam akalBLOK dalam chatGPT
                        </p>
                        <img id="jawapanImage" class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_3/chatGPT1.jpg') }}" alt="Masalah 2" style="width: 350px; height: auto; display: none;"> <br>
                        <p>Sebagai guru: “Sebagai seorang guru di Malaysia, terangkan kod ini supaya pelajar faham konsep if yang digunakan”

                            Anda perlu salin dan tampal (copy & paste) kod yang terhasil dalam akalBLOK dalam chatGPT
                        </p>
                        <img id="jawapanImage" class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_3/chatGPT2.jpg') }}" alt="Masalah 2" style="width: 350px; height: auto; display: none;">
                        <br>
                        <p>Jom tonton video menggunakan chatGPT</p>
                        <div class="video-container" style="width: 100%; height: 100%;">
                            <iframe
                                class="video-iframe"
                                width="100%"
                                height="100%"
                                src=""
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </div>
                        <br>
                    </div>
                </div>

                <!-- END LAKUKAN -->

                <!-- UJI -->

                <div class="explanation-card" id="explanation-uji">
                    <div class="card">
                        <div class="card-body">
                            <h4>3. Menguji</h4>
                            <h5 class="card-subtitle mb-2">Pengujian</h5>
                            <p class="card-text text-muted">Mari uji bagaimana atur cara yang dibangunkan dapat mengerakkan AkalBOT untuk mengesan selipar musuh pada lokasi yang pertama untuk mengeluarkan amaran dan kemudian bergerak menuju ke lokasi kedua untuk mengesan dan menjatuhkan selipar. </p>

                            <p>
                                <span style="font-size: 24px;">📋</span>
                                <strong>Uji:</strong> Susun padang permainan supaya sesuai dengan laluan AkalBOT pada misi ketiga ini. Kemudian, susun selipar secara menegak pada dua lokasi yang telah anda rancang.
                            </p>

                            <p>Contoh susunan pertama iaitu selipar boleh berada diluar padang permainan kerana Akalbot hanya perlu mengelak untuk lokasi pertama</p>

                            <!-- Centered Image 1 -->
                            <div class="text-center">
                                <img src="{{ asset('assets/img/kitar_3/uji1.jpg') }}" class="img-fluid" alt="AkalBOT" style="width: 40%; height: auto;">
                            </div>

                            <p>Contoh susunan kedua iaitu kedua-dua lokasi selipar di atas padang permainan. </p>

                            <!-- Centered Image 2 -->
                            <div class="text-center">
                                <img src="{{ asset('assets/img/kitar_3/uji2.jpg') }}" class="img-fluid" alt="AkalBOT" style="width: 30%; height: auto;">
                            </div>

                            <p>
                                <span style="font-size: 24px;">📋</span>
                                <strong>Uji:</strong> Dengan menggunakan Editor Arduino, kompil atur cara yang dibangunkan. Rujuk bahagian Kompil Aturcara untuk langkah menguji atur cara.
                            </p>

                            <p>Letak AkalBot pada padang permainan. Larikan AkalBOT dengan menekan butang ON. Pastikan bateri AkalBOT mencukupi</p>

                            <!-- Centered Image 3 -->
                            <div class="text-center">
                                <img src="{{ asset('assets/img/kitar_3/uji3.jpg') }}" class="img-fluid" alt="AkalBOT" style="width: 30%; height: auto;">
                            </div>

                            <p>
                                <span style="font-size: 24px;">📋</span>
                                <strong>Uji:</strong> Perhatikan pergerakan Akalbot. Adakah Akalbot berjaya mengelak lokasi selipar yang pertama dan tapi berjaya menjatuhkan selipar yang kedua?
                            </p>

                            <div class="d-grid d-sm-flex p-3 border">
                                <span>
                                    Jika terlalu awal Akalbot mengelak selipar, mungkin jarak dalam menentukan keputusan dikurangkan.
                                </span>
                            </div>

                            <div class="d-grid d-sm-flex p-3 border">
                                <span>
                                    Jika Akalbot berpusing-pusing seperti bukan yang dirancang, maka nilai delay belok ke kiri dikurangkan.
                                </span>
                            </div>

                            <br>

                            <div class="d-grid d-sm-flex p-3 border">
                                <span>
                                    <p>
                                        Akalbot boleh mengelak dan menjatuhkan selipar pada lokasi yang sama? Perlu tambah baik arahan kod selepas pengesanan selipar pertama!
                                    </p>
                                </span>
                                <img src="{{asset('assets/img/kitar_3/uji4.jpg')}}" alt="collapse-image" class="me-4 mb-sm-0 mb-2" style="width: 20%; height: auto;">
                            </div>

                            <br>
                            <p>Anda boleh menggunakan chatbot AI untuk mendapatkan pandangan bagi memperbaiki kod. Anda boleh bagi arahan seperti berikut untuk berkomunikasi dengan AI:
                                <br>
                                Saya pelajar sekolah menengah dan sedang memperbaiki kod untuk robot yang menggunakan arduino. [nyatakan masalah kod anda di sini. Contohnya: Robot ini tidak berjaya mengelak selipar pada lokasi pertama]. Tunjuk pada bahagian mana yang perlu ditambah baik dan nyatakan sebabnya.
                            </p>

                            <p>Mari tonton video robot yang berjaya mengelak selipar pada lokasi pertama dan menjatuhkan selipar pada lokasi kedua.</p>

                            <div class="video-container" style="width: 100%; height: 100%;">
                                <iframe
                                    class="video-iframe"
                                    width="100%"
                                    height="100%"
                                    src=""
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>

                            <br>
                            <p>⭐ Jika anda telah berjaya menjatuhkan selipar, tahniah diucapkan !!!!!</p>
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
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-grid d-sm-flex p-3 border">
                                        <span>
                                            <p>
                                                <span style="font-size: 24px;">&#128064;</span>
                                                <strong>Tenung : </strong>Cuba renungkan bagaimana Akalbot boleh membuat keputusan sama ada untuk mengelak atau melanggar selipar apabila ada objek dikesan oleh sensor ultrasonik. Keputusan dapat dibuat apabila kita mengarahkan Akalbot untuk bertindak berdasarkan peraturan iaitu:
                                                JIKA jarak antara objek dan robot kurang daripada 30 cm, maka robot akan berhenti.
                                            </p>
                                        </span>
                                        <img src="{{asset('assets/img/kitar_3/renung.jpg')}}" alt="collapse-image" height=300 class="me-4 mb-sm-0 mb-2">
                                    </div>
                                    <br>
                                    <p>
                                        <span style="font-size: 24px;">&#128064;</span>
                                        <strong>Tenung : </strong>Cuba renungkan bagaimana AkalBOT boleh mengesan dan mengelak objek menggunakan sensor ultrasonik?
                                        Sebenarnya anda boleh menukar jarak antara objek dengan pengesan dengan menukar nilai dalam pernyataan if ini: <br> <br>
                                        if (DM < 60 && DM> 30) <br> <br>
                                            Lihat bagaimana nilai DM ini perolehi daripada fungsi berikut: <br> <br>
                                            DM = checkdistance(); <br> <br>

                                    </p>

                                    <table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 80%; text-align: left;">
                                        <thead style="background-color: #f2f2f2;">
                                            <tr>
                                                <th style="padding: 10px;">Library</th>
                                                <th style="padding: 10px;">Code</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="border: 1px solid black;">
                                                <td style="padding: 10px;">Pemboleh Ubah</td>
                                                <td style="padding: 10px;">
                                                    <span><code>
                                                            const int TriggerPin = 2;<br>
                                                            const int EchoPin = 4;<br>
                                                            long DM = 0;<br>
                                                        </code></span>
                                                </td>
                                            </tr>
                                            <tr style="border: 1px solid black;">
                                                <td style="padding: 10px;">void setup ()</td>
                                                <td style="padding: 10px;">
                                                    <span><code>
                                                            //setup untuk Ultrasonik<br>
                                                            pinMode(TriggerPin, OUTPUT);<br>
                                                            pinMode(EchoPin, INPUT);
                                                        </code></span>
                                                </td>
                                            </tr>
                                            <tr style="border: 1px solid black;">
                                                <td style="padding: 10px;">void loop ()</td>
                                                <td style="padding: 10px;">
                                                    <span><code>
                                                            DM = checkdistance();<br>
                                                            if (DM < 60 && DM> 30) {<br>
                                                                Serial.println("JAGA!");<br>
                                                                Serial.println(DM);<br>
                                                                } else {<br>
                                                                Serial.println("Misi mencari lokasi diteruskan");<br>
                                                                Serial.println(DM);<br>
                                                                }
                                                        </code></span>
                                                </td>
                                            </tr>
                                            <tr style="border: 1px solid black;">
                                                <td style="padding: 10px;">Fungsi</td>
                                                <td style="padding: 10px;">
                                                    <span><code>
                                                            float checkdistance() {<br>
                                                            digitalWrite(2, LOW);<br>
                                                            delayMicroseconds(2);<br>
                                                            digitalWrite(2, HIGH);<br>
                                                            delayMicroseconds(10);<br>
                                                            digitalWrite(2, LOW);<br>
                                                            float distance = pulseIn(4, HIGH) / 58.00;<br>
                                                            delay(10);<br>
                                                            return distance;<br>
                                                            }
                                                        </code></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>



                                    <p>
                                        <span style="font-size: 24px;">&#128064;</span>
                                        <strong>Tenung : </strong>Bagaimana pula jika AkalBOT perlu mengelak objek ketika sedang bergerak untuk menuju selipar menggunakan sensor lain iaitu infrared sensor (IR)? Apakah perbezaan IR sensor ini dengan ulrasonik sensor?
                                    </p>

                                    <img id="jawapanImage" class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_3/sensor.jpg') }}" alt="Masalah 2" style="width: 250px; height: auto; display: none;">

                                </div>
                            </div>
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
    </script>

</body>
@endsection