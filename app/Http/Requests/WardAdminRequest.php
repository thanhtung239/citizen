<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WardAdminRequest extends FormRequest
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
            'name' => ['required', 'alpha'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:1'],
            'password_confirmation' => ['required', 'string', 'same:password'],
            'indentification' => ['uniq', 'number'],
            'phone' => ['regex:/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Không được bỏ trống ô này',
            'name.alpha' => 'Tên chỉ được nhập bằng chữ',
            'identification.unique' => 'Số CMND/CCCD này đã tồn tại',
            'email.required' => 'The email field is required',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'The password field is required',
            'password.min' => 'The password must be less than 8 characters',
            'password_confirmation.required' => 'The repeat password field is required',
            'password_confirmation.same:password' => 'The password confirmation does not match.',
            'phone.regex:/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/' => 'Số điện thoại chưa đúng định dạng'
        ];
    }
}
