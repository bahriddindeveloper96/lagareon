<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packaging extends Model
{
    use HasFactory;
    protected $fillable = [
            'id',
            'link',
            'is_deleted',
            'owner_id',
            'name',
            'height',
            'depth',
            'unit_of_measure_id',
            'weight',
            'net_weight',
            'volume',
            'width',
            'coefficient',
            'owner_set',
    ];
}
