<?php

namespace App\Http\Controllers;

use App\Models\ruangsic;
use Illuminate\Http\Request;
use Carbon\Carbon;


class RuangsicController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'waktustart' => 'required',
            'waktuend' => 'required',
            'kegiatan' => 'required',
            'sector' => 'required',
            'petugas' => 'required',
            'tempat' => 'required',
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
            'tempat' => $request->tempat,
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

    public function update($id){
        $data = ruangsic::findOrFail($id);

        return view('pages.updatesic', compact('data'));
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

    return view('pages.admin', [
        'ruanganBelum' => $ruanganBelum,
    ]);
}

}