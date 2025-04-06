<?php

namespace App\Http\Controllers;

use App\Models\job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(){
     $job = job::with(['employee', 'tags'])->where('title' , "LIKE" , "%".request('q')."%")->get();
      return view('jobs.results' , ['jobs'=>$job]);
    
    }
}
