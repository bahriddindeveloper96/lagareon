<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true; // Yoki sizning ehtiyojingizga ko'ra
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
             'Ссылка' => 'required|string|unique:products,link',
        'ПометкаУдаления' => 'required|boolean',
        'ЭтоГруппа' => 'required|boolean',
        'Родитель' => 'nullable|string',
        'Наименование' => 'required|string',
        'Код' => 'required|string',
        'Артикул' => 'nullable|string',
        'ВидНоменклатуры' => 'nullable|string',
        'ЕдиницаИзмерения' => 'nullable|string',
        'Комментарий' => 'nullable|string',
        'Масса' => 'required|numeric',
        'НаименованиеПолное' => 'nullable|string',
        'Объем' => 'required|numeric',
        'ЕдиницаИзмеренияСрокаХранения' => 'nullable|string',
        'СрокХранения' => 'required|integer',
        'НаборУпаковок' => 'nullable|string',
        'ЯвляетсяКомплектом' => 'required|boolean',
        // Map the validation rules to model attributes
        'height' => 'nullable|numeric', // Assuming height is a new field in your requirements
        'depth' => 'nullable|numeric', // Assuming depth is also required
        'width' => 'nullable|numeric', // Add if width is relevant
        'coefficient' => 'nullable|numeric', // Assuming it's required as well
        'accounting_type' => 'nullable|string', // If relevant
        ];
    }
}
