<?php

namespace App\Http\Controllers\Women;

use App\Http\Controllers\Controller;
use App\Models\Women\Frock;
use Illuminate\Http\Request;
use App\Http\Requests\FrockStoreRequest;
use Illuminate\Support\Facsdes\Auth;
use Illuminate\Support\Facades\Hash;

class FrockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Frock $frock)
    {
        $frocks=Frock::orderBy('id','asc')->paginate('12');
        return view('women.frock.index',compact('frocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('women.frock.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FrockStoreRequest $request)
    {
        $data=$request->validated();
        $file=$request->file('image');
        $name=$file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        if($request->has('image')){
        $path=$request->file('image')->store('image','public');
    }
    
    $frock =Frock::create([
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

    return redirect()->route('frock.index')->with('success','frock has been created successfuly');
}
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\frock  $frock
     * @return \Illuminate\Http\Response
     */
    public function show(Frock $frock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\frock  $frock
     * @return \Illuminate\Http\Response
     */
    public function edit(Frock $frock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\frock  $frock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Frock $frock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\frock  $frock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Frock $frock)
    {
        //
    }
}
