<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    public $fillable = [
        'user_id',
        'referral_type',
        'referral_code',
        'referral_link',
        'status',
    ];
}
