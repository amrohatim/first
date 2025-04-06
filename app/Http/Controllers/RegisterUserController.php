<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;


class RegisterUserController extends Controller
{
   
    public function create()
    {
      return view('auth.register');
    }

 
    public function store(Request $request)
    {
   $uservalid =   $request->validate([
        'name'=>['required'],
        'email'=>['required' , 'email' , 'unique:users', 'max:253' , 'min:9'],
        'password'=>['required', 'confirmed' , Password::min(6)],
      ]);
      $empvalid = $request->validate([
        'empname'=>['required'],
        'logo'=>['required', File::types(['png', 'jpg' , 'webp' , 'svg'])]
      ]);
      $user= User::create($uservalid);
      $logopath= $request->logo->store('logos');
      $user->employee()->create([
          'name'=>$empvalid['empname'],

          'logo'=> $logopath,
      ]);
     
    

      return redirect('/');

    }

   

   
}
