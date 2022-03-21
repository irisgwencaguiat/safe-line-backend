<?php

namespace App\Http\Requests\Clinic;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClinicMember extends FormRequest
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
            "gender" => "required|string",
            "birthday" => "required",
            "address" => "required|string",
            "latitude" => "required",
            "longitude" => "required",
            "member_type" => "required|string",
            "clinic_id" => "required"
        ];
    }
}
