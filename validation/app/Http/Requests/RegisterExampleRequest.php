<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterExampleRequest extends FormRequest
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
            'name'=>'required|min:2|max:30',
            'dob'=>'required',
            'phone'=>'required|min:8|max:13',
            'email'=>'required',
            'address'=>'max:100',
            'class'=>'max:20',
        ];
    }

    public function messages()
    {
        $messages = [
            'name.required' => 'Không được để trống tên!',
            'name.min' => 'Tên dài từ 2 - 30 ký tự!',
            'name.max' => 'Tên dài từ 2 - 30 ký tự!',
            'dob.required' => 'Không được để trống ngày sinh!',
            'phone.required' => 'Không được để trống số điện thoại!',
            'phone.min' => 'Số điện thoại dài từ 8 - 13 ký tự!',
            'phone.max' => 'Số điện thoại dài từ 8 - 13 ký tự!',
            'email.required' => 'Không được để trống email!',
            'address.max' => 'Địa chỉ không được dài quá 100 ký tự!',
            'class.max' => 'Class không được dài quá 20 ký tự!',
        ];
        return $messages;
    }
}
