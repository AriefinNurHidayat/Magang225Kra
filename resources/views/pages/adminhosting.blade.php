@extends('components.adminheader')
@section('title', 'Dashboard Hosting')

@section('content')
    <h3 class="mt-4 pb-4">Pelayanan Website Hosting</h3>
    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple" class="">
                <thead>
                    <tr>
                        <th>Nama Website</th>
                        <th>Sector</th>
                        <th>Petugas</th>
                        <th>link Github</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
<tr>
    <td>{{ $item->nama_pihak }}</td>
    <td>{{ $item->sector }}</td>
    <td>{{ $item->petugas }}</td>
    <td>{{ $item->link_github }}</td>
    {{-- <td>
        <span class="badge {{ $item->status == 'Sudah Selesai' ? 'bg-success' : 'bg-warning text-dark' }}">
            {{ $item->status }}
        </span>
    </td> --}}
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
            <form action="{{ route('hosting.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Nama Pihak</label>
                            <input type="text" name="nama_pihak" class="form-control"
                                value="{{ $item->nama_pihak }}" required>
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
                            <label class="form-label fw-bold">Link Github</label>
                            <input type="text" name="link_github" class="form-control"
                                value="{{ $item->link_github }}">
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
            <form action="{{ route('hosting.destroy', $item->id) }}" method="POST"
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
