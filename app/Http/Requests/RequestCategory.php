<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCategory extends FormRequest
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
            'name'=>'required|unique:categories|max:20|min:2'
        ];
    }


    public function messages()
    {
        return [
            'name.required'=>'Le nom de la categorie est obligatoire',
            'name.unique'=>'la categorie déja existe !'
        ];
    }
}
