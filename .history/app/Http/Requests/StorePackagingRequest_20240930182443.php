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
             'owner_id' => 'required|uuid',
            'name' => 'required|string|max:255',
            'height' => 'required|numeric',
            'depth' => 'required|numeric',
            'unit_of_measure_id' => 'required|uuid',
            'weight' => 'required|numeric',
            'net_weight' => 'required|numeric',
            'volume' => 'required|numeric',
            'width' => 'required|numeric',
            'coefficient' => 'required|integer',
            'owner_set' => 'nullable|boolean',
        ];
    }
}
