<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dentist extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'email',
        'phone_number',
        'description_professional',
        'speciality',
        'license_number'
    ];

    public function date() : HasMany{
        return $this->hasMany(Date::class);
    }
}
