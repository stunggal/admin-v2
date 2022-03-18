<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Models\User;
use Illuminate\Http\Request;

class InputacaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('input-acara.index');
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
        // return $request;
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'about' => 'required',
            'executing' => '',
            'time' => '',
            'organizer' => '',
            'place' => 'required|max:255',
            'comitte' => '',
            'responsible_id' => '',
        ]);

        Acara::create($validatedData);
        // $request->session()->flash('success', 'registrasi berhasil harap login ulang');

        return redirect('/list')->with('success', 'data berhasil di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return '$request;';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acara $acara)
    {

        // return $acara;
        // Acara::destroy($acara->id);
        Acara::find(12)->delete();

        return redirect('/')->with('success', 'data berhasil dihapus');
    }
}
