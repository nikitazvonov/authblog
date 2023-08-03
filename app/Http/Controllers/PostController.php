<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function updatePost (Post $post, Request $request) {
        if (auth()->user()->id !== $post['user_id']) {
            return redirect('/');
        }

        $incomingField = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $incomingField['title'] = strip_tags($incomingField['title']);
        $incomingField['content'] = strip_tags($incomingField['content']);

        $post->update($incomingField);
        return redirect('/');
    }
    public function showEditScreen (Post $post) {
        if (auth()->user()->id !== $post['user_id']) {
            return redirect('/');
        }
        return view('edit-post', ['post' => $post]);
    }
    public function createPost (Request $request) {
        $incomingField = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $incomingField['title'] = strip_tags($incomingField['title']);
        $incomingField['content'] = strip_tags($incomingField['content']);
        $incomingField['user_id'] = auth()->id();
        Post::create($incomingField);
        return redirect('/');
    }
}
