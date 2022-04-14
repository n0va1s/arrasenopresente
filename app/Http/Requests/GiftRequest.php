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
            'theme_id' => ['required'],
            'good_gift' => ['nullable'],
            'bad_gift' => ['nullable'],
            'grecaptcha' => ['required', new ReCAPTCHAv3],
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
            'theme_id.required' => 'O tema é obrigatório',
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
            'theme_id' => 'tema',
        ];
    }
}
