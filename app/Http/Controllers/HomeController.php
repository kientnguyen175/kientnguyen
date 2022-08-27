<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;

class HomeController extends Controller
{
    public function home()
    {
        $socialMedia = SocialMedia::getAllDisplayed();

        return view('home.index', [
            'socialMedia' => $socialMedia
        ]);
    }
}
