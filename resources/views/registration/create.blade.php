@extends ('layouts.master')


    @section ('content')


        <div class="ml-3  col-8">
        <form  method='POST' action='/register'>
        {{ csrf_field() }}
                <h1>Register</h1>
        
                    <div class="form-group">

                            <label for="name"> Name:</label>

                            <input id="name" name="name" type="text" class="form-control">

                    </div>

                    <div class="form-group">

                            <label for="email">Email</label>

                            <input id="email" name="email" type="text" class="form-control">

                    </div>

                    <div class="form-group">

                            <label for="password">Password</label>
                            
                            <input id="password" name="password" type="password" class="form-control">
                    

                    </div>

                    <div class="form-group">

                        <label for="password_confirmation">Password confirmation </label>

                        <input id="password_confirmation" name="password_confirmation" type="password" class="form-control">


                    </div> 

                    <button type="submit" class="btn btn-primary"> Register</button>    


                        @include('layouts.errors') 
                   
                    
        </form>

        
        </div>

    @stop