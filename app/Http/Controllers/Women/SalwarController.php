<?php

namespace App\Http\Controllers\Women;

use App\Http\Controllers\Controller;
use App\Models\Women\Salwar;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\SalwarStoreRequest;
use App\Http\Requests\SalwarUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SalwarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $salwars = Salwar::orderBy('id','asc')->paginate('12');
        return view('women.shalwar.index',compact('salwars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('women.Shalwar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalwarStoreRequest $request)
    {
       
        $data=$request->validated();
        $file=$request->file('image');
        $name=$file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        if($request->has('image')){
            $path=$request->file('image')->store('image','public');
        }
        $salwar=Salwar::create([
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
        return redirect()->route('salwar.index')->with('success','Shalwar has been created successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salwar  $salwar
     * @return \Illuminate\Http\Response
     */
    public function show(Salwar $salwar)
    {
        return view('women.shalwar.show',compact('salwar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salwar  $salwar
     * @return \Illuminate\Http\Response
     */
    public function edit(Salwar $salwar)
    {
        return view('women.shalwar.edit',compact('salwar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Salwar  $salwar
     * @return \Illuminate\Http\Response
     */
    public function update(SalwarUpdateRequest $request, Salwar $salwar)
    {
        $data = $request->validated();
        $salwar->updated($data);

        return redirect()->route('salwar.index')->with('success','Shalwar  has been updated successfuly!');
    }

    public function delete(Salwar $salwar){
        return view('women.shalwar.delete',compact('salwar'));
    }

    public function destroy(Salwar $salwar)
    {
        $salwar->delete();
        return redirect()->route('salwar.index')->with('success','shalwar has been deleted successfuly!');
    }
}
