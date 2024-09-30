<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packaging extends Model
{
    use HasFactory;
    protected $table = 'packagings';
    
    protected $fillable = [
        'id', 'link', 'is_deleted', 'owner_id', 'parent_id', 
        'name', 'name_en', 'height', 'depth', 
        'unit_of_measure_id', 'weight', 'net_weight', 
        'volume', 'width', 'coefficient', 'owner_set', 'accounting_type'
    ];

    public $incrementing = false; // UUID bo'lganligi uchun
}
