
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
        width: 100%; /* Ensure images fill the width of the card */
        max-width: 200px; /* Limit maximum width of the images */
        margin-bottom: 10px; /* Adjust the margin between images */
        text-align: center; /* Center text */
        cursor: pointer; /* Change cursor to pointer for better UX */
    }

    .image-container .image-wrapper img {
        width: 100%; /* Ensure images fill the width of their wrappers */
        height: auto; /* Maintain aspect ratio */
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
        padding-bottom: 180.25%; /* 16:10 aspect ratio */
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
    background-color: #00008B; /* Dark blue color */
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
        explanationCard.scrollIntoView({ behavior: 'smooth', block: 'start' });
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
                                
                               <p>Jom sahut cabaran untuk mengarahkan AkalBOT untuk lebih banyak bergerak dalam misi menjatuhkan 2 set selipar pada 2 lokasi berbeza.  <br>
                                  Anda akan menentukan sendiri corak perjalanan AkalBOT bagi menjatuhkan selipar dengan menyusun papan padang permainan berdasarkan nilai setiap papan. 
                               </p>
                                <img class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_2/masalah.jpg') }}" style="width: 350px; height: auto; display: none;"> <br>

                               <p>Gunakan kreativiti anda untuk menyusun papan tersebut supaya hasil tambah nilai papan yang dilalui AkalBOT mesti melebihi 75 markah. Peraturan permainan ialah:</p>
                                    <ol>
                                        <li>AkalBot perlu menjatuhkan 2 lokasi selipar.</li>
                                        <li>Laluan bermula pada mana-mana papan.</li>
                                        <li>Laluan berakhir pada tapak selipar yang kedua.</li>
                                        <li>Menggunakan sekurang-kurangnya 8 keping papan permainan dan maksimum 12 keping.</li>
                                        <li>AkalBOT akan berhenti sekejap selepas menjatuhkan selipar.</li>
                                        <li>Pastikan selipar yang disusun berjaya dijatuhkan oleh AkalBOT.</li>
                                        <li>AkalBot akan berhenti selepas menjatuhkan selipar pada lokasi yang kedua.</li>
                                        <li>Melibatkan sekurang-kurangnya 3 pergerakan berbeza.</li>
                                    </ol>
                                <p>Jika anda bertanding dengan rakan anda, pemenang adalah yang mendapat markah yang tertinggi iaitu hasil tambah papan yang dilalui AkalBOT dengan tambahan buzzer, LED dan OLED (markah bonus) dalam tempoh yang paling singkat. Semoga berjaya!</p>
                                <!-- <p><strong>Contoh kreativiti :</strong></p>

                                <div id="video-container" class="video-container" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; background: #000;">
                                    <iframe 
                                        class="video-iframe"  
                                        src="https://www.youtube.com/embed/L8S89BCjQvo" 
                                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" 
                                        frameborder="0" 
                                        allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                    </iframe>
                                </div> -->
                                <br>

                                <p>
                                    &#9734; BONUS 1
                                </p>

                                <p>Tambah bunyi dengan menggunakan buzzer apabila sampai ke selipar pertama dan kedua (bonus 5 markah)</p>
                                <p>Penambahan Bunyi Buzzer</p>
                                <img id="jawapanImage" class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_2/bonus1.jpg') }}" alt="Masalah 2" style="width: 250px; height: auto; display: none;"> <br>
                                 <p>Blok Buzzer dalam AkalBLOK</p>
                                 <img id="jawapanImage" class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_2/bonus1_buzzer.png') }}" alt="Masalah 2" style="width: 50%; height: auto; display: none;">

                                <p>
                                    &#9734; BONUS 2
                                </p>

                                <p>Tambah nyalaan LED apabila sampai ke selipar kedua (bonus 5 markah)</p>
                                <p>Penambahan Nyalaan LED</p> <br>
                                <img id="jawapanImage" class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_2/bonus2.jpg') }}" alt="Masalah 2" style="width: 350px; height: auto; display: none;">
                                 <p>Blok LED dalam AkalBLOK</p>
                                 <img id="jawapanImage" class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_2/bonus2_LED.jpg') }}" alt="Masalah 2" style="width: 50%; height: auto; display: none;">
                                
                                <p>
                                    &#9734; BONUS 3
                                </p>

                                <p>Tambah paparan “Berjaya” menggunakan paparan OLED apabila sampai ke selipar kedua (bonus 5 markah)</p>
                                <p>Penambahan Paparan OLED</p> <br>
                                <img id="jawapanImage" class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_2/bonus3.jpg') }}" alt="Masalah 2" style="width: 250px; height: auto; display: none;">
                                 <p>Blok OLED dalam AkalBLOK</p> <br>
                                 <img id="jawapanImage" class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_2/bonus3_OLED.jpg') }}" alt="Masalah 2" style="width: 50%; height: auto; display: none;">

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
                                <p class="card-text text-muted"><strong>Masalah utama</strong> dalam misi tuju selipar kali ini ialah bagaimana untuk menyusun pergerakan AkalBOT supaya berjaya meruntuhkan selipar pada dua lokasi supaya tambah nilai papan yang dilalui AkalBOT adalah melebihi 75 markah. Ada beberapa faktor yang anda boleh fikirkan seperti susunan papan permainan, lokasi selipar dan aliran pergerakan robot. Oleh itu, cuba huraikan masalah ini berdasarkan faktor ini.</p>
                                <br>
                                <p>
                                    <span style="font-size: 24px;">&#128161;</span>
                                    <strong>Fikir:</strong> Mungkin anda perlu susun papan dahulu berdasarkan nilai pada papan, diikuti lokasi selipar dan akhir sekali pergerakan robot.
                                </p>


                            </div>     
                        </div>

                        <!-- end analisis masalah -->

                        <!-- reka bentuk -->
                        <br>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Reka bentuk atur cara</h5>
                                <p class="card-text text-muted">Berdasarkan pergerakan robot, anda sudah boleh membangunkan algoritma bagi menyusun langkah demi langkah. Boleh rujuk semula panduan membangunkan algoritma menggunakan carta alir.  </p>  
                                <p>
                                    <span style="font-size: 24px;">&#128161;</span>
                                    <strong>Fikir:</strong>Apakah langkah yang perlu diubahsuai atau ditambah pada carta alir supaya misi kedua ini berjaya atau anda boleh membangunkan carta alir yang baharu?
                                </p>
                                <img id="jawapanImage" class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_2/rekabentukaturcara.jpg') }}" alt="Masalah 2" style="width: 250px; height: auto; display: none;">

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
                        <div class="card">
                            <div class="card-body">
                        <h5 class="mb-2">Pengekodan</h5>
                       <p>
                       <span style="font-size: 24px;">&#129302;</span>
                        <strong>Lakukan:</strong> Dengan menggunakan AkalBLOK, susun blok untuk menggerakkan AkalBOT supaya AkalBOT bergerak menuju ke dua lokasi selipar berdasarkan urutan carta alir. Blok yang terlibat adalah:
                        </p>
                        <ul>
                            <li>Blok Motor</li>
                            <li>Blok Input/Output</li>
                            <li>Blok Buzzer</li>
                            <li>Blok OLED</li>
                            <li>Blok LED</li>
                        </ul>
                        
                        <p>Misi kali ini memerlukan anda menyusun sendiri blok dalam Akalblok. Contoh yang diberikan ini hanya untuk sebahagian atur cara iaitu apabila AkalBOT sampai ke lokasi selipar yang kedua dengan bunyian buzzer, nyalaan kedua-dua LED dan OLED memaparkan mesej.</p>
                        <img id="jawapanImage" class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_2/lakukan.jpg') }}" alt="Masalah 2" style="width: 50%; height: auto; display: none;">
                             </div>
                         </div>
                    </div>
                


                </div>
            </div>

            <!-- END LAKUKAN -->

            <!-- UJI -->

            <div class="explanation-card" id="explanation-uji">
                <div class="card">
                    <div class="card-body">
                        <h4>3. Menguji</h4>
                        <h5 class="card-subtitle mb-2">Pengujian</h5>
                        <p class="card-text text-muted">Mari uji bagaimana atur cara yang dibangunkan dapat mengerakkan AkalBOT untuk menjatuhkan dua lokasi selipar.  </p>
                          <p>
                            <span style="font-size: 24px;">📋</span>
                            <strong>Uji:</strong> Susun padang permainan supaya sesuai dengan laluan AkalBOT. Kemudian, susun selipar secara menegak pada dua lokasi yang telah anda rancang. 
                         </p>
                         <img class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_2/uji1.jpg') }}" style="width: 20%; height: auto; display: none;"> <br>

                         <p>
                            <span style="font-size: 24px;">📋</span>
                            <strong>Uji:</strong> Dengan menggunakan Editor Arduino, kompil atur cara yang dibangunkan. Rujuk bahagian Kompil Aturcara untuk langkah menguji atur cara.  
                         </p>
                         <p>Letak AkalBot pada padang permainan. Larikan AkalBOT dengan menekan butang ON. Pastikan bateri AkalBOT mencukupi.</p>
                         <img class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_2/uji2.jpg') }}" style="width: 20%; height: auto; display: none;"> <br>

                        <p>Pengujian tidak berjaya? Teruskan usaha 💪</p>
                         <img class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_2/uji3.jpg') }}" style="width: 300px; height: auto; display: none;"> <br>

                        <p>
                            <span style="font-size: 24px;">📋</span>
                            <strong>Uji:</strong> Jika anda tidak berjaya menjatuhkan selipar menggunakan AkalBOT, ubahsuai urutan pergerakan dan nilai pada blok delay. Uji semula sehingga berjaya. 
                         </p>
                         <img class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_2/uji4.jpg') }}" style="width: 250px; height: auto; display: none;"> <br>



                         <p>Mari tonton video rakan yang telah berjaya selepas mengubahsuai atur cara berkali-kali:</p>
                        <div class="video-container" style="width: 100%; height: 100%;">
                            <iframe 
                                class="video-iframe" 
                                width="100%" 
                                height="100%" 
                                src="https://www.youtube.com/watch?v=fa5KzJCz7Ow" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                            </iframe>
                        </div>
                        
                        <br>
                        <p>
                            <span style="font-size: 24px;">📋</span>
                            <strong>Uji:</strong> Jika anda telah berjaya menjatuhkan selipar, tahniah diucapkan.  Anda telah memasukkan arahan utk buzzer, led dan oled? Jika belum, inilah masanya. Semoga berjaya!
                         </p>

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
                                <p>
                                    <span style="font-size: 24px;">&#128064;</span>
                                    <strong>Tenung:</strong> Cuba renungkan bagaimana kita boleh tambah arahan kepada AkalBOT untuk bergerak mengikut corak yang kita setkan.
                                </p>
                                <p>Malah kita boleh cuba pelbagai corak pergerakan yang berbeza atau menyalakan LED pada waktu yang lain atau mengubah mesej dalam OLED.</p>

                                <div style="display: flex; justify-content: center; align-items: center; text-align: center;">
                                    <div style="flex: 1; margin-right: 10px;">
                                        <p>Contoh 1: Susunan Lokasi</p>
                                       <img class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_2/contoh1.jpg') }}" style="width: 250px; height: auto; display: none;"> <br>

                                        
                                    </div>
                                    <div style="flex: 1; margin-left: 10px;">
                                        <p>Contoh 2: Susunan Lokasi</p>
                                        <img class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_2/contoh2.jpg') }}" style="width: 350px; height: auto; display: none;"> <br>

                                    </div>
                                </div>

                                <div>
                                    <br>
                                    <p>
                                        <span style="font-size: 24px;">&#128064;</span>
                                        <strong>Tenung:</strong> Cuba renungkan bagaimana AkalBOT boleh mengeluarkan bunyi.
                                    </p>
                                    <p>Sebenarnya anda boleh menukar bunyi dengan menukar nilai dalam fungsi ini di editor Arduino:</p>
                                    <p><code>tone(buzzer, 5000, 500);</code></p>

                                    <table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 80%; text-align: left;">
                                        <thead style="background-color: #f2f2f2;">
                                            <tr>
                                                <th style="padding: 10px;">Library</th>
                                                <th style="padding: 10px;">Code</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="padding: 10px;">Pembolehubah</td>
                                                <td style="padding: 10px;">
                                                    <span style="color: green;"><code>#define buzzer 9</code></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 10px;">void setup ()</td>
                                                <td style="padding: 10px;">
                                                    <span style="color: blue;"><code>pinMode</span>(buzzer,<br>OUTPUT);</code>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 10px;">void loop ()</td>
                                                <td style="padding: 10px;">
                                                    <span style="color: orange;"><code>tone</span>(buzzer,<br>5000, 500);</code>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>
                                      <span style="font-size: 24px;">&#128064;</span>
                                        <strong>Tenung:</strong> Cuba renungkan bagaimana AkalBOT boleh menyalakan dan menutup LED dengan mengubah nilai HIGH dan LOW untuk fungsi berikut:
                                    </p>
                                    <p><code>digitalWrite(led1, HIGH);</code></p>
                                    <p>
                                        <span style="font-size: 24px;">&#128064;</span>
                                        <strong>Tenung:</strong>Cuba renungkan bagaimana AkalBOT boleh memaparkan mesej. Anda boleh mengubah mesej pada arahan berikut di editor Arduino:
                                    </p>
                                    <p><code>display.println("TUJU SELIPAR!");</code></p>
                                    <img class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_2/tujuSelipar.jpg') }}" style="width: 350px; height: auto; display: none;"> <br>

                                    <p>
                                        <span style="font-size: 24px;">&#128064;</span>
                                        <strong>Tenung:</strong>Bagaimana jika ada tiga lokasi selipar, apa perubahan yang perlu dilakukan? 
                                    </p>
                                    <p>Contoh corak pengerakan untuk tiga lokasi selipar.</p>
                                    <img class="card-img-top mx-auto d-block" src="{{ asset('assets/img/kitar_2/corak.jpg') }}" style="width: 250px; height: auto; display: none;"> <br>

                                    <p>
                                        <span style="font-size: 24px;">&#128064;</span>
                                        <strong>Tenung:</strong>Bagaimana pula jika AkalBOT perlu mengelak objek ketika sedang bergerak untuk menuju selipar? Adakah komponen sensor seperti mata AkalBOT ini boleh digunakan? 
                                    </p>

                                </div>
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
            explanationCard.scrollIntoView({ behavior: 'smooth', block: 'start' });
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