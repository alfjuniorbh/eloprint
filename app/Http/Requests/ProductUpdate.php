<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdate extends FormRequest
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
            'name'  => 'required|unique:products,name,'.$this->id,
            'price' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'     => 'O campo NOME DO PRODUTO é obrigatório.',
            'name.unique'       => 'PRODUTO já cadastrado',
            'price.required'    => 'O campo PREÇO é obrigatório.'
        ];
    }
}
