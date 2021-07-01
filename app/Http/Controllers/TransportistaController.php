<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransportistaCreateRequest;
use App\Http\Requests\TransportistaEditRequest;
use App\Models\Transportista;
use Illuminate\Support\Facades\DB;

class TransportistaController extends Controller
{
    public function index()
    {
        $transportistas = Transportista::paginate(6);
        return view('transportistas.index', compact('transportistas'));
    }

    public function forStates($id){
        return DB::table('municipios')->select('*')->where('estado_id', '=', $id)->orderBy('nombre')->get();
    }

    public function create()
    {
        $estados = DB::table('estados')->get();
        $municipios = DB::table('municipios')->get();

        return view('transportistas.create', compact('estados', 'municipios'));
    }

    public function store(TransportistaCreateRequest $request)
    {
        $transportista = Transportista::create($request->all());

        return redirect()->route('transportistas.show', $transportista->id)->with('success', 'Transportista creada correctamente');
    }

    public function show(Transportista $transportista)
    {
        return view('transportistas.show', compact('transportista'));
    }

    public function edit(Transportista $transportista)
    {
        return view('transportistas.edit', compact('transportista'));
    }

    public function update(TransportistaEditRequest $request, transportista $transportista)
    {

        $data = $request->only('razonSocial',
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

        $transportista->update($data);
        return redirect()->route('transportistas.show', $transportista->id)->with('success', 'Transportista actualizada correctamente');
    }

    public function destroy(Transportista $transportista)
    {
        $transportista->delete();
        return redirect()->route('transportistas.index')->with('sucess', 'Transportista eliminada correctamente');
    }
}