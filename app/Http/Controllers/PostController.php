<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        /*$posts = Post::query()
                ->where('posts_desc.lang', '=', app()->getLocale())
                ->leftJoin('posts_desc', 'posts.id', '=', 'posts_desc.post_id')->paginate();*/
        $posts = Post::query()->with('desc')->paginate();
        return view('post.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::query()->findOrFail($id);
        return view('post.show', compact('post'));
    }


}
