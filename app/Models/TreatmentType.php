<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TreatmentType extends Model
{
    protected $fillable = [
        'name',
        'description',
        'base_cost',
        'estimated_duration'
    ];

    //protected $table = 'treatment_types';

    public function treatment() : HasMany{
        return $this->hasMany(Treatment::class, 't_treatments_types_id');
    }

    public function date() : HasMany{
        return $this->hasMany(Date::class, 'd_treatments_types_id');
    }

    public function billing_detail() : HasMany{
        return $this->hasMany(Billing_detail::class);
    }
}
