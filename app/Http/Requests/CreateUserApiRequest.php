<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserApiRequest extends FormRequest
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
            'name' => 'string|required|min:2|max:255',
            'email'=>'required|email|unique:users',
            'phone_number'=>'required|min:10|max:10|regex:/^[0-9]+$/|unique:users',
            'password'=>'min:8',
            'profile_image' => 'nullable',
        ];
    }
}
