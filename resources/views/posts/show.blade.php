@extends ('layouts.master')

@section('content')
    

<div class="card mb-3"  style="color:black ;">
  <div class="card-body">


    <h3 class="card-title">{{ $post->title }}</h3>

    <h6 class="card-subtitle mb-2 text-muted">{{$post->created_at->diffForHumans()}} by: <a href="#"> {{$post->user->name}} <a></h6>
    
    
    <p class="card-text">{{$post->body}}</p>

    @if(count($post->tags))

      @foreach( $post->tags as $tag)
       
             <a  class="btn rounded mt-5" href="/posts/tags/{{$tag->name}}">{{$tag->name}}</a>

   

     
      @endforeach


    @endif
    
    
  </div>
</div>











<div style="color:black" class="card" style="width: 18rem;">
  <div class="card-body">
    <h3 class="card-title">Comments</h3>
    @foreach($post->comments as $c)
    <p class="card-text">  {{$c->body}}</p>
    <p class="card-text">  {{$c->created_at->diffForHumans()}} by: <a href="#"> {{$c->post->user->name}} <a>  </p>
   @endforeach

          <form  method='POST' action='/posts/{{ $post->id }}/comments'>
            {{ csrf_field() }}
            
            <div class="form-group">

            
              
              <textarea name="body" placeholder="comment here!" class="form-control" cols="30" rows="10"></textarea>
              
              <small id="emailHelp" class="form-text text-muted">Post ur comment</small>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            @include('layouts.errors')   
          </form>



  </div>
</div>


      

@stop

