<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;

class HomeController extends Controller
{
    public function index()
    {
        $socialMedia = SocialMedia::getAllDisplayedOfRootUser();

        return view('home.index', [
            'socialMedia' => $socialMedia
        ]);
    }
}
