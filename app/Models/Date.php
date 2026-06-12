<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Date extends Model
{
    protected $fillable = [
        'date',
        'hour',
        'estimated_duration',
        'd_dentists_id',
        'd_patients_id,',
        'd_treatments_types_id'
    ];

    public function dentist() : BelongsTo{
        return $this->belongsTo(Dentist::class);
    }

    public function patient() : BelongsTo{
        return $this->belongsTo(Patient::class);
    }

    public function treatment_type() : BelongsTo{
        return $this->belongsTo(Treatment_type::class);
    }

    public function billing() : HasOne{
        return $this->hasOne(Billing::class);
    }
}
