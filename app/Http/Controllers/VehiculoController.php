<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehiculoCreateRequest;
use App\Http\Requests\VehiculoEditRequest;
use App\Models\Vehiculo;
use App\Models\Transportista;
use App\Models\Tipo_vehiculo;
use App\Models\Capacidad_vehiculo;
use Illuminate\Support\Facades\DB;

class VehiculoController extends Controller
{
    public function index()
    {
        $vehiculos = Vehiculo::paginate(6);
        return view('vehiculos.index', compact('vehiculos'));
    }

    public function create()
    {
        $transportistas = DB::table('transportistas')->orderBy('id')->get();
        $tipos = DB::table('tipos_vehiculo')->orderBy('id')->get();
        $capacidades = DB::table('capacidades_vehiculo')->orderBy('id')->get();

        return view('vehiculos.create', compact('transportistas', 'tipos', 'capacidades'));
    }

    public function store(VehiculoCreateRequest $request)
    {
        $vehiculo = Vehiculo::create($request->all());

        return redirect()->route('vehiculos.show', $vehiculo->id)->with('success', 'Vehiculo creada correctamente');
    }

    public function show(Vehiculo $vehiculo)
    {
        return view('vehiculos.show', compact('vehiculo'));
    }

    public function edit(Vehiculo $vehiculo)
    {
        $transportistas = Transportista::all('razonSocial', 'id');
        $tipos = Tipo_vehiculo::all('nombre', 'id');
        $capacidades = Capacidad_vehiculo::all('nombre', 'id');
        return view('vehiculos.edit', compact('vehiculo', 'transportistas', 'tipos', 'capacidades'));
    }

    public function update(VehiculoEditRequest $request, vehiculo $vehiculo)
    {

        $data = $request->only('transportista_id',
        'noPermisoSCT',
        'tipo_id',
        'capacidad_id',
        'noPlaca',);

        $vehiculo->update($data);
        return redirect()->route('vehiculos.show', $vehiculo->id)->with('success', 'Vehiculo actualizada correctamente');
    }

    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->delete();
        return redirect()->route('vehiculos.index')->with('sucess', 'Vehiculo eliminada correctamente');
    }
}
