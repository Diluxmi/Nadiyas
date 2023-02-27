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

    
    public function edit(Photo $photo){
        $products=Product::all();
        return view('admin.photo.edit',compact('photo','products'));
    }


    public function update(PhotoUpdateRequest $request, Photo $photo)
    {
        $data = $request->validated();
        
        $photo->updated($data);
       //dd($data);
        return redirect()->route('photo.index')->with('success','Photo has been update successful!');
    }

    public function delete(Photo $photo){
        return view('admin.photo.delete',compact('photo'));
    }

    public function destroy(Photo $photo)
    {
        $photo->delete();
        return redirect()->route('photo.index')->with('success','Photo has been deleted succesfu!');
    }
}
