<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
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
            'date'=>'required|date',
            'amount'=> 'required|string|min:3|max:10',
            'status'=> 'required|in:Pendiente, Confirmada, Cancelada',

            // Claves foráneas
            'p_payments_types_id'=> 'required|exists:payments_types,id',
            'p_billings_id'=> 'required|exists:billings,id'
        ];
    }
}
