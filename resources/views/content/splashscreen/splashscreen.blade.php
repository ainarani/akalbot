@php
$containerNav = $containerNav ?? 'container-fluid';
$navbarDetached = ($navbarDetached ?? '');

@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/vendor/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/css/core.css')}}">
  <title>Splash Screen</title>
  <style>
    /* Video background section */
    #video-section {
  position: relative;
  width: 100vw; /* Full width of the viewport */
  height: 100vh;
  overflow: hidden;
}
    #video-background {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }
    #navbar {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      padding: 20px;
      box-sizing: border-box;
      color: white;
      z-index: 1;
    }
    #welcome-quote {
      text-align: center;
      font-size: 24px;
      margin-top: 50px;
    }

    /* Game cards section */
    #game-cards {
      padding: 50px 0;
      text-align: center;
    }
    /* .card {
      display: inline-block;
      margin: 0 10px;
      width: calc(33.33% - 0px);
      box-sizing: border-box;
      text-align: left;
    } */
    .card img {
      width: 95%;
      height: 95%;
    }
    .card-container {
    position: absolute;
    bottom: 100px;
    width: 100%;
    display: flex;
    justify-content: center;
}
.navbar-brand {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
    }
    .dropdown-menu-right {
      right: 0 !important;
      left: auto !important;
    }
  </style>
</head>
<body>

  <!-- Video background section -->
  <!--  <section id="video-section"> -->
    <div class="container">

<nav class="layout-navbar {{$containerNav}} navbar navbar-expand-xl {{$navbarDetached}} align-items-center bg-primary" id="layout-navbar">
    <!-- <nav class="navbar navbar-expand-md navbar-light bg-primary"> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-nav flex-fill align-items-center justify-content-center">
        <div class="nav-item">
          <span class="navbar-brand-text fw-bold">AKALBOT</span>
        </div>
      </div>

      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- User -->
        <div class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle">
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="javascript:void(0);">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar avatar-online">
                      <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle">
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <span class="fw-medium d-block">John Doe</span>
                    <small class="text-muted">Admin</small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="javascript:void(0);">
                <i class="bx bx-user me-2"></i>
                <span class="align-middle">My Profile</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="javascript:void(0);">
                <i class='bx bx-cog me-2'></i>
                <span class="align-middle">Settings</span>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="javascript:void(0);">
                <i class='bx bx-power-off me-2'></i>
                <span class="align-middle">Log Out</span>
              </a>
            </li>
          </ul>
        </div>
        <!--/ User -->
      </div>
    </nav>

    <video autoplay loop muted plays-inline class="background-clip">
        <source src="{{asset('assets/img/splashscreen/video.mp4')}}" type="video/mp4">
    </video>

    <div class="card-container">
      <div class="col-sm-4 col-md-2">
        <div class="card h-100">
          <div class="card img">
            <img class="card-img" src="{{asset('assets/img/elements/2.jpg')}}" alt="Card image cap" />
          </div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below...</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2">
        <div class="card h-100">
          <div class="card img">
            <img class="card-img" src="{{asset('assets/img/elements/13.jpg')}}" alt="Card image cap" />
          </div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below..</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-2">
        <div class="card h-100">
          <div class="card img">
            <img class="card-img-top" src="{{asset('assets/img/elements/4.jpg')}}" alt="Card image cap" />
          </div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below...</p>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="card-container">
        <div class="card">
            <img src="game1.jpg" alt="Game 1">
            <h3>Game 1</h3>
            <p>Description of Game 1</p>
        </div>
        <div class="card">
            <img src="game2.jpg" alt="Game 2">
            <h3>Game 2</h3>
            <p>Description of Game 2</p>
        </div>
        <div class="card">
            <img src="game3.jpg" alt="Game 3">
            <h3>Game 3</h3>
            <p>Description of Game 3</p>
        </div>
    </div> -->
</div>
</body>
</html>
