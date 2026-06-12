<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TreatmentTypeRequest extends FormRequest
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
       $treatmenttypeId = $this->route('treatment_type');

        return [
            'name'=> 'required|string|min:3|max:50',
            'description'=> 'nullable|string|min:3,max:255',
            'base_cost'=> 'required|numeric|min:1',
            'estimated_duration'=> 'required|numeric|min:1'
        ];
    }
}
