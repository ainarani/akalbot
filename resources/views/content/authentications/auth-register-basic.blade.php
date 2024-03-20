@extends('layouts/blankLayout')

@section('title', 'Register Basic - Pages')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection


@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register Card -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <img src="{{asset('assets/img/logo/smile.png')}}" height="100" alt="View Badge User" data-app-dark-img="logo/smile-dark.png" data-app-light-img="logo/smile.png">
          </div>

          <!-- /Logo -->
          <h4 class="mb-2">Pembelajaran bermula 🚀</h4>
          <p class="mb-4">Sila isi maklumat di bawah.</p>

          <!-- <form id="formAuthentication" class="mb-3" action="{{url('/')}}" method="GET">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" autofocus>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
            </div>
            <div class="mb-3 form-password-toggle">
              <label class="form-label" for="password">Password</label>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div> -->

            <!-- form -->
              <div class="col-xl">
    
              <!-- <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Basic with Icons</h5>
                <small class="text-muted float-end">Merged input group</small>
              </div> -->
              <div class>
                <form>
                  <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Nama Penuh</label>
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                      <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Nama Pengguna</label>
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                      <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="john" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-email">Email</label>
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                      <input type="text" id="basic-icon-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-icon-default-email2" />
                      <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                    </div>
                    <div class="form-text"> You can use letters, numbers & periods </div>
                  </div>
                  <div class="mb-3">
                    <label for="defaultSelect" class="form-label">Peranan</label>
                    <select id="defaultSelect" class="form-select">
                      <option>Sila Pilih</option>
                      <option value="1">Pelajar</option>
                      <option value="2">Guru</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="defaultSelect" class="form-label">Jenis Organisasi</label>
                    <select id="defaultSelect" class="form-select">
                      <option>Sila Pilih</option>
                      <option value="1">Sekolah Rendah</option>
                      <option value="2">Sekolah Menengah</option>
                      <option value="3">Universiti</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-phone">Nama Organisasi </label>
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                      <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="Universiti Kebangsaan Malaysia" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" />
                    </div>
                  </div>
                  <!-- <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-message">Message</label>
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                      <textarea id="basic-icon-default-message" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
                    </div>
                  </div> -->
                  <div class="mb-3 form-password-toggle">
                    <label class="form-label" for="password">Kata Laluan</label>
                    <div class="input-group input-group-merge">
                      <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                      <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                  </div>
                  <div class="mb-3 form-password-toggle">
                    <label class="form-label" for="password">Pengesahan Kata Laluan</label>
                    <div class="input-group input-group-merge">
                      <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                      <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                  </div>
                </form>
              </div>
            </div>
 

            <!-- <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms">
                <label class="form-check-label" for="terms-conditions">
                  I agree to
                  <a href="javascript:void(0);">privacy policy & terms</a>
                </label>
              </div>
            </div> -->
           
             <div class="mb-3">
              <button class="btn btn-primary d-grid w-100" type="submit">Daftar</button>
            </div>
            
          </form>

          <p class="text-center">
            <br>
            <span>Sudah mempunyai akaun?</span>
            <a href="{{url('auth/login-basic')}}">
              <span>Log masuk</span>
            </a>
          </p>
        </div>
      </div>
      <!-- Register Card -->
    </div>
  </div>
</div>
@endsection
