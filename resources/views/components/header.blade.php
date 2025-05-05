<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css', 'resources/css/material-kit.css', 'resources/css/nucleo-icons.css', 'resources/css/nucleo-svg.css'])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
      <!-- Navbar -->
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
              <a class="nav-link ps-0 d-flex cursor-pointer align-items-center font-weight-semibold" href="/home">
                Home
              </a>
            </li>
            <li class="nav-item my-auto ms-3 ms-lg-0 mx-3">
              <a class="nav-link ps-0 d-flex cursor-pointer align-items-center font-weight-semibold ">
                Pemesanan
              </a>
            </li>
            <li class="nav-item my-auto ms-3 ms-lg-0 mx-3">
              <a class="nav-link ps-0 d-flex cursor-pointer align-items-center font-weight-semibold" href="/pemesanan">
                Peminjaman
              </a>
            </li>
            <li class="nav-item my-auto ms-3 ms-lg-0">
              <a href="#" class="btn  bg-gradient-dark  mb-0 mt-2 mt-md-0">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    </div></div></div>