<?php

namespace App\Http\Controllers;

use App\Http\Requests\SucursalCreateRequest;
use App\Http\Requests\SucursalEditRequest;
use App\Models\Sucursal;
use App\Models\Estado;
use App\Models\Municipio;
use Illuminate\Support\Facades\DB;

class SucursalController extends Controller
{
    public function index()
    {
        $sucursales = Sucursal::paginate(6);
        return view('sucursales.index', compact('sucursales'));
    }

    public function forStates($id)
    {
        return DB::table('municipios')->select('*')->where('estado_id', '=', $id)->orderBy('nombre')->get();
    }

    public function create()
    {
        $clientes = DB::table('clientes')->get();
        $estados = DB::table('estados')->get();
        $municipios = DB::table('municipios')->get();

        return view('sucursales.create', compact('clientes', 'estados', 'municipios'));
    }

    public function store(SucursalCreateRequest $request)
    {
        $sucursal = Sucursal::create($request->all());

        return redirect()->route('sucursales.show', $sucursal->id)->with('success', 'Sucursal creada correctamente');
    }

    public function show(Sucursal $sucursal)
    {
        return view('sucursales.show', compact('sucursal'));
    }

    public function edit(Sucursal $sucursal)
    {
        $estados = Estado::all('nombre', 'id');
        $municipios = Municipio::all('nombre', 'id');
        return view('sucursales.edit', compact('sucursal', 'estados', 'municipios'));
    }

    public function update(SucursalEditRequest $request, Sucursal $sucursal)
    {
        $data = $request->only(
            'cliente_id',
            'nombre',
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

        $sucursal->update($data);
        return redirect()->route('sucursales.show', $sucursal->id)->with('success', 'Sucursal actualizada correctamente');
    }

    public function destroy(Sucursal $sucursal)
    {
        $sucursal->delete();
        return redirect()->route('sucursales.index')->with('sucess', 'sucursal eliminada correctamente');
    }
}
