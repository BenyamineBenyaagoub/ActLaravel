<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Repositories\Posts;
class PostsController extends Controller
{
    protected $posts;
    
    public function __construct( Posts $posts){

        $this->posts = $posts;

        $this->middleware('auth')->except(['index','show']);

    }




    public function index(){



        //$posts = Post::orderBy('created_at','desc') ->filter(request(['month','year']))->get();

        $posts = $this->posts->all();
        
        $archives = POST::archives();

        return  view('posts.index',compact('posts','archives'));

    }




    public function show(Post $post){

        return view('posts.show',compact('post'));

    }

    public function create(){

        return view('posts.create');

    }



    public function store(){

        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required'
        ]);

         auth()->user()->publish(
             new Post(request(['title','body']))
         );   

        //Post::create([
          //  'title' => request('title'),
            //'body' => request('body'),
            //'user_id' => auth()->id()
        //]);
        
        return redirect('/');
    }

    

}
