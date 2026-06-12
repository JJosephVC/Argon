<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Patient extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'identity_card',
        'email',
        'gender',
        'birthdate',
        'phone_number',
        'address'
    ];

    public function date() : HasMany{
        return $this->hasMany(Date::class);
    }

    public function record() : HasOne{
        return $this->hasOne(Record::class);
    }
}
