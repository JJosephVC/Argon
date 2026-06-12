<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    protected $fillable = [
        'date',
        'amount',
        'status'
    ];

    public function payment_type() : BelongsTo{
        return $this->belongsTo(Payment_type::class);
    }

    public function billing() : BelongsTo{
        return $this->belongsTo(Billing::class);
    }
}
