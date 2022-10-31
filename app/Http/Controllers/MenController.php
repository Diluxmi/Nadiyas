<?php

namespace App\Http\Controllers;

use App\Models\Men;
use Illuminate\Http\Request;

class MenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(admin.men.index);
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
     * @param  \App\Models\Men  $men
     * @return \Illuminate\Http\Response
     */
    public function show(Men $men)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Men  $men
     * @return \Illuminate\Http\Response
     */
    public function edit(Men $men)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Men  $men
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Men $men)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Men  $men
     * @return \Illuminate\Http\Response
     */
    public function destroy(Men $men)
    {
        //
    }
}
