<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'deleted',
        'name',
        'code',
        'full_name',
        'abbreviation',
        'is_measure',
    ];

    // To'g'ri attribute nomlarini ko'rsatish
    protected $casts = [
        'deleted' => 'boolean',
        'is_measure' => 'boolean',
    ];
}
