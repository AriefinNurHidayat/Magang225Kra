<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/material-kit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nucleo-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nucleo-svg.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div class="container position-sticky z-index-sticky top-0"><div class="row"><div class="col-12">
    <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 p-2 start-0 end-0 mx-4">
      <div class="container-fluid px-0">
        <a class="navbar-brand font-weight-bolder ms-sm-3 text-sm" href="#" data-placement="bottom">
          {{-- <img src="{{ asset('img/image3.svg') }}" alt=""> --}}
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon mt-2">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </span>
        </button>
        <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
          <ul class="navbar-nav navbar-nav-hover ms-auto">
            <li class="nav-item my-auto ms-3 ms-lg-0 mx-3">
              <a class="nav-link ps-0 d-flex cursor-pointer align-items-center font-weight-semibold" href="/">
                Home
              </a>
            </li>
            <li class="nav-item my-auto ms-3 ms-lg-0 mx-3">
              <a class="nav-link ps-0 d-flex cursor-pointer align-items-center font-weight-semibold" href="/pelayanan">
                Pelayanan
              </a>
            </li>
            <li class="nav-item my-auto ms-3 ms-lg-0 mx-2">
              <a class="nav-link ps-0 d-flex cursor-pointer align-items-center font-weight-semibold" href="/pemesanan">
                Informasi
              </a>
            </li>

            @if(Route::has('login'))
              <li class="nav-item my-auto ms-3 ms-lg-0">
                @auth
                  <div class="dropdown">
                    <div class="btn  bg-gradient-dark fw-semibold mb-0 mt-2 mt-md-0 dropdown-toggle" data-bs-toggle="dropdown" role="button">
                      {{ Auth::user()->name }}
                    </div>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                      <li>
                          <form action="{{ route('logout') }}" method="POST">
                              @csrf
                              <button type="submit" class="dropdown-item">Logout</button>
                          </form>
                      </li>
                  </ul>
                  </div>     
                @else
                  <a href="/login" class="btn  bg-gradient-dark  mb-0 mt-2 mt-md-0">Login</a>
                  <a href="/register" class="btn  bg-gradient-dark  mb-0 mt-2 mt-md-0">Register</a>
                @endauth
              </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    </div></div></div>

  