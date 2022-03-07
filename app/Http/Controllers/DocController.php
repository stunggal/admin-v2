<?php

namespace App\Http\Controllers;

use App\Models\Doc;
use App\Http\Requests\StoreDocRequest;
use App\Http\Requests\UpdateDocRequest;

class DocController extends Controller
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
     * @param  \App\Http\Requests\StoreDocRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDocRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doc  $doc
     * @return \Illuminate\Http\Response
     */
    public function show(Doc $doc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doc  $doc
     * @return \Illuminate\Http\Response
     */
    public function edit(Doc $doc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDocRequest  $request
     * @param  \App\Models\Doc  $doc
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDocRequest $request, Doc $doc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doc  $doc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doc $doc)
    {
        //
    }
}
