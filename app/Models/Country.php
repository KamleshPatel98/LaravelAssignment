<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
        'code',
        'phone_code',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
