<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserWallet extends Model
{
    protected $fillable = [
        'user_id','address','key_file_content','key_file_name','mnemonic','path','private_key','wallet_address'
    ];
    public function UserWallet() {
        return $this->hasOne(User::class,'id','user_id');
    }
}
