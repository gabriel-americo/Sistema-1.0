<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannersCreateRequest extends FormRequest
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
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'nome' => 'required'
        ];
    }

    public function messages()
    {
        // mensagens de erro personalizadas!
        return [
            'imagem.required' => 'O campo :attribute é obrigatório',
            'nome.required' => 'O campo :attribute é obrigatório'
        ];
    }
}
