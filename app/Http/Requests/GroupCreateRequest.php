<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupCreateRequest extends FormRequest
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
            'desc' => 'required|string|max:1000|min:6'
        ];

    }

    public function messages()
    {
        return [
            'name.required' => 'Поле "Название группы" обязательное',
            'name.string' => 'Поле "Название группы" должно быть строкой',
            'name.max' => 'Поле "Название группы" не должно превышать :max символов',
            'name.min' => 'Поле "Название группы" должно превышать :min символов',
            'name.unique' => 'Такое название группы уже существует',

            'desc.required' => 'Поле "Описание группы" обязательное',
            'desc.string' => 'Поле "Описание группы" должно быть строкой',
            'desc.max' => 'Поле "Описание группы" не должно превышать :max символов',
            'desc.min' => 'Поле "Описание группы" должно превышать :min символов',

        ];
    }
}
