<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tanggapan extends Model
{
    // Gunakan double 'l', bukan double 'b'
    protected $fillable = [
        'id_tanggapan',
        'id_pengaduan',
        'id_admin',
        'isi_tanggapan', // Pastikan ejaannya sesuai database
        'tanggal',
    ];
}