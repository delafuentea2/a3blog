<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
class ShowController extends Controller
{
    public function index()
    {
        return view('show');
    }
    
    public function show($id)
{
    $post = Post::find($id);
    $comments = Comment::where('post_id', $id)->get();
    
    return view('posts.show', compact('post', 'comments'));
}

}
