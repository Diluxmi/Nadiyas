<?php

namespace App\Http\Controllers;

use App\Models\Accessories;
use Illuminate\Http\Request;

class AccessoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return view('admin.accessories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Accesories  $accesories
     * @return \Illuminate\Http\Response
     */
    public function show(Accesories $accesories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accesories  $accesories
     * @return \Illuminate\Http\Response
     */
    public function edit(Accesories $accesories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accesories  $accesories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accesories $accesories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accesories  $accesories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accesories $accesories)
    {
        //
    }
}
