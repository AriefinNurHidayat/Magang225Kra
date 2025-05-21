<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Videotron extends Model
{
    protected $table = 'videotron'; 
    protected $fillable = [
        'tanggal_mulai', 'tanggal_selesai',
        'waktumulai', 'waktuselesai', 'nama_acara', 'link_video'
    ];
}
