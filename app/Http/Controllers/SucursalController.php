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
        $sucursales = Sucursal::paginate(6);
        return view('sucursales.index', compact('sucursales'));
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
        $sucursal = Sucursal::create($request->only('name', 'email')
            + [
                'password' => bcrypt($request->input('password')),
            ]);
        return redirect()->route('sucursales.show', $sucursal->id)->with('success', 'Sucursal creada correctamente');
    }

    public function show(Sucursal $sucursal)
    {
        return view('sucursales.show', compact('sucursal'));
    }

    public function edit(Sucursal $sucursal)
    {
        return view('sucursales.edit', compact('sucursal'));
    }

    public function update(SucursalEditRequest $request, Sucursal $sucursal)
    {
        $data = $request->only('cliente_id',
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
        'correo',);

        $sucursal->update($data);
        return redirect()->route('sucursales.show', $sucursal->id)->with('success', 'Sucursal actualizada correctamente');
    }

    public function destroy(Sucursal $sucursal)
    {
        $sucursal->delete();
        return redirect()->route('sucursales.index')->with('sucess', 'sucursal eliminada correctamente');
    }
}
