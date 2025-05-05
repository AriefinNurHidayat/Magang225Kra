@include('components.header')

    <main>
        <section>
            <div class="page-header min-vh-75 relative" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.2) 10%, rgba(0,0,0,0.7) 90%), url('{{ asset('img/business-meeting-room-high-rise-office-building.jpg') }}')">
            <span class="mask bg-gradient-dark opacity-4"></span>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 text-center mx-auto">
                            <h1 class="text-white font-weight-black pt-3 mt-n5">Pesan Ruangan</h1>
                            <p class="lead text-white mt-3">Pelayanan Pemesanan Ruangan Dinas Komunikasi dan Informatika Kabupaten Karanganyar</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

                <section class="pt-5 pb-5 shadow-lg">
                    <div class="container">
                        <div class="card shadow-lg border rounded-4">
                            <div class="card-header bg-gradient-dark text-white rounded-top-4">
                                <h5 class="mb-0 text-white">Formulir Peminjaman Ruangan</h5>
                            </div>
                            <form action="/" class="p-4 row">
                                <h6 class="fw-bold">Silakan isi dengan sesuai:</h6>
                                @csrf
                                <div class="mb-3">
                                    <label for="tanggal" class="form-label fw-bold">Tanggal Peminjaman</label>
                                    <input type="date" name="tanggal" class="form-control border border-2 shadow-sm px-2" required>
                                </div>

                                <div class="mb-3">
                                    <label for="tanggal" class="form-label fw-bold">Waktu</label>
                                    <input type="time" name="waktu" class="form-control border border-2 shadow-sm px-2" required>
                                </div>

                                <div class="mb-3">
                                    <label for="tanggal" class="form-label fw-bold">Kegiatan</label>
                                    <input type="text" name="kegiatan" class="form-control border border-2 shadow-sm px-2" required>
                                </div>

                                <div class="mb-3">
                                    <label for="tanggal" class="form-label fw-bold">Leading Sector</label>
                                    <input type="text" name="sector" class="form-control border border-2 shadow-sm px-2" required>
                                </div>

                                <div class="mb-3">
                                    <label for="tanggal" class="form-label fw-bold">Petugas</label>
                                    <input type="text" name="petugas" class="form-control border border-2 shadow-sm px-2" required>
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal" class="form-label fw-bold">Tempat</label>
                                    <input type="text" name="tempat" class="form-control border border-2 shadow-sm px-2" required>
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal" class="form-label fw-bold">Keterangan</label>
                                    <textarea name="Keterangan" class="form-control border border-2 shadow-sm px-2" required></textarea>
                                </div>
                                <button type="submit" class="btn bg-gradient-dark mt-2">Kirim</button>
                            </form>
                        </div>
                    </div>
                </section>
                
            </div>
    </main>