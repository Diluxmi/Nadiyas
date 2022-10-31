<?php

namespace App\Http\Controllers;

use App\Models\Kids;
use Illuminate\Http\Request;

class KidsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kids.index');
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
     * @param  \App\Models\Kids  $kids
     * @return \Illuminate\Http\Response
     */
    public function show(Kids $kids)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kids  $kids
     * @return \Illuminate\Http\Response
     */
    public function edit(Kids $kids)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kids  $kids
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kids $kids)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kids  $kids
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kids $kids)
    {
        //
    }
}
