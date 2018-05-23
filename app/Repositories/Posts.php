<?php

namespace App\Repositories;
use Carbon\Carbon;
use App\Post;

class Posts 
{

public function all(){
 
    return Post::orderBy('created_at','desc') ->filter(request(['month','year']))->get();

}













}
