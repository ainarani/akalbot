@php
$isNavbar = false;
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Without navbar - Layouts')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h1 class="m-0">2.4 Uji Minda</h1>
                    <small class="text-muted">AkalBOT merupakan robot bertayar dua yang bersedia menerima arahan anda untuk bergerak. Otak yang mengawal pergerakan AkalBOT ialah Arduino Nano</small>
                </div>
            </div>
            <div class="card">
                <div class="card-body">

                        <div class="form-group mb-4">
                            <label for="name">1. AkalBOT bergerak berdasarkan urutan arahan berkod iaitu atur cara yang telah dimuat naik dan diproses oleh otak AkalBOT. Adakah anda tahu atur cara yang telah diproses oleh AkalBOT?</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="" name="" value="ya">
                                <label class="form-check-label" for="ya">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="" name="" value="tidak">
                                <label class="form-check-label" for="tidak">Tidak</label>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label for="email">2. Jika YA, tuliskan atur cara tersebut di bawah:</label>
                            <input type="text" class="form-control" id="" name="">
                        </div>

                        <div class="form-group mb-4">
                            <label for="age">3. Jika TIDAK, adakah anda berminat untuk mengetahui atur cara untuk mengerakkan AkalBOT?</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="" name="" value="ya">
                                <label class="form-check-label" for="ya">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="" name="" value="tidak">
                                <label class="form-check-label" for="tidak">Tidak</label>
                            </div>
                        </div>

                        <!-- <div class="form-group mb-4">
                            <label for="gender">Your Gender:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="male" name="gender" value="male">
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="female" name="gender" value="female">
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                        </div> -->
                        <h7>Jika berminat, ayuh teruskan langkah ke Aktiviti 2 untuk mengetahui cara mengerakkan AkalBOT menggunakan atur cara.
                            Jika anda tidak berminat, ayuh teruskan juga langkah anda ke Aktiviti 2 , supaya anda tahu yang mengerakkan robot menggunakan atur cara adalah perkara yang menarik untuk dilakukan!
                        </h7> <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
