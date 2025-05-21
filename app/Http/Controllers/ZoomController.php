<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zoom;
use Carbon\Carbon;

class ZoomController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input dari form
        $validated = $request->validate([
            'tanggal'   => 'required|date',
            'waktu'     => 'required',
            'nama'      => 'required',
            'sector'    => 'required',
            'petugas'   => 'required',
        ]);

        // Simpan ke database
        Zoom::create($validated);
        // Redirect atau response
        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }
     public function index()
    {
        $data = zoom::all();
        // $data->map(function ($item) {
        //     $waktuSelesai = Carbon::parse($item->tanggal . ' ' . $item->waktuend);
        //     $item->status = $waktuSelesai->isPast() ? 'Sudah Selesai' : 'Belum Dilaksanakan';
        //     return $item;
        // });
        return view('pages.adminzoom', compact('data'));
    }
    public function update(Request $request, $id)
{
    $validated = $request->validate([
           'tanggal'   => 'required|date',
            'waktu'     => 'required',
            'nama'      => 'required',
            'sector'    => 'required',
            'petugas'   => 'required',
    ]);

    $videotron = zoom::findOrFail($id);
    $videotron->update($validated);

    return redirect()->back()->with('success', 'Data berhasil diperbarui!');
}
     public function destroy($id)
    {
        $data = zoom::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}

