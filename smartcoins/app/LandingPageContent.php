<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LandingPageContent extends Model
{
    public $fillable = [
        'key',
        'json_data'
    ];

    public static function getJsonData($key, $section, $json_key)
    {
        $data = LandingPageContent::where('key', $key)->first();
        if(is_null($data)) {
            return NULL;
        } else {
            return json_decode($data->json_data)->$section->$json_key;
        }
    }

}
