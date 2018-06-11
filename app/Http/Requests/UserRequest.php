<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UserRequest extends FormRequest
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
    public function rules(Request $request)
    {
        $passwordRule = $request->method=='PATCH' ? '' : 'required|min:6|confirmed';
        $emailRule = $request->method == 'PATCH' ? 'required' : 'required|email|unique:users|email';

        //dd($request->method);
        return [
            'username' => 'required|min:3|regex:/^[0-9A-Za-z .-_]+$/|max:30',
            'email'    => $emailRule,
            'password' => $passwordRule,
            'name'     => 'required|min:3|regex:/^[A-Za-z ]+$/|max:30',
            'address'  => 'required|regex:/^[0-9A-Za-z ,-]+$/',
            'city'     => 'required|regex:/^[A-za-z ]+$/',
            'country'  => 'required|regex:/^[A-za-z ]+$/',
            'image'    => 'nullable|mimes:jpg,jpeg,png|max:2000',
        ];
    }
}
