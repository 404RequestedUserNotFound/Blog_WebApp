<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Comment::all(); //fetch all blog posts from DB
        return view('comment.index', [
                'posts' => $posts,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comment.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newPost = Comment::create([
            'comment' => $request->comment
        ]);

        return redirect('comment/' . $newPost->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        return view('comment.show', [
            'post' => $comment,
        ]); //returns the view with the post
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        return view('comment.edit', [
            'post' => $comment,
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        $comment->update([
            'comment' => $request->comment,
            'body' => $request->body
        ]);

        return redirect('comment/' . $comment->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect('/comment');
    }
}
