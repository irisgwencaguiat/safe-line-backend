<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest as BaseRequest;
use App\Exceptions\ValidationException;
use Illuminate\Contracts\Validation\Validator;

class FormRequest extends BaseRequest
{
    /**
     * @throws ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
        throw new ValidationException($validator);
    }
}
