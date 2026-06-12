<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Payment_type extends Model
{
    protected $fillable = [
        'name'
    ];

    public function payment() : HasMany{
        return $this->hasMany(Payment::class);
    }
}
