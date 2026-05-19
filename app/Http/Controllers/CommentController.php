<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function show()
    {
        // $comment = Comment::find(1);
        // dump($comment);
        // dump($comment->post);
        // dump($comment->user);

        // $comments = Comment::all();
        $comments = Comment::with(['post', 'user'])->get();
        foreach($comments as $comment){
            dump($comment);
            dump($comment->post);
            dump($comment->user);
        }
    }
}
