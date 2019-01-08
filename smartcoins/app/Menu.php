<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    public $fillable = [
        'menu_name',
        'menu_link',
        'menu_text',
        'menu_icon',
        'menu_class',
        'menu_attr',
        'active',
        'role',
        'permission',
    ];
}
