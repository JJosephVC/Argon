<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BillingDetailRequest extends FormRequest
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
            'quantity' => 'required|integer|min:1',
            'unit_price'=> 'required|numeric|min:0',
            'amount'=> 'required|numeric|min:0',

            // Claves foráneas
            'bd_billings_id'=>'required|exists:billings,id',
            'bd_treatments_types_id'=> 'required|exists:treatments_types,id'
        ];
    }
}
