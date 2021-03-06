<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use App\User;
use App\Mail\WelcomeAgain ;
class RegistrationController extends Controller
{
    public function create(){
        return view('registration.create');
    }


    public function store(RegistrationRequest $request){
       
        
        
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
            ]);

        auth()->login($user);


        \Mail::to($user)->send(new WelcomeAgain($user));



        session()->flash('message','Gracias por registrarte!');

        return redirect('/');
    }




}
