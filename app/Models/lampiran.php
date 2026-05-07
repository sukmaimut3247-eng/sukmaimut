<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lampiran extends Model
{
    use HasFactory;

    protected $filable = [
        'id_lampiran',
        'id_pengaduan',
        'file'
    ];
    //
}
