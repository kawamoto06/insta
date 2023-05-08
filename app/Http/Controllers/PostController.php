<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = Auth::user();
        $posts = Post::with('user')->orderBy('created_at', 'desc')->get();

        return view('posts.index', compact('posts'), ['user' => $user]);

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
        'content' => 'required|string|max:255',]);
        
        if (Auth::check()) {
            $post = new Post();
            $post->user_id = auth()->id();
            $post->content = $request->content;
            $post->save();

        return redirect()->route('home');
        }
        // ログインしていない場合はログインページにリダイレクト
        else {
            return redirect()->route('login');
        }

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
    public function test()
    {
        return view('posts.test');
    }
}
