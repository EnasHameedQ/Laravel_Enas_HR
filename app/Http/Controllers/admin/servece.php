<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class servece extends Controller
{
    public function index()
    {
        return view('admin.service');
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
     * @param  \App\Models\servece  $service
     * @return \Illuminate\Http\Response
     */
    public function show(servece $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\servece  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(servece $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\servece  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, servece $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\servece  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(servece $service)
    {
        //
    }
}
