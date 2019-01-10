<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;

class WhitePaper extends Model implements HasMedia
{
    use HasMediaTrait;

    public $fillable = [
    	'title','description','version'
    ];
}
