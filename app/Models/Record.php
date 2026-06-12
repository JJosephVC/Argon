<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Record extends Model
{
    protected $fillable = [
        'opening_date',
        'general_observations',
        'r_patients_id'
    ];

    public function treatment() : BelongsTo{
        return $this->belongsTo(Treatment::class);
    }

    public function patient() : BelongsTo{
        return $this->belongsTo(Patient::class);
    }
}
