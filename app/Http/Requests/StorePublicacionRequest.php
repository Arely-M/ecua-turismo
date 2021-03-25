<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class StorePublicacionRequest extends FormRequest
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
        $rules= [
            'titulo' => 'required',
            'ubicacion' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required|mimes:jpeg,png,jpg|max:1000',
        ];
        return $rules;
    }
}
