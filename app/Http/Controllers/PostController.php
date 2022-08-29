<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }
}
