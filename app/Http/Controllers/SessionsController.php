<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller


{

    public function __construct(){

        //$this->middleware('guest',['except'=> 'destroy' ] );
    }


    public function create(){

        return view('sessions.create');
    }




    public function destroy(){

        auth()->logout();

        return redirect('/');

    }




    public function store(){
       
        if(! auth()->attempt(request(['email','password']))) {

                return back(); 
        }
        session()->flash('message','Gracias por entrar de nuevo!');
        return redirect('/');
    }
}
