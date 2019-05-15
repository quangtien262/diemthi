<?php

namespace App\Http\Requests;

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
            'username' => 'required|max:255',
            'password' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'username.required' => 'Bạn chưa nhập tên tài khoản',
            'password.required'  => 'Bạn chưa nhập mật khẩu',
        ];
    }
}
