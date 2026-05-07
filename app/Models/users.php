<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $fillable = [
        'nama',
        'email',
        'password',
        'role',
        'no_hp',
        'alamat'
    ];

    public function pengaduan()
    {
        return $this->hasMany(pengaduan::class, 'id_user', 'id');
    }
}