<?php

namespace App\Http\Requests\User;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateUser extends FormRequest
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
            "first_name" => "required|string",
            "last_name" => "required|string",
            "email" => "required|unique:users",
            "password" => "required|string",
            "user_type" => "required|string",
            "gender" => "required|string",
            "birthday" => "required",
            "contacts" => "required|string",
            "address_type" => "required|string",
            "street" => "required|string",
            "city" => "required|string",
            "region" => "required|string",
            "zip_code" => "required|string",
            "image" => "image|mimes:jpeg,png,jpg,gif,svg",
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            customResponse()
                ->data([])
                ->message($validator->errors()->first())
                ->failed()
                ->generate(),
            422
        );
    }
}
