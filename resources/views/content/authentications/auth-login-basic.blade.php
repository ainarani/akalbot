@extends('layouts/blankLayout')

@section('title', 'Login Basic - Pages')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center text-center">
              <h4 class="mb-2">Selamat Datang ke Sistem AkalBOT  👋</h4>
          </div>
          
          <div class="app-brand justify-content-center">
            <img src="{{asset('assets/img/logo/smile.png')}}" height="100" alt="View Badge User" data-app-dark-img="logo/smile-dark.png" data-app-light-img="logo/smile.png">
          </div>

          <!-- /Logo -->
          <div class="text-center">
              <p class="mb-4">Log Masuk dan Mulai Pembelanjaran</p>
          </div>

          <form id="formAuthentication" class="mb-3" action="{{url('/')}}" method="GET">
            <div class="mb-3">
              <label for="email" class="form-label">E-mel/Nama Pengguna</label>
              <input type="text" class="form-control" id="email" name="email-username" placeholder="Masukkan e-mel atau nama pengguna" autofocus>
            </div>

            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Kata Laluan</label>
                <a href="{{url('auth/forgot-password-basic')}}">
                  <small>Lupa kata laluan?</small>
                </a>
              </div>

              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>

            <!-- <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me">
                <label class="form-check-label" for="remember-me">
                  Remember Me
                </label>
              </div>
            </div> -->
            
            <div class="mb-3">
              <button class="btn btn-primary d-grid w-100" type="submit">Log Masuk</button>
            </div>
          </form>

          <p class="text-center">
            <span>Pendaftaran baru?</span>
            <a href="{{url('auth/register-basic')}}">
              <span>Klik disini</span>
            </a>
          </p>
        </div>
      </div>
    </div>
    <!-- /Register -->
  </div>
</div>
</div>
@endsection
