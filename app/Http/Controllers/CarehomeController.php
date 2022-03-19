<?php

namespace App\Http\Controllers;

use App\Models\Carehome;
use App\Http\Requests\StoreCarehomeRequest;
use App\Http\Requests\UpdateCarehomeRequest;

class CarehomeController extends Controller
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
     * @param  \App\Http\Requests\StoreCarehomeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarehomeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carehome  $carehome
     * @return \Illuminate\Http\Response
     */
    public function show(Carehome $carehome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carehome  $carehome
     * @return \Illuminate\Http\Response
     */
    public function edit(Carehome $carehome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarehomeRequest  $request
     * @param  \App\Models\Carehome  $carehome
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarehomeRequest $request, Carehome $carehome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carehome  $carehome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carehome $carehome)
    {
        //
    }
}
