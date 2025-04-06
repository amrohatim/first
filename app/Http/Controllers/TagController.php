<?php

namespace App\Http\Controllers;

use App\Models\tag;
use App\Http\Requests\StoretagRequest;
use App\Http\Requests\UpdatetagRequest;

class TagController extends Controller
{
   public function __invoke(Tag $tag){
    
      $jobs= $tag->jobs;

      return view('jobs.results' , ["jobs"=>$jobs]);

   } 
}
