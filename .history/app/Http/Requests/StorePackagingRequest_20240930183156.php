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
        return true; // Bu satr muhim, aks holda so'rov rad etiladi
    }

    public function rules()
    {
        return [
            'link' => 'required|string|unique:units,link',
            'owner_id' => 'required|uuid',             
            'parent_id' => 'nullable|uuid',
            'name' => 'required|string|max:255',
            'name_en' => 'nullable|string|max:255',
            'height' => 'required|numeric',
            'depth' => 'required|numeric',
            'unit_of_measure_id' => 'required|uuid',
            'weight' => 'required|numeric',
            'net_weight' => 'required|numeric',
            'volume' => 'required|numeric',
            'width' => 'required|numeric',
            'coefficient' => 'required|integer',
            'owner_set' => 'nullable|boolean',
            'accounting_type' => 'required|string|max:255',
            ];
    }
}
