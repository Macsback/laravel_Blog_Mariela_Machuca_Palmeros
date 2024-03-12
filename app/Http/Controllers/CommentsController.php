<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentsController extends Controller
{
   public function index(){
        $comment = Comment::all();
        return view ('comments.index', compact('comment'));
    }

   /* public function index()
    {
        return view('comments.index')
            ->with('posts', Post::orderBy('updated_at', 'DESC')->get());
    }*/
}
