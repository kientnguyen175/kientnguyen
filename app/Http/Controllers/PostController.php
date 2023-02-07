<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\GetPostsRequest;
use Exception;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->paginate(10);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function storePost(StorePostRequest $request)
    {
        try {
            Post::create([
                'user_id' => Auth::id(),
                'title' => 'default',
                'html_content' => $request->htmlContent
            ]);
            $response = [
                'status' => 'successful'
            ];
        } catch (Exception $e) {
            $response = [
                'status' => 'failed',
                'message' => $e->getMessage()
            ];
        }

        return response()->json($response);
    }

    public function getPosts(GetPostsRequest $request)
    {
        $perPage = 1;
        $page = isset($request->page) ? (int) $request->page : 1;
        if ($page > 0) {
            $offset = $perPage * ($page - 1);
        } else {
            return [
                'status' => 'failed',
                'message' => 'The page is not available'
            ];
        }

        $posts = Post::with('user')->offset($offset)->limit($perPage + 1)->get();
        if (count($posts) > $perPage) {
            $hasNextPage = true;
            $posts = $posts->slice(0, -1);
        } else {
            $hasNextPage = false;
        }
        $hasPrevPage = ($offset != 0) ? true : false; 

        return response()->json([
            'status' => 'successful',
            'posts' => $posts,
            'pagination' => [
                'currentPage' => $page,
                'hasNextPage' => $hasNextPage,
                'hasPrevPage' => $hasPrevPage
            ]
        ]);
    }
}
