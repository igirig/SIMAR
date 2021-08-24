<?php

namespace App\Http\Controllers;

use App\Http\Requests\SucursalCreateRequest;
use App\Http\Requests\SucursalEditRequest;
use App\Models\Sucursal;
use Illuminate\Support\Facades\DB;

class SucursalController extends Controller
{
    public function index()
    {
        $clientes = DB::table('clientes')->orderBy('id')->get();
        $sucursales = Sucursal::paginate(9);
        return view('sucursales.index', compact('sucursales', 'clientes'));
    }

    public function forStates($id)
    {
        return DB::table('municipios')->select('*')->where('estado_id', '=', $id)->orderBy('nombre')->get();
    }

    public function create()
    {
        $clientes = DB::table('clientes')->orderBy('id')->get();
        $estados = DB::table('estados')->get();
        $municipios = DB::table('municipios')->get();

        return view('sucursales.create', compact('clientes', 'estados', 'municipios'));
    }

    public function store(SucursalCreateRequest $request)
    {
        $sucursal = Sucursal::create($request->all());
        if ($sucursal->noExterior == null || $sucursal->noExterior == 'SIN NÚMERO' || $sucursal->noExterior == 'SN' || $sucursal->noExterior == 'SIN NUMERO') $sucursal->noExterior = "S/N";
        $sucursal->save();

        return redirect()->route('sucursales.show', $sucursal->id)->with('success', 'Sucursal creada correctamente');
    }

    public function show(Sucursal $sucursal)
    {
        $cliente = DB::table('clientes')->where('id', '=', $sucursal->cliente_id)->pluck('razonSocial');
        $estado = DB::table('estados')->where('id', '=', $sucursal->estado_id)->pluck('nombre');
        $municipio = DB::table('municipios')->where('id', '=', $sucursal->municipio_id)->pluck('nombre');

        return view('sucursales.show', compact('sucursal', 'cliente', 'estado', 'municipio'));
    }

    public function edit(Sucursal $sucursal)
    {
        $clientes = DB::table('clientes')->orderBy('id')->get();
        $estados = DB::table('estados')->get();
        $municipios = DB::table('municipios')->get();
        return view('sucursales.edit', compact('sucursal', 'clientes', 'estados', 'municipios'));
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
        if ($sucursal->noExterior == null || $sucursal->noExterior == 'SIN NÚMERO' || $sucursal->noExterior == 'SN' || $sucursal->noExterior == 'SIN NUMERO') $sucursal->noExterior = "S/N";
        $sucursal->save();

        return redirect()->route('sucursales.show', $sucursal->id)->with('success', 'Sucursal actualizada correctamente');
    }

    public function destroy(Sucursal $sucursal)
    {
        $sucursal->delete();
        return redirect()->route('sucursales.index')->with('sucess', 'sucursal eliminada correctamente');
    }
}
