<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'gift_id' => 'required|numeric',
            'is_woman' => 'required|boolean',
            'age_range_id' => 'required',
            'like_day' => 'required|boolean',
            'like_animal' => 'required|boolean',
            'segment_id' => 'required',
            'relax_id' => 'required',
            'sexual_option_id' => 'required',
            'sign_id' => 'required',
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
            'is_woman.required' => 'O gênero é obrigatório',
            'is_woman.boolean' => 'O gênero não válido',
            'age_range_id.required' => 'A faixa de idade é obrigatória',
            'like_day.required' => 'A opção tem energia  é obrigatório',
            'like_day.boolean' => 'A opção tem energia não é válida',
            'like_animal.required' => 'A opção gosta de animais é obrigatório',
            'like_animal.boolean' => 'A opção gosta de animais não é válida',
            'segment_id.required' => 'O segmento é obrigatório',
            'relax_id.required' => 'A forma de descanso é obrigatória',
            'sexual_option_id.required' => 'A orientaão sexual é obrigatória',
            'sign_id.required' => 'O signo é obrigatório',
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
            'is_woman' => 'gênero',
            'age_range_id' => 'faixa de idade',
            'like_day' => 'tem energia (dia/noite)',
            'like_animal' => 'gosta de animais',
            'segment_id' => 'segmento',
            'relax_id' => 'forma de descanso',
            'sexual_option_id' => 'orientaão sexual',
            'sign_id' => 'signo',
        ];
    }
}
