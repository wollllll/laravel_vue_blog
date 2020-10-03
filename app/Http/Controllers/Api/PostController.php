<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function getAll()
    {
        return response([
            'posts' => Post::paginate(6)
        ]);
    }

    public function getPostBySlug(Request $request)
    {
        $post = Post::where('slug', Arr::get($request->all(), 'slug'))->first();
        $prevPost = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->limit('1')->first();
        $nextPost = Post::where('id', '>', $post->id)->orderBy('id')->limit('1')->first();

        return response([
            'post' => $post,
            'prevPost' => $prevPost,
            'nextPost' => $nextPost
        ]);
    }
}
