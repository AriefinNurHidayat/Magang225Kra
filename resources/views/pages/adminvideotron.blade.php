@extends('components.adminheader')
@section('title', 'Dashboard Videotron')

@section('content')
    <h3 class="mt-4 pb-4">Peminjaman Videotron</h3>
    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple" class="">
                <thead>
                    <tr>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>waktumulai</th>
                        <th>waktuselesai</th>
                        <th>nama acara</th>
                        <th>link video</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
<tr>
    <td>{{ $item->tanggal_mulai }}</td>
    <td>{{ $item->tanggal_selesai }}</td>
    <td>{{ $item->waktumulai }}</td>
    <td>{{ $item->waktuselesai }}</td>
    <td>{{ $item->nama_acara }}</td>
    <td>{{ $item->link_video }}</td>
    <td>
        <span class="badge {{ $item->status == 'Sudah Selesai' ? 'bg-success' : 'bg-warning text-dark' }}">
            {{ $item->status }}
        </span>
    </td>
    <td class="text-center">
        <div class="d-flex flex-column align-items-center">
            <!-- Trigger Modal -->
            <button type="button" class="btn bg-gradient-dark mb-2" data-bs-toggle="modal"
                data-bs-target="#editModal{{ $item->id }}">
                Update
            </button>

<!-- Modal -->
<div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $item->id }}"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded-4">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Update Peminjaman Videotron</h5>
                <button type="button" class="btn-close bg-black" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form action="{{ route('videotron.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Tanggal Mulai</label>
                            <input type="date" name="tanggal_mulai" class="form-control"
                                value="{{ $item->tanggal_mulai }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Tanggal Selesai</label>
                            <input type="date" name="tanggal_selesai" class="form-control"
                                value="{{ $item->tanggal_selesai }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Kegiatan</label>
                            <input type="text" name="kegiatan" class="form-control"
                                value="{{ $item->kegiatan }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Sector</label>
                            <input type="text" name="sector" class="form-control"
                                value="{{ $item->sector }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Petugas</label>
                            <input type="text" name="petugas" class="form-control"
                                value="{{ $item->petugas }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Link Video</label>
                            <input type="text" name="link_video" class="form-control"
                                value="{{ $item->link_video }}" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>


            <!-- Tombol Hapus -->
            <form action="{{ route('videotron.destroy', $item->id) }}" method="POST"
                onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn bg-gradient-dark">Hapus</button>
            </form>
        </div>
    </td>
</tr>
@endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
