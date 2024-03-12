<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Cviebrock\EloquentSluggable\Services\SlugService;


class CommentsController extends Controller
{
  /* public function index(){
        $comment = Comment::all();
        return view ('comments.index', compact('comment'));
    }*/

    public function index()
    {
        return view('comments.index')
            ->with('comments', Comment::orderBy('updated_at', 'DESC')->get());
    }

    public function create()
    {
        return view('comments.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',

        ]);


        Comment::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => SlugService::createSlug(Comment::class, 'slug', $request->title),
            
            'user_id' => auth()->user()->id
        ]);

        return redirect('/comments')
            ->with('message', ' Your post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('comments.show')
            ->with('comment', Comment::where('slug', $slug)->first());
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $comment = Comment::where('slug', $slug);
        $comment->delete();

        return redirect('/comments')
            ->with('message', ' Your post has been deleted!');
    }
}
