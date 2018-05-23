@extends ('layouts.master')

@section('content')
    

    <div class="col-12 blog-main">
        @foreach($posts as $post)
             @include('posts.post')
        @endforeach
        </div>
    <nav class="blog-pagination">

        <a href="" class="btn">Older</a>
        <a href="" class="btn">Newer</a>
    
    </nav>


@stop

