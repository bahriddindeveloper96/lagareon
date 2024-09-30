<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePackagingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'link' => 'required|string|unique:packagings,link',
            'deleted' => 'required|boolean',
            'owner' => 'required|string',
            'parent' => 'nullable|string',
            'name' => 'required|string',
            'name_en' => 'nullable|string',
            'height' => 'required|numeric',
            'depth' => 'required|numeric',
            'measurement_unit' => 'required|string',
            'weight' => 'required|numeric',
            'net_weight' => 'required|numeric',
            'full_name' => 'nullable|string',
            'volume' => 'required|numeric',
            'width' => 'required|numeric',
            'coefficient' => 'required|integer',
            'is_packaging_set' => 'required|boolean',
            'accounting_type' => 'required|string',
        ];
    }
}
