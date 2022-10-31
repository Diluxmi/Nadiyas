<?php

namespace App\Http\Controllers\Women;

use App\Http\Controllers\Controller;
use App\Models\Women\Jeans;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\JeansStoreRequest;
use App\Http\Requests\JeansUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class JeansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Jeans $jeans)
    {
        
        $jeanses = Jeans::orderBy('id','asc')->paginate('12');
        
       return view('women.jeans.index',compact('jeanses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Jeans $jeans)
    {
        return view('women.jeans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JeansStoreRequest $request)
    {
        $data=$request->validated();
        $file=$request->file('image');
        $name=$file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        if($request->has('image')){
            $path=$request->file('image')->store('image','public');
        }
        $jeans=Jeans::create([
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
        return redirect()->route('jeans.index')->with('success','women product has been created successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jeans  $jeans
     * @return \Illuminate\Http\Response
     */
    public function show(Jeans $jeans)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jeans  $jeans
     * @return \Illuminate\Http\Response
     */
    public function edit(Jeans $jeans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jeans  $jeans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jeans $jeans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jeans  $jeans
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jeans $jeans)
    {
        //
    }
}
