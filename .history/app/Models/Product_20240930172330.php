<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'link', // Ссылка
        'deleted', // ПометкаУдаления
        'owner', // Not mentioned in validation rules
        'parent', // Родитель
        'name', // Наименование
        'name_en', // Not mentioned in validation rules
        'height', // Add height if relevant
        'depth', // Add depth if relevant
        'measurement_unit', // ЕдиницаИзмерения
        'weight', // Масса
        'net_weight', // Not mentioned in validation rules
        'full_name', // НаименованиеПолное
        'volume', // Объем
        'width', // Add width if relevant
        'coefficient', // Add coefficient if relevant
        'is_packaging_set', // ЯвляетсяКомплектом
        'accounting_type', // If relevant
    ];
}
