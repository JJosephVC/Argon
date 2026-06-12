<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Billing_detail extends Model
{
    protected $fillable = [
        'quantity',
        'unit_price',
        'amount',
        'bd_billing_id',
        'bd_treatments_types_id'
    ];

    public function billing() : BelongsTo{
        return $this->belongsTo(Billing::class);
    }

    public function treatment_type() : BelongsTo{
        return $this->belongsTo(Treatment_type::class);
    }
}
