@extends('components.adminheader')
@section('title', 'Dashboard Ruang SIC')

@section('content')

<h4 class="text-center pb-4 mt-6">Selamat Datang Di Dashboard Admin Pelayanan Peminjaman Ruang SIC dan Videotron</h4>

<section class="pt-3 pb-4" id="count-stats">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 mx-auto py-3">
          <div class="row">
            <div class="col-md-3 position-relative">
                <div class="p-3 text-center">
                    <h1 class="text-gradient text-dark mt-4">{{ $ruanganBelum }}</h1>
                    <h5 class="text-center">Reservasi Ruangan yang belum terlaksanakan</h5>
                </div>
                <hr class="vertical dark">
                </div>
                <div class="col-md-3 position-relative">
                    <div class="p-3 text-center">
                    <h1 class="text-gradient text-dark mt-4">{{ $videotronBelum }}</h1>
                    <h5>Reservasi Videotron yang belum ditampilkan</h5>
                    </div>
                    <hr class="vertical dark">
                </div>
                <div class="col-md-3 position-relative">
                    <div class="p-3 text-center">
                    <h1 class="text-gradient text-dark mt-4"><span id="state1" countTo="70">0</span>+</h1>
                    <h5>Reservasi Website Hosting yang belum dipublikasikan</h5>
                    </div>
                    <hr class="vertical dark">
                </div>
                <div class="col-md-3 position-relative">
                    <div class="p-3 text-center">
                    <h1 class="text-gradient text-dark mt-4">{{ $zoomBelum }}</h1>
                    <h5>Reservasi Zoom Meeting yang belum terlaksanakan</h5>
                    </div>
                    <hr class="vertical dark">
                </div>
            </div>
        </div>  
    </div>
</div>
</section>



<div>
    <section class="pt-3 pb-4">
        <div class="container">
            <div class="row">
                <!-- Pemesanan Ruangan -->
                <div class="col-md-6 mb-4 mt-4">
                    <div class="card text-center h-80">
                        <div class="card-body shadow-lg">
                            <img src="{{ asset('img/business-meeting-room-high-rise-office-building.jpg') }}" alt="Pemesanan Ruangan" class="card-img">
                            <h5 class="mt-4">Pemesanan Ruangan</h5>
                            <a href="{{ route('adminsic') }}">
                                <button class="btn bg-gradient-dark">Check Reservasi disini</button>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Pemesanan Videotron -->
                <div class="col-md-6 mb-4 mt-4">
                    <div class="card text-center h-100">
                        <div class="card-body shadow-lg">
                            <img src="{{ asset('img/business-meeting-room-high-rise-office-building.jpg') }}" alt="Pemesanan Videotron" class="card-img">
                            <h5 class="mt-4">Pemesanan Videotron</h5>
                            <a href="{{ route('videotron') }}">
                                <button class="btn bg-gradient-dark">Check Reservasi Disini</button>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Tambahan Layanan -->
                <div class="col-md-6 mb-4 mt-4">
                    <div class="card text-center h-100">
                        <div class="card-body shadow-lg">
                            <img src="{{ asset('img/business-meeting-room-high-rise-office-building.jpg') }}" alt="Pemesanan Videotron" class="card-img">
                            <h5 class="mt-4">Pemesanan Videotron</h5>
                            <a href="{{ route('videotron') }}">
                                <button class="btn bg-gradient-dark">Check Reservasi Disini</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4 mt-4">
                    <div class="card text-center h-100">
                        <div class="card-body shadow-lg">
                            <img src="{{ asset('img/business-meeting-room-high-rise-office-building.jpg') }}" alt="Pemesanan Videotron" class="card-img">
                            <h5 class="mt-4">Pemesanan Videotron</h5>
                            <a href="{{ route('videotron') }}">
                                <button class="btn bg-gradient-dark">Check Reservasi Disini</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
