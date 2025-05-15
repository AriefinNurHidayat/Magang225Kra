@extends('components.adminheader')
@section('title', 'Dashboard Ruang SIC')

@section('content')
    <h3 class="mt-4 pb-4">Peminjaman Ruang SIC</h3>
    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple" class="">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Waktu Mulai</th>
                        <th>Waktu Selesai</th>
                        <th>Kegiatan</th>
                        <th>Sektor</th>
                        <th>Petugas</th>
                        <th>Tempat</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        <th>ABCD</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->waktustart }}</td>
                            <td>{{ $item->waktuend }}</td>
                            <td>{{ $item->kegiatan }}</td>
                            <td>{{ $item->sector }}</td>
                            <td>{{ $item->petugas }}</td>
                            <td>{{ $item->tempat }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td>
                                <span class="badge {{ $item->status == 'Sudah Selesai' ? 'bg-success' : 'bg-warning text-dark' }}">
                                    {{ $item->status }}
                                </span>
                            </td>
                            <td class="text-center">
                                <div class="d-flex flex-column align-items-center">
                                    <form action="{{ route('updateruang.update', $item->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn bg-gradient-dark">Update</button>
                                    </form>
                                    <form action="{{ route('adminsic.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
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
