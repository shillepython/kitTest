<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupUpdateRequest extends FormRequest
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
            'name' => 'required|string|max:120|min:3|unique:group_ids',
            'description' => 'required|string|max:1000|min:6'
        ];

    }

    public function messages()
    {
        return [
            'name.required' => 'Поле "Имя" обязательное',
            'name.string' => 'Поле "Имя" должно быть строкой',
            'name.max' => 'Поле "Имя" не должно превышать :max символов',
            'name.min' => 'Поле "Имя" должно превышать :min символов',

            'description.required' => 'Поле "Описание" обязательное',
            'description.string' => 'Поле "Описание" должно быть строкой',
            'description.max' => 'Поле "Описание" не должно превышать :max символов',
            'description.min' => 'Поле "Описание" должно превышать :min символов',

        ];
    }



}
