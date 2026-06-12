<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Billing extends Model
{
    protected $fillable = [
        'invoice_number',
        'issue_date',
        'subtotal',
        'iva',
        'total',
        'status',
        'b_dates_id'
    ];

    public function billing_detail() : HasMany{
        return $this->hasMany(Billing_detail::class);
    }
    public function date() : BelongsTo{
        return $this->belongsTo(Date::class);
    }
    public function payment() : HasMany{
        return $this->hasMany(Payment::class);
    }
}
