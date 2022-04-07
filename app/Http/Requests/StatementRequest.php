<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatementRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'requested_salary' => 'max:255',
            'experience' => 'require|max:255',
            'technology_stack' => 'require|max:255',
            'description' => 'require|max:10000',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'requested_salary.max' => 'Длина поля превышает :max символов',

            'experience.required' => 'Поле опыта работы является обязательным',
            'experience.max' => 'Длина поля превышает :max символов',

            'technology_stack.required' => 'Поле стека является обязательным',
            'technology_stack.max' => 'Длина поля превышает :max символов',

            'description.required' => 'Поле описания является обязательным',
            'description.max' => 'Длина поля превышает :max символов',
        ];
    }
}
