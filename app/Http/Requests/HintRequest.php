<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HintRequest extends FormRequest
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
            'group_id' => ['required'],
            'title' => ['required'],
            'link' => ['required', 'url'],
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
            'group_id.required' => 'O tipo é obrigatória',
            'title.required' => 'O título é obrigatório',
            'link.required' => 'O link é obrigatório',
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
            'group_id' => 'tipo',
            'title' => 'título',
            'link' => 'link',
        ];
    }
}
