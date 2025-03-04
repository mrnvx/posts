<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post= Post::all();
        return view('posts.index', ['posts' => $post]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = 1;
        Post::create($data);

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->all();
        $data['user_id'] = 1;
        // Post::create($data);

        $post->update($data);

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }

    public function addComment(Request $request, Comment $comment) {

        if ($post->comment()->where('id', $request['comment'])->exists()) {
            return redirect('/comment/' . $comment->id)->with('error', 'Comment is already in the comment!');
        }
        $post->comment()->attach($request['post']);
        
        return redirect('/comment/' . $comment->id)->with('success', 'Comment added successfully!');
    }
    public function removeComment(Request $request, Comment $comment) {
        
        
        $comment->comment()->detach($request['comment']);

        return redirect('/comment/' . $comment->id)->with('success', 'Comment removed successfully!');
    }

}
