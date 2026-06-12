<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TreatmentRequest extends FormRequest
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
            'date'=> 'required|date',
            'observations'=> 'nullable|string|min:3|max:255',
            'status'=> 'required|in:Pendiente,En proceso, Finalizado',
            'cost'=> 'required|numeric|min:1|max:12',

            // Claves foráneas
            't_treatments_types_id'=> 'required|exists:treatments_types,id',
            't_records_id'=> 'required|exists:records,id'
        ];
    }
}
