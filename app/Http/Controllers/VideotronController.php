<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videotron;
use Carbon\Carbon;

class VideotronController extends Controller
{
    /**
     * Menyimpan data videotron ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal_mulai'   => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'waktumulai'      => 'required', 
            'waktuselesai'    => 'required',
            'nama_acara'      => 'required|string|max:255', 
            'link_video'      => 'nullable|string|max:255',
        ]);
        // Simpan ke database
        Videotron::create($validated);
        // Redirect atau response
        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }
    public function index()
    {
        $data = Videotron::all();

        $data->map(function ($item) {
            $now = Carbon::now();
            $mulai = Carbon::parse($item->tanggal_mulai);
            $selesai = Carbon::parse($item->tanggal_selesai);

            if ($now->lt($mulai)) {
                $item->status = 'Belum Dilaksanakan';
            } elseif ($now->between($mulai, $selesai)) {
                $item->status = 'Sedang Berlangsung';
            } else {
                $item->status = 'Sudah Selesai';
            }

            return $item;
        });

    return view('pages.adminvideotron', compact('data'));
    }

    public function index2()
    {
        $data2 = Videotron::all();

    return view('pages.main', compact('data2'));
    }
    public function update(Request $request, $id)
{
    $validated = $request->validate([
        'tanggal_mulai'   => 'required|date',
        'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
        'waktumulai'      => 'required', 
        'waktuselesai'    => 'required',
        'nama_acara'      => 'required|string|max:255', 
        'link_video'      => 'nullable|string|max:255',
    ]);
    $videotron = Videotron::findOrFail($id);
    $videotron->update($validated);

    return redirect()->back()->with('success', 'Data berhasil diperbarui!');
}
     public function destroy($id)
    {
        $data = videotron::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }


    public function count()
    {    
    }
}
