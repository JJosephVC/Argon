<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BillingRequest extends FormRequest
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
        $billingId = $this->route("billing");

        return [
            'invoice_number'=> 'required|string|max:20', $this->route('billing'),
            'issue_date'=> 'required|date',
            'subtotal'=> 'required|numeric|min:1',
            'iva'=> 'required|numeric|min:1',
            'total'=> 'required|numeric|min:1',
            'status'=> 'required|in:Pendiente,Parcialmente pagado, Pagado',

            // Claves foráneas
            'b_dates_id'=>'required|exists:dates,id',
        ];
    }
}
