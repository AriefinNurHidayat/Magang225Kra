@include('components.header')

    <main>
        <section>
            <div class="page-header min-vh-75 relative" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.2) 10%, rgba(0,0,0,0.7) 90%), url('{{ asset('img/business-meeting-room-high-rise-office-building.jpg') }}')">
            <span class="mask bg-gradient-dark opacity-4"></span>
            <div class="container">
                <div class="row">
                <div class="col-lg-10 text-center mx-auto">
                    <h1 class="text-white font-weight-black pt-3 mt-n5">Peminjaman Ruangan SIC dan Videotron</h1>
                    <p class="lead text-white mt-3">Pelayanan Peminjaman Ruangan SIC Dan Videotron Dinas Komunikasi dan Informatika Kabupaten Karanganyar</p>
                </div>
                </div>
            </div>
            </div>
        </section>
    </main>

    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

        <section class="pt-3 pb-4">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 mx-auto py-3">
                <div class="row">
                  <div class="col-md-4 position-relative">
                    <div class="p-3 text-center">
                      <h1 class="text-gradient text-dark"><span id="state1" countTo="70">0</h1>
                      <h5 class="mt-3">Total Ruangan</h5>
                    </div>
                    <hr class="vertical dark">
                  </div>
                  <div class="col-md-4 position-relative">
                    <div class="p-3 text-center">
                      <h1 class="text-gradient text-dark"> <span id="state2" countTo="15">0</h1>
                      <h5 class="mt-3">Total Videotron</h5>
                    </div>
                    <hr class="vertical dark">
                  </div>
                  <div class="col-md-4 position-relative">
                    <div class="p-3 text-center">
                      <h1 class="text-gradient text-dark" id="state3" countTo="4">0</h1>
                      <h5 class="mt-3">Total Permohonan</h5>
                    </div>
                    <hr class="vertical dark">
                  </div>
              </div>
            </div>
          </div>
        </div>
        </section>

        <H5 class="text-center">Layanan Kami</H5>

        <section class="pt-3 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card text-center h-100">
                            <div class="card-body shadow-lg">
                              <img src="{{ asset('img/business-meeting-room-high-rise-office-building.jpg') }}" alt="Gambar" class="card-img">
                              <h5 class="mt-4">Pemesanan Ruangan</h5>
                              <p class="card-text">Apabila Tersedia</p>
                              <a href="/ruang"><button class="btn bg-gradient-dark">Reservasi disini</button></a>
                            </div>
                        </div>                          
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card text-center h-100">
                            <div class="card-body shadow-lg">
                              <img src="{{ asset('img/business-meeting-room-high-rise-office-building.jpg') }}" alt="Gambar" class="card-img">
                              <h5 class="mt-4">Pemesanan Videotron</h5>
                              <p class="card-text">Apabila Tersedia</p>
                              <a href="#"><button class="btn bg-gradient-dark">Reservasi disini</button></a>
                            </div>
                        </div>                          
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card text-center h-100">
                            <div class="card-body shadow-lg">
                              <img src="{{ asset('img/business-meeting-room-high-rise-office-building.jpg') }}" alt="Gambar" class="card-img">
                              <h5 class="mt-4">Permohonan</h5>
                              <p class="card-text"></p>
                            </div>
                        </div>                          
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-3 pb-4">
          <div class="container">
            <div class="text-center">A</div>
          </div>
        </section>
    </div>