<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'brand' => 'sometimes|required|string',
            'model' => 'sometimes|required|string',
            'year' => 'sometimes|required|integer|min:1900',
            'maxSpeed' => 'sometimes|required|integer|min:0',
            'isAutomatic' => 'sometimes|required|boolean',
            'engine' => 'sometimes|required|string',
            'numberOfDoors' => 'sometimes|required|integer|min:0'
        ];
    }
}
