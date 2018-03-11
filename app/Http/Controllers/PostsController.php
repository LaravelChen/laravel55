<?php

namespace App\Http\Controllers;

//use App\Http\Facades\DemoFacade;
use App\Post;
use App\Rules\SimpleRule;

//use Facades\ {
//  App\Http\Com\Demo
//};

class PostsController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store()
    {
        $post = \request()->validate([
            'title' => [
                'required',
                new SimpleRule(),
            ],
            'body' => 'required',
        ]);
        Post::create($post);
        return \request()->get('_token');
    }

    public function facade()
    {
        return \DemoFacade::demo();
    }
}
