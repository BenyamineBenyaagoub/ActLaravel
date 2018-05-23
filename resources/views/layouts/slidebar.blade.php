
<div class="p-3">

            <h4 class="font-italic">Archives</h4>

            <ol class="list-unstyled mb-0">

            @foreach( $archives as $a )

            <li><a href="/?month={{$a['month']}}&year={{$a['year']}} ">


            {{$a['month']}} - {{$a['year']}}
            </a></li>
            
            @endforeach
              
            </ol>
 </div>

 
<div class="p-3">

<h4 class="font-italic">Tags</h4>

<ol class="list-unstyled mb-0">

@foreach( $tags as $a )

<li><a href="/posts/tags/{{$a}}">


{{$a}}

</a></li>

@endforeach
  
</ol>
</div>