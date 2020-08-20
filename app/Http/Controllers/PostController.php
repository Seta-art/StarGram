<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        request()->validate([
         'caption' => ['required', 'string'],
         'image' => ['required', 'image']
        ]);
    }
}
