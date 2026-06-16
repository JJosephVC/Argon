<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Record extends Model
{
    protected $fillable = [
        'opening_date',
        'general_observations',
        'r_patients_id'
    ];

    public function treatment() : HasMany{
        return $this->hasMany(Treatment::class, 't_records_id');
    }

    public function patient() : BelongsTo{
        return $this->belongsTo(Patient::class, 'r_patients_id');
    }
}
