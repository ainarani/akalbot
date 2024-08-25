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
        <div class="card bg-white shadow-lg rounded-lg">
            <div class="card-body p-6">
                <div class="mb-6">
                    <h5 class="text-lg font-bold text-gray-700 mb-2">Kitar 1: Jom jatuhkan selipar</h5>
                    <ul class="list-disc list-inside text-gray-600">
                        <li>Berfikir</li>
                        <li>Lakukan</li>
                        <li>Uji</li>
                        <li>Merenung</li>
                    </ul>
                </div>

                <!-- Cycle 2 -->
                <div class="mb-6">
                    <h5 class="text-lg font-bold text-gray-700 mb-2">Kitar 2: Jom tuju lebih banyak selipar</h5>
                    <ul class="list-disc list-inside text-gray-600">
                        <li>Berfikir</li>
                        <li>Lakukan</li>
                        <li>Uji</li>
                        <li>Merenung</li>
                    </ul>
                </div>

                <!-- Cycle 3 -->
                <div class="mb-6">
                    <h5 class="text-lg font-bold text-gray-700 mb-2">Kitar 3: Jom elak selipar</h5>
                    <ul class="list-disc list-inside text-gray-600">
                        <li>Berfikir</li>
                        <li>Lakukan</li>
                        <li>Uji</li>
                        <li>Merenung</li>
                    </ul>
                </div>

                <!-- Cycle 4 -->
                <div>
                    <h5 class="text-lg font-bold text-gray-700 mb-2">Kitar 4: Kod rahsia selipar</h5>
                    <ul class="list-disc list-inside text-gray-600">
                        <li>Berfikir</li>
                        <li>Lakukan</li>
                        <li>Uji</li>
                        <li>Merenung</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



</body>

@endsection
