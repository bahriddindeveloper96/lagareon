<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePackagingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true; // Yoki sizning ehtiyojingizga ko'ra
    }

    public function rules()
    {
        return [
            'Ссылка' => 'required|string|unique:packagings,link',
            'ПометкаУдаления' => 'required|boolean',
            'Владелец' => 'required|string',
            'Родитель' => 'nullable|string',
            'Наименование' => 'required|string',
            'НаименованиеEn' => 'nullable|string',
            'Высота' => 'required|numeric',
            'Глубина' => 'required|numeric',
            'ЕдиницаИзмерения' => 'required|string',
            'Масса' => 'required|numeric',
            'МассаНетто' => 'required|numeric',
            'НаименованиеПолное' => 'nullable|string',
            'Объем' => 'required|numeric',
            'Ширина' => 'required|numeric',
            'Коэффициент' => 'required|integer',
            'ВладелецНаборУпаковок' => 'required|boolean',
            'ВидУчета' => 'required|string',
        ];
    }
}
