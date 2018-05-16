@extends ('layouts.master')

@section('content')
    

<div class="card mb-3"  style="color:black ;">
  <div class="card-body">
    <h3 class="card-title">{{ $post->title }}</h3>
    <h6 class="card-subtitle mb-2 text-muted">{{$post->created_at->diffForHumans()}} by: <a href="#"> {{$post->user->name}} <a></h6>
    <p class="card-text">{{$post->body}}</p>
    
    
  </div>
</div>

<div style="color:black" class="card" style="width: 18rem;">
  <div class="card-body">
    <h3 class="card-title">Comments</h3>
    @foreach($post->comment as $c)
    <p class="card-text">  {{$c->body}}</p>
    <p class="card-text">  {{$c->created_at->diffForHumans()}} by: <a href="#"> Mark <a>  </p>
   @endforeach

   <form>
  <div class="form-group">
    <label for="exampleInputEmail1">New comment:</label>
    <textarea name="comment" id="" class="form-control" cols="30" rows="10"></textarea>
    
    <small id="emailHelp" class="form-text text-muted">Post ur comment</small>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>


      

@stop

