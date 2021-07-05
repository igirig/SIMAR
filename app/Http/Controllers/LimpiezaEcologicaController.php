<?php

namespace App\Http\Controllers;

use App\Models\LimpiezaEcologica;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LimpiezaEcologicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data = LimpiezaEcologica::all();
        //return view('manifiestos.LE', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = LimpiezaEcologica::all(['razonSocial', 'id']);
        return view('manifiestos.LE', compact('items'));
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
     * @param  \App\Models\LimpiezaEcologica  $limpiezaEcologica
     * @return \Illuminate\Http\Response
     */
    public function show(LimpiezaEcologica $limpiezaEcologica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LimpiezaEcologica  $limpiezaEcologica
     * @return \Illuminate\Http\Response
     */
    public function edit(LimpiezaEcologica $limpiezaEcologica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LimpiezaEcologica  $limpiezaEcologica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LimpiezaEcologica $limpiezaEcologica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LimpiezaEcologica  $limpiezaEcologica
     * @return \Illuminate\Http\Response
     */
    public function destroy(LimpiezaEcologica $limpiezaEcologica)
    {
        //
    }
}
