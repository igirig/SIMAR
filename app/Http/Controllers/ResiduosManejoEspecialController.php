<?php

namespace App\Http\Controllers;

use App\Models\ResiduosManejoEspecial;
use App\Models\Transportista;
use App\Models\Planta;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Residuo;

class ResiduosManejoEspecialController extends Controller
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
        $clientes = ResiduosManejoEspecial::all(['razonSocial', 'id']);
        $transportistas = Transportista::all(['razonSocial', 'id']);
        $plantas = Planta::all(['razonSocial', 'id']);
        $residuos = Residuo::all(['nombre','id']);
        return view('manifiestos.RME', compact('clientes', 'transportistas', 'plantas', 'residuos'));
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
     * @param  \App\Models\ResiduosManejoEspecial  $residuosManejoEspecial
     * @return \Illuminate\Http\Response
     */
    public function show(ResiduosManejoEspecial $residuosManejoEspecial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResiduosManejoEspecial  $residuosManejoEspecial
     * @return \Illuminate\Http\Response
     */
    public function edit(ResiduosManejoEspecial $residuosManejoEspecial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ResiduosManejoEspecial  $residuosManejoEspecial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResiduosManejoEspecial $residuosManejoEspecial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResiduosManejoEspecial  $residuosManejoEspecial
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResiduosManejoEspecial $residuosManejoEspecial)
    {
        //
    }

    
}
