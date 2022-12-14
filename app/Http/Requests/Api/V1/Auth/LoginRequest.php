<?php

namespace App\Http\Requests\Api\V1\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'username'    => 'required',
            'password'    => 'required',
            'device_name' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'فیلد شماره موبایل الزامی است',
        ];
    }
}
