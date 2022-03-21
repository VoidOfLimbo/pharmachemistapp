<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CarehomeCollection;
use App\Http\Resources\CarehomeResource;
use App\Models\Carehome;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CarehomeApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carehomes = Carehome::with('status')->get();
        // dd($carehomes->toArray());
        // return CarehomeResource::collection($carehomes)->response();
        return response()->json(new CarehomeCollection($carehomes), Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carehomes = Carehome::create($request->only([
            'name', 'status_id', 'total_patients', 'week'
        ]));

        return response()->json(new CarehomeResource($carehomes), Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carehome  $carehome
     * @return \Illuminate\Http\Response
     */
    public function show(Carehome $carehome)
    {
        return response()->json(new CarehomeResource($carehome));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carehome  $carehome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carehome $carehome)
    {
        $carehome->update($request->only([
            'name', 'status_id', 'total_patients', 'week'
        ]));

        return response()->json(new CarehomeResource($carehome));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carehome  $carehome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carehome $carehome)
    {
        $carehome->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
