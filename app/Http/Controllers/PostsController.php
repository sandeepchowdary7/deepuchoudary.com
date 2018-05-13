<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Repositories\PostsRepositoryContract;

class PostsController extends Controller
{
    public function index(PostsRepositoryContract $postsRepository)
    {
        $posts = $postsRepository->all();

        return view('posts.index', compact('posts'));
    }
}
