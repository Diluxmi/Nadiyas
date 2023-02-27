<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Size;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\SizeStoreRequest;
use App\Http\Requests\SizeUpdateRequest;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $sizes=Size::orderBy('id','desc')->paginate('12'); 
        //dd($sizes);
        return view('admin.size.index',compact('sizes'));
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
        return view('admin.size.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SizeStoreRequest $request)
    {
        $data = $request->validated();
        $size=Size::create([
        'size'=>$data['size'],
        'product_id'=>$data['product_id'],
            
        ]);
        return redirect()->route('size.index')->with('success','category has been created successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function delete(Size $size){
        return view('admin.size.delete',compact('size'));
    }

    public function destroy(Size $size)
    {
        $size->delete();
        return redirect()->route('size.index')->with('success','Size has been deleted succesfu!');
    }
}
