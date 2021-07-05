<?php

namespace App\Http\Controllers;

use App\Models\ResiduosPeligrosos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transportista;
use App\Models\Residuo;
use App\Models\Planta;

class ResiduosPeligrososController extends Controller
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
        $plantas = Planta::all(['razonSocial', 'id']);
        $residuos = Residuo::all(['nombre','id']);
        $transportistas = Transportista::all(['razonSocial', 'id']);
        $clientes = ResiduosPeligrosos::all(['razonSocial','id']);
        
        return view('manifiestos.MRP', compact('clientes', 'transportistas', 'plantas', 'residuos'));
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
     * @param  \App\Models\ResiduosPeligrosos  $residuosPeligrosos
     * @return \Illuminate\Http\Response
     */
    public function show(ResiduosPeligrosos $residuosPeligrosos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResiduosPeligrosos  $residuosPeligrosos
     * @return \Illuminate\Http\Response
     */
    public function edit(ResiduosPeligrosos $residuosPeligrosos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ResiduosPeligrosos  $residuosPeligrosos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResiduosPeligrosos $residuosPeligrosos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResiduosPeligrosos  $residuosPeligrosos
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResiduosPeligrosos $residuosPeligrosos)
    {
        //
    }
}
