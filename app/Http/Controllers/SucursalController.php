<?php

namespace App\Http\Controllers;

use App\Http\Requests\SucursalCreateRequest;
use App\Http\Requests\SucursalEditRequest;
use Illuminate\Http\Request;
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
        $municipios = DB::select('select * from municipios where estado_id = 1', [1]);

        return view('sucursales.create', compact('clientes', 'estados', 'municipios'));
    }

    public function store(SucursalCreateRequest $request)
    {
        $sucursal = Sucursal::create($request->only('name', 'email')
            + [
                'password' => bcrypt($request->input('password')),
            ]);
        return redirect()->route('sucursales.show', $sucursal->id)->with('success', 'sucursal creada correctamente');
    }

    public function show(Sucursal $sucursal)
    {
        $estado = DB::select('select nombre from estado where id = ?', $sucursal->id);
        return view('sucursales.show', compact('sucursal'));
    }

    public function edit(Sucursal $sucursal)
    {
        return view('sucursales.edit', compact('sucursal'));
    }

    public function update(SucursalEditRequest $request, Sucursal $sucursal)
    {
        $data = $request->only('name', 'email');
        $password = $request->input('password');
        if ($password)
            $data['password'] = bcrypt($password);

        $sucursal->update($data);
        return redirect()->route('sucursales.show', $sucursal->id)->with('success', 'sucursal actualizada correctamente');
    }

    public function destroy(Sucursal $sucursal)
    {
        $sucursal->delete();
        return redirect()->route('sucursales.index')->with('sucess', 'sucursal eliminada correctamente');
    }
}
