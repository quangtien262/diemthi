<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'username' => 'required|unique:users|max:255',
            'password' => 'required|min:1|confirmed',
            'password_confirmation' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'username.required' => 'Bạn chưa nhập tên tài khoản',
            'username.unique' => 'Tài khoản này đã tồn tại',
            'password.required'  => 'Bạn chưa nhập mật khẩu',
            'userType.required' => 'Không tồn tại loại user này',
            'password_confirmation.required' => 'Bạn chưa nhập lại mật khẩu',
            'password.confirmed' => 'Mật khẩu của bạn không khớp',
            'userType.integer' => 'Loại user phải là một số nguyên',
        ];
    }
}
