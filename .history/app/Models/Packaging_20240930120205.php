<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packaging extends Model
{
    use HasFactory;
    protected $fillable = [
        'link',
        'deleted',
        'owner',
        'parent',
        'name',
        'name_en',
        'height',
        'depth',
        'measurement_unit',
        'weight',
        'net_weight',
        'full_name',
        'volume',
        'width',
        'coefficient',
        'is_packaging_set',
        'accounting_type',
    ];

    protected $casts = [
        'deleted' => 'boolean',
        'is_packaging_set' => 'boolean',
    ];
}
