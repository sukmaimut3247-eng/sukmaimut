<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduans';

    protected $fillable = [
        'id_user',
        'judul',
        'deskripsi',
        'tanggal',
        'status',
    ];
}