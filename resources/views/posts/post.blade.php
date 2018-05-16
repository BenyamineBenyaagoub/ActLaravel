

<div class="card mb-3"  style="color:black ;">
  <div class="card-body">
    <h3 class="card-title">{{ $post->title }}</h3>
    <h6 class="card-subtitle mb-2 text-muted">{{$post->created_at->diffForHumans()}} by: <a href="#"> {{$post->user->name}} <a></h6>
    <p class="card-text">{{$post->body}}</p>
    <a href="/posts/{{$post->id}}" class="card-link" >Learn more</a>
    
  </div>
</div>