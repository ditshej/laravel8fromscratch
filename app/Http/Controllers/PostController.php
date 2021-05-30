<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('posts.index', [
            'posts' => Post::latest()
                ->with('category', 'author')
                ->filter(request(['search', 'category', 'author']))
                ->get(),
        ]);
    }

    public function show(Post $post): Factory|View|Application
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
