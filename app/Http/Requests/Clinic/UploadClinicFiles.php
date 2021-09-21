<?php

namespace App\Http\Requests\Clinic;

use App\Exceptions\ValidationException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class UploadClinicFiles extends FormRequest
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
            "clinic_id" => "required|integer",
            "files" => "required|array|min:1",
            "files.*" => "required|file",
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
