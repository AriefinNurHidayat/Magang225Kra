<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hosting extends Model
{
    protected $table = 'hostings'; 
    protected $fillable = [
       'nama_website', 'sector', 'petugas', 'link_github'
    ];
}
