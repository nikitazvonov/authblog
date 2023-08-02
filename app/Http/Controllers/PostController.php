<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
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
