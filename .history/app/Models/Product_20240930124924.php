<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'link',
        'deleted',
        'is_group',
        'parent',
        'name',
        'code',
        'article',
        'type',
        'measurement_unit',
        'comment',
        'weight',
        'full_name',
        'volume',
        'storage_unit',
        'storage_time',
        'packaging_set',
        'is_set',
    ];
}
