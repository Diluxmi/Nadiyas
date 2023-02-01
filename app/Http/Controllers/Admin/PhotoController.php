<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\PhotoStoreRequest;


class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Photo $photo)
    {
        $photos=Photo::orderBy('id','desc')->paginate('12'); 
        return view('admin.photo.index',compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
       $products['']= '---Choose your product---';
        return view('admin.photo.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhotoStoreRequest $request)
    {
            $data = $request->validated();
        if ($request->has('image')){
           $file=$request->file('image');
           $name = $file->getClientOriginalName();
           $filename = date('YmdHi').$file->getClientOriginalName();
          
           $extension = $file->getClientOriginalExtension();
           $path=$request->file('image')->store('images','public');
       }
       
       $photo =Photo::create([
         
           'product_id'=>$data['product_id'],
           'image'=>$path,
           'actual_filename'=>$name,
           'extension'=>$extension,
         ]);
         
         return redirect()->route('photo.index')->with('success','photo created successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        //
    }
}
