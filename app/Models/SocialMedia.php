<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    protected $table = 'social_media';

    public static function getAll()
    {
        $result = [];

        $socialMediaFromDB = self::all()->toArray();
        foreach ($socialMediaFromDB as $item) {
            $result[$item['slug']] = $item;
        }

        return $result;
    }
}
