<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\JobStoreRequest;
use App\Http\Requests\JobUpdateRequest;

class JobController extends Controller
{
   
    public function index()
    {
        $jobs = Job::orderBy('id', 'desc')->paginate(20);
        return view('admin.job.index',compact('jobs'));
    }

   
    public function cindex(Job $job){
        $departments =Department::all();
        $jobs=Job::orderBy('id','desc')->paginate(20);
        return view('admin.job.cindex',compact('jobs','departments','job'));
    }
    public function create()
    {
        return view('admin.job.create');
    }

    
public function store(JobStoreRequest $request)
    {
        //
        $data = $request->validated();
        $file = $request->file('filename');
        $name = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        if($request->has('filename')){
            $path=$request->file('filename')->store('aboutus','public');
        }
         $job=Job::create([
            'jobrole'=>$data['jobrole'],
            'filename' => $path,
            'actual_filename' => $name,
            'extension'=>$extension,
            
        ]);
        return redirect()->route('job.index')->with('success', 'Job Ad has been created successfuly!');
    } 

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    public function delete(Job $job){
        return view('admin.job.delete',compact('job'));
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->route('job.index')->with('success','Job Ad has been deleted succesfu!');
    }
}


