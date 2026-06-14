<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PatientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $patient = $this->route('patient');

        return [
            'name'=> 'required|string|min:3|max:50',
            'surname'=> 'required|string|min:3|max:50',
            'identity_card'=> [
                'required',
                'string',
                'min:3',
                'max:20',
                Rule::unique('patients', 'identity_card')->ignore($patient),
            ],
            'email'=> [
                'nullable',
                'string',
                'min:5',
                'max:150',
                Rule::unique('patients', 'email')->ignore($patient),
            ],
            'gender'=> 'required|in:F,M',
            'birthdate'=> 'required|date',
            'phone_number'=> 'nullable|string|min:8|max:20',
            'address'=> 'required|string|min:3|max:100',
        ];
    }
}
