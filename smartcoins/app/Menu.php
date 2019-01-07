<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    public $fillable = [
        'parent',
        'text',
        'link',
        'icon',
        'class',
        'attr',
        'level',
        'active',
        'role',
        'permission',
    ];
}
