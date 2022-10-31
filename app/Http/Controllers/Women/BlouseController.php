<?php

namespace App\Http\Controllers\Women;

use App\Http\Controllers\Controller;
use App\Models\Women\Blouse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\BlouseStoreRequest;
use App\Http\Requests\BlouseUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class BlouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Blouse $blouse)
    {
        $blouses=Blouse::orderBy('id','asc')->paginate('12');
    return view('women.blouse.index',compact('blouses'));
    }

    public function create( ){

        return view('women.blouse.create');
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlouseStoreRequest $request)
    {
        $data=$request->validated();
        $file=$request->file('image');
        $name=$file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        if($request->has('image')){
            $path=$request->file('image')->store('image','public');
        }
        $blouse=Blouse::create([
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
        return redirect()->route('blouse.index')->with('success','Blouse has been created successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blouse  $blouse
     * @return \Illuminate\Http\Response
     */
    public function show(Blouse $blouse)
    {
       $blouses=Blouse::orderBy('id','asc')->paginate('12');
        return view('women.blouse.show',compact('blouses'));
    }

    public function edit(Blouse $blouse){
    
        return view('women.blouse.edit',compact('blouse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blouse  $blouse
     * @return \Illuminate\Http\Response
     */
    public function update(BlouseUpdateRequest $request, Blouse $blouse)
    {
        
        $data=$request->validated();
        $blouse->updated($data);
       
        return redirect()->route('blouse.index',compact('blouse'))->with('success','Your Subject Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blouse  $blouse
     * @return \Illuminate\Http\Response
     */
    public function delete(Blouse $blouse){
        return view('women.blouse.delete',compact('blouse'));
    }
    public function destroy(Blouse $blouse){
        $blouse->delete();
        return redirect()->route('blouse.index')->with('success','blouse details has been deleted successfuly!');
    }
}
