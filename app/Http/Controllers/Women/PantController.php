<?php

namespace App\Http\Controllers\Women;

use App\Http\Controllers\Controller;
use App\Http\Requests\PantStoreRequest;
use App\Http\Requests\PantUpdateRequest;
use App\Models\Women\Pant;

use Illuminate\Http\Response;
use Illuminate\Http\Request;

class PantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Pant $pant)
    {
        return view('women.pant.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Pant $pant)
    {
        return view('women.pant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PantStoreRequest $request )
    {
  
        $data=$request->validated();
        $file=$request->file('image');
        $name=$file->getClientOriginalName();
        $extension=$file->getClientOriginalExtension();
        if($request->has('image')){
            $path=$request->file('image')->store('image','public');
        }
        $pant=Pant::create([
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
        return redirect()->route('pant.index')->with('success','Pant has been create successfuly!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pant  $pant
     * @return \Illuminate\Http\Response
     */
    public function show(Pant $pant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pant  $pant
     * @return \Illuminate\Http\Response
     */
    public function edit(Pant $pant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pant  $pant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pant $pant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pant  $pant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pant $pant)
    {
        //
    }
}
