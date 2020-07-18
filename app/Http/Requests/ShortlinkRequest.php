<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShortlinkRequest extends FormRequest
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
            'url' => 'required|url'
        ];
    }

    public function messages()
    {
        return [
            'url.required' => 'Поле обязательно к заполнению',
            'url.url' => 'Поле должно содержать валидный URL адрес'
        ];
    }
}
