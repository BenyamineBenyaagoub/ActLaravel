@extends ('layouts.master')

@section('content')
    

    <div class="col-8 blog-main"></div>
        @foreach($posts as $post)
             @include('posts.post')
        @endforeach
    <nav class="blog-pagination">

        <a href="" class="btn">Older</a>
        <a href="" class="btn">Newer</a>
    
    </nav>


@stop

