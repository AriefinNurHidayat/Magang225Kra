<?php

namespace App\Http\Controllers;

use App\Models\ruangsic;
use App\Models\Videotron;
use App\Models\Hosting;
use App\Models\Zoom;

use Illuminate\Http\Request;
use Carbon\Carbon;


class RuangsicController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => ['required', 'date'],
            'waktustart' => ['required'],
            'waktuend' => ['required'],
            'kegiatan' => ['required'],
            'sector' => ['required'],
            'contact'    => [
                'required',
                'regex:/^(\+62|62|0)8[1-9][0-9]{6,9}$/',
                'min:10',
                'max:15'
            ],
            'petugas'    => ['required'],
    ]);

        // Cek bentrok waktu
        $conflict = ruangsic::where('tanggal', $request->tanggal)
            ->where(function($query) use ($request) {
                $query->where(function($q) use ($request) {
                    $q->where('waktustart', '<', $request->waktuend)
                    ->where('waktuend', '>', $request->waktustart);
                });
            })
            ->exists();

        if ($conflict) {
            return redirect()->back()->withErrors([
                'duplicate' => 'Sudah ada jadwal yang bentrok dengan waktu tersebut.'
            ])->withInput();
        }
    
        ruangsic::create([
            'tanggal' => $request->tanggal,
            'waktustart' => $request->waktustart,
            'waktuend' => $request->waktuend,
            'kegiatan' => $request->kegiatan,
            'sector' => $request->sector,
            'petugas' => $request->petugas,
            'contact' => $request->contact,
            'keterangan' => $request->Keterangan,
        ]);

        return redirect()->back()->with('success', 'Peminjaman berhasil!');
        

    }

    public function index()
    {
        $data = ruangsic::all();
        $data->map(function ($item) {
            $waktuSelesai = Carbon::parse($item->tanggal . ' ' . $item->waktuend);
            $item->status = $waktuSelesai->isPast() ? 'Sudah Selesai' : 'Belum Dilaksanakan';
            return $item;
        });
        return view('pages.adminsic', compact('data'));
    }

    public function index2()
    {
    $data = ruangsic::all()->filter(function ($item) {
        $waktuSelesai = Carbon::parse($item->tanggal . ' ' . $item->waktuend);
        return $waktuSelesai->isFuture(); // hanya ambil yang BELUM lewat
    });

    return view('pages.main', compact('data'));
    }



    public function update(Request $request, $id){
       // Validasi data
    $validated = $request->validate([
        'tanggal' => 'required|date',
        'waktustart' => 'required',
        'waktuend' => 'required',
        'kegiatan' => 'required|string',
        'sector' => 'required|string',
        'petugas' => 'required|string',
        'tempat' => 'required|string',
        'keterangan' => 'nullable|string',
    ]);

    // Cari dan update data
    $ruang = \App\Models\ruangsic::findOrFail($id);
    $ruang->update($validated);

    return redirect()->back()->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $data = ruangsic::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }

    public function count()
{
    $now = Carbon::now(); // waktu sekarang

    $ruanganBelum = ruangsic::where(function ($query) use ($now) {
        $query->where('tanggal', '>', $now->toDateString()) // besok atau nanti
              ->orWhere(function ($q) use ($now) {
                  $q->where('tanggal', '=', $now->toDateString())
                    ->where('waktuend', '>', $now->format('H:i:s'));
              });
    })->count();

    $videotronBelum = Videotron::whereDate('tanggal_mulai', '>', $now)->count();

    $zoomBelum = Zoom::where(function ($query) use ($now) {
        $query->where('tanggal', '>', $now->toDateString())
              ->orWhere(function ($q) use ($now) {
                  $q->where('tanggal', '=', $now->toDateString())
                    ->where('waktu', '>', $now->format('H:i:s'));
              });
    })->count();

    return view('pages.admin', [
        'ruanganBelum' => $ruanganBelum,
        'videotronBelum' => $videotronBelum,
        'zoomBelum' => $zoomBelum,
    ]);
}



}