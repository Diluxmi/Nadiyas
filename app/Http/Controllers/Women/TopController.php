<?php

namespace App\Http\Controllers\Women;

use App\Http\Controllers\controller;
use App\Models\Women\Top;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\TopStoreRequest;
use App\Http\Requests\TopUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class TopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Top $top)
    {
        $tops =Top ::orderBy('id','asc')->paginate('12');
        return view('women.top.index',compact('tops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Top $top)
    {
           
        return view('women.top.create',compact('top'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TopStoreRequest $request)
    {
        $data=$request->validated();
        $file=$request->file('image');
        $name=$file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        if($request->has('image')){
            $path=$request->file('image')->store('image','public');
        }

            $top = Top::create([
                'name'=>$data['name'],
                'size'=>$data['size'],
                'material_style'=>$data['material_style'],
                'material'=>$data['material'],
                'price'=>$data['price'],
                'colour'=>$data['colour'],
                'image'=>$path,
                'actual_filename'=>$name,
                'extension'=>$extension,

            ]);
            return redirect()->route('top.index')->with('success','Top has been created successfuly!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Top  $top
     * @return \Illuminate\Http\Response
     */
    public function show(Top $top)
    {
        
        return view('women.top.show',compact('top'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Top  $top
     * @return \Illuminate\Http\Response
     */
    public function edit(Top $top)
    {
        return view('women.top.edit',compact('top'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Top  $top
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Top $top)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Top  $top
     * @return \Illuminate\Http\Response
     */
    public function delete(Top $top){
        return view('women.top.delete',compact('top'));
    }


    public function destroy(Top $top){
        $top->delete();
        return redirect()->route('top.index')->with('Success','Top details has been deleted successfuly!');
    }
}
