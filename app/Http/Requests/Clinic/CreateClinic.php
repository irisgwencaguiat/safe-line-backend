<?php

namespace App\Http\Requests\Clinic;

use Illuminate\Contracts\Validation\Validator;
use App\Exceptions\ValidationException;
use Illuminate\Foundation\Http\FormRequest;

class CreateClinic extends FormRequest
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
            "name" => "required|string|unique:clinics",
            "opening_time" => "required",
            "closing_time" => "required",
            "services" => "required|array|min:1",
            "services.*" => "required|integer",
            "address" => "required|string",
            "latitude" => "required|string",
            "longitude" => "required|string",
        ];
    }
    /**
     * @throws ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
        throw new ValidationException($validator);
    }

    protected $stopOnFirstFailure = true;
}
