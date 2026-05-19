<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\TableUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        // $userAge = Post::where('text', 'LIKE', '%$Laravel%')->orWhere('view_count', '>', 1000)->skip(5)->take(10)->get();
        // $dropPostDate = Post::whereNotNull('published_at')->whereDate('created_at', '2026-02-27')->get();
        // return $userAge . '<p>A</p>' . $dropPostDate;
        
        // $posts = Post::where('id', '>', 3)->get();
        // $user = TableUsers::find(3);

        // $user = TableUsers::find(1);
        // $user->name = 'denis';
        // $user->save();

        // $post = Post::find(1);
        // dump($post->thumbnail->path);

        // $post = Post::find(1);
        // dump($post->categories);
    }
}
