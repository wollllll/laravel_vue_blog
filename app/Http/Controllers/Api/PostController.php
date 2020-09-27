<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

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
        return response([
            'post' => Post::where('slug', Arr::get($request->all(), 'slug'))->first()
        ]);
    }
}
