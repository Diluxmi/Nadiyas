<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Women;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\WomenStoreRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class WomenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Women $women)
    {
     $womens=Women::orderBy('id','asc')->paginate('12');
        return view('admin.women.index',compact('womens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.women.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WomenStoreRequest $request)
    {
        
        $data=$request->validated();
        $file=$request->file('image');
        $name=$file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        if($request->has('image')){
            $path=$request->file('image')->store('images','public');
        }
        $womenproduct=Women::create([
            'category'=>$data['category'],
            'size'=>$data['size'],
            'style'=>$data['style'],
            'material'=>$data['material'],
            'materialstyle'=>$data['materialstyle'],
            'colour'=>$data['colour'],
            'price'=>$data['price'],
            'image'=>$path,
            'actual_filename'=>$name,
            'extension'=>$extension,
        ]);    
        return redirect()->route('women.index')->with('success','women product has been created successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Women  $women
     * @return \Illuminate\Http\Response
     */
    public function show(Women $women)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Women  $women
     * @return \Illuminate\Http\Response
     */
    public function edit(Women $women)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Women  $women
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Women $women)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Women  $women
     * @return \Illuminate\Http\Response
     */
    public function destroy(Women $women)
    {
        //
    }
}
