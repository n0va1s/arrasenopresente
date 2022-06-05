<?php

namespace App\Http\Requests;

use App\Rules\ReCAPTCHAv3;
use Illuminate\Foundation\Http\FormRequest;

class GiftRequest extends FormRequest
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
            'occasion_id' => ['required'],
            'price_range_id' => ['required'],
            'who_is' => ['required'],
            'age_range_id' => ['required'],
            'hobby_id' => ['required'],
            'sign_id' => ['required'],
            'relationship_id' => ['required'],
            'email_from' => ['required', 'email'],
            'name' => ['required'],
            'more_information' => ['nullable'],
            //'grecaptcha' => ['required', new ReCAPTCHAv3],
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
            'occasion_id.required' => 'A ocasião é obrigatória',
            'price_range_id.required' => 'A faixa de preço é obrigatória',
            'who_is.required' => 'O gênero é obrigatório',
            'age_range_id.required' => 'A faixa de idade é obrigatória',
            'hobby_id.required' => 'O hobby é obrigatório',
            'sign_id.required' => 'O signo é obrigatório',
            'relationship_id.required' => 'O relacionamento é obrigatório',
            'emailFrom.required' => 'O email é obrigatório',
            'name.required' => 'O nome é obrigatório',
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
            'occasion_id' => 'ocasião',
            'price_range_id' => 'faixa de preço',
            'who_is' => 'gênero',
            'age_range_id' => 'faixa de idade',
            'hobby_id' => 'hobby',
            'sign_id' => 'signo',
            'relationship_id' => 'relacionamento',
            'emailFrom' => 'email',
            'name' => 'nome',
        ];
    }
}
