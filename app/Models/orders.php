<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $filable =[
        'user_id', 
        'total'
    ];

    public function user()
    {
        return $this-belongsTo(user::class);
        //
    }
}