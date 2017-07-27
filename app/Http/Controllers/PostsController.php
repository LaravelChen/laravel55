<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store()
    {
        $post = \request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        Post::create($post);
        return 'Done';
    }
}
