<?php

namespace App\Http\Controllers;

use App\Models\Comitte;
use App\Http\Requests\StoreComitteRequest;
use App\Http\Requests\UpdateComitteRequest;

class ComitteController extends Controller
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
     * @param  \App\Http\Requests\StoreComitteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComitteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comitte  $comitte
     * @return \Illuminate\Http\Response
     */
    public function show(Comitte $comitte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comitte  $comitte
     * @return \Illuminate\Http\Response
     */
    public function edit(Comitte $comitte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComitteRequest  $request
     * @param  \App\Models\Comitte  $comitte
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComitteRequest $request, Comitte $comitte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comitte  $comitte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comitte $comitte)
    {
        //
    }
}
