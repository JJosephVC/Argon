<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DentistRequest extends FormRequest
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
        $dentistId = $this->route('dentist');

        return [
            'name'=> 'required|string|min:3|max:50',
            'surname'=> 'required|string|min:3|max:50',
            'email'=> 'required|string|min:5|max:150|unique:dentists,email',
            $this->route('dentist'),
            'phone_number'=> 'required|string|min:8|max:15',
            'description_professional'=> 'required|string|min:3|max:100',
            'speciality'=> 'required|string|min:3|max:100',
            'license_number'=> 'required|string|min:3|max:20|unique:dentists',
            $this->route('dentist'),
        ];
    }
}
