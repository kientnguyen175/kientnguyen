<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    protected $table = 'social_media';

    public static function getAllDisplayedOfRootUser()
    {
        return self::where('is_displayed', 1)->whereNull('user_id')->get();
    }
}
