<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
        'email'=>'email|required|unique:users,email',
            'name'=>'required| min:2 |max:25',
            'password'=>'required| min:8',
        ];



    }
    public function  messages()
    {

        return[
            'email.email' => 'فرمت ایمیل غلط است ',
            'email.unique' => ' ایمیل در دیتابیس است ',
            'email.required' => 'لطفا فیلد ایمیل را پر کنید ',
            'name.required' => 'فیلد را پر کنید ',
            'name.min' => 'بیش از دو کاراکتر باید باشد',
            'password.required' => 'فیلد پسورد خالیست ',
            'password.min' => 'پسورد ضعیف است ',


        ];

    }
}
