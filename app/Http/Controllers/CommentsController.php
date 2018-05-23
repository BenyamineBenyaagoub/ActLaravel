<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentsController extends Controller
{
    public function store(Post $post){

       
      //dd($post->id);
        Comment::create([
            
            
            'body' => request('body'),
            'post_id' => $post->id
            
        ]);
            

        session()->flash('message','Acabas de dar tu opinion');

        return back();
    }

}
