<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlantaCreateRequest;
use App\Http\Requests\PlantaEditRequest;
use App\Models\Planta;
use App\Models\Estado;
use App\Models\Municipio;
use Illuminate\Support\Facades\DB;

class PlantaController extends Controller
{
    public function index()
    {
        $plantas = Planta::paginate(6);
        return view('plantas.index', compact('plantas'));
    }

    public function forStates($id)
    {
        return DB::table('municipios')->select('*')->where('estado_id', '=', $id)->orderBy('nombre')->get();
    }

    public function create()
    {
        $estados = DB::table('estados')->get();
        $municipios = DB::table('municipios')->get();

        return view('plantas.create', compact('estados', 'municipios'));
    }

    public function store(PlantaCreateRequest $request)
    {
        $planta = Planta::create($request->all());

        return redirect()->route('plantas.show', $planta->id)->with('success', 'Planta creada correctamente');
    }

    public function show(Planta $planta)
    {
        $estado = DB::table('estados')->where('id', '=', $planta->estado_id)->pluck('nombre');
        $municipio = DB::table('municipios')->where('id', '=', $planta->municipio_id)->pluck('nombre');
        return view('plantas.show', compact('planta', 'estado', 'municipio'));
    }

    public function edit(Planta $planta)
    {
        $estados = DB::table('estados')->get();
        $municipios = DB::table('municipios')->get();
        return view('plantas.edit', compact('planta', 'estados', 'municipios'));
    }

    public function update(PlantaEditRequest $request, planta $planta)
    {
        $data = $request->only(
            'razonSocial',
            'noRegistroAmbiental',
            'calle',
            'noExterior',
            'noInterior',
            'colonia',
            'codigoPostal',
            'estado_id',
            'municipio_id',
            'telefono',
            'extension',
            'correo',
        );

        $planta->update($data);
        return redirect()->route('plantas.show', $planta->id)->with('success', 'Planta actualizada correctamente');
    }

    public function destroy(Planta $planta)
    {
        $planta->delete();
        return redirect()->route('plantas.index')->with('sucess', 'Planta eliminada correctamente');
    }
}
