<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Treatment extends Model
{
    protected $fillable = [
        'date',
        'observations',
        'status',
        'cost',
        't_treatments_types_id',
        't_records_id'
    ];

    public function record() : BelongsTo{
        return $this->belongsTo(Record::class, 't_records_id');
    }

    public function treatment_type() : BelongsTo{
        return $this->belongsTo(TreatmentType::class, 't_treatments_types_id');
    }
}
