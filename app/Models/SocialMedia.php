<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    protected $table = 'social_media';

    public static function getAllDisplayed()
    {
        return self::where('is_displayed', 1)->get();
    }
}
