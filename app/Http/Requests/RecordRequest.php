<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecordRequest extends FormRequest
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
        return [
            'opening_date'=> 'required|date',
            'general_observations'=> 'nullable|string|min:3',

            // Clave foránea
            'r_patients_id'=> 'required|exists:patitents,id'
        ];
    }
}
