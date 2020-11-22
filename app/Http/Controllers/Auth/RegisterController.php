<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class RegisterController extends Controller
{
  
     public function index (){

         return view('auth.register');
     }

     public function store(Request $request){

       
       // validate
       $this->validate($request,[

        'name'=>'required|max:255',
        'email'=>'required|email',
        'username'=>'required',
        'password'=> 'required|same:confirm_password' 
        

       ]);
       //store
       User::create([
           'name'=> $request->name,
           'email'=> $request->email,
           'username'=> $request->username,
           'password'=> Hash::make($request->password)

       ]);
        // Sign in
       auth()->attempt($request->only('email','password'));
       //redirect

       return redirect()->to('/dashboard');

      

     }
}
