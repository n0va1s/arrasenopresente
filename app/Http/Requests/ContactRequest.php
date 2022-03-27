<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'gift_id' => ['required', 'numeric'],
            'emailFrom' => ['required', 'email'],
            'name' => ['required', 'max:255'],
            'is_woman' => ['required', 'boolean'],
            'age' => ['required', 'numeric'],
            'state_id' => ['required'],
            'emailTo' => ['nullable'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'emailFrom.required' => 'O email é obrigatório',
            'emailFrom.email' => 'O email não é válido',
            'name.required' => 'O nome é obrigatório',
            'name.max' => 'O nome não pode ser maior que 255',
            'is_woman.required' => 'O gênero é obrigatório',
            'is_woman.boolean' => 'O gênero não foi identificado',
            'age.required' => 'A idade é obrigatória',
            'age.numeric' => 'A idade deve ser um número',
            'state_id.required' => 'A UF é obrigatória',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'emailFrom' => 'seu email',
            'name' => 'nome',
            'is_woman' => 'gênero',
            'age' => 'idade',
            'state_id' => 'UF',
        ];
    }
}
