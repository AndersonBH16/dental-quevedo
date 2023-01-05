<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHistorialClinicoRequest;
use App\Http\Requests\UpdateHistorialClinicoRequest;
use App\Models\HistorialClinico;

class HistorialClinicoController extends Controller
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
     * @param  \App\Http\Requests\StoreHistorialClinicoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHistorialClinicoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HistorialClinico  $historialClinico
     * @return \Illuminate\Http\Response
     */
    public function show(HistorialClinico $historialClinico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HistorialClinico  $historialClinico
     * @return \Illuminate\Http\Response
     */
    public function edit(HistorialClinico $historialClinico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHistorialClinicoRequest  $request
     * @param  \App\Models\HistorialClinico  $historialClinico
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHistorialClinicoRequest $request, HistorialClinico $historialClinico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HistorialClinico  $historialClinico
     * @return \Illuminate\Http\Response
     */
    public function destroy(HistorialClinico $historialClinico)
    {
        //
    }
}
