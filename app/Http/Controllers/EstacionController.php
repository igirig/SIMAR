<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstacionCreateRequest;
use App\Http\Requests\EstacionEditRequest;
use App\Models\Estacion;
use Illuminate\Support\Facades\DB;

class EstacionController extends Controller
{
    public function index()
    {
        $estaciones = Estacion::paginate(6);
        return view('estaciones.index', compact('estaciones'));
    }

    public function forStates($id)
    {
        return DB::table('municipios')->select('*')->where('estado_id', '=', $id)->orderBy('nombre')->get();
    }

    public function create()
    {
        $estados = DB::table('estados')->get();
        $municipios = DB::table('municipios')->get();

        return view('estaciones.create', compact('estados', 'municipios'));
    }

    public function store(EstacionCreateRequest $request)
    {
        $estacion = Estacion::create($request->all());

        return redirect()->route('estaciones.show', $estacion->id)->with('success', 'Estacion creada correctamente');
    }

    public function show(Estacion $estacion)
    {
        $estado = DB::table('estados')->where('id', '=', $estacion->estado_id)->pluck('nombre');
        $municipio = DB::table('municipios')->where('id', '=', $estacion->municipio_id)->pluck('nombre');
        return view('estaciones.show', compact('estacion', 'estado', 'municipio'));
    }

    public function edit(Estacion $estacion)
    {
        $estados = DB::table('estados')->get();
        $municipios = DB::table('municipios')->get();
        return view('estaciones.edit', compact('estacion', 'estados', 'municipios'));
    }

    public function update(EstacionEditRequest $request, estacion $estacion)
    {

        $data = $request->only(
            'razonSocial',
            'noEstacion',
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

        $estacion->update($data);
        return redirect()->route('estaciones.show', $estacion->id)->with('success', 'Estacion actualizada correctamente');
    }

    public function destroy(Estacion $estacion)
    {
        $estacion->delete();
        return redirect()->route('estaciones.index')->with('sucess', 'Estacion eliminada correctamente');
    }
}
