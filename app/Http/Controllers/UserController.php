<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $posts = $user->posts()->paginate(10);

        return view('user.index', [
            'user' => $user,
            'posts' => $posts
        ]);
    }
}
