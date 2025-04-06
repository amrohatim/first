<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.login');
    }

   
    public function store(Request $request)
    {
        $validuser = $request->validate([
            "email"=>["required"],
            "password"=>["required"]
        ]);

       if (!Auth::attempt($validuser ,remember:true)) {
        throw ValidationException::withMessages(
            [
                "email"=>'please enter correct email',
                "password" =>"please enter valid password"
            ]
            );
       }
       request()->session()->regenerate();
    
            return redirect('/');
        
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
