<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users= auth()->user()->following->pluck('user_id');
        $posts= Post::whereIn('user_id', $users)->with('user')->latest()->paginate(5);
        return view('posts.index', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
         'caption' => ['required', 'string'],
         'image' => ['required', 'image']
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        //$image=Image::make(public_path("/storage/{$imagePath}"))->fit(1200,1200);
        $image=Image::make(request('image')->getRealPath())->fit(1200,1200);
        //$image->save();
        $image->stream();
    
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath       // on ne peut pas mettre $data['image'] car c est un chemin temporaire et pas le chemin effectif de l'image
        ]);

        return redirect()->route('profiles.show', ['user' => auth()->user()]);
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
