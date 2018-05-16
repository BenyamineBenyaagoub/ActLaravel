@extends ('layouts.master')


    @section ('content')


        <div class="ml-3  col-8">
        <form   method='POST' action='/login'>
        {{ csrf_field() }}
                <h1>Login</h1>
                

                    <div class="form-group">

                            <label style="color:black !important" for="email"> Email</label>

                            <input id="email" name="email" type="text" class="form-control">

                    </div>

                    <div class="form-group">

                            <label style="color:black !important" for="password"> Pass</label>
                            
                            <input id="password" name="password" type="password" class="form-control">
                    

                    </div>
                   
                    <button type="submit" class="btn btn-primary"> Login </button>
        </form>

        
        </div>

    @stop