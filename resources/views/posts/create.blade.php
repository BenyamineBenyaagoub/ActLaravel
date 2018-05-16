@extends ('layouts.master')


    @section ('content')
        <h1 style="color:black ">Ceate a Post</h1>
        <form  method='POST' action='/posts'>
        {{ csrf_field() }}
            <div  style="color:black " class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='title' >
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div style="color:black " class="form-group">
                <label for="exampleInputPassword1">Body</label>
                <textarea class="form-control" name="body" id="exampleInputPassword1" id="" cols="30" rows="10"></textarea>
                
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
            
        </form>  
        @include('layouts.errors')    
                 
    @stop