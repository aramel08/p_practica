<?php

namespace App\Http\Controllers;

use App\Models\Patrocinio;
use App\Http\Requests\StorePatrocinioRequest;
use App\Http\Requests\UpdatePatrocinioRequest;

class PatrocinioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePatrocinioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatrocinioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patrocinio  $patrocinio
     * @return \Illuminate\Http\Response
     */
    public function show(Patrocinio $patrocinio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patrocinio  $patrocinio
     * @return \Illuminate\Http\Response
     */
    public function edit(Patrocinio $patrocinio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatrocinioRequest  $request
     * @param  \App\Models\Patrocinio  $patrocinio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatrocinioRequest $request, Patrocinio $patrocinio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patrocinio  $patrocinio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patrocinio $patrocinio)
    {
        //
    }
}
