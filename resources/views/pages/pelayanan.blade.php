@include('components.header')

    <main>
        <section>
            <div class="page-header min-vh-75 relative" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.2) 10%, rgba(0,0,0,0.7) 90%), url('{{ asset('img/business-meeting-room-high-rise-office-building.jpg') }}')">
            <span class="mask bg-gradient-dark opacity-4"></span>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 text-center mx-auto">
                            <h1 class="text-white font-weight-black pt-3 mt-n5">Daftar Pelayanan</h1>
                            <p class="lead text-white mt-3">Pelayanan Dinas Komunikasi dan Informatika Kabupaten Karanganyar</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

                <section class="pt-3 pb-4">
                  <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-3 mb-4">
                            <div class="card h-100">
                                <a href="/ruang"><div class="card-body shadow-lg">
                                    <img src="{{ asset('img/business-meeting-room-high-rise-office-building.jpg') }}" alt="Gambar" class="card-img">
                                    <h6 class="mt-4 text-center">Peminjaman Ruangan SIC</h6>
                                </div></a>
                            </div>
                        </div>

                        <div class="col-md-3 mb-4">
                            <div class="card h-100">
                                <a href="/videotron"><div class="card-body shadow-lg">
                                    <img src="{{ asset('img/business-meeting-room-high-rise-office-building.jpg') }}" alt="Gambar" class="card-img">
                                    <h6 class="mt-4 text-center">Peminjaman Videotron</h6>
                                </div></a>
                            </div>
                        </div>

                        <div class="col-md-3 mb-4">
                            <div class="card h-100">
                                <a href="/hosting"><div class="card-body shadow-lg">
                                    <img src="{{ asset('img/business-meeting-room-high-rise-office-building.jpg') }}" alt="Gambar" class="card-img">
                                    <h6 class="mt-4 text-center">Pelayanan Website Hosting</h6>
                                </div></a>
                            </div>
                        </div>

                        <div class="col-md-3 mb-4">
                            <div class="card h-100">
                                <a href="/zoom"><div class="card-body shadow-lg">
                                    <img src="{{ asset('img/business-meeting-room-high-rise-office-building.jpg') }}" alt="Gambar" class="card-img">
                                    <h6 class="mt-4 text-center">Pelayanan Zoom Meeting</h6>
                                </div></a>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
            </div>
    </main>

