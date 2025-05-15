<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ruangsic extends Model
{
    protected $table = 'ruangsic'; 
    protected $fillable = [
        'tanggal', 'waktustart', 'waktuend',
        'kegiatan', 'sector', 'petugas',
        'tempat', 'keterangan'
    ];
}
