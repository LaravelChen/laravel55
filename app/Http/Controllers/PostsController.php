<?php

namespace App\Http\Controllers;

use App\Post;
use App\Rules\SimpleRule;
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
            'title' => new SimpleRule(),
            'body' => 'required'
        ]);
        Post::create($post);
        return 'Done';
    }
}
