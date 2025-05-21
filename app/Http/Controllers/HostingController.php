<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hosting;

class HostingController extends Controller
{
    public function store(Request $request)
    {
    // Validasi input dari form
            $validated = $request->validate([
            'nama_website'      => 'required|string',
            'sector'          => 'required|string',
            'petugas'         => 'required|string|max:255',
            'link_github'     => 'required|string|max:255',

        ]);

        // Simpan ke database
        Hosting::create($validated);
        // Redirect atau response
        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }
     public function index()
    {
        $data = hosting::all();
        // $data->map(function ($item) {
        //     $waktuSelesai = Carbon::parse($item->tanggal . ' ' . $item->waktuend);
        //     $item->status = $waktuSelesai->isPast() ? 'Sudah Selesai' : 'Belum Dilaksanakan';
        //     return $item;
        // });
        return view('pages.adminhosting', compact('data'));
    }
      public function update(Request $request, $id)
{
    $validated = $request->validate([
        'nama_website'      => 'required|string',
        'sector'          => 'required|string',
        'petugas'         => 'required|string|max:255',
        'link_github'     => 'required|string|max:255',
    ]);

    $videotron = hosting::findOrFail($id);
    $videotron->update($validated);

    return redirect()->back()->with('success', 'Data berhasil diperbarui!');
}
     public function destroy($id)
    {
        $data = hosting::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }

}
