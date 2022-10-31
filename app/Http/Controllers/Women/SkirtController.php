<?php

namespace App\Http\Controllers\Women;

use App\Http\Controllers\Controller;
use App\Models\Women\Skirt;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\SkirtStoreRequest;
use App\Http\Requests\SkirtUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SkirtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Skirt $skirt)
    {
        $skirts = Skirt::orderBy('id','asc')->paginate('12');
        
        return view('women.skirt.index',compact('skirts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Skirt $skirt)
    {
        return view('women.skirt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SkirtStoreRequest $request)
    {
        $data = $request->validated();
        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $extension =$file->getClientOriginalExtension();
        if($request->has('image')){
            $path=$request->file('image')->store('image','public');
        }

        $skirt = Skirt::create([
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
        return redirect()->route('skirt.index')->with('success','skirt has been created successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skirt  $skirt
     * @return \Illuminate\Http\Response
     */
    public function show(Skirt $skirt)
    {
        return view('women.skirt.index',compact('skirt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skirt  $skirt
     * @return \Illuminate\Http\Response
     */
    public function edit(Skirt $skirt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skirt  $skirt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skirt $skirt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skirt  $skirt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skirt $skirt)
    {
        //
    }
}
