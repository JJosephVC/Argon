<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DateRequest extends FormRequest
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
        $dateId = $this->route("date"); // Llamado de Primary Key para el posterior uso en obtención de datos de tablas débiles

        return [
            'date'=> 'required|date',
            'hour'=> 'required',
            'estimated_duration'=> 'required|integer|min:1',
            'appoinment_status'=> 'required|in:Programada,Completada, Cancelada',

            // Claves foráneas
            'd_dentists_id'=> 'required|exists:dentists,id',
            'd_patients_id'=> 'required|exists:patients,id',
            'd_treatments_types_id'=> 'required|exists:treatments_types,id',
        ];
    }
}
