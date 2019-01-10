<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
        'address','personalid','bod','pob','userid'

    ];

    public function Profil() {
        return $this->hasOne(User::class,'id','user_id');
    }
}
