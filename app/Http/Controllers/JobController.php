<?php

namespace App\Http\Controllers;

use App\Models\job;

use App\Http\Requests\UpdatejobRequest;
use App\Models\tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = job::latest()->with(['employee', 'tags'])->get()->groupBy('featured');
        return view('jobs.index' , [
            'jobs'=> $jobs[0],
            'featuredjobs'=> $jobs[1],
            'tags'=>tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("jobs.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
       
     $att=  $request->validate([
        'title'=>['required'],
        'salary'=>['required'],
        'schedule'=>['required' , Rule::in(['Full Time' , 'Part Time'])],
        'location'=>['required'],
        'url'=>['required'],
        'tags' => ['nullable'],
        

       ]);
   
   
      $att['featured'] = $request->has('featured');
    
      
    $job=  Auth::user()->employee->job()->create( Arr::except($att , 'tags'));
if ($att['tags']) {
    foreach(explode( ',', $att['tags'])as $tag){
      $job->tag($tag);
    }

    return redirect('/');
}
    

    }

    /**
     * Display the specified resource.
     */
    public function show(job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatejobRequest $request, job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(job $job)
    {
        //
    }
}
