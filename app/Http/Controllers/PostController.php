<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Exception;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function store(StorePostRequest $request)
    {
        $response = [
            'status' => 'successful'
        ];

        try {
            Post::create([
                'user_id' => Auth::id(),
                'title' => 'default',
                'html_content' => $request->htmlContent
            ]);
        } catch (Exception $e) {
            $response = [
                'status' => 'failed',
                'message' => $e->getMessage()
            ];
        }

        return response()->json($response);
    }
}
