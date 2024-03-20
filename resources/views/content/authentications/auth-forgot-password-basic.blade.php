@extends('layouts/blankLayout')

@section('title', 'Forgot Password Basic - Pages')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner py-4">

      <!-- Forgot Password -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <img src="{{asset('assets/img/logo/smile.png')}}" height="100" alt="View Badge User" data-app-dark-img="logo/smile-dark.png" data-app-light-img="logo/smile.png">
          </div>
          <!-- /Logo -->
          <h4 class="mb-2">Lupa kata laluan? 🔒</h4>
          <p class="mb-4">Masukkan e-mel dan arahan akan dihantar untuk set semula kata laluan anda.</p>
          <form id="formAuthentication" class="mb-3" action="{{url('/')}}" method="GET">
            <div class="mb-3">
              <label for="email" class="form-label">E-mel</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan e-mel" autofocus>
            </div>
            <button class="btn btn-primary d-grid w-100">Hantar</button>
          </form>
          <div class="text-center">
            <a href="{{url('auth/login-basic')}}" class="d-flex align-items-center justify-content-center">
              <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
              Kembali ke log masuk
            </a>
          </div>
        </div>
      </div>
      <!-- /Forgot Password -->
    </div>
  </div>
</div>
@endsection
