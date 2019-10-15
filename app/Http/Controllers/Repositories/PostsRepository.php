<?php


namespace App\Http\Controllers\Repositories;


use App\Post;

class PostsRepository
{
    public function index()
    {
        return Post::with(['category'])->orderBy('id', 'desc')->get();
    }
}
