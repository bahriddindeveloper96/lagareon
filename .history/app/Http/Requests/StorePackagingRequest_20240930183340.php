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
            
            ];
    }
}
